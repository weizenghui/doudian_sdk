<?php

//auto generated code
class autoload
{


	public static function loadClass($class)
	{
		$rootPath = dirname(__FILE__);
		$filename = $rootPath."/open/core/http/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/core/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/token/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/token/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/token/data/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/utils/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/sku_list/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/sku_list/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/product_setOffline/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/product_setOffline/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/product_setOnline/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/product_setOnline/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/product_getCatePropertyV2/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/product_getCatePropertyV2/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/product_listV2/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/product_listV2/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/sku_detail/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/sku_detail/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/shop_brandList/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/shop_brandList/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/sku_stockNum/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/sku_stockNum/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/order_BatchSearchIndex/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/order_BatchSearchIndex/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/spu_getSpuTpl/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/spu_getSpuTpl/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/product_qualificationConfig/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/product_qualificationConfig/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/order_batchEncrypt/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/order_batchEncrypt/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/product_qualityList/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/product_qualityList/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/product_qualityDetail/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/product_qualityDetail/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/spu_getKeyPropertyByCid/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/spu_getKeyPropertyByCid/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/spu_getSpuInfoBySpuId/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/spu_getSpuInfoBySpuId/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/sku_syncStock/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/sku_syncStock/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/sku_editCode/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/sku_editCode/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/brand_list/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/brand_list/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/product_del/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/product_del/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/order_searchList/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/order_searchList/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/product_editV2/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/product_editV2/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/product_qualityTask/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/product_qualityTask/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/shop_getShopCategory/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/shop_getShopCategory/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/sku_syncStockBatch/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/sku_syncStockBatch/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/product_editBuyerLimit/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/product_editBuyerLimit/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/sku_editPrice/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/sku_editPrice/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/product_addV2/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/product_addV2/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/order_orderDetail/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/order_orderDetail/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/product_detail/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/product_detail/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/spu_addShopSpu/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/spu_addShopSpu/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/freightTemplate_list/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/freightTemplate_list/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/order_batchEncrypt/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/order_batchEncrypt/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/order_batchSensitive/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/order_batchSensitive/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/order_getSearchIndex/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/order_getSearchIndex/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}

	}
}
spl_autoload_register('\autoload::loadClass');