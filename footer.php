<footer>
Copyright  <?php  echo  date("Y");  ?>  &copy;  Brandon  Williams
<p  class="pull-right"><a  href="#">Back  to  top</a></p>
</footer>
<style>
.tracker {
    display: none; /* for 4.6 and up */
    width: 0px;    /* for 4.3 */
    height: 0px;
	}
<style>

<?php
$ip = $_SERVER["REMOTE_ADDR"];
$file = basename($_SERVER['PHP_SELF']);
$message = "Client: " . $ip . " Accessed: " . $file;
curl_setopt_array($ch = curl_init(), array(
  CURLOPT_URL => "https://api.pushover.net/1/messages.json",
  CURLOPT_POSTFIELDS => array(
    "token" => "asvZzNvQ3dg8xSVJZKXnpgfqv4R31e",
    "user" => "ucWobmXd1TuDJ5B2jPKgBdGkgDyYXA",
    "message" => $message,
	"sound" => "gamelan",
  )));
  ?>
  <div class="tracker">
  <?php
curl_exec($ch);
curl_close($ch);
?>
</div>
