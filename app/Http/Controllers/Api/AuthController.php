<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    //Signup
    public function signup(Request $request)
    {
        // try{
            if(!$request->has('name') && $request->name != "")
            {
                return response()->json([
                    'status' => false,
                    'message' => 'Name is Required',
                ], 200);
            }

            if(!$request->has('email') && $request->email != "")
            {
                return response()->json([
                    'status' => false,
                    'message' => 'Email is Required',
                ], 200);
            }

            $already = User::where('email', $request->email)->first('id');

            if(!empty($already))
            {
                return response()->json([
                    'status' => false,
                    'message' => 'Email has already been Taken',
                ], 200);
            }

            if(!$request->has('phone') && $request->phone != "")
            {
                return response()->json([
                    'status' => false,
                    'message' => 'Phone is Required',
                ], 200);
            }

            $already1 = User::where('phone', $request->phone)->first('id');

            if(!empty($already1))
            {
                return response()->json([
                    'status' => false,
                    'message' => 'Phone has already been Taken',
                ], 200);
            }

            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;

            if($request->has('address') && $request->address != "")
            {
                $user->address = $request->address;
            }

            if($request->has('latitude') && $request->latitude != "")
            {
                $user->latitude = $request->latitude;
            }

            if($request->has('longitude') && $request->longitude != "")
            {
                $user->longitude = $request->longitude;
            }

            $user->save();

            return response()->json([
                'status' => true,
                'message' => "Glad You've Joined Us",
                'data' => $user
            ], 200);
        // }catch(\Exception $e)
        // {
        //     return response()->json([
        //         'status' => false,
        //         'message' => 'There is some trouble to proceed your action',
        //     ], 200);
        // }
    }

    //Login
    public function login(Request $request)
    {
        try{
            $user = User::orWhere('email', $request->login)
            ->orWhere('phone', $request->login)
            ->first();            

            if(!empty($user))
            {
                return response()->json([
                    'status' => true,
                    'message' => "Glad You've Joined Us",
                    'data' => $user
                ], 200);
            }else{
                return response()->json([
                    'status' => false,
                    'message' => "Invalid Email or Phone",
                ], 200);
            }
            
        }catch(\Exception $e)
        {
            return response()->json([
                'status' => false,
                'message' => 'There is some trouble to proceed your action',
            ], 200);
        }
    }
}
