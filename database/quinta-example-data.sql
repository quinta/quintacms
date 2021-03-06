SET FOREIGN_KEY_CHECKS=0;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


INSERT INTO `account` (`id`, `registration_date`, `username`, `password`, `notes`, `last_login`, `login_count`, `online`, `onetime_password`, `valid_password`, `type_id`, `status_id`, `person_id`) VALUES
(1, '2008-06-10 19:36:18', 'joeshmoe', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '', '2011-11-12 23:12:15', 171, 0, 0, 1, 1, 1, 1),
(2, '2011-11-12 23:25:56', 'Harold', '2939094f35a3badf2a890768ba034fa5eb16e95e', NULL, '2011-11-12 23:25:57', 0, 1, 0, 1, 1, 1, 3),
(3, '2011-11-12 23:29:33', 'Mary', '61bb8d29b5be7db307cb29005bff087ebe300454', NULL, '2011-11-12 23:30:42', 1, 1, 0, 1, 1, 1, 4);

INSERT INTO `address` (`id`, `title`, `person_id`, `street_1`, `street_2`, `suburb`, `city`, `county`, `zone_id`, `country_id`, `postal_code`, `is_current`, `type_id`, `creation_date`, `last_modification`) VALUES
(1, 'My primary address', 1, '113 Any Street', 'Apt. 3', 'Bronx', 'New York', '', 43, 223, '12345', 1, 1, '2008-05-31 18:20:52', '0000-00-00 00:00:00'),
(2, 'Office', 1, '431 Office Street', '', '', 'Commerce City', 'Laredo', 13, 223, '09889', 1, 3, '2008-07-14 09:09:36', '0000-00-00 00:00:00'),
(3, '', 2, '234 Pine Street', 'Apt 1', '', 'Boulder', 'Boulder', 13, 223, '80302', 1, 5, '2008-09-26 10:55:35', '0000-00-00 00:00:00'),
(4, NULL, 3, 'My street 101', 'Apt 3', 'Somerville', 'Boston', '', 32, 223, '03293', 1, 1, '2011-11-12 23:25:56', '0000-00-00 00:00:00'),
(5, NULL, 4, '23 Penny Lane', '#67', '', 'Los Angeles', '', 12, 223, '98765', 1, 1, '2011-11-12 23:29:33', '0000-00-00 00:00:00');

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

