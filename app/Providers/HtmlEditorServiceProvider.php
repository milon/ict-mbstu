<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class HtmlEditorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Helpers\HtmlEditor\HtmlEditor',
            'App\Helpers\HtmlEditor\Summernote\Summernote'
        );
    }
}
