<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
    use HasFactory;

    public function condition_sets()
    {
        if(config('app.use_new_fields')) return  $this->belongsToMany(ConditionSet::class);
        else return  $this->belongsToMany(ConditionSet::class, 'condition_set_items');
    }
}
