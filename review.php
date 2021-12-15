<?php 
    session_start();
    require "config.php";
    require "models/db.php";
    require "models/rating.php";
	$rating = new Rating;
    if(isset($_POST['danhgia'])){
        if(isset($_GET['id'])){
            $products_id = $_GET['id'];
            $yourname = $_POST['name'];
            $email = $_POST['email'];
            $your_review = $_POST['review'];

            $rating->getRatings($products_id,$yourname,$email,$your_review);

        }
    }
    header('location:index.php');
?>