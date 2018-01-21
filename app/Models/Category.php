<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Events\CategorySaving;

class Category extends Model
{
    protected $dispatchesEvents = [
        'saving' => CategorySaving::class,
    ];

    protected $fillable = [
        'name', 'slug',
    ];

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
