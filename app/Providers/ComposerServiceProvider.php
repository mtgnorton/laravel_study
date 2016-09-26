<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * 在容器内注册所有绑定。
     *
     * @return void
     */
    public function boot()
    {
        // 使用对象型态的视图组件...

         view()->composer(
            'welcome', 'App\Http\ViewComposers\WelcomeComposer'
        );

        // 使用闭包型态的视图组件...
        // view()->composer('dashboard', function ($view) {

        // });
    }

    /**
     * 注册服务提供者。
     *
     * @return void
     */
    public function register()
    {
        //
    }
}