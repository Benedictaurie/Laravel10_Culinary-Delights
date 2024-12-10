<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;
    public $primaryKey='seller_id';
    protected $table='seller';
    protected $fillabe = [
        'seller_name', 'seller_desc', 'image', 'status'
    ];
    public function packages(){
        return $this->hasMany(Packages::class, 'seller_id', 'seller_id');
    }
}
