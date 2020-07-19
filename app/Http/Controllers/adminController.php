<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;

class adminController extends Controller
{
    public function login(Request $request) {
        if($request->isMethod('post')){
            $data = $request->input();
            if(Auth::attempt(['email'=> $data['email'],'password'=>$data['password'],'admin'=>'1'])){
                Session::put('adminSession', $data['email']);
                return redirect('/dashboard');
            } else{
                return redirect('/admin-panel')->with('flash_message_error','Invalid Email or Password');
            }
        }

        return view('admin.admin_login');
    }

    public function dashboard() {
        return view('admin.admin_master');
    }

    public function logout() {
        Session::flush();
        return redirect('/admin-panel')->with('flash_message_success','Logout successfully');
    }

    public function settings() {
        return view('admin.settings');
    }

    public function chackpassword(Request $request){
        $data = $request->all();

        $adminCount = Admin::where(['name' => Session::get('adminSession'),'password'=>md5($data['current_pwd'])])->count();
        if ($adminCount == 1) {
            //echo '{"valid":true}';die;
            echo "true"; die;
        } else {
            //echo '{"valid":false}';die;
            echo "false"; die;
        }
    }

    public function updatepassword(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();

            $adminCount =Admin::where(['username'=>Session::get('adminSession'),'password'=>md5($data['current_pwd'])])->count();
            if($adminCount == 1 ){
                $password = md5($data['new_pwd']);
                Admin::where('username',Session::get('adminSession'))->update(['password'=>$password]);
                return redirect('/admin-panel/settings')->with('flash_message_success','Password updated Successfully!');
            }else{
                return redirect('/admin-panel/settings')->with('flash_message_error','Incorrect Current Password!');
            }
        }
    }
}
