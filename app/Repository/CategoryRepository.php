<?php

namespace App\Repository;

use App\Interfaces\CategoryRepositoryInterface;
use App\Models\Category;

class CategoryRepository implements CategoryRepositoryInterface 
{

    public function index()
    {
        $categories = Category::orderBy('name' , 'ASC')->get();
        return view('categories.index' , compact('categories'));
    }

    public function store($request)
    {
        try
        {
            $data['name']   = $request->name;
                                   
            Category::create($data);

            session()->flash('create');
            return redirect()->route('categories.index');
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
            $customer = Category::findorfail($request->id);

            $data['name']   = $request->name;
            $customer->update($data);

            session()->flash('edit');
            return redirect()->route('categories.index');
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
            Category::findorfail($request->id)->delete();

            session()->flash('delete');
            return redirect()->route('categories.index');
        }
        catch (\Exception $e)
        {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    
}    