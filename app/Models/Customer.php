<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $table = 'customer';
    protected $fillable = ['name', 'address', 'phone_number', 'category_id'];
    use HasFactory;

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
