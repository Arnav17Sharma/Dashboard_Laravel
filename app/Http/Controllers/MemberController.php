<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    public function add_member()
    {
        $roles = DB::table('role_master')->get();
        $data['roles'] = $roles;
        return view('verified_views.add_member', $data);
    }

    public function view_members()
    {
        $members = DB::table('members')->orderBy('created_at', 'DESC')->get();
        $roles = DB::table('role_master')->get();
        $data['roles'] = $roles;
        $data['members'] = $members;
        return view('verified_views.view_members', $data);
    }

    public function save_member(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:members',
            'phone' => 'required|min:11|numeric',
            'role' => 'required|numeric'
        ]);
        DB::table('members')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'role_id' => $request->role,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        return redirect(route('view_members'))->with('success', 'Member added!');
    }

    public function edit_member($id = null)
    {
        // echo $id;
        $roles = DB::table('role_master')->get();
        $data['roles'] = $roles;
        $member = DB::table('members')->where('id', $id)->first();
        $data['member'] = $member;
        return view('verified_views.edit_member', $data);
    }

    public function update_member(Request $request, $id = null)
    {
        // echo $id;
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|',
            'phone' => 'required|numeric',
            'role' => 'required|numeric'
        ]);
        DB::table('members')->where('id', $id)
                            ->update([
                                'name' => $request->name,
                                'email' => $request->email,
                                'phone' => $request->phone,
                                'role_id' => $request->role,
                                'updated_at' => date('Y-m-d H:i:s')
                            ]);
        return redirect(route('view_members'))->with('success', 'Member updated!');
    }
}
