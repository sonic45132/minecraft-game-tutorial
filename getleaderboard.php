<?php
include_once('./db.php');
$database="apex_leaderboard";
mysqli_select_db ($conn, 'apex_leaderboard') or die( "Unable to select database");
$query="SELECT * FROM leaderboard ORDER BY lvl DESC LIMIT 10";
$result=$conn->query($query);
$num=$result->num_rows;
mysqli_close($conn);
$i=0;
while ($i < $num) {
        $result->data_seek($i);
    	$row = $result->fetch_assoc();
    	$name = $row['Name'];
    	$lvl = $row['lvl'];
        echo "<li><span>$name</span> <span>$lvl</span></li>";
        $i++;
}
?>