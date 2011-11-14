<?php
	class QQN {
		/**
		 * @return QQNodeAccount
		 */
		static public function Account() {
			return new QQNodeAccount('account', null, null);
		}
		/**
		 * @return QQNodeAddress
		 */
		static public function Address() {
			return new QQNodeAddress('address', null, null);
		}
		/**
		 * @return QQNodeAuthorizeNetTransaction
		 */
		static public function AuthorizeNetTransaction() {
			return new QQNodeAuthorizeNetTransaction('authorize_net_transaction', null, null);
		}
		/**
		 * @return QQNodeContentBlock
		 */
		static public function ContentBlock() {
			return new QQNodeContentBlock('content_block', null, null);
		}
		/**
		 * @return QQNodeContentCategory
		 */
		static public function ContentCategory() {
			return new QQNodeContentCategory('content_category', null, null);
		}
		/**
		 * @return QQNodeContentItem
		 */
		static public function ContentItem() {
			return new QQNodeContentItem('content_item', null, null);
		}
		/**
		 * @return QQNodeEmailAddress
		 */
		static public function EmailAddress() {
			return new QQNodeEmailAddress('email_address', null, null);
		}
		/**
		 * @return QQNodeHtmlMetaTag
		 */
		static public function HtmlMetaTag() {
			return new QQNodeHtmlMetaTag('html_meta_tag', null, null);
		}
		/**
		 * @return QQNodeJavaScript
		 */
		static public function JavaScript() {
			return new QQNodeJavaScript('java_script', null, null);
		}
		/**
		 * @return QQNodeMenu
		 */
		static public function Menu() {
			return new QQNodeMenu('menu', null, null);
		}
		/**
		 * @return QQNodeMenuItem
		 */
		static public function MenuItem() {
			return new QQNodeMenuItem('menu_item', null, null);
		}
		/**
		 * @return QQNodeModule
		 */
		static public function Module() {
			return new QQNodeModule('module', null, null);
		}
		/**
		 * @return QQNodeOrder
		 */
		static public function Order() {
			return new QQNodeOrder('order', null, null);
		}
		/**
		 * @return QQNodeOrderAddress
		 */
		static public function OrderAddress() {
			return new QQNodeOrderAddress('order_address', null, null);
		}
		/**
		 * @return QQNodeOrderChange
		 */
		static public function OrderChange() {
			return new QQNodeOrderChange('order_change', null, null);
		}
		/**
		 * @return QQNodeOrderItem
		 */
		static public function OrderItem() {
			return new QQNodeOrderItem('order_item', null, null);
		}
		/**
		 * @return QQNodeOrderStatusHistory
		 */
		static public function OrderStatusHistory() {
			return new QQNodeOrderStatusHistory('order_status_history', null, null);
		}
		/**
		 * @return QQNodePage
		 */
		static public function Page() {
			return new QQNodePage('page', null, null);
		}
		/**
		 * @return QQNodePaymentMethod
		 */
		static public function PaymentMethod() {
			return new QQNodePaymentMethod('payment_method', null, null);
		}
		/**
		 * @return QQNodePaypalTransaction
		 */
		static public function PaypalTransaction() {
			return new QQNodePaypalTransaction('paypal_transaction', null, null);
		}
		/**
		 * @return QQNodePerson
		 */
		static public function Person() {
			return new QQNodePerson('person', null, null);
		}
		/**
		 * @return QQNodePhoneNumber
		 */
		static public function PhoneNumber() {
			return new QQNodePhoneNumber('phone_number', null, null);
		}
		/**
		 * @return QQNodeProduct
		 */
		static public function Product() {
			return new QQNodeProduct('product', null, null);
		}
		/**
		 * @return QQNodeProductCategory
		 */
		static public function ProductCategory() {
			return new QQNodeProductCategory('product_category', null, null);
		}
		/**
		 * @return QQNodeProductImage
		 */
		static public function ProductImage() {
			return new QQNodeProductImage('product_image', null, null);
		}
		/**
		 * @return QQNodeShippingMethod
		 */
		static public function ShippingMethod() {
			return new QQNodeShippingMethod('shipping_method', null, null);
		}
		/**
		 * @return QQNodeShippingRate
		 */
		static public function ShippingRate() {
			return new QQNodeShippingRate('shipping_rate', null, null);
		}
		/**
		 * @return QQNodeShoppingCart
		 */
		static public function ShoppingCart() {
			return new QQNodeShoppingCart('shopping_cart', null, null);
		}
		/**
		 * @return QQNodeShoppingCartItem
		 */
		static public function ShoppingCartItem() {
			return new QQNodeShoppingCartItem('shopping_cart_item', null, null);
		}
		/**
		 * @return QQNodeStyleSheet
		 */
		static public function StyleSheet() {
			return new QQNodeStyleSheet('style_sheet', null, null);
		}
		/**
		 * @return QQNodeTaxRate
		 */
		static public function TaxRate() {
			return new QQNodeTaxRate('tax_rate', null, null);
		}
		/**
		 * @return QQNodeTrackingNumber
		 */
		static public function TrackingNumber() {
			return new QQNodeTrackingNumber('tracking_number', null, null);
		}
		/**
		 * @return QQNodeUsergroup
		 */
		static public function Usergroup() {
			return new QQNodeUsergroup('usergroup', null, null);
		}
	}
?>