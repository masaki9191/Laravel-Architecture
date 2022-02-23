<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'picture',
        'type',
        'creater_id',
    ];

    public function creater()
    {
        return $this->belongsTo(User::class, 'creater_id');
    }
}
