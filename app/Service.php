<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Service extends Model
{
    use Sluggable;

    protected $guarded = [
      'id'
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function subcategories() {
        return $this->hasMany(Subcategory::class);
    }

    public function sluggable() {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
