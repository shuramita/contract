<?php
namespace Shuramita\Contract;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class ContractServiceProvider extends ServiceProvider
{
    public $namespace = 'Contract';


    /**
     * Bootstrap the application services.
     *
     * @return void
     */

    public function boot(Router $router)
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', $this->namespace);
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->loadTranslationsFrom(__DIR__.'/translations', $this->namespace);
        $this->loadJSONTranslationsFrom(__DIR__.'/translations');
        AliasLoader::getInstance()->alias('ContractHelper', 'Shuramita\Contract\Helpers\Helper');
        $router->aliasMiddleware('contract', 'Shuramita\Contract\Middleware\Contract');
        $this->publishes([
            __DIR__.'/config/contract.php' => config_path('contract.php'),
        ]);
        // Option::loadConfiguration();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/config/contract.php', 'contract');

    }

}