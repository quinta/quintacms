<?php
    /**
     * The PageType class defined here contains
     * code for the PageType enumerated type.  It represents
     * the enumerated values found in the "page_type" table
     * in the database.
     * 
     * To use, you should use the PageType subclass which
     * extends this PageTypeGen class.
     * 
     * Because subsequent re-code generations will overwrite any changes to this
     * file, you should leave this file unaltered to prevent yourself from losing
     * any information or code changes.  All customizations should be done by
     * overriding existing or implementing new methods, properties and variables
     * in the PageType class.
     * 
     * @package Quinta CMS
     * @subpackage GeneratedDataObjects
     */
    abstract class PageTypeGen extends QBaseClass {
        const Basic = 1;
        const Home = 2;
        const Login = 3;
        const UserHome = 4;
        const EditContactInfo = 5;
        const EditUsers = 6;
        const Product = 7;
        const ProductList = 8;
        const ShoppingCartView = 9;
        const Checkout = 10;
        const Payment = 11;
        const ShippingInfo = 12;
        const OrderHistory = 13;
        const Forum = 14;
        const ForumList = 15;
        const Article = 16;
        const ArticleList = 17;
        const Admin = 18;

        const MaxId = 18;

        public static $NameArray = array(
            1 => 'Basic',
            2 => 'Home',
            3 => 'Login',
            4 => 'UserHome',
            5 => 'EditContactInfo',
            6 => 'EditUsers',
            7 => 'Product',
            8 => 'ProductList',
            9 => 'ShoppingCartView',
            10 => 'Checkout',
            11 => 'Payment',
            12 => 'ShippingInfo',
            13 => 'OrderHistory',
            14 => 'Forum',
            15 => 'ForumList',
            16 => 'Article',
            17 => 'ArticleList',
            18 => 'Admin');

        public static $TokenArray = array(
            1 => 'Basic',
            2 => 'Home',
            3 => 'Login',
            4 => 'UserHome',
            5 => 'EditContactInfo',
            6 => 'EditUsers',
            7 => 'Product',
            8 => 'ProductList',
            9 => 'ShoppingCartView',
            10 => 'Checkout',
            11 => 'Payment',
            12 => 'ShippingInfo',
            13 => 'OrderHistory',
            14 => 'Forum',
            15 => 'ForumList',
            16 => 'Article',
            17 => 'ArticleList',
            18 => 'Admin');

        public static function ToString($intPageTypeId) {
            switch ($intPageTypeId) {
                case 1: return 'Basic';
                case 2: return 'Home';
                case 3: return 'Login';
                case 4: return 'UserHome';
                case 5: return 'EditContactInfo';
                case 6: return 'EditUsers';
                case 7: return 'Product';
                case 8: return 'ProductList';
                case 9: return 'ShoppingCartView';
                case 10: return 'Checkout';
                case 11: return 'Payment';
                case 12: return 'ShippingInfo';
                case 13: return 'OrderHistory';
                case 14: return 'Forum';
                case 15: return 'ForumList';
                case 16: return 'Article';
                case 17: return 'ArticleList';
                case 18: return 'Admin';
                default:
                    throw new QCallerException(sprintf('Invalid intPageTypeId: %s', $intPageTypeId));
            }
        }

        public static function ToToken($intPageTypeId) {
            switch ($intPageTypeId) {
                case 1: return 'Basic';
                case 2: return 'Home';
                case 3: return 'Login';
                case 4: return 'UserHome';
                case 5: return 'EditContactInfo';
                case 6: return 'EditUsers';
                case 7: return 'Product';
                case 8: return 'ProductList';
                case 9: return 'ShoppingCartView';
                case 10: return 'Checkout';
                case 11: return 'Payment';
                case 12: return 'ShippingInfo';
                case 13: return 'OrderHistory';
                case 14: return 'Forum';
                case 15: return 'ForumList';
                case 16: return 'Article';
                case 17: return 'ArticleList';
                case 18: return 'Admin';
                default:
                    throw new QCallerException(sprintf('Invalid intPageTypeId: %s', $intPageTypeId));
            }
        }

    }
?>