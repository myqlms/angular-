<?php
	$getInput=$_GET['abs'];
	if($getInput=='郑永椒'){
		$getInput='哎呦，不错哦';
	}elseif($getInput=='张博文'){
		$getInput='小胖子';
	}else{
		$getInput='没想到你是这样的超哥';
	};
	echo $getInput;
	?>