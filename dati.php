<?php

    function getDataFromDatabase($database,$port,$server,$user,$password,$query){

      $db = pg_connect("dbname=".$database." port=".$port." host=".$server." user=".$user." password=".$password."") 
        or die('Could not connect:'.pg_last_error());

      $res = pg_query($query);

      pg_close($db);

      return $res;
    }

    //Converte le coordinate dal formato NMEA a decimali
    function gpsConversion($coord, $hemisphere) {
      $d = floor($coord/100);
      $m = $coord-$d*100;
      if($hemisphere == 'N' || $hemisphere == 'E'){
        return $d+$m/60;
      }else{
        return -($d+$m/60);
      }
    }

    function calculateTws($sog, $aws, $awa){
      if($sog != null && $aws != null && $awa != null){
        $x = $sog;
        $y = 0;
        $u = $aws*cos(($awa)*M_PI/180)-$x;
        $v = $aws*sin(($awa)*M_PI/180)-$y;
        return round(sqrt($u*$u+$v*$v),2);
      }else{
        return null;
      }
    }

    function calculateTwa($sog, $aws, $awa){
      if($sog != null && $aws != null && $awa != null){
        $x = $sog;
        $y = 0;
        $u = $aws*cos(($awa)*M_PI/180)-$x;
        $v = $aws*sin(($awa)*M_PI/180)-$y;
        $alpha=atan2($v,$u);
		return round($alpha*180/M_PI,2);
      }else{
        return null;
      }
    }

    include 'menu.php';

    $lat = array();
    $lng = array();
    $latDMS = array();
    $lngDMS = array();
    $time = array();
    $cog = array();
    $sog = array();
    $awa = array();
    $aws = array();
    $twa = array();
    $tws = array();
    $magnetic_heading = array();
    $surf_speed = array();

    $query ="SELECT DISTINCT latitude,latitude_ns,longitude,longitude_ew,speed_over_ground,course_made_good,
            a.reading_time,b.magnetic_compass_heading, b.surface_speed_knots, d.angle AS aw_angle, 
            d.speed_knots AS aw_speed_knots FROM rmc AS a LEFT OUTER JOIN vhw AS b ON a.reading_time=b.reading_time 
            LEFT OUTER JOIN vwt AS c ON c.reading_time=a.reading_time LEFT OUTER JOIN vwr AS d ON d.reading_time=a.reading_time 
            WHERE LEFT(CAST(a.reading_time AS text),10)='".$date_selected."' ORDER BY a.reading_time";
    
    $res = getDataFromDatabase(DATABASE,PORT,SERVER,USER,PASSWORD,$query);

    for($i=0;$i < pg_num_rows($res);$i++){
      $row = pg_fetch_array($res,$i,PGSQL_ASSOC);
      array_push($lat,gpsConversion($row['latitude'],$row['latitude_ns']));
      array_push($lng,gpsConversion($row['longitude'],$row['longitude_ew']));
      $dtArray = explode(' ',$row['reading_time']);
      array_push($time, $dtArray[1]);
      array_push($sog, $row['speed_over_ground']);
      array_push($cog, $row['course_made_good']);
      array_push($magnetic_heading, $row['magnetic_compass_heading']);
      array_push($surf_speed, $row['surface_speed_knots']);
      array_push($awa, $row['aw_angle']);
      array_push($twa, calculateTwa($row['speed_over_ground'],$row['aw_speed_knots'],$row['aw_angle']));
      array_push($aws, $row['aw_speed_knots']);
      array_push($tws, calculateTws($row['speed_over_ground'],$row['aw_speed_knots'],$row['aw_angle']));
    }

  ?>