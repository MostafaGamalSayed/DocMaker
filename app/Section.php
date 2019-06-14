<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ParentSection;
use App\Topic;

class Section extends Model
{
    protected $guarded = [];


    /**
    * The booting method for this model
    */
    protected static function boot()
    {
      parent::boot();


      // Delete all the topics of a Section if deleted
      static::deleting(function($section){
        return $section->topics->each->delete();
      });

    }


    /**
    * A Section has many topics
    */
    public function topics()
    {
      return $this->hasMany(Topic::class);
    }

    /**
    * A Section belongs to only one ParentSection
    */
    public function ParentSection()
    {
      return $this->belongsTo(ParentSection::class);
    }
}
