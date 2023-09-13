<?php
echo "헬로월드";

$db_host = "host=emma.cpf6y5ls20wt.ap-northeast-2.rds.amazonaws.com";
$db_port = "port=5432";
$db_user = "user=postgres";
$db_password = "password=12345678";
$db_name = "dbname=emma";

// pg_connect() 함수는 연결 문자열을 하나의 문자열로 전달해야 합니다.
$connection_string = "$db_host $db_port $db_user $db_password $db_name";

$conn = pg_connect($connection_string);

$query = "SELECT * FROM test";
$result = pg_query($conn, $query);

$db_result = "";

while ($row = pg_fetch_assoc($result)) {
  $db_result = $row['test'];
}

echo $db_result;
