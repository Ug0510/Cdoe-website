<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MetaTag extends Model
{
    protected $table = 'meta_tags';

    protected $fillable = [
        'page_name', 'slug1', 'slug2', 'slug3', 'slug4', 'slug5',
        'title', 'meta_title', 'meta_description', 'meta_keywords',
        'og_title', 'og_site_name', 'og_url', 'og_description',
        'og_type', 'og_image', 'canonical_tag', 'image_alt_tag',
        'schema_markup', 'no_index_status', 'sitemap_url',
        'status', 'priority'
    ];
}
