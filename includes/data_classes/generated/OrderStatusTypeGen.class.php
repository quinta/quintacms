<?php
    /**
     * The OrderStatusType class defined here contains
     * code for the OrderStatusType enumerated type.  It represents
     * the enumerated values found in the "order_status_type" table
     * in the database.
     * 
     * To use, you should use the OrderStatusType subclass which
     * extends this OrderStatusTypeGen class.
     * 
     * Because subsequent re-code generations will overwrite any changes to this
     * file, you should leave this file unaltered to prevent yourself from losing
     * any information or code changes.  All customizations should be done by
     * overriding existing or implementing new methods, properties and variables
     * in the OrderStatusType class.
     * 
     * @package Quinta CMS
     * @subpackage GeneratedDataObjects
     */
    abstract class OrderStatusTypeGen extends QBaseClass {
        const Shopping = 1;
        const Pending = 2;
        const Paid = 3;
        const Processing = 4;
        const Packaged = 5;
        const Shipped = 6;
        const Cancelled = 7;
        const Returned = 8;
        const Problem = 9;

        const MaxId = 9;

        public static $NameArray = array(
            1 => 'Shopping',
            2 => 'Pending',
            3 => 'Paid',
            4 => 'Processing',
            5 => 'Packaged',
            6 => 'Shipped',
            7 => 'Cancelled',
            8 => 'Returned',
            9 => 'Problem');

        public static $TokenArray = array(
            1 => 'Shopping',
            2 => 'Pending',
            3 => 'Paid',
            4 => 'Processing',
            5 => 'Packaged',
            6 => 'Shipped',
            7 => 'Cancelled',
            8 => 'Returned',
            9 => 'Problem');

        public static function ToString($intOrderStatusTypeId) {
            switch ($intOrderStatusTypeId) {
                case 1: return 'Shopping';
                case 2: return 'Pending';
                case 3: return 'Paid';
                case 4: return 'Processing';
                case 5: return 'Packaged';
                case 6: return 'Shipped';
                case 7: return 'Cancelled';
                case 8: return 'Returned';
                case 9: return 'Problem';
                default:
                    throw new QCallerException(sprintf('Invalid intOrderStatusTypeId: %s', $intOrderStatusTypeId));
            }
        }

        public static function ToToken($intOrderStatusTypeId) {
            switch ($intOrderStatusTypeId) {
                case 1: return 'Shopping';
                case 2: return 'Pending';
                case 3: return 'Paid';
                case 4: return 'Processing';
                case 5: return 'Packaged';
                case 6: return 'Shipped';
                case 7: return 'Cancelled';
                case 8: return 'Returned';
                case 9: return 'Problem';
                default:
                    throw new QCallerException(sprintf('Invalid intOrderStatusTypeId: %s', $intOrderStatusTypeId));
            }
        }

    }
?>