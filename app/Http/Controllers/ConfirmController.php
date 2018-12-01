<?php

namespace App\Http\Controllers;

use App\Period;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ConfirmController extends Controller
{
    /**
     * save all periods that are confirmed
     * and all periods that has to confirm in session
     * an show them in view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        session([
            'periods_unconfirmed' => Period::with('user')->get(),  #TODO scope confirmed and start
            'periods_confirmed' => Period::with('user')->get()  #TODO scope confirmed and start
        ]);

        return view('confirm.index');
    }

    /**
     * change the confirmation for Periods in Database
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function confirm(Request $request)
    {
        #todo on update email notification
        #todo chech for updating session
        if((session('periods_unconfirmed') ?? false) && (session('periods_confirmed') ?? false)) {
            foreach (array_intersect(session('periods_unconfirmed'), $request->periods_new_confirmed) as $period_id) {
                $period = Period::find($period_id);
                if ($period ?? false) {
                    if ($period->reason->has_to_confirm) {
                        $period->confirmed = Carbon::now();
                    }
                }
            }

            foreach (array_diff(session('periods_confirmed'), $request->periods_confirmed) as $period_id) {
                $period = Period::find($period_id);
                if ($period ?? false) {
                    if ($period->reason->has_to_confirm) {
                        $period->confirmed = null;
                    }
                }
            }
        }

        return redirect()->route('confirm.index');
    }
}
