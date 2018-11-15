<?php
/**
 * Created by PhpStorm.
 * User: dettmann
 * Date: 15.11.2018
 * Time: 15:37
 */

namespace App\Libs;


class Datamap
{
    public static function getAppLanguages()
    {
        return collect([
            [
                'country' => 'de',
                'locale' => 'de-de',
                'display_name' => __('Deutsch'),
            ], [
                'country' => 'us',
                'locale' => 'en-us',
                'display_name' => __('Englisch'),
            ],
        ]);
    }

    public static function getAbsenceReasons()
    {
        return collect([
            [
                'id' => 1,
                'display_name' => __('Urlaub'),
                'farbe' => 'LimeGreen',
                'hex_farbe' => '#32cd32',
            ], [
                'id' => 2,
                'display_name' => __('Home Office'),
                'farbe' => 'SkyeBlue',
                'hex_farbe' => '#87ceeb',
            ], [
                'id' => 3,
                'display_name' => __('Krank'),
                'farbe' => 'Orange',
                'hex_farbe' => 'ffa500',
            ], [
                'id' => 4,
                'display_name' => __('Außer Haus'),
                'farbe' => 'Aquamarine',
                'hex_farbe' => '7fffd4',
            ], [
                'id' => 5,
                'display_name' => __('andere'),
                'farbe' => 'DarkGray',
                'hex_farbe' => 'a9a9a9',
            ]
        ])->sortBy('display_name');
    }
}
