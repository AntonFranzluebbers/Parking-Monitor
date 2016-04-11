<?php
  include('/var/www/includess/dbconnect.php');
?>

<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="UTF-8">
    <title>Parking Monitor | Garage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,700|Roboto+Slab:300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="../stylesheets/styles.css" media="screen">
    <link rel="icon" href="../images/ic_directions_car_black_48dp_1x.png">
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
      <h1 class="project-name">Parking Monitor <img src="../images/ic_directions_car_white_48px.svg"></h1>
      <h2 class="project-tagline">Map of available parking spots in GARAGE</h2>
    </section>


    <section class="main-content">

      <a href="../index.html">Home</a> &gt; <a href = "../map.html">Map</a> &gt; <a href = "garage.html">Garage</a>
	<h3>Fill level of garage</h3>
      <p>Parking space
      <?php
        $last = mysql_query('SELECT * FROM parking_monitor.garage ORDER BY id DESC LIMIT 1');
        while ($row = mysql_fetch_assoc($last)) {
          if ($row["distance"] > 200) {
            echo "not occupied<br>";
            echo "Distance: " . $row["distance"];
          } else {
            echo "occupied <br>";
            echo "Distance: " . $row["distance"] . "cm";
          }
        }
      ?>
      </p>
	<h3>History</h3>
	<p>
		    <table border="0" cellspacing="0" cellpadding="4">
      <tr>
            <td class="table_titles">ID</td>
            <td class="table_titles">Date and Time</td>
            <td class="table_titles">Sensor Serial</td>
            <td class="table_titles">Distance in cm</td>
          </tr>
<?php
    // Retrieve all records and display them
    $result = mysql_query("SELECT * FROM parking_monitor.garage ORDER BY id DESC");

    // process every record
    while( $row = mysql_fetch_array($result) )
    {
        echo '<tr>';
        echo '   <td'.$css_class.'>'.$row["id"].'</td>';
        echo '   <td'.$css_class.'>'.$row["event"].'</td>';
        echo '   <td'.$css_class.'>'.$row["sensor"].'</td>';
        echo '   <td'.$css_class.'>'.$row["distance"].'</td>';
        echo '</tr>';
    }
    echo '</table>';
    echo '</p>';

?>
	</p>

      <footer class="site-footer">

        &copy; Ryan Charnoky, Anton Franzluebbers, Nithin Jino 2016
      </footer>

    </section>


  </body>
</html>
