<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConditionSet extends Model
{
    use HasFactory;

    public function conditions(){
        if(config('app.use_new_fields')) return $this->belongsToMany(Condition::class);
        else        return $this->belongsToMany(Condition::class, 'condition_set_items');
        
    }
}
