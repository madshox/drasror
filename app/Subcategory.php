<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use Sluggable;

    protected $guarded = [
        'id'
    ];

    public function images()
    {
        return $this->hasMany(ImagesSubcategory::class);
    }

    public function service() {
        return $this->belongsTo(Service::class);
    }

    public function sluggable() {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
