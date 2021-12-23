<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Subtopic
 *
 * @property int $id
 * @property int $topic_id
 * @property string|null $subtitle
 * @property string|null $command
 * @property string|null $snippet
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Topic $topic
 * @method static \Illuminate\Database\Eloquent\Builder|Subtopic newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Subtopic newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Subtopic query()
 * @method static \Illuminate\Database\Eloquent\Builder|Subtopic whereCommand($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subtopic whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subtopic whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subtopic whereSnippet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subtopic whereSubtitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subtopic whereTopicId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subtopic whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Subtopic extends Model
{
    use HasFactory;

    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }

}
