<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

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

    /**
     * Cast admin to 0/false when it is null and stored in DB
     * Mutator
     *
     * @param  string $value
     * @return void
     */
    public function setAdminAttribute($value)
    {
        $this->attributes['admin'] = $value ?? 0;

    }

    public function fullName()
    {
        return $this->firstname . ' ' . $this->lastname;
    }

    public function periods()
    {
        return $this->hasMany(Period::class);
    }

    public function accesses()
    {
        return $this->belongsToMany(Access::class);
    }

    public function getAccesses(String $access_slug_title)
    {
        $accesses = cache()->remember('accesses_' . $access_slug_title, 10, function() use ($access_slug_title) {
            return self::whereHas('accesses', function ($q) use ($access_slug_title) {
                $q->where('slug', $access_slug_title);
            })->get()->pluck('id')->toArray();
            //todo model observer user is deleted
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
