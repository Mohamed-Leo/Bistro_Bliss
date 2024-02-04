<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\bookvalid;
use App\Models\bookings;
use App\Models\ContactForm;
use App\Models\menu;
use App\Models\User;
use App\Notifications\BookingsNotify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class AdminpanelController extends Controller
{
    // show admin page----
    public function adminpage() {
        return view('adminpanel.adminpage');
    }

    // add to menu routes---------------------------------------------
    public function addmenuform() {
        return view('adminpanel.addmenu');
    }
    public function addmenuaction(Request $request) {
        $menumodel = new menu();

        $request->validate([
            'title' => ['required' , 'unique:menus,title'],
            'price' => ['required'],
            'description' => ['required'],
            'menutype' => ['required']
        ]);

        // images----------------------------------------------
        if(!empty($request->file('imagefile'))) {
            $pathname = $request->file('imagefile')->getClientOriginalName();
            $tmp = $request->file('imagefile')->storeAs('menuimgs' , $pathname , 'public');
            $menumodel->img_file = $pathname;
        }

        $menumodel->title = $request->title;
        $menumodel->price = $request->price;
        $menumodel->description = $request->description;
        $menumodel->img_link = $request->imagelink;
        $menumodel->menu_type = $request->menutype;
        $menumodel->save();

        return redirect()->route('menu.table');
    }

    public function showmenutable() {
        $menudata = menu::get();
        return view('adminpanel.showmenu' , compact('menudata'));
    }


    // update menu process------------------------------------------
    public function updatemenuform($id) {
        $menuitem = menu::find($id);
        return view('adminpanel.updatemenu', compact('menuitem'));
    }
    public function updatemenuaction(Request $request , $id) {
        // get wanted item to update--------------------------------------------
        $singlemenuitem = menu::find($id);

        // images-----
        if(!empty($request->file('imagefile'))) {
            $pathname = $request->file('imagefile')->getClientOriginalName();
            $tmp = $request->file('imagefile')->storeAs('menuimgs' , $pathname , 'public');
            $singlemenuitem->img_file = $pathname;
        }

        $singlemenuitem->menu_type = $request->menutype;
        $singlemenuitem->title = $request->title;
        $singlemenuitem->price = $request->price;
        $singlemenuitem->description = $request->description;
        $singlemenuitem->img_link = $request->imagelink;

        $singlemenuitem->save();
        return redirect()->route('menu.table');
    }

    // delete menu process------------------------------------------
    public function destroy($id) {
        // get wanted item to delete-----
        menu::find($id)->delete();
        return redirect()->route('menu.table');
    }
    public function showdeleted() {
        $menuditems = menu::onlyTrashed()->get();
        return view('adminpanel.showdeleted', compact('menuditems'));
    }
    public function restore($id) {
        menu::onlyTrashed()->restore($id);
        return redirect()->route('menu.table');
    }
    public function forcedelete($id) {
        menu::onlyTrashed()->find($id)->forceDelete();
        return redirect()->route('menu.table');
    }
    public function deleteall() {
        menu::truncate();
        return redirect()->route('menu.table');
    }


    // users process--------------------
    public function showusers(){
        // get users data-----
        $user_data = User::all();
        return view('adminpanel.showusers' , compact('user_data'));
    }


    // bookings process-------------------
    public function showbookings() {
        // get bookings data---
        $bookingsdata = bookings::all();
        return view('adminpanel.showbookings' , compact('bookingsdata'));
    }

    public function acceptbooking($id) {
        // update wanted booking-----
        bookings::where('id' , $id)->update(array('status' => 'accepted'));
        // get booking data to send notification-----
        $booking_data = bookings::find($id);

        $user = User::where('id' , $booking_data->user_id)->get();
        Notification::send($user , new BookingsNotify($booking_data->date , $booking_data->time , $booking_data->name , $booking_data->email , $booking_data->phone , $booking_data->total_person , $booking_data->status));

        return redirect()->route('show.bookings');
    }

    public function rejectbooking($id) {
        // update wanted booking-----
        bookings::where('id' , $id)->update(array('status' => 'rejected'));
        // get booking data to send notification-----
        $booking_data = bookings::find($id);

        $user = User::where('id' , $booking_data->user_id)->get();
        Notification::send($user , new BookingsNotify($booking_data->date , $booking_data->time , $booking_data->name , $booking_data->email , $booking_data->phone , $booking_data->total_person , $booking_data->status));

        return redirect()->route('show.bookings');
    }


    // contacts process -----------------
    public function showcontacts() {
        // get contact data------
        $contact_data = ContactForm::all();
        return view('adminpanel.showcontacts' , compact('contact_data'));
    }
}
