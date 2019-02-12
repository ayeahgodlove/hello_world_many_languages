<!doctype html>
<html lang="en">
<head>
	 <meta charset="utf-8">
	 <title>Hello, World!</title>
	 <link rel="stylesheet" 	
	 ➝ href="">
</head>
<body>
<?php
	// Include the class definition:
	require_once 'HelloWorld.php';
	$greetings = new HelloWorld;

	// Call the sayHello() method:
	$greetings->sayHello();
	$greetings->sayHello("French");
	$greetings->sayHello("German");
	$greetings->sayHello("Dutch");
	$greetings->sayHello("Italian");
	$greetings->sayHello("Spanish");
	
	
	// Delete the object:
	unset($greetings);
?>
</body>
</html>
