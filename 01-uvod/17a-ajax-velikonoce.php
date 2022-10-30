<?php
	$aktualniRok = date("Y");
	$velikonoceTimestamp = easter_date($aktualniRok);
	echo date("j.n.Y", $velikonoceTimestamp);
?>