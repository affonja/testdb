<?php

$DBURL = '';


$conStr = sprintf(
    "pgsql:host=%s;port=%d;dbname=%s;user=%s;password=%s",
    'dpg-cp2i1nfsc6pc73a6998g-a.oregon-postgres.render.com', //host
    5432, //port
    'basepr3', //base
    'aff', //user
    'Irzhnwjt3BQcB5IG0s5wJXeZQqV6IqWC' //pass
);

$pdo = new \PDO($conStr);
$sql = 'CREATE TABLE IF NOT EXISTS urls (
                id bigint PRIMARY KEY GENERATED ALWAYS AS IDENTITY,
                name varchar(255) UNIQUE NOT NULL
                                );';
$pdo->exec($sql);

$sql = "insert into urls(name) VALUES ('ya.ru')";
$this->pdo->exec($sql);

$sql = "select * from urls";
$rows = $pdo->query($sql)->fetchAll(\PDO::FETCH_ASSOC);

echo 'ok<br>';
print_r($rows);


