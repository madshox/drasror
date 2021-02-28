<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceImage extends Model
{
    protected $guarded = [
        'id'
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
