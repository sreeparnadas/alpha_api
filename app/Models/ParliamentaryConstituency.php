<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\District;

class ParliamentaryConstituency extends Model
{
    use HasFactory;
    protected $hidden = [
        "created_at","updated_at"
    ];

    public function districts(){
        return $this->hasMany(District::class,'parliamentary_constituency_id');
    }
}