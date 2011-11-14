<?php
    /**
     * The MenuType class defined here contains
     * code for the MenuType enumerated type.  It represents
     * the enumerated values found in the "menu_type" table
     * in the database.
     * 
     * To use, you should use the MenuType subclass which
     * extends this MenuTypeGen class.
     * 
     * Because subsequent re-code generations will overwrite any changes to this
     * file, you should leave this file unaltered to prevent yourself from losing
     * any information or code changes.  All customizations should be done by
     * overriding existing or implementing new methods, properties and variables
     * in the MenuType class.
     * 
     * @package Quinta CMS
     * @subpackage GeneratedDataObjects
     */
    abstract class MenuTypeGen extends QBaseClass {
        const SideBar = 1;
        const Header = 2;
        const Tabbed = 3;
        const Footer = 4;

        const MaxId = 4;

        public static $NameArray = array(
            1 => 'SideBar',
            2 => 'Header',
            3 => 'Tabbed',
            4 => 'Footer');

        public static $TokenArray = array(
            1 => 'SideBar',
            2 => 'Header',
            3 => 'Tabbed',
            4 => 'Footer');

        public static function ToString($intMenuTypeId) {
            switch ($intMenuTypeId) {
                case 1: return 'SideBar';
                case 2: return 'Header';
                case 3: return 'Tabbed';
                case 4: return 'Footer';
                default:
                    throw new QCallerException(sprintf('Invalid intMenuTypeId: %s', $intMenuTypeId));
            }
        }

        public static function ToToken($intMenuTypeId) {
            switch ($intMenuTypeId) {
                case 1: return 'SideBar';
                case 2: return 'Header';
                case 3: return 'Tabbed';
                case 4: return 'Footer';
                default:
                    throw new QCallerException(sprintf('Invalid intMenuTypeId: %s', $intMenuTypeId));
            }
        }

    }
?>