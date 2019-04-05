<?php 
	function getPosts(){
		global $conn;
		$sql = "SELECT * FROM posts";
		$result = mysqli_query($conn, $sql);
		$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
		return $posts;
	}

	function getPostById() {
		if (isset($_GET['slug'])) {
			$slug = $_GET['slug'];		
		} else {
			$slug = null;
		}
		/**
		$slug = isset($_GET['slug']) ? $_GET['sulg'] : null;
		*/
		if ($slug) {
			global $conn;
			$sql = "SELECT posts.*, categories.name as category FROM posts INNER JOIN categories ON posts.categories_id = categories.id WHERE posts.slug = '$slug'";
			$result = mysqli_query($conn, $sql);

			$post = mysqli_fetch_assoc($result);

			
			return $post; 
		} else {
			pageNotFound();
		}
	}

	function pageNotFound(){
		header("Location: ".BASE_URL.'404.php');
		die();
	}
 ?>