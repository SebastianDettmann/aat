<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
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
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Period byConfirmed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Period byNotConfirmed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Period byOld()
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

    protected $with = ['reason'];

   public function reason()
   {
       return $this->belongsTo(Reason::class);
   }

   public function user()
   {
       return $this->belongsTo(User::class);
   }

    public function scopeByConfirmed(Builder $query)
    {
        return $query->where('has_to_confirm', true)->whereNotNull('confirmed');
    }

    public function scopeByNotConfirmed(Builder $query)
    {
        return $query->where('has_to_confirm', true)->whereNull('confirmed');
    }

    public function scopeByOlderThen(Builder $query, Carbon $date)
    {
        return $query->whereDate('start', '<',  $date);
    }

    public function scopeByInMonth(Builder $query, Carbon $date)
    {
        $firstDayofMonth = $date->startOfMonth()->toDateString();
        $lastDayofMonth = $date->endOfMonth()->toDateString();

        return $query
            ->whereBetween('start', [$firstDayofMonth, $lastDayofMonth])
            ->orWhereBetween('end', [$firstDayofMonth, $lastDayofMonth])
            ->orWhere(function($query) use ($firstDayofMonth, $lastDayofMonth){
                $query->where([
                    ['start', '<', $firstDayofMonth],
                    ['end', '>', $lastDayofMonth]
                    ]);
            });
    }
}
