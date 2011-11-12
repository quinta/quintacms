<?php
	/**
	 * This is the installation system for Quinta CMS.
	 */

	// Include to load Quinta and Qcodo configuration ..
	require('../includes/quinta/Quinta.class.php');

	class InstallationForm extends QForm
	{
		protected $strQCodoConfigFile;
		protected $strQuintaConfigFile;
		protected $txtDatabaseAdapter;
		protected $txtDatabaseServer;
		protected $txtDatabaseName;
		protected $txtDatabaseUser;
		protected $txtDatabasePassword;
		protected $txtDatabaseAdminUser;
		protected $txtDatabaseAdminPassword;
		protected $chkCreateDatabase;
		protected $chkInstallExampleData;
		
		protected $blnFinished = false;
		
		protected $lblMessage;
		protected $btnSaveConfig;

		protected $strErrors;
		protected function Form_Create()
		{
			$this->strQCodoConfigFile = __QCODO_ROOT__ . '/includes/configuration.inc.php';
			$this->strQuintaConfigFile = __QUINTA_CORE__ . '/quinta_config.php';
			$this->txtDatabaseAdapter = new QTextBox($this);
			$this->txtDatabaseAdapter->Text = 'MySql5';
			$this->txtDatabaseAdapter->Name = Quinta::Translate('Database Adapter (Required)') . ':';
			
			$this->txtDatabaseServer = new QTextBox($this);
			$this->txtDatabaseServer->Text = 'localhost';
			$this->txtDatabaseServer->Name = Quinta::Translate('Database Server (Required)') . ':';
			
			$this->txtDatabaseName = new QTextBox($this);
			$this->txtDatabaseName->Text = 'quintacmstest';
			$this->txtDatabaseName->Name = Quinta::Translate('Database (Required)') . ':';

			$this->txtDatabaseUser = new QTextBox($this);
			$this->txtDatabaseUser->Text = 'quintadbutest';
			$this->txtDatabaseUser->Name = Quinta::Translate('Database User Name (Required)') . ':';

			$this->txtDatabasePassword = new QTextBox($this);
			$this->txtDatabasePassword->Text = 'quintadbptest';
			$this->txtDatabasePassword->Name = Quinta::Translate('Database Password (Required)') . ':';

			$this->txtDatabaseAdminPassword = new QTextBox($this);
			$this->txtDatabaseAdminPassword->Text = '';
			$this->txtDatabaseAdminPassword->Name = Quinta::Translate('Database Admin Password') . ':';
			
			$this->txtDatabaseAdminUser = new QTextBox($this);
			$this->txtDatabaseAdminUser->Text = 'root';
			$this->txtDatabaseAdminUser->Name = Quinta::Translate('Database Admin Username') . ':';

			$this->lblMessage = new QLabel($this);
			$this->lblMessage->Text = '';
			$this->lblMessage->HtmlEntities = false;
			
			$this->chkInstallExampleData = new QCheckBox($this);
			$this->chkInstallExampleData->Name = Quinta::Translate('Install Example Data? (Recommended for new users.) ') . ':';
			$this->chkInstallExampleData->Checked = true;
			$this->chkInstallExampleData->Width = '1em';
			
			$this->chkCreateDatabase = new QCheckBox($this);
			$this->chkCreateDatabase->Name = Quinta::Translate('Create Database ? (Requires Admin username and password) ') . ':';
			$this->chkCreateDatabase->Width = '1em';
			

			$this->btnSaveConfig = new QButton($this);
			$this->btnSaveConfig->Text = 'Continue';
			$this->btnSaveConfig->AddAction(new QClickEvent(), new QServerAction('btnSaveConfig_Click'));
		}

		protected function btnSaveConfig_Click($strFormId, $strControlId, $strParameter)
		{
			if($this->blnFinished)
				Quinta::Redirect(__QUINTA_SUBDIRECTORY__ . '/index.php/Home');
				
			$strOutFile = $this->strQCodoConfigFile;
			if($this->chkCreateDatabase->Checked )
				if(!$this->createDatabase())
					die($this->strErrors);
				
			if(!$this->installDatabase())
					die($this->strErrors);
	
			$this->writeConfigFile($strOutFile);
			$this->lblMessage->Text =
				'<h3>Configuration saved!</h3> <p style=" color:red; font-weight:bold;">'
				. '<strong>Security Warning:</strong> You must change the permissions on '
				. $strOutFile . ' <i>Immediately!!</i></p>'
				. '<p>On Linux/Unix use this command: <br /><pre><code> chmod go-w '
				. $strOutFile . '</code></pre></p><p style=" color:red; font-weight:bold;">'
				. '<strong>Security Warning:</strong> You must also remove the install.php links '
				. ' <i>Immediately!!</i></p>'
				. '<p>On Linux/Unix use this command: <br /><pre><code> rm '
				.  __QUINTA_ROOT__ . '/install* </code></pre></p>';
				$this->blnFinished = true;
		}
		protected function installDatabase()
		{
			if($this->chkInstallExampleData->Checked )
				$strSql = __QUINTA_CORE__ . '/quinta-with-data.sql';
			else
				$strSql = __QUINTA_CORE__ . '/quinta.sql';
			$strCommand = 'mysql -u ' . $this->txtDatabaseUser->Text
										. ' -h ' . $this->txtDatabaseServer->Text
										. ' -p' . $this->txtDatabasePassword->Text
										. ' ' . $this->txtDatabaseName->Text . ' < ' . $strSql;
			$aryErrors = array();
			$intRetval = 0;
			$blnFork =  exec($strCommand, $aryErrors, $intRetval);
			if( false === $blnFork || 0 != $intRetval )
			{
				$this->strErrors .= 'Failed to install data - command: ' . $strCommand;
				foreach($aryErrors as $strError)
					$this->strErrors .= $strError;
				return false;
			}
			return true;
		}
		protected function createDatabase()
		{
			$strCommand = 'mysql -u ' . $this->txtDatabaseAdminUser->Text
										. ' -h ' . $this->txtDatabaseServer->Text
										. " -p'" . $this->txtDatabaseAdminPassword->Text
										. "' -e ' CREATE DATABASE " . $this->txtDatabaseName->Text . ';'
										. ' GRANT ALL ON ' . $this->txtDatabaseName->Text . '.* TO '
										. $this->txtDatabaseUser->Text . ' IDENTIFIED BY "'
										. $this->txtDatabasePassword->Text . '" ;\' ' ;
			$aryErrors = array();
			$intRetval = 0;
			$blnFork =  exec($strCommand, $aryErrors, $intRetval);
			if( false === $blnFork || 0 != $intRetval )
			{
				$this->strErrors .= 'Failed to create database - command: ' . $strCommand;
				foreach($aryErrors as $strError)
					$this->strErrors .= $strError;
				return false;
			}
			return true;
		}
		
		protected function writeConfigFile($strOutFile)
		{
			$strInFile = $this->strQCodoConfigFile . '.example';
			$aryValues = array(
				"/'adapter' => '.*'/" => "'adapter' => '" . $this->txtDatabaseAdapter->Text ."'",
				"/'server' => '.*'/"  => "'server' => '" . $this->txtDatabaseServer->Text ."'",
				"/'database' => '.*'/" => "'database' => '" . $this->txtDatabaseName->Text ."'",
				"/'username' => '.*'/" => "'username' => '" . $this->txtDatabaseUser->Text ."'",
				"/'password' => '.*'/" => "'password' => '" . $this->txtDatabasePassword->Text ."'",
			);
			
			$aryFile = file($strInFile);
			foreach($aryValues as $strName => $strValue)
				$aryFile = preg_replace( $strName, $strValue, $aryFile );
			$fp = fopen($strOutFile, 'w' );
			foreach($aryFile as $strLine)
				fwrite( $fp, $strLine );
			fclose($fp);
		}      
	}

	InstallationForm::Run('InstallationForm');
?>