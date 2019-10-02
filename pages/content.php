<?php
// Home
if (isset($_GET['home'])){
    include "home.php";
}

// Profile
elseif (isset($_GET['profile'])){
    include "profile.php";
}

// Top Up
elseif (isset($_GET['top_up'])){
    include "top_up.php";
}

// About Us
elseif (isset($_GET['about_us'])){
    include "about_us.php";
}

// Terms Of Service
elseif (isset($_GET['tos'])){
    include "tos.php";
}

// Privacy Policy
elseif (isset($_GET['pp'])){
    include "pp.php";
}

// Contact Us
elseif (isset($_GET['contact'])){
    include "contact.php";
}

// FAQ
elseif (isset($_GET['faq'])){
    include "faq.php";
}

// Wishlist
elseif (isset($_GET['wishlist'])){
    include "wishlist.php";
}

// Cart
elseif (isset($_GET['cart'])){
    include "cart.php";
}

// Stuff
elseif (isset($_GET['stuff'])){
    include "stuff.php";
}

// Discuss
elseif (isset($_GET['discuss'])){
    include "discuss.php";
}

// Track
elseif (isset($_GET['track'])){
    include "track.php";
}

// Not Found
else{
	include "not_found.php";
}
?>