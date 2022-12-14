<?php

namespace App\Repository;

use App\Interfaces\CustomerRepositoryInterface;
use App\Models\Customer;

class CustomerRepository implements CustomerRepositoryInterface 
{

    public function index()
    {
        $customers = Customer::orderBy('name' , 'ASC')->get();
        return view('customers.index' , compact('customers'));
    }

    public function store($request)
    {
        try
        {
            $data['name']   = $request->name;
            $data['number'] = $request->number;
                       
            Customer::create($data);

            session()->flash('create');
            return redirect()->route('customers.index');
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
            $customer = Customer::findorfail($request->id);

            $data['name']   = $request->name;
            $data['number'] = $request->number;
            $customer->update($data);

            session()->flash('edit');
            return redirect()->route('customers.index');
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
            Customer::findorfail($request->id)->delete();

            session()->flash('delete');
            return redirect()->route('customers.index');
        }
        catch (\Exception $e)
        {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    
}    