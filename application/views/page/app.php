

<div id='login' class="window bounceIn animated">
	<form class="form-signin" role="form" id="login-form">
		<h2 class="form-signin-heading">Login to chat room</h2>
		<input type="text" name="username" class="form-control" placeholder="Username" required autofocus><br>
		<button class="btn btn-lg btn-primary btn-block" id='btn-login'>Sign in</button>
	</form>
</div>



<div id='chatroom' class='window hide'>
	<div class="row">
		<div class="col-md-8">
			<h2>Chat Room</h2>
			<ul id='msg-list'>
			</ul>
			<form class="form-inline">
				<input type="text" class="form-control" placeholder='Type a message...' id='input-msg'> <button class="btn btn-success" id='btn-submit-msg'>Send</button>
			</form>
		</div>
		<div class="col-md-4">
			<h2>Member List</h2>
			<ul id='member-list'>
			</ul>
		</div>
	</div>
</div>



<script>
	/**
	 * global variables
	 */
	var username,
		pusher,
		channel;

	/**
	 * helper functions
	 */
	// add new user to member list
	var add_member = function(id, info) {
		var memberList = $('#member-list');
		var elm = $("<li id='user-"+info.username+"'>"+info.username+"</li>");
		memberList.append(elm);
	};

	// remove user from member list
	var remove_member = function(id, info) {
		$('#user-'+info.username).remove();
	};

	// add message to message list
	var add_msg = function(data) {
		var msgList = $('#msg-list');
		var elm = $("<li><span class='msg-user'>"+data.username+"</span> : "+data.msg+"</li>");

		msgList.append(elm);
		msgList.animate({ scrollTop: msgList.prop("scrollHeight") - msgList.height() }, 'fast');
	};

	/**
	 * on page load
	 */
	$(function () {

		/**
		 * actions
		 */
			// handles login button
		$('#btn-login').click(function (e) {
			$.post('/api/login', $('#login-form').serialize(), function (data) {
				$('#login').addClass('animated bounceOutUp');
				$('#chatroom').removeClass('hide').addClass('animated bounceInUp');

				username = data.username;
				initializePusher();
			});
			e.preventDefault();
		});

		// handles submit message button
		$('#btn-submit-msg').click(function(e) {

			// create new message object
			var msg = {
				username: username,
				msg: $('#input-msg').val()
			};

			/**
			 * server side firing of events
			 */
			// $.post('/api/send_msg', msg);

			/**
			 * client side firing of events
			 * event types client ( client- prefix ), normal events
			 */

			/**
			 * handling connection timeouts
			 */

				// clear out input
			$('#input-msg').val('');
			e.preventDefault();
		});
	});

	/**
	 * pusher initializer
	 */
	var initializePusher = function() {
		/**
		 * open pusher
		 *
		 * initialization of connection, appkey, 403 or 200
		 */

		/**
		 * client->pusher->auth->pusher->client
		 */

		/**
		 * upon successfully joinning the pusher channel
		 */

		/**
		 * when new member joins the channel
		 */

		/**
		 * when existing member leaves the channel
		 */

		/**
		 * when new message notification is receieved from server event
		 */

		/**
		 * when new message notification is receieved from client event
		 */

	}
</script>
