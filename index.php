<?php

$DBURL = '';


$conStr = sprintf(
    "pgsql:host=%s;port=%d;dbname=%s;user=%s;password=%s",
    'dpg-cp2i1nfsc6pc73a6998g-a', //host
    5432, //port
    'basepr3', //base
    'aff', //user
    'Irzhnwjt3BQcB5IG0s5wJXeZQqV6IqWC' //pass
);

$pdo = new \PDO($conStr);


