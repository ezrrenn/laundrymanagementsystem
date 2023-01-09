<?php

namespace App\Models;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'image',
        'barcode',
        'price',
        'quantity',
        'status'
    ];

    public function getImg()
    {
        return Storage::url($this->image);
    }
}
