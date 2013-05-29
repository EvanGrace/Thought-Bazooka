<?php

/****************************
*
*	Recieves blog post data as POST. This file will take the posted data
*	and save it in a special blog post meta data format to then be used
*	to generate an html file based on a template file. Saving the blog
*	post in a special meta data file allows the post to be edited easily
*	and can be used to apply a new template to the post at any time.
*
****************************/

// get post parameters
///http://www.w3schools.com/php/php_post.asp
//make it a string
//http://www.w3schools.com/php/php_string.asp
//save it as a file
//do "\n" for a new line

// <form action="save-post.php" method="POST">
// $title;
// $url;
// $delimiter = '###TB###';
// $stringToFile = $title .
// $delimiter . $stringToFile . $url .
// $delimiter . $stringToFile . $post-body . 
