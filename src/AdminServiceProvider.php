<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/1
 * Time: 16:47
 */

namespace Angkees\Admin;
use Illuminate\Support\ServiceProvider;


class AdminServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //
    }

    public function register()
    {
        $this->app->singleton('admin', function () {
            return new Admin();
        });
    }

}