<?php

namespace App\Controllers;


use App\Models\goods;

class IndexController extends BaseController
{
    /**
     *
    */
	public function demo($id)
	{
		echo 'demo page'.$id;
	}

	public function test()
	{
		echo 'test page !!';
        d([12,3,4,443]);
        $instance = new goods();
        $data = $instance->getData();
//        var_dump($data);
        dump($data);

	}

	public function index()
	{
		echo "index page";
	}

}