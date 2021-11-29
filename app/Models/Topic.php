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
    public function stepTopics()
    {
        return $this->hasMany(StepTopic::class);
    }
    public function linkTopics()
    {
        return $this->hasMany(LinkTopic::class);
    }
    public function imageTopics()
    {
        return $this->hasMany(ImageTopic::class);
    }
}
