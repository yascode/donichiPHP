<?php

class Controller_Tweet extends Controller_Template
{

	public function action_index()
	{
		$data["subnav"] = array('index'=> 'active' );
		$this->template->title = '社絡';
		$this->template->content = View::forge('tweet/index', $data);
	}

}
