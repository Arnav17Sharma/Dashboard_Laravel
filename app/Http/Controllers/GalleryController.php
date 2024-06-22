<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Session;

class GalleryController extends Controller
{
    public function add_gallery()
    {
        if(!Auth::user()){
            // dd(auth()->user()->role_id);
            return redirect(route('login_get'))->with('error', 'Login required to access dashboard!');
        }
        return view('verified_views.add_gallery');
    }

    public function dashboard()
    {
        if(!Auth::user()){
            // dd(auth()->user()->role_id);
            return redirect(route('login_get'))->with('error', 'Login required to access dashboard!');
        }
        return view('verified_views.dashboard');
    }
    
    
    public function view_gallery()
    {
        if(!Auth::user()){
            // dd(auth()->user()->role_id);
            return redirect(route('login_get'))->with('error', 'Login required to access dashboard!');
        }
        $galleries = DB::table('gallery_main')->where('status', 1)->get();
        $data['galleries'] = $galleries;
        return view('verified_views.view_gallery', $data);
    }
    
    
    
    
    public function eit_photo_gallery()
    {
        $notifications = DB::table('notice_board')->where('type', 6)->orderBy('id', 'desc')->limit(3)->get();
        $data['notifications'] = $notifications;
        $galleries = DB::table('gallery_main')->where('status', 1)->get();
        $data['galleries'] = $galleries;
        return view('e&it_views.view_gallery', $data);
    }
    
    public function api_eit_photo_gallery()
    {
        $galleries = DB::table('gallery_main')->where('status', 1)->get();
        $data = [];
        foreach($galleries as $gallery) {
            array_push($data, [
                "gallery_name" => $gallery->g_name,
                "thumbnail_url" => $gallery->thumbnail
            ]);
        }
        return $data;
    }
    

    
    public function view_pending_requests()
    {
        if(!Auth::user()){
            // dd(auth()->user()->role_id);
            return redirect(route('login_get'))->with('error', 'Login required to access dashboard!');
        }
        $galleries = DB::table('gallery_main')->where('status', 0)->get();
        $members = DB::table('members')->get();
        $data['galleries'] = $galleries;
        $data['members'] = $members;
        // if(Auth::user()->id == 2) {return redirect(route('dashboard')); }
        return view('verified_views.view_pending_requests', $data);
    }
    
    
    public function view_all_requests_for_member()
    {
        if(!Auth::user()){
            // dd(auth()->user()->role_id);
            return redirect(route('login_get'))->with('error', 'Login required to access dashboard!');
        }
        
        $galleries = DB::table('gallery_main')->get();
        $members = DB::table('members')->get();
        $data['galleries'] = $galleries;
        $data['members'] = $members;
        return view('verified_views.view_all_requests_for_member', $data);
    }

    public function user_view_gallery()
    {
        $galleries = DB::table('gallery_main')->where('status', 1)->get();
        $data['galleries'] = $galleries;
        return view('user_views.all_gallery', $data);
    }

    public function view_gallery_id($id)
    {
        if(!Auth::user()){
            // dd(auth()->user()->role_id);
            return redirect(route('login_get'))->with('error', 'Login required to access dashboard!');
        }
        $all_photos = DB::table('gallery_photos_main')->where('g_id', $id)->get();
        $curr_gallery = DB::table('gallery_main')->where('g_id', $id)->first();
        $author = DB::table('members')->where('id', $curr_gallery->user_id)->first();
        $data['author'] = $author;
        $data['curr_gallery'] = $curr_gallery;
        $data['all_photos'] = $all_photos;
        $data['id'] = $id;
        return view('verified_views.view_gallery_id', $data);
    }

    public function view_pending($id)
    {
        if(!Auth::user()){
            // dd(auth()->user()->role_id);
            return redirect(route('login_get'))->with('error', 'Login required to access dashboard!');
        }
        $all_photos = DB::table('gallery_photos_main')->where('g_id', $id)->get();
        $curr_gallery = DB::table('gallery_main')->where('g_id', $id)->first();
        $data['curr_gallery'] = $curr_gallery;
        $data['all_photos'] = $all_photos;
        $data['id'] = $id;
        return view('verified_views.view_pending', $data);
    }

    
    public function user_view_gallery_id($id)
    {
        $all_photos = DB::table('gallery_photos_main')->where('g_id', $id)->get();
        $curr_gallery = DB::table('gallery_main')->where('g_id', $id)->first();
        $data['curr_gallery'] = $curr_gallery;
        $data['all_photos'] = $all_photos;
        $data['id'] = $id;
        return view('user_views.view_gallery_id', $data);
    }
    
    public function eit_photo_gallery_id($id)
    {
        $notifications = DB::table('notice_board')->where('type', 6)->orderBy('id', 'desc')->limit(3)->get();
        $data['notifications'] = $notifications;
        $all_photos = DB::table('gallery_photos_main')->where('g_id', $id)->get();
        $curr_gallery = DB::table('gallery_main')->where('g_id', $id)->first();
        $data['curr_gallery'] = $curr_gallery;
        $data['all_photos'] = $all_photos;
        $data['id'] = $id;
        return view('e&it_views.view_gallery_id', $data);
    }
    
