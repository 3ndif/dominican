<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\View\FileViewFinder;

class ViewServiceProvider extends ServiceProvider
{
    public function registerViewFinder() {
        $this->app->bindShared('view.finder', function($app) {
                dd($app);
                $path = condition ? 'view.pathsAdmin' : 'view.paths';
                $paths = $app['config'][$path];

                return new FileViewFinder($app['files'], $paths);
        });
    }
}
