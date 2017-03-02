<?php
/**
 * Created by PhpStorm.
 * User: beechen
 * Date: 17/3/2
 * Time: 23:32
 */

namespace XYfunc\LaravelExam\ServiceProviders;


use Illuminate\Container\Container;

interface ServiceProviderInterface
{
    public function register( Container $container);
}