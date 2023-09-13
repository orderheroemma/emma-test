<?php
echo "헬로월드";
$db_host = "host=emma.cpf6y5ls20wt.ap-northeast-2.rds.amazonaws.com";
$db_port ="port=5432";
$dd_user = "user=postgres";
$db_password = "password=12345678";
$db_name = "emma";

$conn = pg_connect("$db_host $db_port $dd_user $db_password $db_name");

$query = "SELECT * FROM test";
$result = pg_query($conn, $query);
$db_result = "";

while ($row = pg_fetch_assoc($result)) {
  $db_result = $row['test'];
}

echo "".$db_result;