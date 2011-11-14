<?php
    /**
     * The ContentType class defined here contains
     * code for the ContentType enumerated type.  It represents
     * the enumerated values found in the "content_type" table
     * in the database.
     * 
     * To use, you should use the ContentType subclass which
     * extends this ContentTypeGen class.
     * 
     * Because subsequent re-code generations will overwrite any changes to this
     * file, you should leave this file unaltered to prevent yourself from losing
     * any information or code changes.  All customizations should be done by
     * overriding existing or implementing new methods, properties and variables
     * in the ContentType class.
     * 
     * @package Quinta CMS
     * @subpackage GeneratedDataObjects
     */
    abstract class ContentTypeGen extends QBaseClass {
        const PageBody = 1;
        const Article = 2;
        const Product = 3;
        const Image = 4;
        const Video = 5;
        const Audio = 6;
        const Comment = 7;
        const ForumPost = 8;
        const BlogPost = 9;
        const Description = 10;

        const MaxId = 10;

        public static $NameArray = array(
            1 => 'PageBody',
            2 => 'Article',
            3 => 'Product',
            4 => 'Image',
            5 => 'Video',
            6 => 'Audio',
            7 => 'Comment',
            8 => 'ForumPost',
            9 => 'BlogPost',
            10 => 'Description');

        public static $TokenArray = array(
            1 => 'PageBody',
            2 => 'Article',
            3 => 'Product',
            4 => 'Image',
            5 => 'Video',
            6 => 'Audio',
            7 => 'Comment',
            8 => 'ForumPost',
            9 => 'BlogPost',
            10 => 'Description');

        public static function ToString($intContentTypeId) {
            switch ($intContentTypeId) {
                case 1: return 'PageBody';
                case 2: return 'Article';
                case 3: return 'Product';
                case 4: return 'Image';
                case 5: return 'Video';
                case 6: return 'Audio';
                case 7: return 'Comment';
                case 8: return 'ForumPost';
                case 9: return 'BlogPost';
                case 10: return 'Description';
                default:
                    throw new QCallerException(sprintf('Invalid intContentTypeId: %s', $intContentTypeId));
            }
        }

        public static function ToToken($intContentTypeId) {
            switch ($intContentTypeId) {
                case 1: return 'PageBody';
                case 2: return 'Article';
                case 3: return 'Product';
                case 4: return 'Image';
                case 5: return 'Video';
                case 6: return 'Audio';
                case 7: return 'Comment';
                case 8: return 'ForumPost';
                case 9: return 'BlogPost';
                case 10: return 'Description';
                default:
                    throw new QCallerException(sprintf('Invalid intContentTypeId: %s', $intContentTypeId));
            }
        }

    }
?>