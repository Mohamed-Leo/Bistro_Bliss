<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\bookvalid;
use App\Models\bookings;
use App\Models\menu;
use App\Models\User;
use App\Notifications\BookingsNotify;
use App\Notifications\CancelBookingNotify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;

class MainPagesController extends Controller
{
    public function homepage() {
        return view('home');
    }
    public function aboutpage() {
        return view('about');
    }

    // menu page routes-----------------------------------------
    public function menupage() {
        // get menu data--
        $menudata = menu::all();
        return view('menu' , compact('menudata'));
    }
    public function menubreakpage() {
        $menudata = menu::get()->where('menu_type' , 'breakfast');
        return view('menu' , compact('menudata'));
    }
    public function menudishespage() {
        $menudata = menu::get()->where('menu_type' , 'dishes');
        return view('menu' , compact('menudata'));
    }
    public function menudrinkspage() {
        $menudata = menu::get()->where('menu_type' , 'drinks');
        return view('menu' , compact('menudata'));
    }
    public function menudessertpage() {
        $menudata = menu::get()->where('menu_type' , 'dessert');
        return view('menu' , compact('menudata'));
    }



    public function blogspage() {
        return view('blogs');
    }


    // bookings process------------------------------------------------------
    public function bookform() {
        return view('booktable');
    }
    public function bookaction(bookvalid $request) {
        $bookmodel = new bookings();
        // check if user is exist or not---
        $useremail = $request->email;
        $userdata = User::get()->where('email' , $useremail)->first();

        if(auth()->user()) {
            // check if user have insert the right data
            if(auth()->user()->name == $request->name && auth()->user()->email == $request->email) {
                // check if user already booked or not---
                $user_book_data = bookings::get()->where('email' , $useremail)->first();
                if ($user_book_data) {
                    // check if user booked with the same date and time--
                    if($user_book_data->date == $request->date && $user_book_data->time == $request->time){
                        $error = 'you have already booked with same date and time';
                        return view('booktable', compact('error'));
                    }
                    else {
                        $bookmodel->date = $request->date;
                        $bookmodel->time = $request->time;
                        $bookmodel->name = $request->name;
                        $bookmodel->email = $request->email;
                        $bookmodel->phone = $request->phone;
                        $bookmodel->total_perosn = $request->person;
                        $bookmodel->user_id = $userdata->id;
                        $bookmodel->save();
                        // variable to send status of booking---
                        $status = 'pending';
                        // send notofication--------
                        $user = User::where('id' , auth()->user()->id)->get();
                        Notification::send($user , new BookingsNotify($request->date, $request->time, $request->name , $request->email, $request->phone ,$request->person, $status));

                        return redirect()->route('book.form');
                    }
                }
                else {
                    // if user did not book before--
                    $bookmodel->date = $request->date;
                    $bookmodel->time = $request->time;
                    $bookmodel->name = $request->name;
                    $bookmodel->email = $request->email;
                    $bookmodel->phone = $request->phone;
                    $bookmodel->total_perosn = $request->person;
                    $bookmodel->user_id = $userdata->id;
                    $bookmodel->save();
                    // variable to send status of booking---
                    $status = 'pending';

                    // send notofication--------
                    $user = User::where('id' , auth()->user()->id)->get();
                    Notification::send($user , new BookingsNotify($request->date, $request->time, $request->name , $request->email, $request->phone ,$request->person , $status));

                    return redirect()->route('book.form');
                }
            }
            else {
                $error = "your username and email doesn't match";
                return view('booktable', compact('error'));
            }
        }
        else {
            $error = 'sorry you should login or register first';
            return view('booktable', compact('error'));
        }
    }



    public function contactform() {
        return view('contactform');
    }


    // my bookings routes--------------------
    public function mybookingspage() {
        // get bookings data---------------------
        $bookings_data = bookings::where('user_id' , auth()->user()->id)->get();
        return view('mybookings' , compact('bookings_data'));
    }

    public function cancelbookimg($id) {
        // get booking data--
        $booking_data = bookings::find($id);
        // send notofication--------
        $user = User::where('id' , auth()->user()->id)->get();
        Notification::send($user , new CancelBookingNotify($booking_data->date , $booking_data->time , $booking_data->name , $booking_data->email));
        // delete booking---
        bookings::where('id' , $id)->delete();
        return redirect()->route('my.bookings');
    }


    // notifications process----------------------------------------------
    public function shownotifications() {
        return view('notifications');
    }

    public function readnotification($id) {
        DB::table('notifications')->where('id' , $id)->update([
            'read_at' => now()
        ]);
        return redirect()->route('notifications');
    }

    public function deletenotify($id) {
        DB::table('notifications')->where('id' , $id)->delete();
        return redirect()->route('notifications');
    }
}
