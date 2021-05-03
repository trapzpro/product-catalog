<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asoc extends Model
{
    use HasFactory;

    protected $table = 'pc_asocs';
    protected $primaryKey = 'pc_asoc_id';

    public function product_type(){
        return $this->belongsTo(ProductType::class,'pc_product_type_id');
    }

}
