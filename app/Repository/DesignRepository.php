<?php

namespace App\Repository;

use App\Interfaces\DesignRepositoryInterface;
use App\Models\Category;
use App\Models\Design;

class DesignRepository implements DesignRepositoryInterface 
{

    public function index()
    {
        $designs  = Design::orderBy('name' , 'ASC')->get();
        $categories = Category::pluck('id' , 'name');
        return view('designs.index' , compact('designs' , 'categories'));
    }

    public function store($request)
    {
        try
        {
            $data['name']        = $request->name;
            $data['category_id'] = $request->category_id;
                       
            Design::create($data);

            session()->flash('create');
            return redirect()->route('designs.index');
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
            $design = Design::findorfail($request->id);

            $data['name']        = $request->name;
            $data['category_id'] = $request->category_id;
            $design->update($data);

            session()->flash('edit');
            return redirect()->route('designs.index');
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
            Design::findorfail($request->id)->delete();

            session()->flash('delete');
            return redirect()->route('designs.index');
        }
        catch (\Exception $e)
        {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    
}    