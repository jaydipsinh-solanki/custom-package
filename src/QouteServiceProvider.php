<?php

namespace gd\qoutes;
use Illuminate\Support\ServiceProvider;

class QouteServiceProvider extends ServiceProvider {
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'qoutes');
    }

    public function register()
    {
    }
}
?>