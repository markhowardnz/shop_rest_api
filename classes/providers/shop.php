<?php
/**
 * @package ShopRestAPI
 * @class   ShopProvider
 * @author  Serhey Dolgushev <dolgushev.serhey@gmail.com>
 * @date    25 Nov 2012
 **/

class ShopProvider implements ezpRestProviderInterface
{
	public function getRoutes()	{
		return array(
			'exportOrders' => new ezpMvcRegexpRoute(
				'@^/orders/export(/(?P<onlyNew>[1|0]+))?$@',
				'ShopController',
				'exportOrders',
				array(
					'onlyNew' => true,
					'output'  => 'xml'
				)
			),
			'processOrders' => new ezpMvcRegexpRoute(
				'@^/orders/process$@',
				'ShopController',
				array(
					'http-get'  => 'processOrders',
					'http-post' => 'processOrders'
				)
			)
		);
	}

	public function getViewController() {
		return new ShopViewController();
	}
}
