<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;


Router::defaultRouteClass('DashedRoute');

Router::scope('/', function (RouteBuilder $routes) {
   
    $routes->connect('/', array('controller' => 'timezone', 'action' => 'get_time'));
   
    $routes->extensions (['xml', 'json']);
     $routes->resources('Posts',
	    [
	    	'only' => ['index']
	    ]
    );
    $routes->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);

    
    Router::scope(
    '/bookmarks',
    ['controller' => 'Bookmarks'],
    function ($routes) {
        $routes->connect('/tagged/*', ['action' => 'tags']);
    }
    );
    // Connect the conventions based default routes.
  
    $routes->fallbacks('DashedRoute');
});

Plugin::routes();
