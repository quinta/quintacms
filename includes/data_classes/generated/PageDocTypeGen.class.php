<?php
    /**
     * The PageDocType class defined here contains
     * code for the PageDocType enumerated type.  It represents
     * the enumerated values found in the "page_doc_type" table
     * in the database.
     * 
     * To use, you should use the PageDocType subclass which
     * extends this PageDocTypeGen class.
     * 
     * Because subsequent re-code generations will overwrite any changes to this
     * file, you should leave this file unaltered to prevent yourself from losing
     * any information or code changes.  All customizations should be done by
     * overriding existing or implementing new methods, properties and variables
     * in the PageDocType class.
     * 
     * @package Quinta CMS
     * @subpackage GeneratedDataObjects
     */
    abstract class PageDocTypeGen extends QBaseClass {
        const DOCTYPEhtmlPUBLICW3CDTDXHTML10TransitionalENhttpwwww3orgTRxhtml1DTDxhtml1transitionaldtd = 1;
        const PDF = 2;
        const TEXT = 3;
        const RSS = 4;
        const DOCTYPEHTMLPUBLICW3CDTDHTML401ENhttpwwww3orgTRhtml4strictdtd = 5;
        const DOCTYPEHTMLPUBLICW3CDTDHTML401TransitionalENhttpwwww3orgTRhtml4loosedtd = 6;
        const DOCTYPEHTMLPUBLICW3CDTDHTML401FramesetENhttpwwww3orgTRhtml4framesetdtd = 7;
        const DOCTYPEHTMLPUBLICW3CDTDXHTML10StrictENhttpwwww3orgTRxhtml1DTDxhtml1strictdtd = 8;
        const DOCTYPEHTMLPUBLICW3CDTDXHTML10FramesetENhttpwwww3orgTRxhtml1DTDxhtml1framesetdtd = 9;
        const DOCTYPEHTMLPUBLICW3CDTDXHTML11ENhttpwwww3orgTRxhtml11DTDxhtml11dtd = 10;
        const DOCTYPEHTMLPUBLICWAPFORUMDTDXHTMLMobile10ENhttpwwwwapforumorgDTDxhtmlmobile10dtd = 11;
        const DOCTYPEHTMLPUBLICWAPFORUMDTDXHTMLMobile11ENhttpwwwopenmobileallianceorgtechDTDxhtmlmobile11dtd = 12;

        const MaxId = 12;

        public static $NameArray = array(
            1 => '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">',
            2 => 'PDF',
            3 => 'TEXT',
            4 => 'RSS',
            5 => '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">',
            6 => '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">',
            7 => '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">',
            8 => '<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">',
            9 => '<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">',
            10 => '<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">',
            11 => '<!DOCTYPE HTML PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">',
            12 => '<!DOCTYPE HTML PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.1//EN" "http://www.openmobilealliance.org/tech/DTD/xhtml-mobile11.dtd">');

        public static $TokenArray = array(
            1 => 'DOCTYPEhtmlPUBLICW3CDTDXHTML10TransitionalENhttpwwww3orgTRxhtml1DTDxhtml1transitionaldtd',
            2 => 'PDF',
            3 => 'TEXT',
            4 => 'RSS',
            5 => 'DOCTYPEHTMLPUBLICW3CDTDHTML401ENhttpwwww3orgTRhtml4strictdtd',
            6 => 'DOCTYPEHTMLPUBLICW3CDTDHTML401TransitionalENhttpwwww3orgTRhtml4loosedtd',
            7 => 'DOCTYPEHTMLPUBLICW3CDTDHTML401FramesetENhttpwwww3orgTRhtml4framesetdtd',
            8 => 'DOCTYPEHTMLPUBLICW3CDTDXHTML10StrictENhttpwwww3orgTRxhtml1DTDxhtml1strictdtd',
            9 => 'DOCTYPEHTMLPUBLICW3CDTDXHTML10FramesetENhttpwwww3orgTRxhtml1DTDxhtml1framesetdtd',
            10 => 'DOCTYPEHTMLPUBLICW3CDTDXHTML11ENhttpwwww3orgTRxhtml11DTDxhtml11dtd',
            11 => 'DOCTYPEHTMLPUBLICWAPFORUMDTDXHTMLMobile10ENhttpwwwwapforumorgDTDxhtmlmobile10dtd',
            12 => 'DOCTYPEHTMLPUBLICWAPFORUMDTDXHTMLMobile11ENhttpwwwopenmobileallianceorgtechDTDxhtmlmobile11dtd');

        public static function ToString($intPageDocTypeId) {
            switch ($intPageDocTypeId) {
                case 1: return '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
                case 2: return 'PDF';
                case 3: return 'TEXT';
                case 4: return 'RSS';
                case 5: return '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">';
                case 6: return '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">';
                case 7: return '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">';
                case 8: return '<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">';
                case 9: return '<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">';
                case 10: return '<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">';
                case 11: return '<!DOCTYPE HTML PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">';
                case 12: return '<!DOCTYPE HTML PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.1//EN" "http://www.openmobilealliance.org/tech/DTD/xhtml-mobile11.dtd">';
                default:
                    throw new QCallerException(sprintf('Invalid intPageDocTypeId: %s', $intPageDocTypeId));
            }
        }

        public static function ToToken($intPageDocTypeId) {
            switch ($intPageDocTypeId) {
                case 1: return 'DOCTYPEhtmlPUBLICW3CDTDXHTML10TransitionalENhttpwwww3orgTRxhtml1DTDxhtml1transitionaldtd';
                case 2: return 'PDF';
                case 3: return 'TEXT';
                case 4: return 'RSS';
                case 5: return 'DOCTYPEHTMLPUBLICW3CDTDHTML401ENhttpwwww3orgTRhtml4strictdtd';
                case 6: return 'DOCTYPEHTMLPUBLICW3CDTDHTML401TransitionalENhttpwwww3orgTRhtml4loosedtd';
                case 7: return 'DOCTYPEHTMLPUBLICW3CDTDHTML401FramesetENhttpwwww3orgTRhtml4framesetdtd';
                case 8: return 'DOCTYPEHTMLPUBLICW3CDTDXHTML10StrictENhttpwwww3orgTRxhtml1DTDxhtml1strictdtd';
                case 9: return 'DOCTYPEHTMLPUBLICW3CDTDXHTML10FramesetENhttpwwww3orgTRxhtml1DTDxhtml1framesetdtd';
                case 10: return 'DOCTYPEHTMLPUBLICW3CDTDXHTML11ENhttpwwww3orgTRxhtml11DTDxhtml11dtd';
                case 11: return 'DOCTYPEHTMLPUBLICWAPFORUMDTDXHTMLMobile10ENhttpwwwwapforumorgDTDxhtmlmobile10dtd';
                case 12: return 'DOCTYPEHTMLPUBLICWAPFORUMDTDXHTMLMobile11ENhttpwwwopenmobileallianceorgtechDTDxhtmlmobile11dtd';
                default:
                    throw new QCallerException(sprintf('Invalid intPageDocTypeId: %s', $intPageDocTypeId));
            }
        }

    }
?>