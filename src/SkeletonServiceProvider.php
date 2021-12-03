<?php

namespace Vendor\Skeleton;

use Illuminate\Support\ServiceProvider;

class SkeletonServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('skeleton', function($app) {
            return new Skeleton();
        });
    }
  
    public function boot()
    {
      //
    }
}