SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


CREATE TABLE `account` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `registration_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `notes` text,
  `last_login` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `login_count` int(10) unsigned DEFAULT '0',
  `online` tinyint(1) NOT NULL DEFAULT '0',
  `onetime_password` tinyint(1) NOT NULL DEFAULT '0',
  `valid_password` tinyint(1) NOT NULL DEFAULT '1',
  `type_id` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `status_id` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `person_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_account_username` (`username`),
  UNIQUE KEY `idx_account_person` (`person_id`),
  KEY `idx_account_type` (`type_id`),
  KEY `idx_account_status` (`status_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Corresponds to the normal user | customers | members table' AUTO_INCREMENT=4 ;

INSERT INTO `account` (`id`, `registration_date`, `username`, `password`, `notes`, `last_login`, `login_count`, `online`, `onetime_password`, `valid_password`, `type_id`, `status_id`, `person_id`) VALUES
(1, '2008-06-10 19:36:18', 'joeshmoe', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '', '2011-11-12 23:12:15', 171, 0, 0, 1, 1, 1, 1),
(2, '2011-11-12 23:25:56', 'Harold', '2939094f35a3badf2a890768ba034fa5eb16e95e', NULL, '2011-11-12 23:25:57', 0, 1, 0, 1, 1, 1, 3),
(3, '2011-11-12 23:29:33', 'Mary', '61bb8d29b5be7db307cb29005bff087ebe300454', NULL, '2011-11-12 23:30:42', 1, 1, 0, 1, 1, 1, 4);

CREATE TABLE `account_status_type` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_account_status_type` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

INSERT INTO `account_status_type` (`id`, `name`) VALUES
(1, 'Active'),
(2, 'Cancelled'),
(3, 'Suspended');

CREATE TABLE `account_type` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_account_type` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

INSERT INTO `account_type` (`id`, `name`) VALUES
(4, 'Administrator'),
(2, 'Customer'),
(3, 'Employee'),
(6, 'Manufacturer'),
(1, 'Member'),
(5, 'Supplier');

CREATE TABLE `address` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(256) DEFAULT 'My Address',
  `person_id` bigint(20) unsigned NOT NULL,
  `street_1` varchar(256) DEFAULT NULL,
  `street_2` varchar(256) DEFAULT NULL,
  `suburb` varchar(256) DEFAULT NULL,
  `city` varchar(256) DEFAULT NULL,
  `county` varchar(256) DEFAULT NULL,
  `zone_id` smallint(5) unsigned NOT NULL DEFAULT '13',
  `country_id` smallint(5) unsigned NOT NULL DEFAULT '223',
  `postal_code` varchar(32) DEFAULT NULL,
  `is_current` tinyint(1) NOT NULL DEFAULT '1',
  `type_id` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_modification` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `idx_address_person` (`id`),
  KEY `idx_address_type` (`type_id`),
  KEY `idx_address_zone` (`zone_id`),
  KEY `idx_address_country` (`country_id`),
  KEY `person_id` (`person_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

INSERT INTO `address` (`id`, `title`, `person_id`, `street_1`, `street_2`, `suburb`, `city`, `county`, `zone_id`, `country_id`, `postal_code`, `is_current`, `type_id`, `creation_date`, `last_modification`) VALUES
(1, 'My primary address', 1, '113 Any Street', 'Apt. 3', 'Bronx', 'New York', '', 43, 223, '12345', 1, 1, '2008-05-31 18:20:52', '0000-00-00 00:00:00'),
(2, 'Office', 1, '431 Office Street', '', '', 'Commerce City', 'Laredo', 13, 223, '09889', 1, 3, '2008-07-14 09:09:36', '0000-00-00 00:00:00'),
(3, '', 2, '234 Pine Street', 'Apt 1', '', 'Boulder', 'Boulder', 13, 223, '80302', 1, 5, '2008-09-26 10:55:35', '0000-00-00 00:00:00'),
(4, NULL, 3, 'My street 101', 'Apt 3', 'somerville', 'Boston', '', 32, 223, '03293', 1, 1, '2011-11-12 23:25:56', '0000-00-00 00:00:00'),
(5, NULL, 4, '23 Penny Lane', '#67', '', 'Los Angeles', '', 12, 223, '98765', 1, 1, '2011-11-12 23:29:33', '0000-00-00 00:00:00');

CREATE TABLE `address_type` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_address_type` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

INSERT INTO `address_type` (`id`, `name`) VALUES
(3, 'Billing'),
(4, 'Company'),
(5, 'Friend'),
(8, 'Historical'),
(6, 'Manufacturer'),
(1, 'Primary'),
(2, 'Shipping'),
(7, 'Supplier');

CREATE TABLE `authorize_net_transaction` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` bigint(20) unsigned NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `response_code` varchar(8) DEFAULT NULL,
  `response_subcode` varchar(8) DEFAULT NULL,
  `response_reason_code` varchar(8) DEFAULT NULL,
  `response_reason_text` text,
  `authorization_code` varchar(8) DEFAULT NULL,
  `transaction_id` varchar(128) DEFAULT NULL,
  `transaction_type` varchar(128) DEFAULT NULL,
  `amount` decimal(12,2) DEFAULT NULL,
  `avs_response_code` varchar(8) DEFAULT NULL,
  `ccv_response_code` varchar(8) DEFAULT NULL,
  `cav_response_code` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_authnet_transaction_transactionid` (`transaction_id`),
  KEY `idx_authnet_transaction_orderid` (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE `block_location_type` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_block_location_type` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

INSERT INTO `block_location_type` (`id`, `name`) VALUES
(4, 'CenterPanel'),
(6, 'ExtraPanel1'),
(7, 'ExtraPanel2'),
(8, 'ExtraPanel3'),
(9, 'ExtraPanel4'),
(5, 'LeftPanel'),
(10, 'PageBody'),
(2, 'PageFooter'),
(1, 'PageHeader'),
(3, 'RightPanel');

CREATE TABLE `content_block` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) DEFAULT NULL,
  `cssclass` varchar(128) DEFAULT NULL,
  `title` varchar(128) DEFAULT NULL,
  `description` varchar(256) DEFAULT NULL,
  `show_title` tinyint(1) NOT NULL DEFAULT '0',
  `show_description` tinyint(1) NOT NULL DEFAULT '0',
  `collapsable` tinyint(1) NOT NULL DEFAULT '0',
  `sort_order` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `parent_content_block_id` mediumint(8) unsigned DEFAULT NULL,
  `location_id` tinyint(3) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_content_block_name` (`name`),
  KEY `idx_content_block_parent` (`parent_content_block_id`),
  KEY `idx_content_block_location` (`location_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

INSERT INTO `content_block` (`id`, `name`, `cssclass`, `title`, `description`, `show_title`, `show_description`, `collapsable`, `sort_order`, `parent_content_block_id`, `location_id`) VALUES
(1, 'About Quinta', 'aboutUs', 'About Quinta CMS', 'A little about Quinta ..', 1, 0, 1, 2, NULL, 4),
(2, 'HomeNews', 'homenews', 'Recent News', 'Latest Quinta CMS development news', 1, 1, 0, 3, NULL, 4),
(4, 'TopLeft', '', 'A Test Block', '', 1, 0, 0, 0, NULL, 3),
(5, 'LeftMenuBlock', '', '', '', 0, 0, 0, 0, NULL, 5),
(7, 'LoginBox', 'Login', 'Member Login', '', 0, 0, 0, 0, NULL, 1),
(8, 'TopMenuBlock', 'MainMenu', '', '', 0, 0, 0, 0, NULL, 4),
(9, 'CreateAccountBlock', '', '', '', 0, 0, 0, 1, NULL, 4),
(10, 'MemberHomeMenuBlock', 'MemberHomeMenu', '', '', 0, 0, 0, 0, 5, 5),
(12, 'AccountManagerBlock', '', '', '', 0, 0, 0, 1, NULL, 4),
(15, 'ShoppingCartBox', 'CartBox', '', '', 0, 0, 1, 1, NULL, 5),
(16, 'ProductDisplayBlock', 'ProductDisplay', '', '', 0, 0, 0, 1, NULL, 4),
(17, 'ShoppingCartView', '', '', '', 0, 0, 0, 1, NULL, 4),
(18, 'CheckOutBlock', 'CheckOut', '', '', 0, 0, 0, 1, NULL, 4),
(19, 'PayPalExpressReturn', 'OrderConfirmation', '', '', 0, 0, 0, 1, NULL, 4),
(20, 'LostPasswordBlock', 'LostPassword', 'Password / Username Retrieval', 'Here you can reset your username or password', 1, 1, 0, 1, NULL, 4),
(21, 'FooterInfo', '', '', '', 0, 0, 0, 0, NULL, 2),
(22, 'Help Section', '', 'Quinta CMS Help', 'This is an example content block description ..', 1, 1, 0, 1, NULL, 4);

