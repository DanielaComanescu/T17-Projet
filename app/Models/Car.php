<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Traits\FilterTrait;


class Car extends Model
{
    use HasFactory;
    use FilterTrait;

    public function options()
    {
        return $this->belongsToMany(Option::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function make()
    {
        return $this->belongsTo(Make::class);
    }
    
}
