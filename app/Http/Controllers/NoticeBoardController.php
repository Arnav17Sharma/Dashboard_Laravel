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
        if(!Auth::user()){
            // dd(auth()->user()->role_id);
            return redirect(route('login_get'))->with('error', 'Login required to access dashboard!');
        }
        $all_types = DB::table('notice_type_master')->get();
        $data['all_types'] = $all_types;
        return view('verified_views.add_notice_board', $data);
    }

    public function add_notice_board_post(Request $request)
    {
        if(!Auth::user()){
            // dd(auth()->user()->role_id);
            return redirect(route('login_get'))->with('error', 'Login required to access dashboard!');
        }
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
        if(!Auth::user()){
            // dd(auth()->user()->role_id);
            return redirect(route('login_get'))->with('error', 'Login required to access dashboard!');
        }
        $all_notices = DB::table('notice_board')->where('type', 1)->get();
        $data['all_notices'] = $all_notices;
        $all_types = DB::table('notice_type_master')->get();
        $data['types'] = $all_types;
        return view('verified_views.view_notices', $data);
    }

    public function view_tenders()
    {
        if(!Auth::user()){
            // dd(auth()->user()->role_id);
            return redirect(route('login_get'))->with('error', 'Login required to access dashboard!');
        }
        $all_notices = DB::table('notice_board')->where('type', 2)->get();
        $data['all_notices'] = $all_notices;
        $all_types = DB::table('notice_type_master')->get();
        $data['types'] = $all_types;
        return view('verified_views.view_tenders', $data);
    }

    public function view_orders()
    {
        if(!Auth::user()){
            // dd(auth()->user()->role_id);
            return redirect(route('login_get'))->with('error', 'Login required to access dashboard!');
        }
        $all_notices = DB::table('notice_board')->where('type', 3)->get();
        $data['all_notices'] = $all_notices;
        $all_types = DB::table('notice_type_master')->get();
        $data['types'] = $all_types;
        return view('verified_views.view_tenders', $data);
    }

    public function view_circulars()
    {
        if(!Auth::user()){
            // dd(auth()->user()->role_id);
            return redirect(route('login_get'))->with('error', 'Login required to access dashboard!');
        }
        $all_notices = DB::table('notice_board')->where('type', 4)->get();
        $data['all_notices'] = $all_notices;
        $all_types = DB::table('notice_type_master')->get();
        $data['types'] = $all_types;
        return view('verified_views.view_tenders', $data);
    }

    public function view_recruitments()
    {
        if(!Auth::user()){
            // dd(auth()->user()->role_id);
            return redirect(route('login_get'))->with('error', 'Login required to access dashboard!');
        }
        $all_notices = DB::table('notice_board')->where('type', 5)->get();
        $data['all_notices'] = $all_notices;
        $all_types = DB::table('notice_type_master')->get();
        $data['types'] = $all_types;
        return view('verified_views.view_tenders', $data);
    }

    public function view_notifications()
    {
        if(!Auth::user()){
            // dd(auth()->user()->role_id);
            return redirect(route('login_get'))->with('error', 'Login required to access dashboard!');
        }
        $all_notices = DB::table('notice_board')->where('type', 6)->get();
        $data['all_notices'] = $all_notices;
        $all_types = DB::table('notice_type_master')->get();
        $data['types'] = $all_types;
        return view('verified_views.view_tenders', $data);
    }

    public function eit_view_notice_board()
    {
        
        $notifications = DB::table('notice_board')->where('type', 6)->orderBy('id', 'desc')->limit(3)->get();
        $data['notifications'] = $notifications;
        $notices = DB::table('notice_board')->orderBy('id', 'desc')->limit(6)->get();
        $data['notices'] = $notices;
        $total_tenders = DB::table('notice_board')->where('type', 2)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_tenders'] = $total_tenders;
        $total_news = DB::table('notice_board')->where('type', 1)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_news'] = $total_news;
        $total_circulars = DB::table('notice_board')->where('type', 4)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_circulars'] = $total_circulars;
        $all_notices = DB::table('notice_board')->orderBy('id', 'desc')->get();
        $data['all_notices'] = $all_notices;
        $all_types = DB::table('notice_type_master')->get();
        $data['types'] = $all_types;
        return view('e&it_views.view_notice_board', $data);
    }

    public function eit_view_news()
    {
        
        $notifications = DB::table('notice_board')->where('type', 6)->orderBy('id', 'desc')->limit(3)->get();
        $data['notifications'] = $notifications;
        $notices = DB::table('notice_board')->orderBy('id', 'desc')->limit(6)->get();
        $data['notices'] = $notices;
        $total_tenders = DB::table('notice_board')->where('type', 2)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_tenders'] = $total_tenders;
        $total_news = DB::table('notice_board')->where('type', 1)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_news'] = $total_news;
        $total_circulars = DB::table('notice_board')->where('type', 4)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_circulars'] = $total_circulars;
        $all_notices = DB::table('notice_board')->where('type', 1)->get();
        $data['all_notices'] = $all_notices;
        $all_types = DB::table('notice_type_master')->get();
        $data['types'] = $all_types;
        return view('e&it_views.view_news', $data);
    }

    public function eit_view_tenders()
    {
        
        $notifications = DB::table('notice_board')->where('type', 6)->orderBy('id', 'desc')->limit(3)->get();
        $data['notifications'] = $notifications;
        $notices = DB::table('notice_board')->orderBy('id', 'desc')->limit(6)->get();
        $data['notices'] = $notices;
        $total_tenders = DB::table('notice_board')->where('type', 2)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_tenders'] = $total_tenders;
        $total_news = DB::table('notice_board')->where('type', 1)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_news'] = $total_news;
        $total_circulars = DB::table('notice_board')->where('type', 4)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_circulars'] = $total_circulars;
        $all_notices = DB::table('notice_board')->where('type', 2)->get();
        $data['all_notices'] = $all_notices;
        $all_types = DB::table('notice_type_master')->get();
        $data['types'] = $all_types;
        return view('e&it_views.view_tenders', $data);
    }

    public function eit_view_orders()
    {
        
        $notifications = DB::table('notice_board')->where('type', 6)->orderBy('id', 'desc')->limit(3)->get();
        $data['notifications'] = $notifications;
        $notices = DB::table('notice_board')->orderBy('id', 'desc')->limit(6)->get();
        $data['notices'] = $notices;
        $total_tenders = DB::table('notice_board')->where('type', 2)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_tenders'] = $total_tenders;
        $total_news = DB::table('notice_board')->where('type', 1)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_news'] = $total_news;
        $total_circulars = DB::table('notice_board')->where('type', 4)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_circulars'] = $total_circulars;
        $all_notices = DB::table('notice_board')->where('type', 3)->get();
        $data['all_notices'] = $all_notices;
        $all_types = DB::table('notice_type_master')->get();
        $data['types'] = $all_types;
        return view('e&it_views.view_orders', $data);
    }

    public function eit_view_circulars()
    {
        
        $notifications = DB::table('notice_board')->where('type', 6)->orderBy('id', 'desc')->limit(3)->get();
        $data['notifications'] = $notifications;
        $notices = DB::table('notice_board')->orderBy('id', 'desc')->limit(6)->get();
        $data['notices'] = $notices;
        $total_tenders = DB::table('notice_board')->where('type', 2)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_tenders'] = $total_tenders;
        $total_news = DB::table('notice_board')->where('type', 1)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_news'] = $total_news;
        $total_circulars = DB::table('notice_board')->where('type', 4)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_circulars'] = $total_circulars;
        $all_notices = DB::table('notice_board')->where('type', 4)->get();
        $data['all_notices'] = $all_notices;
        $all_types = DB::table('notice_type_master')->get();
        $data['types'] = $all_types;
        return view('e&it_views.view_circulars', $data);
    }

    public function eit_view_recruitments()
    {
        
        $notifications = DB::table('notice_board')->where('type', 6)->orderBy('id', 'desc')->limit(3)->get();
        $data['notifications'] = $notifications;
        $notices = DB::table('notice_board')->orderBy('id', 'desc')->limit(6)->get();
        $data['notices'] = $notices;
        $total_tenders = DB::table('notice_board')->where('type', 2)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_tenders'] = $total_tenders;
        $total_news = DB::table('notice_board')->where('type', 1)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_news'] = $total_news;
        $total_circulars = DB::table('notice_board')->where('type', 4)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_circulars'] = $total_circulars;
        $all_notices = DB::table('notice_board')->where('type', 5)->get();
        $data['all_notices'] = $all_notices;
        $all_types = DB::table('notice_type_master')->get();
        $data['types'] = $all_types;
        return view('e&it_views.view_recruitments', $data);
    }

    public function eit_view_notifications()
    {
        $notifications = DB::table('notice_board')->where('type', 6)->orderBy('id', 'desc')->limit(3)->get();
        $data['notifications'] = $notifications;
        $notices = DB::table('notice_board')->orderBy('id', 'desc')->limit(6)->get();
        $data['notices'] = $notices;
        $total_tenders = DB::table('notice_board')->where('type', 2)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_tenders'] = $total_tenders;
        $total_news = DB::table('notice_board')->where('type', 1)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_news'] = $total_news;
        $total_circulars = DB::table('notice_board')->where('type', 4)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_circulars'] = $total_circulars;
        $all_notices = DB::table('notice_board')->where('type', 6)->get();
        $data['all_notices'] = $all_notices;
        $all_types = DB::table('notice_type_master')->get();
        $data['types'] = $all_types;
        return view('e&it_views.view_notifications', $data);
    }

    public function view_board_id($id)
    {
        if(!Auth::user()){
            // dd(auth()->user()->role_id);
            return redirect(route('login_get'))->with('error', 'Login required to access dashboard!');
        }
        $notices = DB::table('notice_board')->orderBy('id', 'desc')->limit(6)->get();
        $data['notices'] = $notices;
        $total_tenders = DB::table('notice_board')->where('type', 2)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_tenders'] = $total_tenders;
        $total_news = DB::table('notice_board')->where('type', 1)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_news'] = $total_news;
        $total_circulars = DB::table('notice_board')->where('type', 4)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_circulars'] = $total_circulars;
        $notice_data = DB::table('notice_board')->where('id', $id)->first();
        $data['notice_data'] = $notice_data;
        $attachments = DB::table('board_attachments')->where('notice_board_id', $id)->get();
        $data['attachments'] = $attachments;
        $all_types = DB::table('notice_type_master')->get();
        $data['types'] = $all_types;
        return view('verified_views.view_notice_id', $data);
    }

    
    public function eit_view_notice_id($id)
    {
        $notifications = DB::table('notice_board')->where('type', 6)->orderBy('id', 'desc')->limit(3)->get();
        $data['notifications'] = $notifications;
        $notices = DB::table('notice_board')->orderBy('id', 'desc')->limit(6)->get();
        $data['notices'] = $notices;
        $total_tenders = DB::table('notice_board')->where('type', 2)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_tenders'] = $total_tenders;
        $total_news = DB::table('notice_board')->where('type', 1)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_news'] = $total_news;
        $total_circulars = DB::table('notice_board')->where('type', 4)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_circulars'] = $total_circulars;
        
        $notice_data = DB::table('notice_board')->where('id', $id)->first();
        $data['notice'] = $notice_data;
        $attachments = DB::table('board_attachments')->where('notice_board_id', $id)->get();
        $data['attachments'] = $attachments;
        $all_types = DB::table('notice_type_master')->get();
        $data['types'] = $all_types;
        return view('e&it_views.view_notice_id', $data);
    }


    public function view_home()
    {
        $notices = DB::table('notice_board')->orderBy('id', 'desc')->limit(6)->get();
        $data['notices'] = $notices;
        $notifications = DB::table('notice_board')->where('type', 6)->orderBy('id', 'desc')->limit(3)->get();
        $data['notifications'] = $notifications;
        $total_tenders = DB::table('notice_board')->where('type', 2)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_tenders'] = $total_tenders;
        $total_news = DB::table('notice_board')->where('type', 1)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_news'] = $total_news;
        $total_circulars = DB::table('notice_board')->where('type', 4)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_circulars'] = $total_circulars;
        return view('e&it_views.home', $data);
    }

    public function view_right_to_information()
    {
        $notifications = DB::table('notice_board')->where('type', 6)->orderBy('id', 'desc')->limit(3)->get();
        $data['notifications'] = $notifications;
        $notices = DB::table('notice_board')->orderBy('id', 'desc')->limit(6)->get();
        $data['notices'] = $notices;
        $total_tenders = DB::table('notice_board')->where('type', 2)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_tenders'] = $total_tenders;
        $total_news = DB::table('notice_board')->where('type', 1)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_news'] = $total_news;
        $total_circulars = DB::table('notice_board')->where('type', 4)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_circulars'] = $total_circulars;
        return view('e&it_views.right_to_information', $data);
    }

    public function view_program_and_schemes()
    {
        $notifications = DB::table('notice_board')->where('type', 6)->orderBy('id', 'desc')->limit(3)->get();
        $data['notifications'] = $notifications;
        $notices = DB::table('notice_board')->orderBy('id', 'desc')->limit(6)->get();
        $data['notices'] = $notices;
        $total_tenders = DB::table('notice_board')->where('type', 2)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_tenders'] = $total_tenders;
        $total_news = DB::table('notice_board')->where('type', 1)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_news'] = $total_news;
        $total_circulars = DB::table('notice_board')->where('type', 4)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_circulars'] = $total_circulars;
        return view('e&it_views.program_and_schemes', $data);
    }

    public function view_subject_matter_art_scheme()
    {
        $notifications = DB::table('notice_board')->where('type', 6)->orderBy('id', 'desc')->limit(3)->get();
        $data['notifications'] = $notifications;
        $notices = DB::table('notice_board')->orderBy('id', 'desc')->limit(6)->get();
        $data['notices'] = $notices;
        $total_tenders = DB::table('notice_board')->where('type', 2)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_tenders'] = $total_tenders;
        $total_news = DB::table('notice_board')->where('type', 1)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_news'] = $total_news;
        $total_circulars = DB::table('notice_board')->where('type', 4)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_circulars'] = $total_circulars;
        return view('e&it_views.subject_matter_art_scheme', $data);
    }

    public function view_departmental_activities() 
    {
        $notifications = DB::table('notice_board')->where('type', 6)->orderBy('id', 'desc')->limit(3)->get();
        $data['notifications'] = $notifications;
        $notices = DB::table('notice_board')->orderBy('id', 'desc')->limit(6)->get();
        $data['notices'] = $notices;
        $total_tenders = DB::table('notice_board')->where('type', 2)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_tenders'] = $total_tenders;
        $total_news = DB::table('notice_board')->where('type', 1)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_news'] = $total_news;
        $total_circulars = DB::table('notice_board')->where('type', 4)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_circulars'] = $total_circulars;
        return view('e&it_views.departmental_activities', $data);
    }

    public function view_acts_and_rules()
    {
        $notifications = DB::table('notice_board')->where('type', 6)->orderBy('id', 'desc')->limit(3)->get();
        $data['notifications'] = $notifications;
        $notices = DB::table('notice_board')->orderBy('id', 'desc')->limit(6)->get();
        $data['notices'] = $notices;
        $total_tenders = DB::table('notice_board')->where('type', 2)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_tenders'] = $total_tenders;
        $total_news = DB::table('notice_board')->where('type', 1)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_news'] = $total_news;
        $total_circulars = DB::table('notice_board')->where('type', 4)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_circulars'] = $total_circulars;
        return view('e&it_views.acts_and_rules', $data);
    }

    public function view_departmental_structure()
    {
        $notifications = DB::table('notice_board')->where('type', 6)->orderBy('id', 'desc')->limit(3)->get();
        $data['notifications'] = $notifications;
        $notices = DB::table('notice_board')->orderBy('id', 'desc')->limit(6)->get();
        $data['notices'] = $notices;
        $total_tenders = DB::table('notice_board')->where('type', 2)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_tenders'] = $total_tenders;
        $total_news = DB::table('notice_board')->where('type', 1)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_news'] = $total_news;
        $total_circulars = DB::table('notice_board')->where('type', 4)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_circulars'] = $total_circulars;
        return view('e&it_views.departmental_structure', $data);
    }

    public function view_services()
    {
        $notifications = DB::table('notice_board')->where('type', 6)->orderBy('id', 'desc')->limit(3)->get();
        $data['notifications'] = $notifications;
        $notices = DB::table('notice_board')->orderBy('id', 'desc')->limit(6)->get();
        $data['notices'] = $notices;
        $total_tenders = DB::table('notice_board')->where('type', 2)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_tenders'] = $total_tenders;
        $total_news = DB::table('notice_board')->where('type', 1)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_news'] = $total_news;
        $total_circulars = DB::table('notice_board')->where('type', 4)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_circulars'] = $total_circulars;
        return view('e&it_views.services', $data);
    }

    public function view_whos_who()
    {
        $notifications = DB::table('notice_board')->where('type', 6)->orderBy('id', 'desc')->limit(3)->get();
        $data['notifications'] = $notifications;
        $notices = DB::table('notice_board')->orderBy('id', 'desc')->limit(6)->get();
        $data['notices'] = $notices;
        $total_tenders = DB::table('notice_board')->where('type', 2)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_tenders'] = $total_tenders;
        $total_news = DB::table('notice_board')->where('type', 1)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_news'] = $total_news;
        $total_circulars = DB::table('notice_board')->where('type', 4)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_circulars'] = $total_circulars;
        return view('e&it_views.whos_who', $data);
    }

    public function view_achievements()
    {
        $notifications = DB::table('notice_board')->where('type', 6)->orderBy('id', 'desc')->limit(3)->get();
        $data['notifications'] = $notifications;
        $notices = DB::table('notice_board')->orderBy('id', 'desc')->limit(6)->get();
        $data['notices'] = $notices;
        $total_tenders = DB::table('notice_board')->where('type', 2)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_tenders'] = $total_tenders;
        $total_news = DB::table('notice_board')->where('type', 1)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_news'] = $total_news;
        $total_circulars = DB::table('notice_board')->where('type', 4)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_circulars'] = $total_circulars;
        return view('e&it_views.achievements', $data);
    }

    public function view_organisation_chart()
    {
        $notifications = DB::table('notice_board')->where('type', 6)->orderBy('id', 'desc')->limit(3)->get();
        $data['notifications'] = $notifications;
        $notices = DB::table('notice_board')->orderBy('id', 'desc')->limit(6)->get();
        $data['notices'] = $notices;
        $total_tenders = DB::table('notice_board')->where('type', 2)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_tenders'] = $total_tenders;
        $total_news = DB::table('notice_board')->where('type', 1)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_news'] = $total_news;
        $total_circulars = DB::table('notice_board')->where('type', 4)->orderBy('id', 'desc')->limit(6)->get();
        $data['total_circulars'] = $total_circulars;
        return view('e&it_views.organisation_chart', $data);
    }
}