<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;
use Auth;
class indexController extends Controller
{
    public function showIndex() {
      if(Auth::user()->name == 'admin') {
            return redirect('/admin');
        }
        $places = Place::all();
        $user = Auth::user();
        $hours = $user->person->hours;
        $discount = $user->person->discount;
        $money = $user->person->money;

       if(count($user->places) != 0) {
           $minutes = $user->places[0]->minutes;
       }

       else {
           $minutes = 0;
       }

       return view('index_auth', ['places' => $places, 'name' => $user->name, 'hours' => $hours, 'discount' => $discount, 'money' => $money , 'minutes' => $minutes]);
    }
}
