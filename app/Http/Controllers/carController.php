<?php

namespace App\Http\Controllers;
use App\User;
use App\Place;
use Auth;
use Illuminate\Http\Request;

class carController extends Controller
{
    public function leaveCar(Request $request) {
        date_default_timezone_set('Asia/Yekaterinburg');
        $date = new \DateTime();
        $hours = $request->input('hours');
        $date->modify('+' . $hours . " hours");
        $minutes = $request->input('hours') * 60;

        $place = Place::find($request->input('place-id'));
        $place->price = $hours * 100;
        $place->user_id = Auth::user()->id;
        $place->busy = 1;
        $place->endTime = $date;
        $place->number = $request->input('car-number');
        $place->minutes = $minutes;
        $place->save();






        $user = User::find(Auth::user()->id);
        $user->person->hours += $hours;
        $user->person->save();

        if($user->person->hours > 20) {
            $user->person->discount = 5;
        }
        $user->person->save();
        $user->save();
        return redirect()->back();
    }

    public function takeCar() {
        $places = Auth::user()->places;
        if(!$places) {
            return redirect('/');
        }
        foreach ($places as $place) {
            if(Auth::user()->person->money < $place->price) {
                return redirect('/');
            }
            else {
                $user = Auth::user();
                $user->person->money -= $place->price;
                $user->person->save();

                $place->price = 0;
                $place->busy = 0;
                $place->user_id = 1;
                $place->number = 'none';
                $place->minutes = 0;
                $place->save();

                return redirect('/');
            }

        }
    }

    public function money(Request $request) {
        $user = Auth::user()->person;
        $user->money += $request['money'];
        $user->save();
        return redirect()->back();
    }
}
