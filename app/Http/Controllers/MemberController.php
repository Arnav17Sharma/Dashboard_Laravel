<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Session;

class MemberController extends Controller
{
    public function dashboard()
    {
        if(Auth::user()){
            // dd(auth()->user()->role_id);
            return view('verified_views.dashboard');
        }
        return redirect(route('login_get'))->with('error', 'Login required to access dashboard!');
    }

    public function add_member()
    {
        if(!Auth::user()){
            // dd(auth()->user()->role_id);
            return redirect(route('login_get'))->with('error', 'Login required to access dashboard!');
        }
        $role_id = Auth::user()->role_id;
        if($role_id == 1){
            $roles = DB::table('role_master')->get();
            $data['roles'] = $roles;
            return view('verified_views.add_member', $data);
        }
        return redirect(route('dashboard'));
    }

    public function view_members()
    {
        if(!Auth::user()){
            // dd(auth()->user()->role_id);
            return redirect(route('login_get'))->with('error', 'Login required to access dashboard!');
        }
        $members = DB::table('members')->orderBy('created_at', 'DESC')->get();
        $roles = DB::table('role_master')->get();
        $data['roles'] = $roles;
        $data['members'] = $members;
        return view('verified_views.view_members', $data);
    }

    public function save_member(Request $request)
    {
        if(!Auth::user()){
            // dd(auth()->user()->role_id);
            return redirect(route('login_get'))->with('error', 'Login required to access dashboard!');
        }
        $role_id = Auth::user()->role_id;
        if($role_id == 1){
        $request->validate([
            'name' => 'required',
            'password' => 'required',
            'email' => 'required|email|unique:members',
            'phone' => 'required|min:11|numeric',
            'role' => 'required|numeric'
        ]);
        DB::table('members')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'phone' => $request->phone,
            'role_id' => $request->role,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        return redirect(route('view_members'))->with('success', 'Member added!');
    }
    return redirect(route('dashboard'));
    }

    public function edit_member($id = null)
    {
        if(!Auth::user()){
            // dd(auth()->user()->role_id);
            return redirect(route('login_get'))->with('error', 'Login required to access dashboard!');
        }
        // echo $id;
        $role_id = Auth::user()->role_id;
        if($role_id == 1){
        $roles = DB::table('role_master')->get();
        $data['roles'] = $roles;
        $member = DB::table('members')->where('id', $id)->first();
        $data['member'] = $member;
        return view('verified_views.edit_member', $data);
        }
        return redirect(route('dashboard'));
    }

    public function update_member(Request $request, $id = null)
    {
        if(!Auth::user()){
            // dd(auth()->user()->role_id);
            return redirect(route('login_get'))->with('error', 'Login required to access dashboard!');
        }
        $role_id = Auth::user()->role_id;
        if($role_id == 1){
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
                        return redirect(route('dashboard'));
    }

    public function login_get()
    {
        $notifications = DB::table('notice_board')->where('type', 6)->orderBy('id', 'desc')->limit(6)->get();
        $data['notifications'] = $notifications;
        return view('e&it_views.login_form', $data);
    }

    public function login_post(Request $request)
    {
        
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $user = User::where([
            'email'=> $request->email,
            'password'=> $request->password,
        ])->first();
        if($user)
        {
            Auth::login($user); // Uses $user contructed from User Model. 
            return redirect(route('view_gallery'))->with('success', 'Logged in successfully!');
        }
        return redirect(route('login_get'))->with('error', 'Wrong credentials!');
    }

    function logout() {
        if(!Auth::user()){
            // dd(auth()->user()->role_id);
            return redirect(route('login_get'))->with('error', 'Login required to access dashboard!');
        }
        Session::flush();
        Auth::logout();
        return redirect(route('login_get'));
    }
}