<?php
    /**
     * The OrderItemStatusType class defined here contains
     * code for the OrderItemStatusType enumerated type.  It represents
     * the enumerated values found in the "order_item_status_type" table
     * in the database.
     * 
     * To use, you should use the OrderItemStatusType subclass which
     * extends this OrderItemStatusTypeGen class.
     * 
     * Because subsequent re-code generations will overwrite any changes to this
     * file, you should leave this file unaltered to prevent yourself from losing
     * any information or code changes.  All customizations should be done by
     * overriding existing or implementing new methods, properties and variables
     * in the OrderItemStatusType class.
     * 
     * @package Quinta CMS
     * @subpackage GeneratedDataObjects
     */
    abstract class OrderItemStatusTypeGen extends QBaseClass {
        const Ordered = 1;
        const Processing = 2;
        const BackOrdered = 3;
        const Shipped = 4;
        const Returned = 5;
        const Cancelled = 6;
        const Internal = 7;

        const MaxId = 7;

        public static $NameArray = array(
            1 => 'Ordered',
            2 => 'Processing',
            3 => 'BackOrdered',
            4 => 'Shipped',
            5 => 'Returned',
            6 => 'Cancelled',
            7 => 'Internal');

        public static $TokenArray = array(
            1 => 'Ordered',
            2 => 'Processing',
            3 => 'BackOrdered',
            4 => 'Shipped',
            5 => 'Returned',
            6 => 'Cancelled',
            7 => 'Internal');

        public static function ToString($intOrderItemStatusTypeId) {
            switch ($intOrderItemStatusTypeId) {
                case 1: return 'Ordered';
                case 2: return 'Processing';
                case 3: return 'BackOrdered';
                case 4: return 'Shipped';
                case 5: return 'Returned';
                case 6: return 'Cancelled';
                case 7: return 'Internal';
                default:
                    throw new QCallerException(sprintf('Invalid intOrderItemStatusTypeId: %s', $intOrderItemStatusTypeId));
            }
        }

        public static function ToToken($intOrderItemStatusTypeId) {
            switch ($intOrderItemStatusTypeId) {
                case 1: return 'Ordered';
                case 2: return 'Processing';
                case 3: return 'BackOrdered';
                case 4: return 'Shipped';
                case 5: return 'Returned';
                case 6: return 'Cancelled';
                case 7: return 'Internal';
                default:
                    throw new QCallerException(sprintf('Invalid intOrderItemStatusTypeId: %s', $intOrderItemStatusTypeId));
            }
        }

    }
?>