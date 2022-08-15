<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerRequest;
use App\Interfaces\CustomerRepositoryInterface;

class CustomerController extends Controller
{
    
    private $Customer;

    public function __construct(CustomerRepositoryInterface $Customer)
    {
        $this->Customer = $Customer;
    }
    
    
    public function index()
    {
        return $this->Customer->index();
    }

    
    public function store(CustomerRequest $request)
    {
        return $this->Customer->store($request);
    }

    
    public function update(CustomerRequest $request)
    {
        return $this->Customer->update($request);
    }

    
    public function destroy(Request $request)
    {
        return $this->Customer->destroy($request);
    }
}
