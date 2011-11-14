<?php
    /**
     * The ContentStatusType class defined here contains
     * code for the ContentStatusType enumerated type.  It represents
     * the enumerated values found in the "content_status_type" table
     * in the database.
     * 
     * To use, you should use the ContentStatusType subclass which
     * extends this ContentStatusTypeGen class.
     * 
     * Because subsequent re-code generations will overwrite any changes to this
     * file, you should leave this file unaltered to prevent yourself from losing
     * any information or code changes.  All customizations should be done by
     * overriding existing or implementing new methods, properties and variables
     * in the ContentStatusType class.
     * 
     * @package Quinta CMS
     * @subpackage GeneratedDataObjects
     */
    abstract class ContentStatusTypeGen extends QBaseClass {
        const Published = 1;
        const Unpublished = 2;
        const Draft = 3;
        const Internal = 4;

        const MaxId = 4;

        public static $NameArray = array(
            1 => 'Published',
            2 => 'Unpublished',
            3 => 'Draft',
            4 => 'Internal');

        public static $TokenArray = array(
            1 => 'Published',
            2 => 'Unpublished',
            3 => 'Draft',
            4 => 'Internal');

        public static function ToString($intContentStatusTypeId) {
            switch ($intContentStatusTypeId) {
                case 1: return 'Published';
                case 2: return 'Unpublished';
                case 3: return 'Draft';
                case 4: return 'Internal';
                default:
                    throw new QCallerException(sprintf('Invalid intContentStatusTypeId: %s', $intContentStatusTypeId));
            }
        }

        public static function ToToken($intContentStatusTypeId) {
            switch ($intContentStatusTypeId) {
                case 1: return 'Published';
                case 2: return 'Unpublished';
                case 3: return 'Draft';
                case 4: return 'Internal';
                default:
                    throw new QCallerException(sprintf('Invalid intContentStatusTypeId: %s', $intContentStatusTypeId));
            }
        }

    }
?>