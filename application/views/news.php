<?php
echo "<h1>Najnowsze wątki</h1>";
foreach($new->result() as $w)
{
	echo strtoupper($w->name."... ");
	echo "by ".$w->authorname." ";

	$datetime1 = strtotime($w->actudate);
	$datetime2 = strtotime($curtime);
	$secs = $datetime2 - $datetime1;
	$minutes=round($secs/60);
	$hours=round($secs/3600);
	$days =round($secs / 86400);
	if($days==1)
	{
		echo "1 day ago";
	}
	else if($days>1){
		echo $days." days ago";
	}
	else if($hours>=1)
	{
		if($hours==1)
		{
			echo "1 hour ago";
		}
		else{
			echo $hours." hours ago";
		}
	}
	else if($minutes>=1)
	{
		if($minutes==1)
		{
			echo "1 minute ago";
		}
		else{
			echo $minutes." minutes ago";
		}
	}
	else
	{
		echo "Własnie teraz";
	}
	echo "</br>";
}