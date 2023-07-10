<?php

namespace App\Models;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Property extends Model
{
    use HasFactory, HasSlug;


    protected $fillable = [
        'title',
        'type_of_property',
        'address',
        'location',
        'area',
        'cover_image',
        'img1',
        'img2',
        'img3',
        'img4',
        'slug',
        'nr_of_beds',
        'nr_of_baths',
        'price',
        'description',
        'is_aproved',
        'sale_rent',
        'status_id',
        'user_id'
    ];



    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }
}
