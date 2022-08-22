<?php

namespace App\Repository;

use App\Models\Design;
use App\Models\Machine;
use App\Models\Category;
use App\Models\Customer;
use App\Interfaces\ClassicRepositoryInterface;

class ClassicRepository implements ClassicRepositoryInterface 
{

    public function index()
    {
        $categories = Category::pluck('id' , 'name');
        $customers = Customer::pluck('id' , 'name');
        $designs = Design::pluck('id' , 'name');
        $machines = Machine::pluck('id' , 'name');
        return view('classics.create' , compact('categories' , 'customers' , 'designs' , 'machines'));
    }

    public function store($request)
    {
        try
        {
            //
        }
        catch (\Exception $e)
        {
           return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function update($request)
    {
        try
        {
            //
        }
        catch (\Exception $e)
        {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function destroy($request)
    {
        try
        {
            //
        }
        catch (\Exception $e)
        {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    
}    