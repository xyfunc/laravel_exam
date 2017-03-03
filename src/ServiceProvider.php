<?php

/**
 * Created by PhpStorm.
 * User: beechen
 * Date: 17/3/2
 * Time: 16:41
 */
namespace XYfunc\LaravelExam;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use Illuminate\Foundation\Application as LaravelApplication;
use XYfunc\LaravelExam\Application as ExamApplication;
use XYfunc\LaravelExam\ServiceProviders\RouteServiceProvider;
use XYfunc\LaravelExam\ServiceProviders\ViewServiceProvider;

class ServiceProvider extends LaravelServiceProvider
{
    public function boot()
    {
        $this->setupConfig();
        $this->loadViewsFrom(__DIR__.'/resources/views', 'exam');   // 引入view
        $this->app->register(RouteServiceProvider::class);          // 注册 路由
    }

    public function setupConfig()
    {
        $source = realpath( __DIR__ . '/config.php');

        if( $this->app instanceof LaravelApplication){
            if ($this->app->runningInConsole()) {
                $this->publishes([
                    $source => config_path('exam.php'),
                ]);
            }
        }
    }

    public function register()
    {
        $this->app->singleton( ExamApplication::class, function ($exam_application){
            $app = new ExamApplication( config('exam') );
            return $app;
        });

        $this->app->alias( ExamApplication::class, 'exam');
    }
}