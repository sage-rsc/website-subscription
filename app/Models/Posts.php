<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function website()
    {
        return $this->belongsTo(Websites::class);
    }
}
