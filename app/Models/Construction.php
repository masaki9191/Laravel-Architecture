<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Construction extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'category',
        'title',
        'owner',
        'description',
        'consultation',
        'construction_date',
        'designer_name',
        'type',
        'period',
        'cost',
        'staff_comment',
        'client_comment',
    ];

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(368)
            ->height(232)
            ->performOnCollections('main_pic');
    }

    public function pic($type)
    {
        $media = $this->getMedia($type)->first();
        if($media == null)
            return null;
        return $media;
    }
}
