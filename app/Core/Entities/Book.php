<?php

namespace App\Core\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
class Book extends Model
{
    use SoftDeletes, Sluggable,SluggableScopeHelpers;


    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
     public function sluggable()
     {
         return [
             'slug' => [
                 'source' => 'title'
             ]
         ];
     }

    protected $table='books';
    protected $fillable=['title','description','picture'
                    ,'category_id'];

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }

    public function setPictureAttribute($value)
    {
        $this->attributes['picture'] = 'img-'.uniqid().uniqid().'.jpg';
    }

}
