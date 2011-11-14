<?php
    /**
     * The ImageSizeType class defined here contains
     * code for the ImageSizeType enumerated type.  It represents
     * the enumerated values found in the "image_size_type" table
     * in the database.
     * 
     * To use, you should use the ImageSizeType subclass which
     * extends this ImageSizeTypeGen class.
     * 
     * Because subsequent re-code generations will overwrite any changes to this
     * file, you should leave this file unaltered to prevent yourself from losing
     * any information or code changes.  All customizations should be done by
     * overriding existing or implementing new methods, properties and variables
     * in the ImageSizeType class.
     * 
     * @package Quinta CMS
     * @subpackage GeneratedDataObjects
     */
    abstract class ImageSizeTypeGen extends QBaseClass {
        const Icon = 1;
        const Thumb = 2;
        const Small = 3;
        const Medium = 4;
        const Large = 5;
        const FullScreen = 6;
        const Intergalactic = 7;

        const MaxId = 7;

        public static $NameArray = array(
            1 => 'Icon',
            2 => 'Thumb',
            3 => 'Small',
            4 => 'Medium',
            5 => 'Large',
            6 => 'FullScreen',
            7 => 'Intergalactic');

        public static $TokenArray = array(
            1 => 'Icon',
            2 => 'Thumb',
            3 => 'Small',
            4 => 'Medium',
            5 => 'Large',
            6 => 'FullScreen',
            7 => 'Intergalactic');

        public static function ToString($intImageSizeTypeId) {
            switch ($intImageSizeTypeId) {
                case 1: return 'Icon';
                case 2: return 'Thumb';
                case 3: return 'Small';
                case 4: return 'Medium';
                case 5: return 'Large';
                case 6: return 'FullScreen';
                case 7: return 'Intergalactic';
                default:
                    throw new QCallerException(sprintf('Invalid intImageSizeTypeId: %s', $intImageSizeTypeId));
            }
        }

        public static function ToToken($intImageSizeTypeId) {
            switch ($intImageSizeTypeId) {
                case 1: return 'Icon';
                case 2: return 'Thumb';
                case 3: return 'Small';
                case 4: return 'Medium';
                case 5: return 'Large';
                case 6: return 'FullScreen';
                case 7: return 'Intergalactic';
                default:
                    throw new QCallerException(sprintf('Invalid intImageSizeTypeId: %s', $intImageSizeTypeId));
            }
        }

    }
?>