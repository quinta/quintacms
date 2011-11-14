<?php
    /**
     * The OrderChangeType class defined here contains
     * code for the OrderChangeType enumerated type.  It represents
     * the enumerated values found in the "order_change_type" table
     * in the database.
     * 
     * To use, you should use the OrderChangeType subclass which
     * extends this OrderChangeTypeGen class.
     * 
     * Because subsequent re-code generations will overwrite any changes to this
     * file, you should leave this file unaltered to prevent yourself from losing
     * any information or code changes.  All customizations should be done by
     * overriding existing or implementing new methods, properties and variables
     * in the OrderChangeType class.
     * 
     * @package Quinta CMS
     * @subpackage GeneratedDataObjects
     */
    abstract class OrderChangeTypeGen extends QBaseClass {
        const Refund = 1;
        const OrderDiscount = 2;
        const ItemDiscount = 3;
        const ItemQuantity = 4;
        const ItemAddition = 5;
        const ShippingAddition = 6;

        const MaxId = 6;

        public static $NameArray = array(
            1 => 'Refund',
            2 => 'OrderDiscount',
            3 => 'ItemDiscount',
            4 => 'ItemQuantity',
            5 => 'ItemAddition',
            6 => 'ShippingAddition');

        public static $TokenArray = array(
            1 => 'Refund',
            2 => 'OrderDiscount',
            3 => 'ItemDiscount',
            4 => 'ItemQuantity',
            5 => 'ItemAddition',
            6 => 'ShippingAddition');

        public static function ToString($intOrderChangeTypeId) {
            switch ($intOrderChangeTypeId) {
                case 1: return 'Refund';
                case 2: return 'OrderDiscount';
                case 3: return 'ItemDiscount';
                case 4: return 'ItemQuantity';
                case 5: return 'ItemAddition';
                case 6: return 'ShippingAddition';
                default:
                    throw new QCallerException(sprintf('Invalid intOrderChangeTypeId: %s', $intOrderChangeTypeId));
            }
        }

        public static function ToToken($intOrderChangeTypeId) {
            switch ($intOrderChangeTypeId) {
                case 1: return 'Refund';
                case 2: return 'OrderDiscount';
                case 3: return 'ItemDiscount';
                case 4: return 'ItemQuantity';
                case 5: return 'ItemAddition';
                case 6: return 'ShippingAddition';
                default:
                    throw new QCallerException(sprintf('Invalid intOrderChangeTypeId: %s', $intOrderChangeTypeId));
            }
        }

    }
?>