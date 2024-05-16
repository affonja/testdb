<?php

$DBURL = '';


$conStr = sprintf(
    "pgsql:host=%s;port=%d;dbname=%s;user=%s;password=%s",
    'dpg-cp2i1nfsc6pc73a6998g-a', //host
//    'dpg-cp2i1nfsc6pc73a6998g-a.oregon-postgres.render.com', //host
    5432, //port
    'basepr3', //base
    'aff', //user
    'Irzhnwjt3BQcB5IG0s5wJXeZQqV6IqWC' //pass
);

$pdo = new \PDO($conStr);


$sql = "select * from urls";
$rows = $pdo->query($sql)->fetchAll(\PDO::FETCH_ASSOC);

echo 'ok<br>';
print_r($rows);


