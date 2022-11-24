<?php
    //line 3
	class Employee
	{		
		public $name; // Ім'я працівника / I'm a practitioner
		public $surname;	// Прізвище /surname
		public $post; // професія 
		
		public function __construct ($name,$surname, Post $post)
		{
			$this->name = $name;
			$this->surname = $surname;
			$this->post = $post;
		}
		//line 4
		public function set($name,$val) // Встановити значення val для властивості name
		{
			$this->$name = $val;
		}
		
		public function get($name) // повернення значення властивості name
		{
			return $this->$name;
		}
		public function getPost() //повернення значення професії
		{
			return $this->post;
		}
		public function changePost(Post $post)//зміна професії post
		{
			$this->post = $post;
		}
	}
	