<?php

use App\Period;
use App\Reason;
use App\User;
use App\Libs\Datamap;
use Illuminate\Database\Seeder;

class PeriodsReasonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Datamap::getAbsenceReasons() as $absenceReason) {
            $reason = factory(Reason::class)->create([
                'title' => $absenceReason['display_name'],
                'color' => $absenceReason['color'],
                'hex_color' => $absenceReason['hex_color'],
                'has_to_confirm' => $absenceReason['has_to_confirm'],
            ]);

            factory(Period::class)->create([
                'reason_id' => $reason->getKey(),
            ]);
        }
    }
}
