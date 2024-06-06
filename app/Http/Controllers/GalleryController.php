<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{
    public function add_gallery()
    {
        return view('add_gallery');
    }

    public function view_gallery()
    {
        $galleries = DB::table('gallery_main')->get();
        $data['galleries'] = $galleries;
        return view('view_gallery', $data);
    }

    public function view_gallery_id($id)
    {
        $all_photos = DB::table('gallery_photos_main')->get();
        $curr_gallery = DB::table('gallery_main')->where('g_id', $id)->first();
        $data['curr_gallery'] = $curr_gallery;
        $data['all_photos'] = $all_photos;
        $data['id'] = $id;
        return view('view_gallery_id', $data);
    }

    public function add_gallery_post(Request $request)
    {
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

    public function view_gallery_id_post(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'thumbnail' => 'required|file|mimes:jpg,png,jpeg,avif,gif,webp',
        ]);
        $filename = time().'-img.'.$request->file('thumbnail')->getClientOriginalExtension();
        $request->file('thumbnail')->storeAs('public/uploads/gallery/'.$request->id, $filename);
        DB::table('gallery_photos_main')->insert([
            'g_id' => $request->id,
            'p_url' => 'storage/uploads/gallery/'.$request->id.'/'.$filename,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        return redirect(route('view_gallery_id_post', $request->id))->with('success', 'Photo added to gallery!');
    }
}
