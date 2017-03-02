<?php

/**
 * Created by PhpStorm.
 * User: beechen
 * Date: 17/3/2
 * Time: 18:09
 */
namespace XYfunc\LaravelExam;


use Illuminate\Container\Container;
use XYfunc\LaravelExam\ServiceProviders\ExamServiceProvider;
use XYfunc\LaravelExam\ServiceProviders\ServiceProviderInterface;

/**
 * Class Application
 * @package XYfunc\LaravelExam
 *
 * @property \XYfunc\LaravelExam\Services\UtilService           $util
 */
class Application extends Container
{

    private $config = [];

    protected $providers = [
        ExamServiceProvider::class,
    ];

    public function __construct( $config = [])
    {
        $this->config = $config;
        $this->registerProviders();
    }

    /**
     * Register providers.
     */
    private function registerProviders()
    {
        foreach ($this->providers as $provider) {
            $this->register(new $provider());
        }
    }

    /**
     * Registers a service provider.
     *
     * @param ServiceProviderInterface $provider A ServiceProviderInterface instance
     * @param array                    $values   An array of values that customizes the provider
     *
     * @return static
     */
    public function register(ServiceProviderInterface $provider, array $values = array())
    {
        $provider->register($this);

        foreach ($values as $key => $value) {
            $this[$key] = $value;
        }

        return $this;
    }
}