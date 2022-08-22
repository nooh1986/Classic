<?php

namespace App\Models;

use App\Models\Classic;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Machine extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function classics()
    {
        return $this->hasMany(Classic::class);
    }
}
