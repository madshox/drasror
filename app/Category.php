<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Category extends Model
{
    Use Sluggable;
    protected $guarded = [
        'id'
    ];

    public function services() {
        return $this->hasMany(Service::class);
    }

    public function sluggable() {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
