<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Api extends Controller_Template
{
	public $template = 'json';

	/**
	 * simple login
	 */
	public function action_login()
	{
		$this->response->headers('Content-Type','application/json');

		$user_data = array(
			'id' => microtime(),
			'username' => $this->request->post('username'),
		);

		Session::instance()->set('user', $user_data);

		$this->template->data = $user_data;
	}

	/**
	 * pusher authentication
	 */
	public function action_pusher_auth()
	{
		$this->response->headers('Content-Type','application/json');

		// placeholder for code

		$this->template->data = array();
	}

	/**
	 * sending messages
	 */
	public function action_send_msg()
	{
		$this->response->headers('Content-Type','application/json');

		// placeholder for code

		$this->template->data = array();
	}
}
