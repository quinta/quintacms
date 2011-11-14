<?php
    /**
     * The OrderType class defined here contains
     * code for the OrderType enumerated type.  It represents
     * the enumerated values found in the "order_type" table
     * in the database.
     * 
     * To use, you should use the OrderType subclass which
     * extends this OrderTypeGen class.
     * 
     * Because subsequent re-code generations will overwrite any changes to this
     * file, you should leave this file unaltered to prevent yourself from losing
     * any information or code changes.  All customizations should be done by
     * overriding existing or implementing new methods, properties and variables
     * in the OrderType class.
     * 
     * @package Quinta CMS
     * @subpackage GeneratedDataObjects
     */
    abstract class OrderTypeGen extends QBaseClass {
        const Normal = 1;
        const Internal = 2;
        const Employee = 3;
        const Affiliate = 4;

        const MaxId = 4;

        public static $NameArray = array(
            1 => 'Normal',
            2 => 'Internal',
            3 => 'Employee',
            4 => 'Affiliate');

        public static $TokenArray = array(
            1 => 'Normal',
            2 => 'Internal',
            3 => 'Employee',
            4 => 'Affiliate');

        public static function ToString($intOrderTypeId) {
            switch ($intOrderTypeId) {
                case 1: return 'Normal';
                case 2: return 'Internal';
                case 3: return 'Employee';
                case 4: return 'Affiliate';
                default:
                    throw new QCallerException(sprintf('Invalid intOrderTypeId: %s', $intOrderTypeId));
            }
        }

        public static function ToToken($intOrderTypeId) {
            switch ($intOrderTypeId) {
                case 1: return 'Normal';
                case 2: return 'Internal';
                case 3: return 'Employee';
                case 4: return 'Affiliate';
                default:
                    throw new QCallerException(sprintf('Invalid intOrderTypeId: %s', $intOrderTypeId));
            }
        }

    }
?>