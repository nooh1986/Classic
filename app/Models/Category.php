<?php

namespace App\Models;

use App\Models\Design;
use App\Models\Classic;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function designs()
    {
        return $this->hasMany(Design::class);
    }

    public function classics()
    {
        return $this->hasMany(Classic::class);
    }
}