INSERT INTO `content_item` (`id`, `name`, `cssclass`, `title`, `description`, `text`, `sort_order`, `show_title`, `show_description`, `show_creator`, `show_creation_date`, `show_last_modification`, `creator_id`, `copyright_notice`, `creation_date`, `last_modification`, `type_id`, `status_id`) VALUES
(1, 'About Quinta', 'about_quinta_content', 'Welcome to Quinta CMS!', 'An extensible Qcodo powered e-commerce CMS platform', '<p>Quinta CMS is a development platform for building and maintaining websites powered by the <a title="QCodo Website" href="qcodo.com">QCodo web development framework</a>. It is intended as an aid for QCodo developers to take care of many of the "boilerplate" tasks involved in setting up a website. Quinta is designed to be simple to use, easy to extend and very flexible. Out of the box it provides:</p>\n<p>&nbsp;</p>\n<ul>\n<li>User accounts and login</li>\n<li>Administrative back end</li>\n<li>Basic website framework (this site is an example)</li>\n<li>Blog module</li>\n<li>Ecommerce payment modules (including PayPal, AuthorizeNet)</li>\n<li>Orders and products</li>\n<li>Live shipping estimate module (FedEx, USPS)</li>\n<li>Shipping label printing (Endicia, FedEx)</li>\n<li>Module framework</li>\n<li>Page CSS and Javascript settings</li>\n<li>Content block CSS class settings</li>\n</ul>\n<p>&nbsp;</p>\n<p>Quinta is intended to be styled using CSS and modified to suit individual needs.</p>\n<p>As of this release (Version 0.3), Quinta is in a very early stage - this release is functional but under development, there is much to be done.</p>\n<p><strong>WARNING:</strong> At the risk of repeating myself, <em><span style="text-decoration: underline;">this is a very early version!</span></em> I am not a security expert and both Quinta and QCodo have yet to be audited for security!! I have done what I can but there is <strong> No Guarantee - USE AT YOUR OWN RISK!!</strong></p>\n<p><strong>NOTE:</strong> You can log in above as "joeshmoe" with the password "password" and use the account management tools. You can also visit the <a href="admin"> Administration interface </a> (currently "The Dashboard" ..)  by replacing index.php with admin/ in your browser. Also, you can see <a href="doc/core">the documentation</a> for more details about Quinta under doc/ (like admin/)  to learn more about the API and architecture.</p>\n<p>Note ALSO - currently the <strong><span style="text-decoration: underline;">admin interface is not integrated with the CMS and there is&nbsp;no login or access control</span></strong></p>\n<p>You are free to modify content in the Admin UI, add Pages, Content Items, Menus etc .. The database will be cleared and set back to the default periodically so do not worry about breaking anything - in fact, please do and file a bug report!</p>\n<p>Enjoy!</p>', 0, 1, 1, 0, 0, 0, 1, '', '2008-09-25 18:57:46', '0000-00-00 00:00:00', 2, 1),
(2, 'Quinta gets demo site', '', 'Quinta CMS now live', 'Quinta CMS demo site now available to the Public', '<p>\nYay! Now you can see Quinta in action! \n</p><p>\nYes, this is still an early version but thanks to Riccardo (who has generously provided hosting) you can play around with a "real" example site. Experiment, have fun with it.\n</p><p>\nEnjoy!\n</p>\n', 1, 1, 1, 1, 1, 0, 1, '', '2008-09-26 14:53:22', '0000-00-00 00:00:00', 2, 1),
(3, 'Sed ut perspiciatis unde omnis', '', 'Sed ut perspiciatis', 'Sed ut perspiciatis unde omnisiste natus error', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quinta architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', 2, 1, 1, 1, 1, 0, 1, '', '2008-09-27 03:22:08', '0000-00-00 00:00:00', 1, 1),
(4, 'Pollform', 'poll', 'Rate the new site', 'a poll ...', 'How do you like the new site? \n<br />Good\n<br />Bad\n<br />Cowboy Neal\n', 0, 1, 0, 0, 1, 0, 1, NULL, '2008-06-02 08:03:59', '0000-00-00 00:00:00', 1, 1),
(5, 'FooterText', '', '', '', '<a href="http://sf.net/projects/quintacms">Powered by Quinta CMS </a>\n&nbsp;&nbsp;&nbsp;\n | Boulder, Colorado | \n<a href="/index.php/Contact">contact</a> | \n<a href="/index.php/Help">help</a> |\n<a href="/index.php/Policies">policies</a> | \n<a href="/index.php/Terms">terms</a> &nbsp;&nbsp;&nbsp;&nbsp;\n', 0, 0, 0, 0, 0, 0, 1, '', '2008-09-17 09:57:21', '0000-00-00 00:00:00', 4, 1),
(6, 'Introduction to Quinta CMS', '', 'A Brief Introduction to Quinta CMS', 'This is an example of a content item description .. something brief about the item here', '<p>This is a quick introduction - hopefully just enough to get you started. Ah yes - one day perhaps there will be \nextensive documentation, but as yet I have written this \nCMS almost entirely alone (a testament to QCodos power!) and time is limited .. Feel free to help out! \n</p>\n<p>\n Until that wonderful day, experimentation is the key. And , of course, if you really want to know how Quinta CMS works: Read the source, Luke.\n</p>\n<div class="header">How to add a Content Item</div>\n<p>\n<ul>\n<li>  In the admin UI, create a new content item - click the button at the bottom of the list and an area will appear below the list of items. \n</li><li>\nAdd a name. Title, and description, CSS class, etc. are optional.\n</li><li>\nAdd a sort order - this determines where in the content block it will appear, 0 is at the top.\n</li><li>\nAssign the new item to a Content Block in the list of Content blocks.\n</li><li>\nClick Save.\n</li><li>\nEt Voila! A new content item will appear in that content block. If you want to assign it to a new content block, see the next section to create a new block and then return and assign the item to the new block..\n</li></ul>\n\n</p>\n<div class="header">How to add a Content Block</div>\n<p>\n<ul>\n</li><li>\n As with content items, create a new content block.\n</li><li>\n Again, give it a name - other things as desired.\n</li><li>\n Assign the block to a "Location" - these are the default areas of the page (ie. Header, LeftPanel, Center, etc.). Alternately you can assign the new block to a parent block and it will be rendered inside that one.\n</li></li>\nAssign the block to pages in the list.\n</li><li>\nClick Save.\n</li><li>\nEt Voila! A new content block will appear on those Pages. If you want to assign it to a new page, see the next section to create a new page.\n</li></ul>\n\n</p>\n<div class="header">How to add a Page</div>\n<p>\n<ul>\n</li><li>\nAs with the others, create a new page\n</li><li>\nGive the Page a name - Important! This will be used as the URL thus: index.php/PageName.\n</li><li>\nOptionally assign some content blocks.\n</li><li>\nClick Save.\n</li><li>\nEt Voila! If you put the page name in your browser location bar you will see the new page. If you want a menu to get there, see the next section.\n</li></ul>\n\n</p>\n<div class="header">How to add a Menu</div>\n<p>\n<ul>\n</li><li>\nAgain, create a new menu.\n</li><li>\nAdd the label - this text that will appear on the menu.\n</li><li>\nAdd a Page Name (eg. the page you created above) as the URL. Alternately, you can put a full URL, eg: http://othersite.net.\n</li><li>\nClick Save.\n</li><li>\nTry it out! It should send you to the new page\n</li></ul>\n\n</p>\n', 1, 1, 1, 1, 1, 1, 1, '', '2008-09-27 05:45:49', '0000-00-00 00:00:00', 1, 1);

INSERT INTO `content_item_content_block_assn` (`content_item_id`, `content_block_id`) VALUES
(1, 1),
(2, 2),
(3, 2),
(4, 4),
(5, 21),
(6, 22);




INSERT INTO `menu` (`id`, `name`, `title`, `css_class`, `sort_order`, `show_title`, `parent_menu_item_id`, `status_id`, `type_id`) VALUES
(1, 'MainMenu', 'Main Menu', '', 0, 0, NULL, 1, 3),
(2, 'MemberMenu', 'My Account', NULL, 0, 1, NULL, 1, 1);

INSERT INTO `menu_content_block_assn` (`menu_id`, `content_block_id`) VALUES
(1, 8),
(2, 10);

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

INSERT INTO `menu_item_menu_assn` (`menu_item_id`, `menu_id`) VALUES
(2, 1),
(4, 1),
(6, 1),
(8, 1),
(14, 2),
(15, 2),
(16, 2);

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


INSERT INTO `person` (`id`, `name_prefix`, `first_name`, `middle_name`, `last_name`, `name_suffix`, `nick_name`, `avatar_uri`, `company_name`, `owner_person_id`, `is_virtual`) VALUES
(1, 'Mr.', 'Joe', '', 'Shmoe', 'Sr.', 'joe', '', 'JoeCo LLC.', NULL, 0),
(2, 'Ms', 'Jane ', '', 'Eyre', '', '', '', '', 1, 1),
(3, 'Doctor', 'Harold', 'foo', 'Aziz', 'PhD.', NULL, NULL, 'Azizco, Inc.', NULL, NULL),
(4, 'Miss', 'Mary', 'C.', 'Poppins', '', NULL, NULL, 'Popco', NULL, NULL);

INSERT INTO `style_sheet` (`id`, `name`, `description`, `filename`, `type`) VALUES
(1, 'Quinta default css', 'The default style sheet for Quinta', 'quinta.css', '');
SET FOREIGN_KEY_CHECKS=1;
