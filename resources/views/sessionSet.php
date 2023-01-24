<?php
require_once('connection.php');

if(!isset($_SESSION['admin']))
{
	?>
<script>
    window.location = "adminCtpFsd1915Login";

</script>
<?php
}

?>
