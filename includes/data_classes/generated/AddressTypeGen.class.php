<?php
    /**
     * The AddressType class defined here contains
     * code for the AddressType enumerated type.  It represents
     * the enumerated values found in the "address_type" table
     * in the database.
     * 
     * To use, you should use the AddressType subclass which
     * extends this AddressTypeGen class.
     * 
     * Because subsequent re-code generations will overwrite any changes to this
     * file, you should leave this file unaltered to prevent yourself from losing
     * any information or code changes.  All customizations should be done by
     * overriding existing or implementing new methods, properties and variables
     * in the AddressType class.
     * 
     * @package Quinta CMS
     * @subpackage GeneratedDataObjects
     */
    abstract class AddressTypeGen extends QBaseClass {
        const Primary = 1;
        const Shipping = 2;
        const Billing = 3;
        const Company = 4;
        const Friend = 5;
        const Manufacturer = 6;
        const Supplier = 7;
        const Historical = 8;

        const MaxId = 8;

        public static $NameArray = array(
            1 => 'Primary',
            2 => 'Shipping',
            3 => 'Billing',
            4 => 'Company',
            5 => 'Friend',
            6 => 'Manufacturer',
            7 => 'Supplier',
            8 => 'Historical');

        public static $TokenArray = array(
            1 => 'Primary',
            2 => 'Shipping',
            3 => 'Billing',
            4 => 'Company',
            5 => 'Friend',
            6 => 'Manufacturer',
            7 => 'Supplier',
            8 => 'Historical');

        public static function ToString($intAddressTypeId) {
            switch ($intAddressTypeId) {
                case 1: return 'Primary';
                case 2: return 'Shipping';
                case 3: return 'Billing';
                case 4: return 'Company';
                case 5: return 'Friend';
                case 6: return 'Manufacturer';
                case 7: return 'Supplier';
                case 8: return 'Historical';
                default:
                    throw new QCallerException(sprintf('Invalid intAddressTypeId: %s', $intAddressTypeId));
            }
        }

        public static function ToToken($intAddressTypeId) {
            switch ($intAddressTypeId) {
                case 1: return 'Primary';
                case 2: return 'Shipping';
                case 3: return 'Billing';
                case 4: return 'Company';
                case 5: return 'Friend';
                case 6: return 'Manufacturer';
                case 7: return 'Supplier';
                case 8: return 'Historical';
                default:
                    throw new QCallerException(sprintf('Invalid intAddressTypeId: %s', $intAddressTypeId));
            }
        }

    }
?>