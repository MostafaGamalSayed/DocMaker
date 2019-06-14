<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Section;

class Topic extends Model
{
    protected $guarded = [];

    /*
     | A topic belongs to only one documentation
    */
    public function Section()
    {
        return $this->belongsTo(Section::class);
    }
}
