<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\watched_time;

class watched_timeController extends Controller
{
    //
    public function show()
    {
       /** return view('watchtime', [
            'watchtime' => watched_time::all()
        ]); **/

        $watchtime = watched_time::all()->where('channel_id',1);
        $history = $watchtime->max('minutes');
        $teste = $watchtime->where('minutes','<',$history);
        $teste = $teste->max('minutes');
        $history3 = $watchtime->where('minutes','<',$teste);
        $history3 = $history3->max('minutes');
        $watchtime = $watchtime->sortByDesc('minutes');
        //for($i=0; $i<4; $i++){
            $user[0] = $watchtime->max('minutes');
            $user[1] = $watchtime->where('minutes','<',$user[0])->max();
            $user[2] = $watchtime->where('minutes','<',$user[1])->max();
       // }
        return view('watchtime', compact(['watchtime','history','teste','history3','user']));
    }
}
