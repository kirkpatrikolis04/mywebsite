<?php 

	class Router 

	{

		private static $instance = null;
		private $routes = [];


		public static function instance() {
			if(self::$instance === null){
				self::$instance = new self();
			}

			return self::$instance;
		}

		public static function get($uri, $callback) {
			self::instance()->routes[$uri] = $callback;
		}

		public static function routes($uri) {
			if(isset(self::$instance->routes[$uri])){
				self::$instance->routes[$uri]();
			} else {
				die('error');
			}
		}

	}


	Router::get('dashboard', function(){
		require 'admin/dashboard.php';
	});

	Router::get('maintenance', function(){
		require 'admin/maintenance.php';
	});

	Router::get('students-list', function(){
		require 'admin/students-list.php';
	});

	Router::get('teachers-list', function(){
		require 'admin/teachers-list.php';
	});

	Router::get('book-available', function(){
		require 'admin/book-available.php';
	});

	Router::get('book-borrowed', function(){
		require 'admin/book-borrowed.php';
	});

	Router::get('book-returned', function(){
		require 'admin/book-returned.php';
	});

	// Router::get('admin-maintenance', function(){
	// 	require 'admin/maintenance.php';
	// });


	// echo '<pre>';
	// var_dump(Router::instance()->routes); exit();
	// echo '</pre>';



