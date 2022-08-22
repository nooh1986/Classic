<?php

namespace App\Models;

use App\Models\Design;
use App\Models\Laborer;
use App\Models\Machine;
use App\Models\Category;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Classic extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function laborer()
    {
        return $this->belongsTo(Laborer::class);
    }

    public function machine()
    {
        return $this->belongsTo(Machine::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function design()
    {
        return $this->belongsTo(Design::class);
    }

}
