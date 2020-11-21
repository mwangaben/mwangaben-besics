<?php

namespace Mwangaben\Basics\Providers;

use Mwangaben\Basics\Person;
use Illuminate\Support\ServiceProvider;

class PersonServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app('person', function () {
            return new Person();
        });
    }
}
