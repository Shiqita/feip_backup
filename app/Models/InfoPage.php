<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\InfoPage
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $text
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\InfoPageFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|InfoPage findSimilarSlugs(string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|InfoPage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|InfoPage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|InfoPage query()
 * @method static \Illuminate\Database\Eloquent\Builder|InfoPage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InfoPage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InfoPage whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InfoPage whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InfoPage whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InfoPage whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InfoPage withUniqueSlugConstraints(\Illuminate\Database\Eloquent\Model $model, string $attribute, array $config, string $slug)
 * @mixin \Eloquent
 */
class InfoPage extends Model
{
    use HasFactory, Sluggable;

    public function sluggable(): array
    {
        return[
          'slug' => [
              'source' =>'title'
          ]
        ];
    }
}
