<?php

namespace app\admin\controller;

use think\Controller;

class Order extends Base
{
    //
	public function index(){
		return $this->fetch();
	}
	public function detail(){
		return $this->fetch('order_detail');
	}
}
