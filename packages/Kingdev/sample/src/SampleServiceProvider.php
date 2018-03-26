<?php

namespace Kingdev\Sample;

use Illuminate\Support\ServiceProvider;

class SampleServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot() {
        $this->loadViewsFrom(__DIR__ . '/views', 'sample');
        $this->publishes([__DIR__ . '/views' => public_path('Kingdev'),], 'public');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
        include __DIR__ . '/router.php';
        $this->app->make('Kingdev\Sample\SampleController');
    }

}
