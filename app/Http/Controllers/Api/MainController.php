<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Album;
use App\Models\Video;
use GeniusTS\HijriDate\Date;
use GeniusTS\HijriDate\Translations\Arabic;
use App\Models\Banner;
use App\Models\MajlisUpdate;

class MainController extends Controller
{
    public function home(Request $request)
    {
        try{
            $date = \GeniusTS\HijriDate\Hijri::convertToHijri($request->date_time);
            $today_date = $date->format('d F');
            $today_month = $date->format('F');        

            $top_section = Video::orderBy('id', 'desc')->limit(6)->get(['id', 'video_title', 'preview_url']);

            $month_kalam = Video::where('islamic_month', $today_month)->limit(6)->orderBy('id', 'desc')->get(['id', 'video_title', 'preview_url']);
            
            $obj = [
                'month_name' => $today_month.' Kalam',
                'month_kalam' => $month_kalam,
            ];

            $banners = Banner::orderBy('id', 'desc')->get(['id', 'banner_image']);

            $latest = Video::orderBy('id', 'desc')->limit(6)->get(['id', 'video_title', 'category_id','preview_url']);

            if(!empty($latest))
            {
                foreach($latest as $l)
                {
                    if($l->category_id != "" || !empty($l->category_id))
                    {
                        $cat = Category::where('id', $l->category_id)->first('category_name');
                        $l->category_name = $cat->category_name;
                    }
                }
            }

            //

            $trending = Video::where('islamic_month', $today_month)->limit(6)->orderBy('id', 'asc')->get(['id', 'video_title', 'category_id','preview_url']);

            if(!empty($trending))
            {
                foreach($trending as $l)
                {
                    if($l->category_id != "" || !empty($l->category_id))
                    {
                        $cat = Category::where('id', $l->category_id)->first('category_name');
                        $l->category_name = $cat->category_name;
                    }
                }
            }

            $nohay_albums = Album::where('album_type', 'Nohay')->orderBy('id', 'desc')->limit(6)->get(['id', 'album_name', 'album_image', 'released_year']);
            
            $nohay_singles = Video::where('category_id', '3')->orderBy('id', 'desc')->limit(6)->get(['id', 'video_title', 'preview_url']);

            $manqabat_albums = Album::where('album_type', 'Manqabat')->orderBy('id', 'desc')->limit(6)->get(['id', 'album_name', 'album_image', 'released_year']);
            
            $manqabat_singles = Video::where('category_id', '2')->orderBy('id', 'desc')->limit(6)->get(['id', 'video_title', 'preview_url']);
        
            return response()->json([
                'status' => true,
                'message' => 'Mir Hasan Mir Videos Found',
                'data' => [
                    'today_date' => $today_date,
                    'top_section' => $top_section,
                    'month_kalam' => $obj,
                    'banners' => $banners,
                    'latest' => $latest,
                    'trending' => $trending,
                    'nohay_albums' => $nohay_albums,
                    'nohay_singles' => $nohay_singles,
                    'manqabat_albums' => $manqabat_albums,
                    'manqabat_singles' => $manqabat_singles,
                ], 
            ], 200);
        }catch(\Exception $e)
        {
            return response()->json([
                'status' => false,
                'message' => 'There is some trouble to proceed your action',
            ], 200);
        }        
    }

    public function video_details($video_id)
    {
        try{
            $video = Video::where('id', $video_id)->first();

            if(empty($video))
            {
                return response()->json([
                    'status' => false,
                    'message' => 'Video does not Exists',
                ], 200);
            }

            return response()->json([
                'status' => true,
                'message' => 'Video Details Found',
                'data' => $video
            ], 200);
        }catch(\Exception $e)
        {
            return response()->json([
                'status' => false,
                'message' => 'There is some trouble to proceed your action',
            ], 200);
        }
    }  
    
    public function album_details($album_id)
    {
        try{
            $video = Video::where('album_id', $album_id)->get(['id', 'album_id', 'video_title', 'preview_url']);

            if(empty($video))
            {
                return response()->json([
                    'status' => false,
                    'message' => 'Album does not Exists',
                ], 200);
            }

            return response()->json([
                'status' => true,
                'message' => 'Album Details Found',
                'data' => $video
            ], 200);
        }catch(\Exception $e)
        {
            return response()->json([
                'status' => false,
                'message' => 'There is some trouble to proceed your action',
            ], 200);
        }
    }  

    public function majlis_updates()
    {
        try{
            $majlis_updates = MajlisUpdate::orderBy('id', 'desc')->get();

            return response()->json([
                'status' => true,
                'message' => $majlis_updates->count() > 0 ? 'Majlis Updates Found' : 'No Majlis Found',
                'data' => $majlis_updates->count() > 0 ? $majlis_updates : [],
            ], 200);
        }catch(\Exception $e)
        {
            return response()->json([
                'status' => false,
                'message' => 'There is some trouble to proceed your action',
            ], 200);
        }
    }

    public function lyrics_categories()
    {
        try{
            $cats = Category::all(['id', 'category_name']);

            return response()->json([
                'status' => true,
                'message' => $cats->count() > 0 ? 'Lyrics Categories Found' : 'No Lyrics Categories Found',
                'data' => $cats->count() > 0 ? $cats : [],
            ], 200);
        }catch(\Exception $e)
        {
            return response()->json([
                'status' => false,
                'message' => 'There is some trouble to proceed your action',
            ]);
        }
    }

    public function lyrics_albums($category_id)
    {
        try{
            $cat = Category::where('id', $category_id)->first(['id', 'category_name']);

            if(empty($cat))
            {
                return response()->json([
                    'status' => false,
                    'message' => 'Category does not Exists',
                ], 200);    
            }

            $albums = Album::where('album_type', $cat->category_name)->orderBy('id', 'desc')->get(['id', 'album_name', 'album_image', 'released_year', 'album_type']);

            return response()->json([
                'status' => false,
                'message' => $albums->count() > 0 ? 'Albums Found' : 'No Album Found',
                'data' => $albums->count() > 0 ? $albums : [],
            ], 200);
        }catch(\Exception $e)
        {
            return response()->json([
                'status' => false,
                'message' => 'There is some trouble to proceed your action',
            ], 200);
        }
    }
}
