<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Period
 *
 * @property-read \App\Reason $reason
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Period newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Period newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Period query()
 * @mixin \Eloquent
 * @property-read \App\User $user
 */
class Period extends Model
{
   protected $fillable = [
       'start',
       'end',
       'comment',
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

   public function user()
   {
       return $this->belongsTo(User::class);
   }

    public function scopeByNotConfirmed()
    {

    }

    public function scopeByConfirmed()
    {

    }

    public function scopeByOld()
    {

    }
}
