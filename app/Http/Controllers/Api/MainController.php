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
use App\Models\TopSection;
use App\Models\MonthKalam;
use App\Models\Trending;
use App\Models\NohaySingle;
use App\Models\ManqabatSingle;
use App\Models\Month;
use App\Models\Setting;

class MainController extends Controller
{
    public function home(Request $request)
    {
        // try{
            $date = \GeniusTS\HijriDate\Hijri::convertToHijri($request->date_time);
            $today_date = $date->format('d F');
            $today_month = $date->format('F');        

            $top_string = Setting::where('settings_type', 'top_string')->first();
            
            if(!empty($top_string))
            {
                $top_string_value = $top_string->settings_value;
            }else{
                $top_string_value = "";
            }
            
            $mood = Setting::where('settings_type', 'mood')->first();
            
            if(!empty($mood))
            {
                $mood_value = $mood->settings_value;
            }else{
                $mood_value = "Neutral";
            }

            $tops = TopSection::pluck('video_id');
            
            $top_section = Video::whereIn('id', $tops)->orderBy('id', 'desc')->get(['id', 'video_title', 'preview_url']);

            if(!empty($top_section))
            {
                foreach($top_section as $top)
                {
                    $top->preview_url = IMAGE_URL.$top->preview_url;
                }
            }
            
            $mon = Month::orderBy('id', 'desc')->first();
            
            if(!empty($mon))
            {
                if($mon->is_active == 'Active')
                {
                    $mons = MonthKalam::pluck('video_id');

                    $month_kalam = Video::whereIn('id', $mons)->orderBy('id', 'desc')->get(['id', 'video_title', 'preview_url']);
            
                    if(!empty($month_kalam))
                    {
                        foreach($month_kalam as $m)
                        {
                            $m->preview_url = IMAGE_URL.$m->preview_url;
                        }
                    }else{
                        $month_kalam = [];
                    }

                    $obj = [
                        'month_name' => $mon->month_name.' Kalam',
                        'month_kalam' => $month_kalam,
                    ];
                }else{
                    $obj = json_decode('{}');
                }
            }else{
                $obj = json_decode('{}');
            }

            $banners = Banner::orderBy('id', 'desc')->get(['id', 'banner_image']);

            if(!empty($banners))
            {
                foreach($banners as $banner)
                {
                    $banner->banner_image = IMAGE_URL.$banner->banner_image;
                }
            }else{
                $banners = [];
            }

            $latest = Video::orderBy('id', 'desc')->limit(25)->get(['id', 'video_title', 'category_id','preview_url']);

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

            if(!empty($latest))
            {
                foreach($latest as $l)
                {
                    $l->preview_url = IMAGE_URL.$l->preview_url;
                }
            }

            //

            $tren = Trending::pluck('video_id');

            $trending = Video::whereIn('id', $tren)->orderBy('id', 'desc')->get(['id', 'video_title', 'category_id','preview_url']);

            if(!empty($trending))
            {
                foreach($trending as $l)
                {
                    $l->preview_url = IMAGE_URL.$l->preview_url;
                    if($l->category_id != "" || !empty($l->category_id))
                    {
                        $cat = Category::where('id', $l->category_id)->first('category_name');
                        $l->category_name = $cat->category_name;
                    }
                }
            }
            
            $nohay_albums = Album::where('album_type', 'Nohay')->orderBy('released_year', 'desc')->limit(25)->get(['id', 'album_name', 'album_image', 'released_year']);
            
            if(!empty($nohay_albums))
            {
                foreach($nohay_albums as $album)
                {
                    $album->album_image = IMAGE_URL.$album->album_image;
                }
            }
            
            $nohay = NohaySingle::pluck('video_id');

            $nohay_singles = Video::whereIn('id', $nohay)->orderBy('id', 'desc')->limit(30)->get(['id', 'video_title', 'preview_url']);
            
            if(!empty($nohay_singles))
            {
                foreach($nohay_singles as $single)
                {
                    $single->preview_url = IMAGE_URL.$single->preview_url;
                }
            }

            $manqabat_albums = Album::where('album_type', 'Manqabat')->orderBy('released_year', 'desc')->limit(25)->get(['id', 'album_name', 'album_image', 'released_year']);
            
            if(!empty($manqabat_albums))
            {
                foreach($manqabat_albums as $album)
                {
                    $album->album_image = IMAGE_URL.$album->album_image;
                }
            }

            $manqabats = ManqabatSingle::pluck('video_id');

            $manqabat_singles = Video::whereIn('id', $manqabats)->orderBy('id', 'desc')->limit(30)->get(['id', 'video_title', 'preview_url']);
        
            if(!empty($manqabat_singles))
            {
                foreach($manqabat_singles as $single)
                {
                    $single->preview_url = IMAGE_URL.$single->preview_url;
                }
            }

            return response()->json([
                'status' => true,
                'message' => 'Mir Hasan Mir Videos Found',
                'data' => [
                    'top_string' => $top_string_value,
                    'mood' => $mood_value,
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
        // }catch(\Exception $e)
        // {
        //     return response()->json([
        //         'status' => false,
        //         'message' => 'There is some trouble to proceed your action',
        //     ], 200);
        // }        
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

            $video->preview_url = IMAGE_URL.$video->preview_url;

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

            if(!empty($video))
            {
                foreach($video as $v)
                {
                    $v->preview_url = IMAGE_URL.$v->preview_url;
                }
            }

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

            if(!empty( $majlis_updates))
            {
                foreach($majlis_updates as $majlis)
                {
                    $majlis->banner_image = IMAGE_URL.$majlis->banner_image;
                }
            }

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

            if(!empty($albums))
            {
                foreach($albums as $album)
                {
                    $album->album_image = IMAGE_URL.$album->album_image;
                }
            }

            return response()->json([
                'status' => true,
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
