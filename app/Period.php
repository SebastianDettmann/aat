<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
   protected $fillable = [
     'start',
     'end'
   ];

   protected $dates = [
       'start',
       'end',
       'confirmed'
   ];

   public function reason()
   {
       return $this->belongsTo(Reason::class);
   }
}
