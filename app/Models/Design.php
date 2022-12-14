<?php

namespace App\Models;

use App\Models\Classic;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Design extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function classics()
    {
        return $this->hasMany(Classic::class);
    }

}
