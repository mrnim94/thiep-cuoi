<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function save_guest_confirmations(Request $request){
        $data = array();
        $data['your_name'] = $request->your_name;
        $data['attendance_status'] = $request->attendance_status;
        $data['relationship_to_couple'] = $request->relationship_to_couple;
        $data['party_size'] = $request->party_size;
        $data['message_to_couple'] = $request->message_to_couple;
        echo '<pre>';
        print_r($data);
        echo '</pre>';

    }
}
