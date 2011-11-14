<?php
    /**
     * The ProductStatusType class defined here contains
     * code for the ProductStatusType enumerated type.  It represents
     * the enumerated values found in the "product_status_type" table
     * in the database.
     * 
     * To use, you should use the ProductStatusType subclass which
     * extends this ProductStatusTypeGen class.
     * 
     * Because subsequent re-code generations will overwrite any changes to this
     * file, you should leave this file unaltered to prevent yourself from losing
     * any information or code changes.  All customizations should be done by
     * overriding existing or implementing new methods, properties and variables
     * in the ProductStatusType class.
     * 
     * @package Quinta CMS
     * @subpackage GeneratedDataObjects
     */
    abstract class ProductStatusTypeGen extends QBaseClass {
        const Restricted = 1;
        const Active = 2;
        const Disabled = 3;
        const Retired = 4;

        const MaxId = 4;

        public static $NameArray = array(
            1 => 'Restricted',
            2 => 'Active',
            3 => 'Disabled',
            4 => 'Retired');

        public static $TokenArray = array(
            1 => 'Restricted',
            2 => 'Active',
            3 => 'Disabled',
            4 => 'Retired');

        public static function ToString($intProductStatusTypeId) {
            switch ($intProductStatusTypeId) {
                case 1: return 'Restricted';
                case 2: return 'Active';
                case 3: return 'Disabled';
                case 4: return 'Retired';
                default:
                    throw new QCallerException(sprintf('Invalid intProductStatusTypeId: %s', $intProductStatusTypeId));
            }
        }

        public static function ToToken($intProductStatusTypeId) {
            switch ($intProductStatusTypeId) {
                case 1: return 'Restricted';
                case 2: return 'Active';
                case 3: return 'Disabled';
                case 4: return 'Retired';
                default:
                    throw new QCallerException(sprintf('Invalid intProductStatusTypeId: %s', $intProductStatusTypeId));
            }
        }

    }
?>