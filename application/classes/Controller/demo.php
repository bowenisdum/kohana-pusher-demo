<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Demo extends Controller_Template
{
	public $template = 'default';

	public function action_app()
	{
		$this->template->body = View::factory('page/app');
	}
}
