<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Session;

class MessageController extends Controller
{
    public function view_contact_us() {
        return view('e&it_views.contact_us');
    }
    public function view_messages() {
        if(!Auth::user()){
            return redirect(route('login_get'))->with('error', 'Login required to access dashboard!');
        }
        $messages = DB::table('contact_us_main')->orderBy('message_id', 'desc')->get();
        $data['messages'] = $messages;
        return view('verified_views.view_messages', $data);
    }

    public function view_message_id($id) {
        if(!Auth::user()){
            return redirect(route('login_get'))->with('error', 'Login required to access dashboard!');
        }
        $message_data = DB::table('contact_us_main')->where('message_id', $id)->first();
        $data['message_data'] = $message_data;
        return view('verified_views.view_message_id', $data);
    }

    public function view_message_id_post(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);
        DB::table('contact_us_main')->insert([
            'sender_name' => $request->name,
            'sender_email' => $request->email,
            'content' => $request->message,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        return redirect(route('view_contact_us'))->with('success', 'Message Sent!');
    }
}
