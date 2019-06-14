<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Documentation;
use App\Section;

class ParentSection extends Model
{
  protected $guarded = [];

  /**
  * The booting method for this model
  */
  protected static function boot()
  {
    parent::boot();


    // Delete all the sections of a ParentSection if deleted
    static::deleting(function($parentSection){
      return $parentSection->sections->each->delete();
    });

  }


  /**
  * A ParentSection has many sections
  */
  public function sections()
  {
    return $this->hasMany(Section::class);
  }



  /**
   * A ParentSection belongs to only one documentation
  */
  public function documentation()
  {
      return $this->belongsTo(Documentation::class);
  }
}
