<?php
    /**
     * The OrderAddressType class defined here contains
     * code for the OrderAddressType enumerated type.  It represents
     * the enumerated values found in the "order_address_type" table
     * in the database.
     * 
     * To use, you should use the OrderAddressType subclass which
     * extends this OrderAddressTypeGen class.
     * 
     * Because subsequent re-code generations will overwrite any changes to this
     * file, you should leave this file unaltered to prevent yourself from losing
     * any information or code changes.  All customizations should be done by
     * overriding existing or implementing new methods, properties and variables
     * in the OrderAddressType class.
     * 
     * @package Quinta CMS
     * @subpackage GeneratedDataObjects
     */
    abstract class OrderAddressTypeGen extends QBaseClass {
        const Billing = 1;
        const Shipping = 2;
        const Historical = 3;

        const MaxId = 3;

        public static $NameArray = array(
            1 => 'Billing',
            2 => 'Shipping',
            3 => 'Historical');

        public static $TokenArray = array(
            1 => 'Billing',
            2 => 'Shipping',
            3 => 'Historical');

        public static function ToString($intOrderAddressTypeId) {
            switch ($intOrderAddressTypeId) {
                case 1: return 'Billing';
                case 2: return 'Shipping';
                case 3: return 'Historical';
                default:
                    throw new QCallerException(sprintf('Invalid intOrderAddressTypeId: %s', $intOrderAddressTypeId));
            }
        }

        public static function ToToken($intOrderAddressTypeId) {
            switch ($intOrderAddressTypeId) {
                case 1: return 'Billing';
                case 2: return 'Shipping';
                case 3: return 'Historical';
                default:
                    throw new QCallerException(sprintf('Invalid intOrderAddressTypeId: %s', $intOrderAddressTypeId));
            }
        }

    }
?>