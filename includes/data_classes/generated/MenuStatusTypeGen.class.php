<?php
    /**
     * The MenuStatusType class defined here contains
     * code for the MenuStatusType enumerated type.  It represents
     * the enumerated values found in the "menu_status_type" table
     * in the database.
     * 
     * To use, you should use the MenuStatusType subclass which
     * extends this MenuStatusTypeGen class.
     * 
     * Because subsequent re-code generations will overwrite any changes to this
     * file, you should leave this file unaltered to prevent yourself from losing
     * any information or code changes.  All customizations should be done by
     * overriding existing or implementing new methods, properties and variables
     * in the MenuStatusType class.
     * 
     * @package Quinta CMS
     * @subpackage GeneratedDataObjects
     */
    abstract class MenuStatusTypeGen extends QBaseClass {
        const Active = 1;
        const Disabled = 2;

        const MaxId = 2;

        public static $NameArray = array(
            1 => 'Active',
            2 => 'Disabled');

        public static $TokenArray = array(
            1 => 'Active',
            2 => 'Disabled');

        public static function ToString($intMenuStatusTypeId) {
            switch ($intMenuStatusTypeId) {
                case 1: return 'Active';
                case 2: return 'Disabled';
                default:
                    throw new QCallerException(sprintf('Invalid intMenuStatusTypeId: %s', $intMenuStatusTypeId));
            }
        }

        public static function ToToken($intMenuStatusTypeId) {
            switch ($intMenuStatusTypeId) {
                case 1: return 'Active';
                case 2: return 'Disabled';
                default:
                    throw new QCallerException(sprintf('Invalid intMenuStatusTypeId: %s', $intMenuStatusTypeId));
            }
        }

    }
?>