    public function api_eit_photo_gallery_id($id)
    {
        $all_photos = DB::table('gallery_photos_main')->where('g_id', $id)->get();
        $curr_gallery = DB::table('gallery_main')->where('g_id', $id)->first();
        $data['gallery_id'] = $id;
        $data['gallery_name'] = $curr_gallery->g_name;
        $data['user_id'] = $curr_gallery->user_id;
        $data['created_at'] = $curr_gallery->created_at;
        $data['thumbnail'] = $curr_gallery->thumbnail;
        $data['photos'] = [];
        foreach($all_photos as $photo) {
            array_push($data['photos'], $photo->p_url);
        }
        return $data;
    }

    public function add_gallery_post(Request $request)
    {
        if(!Auth::user()){
            // dd(auth()->user()->role_id);
            return redirect(route('login_get'))->with('error', 'Login required to access dashboard!');
        }
        $request->validate([
            'thumbnail' => 'required|image',
            'name' => 'required'
        ]);
        
        $curr_gallery = DB::table('gallery_main')->insertGetId([
            'g_name' => $request->name,
            'thumbnail' => $request->thumbnail,
            'user_id' => Auth::user()->id,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        // $curr_gallery = DB::table('gallery_main')->latest('created_at')->first();
        $filename = time().'-img.'.$request->file('thumbnail')->getClientOriginalExtension();
        $request->file('thumbnail')->storeAs('public/uploads/gallery/'.$curr_gallery, $filename);


        
        if(Auth::user()->role_id == 1) {
            DB::table('gallery_photos_main')->insert([
                'g_id' => $curr_gallery,
                'p_url' => 'storage/uploads/gallery/'.$curr_gallery.'/'.$filename,
                'created_at' => date('Y-m-d H:i:s'),
                'user_id' => Auth::user()->id,
                'status' => 1,
                'updated_at' => date('Y-m-d H:i:s')
            ]);
            DB::table('gallery_main')->where('g_id', $curr_gallery)
                ->update([
                                    'thumbnail' => 'storage/uploads/gallery/'.$curr_gallery.'/'.$filename,
                                    'status' => 1,
                                    'updated_at' => date('Y-m-d H:i:s')
                                ]);
                            }
        else
        {
            DB::table('gallery_photos_main')->insert([
                'g_id' => $curr_gallery,
                'p_url' => 'storage/uploads/gallery/'.$curr_gallery.'/'.$filename,
                'created_at' => date('Y-m-d H:i:s'),
                'user_id' => Auth::user()->id,
                'updated_at' => date('Y-m-d H:i:s')
            ]);
            DB::table('gallery_main')->where('g_id', $curr_gallery)
                ->update([
                                    'thumbnail' => 'storage/uploads/gallery/'.$curr_gallery.'/'.$filename,
                                    'updated_at' => date('Y-m-d H:i:s')
                                ]);
        }
        return redirect(route('view_gallery'))->with('success', 'Gallery created!');
    }

    public function view_gallery_id_post(Request $request)
    {
        if(!Auth::user()){
            // dd(auth()->user()->role_id);
            return redirect(route('login_get'))->with('error', 'Login required to access dashboard!');
        }
        $request->validate([
            'id' => 'required',
            'images.*' => 'required|file|mimes:jpg,png,jpeg,avif,gif,webp',
        ]);
        // dd($request->file('images'));
        $start = 0;
        foreach($request->file('images') as $file)
        {
            $filename = $start.time().'-img.'.$file->getClientOriginalExtension();
            $file->storeAs('public/uploads/gallery/'.$request->id, $filename);
            if(Auth::user()->role_id == 1){
                DB::table('gallery_photos_main')->insert([
                    'g_id' => $request->id,
                    'p_url' => 'storage/uploads/gallery/'.$request->id.'/'.$filename,
                    'status' => 1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ]);
            }
            if(Auth::user()->role_id == 2){
                DB::table('gallery_main')->where('g_id', $request->id)
                ->update([
                    'status' => 0,
                    'updated_at' => date('Y-m-d H:i:s')
                ]);
                DB::table('gallery_photos_main')->insert([
                    'g_id' => $request->id,
                    'p_url' => 'storage/uploads/gallery/'.$request->id.'/'.$filename,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ]);
            }
            // echo $filename;
            $start += 1;
        }
        return redirect(route('view_gallery_id', $request->id))->with('success', 'Photo added to gallery!');
    }

    public function accept_gallery($id)
    {
        if(!Auth::user()){
            // dd(auth()->user()->role_id);
            return redirect(route('login_get'))->with('error', 'Login required to access dashboard!');
        }
        DB::table('gallery_main')->where('g_id', $id)
                ->update([
                                    'status' => 1,
                                    'updated_at' => date('Y-m-d H:i:s')
                                ]);
        $all_photos = DB::table('gallery_photos_main')->where('g_id', $id)
        // foreach($all_photos as )
        ->update([
            'status' => 1,
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        return redirect(route('view_gallery'))->with('success', 'Request Accepted!');
    }

    public function reject_gallery($id)
    {
        if(!Auth::user()){
            // dd(auth()->user()->role_id);
            return redirect(route('login_get'))->with('error', 'Login required to access dashboard!');
        }
        DB::table('gallery_main')->where('g_id', $id)
                ->update([
                                    'status' => 2,
                                    'updated_at' => date('Y-m-d H:i:s')
                                ]);
        $all_photos = DB::table('gallery_photos_main')->where('g_id', $id)
        ->update([
            'status' => 2,
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        return redirect(route('view_pending_requests'))->with('error', 'Request Rejected!');
    }
}
