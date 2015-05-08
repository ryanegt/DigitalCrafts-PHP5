<!doctype html>
<html>
	<head>
		<title>Lesson 2</title>
	</head>
	<body>
		
		<?php
		
		// It's time to learn some PHP code (oh, this is a comment btw)
		
		echo "Welcome to PHP. You're looking at the same technology 
			that runs projects large and small. From Yahoo! and Facebook 
			to our bits of magic right here.";
		 
		/*
		 * Here is multi-line code comment. Comments in code allow us to describe
		 * what we are doing to ourselves and other developers. This section gets
		 * ignored by the PHP interpretor so we can type whatever we want.
		 */
		 
		$welcome = "Welcome to our website";
		$vistorNumber = 24;
		 
		?>
		
		<p>Notice something different about this code? This is also a webpage, but
		since it has a .php extension, it will be run by the PHP interpereter before
		being sent to the user. The PHP interpereter will execute any code between
		the &lt;?php and ?&gt; tags.</p>
		
		<p>We defined the visitorNumber variable above, lets use it:</p>
		
		<?php
			echo "<p>You are visitor number: " . $vistorNumber . ".</p>";
		?>
		
		<p>Now lets display a welcome message:</p>
		
		<?php
			echo "<p>" . $welcome . ".</p>";
		?>

		<p>
			Speaking of palindromes, 
			<img src="http://i.imgur.com/dR2UO9U.png?fb" style="width:400px;" />
			<br />
			<span>I learned "a butt tuba" is also a palindrome.</span>
		</p>
	</body>
</html>