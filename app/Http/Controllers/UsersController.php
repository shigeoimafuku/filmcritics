<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Critic;

class UsersController extends Controller
{
    public function index()
    {
        $users=User::orderBy('id','desc')->paginate(10);
        
        return view('users.index',[
            'users'=>$users,
            
        ]);
    }
    
    public function mypage()
    {
        $date=[];
        $me=\Auth::user();
        $critics=$me->critics()->orderBy('updated_at','desc')->paginate(10);
        
        $data=[
            'me'=>$me,
            'critics'=>$critics,
        ];
        
        return view('users.mypage',$data);
    }
    
    
     public function userpage(Request $request)
    {
        if (\Auth::id()==$request->userid){
            return redirect('users/mypage');
        }
        else{
        $data=[];
        $id=$request->userid;
        $user=User::findOrFail($id);
        $critics=$user->critics()->orderBy('created_at', 'desc')->paginate(10);
        
        $data=[
                'user'=>$user,
                'critics'=>$critics,
                'request'=>$request,
        ];
        
       return view('users.userpage',$data);
        }
    }
    
    
    
}
