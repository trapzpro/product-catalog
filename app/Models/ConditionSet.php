<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConditionSet extends Model
{
    use HasFactory;

    public function conditions(){
        //return $this->belongsToMany(Condition::class, 'condition_set_items');
        return $this->belongsToMany(Condition::class);
    }
}
