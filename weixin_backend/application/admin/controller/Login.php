<?php

namespace app\admin\controller;

use think\Controller;
use think\Db;
use think\Request;

class Login extends Controller
{
	public function index(Request $request){
        if ($request->isPost()) {
            $user_name = $request->param('user_name');
            $password = md5($request->param('password'));
            $res = Db::table("xcx_admin")->where(['user_name'=>$user_name, 'password'=>$password])->find();
            if ($res) {
                session('user_name', $res['user_name']);
                return $this->success('登录成功', '/admin');
            } else {
                return $this->error('用户名或密码错误', '/login');
            }
        } else {
        }
        return $this->fetch();

    }

    public function logout(){
        session('user_name', '');
        $this->redirect('/login');
    }

}
