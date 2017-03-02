<?php

/**
 * Created by PhpStorm.
 * User: beechen
 * Date: 17/3/2
 * Time: 21:33
 */
namespace XYfunc\LaravelExam\ServiceProviders;

use Illuminate\Contracts\Routing\Registrar as Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as LaravelRouteServiceProvider;

class RouteServiceProvider extends LaravelRouteServiceProvider
{

    public function map(Router $router)
    {
        $router->group([
            'namespace' => 'XYfunc\LaravelExam\Controllers'
        ], function (Router $router) {
//            $router->post(config('exam.serve_url'), 'EasyWeChatController@openPlatformServe');
        });
    }

}