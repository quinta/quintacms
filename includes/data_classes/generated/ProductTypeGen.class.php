<?php
    /**
     * The ProductType class defined here contains
     * code for the ProductType enumerated type.  It represents
     * the enumerated values found in the "product_type" table
     * in the database.
     * 
     * To use, you should use the ProductType subclass which
     * extends this ProductTypeGen class.
     * 
     * Because subsequent re-code generations will overwrite any changes to this
     * file, you should leave this file unaltered to prevent yourself from losing
     * any information or code changes.  All customizations should be done by
     * overriding existing or implementing new methods, properties and variables
     * in the ProductType class.
     * 
     * @package Quinta CMS
     * @subpackage GeneratedDataObjects
     */
    abstract class ProductTypeGen extends QBaseClass {
        const Service = 1;
        const Storefront = 2;
        const Internal = 3;
        const Assembly = 4;
        const Download = 5;
        const Virtual = 6;
        const Other = 7;

        const MaxId = 7;

        public static $NameArray = array(
            1 => 'Service',
            2 => 'Storefront',
            3 => 'Internal',
            4 => 'Assembly',
            5 => 'Download',
            6 => 'Virtual',
            7 => 'Other');

        public static $TokenArray = array(
            1 => 'Service',
            2 => 'Storefront',
            3 => 'Internal',
            4 => 'Assembly',
            5 => 'Download',
            6 => 'Virtual',
            7 => 'Other');

        public static function ToString($intProductTypeId) {
            switch ($intProductTypeId) {
                case 1: return 'Service';
                case 2: return 'Storefront';
                case 3: return 'Internal';
                case 4: return 'Assembly';
                case 5: return 'Download';
                case 6: return 'Virtual';
                case 7: return 'Other';
                default:
                    throw new QCallerException(sprintf('Invalid intProductTypeId: %s', $intProductTypeId));
            }
        }

        public static function ToToken($intProductTypeId) {
            switch ($intProductTypeId) {
                case 1: return 'Service';
                case 2: return 'Storefront';
                case 3: return 'Internal';
                case 4: return 'Assembly';
                case 5: return 'Download';
                case 6: return 'Virtual';
                case 7: return 'Other';
                default:
                    throw new QCallerException(sprintf('Invalid intProductTypeId: %s', $intProductTypeId));
            }
        }

    }
?>