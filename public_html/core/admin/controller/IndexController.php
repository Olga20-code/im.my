<?php

/*
 *
 * разобраться почему IDE видит не правильный путь подключения файла
 *
 * */
namespace core\admin\controller;

use core\base\controller\BaseController;

class IndexController extends BaseController
{
	protected function inputData() {
		exit('I am admin panel');
	}
}