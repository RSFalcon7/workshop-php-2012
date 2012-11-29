<?php
	header('content-type: text/plain; charset=utf-8');

	function fibonacci ($n) {
		if ($n == 0 || $n == 1)
			return $n;
		else
			return $n + fibonacci($n - 1);
	}

	echo fibonacci(5), "\n";
	echo FIBONACCI(6), "\n";
	echo FiBoNaCCi(7), "\n";
?>