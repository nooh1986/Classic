<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Interfaces\ClassicRepositoryInterface;

class ClassicController extends Controller
{
    
    private $Classic;

    public function __construct(ClassicRepositoryInterface $Classic)
    {
        $this->Classic = $Classic;
    }
    
    
    public function index()
    {
        return $this->Classic->index();
    }

    
    public function store(Request $request)
    {
        return $this->Classic->store($request);
    }

    
    public function update(Request $request)
    {
        return $this->Classic->update($request);
    }

    
    public function destroy(Request $request)
    {
        return $this->Classic->destroy($request);
    }
}
