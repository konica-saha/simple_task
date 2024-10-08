<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}
