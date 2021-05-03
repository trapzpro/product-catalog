<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConditionalRequiredAsoc extends Model
{
    use HasFactory;


    public function attached_asoc(){
        if(config('app.use_new_fields')) return $this->belongsTo(Asoc::class,'attached_asoc_id');
        else return $this->belongsTo(Asoc::class,'pc_asoc_id');
        
    }

    public function required_asoc(){
        if(config('app.use_new_fields')) return $this->belongsTo(Asoc::class,'required_asoc_id' );
        else return $this->belongsTo(Asoc::class,'pc_rqd_asoc_id');
    }

    public function condition_set(){
        return $this->belongsTo(ConditionSet::class );
    }


}
