<?php
    /**
     * The PermissionType class defined here contains
     * code for the PermissionType enumerated type.  It represents
     * the enumerated values found in the "permission_type" table
     * in the database.
     * 
     * To use, you should use the PermissionType subclass which
     * extends this PermissionTypeGen class.
     * 
     * Because subsequent re-code generations will overwrite any changes to this
     * file, you should leave this file unaltered to prevent yourself from losing
     * any information or code changes.  All customizations should be done by
     * overriding existing or implementing new methods, properties and variables
     * in the PermissionType class.
     * 
     * @package Quinta CMS
     * @subpackage GeneratedDataObjects
     */
    abstract class PermissionTypeGen extends QBaseClass {
        const None = 1;
        const View = 2;
        const Modify = 3;
        const Delete = 4;
        const Create = 5;

        const MaxId = 5;

        public static $NameArray = array(
            1 => 'None',
            2 => 'View',
            3 => 'Modify',
            4 => 'Delete',
            5 => 'Create');

        public static $TokenArray = array(
            1 => 'None',
            2 => 'View',
            3 => 'Modify',
            4 => 'Delete',
            5 => 'Create');

        public static function ToString($intPermissionTypeId) {
            switch ($intPermissionTypeId) {
                case 1: return 'None';
                case 2: return 'View';
                case 3: return 'Modify';
                case 4: return 'Delete';
                case 5: return 'Create';
                default:
                    throw new QCallerException(sprintf('Invalid intPermissionTypeId: %s', $intPermissionTypeId));
            }
        }

        public static function ToToken($intPermissionTypeId) {
            switch ($intPermissionTypeId) {
                case 1: return 'None';
                case 2: return 'View';
                case 3: return 'Modify';
                case 4: return 'Delete';
                case 5: return 'Create';
                default:
                    throw new QCallerException(sprintf('Invalid intPermissionTypeId: %s', $intPermissionTypeId));
            }
        }

    }
?>