<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'image_url',
        'ean_code',
        'cost',
        'highlighted',
        'category_id'
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
