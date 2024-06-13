<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Session;

class NoticeBoardController extends Controller
{
    public function add_notice_board()
    {
        $all_types = DB::table('notice_type_master')->get();
        $data['all_types'] = $all_types;
        return view('verified_views.add_notice_board', $data);
    }

    public function add_notice_board_post(Request $request)
    {
        $request->validate([
            'type' => 'required|numeric',
            'title' => 'required',
            'department' => 'required',
            'url' => 'nullable',
            'files.*' => 'nullable|required_without:url|file|mimes:pdf',
        ]);
        
        $curr_notice = DB::table('notice_board')->insertGetId([
            'type' => $request->type,
            'title' => $request->title,
            'department' => $request->department,
        ]);
        if($request->url)
        {
            DB::table('notice_board')->where('id', $curr_notice)
            ->update([
                'url' => $request->url,
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        }
        else
        {
            $start = 1;
            if($request->file('files')){
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
        }
        return redirect(route('add_notice_board'))->with('success', 'Valid!');
    }

    public function view_notices()
    {
        $all_notices = DB::table('notice_board')->where('type', 1)->get();
        $data['all_notices'] = $all_notices;
        $all_types = DB::table('notice_type_master')->get();
        $data['types'] = $all_types;
        return view('verified_views.view_notices', $data);
    }

    public function view_tenders()
    {
        $all_notices = DB::table('notice_board')->where('type', 2)->get();
        $data['all_notices'] = $all_notices;
        $all_types = DB::table('notice_type_master')->get();
        $data['types'] = $all_types;
        return view('verified_views.view_tenders', $data);
    }

    public function view_board_id()
    {
        return view('verified_views.view_notice_id');
    }
}