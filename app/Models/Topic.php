<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Topic
 *
 * @property int $id
 * @property int $subcategory_id
 * @property string $topic_title
 * @property string|null $topic_description
 * @property string|null $thumbnail
 * @property int|null $view_status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Subcategory $subcategory
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Subtopic[] $subtopics
 * @property-read int|null $subtopics_count
 * @method static \Illuminate\Database\Eloquent\Builder|Topic newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Topic newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Topic query()
 * @method static \Illuminate\Database\Eloquent\Builder|Topic whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Topic whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Topic whereSubcategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Topic whereThumbnail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Topic whereTopicDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Topic whereTopicTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Topic whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Topic whereViewStatus($value)
 * @mixin \Eloquent
 */
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
