<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $fillable = [
        'categories_id',
        'name',
        'price',
    ];

    public function categories()
    {
        return $this->belongsTo(categories::class);
    }
}
