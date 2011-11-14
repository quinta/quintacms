<?php
    /**
     * The AccountType class defined here contains
     * code for the AccountType enumerated type.  It represents
     * the enumerated values found in the "account_type" table
     * in the database.
     * 
     * To use, you should use the AccountType subclass which
     * extends this AccountTypeGen class.
     * 
     * Because subsequent re-code generations will overwrite any changes to this
     * file, you should leave this file unaltered to prevent yourself from losing
     * any information or code changes.  All customizations should be done by
     * overriding existing or implementing new methods, properties and variables
     * in the AccountType class.
     * 
     * @package Quinta CMS
     * @subpackage GeneratedDataObjects
     */
    abstract class AccountTypeGen extends QBaseClass {
        const Member = 1;
        const Customer = 2;
        const Employee = 3;
        const Administrator = 4;
        const Supplier = 5;
        const Manufacturer = 6;

        const MaxId = 6;

        public static $NameArray = array(
            1 => 'Member',
            2 => 'Customer',
            3 => 'Employee',
            4 => 'Administrator',
            5 => 'Supplier',
            6 => 'Manufacturer');

        public static $TokenArray = array(
            1 => 'Member',
            2 => 'Customer',
            3 => 'Employee',
            4 => 'Administrator',
            5 => 'Supplier',
            6 => 'Manufacturer');

        public static function ToString($intAccountTypeId) {
            switch ($intAccountTypeId) {
                case 1: return 'Member';
                case 2: return 'Customer';
                case 3: return 'Employee';
                case 4: return 'Administrator';
                case 5: return 'Supplier';
                case 6: return 'Manufacturer';
                default:
                    throw new QCallerException(sprintf('Invalid intAccountTypeId: %s', $intAccountTypeId));
            }
        }

        public static function ToToken($intAccountTypeId) {
            switch ($intAccountTypeId) {
                case 1: return 'Member';
                case 2: return 'Customer';
                case 3: return 'Employee';
                case 4: return 'Administrator';
                case 5: return 'Supplier';
                case 6: return 'Manufacturer';
                default:
                    throw new QCallerException(sprintf('Invalid intAccountTypeId: %s', $intAccountTypeId));
            }
        }

    }
?>