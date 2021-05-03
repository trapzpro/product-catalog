<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asoc extends Model
{
    use HasFactory;

    public function product_type(){
        return $this->belongsTo(ProductType::class);
    }
}