CREATE TABLE `content_block_page_assn` (
  `content_block_id` mediumint(8) unsigned NOT NULL,
  `page_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`page_id`,`content_block_id`),
  KEY `idx_content_block_page_content_block` (`content_block_id`),
  KEY `idx_content_block_page_page` (`page_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `content_block_page_assn` (`content_block_id`, `page_id`) VALUES
(1, 1),
(2, 1),
(4, 1),
(5, 1),
(5, 2),
(5, 5),
(5, 6),
(5, 7),
(5, 9),
(5, 10),
(7, 1),
(7, 2),
(7, 5),
(7, 6),
(7, 7),
(7, 8),
(7, 9),
(7, 10),
(8, 1),
(8, 2),
(8, 4),
(8, 5),
(8, 6),
(8, 7),
(8, 8),
(8, 9),
(8, 10),
(9, 4),
(10, 8),
(12, 5),
(15, 1),
(15, 2),
(15, 5),
(15, 6),
(15, 7),
(15, 8),
(16, 8),
(17, 9),
(18, 10),
(20, 12),
(21, 1),
(21, 2),
(21, 4),
(21, 5),
(21, 6),
(21, 7),
(21, 8),
(21, 9),
(21, 10),
(21, 11),
(21, 12),
(22, 7);

CREATE TABLE `content_category` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) DEFAULT NULL,
  `title` varchar(128) DEFAULT NULL,
  `description` varchar(256) DEFAULT NULL,
  `image_uri` varchar(256) DEFAULT NULL,
  `parent_content_category_id` mediumint(8) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_content_category_name` (`name`),
  KEY `idx_content_category_parent` (`parent_content_category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE `content_item` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `cssclass` varchar(128) DEFAULT NULL,
  `title` varchar(128) DEFAULT NULL,
  `description` varchar(256) DEFAULT NULL,
  `text` text,
  `sort_order` mediumint(8) unsigned DEFAULT '0',
  `show_title` tinyint(1) NOT NULL DEFAULT '1',
  `show_description` tinyint(1) NOT NULL DEFAULT '0',
  `show_creator` tinyint(1) NOT NULL DEFAULT '1',
  `show_creation_date` tinyint(1) NOT NULL DEFAULT '1',
  `show_last_modification` tinyint(1) NOT NULL DEFAULT '1',
  `creator_id` bigint(20) unsigned DEFAULT '1',
  `copyright_notice` varchar(256) DEFAULT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_modification` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `type_id` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `status_id` tinyint(3) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_content_name` (`name`),
  KEY `idx_content_title` (`title`),
  KEY `idx_content_creator` (`creator_id`),
  KEY `idx_content_type` (`type_id`),
  KEY `idx_content_status` (`status_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

INSERT INTO `content_item` (`id`, `name`, `cssclass`, `title`, `description`, `text`, `sort_order`, `show_title`, `show_description`, `show_creator`, `show_creation_date`, `show_last_modification`, `creator_id`, `copyright_notice`, `creation_date`, `last_modification`, `type_id`, `status_id`) VALUES
(1, 'About Quinta', 'about_quinta_content', 'Welcome to Quinta CMS!', 'An extensible Qcodo powered e-commerce CMS platform', '<p>Quinta CMS is a development platform for building and maintaining websites powered by the <a title="QCodo Website" href="qcodo.com">QCodo web development framework</a>. It is intended as an aid for QCodo developers to take care of many of the "boilerplate" tasks involved in setting up a website. Quinta is designed to be simple to use, easy to extend and very flexible. Out of the box it provides:</p>\n<p>&nbsp;</p>\n<ul>\n<li>User accounts and login</li>\n<li>Administrative back end</li>\n<li>Basic website framework (this site is an example)</li>\n<li>Blog module</li>\n<li>Ecommerce payment modules (including PayPal, AuthorizeNet)</li>\n<li>Orders and products</li>\n<li>Live shipping estimate module (FedEx, USPS)</li>\n<li>Shipping label printing (Endicia, FedEx)</li>\n<li>Module framework</li>\n<li>Page CSS and Javascript settings</li>\n<li>Content block CSS class settings</li>\n</ul>\n<p>&nbsp;</p>\n<p>Quinta is intended to be styled using CSS and modified to suit individual needs.</p>\n<p>As of this release (Version 0.3), Quinta is in a very early stage - this release is functional but under development, there is much to be done.</p>\n<p><strong>WARNING:</strong> At the risk of repeating myself, <em><span style="text-decoration: underline;">this is a very early version!</span></em> I am not a security expert and both Quinta and QCodo have yet to be audited for security!! I have done what I can but there is <strong> No Guarantee - USE AT YOUR OWN RISK!!</strong></p>\n<p><strong>NOTE:</strong> You can log in above as "joeshmoe" with the password "password" and use the account management tools. You can also visit the <a href="admin"> Administration interface </a> (currently "The Dashboard" ..)  by replacing index.php with admin/ in your browser. Also, you can see <a href="doc/core">the documentation</a> for more details about Quinta under doc/ (like admin/)  to learn more about the API and architecture.</p>\n<p>Note ALSO - currently the <strong><span style="text-decoration: underline;">admin interface is not integrated with the CMS and there is&nbsp;no login or access control</span></strong></p>\n<p>You are free to modify content in the Admin UI, add Pages, Content Items, Menus etc .. The database will be cleared and set back to the default periodically so do not worry about breaking anything - in fact, please do and file a bug report!</p>\n<p>Enjoy!</p>', 0, 1, 1, 0, 0, 0, 1, '', '2008-09-25 18:57:46', '0000-00-00 00:00:00', 2, 1),
(2, 'Quinta gets demo site', '', 'Quinta CMS now live', 'Quinta CMS demo site now available to the Public', '<p>\nYay! Now you can see Quinta in action! \n</p><p>\nYes, this is still an early version but thanks to Riccardo (who has generously provided hosting) you can play around with a "real" example site. Experiment, have fun with it.\n</p><p>\nEnjoy!\n</p>\n', 1, 1, 1, 1, 1, 0, 1, '', '2008-09-26 14:53:22', '0000-00-00 00:00:00', 2, 1),
(3, 'Sed ut perspiciatis unde omnis', '', 'Sed ut perspiciatis', 'Sed ut perspiciatis unde omnisiste natus error', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quinta architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', 2, 1, 1, 1, 1, 0, 1, '', '2008-09-27 03:22:08', '0000-00-00 00:00:00', 1, 1),
(4, 'Pollform', 'poll', 'Rate the new site', 'a poll ...', 'How do you like the new site? \n<br />Good\n<br />Bad\n<br />Cowboy Neal\n', 0, 1, 0, 0, 1, 0, 1, NULL, '2008-06-02 08:03:59', '0000-00-00 00:00:00', 1, 1),
(5, 'FooterText', '', '', '', '<a href="http://sf.net/projects/quintacms">Powered by Quinta CMS </a>\n&nbsp;&nbsp;&nbsp;\n | Boulder, Colorado | \n<a href="/index.php/Contact">contact</a> | \n<a href="/index.php/Help">help</a> |\n<a href="/index.php/Policies">policies</a> | \n<a href="/index.php/Terms">terms</a> &nbsp;&nbsp;&nbsp;&nbsp;\n', 0, 0, 0, 0, 0, 0, 1, '', '2008-09-17 09:57:21', '0000-00-00 00:00:00', 4, 1),
(6, 'Introduction to Quinta CMS', '', 'A Brief Introduction to Quinta CMS', 'This is an example of a content item description .. something brief about the item here', '<p>This is a quick introduction - hopefully just enough to get you started. Ah yes - one day perhaps there will be \nextensive documentation, but as yet I have written this \nCMS almost entirely alone (a testament to QCodos power!) and time is limited .. Feel free to help out! \n</p>\n<p>\n Until that wonderful day, experimentation is the key. And , of course, if you really want to know how Quinta CMS works: Read the source, Luke.\n</p>\n<div class="header">How to add a Content Item</div>\n<p>\n<ul>\n<li>  In the admin UI, create a new content item - click the button at the bottom of the list and an area will appear below the list of items. \n</li><li>\nAdd a name. Title, and description, CSS class, etc. are optional.\n</li><li>\nAdd a sort order - this determines where in the content block it will appear, 0 is at the top.\n</li><li>\nAssign the new item to a Content Block in the list of Content blocks.\n</li><li>\nClick Save.\n</li><li>\nEt Voila! A new content item will appear in that content block. If you want to assign it to a new content block, see the next section to create a new block and then return and assign the item to the new block..\n</li></ul>\n\n</p>\n<div class="header">How to add a Content Block</div>\n<p>\n<ul>\n</li><li>\n As with content items, create a new content block.\n</li><li>\n Again, give it a name - other things as desired.\n</li><li>\n Assign the block to a "Location" - these are the default areas of the page (ie. Header, LeftPanel, Center, etc.). Alternately you can assign the new block to a parent block and it will be rendered inside that one.\n</li></li>\nAssign the block to pages in the list.\n</li><li>\nClick Save.\n</li><li>\nEt Voila! A new content block will appear on those Pages. If you want to assign it to a new page, see the next section to create a new page.\n</li></ul>\n\n</p>\n<div class="header">How to add a Page</div>\n<p>\n<ul>\n</li><li>\nAs with the others, create a new page\n</li><li>\nGive the Page a name - Important! This will be used as the URL thus: index.php/PageName.\n</li><li>\nOptionally assign some content blocks.\n</li><li>\nClick Save.\n</li><li>\nEt Voila! If you put the page name in your browser location bar you will see the new page. If you want a menu to get there, see the next section.\n</li></ul>\n\n</p>\n<div class="header">How to add a Menu</div>\n<p>\n<ul>\n</li><li>\nAgain, create a new menu.\n</li><li>\nAdd the label - this text that will appear on the menu.\n</li><li>\nAdd a Page Name (eg. the page you created above) as the URL. Alternately, you can put a full URL, eg: http://othersite.net.\n</li><li>\nClick Save.\n</li><li>\nTry it out! It should send you to the new page\n</li></ul>\n\n</p>\n', 1, 1, 1, 1, 1, 1, 1, '', '2008-09-27 05:45:49', '0000-00-00 00:00:00', 1, 1);

CREATE TABLE `content_item_content_block_assn` (
  `content_item_id` int(10) unsigned NOT NULL,
  `content_block_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`content_block_id`,`content_item_id`),
  KEY `idx_content_item_content_block_content_item` (`content_item_id`),
  KEY `idx_content_item_content_block_content_block` (`content_block_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `content_item_content_block_assn` (`content_item_id`, `content_block_id`) VALUES
(1, 1),
(2, 2),
(3, 2),
(4, 4),
(5, 21),
(6, 22);

CREATE TABLE `content_item_content_category_assn` (
  `content_item_id` int(10) unsigned NOT NULL,
  `content_category_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`content_category_id`,`content_item_id`),
  KEY `idx_content_item_content_category_content_item` (`content_item_id`),
  KEY `idx_content_item_content_category_content_category` (`content_category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `content_item_usergroup_assn` (
  `content_item_id` int(10) unsigned NOT NULL,
  `usergroup_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`usergroup_id`,`content_item_id`),
  KEY `idx_content_item_usergroup_content_item` (`content_item_id`),
  KEY `idx_content_item_usergroup_usergroup` (`usergroup_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `content_status_type` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_content_status_type` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

INSERT INTO `content_status_type` (`id`, `name`) VALUES
(3, 'Draft'),
(4, 'Internal'),
(1, 'Published'),
(2, 'Unpublished');

CREATE TABLE `content_type` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_content_type` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

INSERT INTO `content_type` (`id`, `name`) VALUES
(2, 'Article'),
(6, 'Audio'),
(9, 'BlogPost'),
(7, 'Comment'),
(10, 'Description'),
(8, 'ForumPost'),
(4, 'Image'),
(1, 'PageBody'),
(3, 'Product'),
(5, 'Video');

CREATE TABLE `country_type` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL DEFAULT '',
  `iso_code_2` char(2) NOT NULL DEFAULT '',
  `iso_code_3` char(3) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_country_name` (`name`),
  KEY `idx_iso_2` (`iso_code_2`),
  KEY `idx_iso_3` (`iso_code_3`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=256 ;

INSERT INTO `country_type` (`id`, `name`, `iso_code_2`, `iso_code_3`) VALUES
(1, 'Afghanistan', 'AF', 'AFG'),
(2, 'Albania', 'AL', 'ALB'),
(3, 'Algeria', 'DZ', 'DZA'),
(4, 'American Samoa', 'AS', 'ASM'),
(5, 'Andorra', 'AD', 'AND'),
(6, 'Angola', 'AO', 'AGO'),
(7, 'Anguilla', 'AI', 'AIA'),
(8, 'Antarctica', 'AQ', 'ATA'),
(9, 'Antigua and Barbuda', 'AG', 'ATG'),
(10, 'Argentina', 'AR', 'ARG'),
(11, 'Armenia', 'AM', 'ARM'),
(12, 'Aruba', 'AW', 'ABW'),
(13, 'Australia', 'AU', 'AUS'),
(14, 'Austria', 'AT', 'AUT'),
(15, 'Azerbaijan', 'AZ', 'AZE'),
(16, 'Bahamas', 'BS', 'BHS'),
(17, 'Bahrain', 'BH', 'BHR'),
(18, 'Bangladesh', 'BD', 'BGD'),
(19, 'Barbados', 'BB', 'BRB'),
(20, 'Belarus', 'BY', 'BLR'),
(21, 'Belgium', 'BE', 'BEL'),
(22, 'Belize', 'BZ', 'BLZ'),
(23, 'Benin', 'BJ', 'BEN'),
(24, 'Bermuda', 'BM', 'BMU'),
(25, 'Bhutan', 'BT', 'BTN'),
(26, 'Bolivia', 'BO', 'BOL'),
(27, 'Bosnia-Herzegovina', 'BA', 'BIH'),
(28, 'Botswana', 'BW', 'BWA'),
(29, 'Bouvet Island', 'BV', 'BVT'),
(30, 'Brazil', 'BR', 'BRA'),
(31, 'British Indian Ocean Territory', 'IO', 'IOT'),
(32, 'Brunei Darussalam', 'BN', 'BRN'),
(33, 'Bulgaria', 'BG', 'BGR'),
(34, 'Burkina Faso', 'BF', 'BFA'),
(35, 'Burundi', 'BI', 'BDI'),
(36, 'Cambodia', 'KH', 'KHM'),
(37, 'Cameroon', 'CM', 'CMR'),
(38, 'Canada', 'CA', 'CAN'),
(39, 'Cape Verde', 'CV', 'CPV'),
(40, 'Cayman Islands', 'KY', 'CYM'),
(41, 'Central African Republic', 'CF', 'CAF'),
(42, 'Chad', 'TD', 'TCD'),
(43, 'Chile', 'CL', 'CHL'),
(44, 'China', 'CN', 'CHN'),
(45, 'Christmas Island', 'CX', 'CXR'),
(46, 'Cocos (Keeling) Islands', 'CC', 'CCK'),
(47, 'Colombia', 'CO', 'COL'),
(48, 'Comoros', 'KM', 'COM'),
(49, 'Congo', 'CG', 'COG'),
(50, 'Cook Islands', 'CK', 'COK'),
(51, 'Costa Rica', 'CR', 'CRI'),
(52, 'Cote D''Ivoire', 'CI', 'CIV'),
(53, 'Croatia', 'HR', 'HRV'),
(54, 'Cuba', 'CU', 'CUB'),
(55, 'Cyprus', 'CY', 'CYP'),
(56, 'Czech Republic', 'CZ', 'CZE'),
(57, 'Denmark', 'DK', 'DNK'),
(58, 'Djibouti', 'DJ', 'DJI'),
(59, 'Dominica', 'DM', 'DMA'),
(60, 'Dominican Republic', 'DO', 'DOM'),
(61, 'East Timor', 'TP', 'TMP'),
(62, 'Ecuador', 'EC', 'ECU'),
(63, 'Egypt', 'EG', 'EGY'),
(64, 'El Salvador', 'SV', 'SLV'),
(65, 'Equatorial Guinea', 'GQ', 'GNQ'),
(66, 'Eritrea', 'ER', 'ERI'),
(67, 'Estonia', 'EE', 'EST'),
(68, 'Ethiopia', 'ET', 'ETH'),
(69, 'Falkland Islands (Malvinas)', 'FK', 'FLK'),
(70, 'Faroe Islands', 'FO', 'FRO'),
(71, 'Fiji', 'FJ', 'FJI'),
(72, 'Finland', 'FI', 'FIN'),
(73, 'France', 'FR', 'FRA'),
(74, 'France, Metropolitan', 'FX', 'FXX'),
(75, 'French Guiana', 'GF', 'GUF'),
(76, 'French Polynesia', 'PF', 'PYF'),
(77, 'French Southern Territories', 'TF', 'ATF'),
(78, 'Gabon', 'GA', 'GAB'),
(79, 'Gambia', 'GM', 'GMB'),
(80, 'Georgia', 'GE', 'GEO'),
(81, 'Germany', 'DE', 'DEU'),
(82, 'Ghana', 'GH', 'GHA'),
(83, 'Gibraltar', 'GI', 'GIB'),
(84, 'Greece', 'GR', 'GRC'),
(85, 'Greenland', 'GL', 'GRL'),
(86, 'Grenada', 'GD', 'GRD'),
(87, 'Guadeloupe', 'GP', 'GLP'),
(88, 'Guam', 'GU', 'GUM'),
(89, 'Guatemala', 'GT', 'GTM'),
(90, 'Guinea', 'GN', 'GIN'),
(91, 'Guinea-bissau', 'GW', 'GNB'),
(92, 'Guyana', 'GY', 'GUY'),
(93, 'Haiti', 'HT', 'HTI'),
(94, 'Heard and Mc Donald Islands', 'HM', 'HMD'),
(95, 'Honduras', 'HN', 'HND'),
(96, 'Hong Kong', 'HK', 'HKG'),
(97, 'Hungary', 'HU', 'HUN'),
(98, 'Iceland', 'IS', 'ISL'),
(99, 'India', 'IN', 'IND'),
(100, 'Indonesia', 'ID', 'IDN'),
(101, 'Iran (Islamic Republic of)', 'IR', 'IRN'),
(102, 'Iraq', 'IQ', 'IRQ'),
(103, 'Ireland', 'IE', 'IRL'),
(104, 'Israel', 'IL', 'ISR'),
(105, 'Italy', 'IT', 'ITA'),
(106, 'Jamaica', 'JM', 'JAM'),
(107, 'Japan', 'JP', 'JPN'),
(108, 'Jordan', 'JO', 'JOR'),
(109, 'Kazakhstan', 'KZ', 'KAZ'),
(110, 'Kenya', 'KE', 'KEN'),
(111, 'Kiribati', 'KI', 'KIR'),
(112, 'Korea, Democratic People''s Republic of', 'KP', 'PRK'),
(113, 'Korea, Republic of', 'KR', 'KOR'),
(114, 'Kuwait', 'KW', 'KWT'),
(115, 'Kyrgyzstan', 'KG', 'KGZ'),
(116, 'Lao People''s Democratic Republic', 'LA', 'LAO'),
(117, 'Latvia', 'LV', 'LVA'),
(118, 'Lebanon', 'LB', 'LBN'),
(119, 'Lesotho', 'LS', 'LSO'),
(120, 'Liberia', 'LR', 'LBR'),
(121, 'Libyan Arab Jamahiriya', 'LY', 'LBY'),
(122, 'Liechtenstein', 'LI', 'LIE'),
(123, 'Lithuania', 'LT', 'LTU'),
(124, 'Luxembourg', 'LU', 'LUX'),
(125, 'Macau', 'MO', 'MAC'),
(126, 'Macedonia, The Former Yugoslav Republic of', 'MK', 'MKD'),
(127, 'Madagascar', 'MG', 'MDG'),
(128, 'Malawi', 'MW', 'MWI'),
(129, 'Malaysia', 'MY', 'MYS'),
(130, 'Maldives', 'MV', 'MDV'),
(131, 'Mali', 'ML', 'MLI'),
(132, 'Malta', 'MT', 'MLT'),
(133, 'Marshall Islands', 'MH', 'MHL'),
(134, 'Martinique', 'MQ', 'MTQ'),
(135, 'Mauritania', 'MR', 'MRT'),
(136, 'Mauritius', 'MU', 'MUS'),
(137, 'Mayotte', 'YT', 'MYT'),
(138, 'Mexico', 'MX', 'MEX'),
(139, 'Micronesia, Federated States of', 'FM', 'FSM'),
(140, 'Moldova, Republic of', 'MD', 'MDA'),
(141, 'Monaco', 'MC', 'MCO'),
(142, 'Mongolia', 'MN', 'MNG'),
(143, 'Montserrat', 'MS', 'MSR'),
(144, 'Morocco', 'MA', 'MAR'),
(145, 'Mozambique', 'MZ', 'MOZ'),
(146, 'Myanmar', 'MM', 'MMR'),
(147, 'Namibia', 'NA', 'NAM'),
(148, 'Nauru', 'NR', 'NRU'),
(149, 'Nepal', 'NP', 'NPL'),
(150, 'Netherlands', 'NL', 'NLD'),
(151, 'Netherlands Antilles', 'AN', 'ANT'),
(152, 'New Caledonia', 'NC', 'NCL'),
(153, 'New Zealand', 'NZ', 'NZL'),
(154, 'Nicaragua', 'NI', 'NIC'),
(155, 'Niger', 'NE', 'NER'),
(156, 'Nigeria', 'NG', 'NGA'),
(157, 'Niue', 'NU', 'NIU'),
(158, 'Norfolk Island', 'NF', 'NFK'),
(159, 'Northern Mariana Islands', 'MP', 'MNP'),
(160, 'Norway', 'NO', 'NOR'),
(161, 'Oman', 'OM', 'OMN'),
(162, 'Pakistan', 'PK', 'PAK'),
(163, 'Palau', 'PW', 'PLW'),
(164, 'Panama', 'PA', 'PAN'),
(165, 'Papua New Guinea', 'PG', 'PNG'),
(166, 'Paraguay', 'PY', 'PRY'),
(167, 'Peru', 'PE', 'PER'),
(168, 'Philippines', 'PH', 'PHL'),
(169, 'Pitcairn', 'PN', 'PCN'),
(170, 'Poland', 'PL', 'POL'),
(171, 'Portugal', 'PT', 'PRT'),
(172, 'Puerto Rico', 'PR', 'PRI'),
(173, 'Qatar', 'QA', 'QAT'),
(174, 'Reunion', 'RE', 'REU'),
(175, 'Romania', 'RO', 'ROM'),
(176, 'Russian Federation', 'RU', 'RUS'),
(177, 'Rwanda', 'RW', 'RWA'),
(178, 'Saint Kitts and Nevis', 'KN', 'KNA'),
(179, 'Saint Lucia', 'LC', 'LCA'),
(180, 'Saint Vincent and the Grenadines', 'VC', 'VCT'),
(181, 'Samoa', 'WS', 'WSM'),
(182, 'San Marino', 'SM', 'SMR'),
(183, 'Sao Tome and Principe', 'ST', 'STP'),
(184, 'Saudi Arabia', 'SA', 'SAU'),
(185, 'Senegal', 'SN', 'SEN'),
(186, 'Seychelles', 'SC', 'SYC'),
(187, 'Sierra Leone', 'SL', 'SLE'),
(188, 'Singapore', 'SG', 'SGP'),
(189, 'Slovakia (Slovak Republic)', 'SK', 'SVK'),
(190, 'Slovenia', 'SI', 'SVN'),
(191, 'Solomon Islands', 'SB', 'SLB'),
(192, 'Somalia', 'SO', 'SOM'),
(193, 'South Africa', 'ZA', 'ZAF'),
(194, 'South Georgia and the South Sandwich Islands', 'GS', 'SGS'),
(195, 'Spain', 'ES', 'ESP'),
(196, 'Sri Lanka', 'LK', 'LKA'),
(197, 'St. Helena', 'SH', 'SHN'),
(198, 'St. Pierre and Miquelon', 'PM', 'SPM'),
(199, 'Sudan', 'SD', 'SDN'),
(200, 'Suriname', 'SR', 'SUR'),
(201, 'Svalbard and Jan Mayen Islands', 'SJ', 'SJM'),
(202, 'Swaziland', 'SZ', 'SWZ'),
(203, 'Sweden', 'SE', 'SWE'),
(204, 'Switzerland', 'CH', 'CHE'),
(205, 'Syrian Arab Republic', 'SY', 'SYR'),
(206, 'Taiwan', 'TW', 'TWN'),
(207, 'Tajikistan', 'TJ', 'TJK'),
(208, 'Tanzania, United Republic of', 'TZ', 'TZA'),
(209, 'Thailand', 'TH', 'THA'),
(210, 'Togo', 'TG', 'TGO'),
(211, 'Tokelau', 'TK', 'TKL'),
(212, 'Tonga', 'TO', 'TON'),
(213, 'Trinidad and Tobago', 'TT', 'TTO'),
(214, 'Tunisia', 'TN', 'TUN'),
(215, 'Turkey', 'TR', 'TUR'),
(216, 'Turkmenistan', 'TM', 'TKM'),
(217, 'Turks and Caicos Islands', 'TC', 'TCA'),
(218, 'Tuvalu', 'TV', 'TUV'),
(219, 'Uganda', 'UG', 'UGA'),
(220, 'Ukraine', 'UA', 'UKR'),
(221, 'United Arab Emirates', 'AE', 'ARE'),
(222, 'United Kingdom', 'GB', 'GBR'),
(223, 'United States', 'US', 'USA'),
(224, 'United States Minor Outlying Islands', 'UM', 'UMI'),
(225, 'Uruguay', 'UY', 'URY'),
(226, 'Uzbekistan', 'UZ', 'UZB'),
(227, 'Vanuatu', 'VU', 'VUT'),
(228, 'Vatican City State (Holy See)', 'VA', 'VAT'),
(229, 'Venezuela', 'VE', 'VEN'),
(230, 'Viet Nam', 'VN', 'VNM'),
(231, 'Virgin Islands (British)', 'VG', 'VGB'),
(232, 'Virgin Islands (U.S.)', 'VI', 'VIR'),
(233, 'Wallis and Futuna Islands', 'WF', 'WLF'),
(234, 'Western Sahara', 'EH', 'ESH'),
(235, 'Yemen', 'YE', 'YEM'),
(236, 'Yugoslavia', 'YU', 'YUG'),
(237, 'Zaire', 'ZR', 'ZAR'),
(238, 'Zambia', 'ZM', 'ZMB'),
(239, 'Zimbabwe', 'ZW', 'ZWE'),
(240, 'Aaland Islands', 'AX', 'ALA'),
(255, 'World', '--', '---');

CREATE TABLE `email_address` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(128) NOT NULL,
  `person_id` bigint(20) unsigned NOT NULL,
  `is_primary` tinyint(3) unsigned DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `person_id` (`person_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE `html_meta_tag` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) DEFAULT NULL,
  `content` varchar(256) DEFAULT NULL,
  `type` enum('NAME','HTTP-EQUIV') DEFAULT 'NAME',
  PRIMARY KEY (`id`),
  KEY `idx_html_meta_tag_name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE `image_size_type` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_image_size_type` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

INSERT INTO `image_size_type` (`id`, `name`) VALUES
(6, 'FullScreen'),
(1, 'Icon'),
(7, 'Intergalactic'),
(5, 'Large'),
(4, 'Medium'),
(3, 'Small'),
(2, 'Thumb');

CREATE TABLE `java_script` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) DEFAULT NULL,
  `description` varchar(256) DEFAULT NULL,
  `filename` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_java_script_name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE `menu` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `title` varchar(32) DEFAULT NULL,
  `css_class` varchar(32) DEFAULT NULL,
  `sort_order` tinyint(3) unsigned DEFAULT '0',
  `show_title` tinyint(1) DEFAULT '1',
  `parent_menu_item_id` mediumint(8) unsigned DEFAULT '0',
  `status_id` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `type_id` tinyint(3) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_menu_name` (`name`),
  KEY `idx_menu_item` (`parent_menu_item_id`),
  KEY `idx_menu_type` (`type_id`),
  KEY `idx_menu_status` (`status_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

INSERT INTO `menu` (`id`, `name`, `title`, `css_class`, `sort_order`, `show_title`, `parent_menu_item_id`, `status_id`, `type_id`) VALUES
(1, 'MainMenu', 'Main Menu', '', 0, 0, NULL, 1, 3),
(2, 'MemberMenu', 'My Account', NULL, 0, 1, NULL, 1, 1);

CREATE TABLE `menu_content_block_assn` (
  `menu_id` smallint(5) unsigned NOT NULL,
  `content_block_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`content_block_id`,`menu_id`),
  KEY `idx_menu_content_block_menu` (`menu_id`),
  KEY `idx_menu_content_block_content_block` (`content_block_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `menu_content_block_assn` (`menu_id`, `content_block_id`) VALUES
(1, 8),
(2, 10);

CREATE TABLE `menu_item` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `css_class` varchar(32) DEFAULT NULL,
  `label` varchar(32) DEFAULT NULL,
  `uri` varchar(256) NOT NULL,
  `is_local` tinyint(1) NOT NULL DEFAULT '1',
  `is_ssl` tinyint(1) NOT NULL DEFAULT '0',
  `sort_order` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `status_id` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `type_id` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `page_id` bigint(20) unsigned DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_menu_item_name` (`name`),
  KEY `idx_menu_item_type` (`type_id`),
  KEY `idx_menu_item_status` (`status_id`),
  KEY `page_id` (`page_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

INSERT INTO `menu_item` (`id`, `name`, `css_class`, `label`, `uri`, `is_local`, `is_ssl`, `sort_order`, `status_id`, `type_id`, `page_id`) VALUES
(1, 'ContactUs', NULL, 'Contact Us', 'ContactUs', 1, 0, 1, 1, 1, 2),
(2, 'HomeLink', '', 'Home', 'Home', 1, 0, 0, 1, 2, 1),
(4, 'HelpLink', '', 'Help', 'Help', 1, 0, 3, 1, 2, NULL),
(5, 'KnowledgeLink', NULL, 'Knowledge Base', 'KnowledgeBase', 1, 0, 4, 1, 1, NULL),
(6, 'UploadLink', '', 'Upload', 'Upload', 1, 0, 5, 1, 2, NULL),
(8, 'ForumsLink', '', 'Forum', 'Forum', 1, 0, 6, 1, 2, NULL),
(12, 'LinksPageLink', '', 'Other Links', 'LinksPage', 1, 0, 5, 1, 2, NULL),
(14, 'AccountAddress', NULL, 'Addresses', 'AccountHome/Address', 1, 0, 1, 1, 1, 5),
(15, 'Account Orders', NULL, 'View Orders', 'AccountHome/Order', 1, 0, 2, 1, 1, 5),
(16, 'Account Settings', NULL, 'Preferences', 'AccountHome/Settings', 1, 0, 3, 1, 1, 5);

CREATE TABLE `menu_item_menu_assn` (
  `menu_item_id` mediumint(8) unsigned NOT NULL,
  `menu_id` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`menu_id`,`menu_item_id`),
  KEY `idx_menu_item_menu_menu_item` (`menu_item_id`),
  KEY `idx_menu_item_menu_menu` (`menu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `menu_item_menu_assn` (`menu_item_id`, `menu_id`) VALUES
(2, 1),
(4, 1),
(6, 1),
(8, 1),
(14, 2),
(15, 2),
(16, 2);

CREATE TABLE `menu_item_type` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_menu_item_type` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

INSERT INTO `menu_item_type` (`id`, `name`) VALUES
(3, 'BlockMenuItem'),
(4, 'LinkMenuItem'),
(1, 'ListMenuItem'),
(2, 'TabMenuItem');

CREATE TABLE `menu_status_type` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_menu_status_type` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

INSERT INTO `menu_status_type` (`id`, `name`) VALUES
(1, 'Active'),
(2, 'Disabled');

CREATE TABLE `menu_type` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_menu_type` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

INSERT INTO `menu_type` (`id`, `name`) VALUES
(4, 'Footer'),
(2, 'Header'),
(1, 'SideBar'),
(3, 'Tabbed');

CREATE TABLE `module` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `cssclass` varchar(128) DEFAULT NULL,
  `title` varchar(128) DEFAULT NULL,
  `description` varchar(256) DEFAULT NULL,
  `class_name` varchar(256) DEFAULT NULL,
  `show_title` tinyint(1) NOT NULL DEFAULT '1',
  `show_description` tinyint(1) NOT NULL DEFAULT '0',
  `content_block_id` mediumint(8) unsigned DEFAULT NULL,
  `parent_module_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_module_name` (`name`),
  KEY `idx_module_block` (`content_block_id`),
  KEY `idx_module_title` (`title`),
  KEY `parent_module_id` (`parent_module_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

INSERT INTO `module` (`id`, `name`, `cssclass`, `title`, `description`, `class_name`, `show_title`, `show_description`, `content_block_id`, `parent_module_id`) VALUES
(1, 'Login Module', 'LoginModule', 'Member Login', 'Enter a Username and Password', 'LoginModule', 1, 1, 7, NULL),
(3, 'Registration Module', '', 'Quinta CMS Registration', 'Please fill in the fields below to register', 'CreateAccountModule', 1, 1, 9, NULL),
(4, 'Account Home Module', 'AccountHome', '', '', 'AccountHomeModule', 0, 0, NULL, NULL),
(5, 'Account Manager', 'AccountManager', '', '', 'AccountManagerModule', 0, 0, 12, NULL),
(7, 'Shopping Cart', '', '', '', 'ShoppingCartModule', 0, 0, 15, NULL),
(8, 'Product Display', '', '', '', 'ProductDisplayModule', 0, 0, 16, NULL),
(9, 'Shopping Cart View', 'CartView', 'Shopping Cart Contents', 'You can adust the quantities for products here too', 'ShoppingCartViewModule', 1, 1, 17, NULL),
(10, 'Checkout Module', 'CheckOutModule', '', '', 'CheckOutModule', 0, 0, 18, NULL),
(11, 'PayPalExpressReturnModule', '', '', '', 'PayPalExpressReturnModule', 0, 0, 19, NULL),
(12, 'Lost Password Module', '', '', '', 'LostPasswordModule', 0, 0, 20, NULL);

CREATE TABLE `order` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `account_id` bigint(20) unsigned NOT NULL DEFAULT '1',
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_modification` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `completion_date` datetime DEFAULT '0000-00-00 00:00:00',
  `product_total_cost` decimal(12,2) DEFAULT NULL,
  `shipping_cost` decimal(12,2) DEFAULT NULL,
  `shipping_charged` decimal(12,2) DEFAULT NULL,
  `handling_cost` decimal(12,2) DEFAULT NULL,
  `handling_charged` decimal(12,2) DEFAULT NULL,
  `tax` decimal(12,2) DEFAULT NULL,
  `product_total_charged` decimal(12,2) DEFAULT NULL,
  `notes` text,
  `shipping_method_id` tinyint(3) unsigned DEFAULT '1',
  `payment_method_id` tinyint(3) unsigned DEFAULT '1',
  `status_id` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `type_id` tinyint(3) unsigned DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `idx_order_account` (`account_id`),
  KEY `idx_order_shipping_method` (`shipping_method_id`),
  KEY `idx_order_payment_method` (`payment_method_id`),
  KEY `idx_order_status` (`status_id`),
  KEY `idx_order_type` (`type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE `order_address` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` bigint(20) unsigned NOT NULL,
  `name_prefix` varchar(16) DEFAULT NULL,
  `first_name` varchar(128) DEFAULT NULL,
  `middle_name` varchar(128) DEFAULT NULL,
  `last_name` varchar(128) DEFAULT NULL,
  `name_suffix` varchar(16) DEFAULT NULL,
  `company` varchar(128) DEFAULT NULL,
  `street_1` varchar(256) DEFAULT NULL,
  `street_2` varchar(256) DEFAULT NULL,
  `suburb` varchar(256) DEFAULT NULL,
  `city` varchar(256) DEFAULT NULL,
  `county` varchar(256) DEFAULT NULL,
  `zone_id` smallint(5) unsigned NOT NULL DEFAULT '13',
  `country_id` smallint(5) unsigned NOT NULL DEFAULT '223',
  `postal_code` varchar(32) DEFAULT NULL,
  `type_id` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_modification` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `idx_address_type` (`type_id`),
  KEY `idx_address_zone` (`zone_id`),
  KEY `idx_address_country` (`country_id`),
  KEY `order_id` (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE `order_address_type` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_order_address_type` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

INSERT INTO `order_address_type` (`id`, `name`) VALUES
(1, 'Billing'),
(3, 'Historical'),
(2, 'Shipping');

CREATE TABLE `order_change` (
  `order_id` bigint(20) unsigned NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `notes` text,
  `value` decimal(12,2) DEFAULT NULL,
  `type_id` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`order_id`,`date`),
  KEY `idx_order_change_type` (`type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `order_change_type` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_order_change_type` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

INSERT INTO `order_change_type` (`id`, `name`) VALUES
(5, 'ItemAddition'),
(3, 'ItemDiscount'),
(4, 'ItemQuantity'),
(2, 'OrderDiscount'),
(1, 'Refund'),
(6, 'ShippingAddition');

CREATE TABLE `order_item` (
  `order_id` bigint(20) unsigned NOT NULL,
  `product_id` bigint(20) unsigned NOT NULL,
  `quantity` mediumint(8) unsigned NOT NULL DEFAULT '1',
  `status_id` tinyint(3) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`product_id`,`order_id`),
  KEY `idx_order_item_order` (`order_id`),
  KEY `idx_order_item_product` (`product_id`),
  KEY `status_id` (`status_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `order_item_status_type` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_order_item_status_type` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

INSERT INTO `order_item_status_type` (`id`, `name`) VALUES
(3, 'BackOrdered'),
(6, 'Cancelled'),
(7, 'Internal'),
(1, 'Ordered'),
(2, 'Processing'),
(5, 'Returned'),
(4, 'Shipped');

CREATE TABLE `order_status_history` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` bigint(20) unsigned NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `notes` text,
  `status_id` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_order_status_history_order` (`order_id`),
  KEY `idx_order_status_history_status` (`status_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE `order_status_type` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_order_status_type` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

INSERT INTO `order_status_type` (`id`, `name`) VALUES
(7, 'Cancelled'),
(5, 'Packaged'),
(3, 'Paid'),
(2, 'Pending'),
(9, 'Problem'),
(4, 'Processing'),
(8, 'Returned'),
(6, 'Shipped'),
(1, 'Shopping');

CREATE TABLE `order_type` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_order_type` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

INSERT INTO `order_type` (`id`, `name`) VALUES
(4, 'Affiliate'),
(3, 'Employee'),
(2, 'Internal'),
(1, 'Normal');

CREATE TABLE `page` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_modification` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `name` varchar(128) DEFAULT NULL,
  `title` varchar(256) DEFAULT NULL,
  `uri` varchar(256) DEFAULT 'index.php',
  `has_header` tinyint(1) NOT NULL DEFAULT '1',
  `has_left_column` tinyint(1) NOT NULL DEFAULT '1',
  `has_right_column` tinyint(1) NOT NULL DEFAULT '1',
  `has_footer` tinyint(1) NOT NULL DEFAULT '1',
  `type_id` tinyint(3) unsigned DEFAULT '1',
  `doc_type_id` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `status_id` tinyint(3) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_page_name` (`name`),
  KEY `idx_page_doc_type` (`doc_type_id`),
  KEY `idx_page_type` (`type_id`),
  KEY `idx_page_status` (`status_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

INSERT INTO `page` (`id`, `creation_date`, `last_modification`, `name`, `title`, `uri`, `has_header`, `has_left_column`, `has_right_column`, `has_footer`, `type_id`, `doc_type_id`, `status_id`) VALUES
(1, '2008-05-31 18:30:11', '0000-00-00 00:00:00', 'Home', 'The Amazing Test Page', 'testpage', 1, 1, 0, 1, 2, 1, 1),
(2, '2008-06-02 08:46:28', '0000-00-00 00:00:00', 'ContactUs', 'Contact Us', 'contact-us', 1, 1, 0, 1, 1, 1, 1),
(4, '2008-06-05 18:00:06', '0000-00-00 00:00:00', 'CreateAccount', 'Create an Account', '', 1, 0, 0, 1, 1, 1, 1),
(5, '2008-06-07 14:00:48', '0000-00-00 00:00:00', 'AccountHome', 'Quinta CMS Account', '', 1, 1, 0, 1, 4, 1, 1),
(6, '2008-06-12 09:24:32', '0000-00-00 00:00:00', 'Upload', 'Upload a Design', 'Upload', 1, 1, 0, 1, NULL, 1, 1),
(7, '2008-06-22 16:55:59', '0000-00-00 00:00:00', 'Help', '', '', 1, 1, 1, 1, NULL, 1, 1),
(8, '2008-07-03 05:55:18', '0000-00-00 00:00:00', 'Products', 'Products', 'products', 1, 1, 0, 1, 8, 1, 1),
(9, '2008-07-07 10:22:58', '0000-00-00 00:00:00', 'ShoppingCart', 'Quinta CMS Shopping Cart ', 'shopping-cart', 1, 1, 0, 1, 9, 1, 1),
(10, '2008-07-07 14:59:46', '0000-00-00 00:00:00', 'CheckOut', 'Check Out', 'check-out', 1, 1, 0, 1, 10, 1, 1),
(11, '2008-08-04 15:21:17', '0000-00-00 00:00:00', 'PayPalExpressReturn', 'Thank You for using Quinta CMS!', 'paypalexpressreturn', 1, 1, 0, 1, 11, 1, 1),
(12, '2008-09-03 09:44:24', '0000-00-00 00:00:00', 'LostPassword', 'Lost Password Retrieval', '', 1, 1, 0, 1, 1, 1, 1);

CREATE TABLE `page_content_category_assn` (
  `page_id` bigint(20) unsigned NOT NULL,
  `content_category_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`content_category_id`,`page_id`),
  KEY `idx_page_content_category_page` (`page_id`),
  KEY `idx_page_content_category_content_category` (`content_category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `page_doc_type` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_page_doc_type` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

INSERT INTO `page_doc_type` (`id`, `name`) VALUES
(7, '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">'),
(6, '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">'),
(5, '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">'),
(9, '<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">'),
(8, '<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">'),
(1, '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">'),
(10, '<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">'),
(11, '<!DOCTYPE HTML PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">'),
(12, '<!DOCTYPE HTML PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.1//EN" "http://www.openmobilealliance.org/tech/DTD/xhtml-mobile11.dtd">'),
(2, 'PDF'),
(4, 'RSS'),
(3, 'TEXT');

CREATE TABLE `page_html_meta_tag_assn` (
  `page_id` bigint(20) unsigned NOT NULL,
  `html_meta_tag_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`html_meta_tag_id`,`page_id`),
  KEY `idx_page_html_meta_tag_page` (`page_id`),
  KEY `idx_page_html_meta_tag_html_meta_tag` (`html_meta_tag_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `page_java_script_assn` (
  `page_id` bigint(20) unsigned NOT NULL,
  `java_script_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`java_script_id`,`page_id`),
  KEY `idx_page_java_script_page` (`page_id`),
  KEY `idx_page_java_script_java_script` (`java_script_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `page_status_type` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_page_status_type` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

INSERT INTO `page_status_type` (`id`, `name`) VALUES
(3, 'Draft'),
(4, 'Internal'),
(1, 'Published'),
(2, 'Unpublished');

CREATE TABLE `page_style_sheet_assn` (
  `page_id` bigint(20) unsigned NOT NULL,
  `style_sheet_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`style_sheet_id`,`page_id`),
  KEY `idx_page_style_sheet_page` (`page_id`),
  KEY `idx_page_style_sheet_style_sheet` (`style_sheet_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `page_style_sheet_assn` (`page_id`, `style_sheet_id`) VALUES
(1, 1),
(2, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1);

CREATE TABLE `page_type` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_page_type` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

INSERT INTO `page_type` (`id`, `name`) VALUES
(18, 'Admin'),
(16, 'Article'),
(17, 'ArticleList'),
(1, 'Basic'),
(10, 'Checkout'),
(5, 'EditContactInfo'),
(6, 'EditUsers'),
(14, 'Forum'),
(15, 'ForumList'),
(2, 'Home'),
(3, 'Login'),
(13, 'OrderHistory'),
(11, 'Payment'),
(7, 'Product'),
(8, 'ProductList'),
(12, 'ShippingInfo'),
(9, 'ShoppingCartView'),
(4, 'UserHome');

CREATE TABLE `page_usergroup_assn` (
  `page_id` bigint(20) unsigned NOT NULL,
  `usergroup_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`usergroup_id`,`page_id`),
  KEY `idx_page_usergroup_page` (`page_id`),
  KEY `idx_page_usergroup_usergroup` (`usergroup_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `payment_method` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(128) DEFAULT 'Payment Method',
  `service_provider` varchar(128) DEFAULT NULL,
  `service_type` varchar(128) DEFAULT NULL,
  `action_class_name` varchar(128) DEFAULT NULL,
  `description` text,
  `image_uri` varchar(128) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '0',
  `requires_cc_number` tinyint(1) DEFAULT '0',
  `save_cc_number` tinyint(1) DEFAULT '0',
  `test_mode` tinyint(1) DEFAULT '1',
  `sort_order` tinyint(3) unsigned DEFAULT '0',
  `payment_type_id` tinyint(3) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `idx_payment_method_type` (`payment_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

INSERT INTO `payment_method` (`id`, `title`, `service_provider`, `service_type`, `action_class_name`, `description`, `image_uri`, `active`, `requires_cc_number`, `save_cc_number`, `test_mode`, `sort_order`, `payment_type_id`) VALUES
(1, 'Check/Money Order', 'Our Store', 'Mail', 'PayByMailAction', 'Payment sent by mail', NULL, 1, 0, 0, 1, 0, 3),
(2, 'PayPal Express Checkout', 'Paypal.com', 'Express Checkout', 'PayPalNVPAction', 'Implementation of PayPal Express Checkout', NULL, 0, 0, 0, 1, 2, 1),
(3, 'Credit Card', 'Authorize.net', 'Credit Card', 'AuthorizeNetAction', 'Authorize.net credit card payment processing', NULL, 0, 0, 0, 1, 3, 1);

CREATE TABLE `payment_type` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_payment_type` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

INSERT INTO `payment_type` (`id`, `name`) VALUES
(3, 'Cash'),
(6, 'Complimentary'),
(4, 'Credit'),
(5, 'GiftCertificate'),
(2, 'MailIn'),
(1, 'Online');

CREATE TABLE `paypal_transaction` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` bigint(20) unsigned NOT NULL,
  `correlation_id` varchar(128) DEFAULT NULL,
  `transaction_id` varchar(128) DEFAULT NULL,
  `pp_token` varchar(128) DEFAULT NULL,
  `payer_id` varchar(128) DEFAULT NULL,
  `payer_status` varchar(128) DEFAULT NULL,
  `payment_status` varchar(128) DEFAULT NULL,
  `ack_returned` varchar(32) DEFAULT NULL,
  `api_action` varchar(32) DEFAULT NULL,
  `time_stamp` datetime DEFAULT NULL,
  `api_version` varchar(4) DEFAULT NULL,
  `messages` text,
  `amount` decimal(12,2) DEFAULT NULL,
  `pp_fee` decimal(12,2) DEFAULT NULL,
  `payment_method_id` tinyint(3) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `idx_pp_transaction_correlationid` (`correlation_id`),
  KEY `idx_pp_transaction_orderid` (`order_id`),
  KEY `idx_pp_transaction_payment_methodid` (`payment_method_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE `permission_type` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_permssion_type` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

INSERT INTO `permission_type` (`id`, `name`) VALUES
(5, 'Create'),
(4, 'Delete'),
(3, 'Modify'),
(1, 'None'),
(2, 'View');

CREATE TABLE `person` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name_prefix` varchar(32) DEFAULT '',
  `first_name` varchar(256) NOT NULL,
  `middle_name` varchar(128) DEFAULT '',
  `last_name` varchar(256) NOT NULL,
  `name_suffix` varchar(32) DEFAULT '',
  `nick_name` varchar(128) DEFAULT 'Anonymous',
  `avatar_uri` varchar(256) DEFAULT NULL,
  `company_name` varchar(256) DEFAULT '',
  `owner_person_id` bigint(20) unsigned DEFAULT NULL,
  `is_virtual` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_person_firstname` (`first_name`(255)),
  KEY `idx_person_last_name` (`last_name`(255)),
  KEY `owner_person_id` (`owner_person_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

INSERT INTO `person` (`id`, `name_prefix`, `first_name`, `middle_name`, `last_name`, `name_suffix`, `nick_name`, `avatar_uri`, `company_name`, `owner_person_id`, `is_virtual`) VALUES
(1, 'Mr.', 'Joe', '', 'Shmoe', 'Sr.', 'joe', '', 'JoeCo LLC.', NULL, 0),
(2, 'Ms', 'Jane ', '', 'Eyre', '', '', '', '', 1, 1),
(3, 'Doctor', 'Harold', 'foo', 'Aziz', 'PhD.', NULL, NULL, 'Azizco, Inc.', NULL, NULL),
(4, 'Miss', 'Mary', 'C.', 'Poppins', '', NULL, NULL, 'Popco', NULL, NULL);

CREATE TABLE `person_usergroup_assn` (
  `person_id` bigint(20) unsigned NOT NULL,
  `usergroup_id` mediumint(8) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`usergroup_id`,`person_id`),
  KEY `idx_person_usergroup_person` (`person_id`),
  KEY `idx_person_usergroup_usergroup` (`usergroup_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `person_usergroup_assn` (`person_id`, `usergroup_id`) VALUES
(3, 12);

CREATE TABLE `phone_number` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `number` varchar(32) NOT NULL,
  `person_id` bigint(20) unsigned NOT NULL,
  `is_primary` tinyint(3) unsigned DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `person_id` (`person_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE `product` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `manufacturer_id` bigint(20) unsigned DEFAULT '1',
  `supplier_id` bigint(20) unsigned DEFAULT '1',
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(128) NOT NULL,
  `model` varchar(128) NOT NULL,
  `short_description` varchar(128) DEFAULT NULL,
  `long_description` text,
  `msrp` decimal(12,2) unsigned DEFAULT NULL,
  `wholesale_price` decimal(12,2) unsigned DEFAULT NULL,
  `retail_price` decimal(12,2) unsigned DEFAULT NULL,
  `cost` decimal(12,2) unsigned DEFAULT NULL,
  `weight` float(10,6) unsigned DEFAULT NULL,
  `height` float(10,6) unsigned DEFAULT NULL,
  `width` float(10,6) unsigned DEFAULT NULL,
  `depth` float(10,6) unsigned DEFAULT NULL,
  `is_virtual` tinyint(1) NOT NULL DEFAULT '0',
  `type_id` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `status_id` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `view_count` bigint(20) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `model` (`model`),
  KEY `idx_product_retail` (`retail_price`),
  KEY `idx_product_type` (`type_id`),
  KEY `idx_product_status` (`status_id`),
  KEY `manufacturer_id` (`manufacturer_id`),
  KEY `supplier_id` (`supplier_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE `product_category` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) DEFAULT NULL,
  `title` varchar(128) DEFAULT NULL,
  `description` varchar(256) DEFAULT NULL,
  `image_uri` varchar(256) DEFAULT NULL,
  `parent_product_category_id` mediumint(8) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_product_category_name` (`name`),
  KEY `idx_product_category_parent` (`parent_product_category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE `product_image` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` bigint(20) unsigned NOT NULL,
  `title` varchar(128) DEFAULT NULL,
  `alt_tag` varchar(128) DEFAULT NULL,
  `description` varchar(256) DEFAULT NULL,
  `uri` varchar(256) DEFAULT NULL,
  `x_size` smallint(5) unsigned DEFAULT NULL,
  `y_size` smallint(5) unsigned DEFAULT NULL,
  `size_type` tinyint(3) unsigned DEFAULT '2',
  PRIMARY KEY (`id`),
  KEY `idx_size_type` (`size_type`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE `product_product_category_assn` (
  `product_id` bigint(20) unsigned NOT NULL,
  `product_category_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`product_category_id`,`product_id`),
  KEY `idx_product_product_category_product` (`product_id`),
  KEY `idx_product_product_category_product_category` (`product_category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `product_status_type` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_product_status_type` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

INSERT INTO `product_status_type` (`id`, `name`) VALUES
(2, 'Active'),
(3, 'Disabled'),
(1, 'Restricted'),
(4, 'Retired');

CREATE TABLE `product_type` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_product_type` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

INSERT INTO `product_type` (`id`, `name`) VALUES
(4, 'Assembly'),
(5, 'Download'),
(3, 'Internal'),
(7, 'Other'),
(1, 'Service'),
(2, 'Storefront'),
(6, 'Virtual');

CREATE TABLE `related_product_assn` (
  `product_id` bigint(20) unsigned NOT NULL,
  `related_product_id` bigint(20) unsigned NOT NULL,
  KEY `product_id` (`product_id`),
  KEY `related_product_id` (`related_product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `shipping_method` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(128) DEFAULT 'Shipping Method',
  `carrier` varchar(128) DEFAULT NULL,
  `service_type` varchar(128) DEFAULT NULL,
  `class_name` varchar(128) DEFAULT NULL,
  `transit_time` varchar(16) DEFAULT NULL,
  `description` text,
  `image_filename` varchar(128) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '0',
  `is_international` tinyint(1) DEFAULT '0',
  `test_mode` tinyint(1) DEFAULT '1',
  `sort_order` tinyint(3) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

INSERT INTO `shipping_method` (`id`, `title`, `carrier`, `service_type`, `class_name`, `transit_time`, `description`, `image_filename`, `active`, `is_international`, `test_mode`, `sort_order`) VALUES
(1, 'Local Pickup', 'PickUp', 'Counter', 'NoClass', '0', 'Pick up at the store.', NULL, 0, 0, 1, 0),
(2, 'United States Postal Service', 'USPS', 'FIRST CLASS', 'USPS', '2 - 4', 'Basic ground delivery', NULL, 0, 0, 1, 0),
(3, 'United States Postal Service', 'USPS', 'PRIORITY', 'USPS', '2 - 3', 'Priority Mail', NULL, 0, 0, 1, 0),
(4, 'United States Postal Service', 'USPS', 'EXPRESS', 'USPS', '1 - 2', 'Express Mail', NULL, 0, 0, 1, 0),
(5, 'United States Postal Service', 'USPS', 'Global Express Guaranteed', 'USPSIntlRateCalculator', '3 - 5', 'Premium international service', NULL, 0, 1, 1, 0),
(6, 'United States Postal Service', 'USPS', 'Express Mail International', 'USPSIntlRateCalculator', '3 - 5', 'Expedited International service', NULL, 0, 1, 1, 0),
(7, 'United States Postal Service', 'USPS', 'Priority Mail International', 'USPSIntlRateCalculator', '4 - 9', 'Reliable, economical accelerated airmail', NULL, 0, 1, 1, 0),
(8, 'United States Postal Service', 'USPS', 'First Class Mail International', 'USPSIntlRateCalculator', '5 - 28', 'Generic, no frills, low cost service', NULL, 0, 1, 1, 0),
(9, 'Federal Express', 'FDXG', 'FEDEX_GROUND', 'Fedex', '4 - 5', 'Basic ground service', NULL, 0, 1, 1, 0),
(10, 'Federal Express', 'FDXE', 'FEDEX_2_DAY', 'Fedex', '2', '2 day service', NULL, 0, 1, 1, 0),
(11, 'Federal Express', 'FDXE', 'STANDARD_OVERNIGHT', 'Fedex', '1', 'Standard Overnight service', NULL, 0, 1, 1, 0),
(12, 'Federal Express', 'FDXE', 'INTERNATIONAL_ECONOMY', 'Fedex', '3 - 5', 'Economy International service', NULL, 0, 1, 1, 0),
(13, 'Federal Express', 'FDXE', 'INTERNATIONAL_PRIORITY', 'Fedex', ' 2 - 3 ', 'Priority International service', NULL, 0, 1, 1, 0),
(14, 'Federal Express', 'FDXE', 'INTERNATIONAL_FIRST', 'Fedex', '2', 'First class International service', NULL, 0, 1, 1, 0);

CREATE TABLE `shipping_rate` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `rate` decimal(2,2) NOT NULL,
  `zone_id` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_shipping_zone` (`zone_id`),
  KEY `idx_shipping_rate` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE `shopping_cart` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_modification` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `account_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `account_id` (`account_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE `shopping_cart_item` (
  `shopping_cart_id` bigint(20) unsigned NOT NULL,
  `product_id` bigint(20) unsigned NOT NULL,
  `quantity` mediumint(8) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`product_id`,`shopping_cart_id`),
  KEY `idx_shopping_cart_product_shopping_cart` (`shopping_cart_id`),
  KEY `idx_shopping_cart_product_product` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `style_sheet` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) DEFAULT NULL,
  `description` varchar(256) DEFAULT NULL,
  `filename` varchar(128) DEFAULT NULL,
  `type` enum('HTML','XML') DEFAULT 'HTML',
  PRIMARY KEY (`id`),
  KEY `idx_style_sheet_name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

INSERT INTO `style_sheet` (`id`, `name`, `description`, `filename`, `type`) VALUES
(1, 'Quinta default css', 'The default style sheet for Quinta', 'quinta.css', '');

CREATE TABLE `tax_rate` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `zone_id` smallint(5) unsigned NOT NULL,
  `rate` decimal(4,4) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_tax_zone` (`zone_id`),
  KEY `idx_tax_rate` (`rate`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE `tracking_number` (
  `order_id` bigint(20) unsigned NOT NULL,
  `number` varchar(64) NOT NULL DEFAULT '',
  PRIMARY KEY (`order_id`,`number`),
  KEY `idx_tracking_number_orderid` (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `usergroup` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_usergroup` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

INSERT INTO `usergroup` (`id`, `name`) VALUES
(5, 'Administrators'),
(3, 'Customers'),
(4, 'Designers'),
(9, 'Developers'),
(12, 'Employees'),
(6, 'Engineers'),
(1, 'Everyone'),
(7, 'Manufacturers'),
(2, 'Members'),
(11, 'Students'),
(8, 'Suppliers'),
(10, 'Teachers');

CREATE TABLE `zone_type` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `country_id` smallint(5) unsigned NOT NULL DEFAULT '255',
  `code` varchar(32) NOT NULL DEFAULT 'N/A',
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_zone_type_name` (`name`),
  KEY `idx_zone_code` (`code`),
  KEY `country_id` (`country_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=256 ;

INSERT INTO `zone_type` (`id`, `name`, `country_id`, `code`) VALUES
(1, 'Alabama', 223, 'AL'),
(2, 'Alaska', 223, 'AK'),
(3, 'American Samoa', 223, 'AS'),
(4, 'Arizona', 223, 'AZ'),
(5, 'Arkansas', 223, 'AR'),
(6, 'Armed Forces Africa', 223, 'AF'),
(7, 'Armed Forces Americas', 223, 'AA'),
(8, 'Armed Forces Canada', 223, 'AC'),
(9, 'Armed Forces Europe', 223, 'AE'),
(10, 'Armed Forces Middle East', 223, 'AM'),
(11, 'Armed Forces Pacific', 223, 'AP'),
(12, 'California', 223, 'CA'),
(13, 'Colorado', 223, 'CO'),
(14, 'Connecticut', 223, 'CT'),
(15, 'Delaware', 223, 'DE'),
(16, 'District of Columbia', 223, 'DC'),
(17, 'Federated States Of Micronesia', 223, 'FM'),
(18, 'Florida', 223, 'FL'),
(19, 'Georgia', 223, 'GA'),
(20, 'Guam', 223, 'GU'),
(21, 'Hawaii', 223, 'HI'),
(22, 'Idaho', 223, 'ID'),
(23, 'Illinois', 223, 'IL'),
(24, 'Indiana', 223, 'IN'),
(25, 'Iowa', 223, 'IA'),
(26, 'Kansas', 223, 'KS'),
(27, 'Kentucky', 223, 'KY'),
(28, 'Louisiana', 223, 'LA'),
(29, 'Maine', 223, 'ME'),
(30, 'Marshall Islands', 223, 'MH'),
(31, 'Maryland', 223, 'MD'),
(32, 'Massachusetts', 223, 'MA'),
(33, 'Michigan', 223, 'MI'),
(34, 'Minnesota', 223, 'MN'),
(35, 'Mississippi', 223, 'MS'),
(36, 'Missouri', 223, 'MO'),
(37, 'Montana', 223, 'MT'),
(38, 'Nebraska', 223, 'NE'),
(39, 'Nevada', 223, 'NV'),
(40, 'New Hampshire', 223, 'NH'),
(41, 'New Jersey', 223, 'NJ'),
(42, 'New Mexico', 223, 'NM'),
(43, 'New York', 223, 'NY'),
(44, 'North Carolina', 223, 'NC'),
(45, 'North Dakota', 223, 'ND'),
(46, 'Northern Mariana Islands', 223, 'MP'),
(47, 'Ohio', 223, 'OH'),
(48, 'Oklahoma', 223, 'OK'),
(49, 'Oregon', 223, 'OR'),
(50, 'Palau', 163, 'PW'),
(51, 'Pennsylvania', 223, 'PA'),
(52, 'Puerto Rico', 223, 'PR'),
(53, 'Rhode Island', 223, 'RI'),
(54, 'South Carolina', 223, 'SC'),
(55, 'South Dakota', 223, 'SD'),
(56, 'Tennessee', 223, 'TN'),
(57, 'Texas', 223, 'TX'),
(58, 'Utah', 223, 'UT'),
(59, 'Vermont', 223, 'VT'),
(60, 'Virgin Islands', 223, 'VI'),
(61, 'Virginia', 223, 'VA'),
(62, 'Washington', 223, 'WA'),
(63, 'West Virginia', 223, 'WV'),
(64, 'Wisconsin', 223, 'WI'),
(65, 'Wyoming', 223, 'WY'),
(66, 'Alberta', 38, 'AB'),
(67, 'British Columbia', 38, 'BC'),
(68, 'Manitoba', 38, 'MB'),
(69, 'Newfoundland', 38, 'NL'),
(70, 'New Brunswick', 38, 'NB'),
(71, 'Nova Scotia', 38, 'NS'),
(72, 'Northwest Territories', 38, 'NT'),
(73, 'Nunavut', 38, 'NU'),
(74, 'Ontario', 38, 'ON'),
(75, 'Prince Edward Island', 38, 'PE'),
(76, 'Quebec', 38, 'QC'),
(77, 'Saskatchewan', 38, 'SK'),
(78, 'Yukon Territory', 38, 'YT'),
(79, 'Niedersachsen', 81, 'NDS'),
(80, 'Baden WÃ¼rtemberg', 81, 'BAW'),
(81, 'Bayern', 81, 'BAY'),
(82, 'Berlin', 81, 'BER'),
(83, 'Brandenburg', 81, 'BRG'),
(84, 'Bremen', 81, 'BRE'),
(85, 'Hamburg', 81, 'HAM'),
(86, 'Hessen', 81, 'HES'),
(87, 'Mecklenburg-Vorpommern', 81, 'MEC'),
(88, 'Nordrhein-Westfalen', 81, 'NRW'),
(89, 'Rheinland-Pfalz', 81, 'RHE'),
(90, 'Saarland', 81, 'SAR'),
(91, 'Sachsen', 81, 'SAS'),
(92, 'Sachsen-Anhalt', 81, 'SAC'),
(93, 'Schleswig-Holstein', 81, 'SCN'),
(94, 'Thringen', 81, 'THE'),
(95, 'Wien', 14, 'WI'),
(96, 'Niedersterreich', 14, 'NO'),
(97, 'Obersterreich', 14, 'OO'),
(98, 'Salzburg', 14, 'SB'),
(99, 'KÃ¤rnten', 14, 'KN'),
(100, 'Steiermark', 14, 'ST'),
(101, 'Tirol', 14, 'TI'),
(102, 'Burgenland', 14, 'BL'),
(103, 'Voralberg', 14, 'VB'),
(104, 'Aargau', 204, 'AG'),
(105, 'Appenzell Innerrhoden', 204, 'AI'),
(106, 'Appenzell Ausserrhoden', 204, 'AR'),
(107, 'Bern', 204, 'BE'),
(108, 'Basel-Landschaft', 204, 'BL'),
(109, 'Basel-Stadt', 204, 'BS'),
(110, 'Freiburg', 204, 'FR'),
(111, 'Genf', 204, 'GE'),
(112, 'Glarus', 204, 'GL'),
(113, 'Graubnden', 204, 'JU'),
(114, 'Jura', 204, 'JU'),
(115, 'Luzern', 204, 'LU'),
(116, 'Neuenburg', 204, 'NE'),
(117, 'Nidwalden', 204, 'NW'),
(118, 'Obwalden', 204, 'OW'),
(119, 'St. Gallen', 204, 'SG'),
(120, 'Schaffhausen', 204, 'SH'),
(121, 'Solothurn', 204, 'SO'),
(122, 'Schwyz', 204, 'SZ'),
(123, 'Thurgau', 204, 'TG'),
(124, 'Tessin', 204, 'TI'),
(125, 'Uri', 204, 'UR'),
(126, 'Waadt', 204, 'VD'),
(127, 'Wallis', 204, 'VS'),
(128, 'Zug', 204, 'ZG'),
(129, 'Zrich', 204, 'ZH'),
(130, 'A Corua', 195, 'A Corua'),
(131, 'Alava', 195, 'Alava'),
(132, 'Albacete', 195, 'Albacete'),
(133, 'Alicante', 195, 'Alicante'),
(134, 'Almeria', 195, 'Almeria'),
(135, 'Asturias', 195, 'Asturias'),
(136, 'Avila', 195, 'Avila'),
(137, 'Badajoz', 195, 'Badajoz'),
(138, 'Baleares', 195, 'Baleares'),
(139, 'Barcelona', 195, 'Barcelona'),
(140, 'Burgos', 195, 'Burgos'),
(141, 'Caceres', 195, 'Caceres'),
(142, 'Cadiz', 195, 'Cadiz'),
(143, 'Cantabria', 195, 'Cantabria'),
(144, 'Castellon', 195, 'Castellon'),
(145, 'Ceuta', 195, 'Ceuta'),
(146, 'Ciudad Real', 195, 'Ciudad Real'),
(147, 'Cordoba', 195, 'Cordoba'),
(148, 'Cuenca', 195, 'Cuenca'),
(149, 'Girona', 195, 'Girona'),
(150, 'Granada', 195, 'Granada'),
(151, 'Guadalajara', 195, 'Guadalajara'),
(152, 'Guipuzcoa', 195, 'Guipuzcoa'),
(153, 'Huelva', 195, 'Huelva'),
(154, 'Huesca', 195, 'Huesca'),
(155, 'Jaen', 195, 'Jaen'),
(156, 'La Rioja', 195, 'La Rioja'),
(157, 'Las Palmas', 195, 'Las Palmas'),
(158, 'Leon', 195, 'Leon'),
(159, 'Lleida', 195, 'Lleida'),
(160, 'Lugo', 195, 'Lugo'),
(161, 'Madrid', 195, 'Madrid'),
(162, 'Malaga', 195, 'Malaga'),
(163, 'Melilla', 195, 'Melilla'),
(164, 'Murcia', 195, 'Murcia'),
(165, 'Navarra', 195, 'Navarra'),
(166, 'Ourense', 195, 'Ourense'),
(167, 'Palencia', 195, 'Palencia'),
(168, 'Pontevedra', 195, 'Pontevedra'),
(169, 'Salamanca', 195, 'Salamanca'),
(170, 'Santa Cruz de Tenerife', 195, 'Santa Cruz de Tenerife'),
(171, 'Segovia', 195, 'Segovia'),
(172, 'Sevilla', 195, 'Sevilla'),
(173, 'Soria', 195, 'Soria'),
(174, 'Tarragona', 195, 'Tarragona'),
(175, 'Teruel', 195, 'Teruel'),
(176, 'Toledo', 195, 'Toledo'),
(177, 'Valencia', 195, 'Valencia'),
(178, 'Valladolid', 195, 'Valladolid'),
(179, 'Vizcaya', 195, 'Vizcaya'),
(180, 'Zamora', 195, 'Zamora'),
(181, 'Zaragoza', 195, 'Zaragoza'),
(182, 'Australian Capital Territory', 13, 'ACT'),
(183, 'New South Wales', 13, 'NSW'),
(184, 'Northern Territory', 13, 'NT'),
(185, 'Queensland', 13, 'QLD'),
(186, 'South Australia', 13, 'SA'),
(187, 'Tasmania', 13, 'TAS'),
(188, 'Victoria', 13, 'VIC'),
(189, 'Western Australia', 13, 'WA'),
(255, 'No Zone', 255, '--');


ALTER TABLE `account`
  ADD CONSTRAINT `account_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `account_type` (`id`),
  ADD CONSTRAINT `account_ibfk_2` FOREIGN KEY (`status_id`) REFERENCES `account_status_type` (`id`),
  ADD CONSTRAINT `account_ibfk_3` FOREIGN KEY (`person_id`) REFERENCES `person` (`id`) ON DELETE CASCADE;

ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`zone_id`) REFERENCES `zone_type` (`id`),
  ADD CONSTRAINT `address_ibfk_2` FOREIGN KEY (`country_id`) REFERENCES `country_type` (`id`),
  ADD CONSTRAINT `address_ibfk_3` FOREIGN KEY (`type_id`) REFERENCES `address_type` (`id`),
  ADD CONSTRAINT `address_ibfk_4` FOREIGN KEY (`person_id`) REFERENCES `person` (`id`);

ALTER TABLE `authorize_net_transaction`
  ADD CONSTRAINT `authorize_net_transaction_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE;

ALTER TABLE `content_block_page_assn`
  ADD CONSTRAINT `content_block_page_assn_ibfk_1` FOREIGN KEY (`page_id`) REFERENCES `page` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `content_block_page_assn_ibfk_2` FOREIGN KEY (`content_block_id`) REFERENCES `content_block` (`id`) ON DELETE CASCADE;

ALTER TABLE `content_item`
  ADD CONSTRAINT `content_item_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `content_status_type` (`id`),
  ADD CONSTRAINT `content_item_ibfk_2` FOREIGN KEY (`type_id`) REFERENCES `content_type` (`id`),
  ADD CONSTRAINT `content_item_ibfk_3` FOREIGN KEY (`creator_id`) REFERENCES `person` (`id`);

ALTER TABLE `content_item_content_block_assn`
  ADD CONSTRAINT `content_item_content_block_assn_ibfk_1` FOREIGN KEY (`content_block_id`) REFERENCES `content_block` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `content_item_content_block_assn_ibfk_2` FOREIGN KEY (`content_item_id`) REFERENCES `content_item` (`id`) ON DELETE CASCADE;

ALTER TABLE `content_item_content_category_assn`
  ADD CONSTRAINT `content_item_content_category_assn_ibfk_1` FOREIGN KEY (`content_category_id`) REFERENCES `content_category` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `content_item_content_category_assn_ibfk_2` FOREIGN KEY (`content_item_id`) REFERENCES `content_item` (`id`) ON DELETE CASCADE;

ALTER TABLE `content_item_usergroup_assn`
  ADD CONSTRAINT `content_item_usergroup_assn_ibfk_1` FOREIGN KEY (`usergroup_id`) REFERENCES `usergroup` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `content_item_usergroup_assn_ibfk_2` FOREIGN KEY (`content_item_id`) REFERENCES `content_item` (`id`) ON DELETE CASCADE;

ALTER TABLE `email_address`
  ADD CONSTRAINT `email_address_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `person` (`id`) ON DELETE CASCADE;

ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `menu_status_type` (`id`),
  ADD CONSTRAINT `menu_ibfk_2` FOREIGN KEY (`type_id`) REFERENCES `menu_type` (`id`),
  ADD CONSTRAINT `menu_ibfk_3` FOREIGN KEY (`parent_menu_item_id`) REFERENCES `menu_item` (`id`);

ALTER TABLE `menu_content_block_assn`
  ADD CONSTRAINT `menu_content_block_assn_ibfk_1` FOREIGN KEY (`content_block_id`) REFERENCES `content_block` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `menu_content_block_assn_ibfk_2` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id`) ON DELETE CASCADE;

ALTER TABLE `menu_item`
  ADD CONSTRAINT `menu_item_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `menu_status_type` (`id`),
  ADD CONSTRAINT `menu_item_ibfk_2` FOREIGN KEY (`type_id`) REFERENCES `menu_item_type` (`id`),
  ADD CONSTRAINT `menu_item_ibfk_3` FOREIGN KEY (`page_id`) REFERENCES `page` (`id`) ON DELETE CASCADE;

ALTER TABLE `menu_item_menu_assn`
  ADD CONSTRAINT `menu_item_menu_assn_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `menu_item_menu_assn_ibfk_2` FOREIGN KEY (`menu_item_id`) REFERENCES `menu_item` (`id`) ON DELETE CASCADE;

ALTER TABLE `module`
  ADD CONSTRAINT `module_ibfk_1` FOREIGN KEY (`parent_module_id`) REFERENCES `module` (`id`),
  ADD CONSTRAINT `module_ibfk_2` FOREIGN KEY (`content_block_id`) REFERENCES `content_block` (`id`);

ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`shipping_method_id`) REFERENCES `shipping_method` (`id`),
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`payment_method_id`) REFERENCES `payment_method` (`id`),
  ADD CONSTRAINT `order_ibfk_3` FOREIGN KEY (`status_id`) REFERENCES `order_status_type` (`id`),
  ADD CONSTRAINT `order_ibfk_4` FOREIGN KEY (`type_id`) REFERENCES `order_type` (`id`),
  ADD CONSTRAINT `order_ibfk_5` FOREIGN KEY (`account_id`) REFERENCES `account` (`id`);

ALTER TABLE `order_address`
  ADD CONSTRAINT `order_address_ibfk_1` FOREIGN KEY (`zone_id`) REFERENCES `zone_type` (`id`),
  ADD CONSTRAINT `order_address_ibfk_2` FOREIGN KEY (`country_id`) REFERENCES `country_type` (`id`),
  ADD CONSTRAINT `order_address_ibfk_3` FOREIGN KEY (`type_id`) REFERENCES `order_address_type` (`id`),
  ADD CONSTRAINT `order_address_ibfk_4` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE;

ALTER TABLE `order_change`
  ADD CONSTRAINT `order_change_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `order_change_type` (`id`),
  ADD CONSTRAINT `order_change_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE;

ALTER TABLE `order_item`
  ADD CONSTRAINT `order_item_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `order_item_status_type` (`id`),
  ADD CONSTRAINT `order_item_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `order_item_ibfk_3` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE;

ALTER TABLE `order_status_history`
  ADD CONSTRAINT `order_status_history_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `order_status_type` (`id`),
  ADD CONSTRAINT `order_status_history_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE;

ALTER TABLE `page`
  ADD CONSTRAINT `page_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `page_status_type` (`id`),
  ADD CONSTRAINT `page_ibfk_2` FOREIGN KEY (`type_id`) REFERENCES `page_type` (`id`),
  ADD CONSTRAINT `page_ibfk_3` FOREIGN KEY (`doc_type_id`) REFERENCES `page_doc_type` (`id`);

ALTER TABLE `page_content_category_assn`
  ADD CONSTRAINT `page_content_category_assn_ibfk_1` FOREIGN KEY (`content_category_id`) REFERENCES `content_category` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `page_content_category_assn_ibfk_2` FOREIGN KEY (`page_id`) REFERENCES `page` (`id`) ON DELETE CASCADE;

ALTER TABLE `page_html_meta_tag_assn`
  ADD CONSTRAINT `page_html_meta_tag_assn_ibfk_1` FOREIGN KEY (`html_meta_tag_id`) REFERENCES `html_meta_tag` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `page_html_meta_tag_assn_ibfk_2` FOREIGN KEY (`page_id`) REFERENCES `page` (`id`) ON DELETE CASCADE;

ALTER TABLE `page_java_script_assn`
  ADD CONSTRAINT `page_java_script_assn_ibfk_1` FOREIGN KEY (`java_script_id`) REFERENCES `java_script` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `page_java_script_assn_ibfk_2` FOREIGN KEY (`page_id`) REFERENCES `page` (`id`) ON DELETE CASCADE;

ALTER TABLE `page_style_sheet_assn`
  ADD CONSTRAINT `page_style_sheet_assn_ibfk_1` FOREIGN KEY (`style_sheet_id`) REFERENCES `style_sheet` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `page_style_sheet_assn_ibfk_2` FOREIGN KEY (`page_id`) REFERENCES `page` (`id`) ON DELETE CASCADE;

ALTER TABLE `page_usergroup_assn`
  ADD CONSTRAINT `page_usergroup_assn_ibfk_1` FOREIGN KEY (`usergroup_id`) REFERENCES `usergroup` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `page_usergroup_assn_ibfk_2` FOREIGN KEY (`page_id`) REFERENCES `page` (`id`) ON DELETE CASCADE;

ALTER TABLE `payment_method`
  ADD CONSTRAINT `payment_method_ibfk_1` FOREIGN KEY (`payment_type_id`) REFERENCES `payment_type` (`id`);

ALTER TABLE `paypal_transaction`
  ADD CONSTRAINT `paypal_transaction_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE;

ALTER TABLE `person`
  ADD CONSTRAINT `person_ibfk_1` FOREIGN KEY (`owner_person_id`) REFERENCES `person` (`id`) ON DELETE CASCADE;

ALTER TABLE `person_usergroup_assn`
  ADD CONSTRAINT `person_usergroup_assn_ibfk_1` FOREIGN KEY (`usergroup_id`) REFERENCES `usergroup` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `person_usergroup_assn_ibfk_2` FOREIGN KEY (`person_id`) REFERENCES `person` (`id`) ON DELETE CASCADE;

ALTER TABLE `phone_number`
  ADD CONSTRAINT `phone_number_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `person` (`id`) ON DELETE CASCADE;

ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `product_type` (`id`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`status_id`) REFERENCES `product_status_type` (`id`),
  ADD CONSTRAINT `product_ibfk_3` FOREIGN KEY (`manufacturer_id`) REFERENCES `person` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `product_ibfk_4` FOREIGN KEY (`supplier_id`) REFERENCES `person` (`id`) ON DELETE SET NULL;

ALTER TABLE `product_image`
  ADD CONSTRAINT `product_image_ibfk_1` FOREIGN KEY (`size_type`) REFERENCES `image_size_type` (`id`),
  ADD CONSTRAINT `product_image_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE;

ALTER TABLE `product_product_category_assn`
  ADD CONSTRAINT `product_product_category_assn_ibfk_1` FOREIGN KEY (`product_category_id`) REFERENCES `product_category` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_product_category_assn_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE;

ALTER TABLE `related_product_assn`
  ADD CONSTRAINT `related_product_assn_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `related_product_assn_ibfk_2` FOREIGN KEY (`related_product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE;

ALTER TABLE `shipping_rate`
  ADD CONSTRAINT `shipping_rate_ibfk_1` FOREIGN KEY (`zone_id`) REFERENCES `zone_type` (`id`);

ALTER TABLE `shopping_cart`
  ADD CONSTRAINT `shopping_cart_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `account` (`id`) ON DELETE CASCADE;

ALTER TABLE `shopping_cart_item`
  ADD CONSTRAINT `shopping_cart_item_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `shopping_cart_item_ibfk_2` FOREIGN KEY (`shopping_cart_id`) REFERENCES `shopping_cart` (`id`) ON DELETE CASCADE;

ALTER TABLE `tax_rate`
  ADD CONSTRAINT `tax_rate_ibfk_1` FOREIGN KEY (`zone_id`) REFERENCES `zone_type` (`id`);

ALTER TABLE `tracking_number`
  ADD CONSTRAINT `tracking_number_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE;

ALTER TABLE `zone_type`
  ADD CONSTRAINT `zone_type_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `country_type` (`id`) ON DELETE CASCADE;
SET FOREIGN_KEY_CHECKS=1;

-- auto update last_modification fields ..
CREATE TRIGGER content_item_last_mod BEFORE UPDATE ON content_item FOR EACH ROW SET NEW.last_modification = NOW();
CREATE TRIGGER address_last_mod BEFORE UPDATE ON address FOR EACH ROW SET NEW.last_modification = NOW();
CREATE TRIGGER order_address_last_mod BEFORE UPDATE ON order_address FOR EACH ROW SET NEW.last_modification = NOW();
CREATE TRIGGER order_last_mod BEFORE UPDATE ON `order` FOR EACH ROW SET NEW.last_modification = NOW();
CREATE TRIGGER shopping_cart_last_mod BEFORE UPDATE ON shopping_cart FOR EACH ROW SET NEW.last_modification = NOW();
CREATE TRIGGER page_last_mod BEFORE UPDATE ON page FOR EACH ROW SET NEW.last_modification = NOW();
