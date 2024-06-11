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
            return redirect(route('login'))->with('error', 'Login required to access dashboard!');
        }
        $role_id = Auth::user()->role_id;
        if($role_id == 1){
        return view('verified_views.add_gallery');
        }
        return redirect(route('dashboard'));
    }
    
    
    public function view_gallery()
    {
        if(!Auth::user()){
            // dd(auth()->user()->role_id);
            return redirect(route('login'))->with('error', 'Login required to access dashboard!');
        }
        $galleries = DB::table('gallery_main')->get();
        $data['galleries'] = $galleries;
        return view('verified_views.view_gallery', $data);
    }

    public function user_view_gallery()
    {
        $galleries = DB::table('gallery_main')->get();
        $data['galleries'] = $galleries;
        return view('user_views.all_gallery', $data);
    }
    public function view_gallery_id($id)
    {
        if(!Auth::user()){
            // dd(auth()->user()->role_id);
            return redirect(route('login'))->with('error', 'Login required to access dashboard!');
        }
        $all_photos = DB::table('gallery_photos_main')->where('g_id', $id)->get();
        $curr_gallery = DB::table('gallery_main')->where('g_id', $id)->first();
        $data['curr_gallery'] = $curr_gallery;
        $data['all_photos'] = $all_photos;
        $data['id'] = $id;
        return view('verified_views.view_gallery_id', $data);
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

    public function add_gallery_post(Request $request)
    {
        if(!Auth::user()){
            // dd(auth()->user()->role_id);
            return redirect(route('login'))->with('error', 'Login required to access dashboard!');
        }
        $role_id = Auth::user()->role_id;
        if($role_id == 1){
        $request->validate([
            'thumbnail' => 'required|image',
            'name' => 'required'
        ]);

        $curr_gallery = DB::table('gallery_main')->insertGetId([
            'g_name' => $request->name,
            'thumbnail' => $request->thumbnail,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        // $curr_gallery = DB::table('gallery_main')->latest('created_at')->first();
        $filename = time().'-img.'.$request->file('thumbnail')->getClientOriginalExtension();
        $request->file('thumbnail')->storeAs('public/uploads/gallery/'.$curr_gallery, $filename);


        DB::table('gallery_photos_main')->insert([
            'g_id' => $curr_gallery,
            'p_url' => 'storage/uploads/gallery/'.$curr_gallery.'/'.$filename,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('gallery_main')->where('g_id', $curr_gallery)
            ->update([
                                'thumbnail' => 'storage/uploads/gallery/'.$curr_gallery.'/'.$filename,
                                'updated_at' => date('Y-m-d H:i:s')
                            ]);
        return redirect(route('view_gallery'))->with('success', 'Gallery created!');
                        }
                        return redirect(route('dashboard'));
    }

    public function view_gallery_id_post(Request $request)
    {
        if(!Auth::user()){
            // dd(auth()->user()->role_id);
            return redirect(route('login'))->with('error', 'Login required to access dashboard!');
        }
        $role_id = Auth::user()->role_id;
        if($role_id == 1){
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
            DB::table('gallery_photos_main')->insert([
                'g_id' => $request->id,
                'p_url' => 'storage/uploads/gallery/'.$request->id.'/'.$filename,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
            // echo $filename;
            $start += 1;
        }
        return redirect(route('view_gallery_id', $request->id))->with('success', 'Photo added to gallery!');
    }
    return redirect(route('dashboard'));
    }
}
