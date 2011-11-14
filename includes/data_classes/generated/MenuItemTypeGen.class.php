<?php
    /**
     * The MenuItemType class defined here contains
     * code for the MenuItemType enumerated type.  It represents
     * the enumerated values found in the "menu_item_type" table
     * in the database.
     * 
     * To use, you should use the MenuItemType subclass which
     * extends this MenuItemTypeGen class.
     * 
     * Because subsequent re-code generations will overwrite any changes to this
     * file, you should leave this file unaltered to prevent yourself from losing
     * any information or code changes.  All customizations should be done by
     * overriding existing or implementing new methods, properties and variables
     * in the MenuItemType class.
     * 
     * @package Quinta CMS
     * @subpackage GeneratedDataObjects
     */
    abstract class MenuItemTypeGen extends QBaseClass {
        const ListMenuItem = 1;
        const TabMenuItem = 2;
        const BlockMenuItem = 3;
        const LinkMenuItem = 4;

        const MaxId = 4;

        public static $NameArray = array(
            1 => 'ListMenuItem',
            2 => 'TabMenuItem',
            3 => 'BlockMenuItem',
            4 => 'LinkMenuItem');

        public static $TokenArray = array(
            1 => 'ListMenuItem',
            2 => 'TabMenuItem',
            3 => 'BlockMenuItem',
            4 => 'LinkMenuItem');

        public static function ToString($intMenuItemTypeId) {
            switch ($intMenuItemTypeId) {
                case 1: return 'ListMenuItem';
                case 2: return 'TabMenuItem';
                case 3: return 'BlockMenuItem';
                case 4: return 'LinkMenuItem';
                default:
                    throw new QCallerException(sprintf('Invalid intMenuItemTypeId: %s', $intMenuItemTypeId));
            }
        }

        public static function ToToken($intMenuItemTypeId) {
            switch ($intMenuItemTypeId) {
                case 1: return 'ListMenuItem';
                case 2: return 'TabMenuItem';
                case 3: return 'BlockMenuItem';
                case 4: return 'LinkMenuItem';
                default:
                    throw new QCallerException(sprintf('Invalid intMenuItemTypeId: %s', $intMenuItemTypeId));
            }
        }

    }
?>