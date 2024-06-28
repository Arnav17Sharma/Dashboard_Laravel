<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Session;

class DeviceController extends Controller
{
    public function api_eit_photo_gallery()
    {
        $galleries = DB::table('gallery_main')->where('status', 1)->get();
        $data = [];
        foreach($galleries as $gallery) {
            array_push($data, [
                "gallery_name" => $gallery->g_name,
                "thumbnail_url" => $gallery->thumbnail,
                "created_at" => $gallery->created_at                
            ]);
        }
        return $data;
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
    public function api_get_notice_board() {
        $notices = DB::table('notice_board')->orderBy('id', 'desc')->get();
        $data['notices'] = $notices;
        $data = [];
        foreach ($notices as $notice) {
            array_push($data, [
                "id" => $notice->id,
                "type" => $notice->type,
                "title" => $notice->title,
                "department" => $notice->department,
                "url" => $notice->url,
                "status" => $notice->status,
                "created_at" => $notice->created_at,
                "updated_at" => $notice->updated_at
            ]);
        }
        return $data;
    }
    public function api_get_notice_id($id) {
        $notice = DB::table('notice_board')->where('id', $id)->first();
        $attachments = DB::table('board_attachments')->where('notice_board_id', $id)->get();
        $data["id"] = $notice->id;
        $data["type"] = $notice->type;
        $data["title"] = $notice->title;
        $data["department"] = $notice->department;
        $data["url"] = $notice->url;
        $data["status"] = $notice->status;
        $data["created_at"] = $notice->created_at;
        $data["updated_at"] = $notice->updated_at;
        $data["attachments"] = [];
        foreach($attachments as $attachment) {
            array_push($data['attachments'], $attachment->attachment_url);
        }
        return $data;
    }
    public function api_news() {
        $total_news = DB::table('notice_board')->where('type', 1)->orderBy('id', 'desc')->limit(6)->get();
        $data = [];
        foreach($total_news as $news) {
            array_push($data, [
                "id" => $news->id,
                "type" => $news->type,
                "title" => $news->title,
                "department" => $news->department,
                "url" => $news->url,
                "status" => $news->status,
                "created_at" => $news->created_at,
                "updated_at" => $news->updated_at
            ]);
        }
        return $data;
    }
    public function api_tenders() {
        $total_tenders = DB::table('notice_board')->where('type', 2)->orderBy('id', 'desc')->limit(6)->get();
        $data = [];
        foreach($total_tenders as $tenders) {
            array_push($data, [
                "id" => $tenders->id,
                "type" => $tenders->type,
                "title" => $tenders->title,
                "department" => $tenders->department,
                "url" => $tenders->url,
                "status" => $tenders->status,
                "created_at" => $tenders->created_at,
                "updated_at" => $tenders->updated_at
            ]);
        }
        return $data;
    }
    public function api_orders() {
        $total_orders = DB::table('notice_board')->where('type', 3)->orderBy('id', 'desc')->limit(6)->get();
        $data = [];
        foreach($total_orders as $orders) {
            array_push($data, [
                "id" => $orders->id,
                "type" => $orders->type,
                "title" => $orders->title,
                "department" => $orders->department,
                "url" => $orders->url,
                "status" => $orders->status,
                "created_at" => $orders->created_at,
                "updated_at" => $orders->updated_at
            ]);
        }
        return $data;
    }
    public function api_circulars() {
        $total_circulars = DB::table('notice_board')->where('type', 4)->orderBy('id', 'desc')->limit(6)->get();
        $data = [];
        foreach($total_circulars as $circulars) {
            array_push($data, [
                "id" => $circulars->id,
                "type" => $circulars->type,
                "title" => $circulars->title,
                "department" => $circulars->department,
                "url" => $circulars->url,
                "status" => $circulars->status,
                "created_at" => $circulars->created_at,
                "updated_at" => $circulars->updated_at
            ]);
        }
        return $data;
    }
    public function api_recruitments() {
        $total_recruitments = DB::table('notice_board')->where('type', 5)->orderBy('id', 'desc')->limit(6)->get();
        $data = [];
        foreach($total_recruitments as $recruitments) {
            array_push($data, [
                "id" => $recruitments->id,
                "type" => $recruitments->type,
                "title" => $recruitments->title,
                "department" => $recruitments->department,
                "url" => $recruitments->url,
                "status" => $recruitments->status,
                "created_at" => $recruitments->created_at,
                "updated_at" => $recruitments->updated_at
            ]);
        }
        return $data;
    }
    public function api_notifications() {
        $total_notifications = DB::table('notice_board')->where('type', 6)->orderBy('id', 'desc')->limit(6)->get();
        $data = [];
        foreach($total_notifications as $notifications) {
            array_push($data, [
                "id" => $notifications->id,
                "type" => $notifications->type,
                "title" => $notifications->title,
                "department" => $notifications->department,
                "url" => $notifications->url,
                "status" => $notifications->status,
                "created_at" => $notifications->created_at,
                "updated_at" => $notifications->updated_at
            ]);
        }
        return $data;
    }
    public function api_get_types() {
        $all_types = DB::table('notice_type_master')->get();
        return $all_types;
    }
    public function api_get_member_roles() {
        $roles = DB::table('role_master')->get();
        return $roles;
    }
    public function api_get_members() {
        $members = DB::table('members')->orderBy('created_at', 'DESC')->get();
        return $members;
    }
    public function api_get_member_id($id) {
        $member_data = DB::table('members')->where('id', $id)->first();
        return $member_data;
    }


    public function api_login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $response['email'] = $request->email;

        if($validator->fails()) {
            $response["message"] = $validator->errors();
            $response["success"] = false;
            return $response;
        }

        $user = User::where([
            'email'=> $request->email,
            'password'=> $request->password,
        ])->first();
        if($user)
        {
            Auth::login($user);
            $token = $user->createToken('auth_token')->plainTextToken;
            return response()->json([
                'access_token' => $token,
                'token_type' => 'Bearer',
            ]);
            // $response['token'] = $token;
            // $response['token_type'] = 'Bearer';
            $response["success"] = true; 
            $response["message"] = "Logged in for ".$response['email']." !"; 
            return $response;
        }
        $response["success"] = false;
        $response["message"] = "Wrong credentials"; 
        return $response;
    }

