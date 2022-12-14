<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'city',
        'star',
        'image'
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
