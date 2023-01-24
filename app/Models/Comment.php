<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];


    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function rate()
    {
        return $this->belongsTo(Rate::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
