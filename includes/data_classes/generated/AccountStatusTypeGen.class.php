<?php
    /**
     * The AccountStatusType class defined here contains
     * code for the AccountStatusType enumerated type.  It represents
     * the enumerated values found in the "account_status_type" table
     * in the database.
     * 
     * To use, you should use the AccountStatusType subclass which
     * extends this AccountStatusTypeGen class.
     * 
     * Because subsequent re-code generations will overwrite any changes to this
     * file, you should leave this file unaltered to prevent yourself from losing
     * any information or code changes.  All customizations should be done by
     * overriding existing or implementing new methods, properties and variables
     * in the AccountStatusType class.
     * 
     * @package Quinta CMS
     * @subpackage GeneratedDataObjects
     */
    abstract class AccountStatusTypeGen extends QBaseClass {
        const Active = 1;
        const Cancelled = 2;
        const Suspended = 3;

        const MaxId = 3;

        public static $NameArray = array(
            1 => 'Active',
            2 => 'Cancelled',
            3 => 'Suspended');

        public static $TokenArray = array(
            1 => 'Active',
            2 => 'Cancelled',
            3 => 'Suspended');

        public static function ToString($intAccountStatusTypeId) {
            switch ($intAccountStatusTypeId) {
                case 1: return 'Active';
                case 2: return 'Cancelled';
                case 3: return 'Suspended';
                default:
                    throw new QCallerException(sprintf('Invalid intAccountStatusTypeId: %s', $intAccountStatusTypeId));
            }
        }

        public static function ToToken($intAccountStatusTypeId) {
            switch ($intAccountStatusTypeId) {
                case 1: return 'Active';
                case 2: return 'Cancelled';
                case 3: return 'Suspended';
                default:
                    throw new QCallerException(sprintf('Invalid intAccountStatusTypeId: %s', $intAccountStatusTypeId));
            }
        }

    }
?>