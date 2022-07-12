<?php
	
	namespace IchiiSoft\Training\Plugin;

	class Cart
	{
		public function beforeAddProduct(
			//doi so $subject cung cap quyen truy cap vao method public goc
			\Magento\Checkout\Model\Cart $subject,
			$productInfo,
			$requestInfo = null
		) {
			$requestInfo['qty'] = 10; // tang sl len 10 khi them vao cart
			return array($productInfo, $requestInfo);
		}
	}
