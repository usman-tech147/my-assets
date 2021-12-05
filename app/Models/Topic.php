<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }
    public function subtopics()
    {
        return $this->hasMany(Subtopic::class);
    }
}
