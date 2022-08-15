<?php

namespace App\Providers;


use App\Repository\CustomerRepository;
use Illuminate\Support\ServiceProvider;
use App\Interfaces\CustomerRepositoryInterface;


class RepositoryServiceProvider extends ServiceProvider
{
    
    public function register()
    {
        $this->app->bind(CustomerRepositoryInterface::class, CustomerRepository::class);
    }

    
    public function boot()
    {
        //
    }
}