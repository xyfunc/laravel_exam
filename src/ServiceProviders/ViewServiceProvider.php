<?php
/**
 * Created by PhpStorm.
 * User: beechen
 * Date: 17/3/3
 * Time: 11:42
 */

namespace XYfunc\LaravelExam\ServiceProviders;

use Illuminate\View\ViewServiceProvider as LaravelViewServiceProvider;

class ViewServiceProvider extends LaravelViewServiceProvider
{

    public function boot(){
        $this->loadViewsFrom(__DIR__.'/resources/views', 'exam');
    }

}