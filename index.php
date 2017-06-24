<?php
$pointer = mysql_connect('localhost','root', '') ;

mysql_select_db('BD1',$pointer) ;
$result = mysql_query('SELECT * FROM messages') ;

while($res = mysql_fetch_array($result)) {
    echo $res['id']. '|' . $res['user_id']. '|' . $res['message'] . '|' . $res['created'] . '<br/ >';
}
echo '<hr/ >' ;

$sql = 'SELECT messages.id AS message_id,user_id,message,created,username,ip
FROM messages,users
WHERE users.id = messages.user_id' ;

$result = mysql_query($sql);
while($res = mysql_fetch_array($result)) {
    echo $res['message_id'] . '|' . $res['user_id'] . '|' . $res['message'] . '|' . $res['created'] . '|' . $res['username'] . '|' . $res['ip'] . '<br/ >';
}


//echo $res['id']. '|' . $res['user_id']. '|' . $res['message'] . '|' . $res['created'] ;
//$res = mysql_fetch_array($result) ;
//$num = mysql_num_rows($result);
// echo $num ;
// for ($i = ''; $i <$num; $i++) {
// $res = mysql_fetch_array($result) ;
//   echo $res['id']. '|' . $res['user_id']. '|' . $res['message'] . '|' . $res['created'];
//   echo '<br />' ;
