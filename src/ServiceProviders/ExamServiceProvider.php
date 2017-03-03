<?php
/**
 * Created by PhpStorm.
 * User: beechen
 * Date: 17/3/2
 * Time: 23:22
 */

namespace XYfunc\LaravelExam\ServiceProviders;


use Illuminate\Container\Container;
use Illuminate\Support\ServiceProvider;
use XYfunc\LaravelExam\Services\QuestionService;
use XYfunc\LaravelExam\Services\UtilService;

class ExamServiceProvider extends ServiceProvider implements ServiceProviderInterface
{

    public function register(Container $container)
    {
        $container['util'] = function ( ){
            return new UtilService();
        };
        $container['question'] = function ( ){
            return new QuestionService();
        };
    }

}