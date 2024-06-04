<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    public function add_member()
    {
        return view('add_member');
    }

    public function view_members()
    {
        $members = DB::table('members')->get();
        // dd($members);
        $data['members'] = $members;
        return view('view_members', $data);
    }

    public function save_member(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'status' => 'required'
        ]);
        DB::table('members')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'status' => $request->status,
            'created_at' => date('Y-m-d H:i:s'),
            'status' => $request->status
        ]);
        return redirect(route('view_members'))->with('success', 'Member added!');
    }
}
