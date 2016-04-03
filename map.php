<?php
  include('dbconnect.php');
?>

<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="UTF-8">
    <title>Parking Monitor</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="stylesheets/normalize.css" media="screen">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="stylesheets/stylesheet.css" media="screen">
    <link rel="stylesheet" type="text/css" href="stylesheets/github-light.css" media="screen">
    <link rel="icon" href="THIS_DOESN'T_EXIST.png">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-26495633-4', 'auto');
  ga('send', 'pageview');

</script>
  </head>
  <body>
    <section class="page-header">
      <h1 class="project-name">Parking Monitor</h1>
      <h2 class="project-tagline">Map of available parking spots</h2>
    </section>


    <section class="main-content">

      <a href="index.html">Home</a>
	<h3>Choose a lot</h3>
	<p>
	    This would be an image of campus with clickable overlays on the parking lots. Maybe there could just be a text list.
	</p>
	<p>
		Avalable lots:
		<ul>
		<a href="garage.php"><li>garage</li></a>
		<a href="#"><li>lot 1</li></a>
	</p>

      <footer class="site-footer">

        <span class="site-footer-credits">&copy; Ryan Charnoky, Anton Franzluebbers, Nithin Jino 2016</span>
      </footer>

    </section>


  </body>
</html>
