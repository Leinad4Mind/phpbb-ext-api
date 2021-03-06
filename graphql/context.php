<?php
/**
 *
 * phpBB API. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2019, Jakub Senko
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace senky\api\graphql;

class context
{
	public $db;
	public $resolver;
	public $forum_buffer;
	public $post_buffer;
	public $topic_buffer;
	public $user_buffer;
	public function __construct(\phpbb\db\driver\driver_interface $db, \senky\api\graphql\resolver $resolver, \senky\api\graphql\buffer\forum_buffer $forum_buffer, \senky\api\graphql\buffer\post_buffer $post_buffer, \senky\api\graphql\buffer\topic_buffer $topic_buffer, \senky\api\graphql\buffer\user_buffer $user_buffer)
	{
		$this->db = $db;
		$this->resolver = $resolver;
		$this->forum_buffer = $forum_buffer;
		$this->post_buffer = $post_buffer;
		$this->topic_buffer = $topic_buffer;
		$this->user_buffer = $user_buffer;
	}
}
