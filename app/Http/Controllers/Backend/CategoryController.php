<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Interfaces\CategoryRepositoryInterface;

class CategoryController extends Controller
{
    private $Category;

    public function __construct(CategoryRepositoryInterface $Category)
    {
        $this->Category = $Category;
    }
    
    
    public function index()
    {
        return $this->Category->index();
    }

    
    public function store(CategoryRequest $request)
    {
        return $this->Category->store($request);
    }

    
    public function update(CategoryRequest $request)
    {
        return $this->Category->update($request);
    }

    
    public function destroy(Request $request)
    {
        return $this->Category->destroy($request);
    }
}
