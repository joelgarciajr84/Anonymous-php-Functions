<?php

# Simple example of Anonymous Functions on PHP
function LandingGearStatus($status, $callback) {

	if ("down" == strtolower($status)) {

		$status = "ok";
	} else {

		$status = "nok";

	}

	if (is_callable($callback)) {

		call_user_func($callback, $status);
	}
}

LandingGearStatus("DowN", function ($x) {

	echo $x;
});

?>