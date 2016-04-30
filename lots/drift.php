<!--  This file is part of Parking Monitor.

    Parking Monitor is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    Parking Monitor is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with Parking Monitor.  If not, see <http://www.gnu.org/licenses/>. -->

<?php
  include('../../includes/dbconnect.php');
?>

<!DOCTYPE html>
<html lang="en-us">

  <head>
	<meta charset="UTF-8">
	<title>Parking Monitor | Driftmier Engineering Center (S17)</title>
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
      <h2 class="project-tagline">Map of available parking spots in Driftmier Engineering Center (S17)</h2>
    </section>


    <section class="main-content">

      <a href="../index.html">Home</a> &gt; <a href="../map.html">Map</a> &gt; <a href="drift.php">Driftmier Engineering Center (S17)</a>
      <h3>Fill level of Driftmier Engineering Center (S17)</h3>
      <ul class="spot-list-key">
        <li><div class="spot-empty"></div>Empty</li>
        <li><div  class="spot-full"></div>Full</li>
        <li><div  class=""></div>No data</li>
        <li><div  class="yellow-striped"></div>No parking</li>
        <li><div  class="blue-striped"></div>Handicap</li>
      </ul>

      <div class="spot-list-container">
      <ul class="spot-list">
        <a href="#"><li
      	<?php
        	$last = mysql_query('SELECT * FROM parking_monitor.garage ORDER BY id DESC LIMIT 1');
	        while ($row = mysql_fetch_assoc($last)) {
	          if ($row["distance"] > 200) {
	            echo "class=\"spot-empty\"";
	          } else {
	            echo "class=\"spot-full\"";
	          }
	        }
	?>
		></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li class="yellow-striped"></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li class="yellow-striped"></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li class="yellow-striped"></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li class="handicap"><img src="../images/ic_accessible_black_24px.svg"></li></a>
        <a href="#"><li class="blue-striped"></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li class="yellow-striped"></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
      </ul>
      <br>
      <br>
      <br>
      <ul class="spot-list">
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
      </ul>
      <br>
      <br>
      <br>
      <div id="drift-build" class="building"></div>
      <br>
      <ul class="spot-list">
        <a href="#"><li class="spacer-spot"></li></a>
        <a href="#"><li class="spacer-spot"></li></a>
        <a href="#"><li class="spacer-spot"></li></a>
        <a href="#"><li class="spacer-spot"></li></a>
        <a href="#"><li class="spacer-spot"></li></a>
        <a href="#"><li class="spacer-spot"></li></a>
        <a href="#"><li class="spacer-spot"></li></a>
        <a href="#"><li class="spacer-spot"></li></a>
        <a href="#"><li class="spacer-spot"></li></a>
        <a href="#"><li class="spacer-spot"></li></a>
        <a href="#"><li class="spacer-spot"></li></a>
        <a href="#"><li class="spacer-spot"></li></a>
        <a href="#"><li class="spacer-spot"></li></a>
        <a href="#"><li class="spacer-spot"></li></a>
        <a href="#"><li class="spacer-spot"></li></a>
        <a href="#"><li class="spacer-spot"></li></a>
        <a href="#"><li class="spacer-spot"></li></a>
        <a href="#"><li class="spacer-spot"></li></a>
        <a href="#"><li class="spacer-spot"></li></a>
        <a href="#"><li class="spacer-spot"></li></a>
        <a href="#"><li class="spacer-spot"></li></a>
        <a href="#"><li class="spacer-spot"></li></a>
        <a href="#"><li class="spacer-spot"></li></a>
        <a href="#"><li class="spacer-spot"></li></a>
        <a href="#"><li class="spacer-spot"></li></a>
        <a href="#"><li class="yellow-striped"></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li class="yellow-striped"></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li class="yellow-striped"></li></a>
      </ul>
      <br>
      <br>
      <br>
      <ul class="spot-list">
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
        <a href="#"><li></li></a>
      </ul>
      <br>
      <br>
      </div>
      <hr>
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
        <hr> &copy; Ryan Charnoky, Anton Franzluebbers, Nithin Jino 2016
      </footer>

    </section>


  </body>

  </html>
