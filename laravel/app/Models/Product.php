<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Pishran\LaravelPersianSlug\HasPersianSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    use HasPersianSlug;
    public function getRouteKeyName()
    {
        return 'id';
    }
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug')
            ->doNotGenerateSlugsOnUpdate();
    }

    protected $fillable = [
        'name' , 'active' ,'content','comment','pic','fullcontent','slug'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
    public function category()
    {
        return $this->belongsToMany(Category::class);
    }
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
    public function questions()
    {
        return $this->morphMany(Question::class, 'questionable');
    }
    public function next(){
        return Product::where('id', '>', $this->id)->orderBy('id','asc')->first();

    }
    public  function previous(){
        // get previous  user
        return Product::where('id', '<', $this->id)->orderBy('id','desc')->first();

    }
}
