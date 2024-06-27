<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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
                "thumbnail_url" => $gallery->thumbnail
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
}
