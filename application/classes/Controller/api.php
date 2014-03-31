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

		$pusher = Pushko::factory('default');
		$socket_id = $this->request->post('socket_id');
		$channel_name = $this->request->post('channel_name');
		$user_data = Session::instance()->get('user');

		$auth_result = $pusher->presence_auth($channel_name, $socket_id, $user_data['id'], $user_data);

		$this->template->data = $auth_result;
	}

	/**
	 * sending messages
	 */
	public function action_send_msg()
	{
		$this->response->headers('Content-Type','application/json');

		// placeholder for code
		$pusher = Pushko::factory('default');
		$pusher->trigger('presence-chat-room', 'new-msg', $this->request->post());

		$this->template->data = array();
	}
}
