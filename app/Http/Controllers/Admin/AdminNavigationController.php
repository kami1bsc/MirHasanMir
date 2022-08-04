<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Album;
use App\Models\Video;
use App\Models\MajlisUpdate;
use App\Models\Setting;

class AdminNavigationController extends Controller
{
    public function dashboard()
    {
        $total_users = User::where('type', '1')->count();
        $total_categories = Category::count();
        $total_albums = Album::count();
        $total_videos = Video::count();
        $total_majlis = MajlisUpdate::count();
        $total_lyrics = Video::where('lyrics', '!=', null)->count();
        
        $settings = Setting::all();

        $users = User::where('type', '1')->orderBy('id', 'desc')->get();

        return view('admin.dashboard', compact(['total_users', 'settings','total_categories', 'total_albums', 'total_videos', 'total_majlis', 'total_lyrics', 'users']));
    }
    
    public function edit_settings(Request $request)
    {
        $setting = Setting::find($request->settings_id);
        
        $setting->settings_value = $request->settings_value;
        $setting->save();
        
        return back()->with('message', 'Settings Updated');
    }
}
