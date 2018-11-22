<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * App\User
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Period[] $periods
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Access[] $accesses
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     * !!! attention requests from default user has to filter 'admin' attribute
     * @var array
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'password',
        'language',
        'admin'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function periods()
    {
        return $this->hasMany(Period::class);
    }

    public function accesses()
    {
        return $this->belongsToMany(Access::class);
    }

    public function scopeByAccess(Builder $query, String $access_slug_title)
    {
        return $query->accesses()->where('slug', $access_slug_title);
    }

    public function getAccesses(String $access_slug_title)
    {
        $accesses = cache()->remember('accesses_' . $access_slug_title, 10, function() use ($access_slug_title) {
            self::byAccess($access_slug_title)->get('user_id')->toArray(); //Todo check can an array saved in cache
        });
        return $accesses;
    }

    public function hasAccess(String $access_slug_title)
    {
        return in_array($this->id, $this->getAccesses($access_slug_title));
    }





    #todo check for update holidays
    #todo add soft deletes?
}
