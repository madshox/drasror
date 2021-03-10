<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImagesSubcategory extends Model
{
    protected $guarded = [
        'id'
    ];

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }
}
