<?php

namespace App\Providers;


use App\Repository\DesignRepository;
use App\Repository\ClassicRepository;
use App\Repository\CategoryRepository;
use App\Repository\CustomerRepository;
use Illuminate\Support\ServiceProvider;
use App\Interfaces\DesignRepositoryInterface;
use App\Interfaces\ClassicRepositoryInterface;
use App\Interfaces\CategoryRepositoryInterface;
use App\Interfaces\CustomerRepositoryInterface;


class RepositoryServiceProvider extends ServiceProvider
{
    
    public function register()
    {
        $this->app->bind(CustomerRepositoryInterface::class, CustomerRepository::class);
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->bind(DesignRepositoryInterface::class, DesignRepository::class);
        $this->app->bind(ClassicRepositoryInterface::class, ClassicRepository::class);
    }

    
    public function boot()
    {
        //
    }
}