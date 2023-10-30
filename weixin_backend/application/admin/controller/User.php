<?php

namespace app\admin\controller;

use think\Controller;
use think\Db;

class User extends Base{
    //
	public function index(){
        $users = Db::name('user')->paginate(10);
        $this->assign('users', $users);
		return $this->fetch();
	}
}
