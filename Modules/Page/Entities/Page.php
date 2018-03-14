<?php

namespace Modules\Page\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Locales\Entities\Traits\EribuTranslatable;

class Page extends Model {

    use EribuTranslatable;

    protected $table = 'page__pages';
    public $translatedAttributes = [
        'page_id',
        'title',
        'slug',
        'status',
        'body',
        'meta_title',
        'meta_description',
        'og_title',
        'og_description',
        'og_image',
        'og_type',
    ];
    protected $fillable = [
        'is_home',
        'template',
        // Translatable fields
        'page_id',
        'title',
        'slug',
        'status',
        'body',
        'meta_title',
        'meta_description',
        'og_title',
        'og_description',
        'og_image',
        'og_type',
    ];
    protected $casts = [
        'is_home' => 'boolean',
    ];

    public function __construct(array $attributes = []) {
        
        parent::__construct($attributes);       
        $this->bootTranslations();
        
    }

}
