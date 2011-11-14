<?php
    /**
     * The BlockLocationType class defined here contains
     * code for the BlockLocationType enumerated type.  It represents
     * the enumerated values found in the "block_location_type" table
     * in the database.
     * 
     * To use, you should use the BlockLocationType subclass which
     * extends this BlockLocationTypeGen class.
     * 
     * Because subsequent re-code generations will overwrite any changes to this
     * file, you should leave this file unaltered to prevent yourself from losing
     * any information or code changes.  All customizations should be done by
     * overriding existing or implementing new methods, properties and variables
     * in the BlockLocationType class.
     * 
     * @package Quinta CMS
     * @subpackage GeneratedDataObjects
     */
    abstract class BlockLocationTypeGen extends QBaseClass {
        const PageHeader = 1;
        const PageFooter = 2;
        const RightPanel = 3;
        const CenterPanel = 4;
        const LeftPanel = 5;
        const ExtraPanel1 = 6;
        const ExtraPanel2 = 7;
        const ExtraPanel3 = 8;
        const ExtraPanel4 = 9;
        const PageBody = 10;

        const MaxId = 10;

        public static $NameArray = array(
            1 => 'PageHeader',
            2 => 'PageFooter',
            3 => 'RightPanel',
            4 => 'CenterPanel',
            5 => 'LeftPanel',
            6 => 'ExtraPanel1',
            7 => 'ExtraPanel2',
            8 => 'ExtraPanel3',
            9 => 'ExtraPanel4',
            10 => 'PageBody');

        public static $TokenArray = array(
            1 => 'PageHeader',
            2 => 'PageFooter',
            3 => 'RightPanel',
            4 => 'CenterPanel',
            5 => 'LeftPanel',
            6 => 'ExtraPanel1',
            7 => 'ExtraPanel2',
            8 => 'ExtraPanel3',
            9 => 'ExtraPanel4',
            10 => 'PageBody');

        public static function ToString($intBlockLocationTypeId) {
            switch ($intBlockLocationTypeId) {
                case 1: return 'PageHeader';
                case 2: return 'PageFooter';
                case 3: return 'RightPanel';
                case 4: return 'CenterPanel';
                case 5: return 'LeftPanel';
                case 6: return 'ExtraPanel1';
                case 7: return 'ExtraPanel2';
                case 8: return 'ExtraPanel3';
                case 9: return 'ExtraPanel4';
                case 10: return 'PageBody';
                default:
                    throw new QCallerException(sprintf('Invalid intBlockLocationTypeId: %s', $intBlockLocationTypeId));
            }
        }

        public static function ToToken($intBlockLocationTypeId) {
            switch ($intBlockLocationTypeId) {
                case 1: return 'PageHeader';
                case 2: return 'PageFooter';
                case 3: return 'RightPanel';
                case 4: return 'CenterPanel';
                case 5: return 'LeftPanel';
                case 6: return 'ExtraPanel1';
                case 7: return 'ExtraPanel2';
                case 8: return 'ExtraPanel3';
                case 9: return 'ExtraPanel4';
                case 10: return 'PageBody';
                default:
                    throw new QCallerException(sprintf('Invalid intBlockLocationTypeId: %s', $intBlockLocationTypeId));
            }
        }

    }
?>