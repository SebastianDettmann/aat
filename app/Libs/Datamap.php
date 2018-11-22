<?php

namespace App\Libs;

class Datamap
{
    public static function getAppLanguages()
    {
        return collect([
            [
                'country' => 'de',
                'locale' => 'de-de',
                'title' => __('Deutsch'),
            ], [
                'country' => 'us',
                'locale' => 'en-us',
                'title' => __('Englisch'),
            ],
        ]);
    }

    public static function getAbsenceReasons()
    {
        return collect([
            [
                'id' => 1,
                'title' => __('Urlaub'),
                'color' => 'LimeGreen',
                'hex_color' => '#32cd32',
                'has_to_confirm' => true,
            ], [
                'id' => 2,
                'title' => __('Home Office'),
                'color' => 'SkyeBlue',
                'hex_color' => '#87ceeb',
                'has_to_confirm' => true,
            ], [
                'id' => 3,
                'title' => __('Krank'),
                'color' => 'Orange',
                'hex_color' => 'ffa500',
                'has_to_confirm' => false,
            ], [
                'id' => 4,
                'title' => __('Außer Haus'),
                'color' => 'Aquamarine',
                'hex_color' => '7fffd4',
                'has_to_confirm' => false,
            ], [
                'id' => 5,
                'title' => __('andere'),
                'color' => 'DarkGray',
                'hex_color' => 'a9a9a9',
                'has_to_confirm' => false,
            ]
        ])->sortBy('title');
    }

    public static function getOneReason($id)
    {
        return self::getAbsenceReasons()->where('id', $id)->first();
    }

    public static function getAccessPoints()
    {
        $titles = [
            'Absolute Absence Tool'
        ];

        return collect([
           'id' => 1,
           'title' => $titles[1],
           'slug' => str_slug($titles[1], '_'),
           'url' => config('app.url'),
           'image' => 'absolute.svg'
        ]);
    }

    public static function getOneAccessPoint($id)
    {
        return self::getAccessPoints()->where('id', $id)->first();
    }

    public static function getFirstAdmin()
    {
        return [
            'firstname' => 'sebastian',
            'lastname' => 'dettmann',
            'email' => 'sebastian.dettmann@absolute.de',
            'admin' => true,
            'password' => bcrypt('Qwertz123'),
        ];
    }
}
