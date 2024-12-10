<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    use HasFactory;
    public $primaryKey='package_id';
    protected $table='packages';
    protected $fillable = [
        'package_code', 'package_name', 'package_desc', 'price', 'permalink', 'feature_img', 'seller_id'
    ];
    public function seller() {
        return $this->belongsTo(Seller::class, 'seller_id', 'seller_id');
    }
}
