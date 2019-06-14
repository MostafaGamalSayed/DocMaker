<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ParentSection;

class Documentation extends Model
{
  protected $guarded = [];

  protected $with = ['ParentSections'];

  /**
  * The booting method for this model
  */
  protected static function boot()
  {
    parent::boot();

    // Delete all the sections of a ParentSection if deleted
    static::deleting(function($documentation){
      return $documentation->ParentSections->each->delete();
    });
  }


  /*
    | A documentation has many ParentSections
  */
  public function ParentSections()
  {
    return $this->hasMany(ParentSection::class);
  }

}
