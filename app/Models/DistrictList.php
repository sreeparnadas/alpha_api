<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DistrictList extends Model
{
    use HasFactory;
    protected $hidden = [
        "created_at","updated_at"
    ];

    public function assemblies(){
        return $this->hasMany(Assembly::class,'district_id');
    }
}
