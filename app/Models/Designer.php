<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use App\Traits\MultiTenantModelTrait;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
// use Spatie\OpeningHours\OpeningHours;


class Designer extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'name',
        'construction_type',
        'period',
        'price'
    ];

    protected $appends = [
        'photo', 'thumbnail', 'pic'
    ];

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(368)
            ->height(232);
    }


    public function getPhotoAttribute()
    {
        $photo = $this->getMedia('photo')->first();
        if($photo == null)
            return null;
        return $photo->getUrl();
    }

    public function getThumbnailAttribute()
    {
        $photo = $this->getMedia('photo')->first();
        if($photo == null)
            return null;
        return $photo->getUrl('thumb');
    }
    public function getPicAttribute()
    {
        $photo = $this->getMedia('photo')->first();
        if($photo == null)
            return null;
        return $photo;
    }
}
