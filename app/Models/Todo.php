<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'completed',
        'step_name',

    ];

    public function user()
    {
       return $this->belongsTo(User::class);

    }
    public function step()
    {
        return $this->hasMany(Step::class);
    }
}
