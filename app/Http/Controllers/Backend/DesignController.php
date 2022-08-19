<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DesignRequest;
use App\Interfaces\DesignRepositoryInterface;

class DesignController extends Controller
{
    private $Design;

    public function __construct(DesignRepositoryInterface $Design)
    {
        $this->Design = $Design;
    }


    public function index()
    {
        return $this->Design->index();
    }

          
    public function store(DesignRequest $request)
    {
        return $this->Design->store($request);
    }

        
    public function update(DesignRequest $request)
    {
        return $this->Design->update($request);
    }

    
    public function destroy(Request $request)
    {
        return $this->Design->destroy($request);
    }
}
