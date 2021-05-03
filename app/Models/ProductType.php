<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    use HasFactory;

    protected $table = 'pc_product_types';
    protected $primaryKey = 'pc_product_type_id';

    public function asocs(){
        return $this->hasMany(Asoc::class,'pc_product_type_id','pc_product_type_id');
    }
}
