<?php


function date_range($t,$start_date, $end_date, $t1, $t2, $step = '+1 day', $output_format = 'Y-m-d') {

    $dates = array();
    $current = strtotime($start_date);
    $last = strtotime($end_date);
	$t3=$t1;
	$t4= $t2;
	$tid=$t;
$con=mysqli_connect("localhost","root","","varnakerala");
    while( $current < $last ) {

        $dates[] = date($output_format, $current);
        $current = strtotime($step, $current);
		$ds= date($output_format, $current)." ".$t3 ;
		$de= date($output_format, $current)." ".$t4;
		
		echo $ds."--";
		echo $de."--";
		echo $tid."<br>";
		
		mysqli_query($con,"INSERT INTO workassign(tutor_id,day_start,day_end) VALUES ('$tid','$ds','$de')");
		
    }

    return $dates;
}

//echo date_range($_POST['toutor'],$_POST['day_start'],$_POST['day_end'],$_POST['ts'],$_POST['te']);


echo date_range($_POST['tutor'],"2018-12-01","2019-01-15","10:00:00","12:30:00");
?>