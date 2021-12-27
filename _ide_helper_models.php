<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Admin
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property int $is_super_admin
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin query()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereIsSuperAdmin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Admin extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Category
 *
 * @property int $id
 * @property string $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Subcategory[] $subcategories
 * @property-read int|null $subcategories_count
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Category extends \Eloquent {}
}

namespace App\Models\Product{
/**
 * App\Models\Product\Category
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Product\Subcategory[] $subcategories
 * @property-read int|null $subcategories_count
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 */
	class Category extends \Eloquent {}
}

namespace App\Models\Product{
/**
 * App\Models\Product\Color
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Product\Product[] $products
 * @property-read int|null $products_count
 * @method static \Illuminate\Database\Eloquent\Builder|Color newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Color newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Color query()
 * @method static \Illuminate\Database\Eloquent\Builder|Color whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Color whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Color whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Color whereUpdatedAt($value)
 */
	class Color extends \Eloquent {}
}

namespace App\Models\Product{
/**
 * App\Models\Product\Fabric
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Product\Product[] $products
 * @property-read int|null $products_count
 * @method static \Illuminate\Database\Eloquent\Builder|Fabric newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Fabric newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Fabric query()
 * @method static \Illuminate\Database\Eloquent\Builder|Fabric whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fabric whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fabric whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fabric whereUpdatedAt($value)
 */
	class Fabric extends \Eloquent {}
}

namespace App\Models\Product{
/**
 * App\Models\Product\Product
 *
 * @method static Builder where($key, $operator, $value=null)
 * @property int $id
 * @property int $subcategory_fk_id
 * @property int|null $quality_fk_id
 * @property int|null $fabric_fk_id
 * @property string $name
 * @property string|null $description
 * @property float $price
 * @property int $status
 * @property string|null $image
 * @property string|null $sale_date_before
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Product\Color[] $colors
 * @property-read int|null $colors_count
 * @property-read \App\Models\Product\Fabric $fabric
 * @property-read \App\Models\Product\Quality $quality
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Product\Size[] $sizes
 * @property-read int|null $sizes_count
 * @property-read \App\Models\Product\Subcategory $subcategory
 * @method static \Illuminate\Database\Eloquent\Builder|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereFabricFkId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereQualityFkId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSaleDateBefore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSubcategoryFkId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUpdatedAt($value)
 */
	class Product extends \Eloquent {}
}

namespace App\Models\Product{
/**
 * App\Models\Product\Quality
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Product\Product[] $products
 * @property-read int|null $products_count
 * @method static \Illuminate\Database\Eloquent\Builder|Quality newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Quality newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Quality query()
 * @method static \Illuminate\Database\Eloquent\Builder|Quality whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quality whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quality whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quality whereUpdatedAt($value)
 */
	class Quality extends \Eloquent {}
}

namespace App\Models\Product{
/**
 * App\Models\Product\Size
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Product\Product[] $products
 * @property-read int|null $products_count
 * @method static \Illuminate\Database\Eloquent\Builder|Size newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Size newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Size query()
 * @method static \Illuminate\Database\Eloquent\Builder|Size whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Size whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Size whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Size whereUpdatedAt($value)
 */
	class Size extends \Eloquent {}
}

namespace App\Models\Product{
/**
 * App\Models\Product\Subcategory
 *
 * @property int $id
 * @property int $category_fk_id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Product\Category $category
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Product\Product[] $products
 * @property-read int|null $products_count
 * @method static \Illuminate\Database\Eloquent\Builder|Subcategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Subcategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Subcategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|Subcategory whereCategoryFkId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subcategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subcategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subcategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subcategory whereUpdatedAt($value)
 */
	class Subcategory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Subcategory
 *
 * @property int $id
 * @property int $category_id
 * @property string $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Category $category
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Topic[] $topics
 * @property-read int|null $topics_count
 * @method static \Illuminate\Database\Eloquent\Builder|Subcategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Subcategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Subcategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|Subcategory whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subcategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subcategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subcategory whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subcategory whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Subcategory extends \Eloquent {}
}

namespace App\Models{
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
	class Subtopic extends \Eloquent {}
}

namespace App\Models{
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
	class Topic extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class User extends \Eloquent {}
}

