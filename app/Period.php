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
    /**
     * @var array
     * all attributes for mass assignment
     */
    protected $fillable = [
       'start',
       'end',
       'comment',
        'reason_id',
    ];

    /**
     * @var array
     * all Date attributes /cast to date / Carbon
     */
    protected $dates = [
       'start',
       'end',
       'confirmed'
    ];

    /**
     * @var array
     * all eager loaded models
     */
    protected $with = ['reason'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function reason()
    {
       return $this->belongsTo(Reason::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
       return $this->belongsTo(User::class);
    }

    /**
     * @param Builder $query
     * @return \Illuminate\Database\Query\Builder|static
     */
    public function scopeByConfirmed(Builder $query)
    {
        return $query->where('has_to_confirm', true)->whereNotNull('confirmed');
    }

    /**
     * @param Builder $query
     * @return $this
     */
    public function scopeByNotConfirmed(Builder $query)
    {
        return $query->where('has_to_confirm', true)->whereNull('confirmed');
    }

    /**
     * @param Builder $query
     * @param Carbon $date
     * @return \Illuminate\Database\Query\Builder|static
     */
    public function scopeByOlderThen(Builder $query, Carbon $date)
    {
        return $query->whereDate('start', '<',  $date);
    }

    /**
     * @param Builder $query
     * @param Carbon $date
     * @return Builder|\Illuminate\Database\Query\Builder|static
     */
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

    /**
     * @return bool
     */
    public function pending()
    {
        return (!$this->confirmed && $this->reason->has_to_confirm);
    }

    /**
     * @return mixed|string
     */
    public function pendingColor()
    {
        return $this->pending() ? '#bbbbbb' : $this->reason->hex_color;
    }

    /**
     * @return mixed|string
     */
    public function pendingText()
    {
        return $this->pending() ? $this->reason->title . __(' - unbestätigt') : $this->reason->title;
    }
}
