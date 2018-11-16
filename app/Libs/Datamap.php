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
                'color' => 'LimeGreen',
                'hex_color' => '#32cd32',
                'has_to_confirm' => true,
            ], [
                'id' => 2,
                'display_name' => __('Home Office'),
                'color' => 'SkyeBlue',
                'hex_color' => '#87ceeb',
                'has_to_confirm' => true,
            ], [
                'id' => 3,
                'display_name' => __('Krank'),
                'color' => 'Orange',
                'hex_color' => 'ffa500',
                'has_to_confirm' => false,
            ], [
                'id' => 4,
                'display_name' => __('Außer Haus'),
                'color' => 'Aquamarine',
                'hex_color' => '7fffd4',
                'has_to_confirm' => false,
            ], [
                'id' => 5,
                'display_name' => __('andere'),
                'color' => 'DarkGray',
                'hex_color' => 'a9a9a9',
                'has_to_confirm' => false,
            ]
        ])->sortBy('display_name');
    }

    public static function getOneReason($id)
    {
        return self::getAbsenceReasons()->where('id', $id)->first();
    }
}
