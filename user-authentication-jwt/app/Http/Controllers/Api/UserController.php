<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    /**
     * @OA\Get(
     *     path="users",
     *     @OA\Response(response="200", description="Display a listing of users.")
     * )
     */
    public function index(){
        $users = User::orderBy("id","desc")->paginate(10);
        return response()->json($users);
    }

    public function update(Request $request,$id){
        $user = User::find($id) || null;
        if ($user){
            $update_user = User::find($id)->fill($request->all());
            $update_user->save();
            $user = User::find($id);
            return response()->json($user);
        }else{
            return response()->json(["Error"=> "User not found 404"], 404);
        }
    }

    public function destroy($id){
        $user = User::find($id) || null;
        if ($user){
            $user = User::find($id)->delete();
            return response()->json($user);
        }else{
            return response()->json(["Error"=> "User not found 404"],404); 
        }
    }
    public function my_user(){
        $user = auth()->user() || null;
        if ($user){
            $logged_user = Auth::user();
            return response()->json($logged_user);
        }else{
            return response()->json(["Error"=> "You must be logged for get the user. API ERROR 404"]);
        }
    }

}