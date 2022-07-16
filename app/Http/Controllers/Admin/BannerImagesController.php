<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
class BannerImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::orderBy('id', 'desc')->get();

        return view('admin.banners.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $banner = new Banner;
            
            if($request->has('banner_image'))
            {
                if($request->banner_image->getClientOriginalExtension() == 'PNG' ||$request->banner_image->getClientOriginalExtension() == 'png' || $request->banner_image->getClientOriginalExtension() == 'JPG' || $request->banner_image->getClientOriginalExtension() == 'jpg' || $request->banner_image->getClientOriginalExtension() == 'jpeg' || $request->banner_image->getClientOriginalExtension() == 'JPEG')
                {
                    $newfilename = md5(mt_rand()) .'.'. $request->banner_image->getClientOriginalExtension();
                    $request->file('banner_image')->move(public_path("/banner_images"), $newfilename);
                    $new_path1 = 'banner_images/'.$newfilename;
                    $banner->banner_image = $new_path1;
                }else{
                    return back()->with('error', 'Choose a Valid Image');
                }                       
            }
            
            $banner->save();
            
            return back()->with('message', 'Banner Image Added Successfully');
        }catch(\Exception $e)
        {
            return back()-with('error', 'There is some trouble to proceed your action');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = Banner::find($id);

        if(empty($banner))
        {
            return back()->with('error', 'Banner does not Exists');
        }

        $banner->delete();

        return back()->with('message', 'Banner Deleted Successfully');
    }
}
