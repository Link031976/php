<?php
    //line 3
	class Employee
	{		
		public $name;
		public $surname;	
		public $post;
		
		public function __construct ($name,$surname, Post $post)
		{
			$this->name = $name;
			$this->surname = $surname;
			$this->post = $post;
		}
		//line 4
		public function set($name,$val)
		{
			$this->$name = $val;
		}
		
		public function get($name)
		{
			return $this->$name;
		}
		public function getPost()
		{
			return $this->post;
		}
		public function changePost(Post $post)
		{
			$this->post = $post;
		}
	}
	