    public function api_logout()
    {
        if(!Auth::user()){
            $response["message"] = "User not logged in!!";
            return $response;
        }
        Session::flush();
        Auth::guard('sanctum')->user()->tokens()->delete();
        $response["message"] = "Logged out!";
        return $response;
    }

    public function me(Request $request)
    {
        if(!Auth::user()){
            $response["message"] = "User not logged in!!";
            return $response;
        }
        return $request->user();
    }

    public function api_add_gallery(Request $request)
    {
        if(!auth()->user()) {
            $response["message"] = "User not logged in!!";
            return $response;
        }

        $validator = Validator::make($request->all(), [
            'thumbnail' => 'required|image',
            'name' => 'required'
        ]);
        if($validator->fails()) {
            $response["message"] = $validator->errors();
            return $response;
        }

        $curr_gallery = DB::table('gallery_main')->insertGetId([
            'g_name' => $request->name,
            'thumbnail' => $request->thumbnail,
            'user_id' => auth()->user()->id,
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
        $response["message"] = "Added new Gallery named ".$request->name." stored at ".'storage/uploads/gallery/'.$curr_gallery.'/'.$filename;
        return $response;
    }

    public function api_add_photos(Request $request) 
    {
        if(!Auth::user()){
            $response["message"] = "User not logged in!!";
            return $response;
        }
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'images.*' => 'required|file|mimes:jpg,png,jpeg,avif,gif,webp',
        ]);
        if($validator->fails()) {
            $response['message'] = $validator->errors();
            return $response;
        }
        $start = 0;
        $response["files"] = [];
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
                array_push($response["files"], 'storage/uploads/gallery/'.$request->id.'/'.$filename);
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
                array_push($response["files"], 'storage/uploads/gallery/'.$request->id.'/'.$filename);
            }
            // echo $filename;
            $start += 1;
        }
        $response["message"] = "Photos added to current gallery!";
        return $response;
    }

    public function api_accept($id)
    {
        if(!Auth::user()){
            $response["message"] = "User not logged in!!";
            return $response;
        }
        if(Auth::user()->role_id != 1) {
            $response["message"] = 'Permissions denied!';
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
        $response["message"] = "Gallery ".$id." accepted by admin!";
        return $response;
    }

    public function api_reject($id) 
    {
        if(!Auth::user()){
            $response["message"] = "User not logged in!!";
            return $response;
        }
        if(Auth::user()->role_id != 1) {
            $response["message"] = 'Permissions denied!';
        }
        DB::table('gallery_main')->where('g_id', $id)
                ->update([
                                    'status' => 2,
                                    'updated_at' => date('Y-m-d H:i:s')
                                ]);
        $all_photos = DB::table('gallery_photos_main')->where('g_id', $id)
        // foreach($all_photos as )
        ->update([
            'status' => 2,
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        $response["message"] = "Gallery ".$id." rejected by admin!";
        return $response;
    }

    public function api_update_member(Request $request, $id = null)
    {
        if(!Auth::user()){
            $response["message"] = "User not logged in!!";
            return $response;
        }
        $role_id = Auth::user()->role_id;
        if($role_id == 1){
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
            $response["message"] = "Updated member details";
            return $response;
        }
        $response["message"] = "Permissions denied!";
        return $response;
    }

    public function api_create_member(Request $request)
    {
        if(!Auth::user()){
            $response["message"] = "User not logged in!!";
            return $response;
        }
        $role_id = Auth::user()->role_id;
        if($role_id == 1){
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'password' => 'required',
                'email' => 'required|email|unique:members',
                'phone' => 'required|min:11|numeric',
                'role' => 'required|numeric'
            ]);
            if($validator->fails()) {
                $response["message"] = $validator->errors();
                return $response;
            }
            DB::table('members')->insert([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
                'phone' => $request->phone,
                'role_id' => $request->role,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
            $response["message"] = 'Member added successfully!';
            return $response;
        }
        $response["message"] = "Permissions denied!";
        return $response;
    }

    public function api_view_pending_requests()
    {
        if(!Auth::user()){
            $response["message"] = "User not logged in!!";
            return $response;
        }
        if(Auth::user()->id == 2) {
            $response["message"] = "permissions denied!";
            return $response;
        } 
        $galleries = DB::table('gallery_main')->where('status', 0)->get();
        $members = DB::table('members')->get();
        $data['galleries'] = $galleries;
        $data['members'] = $members;
        $response["data"] = [];
        foreach($galleries as $gallery) {
            array_push($response['data'], [
                "gallery_id" => $gallery->g_id,
                "gallery_name" => $gallery->g_name,
                "thumbnail_url" => $gallery->thumbnail,
                "created_at" => $gallery->created_at,
                "author_id" => $gallery->user_id,
                "author_name" => DB::table('members')->where('id', $gallery->user_id)->first()->name,
                "author_email" => DB::table('members')->where('id', $gallery->user_id)->first()->email,
            ]);
        }
        $response["message"] = "Success!";
        return $response;
    }

    public function api_my_posts()
    {
        if(!Auth::user()){
            $response["message"] = "User not logged in!!";
            return $response;
        }
        $galleries = DB::table('gallery_main')->where("user_id", Auth::user()->id)->get();
        $response["data"] = [];
        foreach($galleries as $gallery) {
            array_push($response['data'], [
                "gallery_id" => $gallery->g_id,
                "gallery_name" => $gallery->g_name,
                "thumbnail_url" => $gallery->thumbnail,
                "created_at" => $gallery->created_at,
                "author_id" => $gallery->user_id,
                "author_name" => DB::table('members')->where('id', $gallery->user_id)->first()->name,
                "author_email" => DB::table('members')->where('id', $gallery->user_id)->first()->email,
            ]);
        }
        $response["message"] = "Success!";
        return $response;
    }

    public function api_view_messages()
    {
        if(!Auth::user()){
            $response["message"] = "User not logged in!!";
            return $response;
        }
        $messages = DB::table('contact_us_main')->orderBy('message_id', 'desc')->get();
        $response['data'] = $messages;
        $response['message'] = "Success!";
        return $response;
    }

    public function api_view_message_id($id)
    {
        if(!Auth::user()){
            $response["message"] = "User not logged in!!";
            return $response;
        }
        $message_data = DB::table('contact_us_main')->where('message_id', $id)->first();
        $response['data'] = $message_data;
        $response["message"] = "Success!";
        return $response;
    }

    public function api_add_notice(Request $request)
    {
        if(!Auth::user()){
            $response["message"] = "User not logged in!!";
            return $response;
        }
        $validator = Validator::make($request->all(), [
            'type' => 'required|numeric',
            'title' => 'required',
            'department' => 'required',
            'url' => 'nullable',
            'files.*' => 'nullable|required_without:url|file|mimes:pdf',
        ]);
        if($validator->fails()) {
            $response["message"] = $validator->errors();
            return $response;
        }
        
        $curr_notice = DB::table('notice_board')->insertGetId([
            'type' => $request->type,
            'title' => $request->title,
            'department' => $request->department,
        ]);
        DB::table('notice_board')->where('id', $curr_notice)
            ->update([
                'url' => $request->url,
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        if ($request->hasFile('files')) {
            $start = 1; 
            foreach($request->file('files') as $file)
            {
                $filename = $file->getClientOriginalName().'.'.$file->getClientOriginalExtension();
                $file->storeAs('public/uploads/notice_board/'.$curr_notice, $filename);
                $start += 1;
                DB::table('board_attachments')->insert([
                    'notice_board_id' => $curr_notice,
                    'attachment_url' => 'storage/uploads/notice_board/'.$curr_notice.'/'.$filename,                        
                ]);
            }
        }
        $response["notice_data"] = DB::table('notice_board')->where('id', $curr_notice)->first();
        $response["attachments"] = DB::table('board_attachments')->where('notice_board_id', $curr_notice)->get();
        $response["message"] = "Success!";
        return $response;
    }
}
