<?php
    /**
     * The PaymentType class defined here contains
     * code for the PaymentType enumerated type.  It represents
     * the enumerated values found in the "payment_type" table
     * in the database.
     * 
     * To use, you should use the PaymentType subclass which
     * extends this PaymentTypeGen class.
     * 
     * Because subsequent re-code generations will overwrite any changes to this
     * file, you should leave this file unaltered to prevent yourself from losing
     * any information or code changes.  All customizations should be done by
     * overriding existing or implementing new methods, properties and variables
     * in the PaymentType class.
     * 
     * @package Quinta CMS
     * @subpackage GeneratedDataObjects
     */
    abstract class PaymentTypeGen extends QBaseClass {
        const Online = 1;
        const MailIn = 2;
        const Cash = 3;
        const Credit = 4;
        const GiftCertificate = 5;
        const Complimentary = 6;

        const MaxId = 6;

        public static $NameArray = array(
            1 => 'Online',
            2 => 'MailIn',
            3 => 'Cash',
            4 => 'Credit',
            5 => 'GiftCertificate',
            6 => 'Complimentary');

        public static $TokenArray = array(
            1 => 'Online',
            2 => 'MailIn',
            3 => 'Cash',
            4 => 'Credit',
            5 => 'GiftCertificate',
            6 => 'Complimentary');

        public static function ToString($intPaymentTypeId) {
            switch ($intPaymentTypeId) {
                case 1: return 'Online';
                case 2: return 'MailIn';
                case 3: return 'Cash';
                case 4: return 'Credit';
                case 5: return 'GiftCertificate';
                case 6: return 'Complimentary';
                default:
                    throw new QCallerException(sprintf('Invalid intPaymentTypeId: %s', $intPaymentTypeId));
            }
        }

        public static function ToToken($intPaymentTypeId) {
            switch ($intPaymentTypeId) {
                case 1: return 'Online';
                case 2: return 'MailIn';
                case 3: return 'Cash';
                case 4: return 'Credit';
                case 5: return 'GiftCertificate';
                case 6: return 'Complimentary';
                default:
                    throw new QCallerException(sprintf('Invalid intPaymentTypeId: %s', $intPaymentTypeId));
            }
        }

    }
?>