<?php

function connect()
{
    $pdo = new \PDO(
        'mysql:host=localhost;dbname=udemy;charset=utf8',
        'root',
        'root'
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    return $pdo;
}

function create($table, $fields)
{
    !is_array($fields) ? ($fields = (array) $fields) : $fields;

    $collumns = implode(',', array_keys($fields));
    $itemValues = implode(',:', array_keys($fields));

    $sql = "INSERT INTO {$table}({$collumns}) VALUES (:{$itemValues})";

    $pdo = connect();
    $insert = $pdo->prepare($sql);

    return $insert->execute($fields);
}

function all($table)
{
    $pdo = connect();
    $sql = "SELECT * FROM {$table};";

    $list = $pdo->query($sql);
    $list->execute();

    return $list->fetchAll();
}

function find($table, $field, $value)
{
    $pdo = connect();

    $value = filter_var($value, FILTER_SANITIZE_NUMBER_INT);

    $sql = "SELECT * FROM {$table} WHERE {$field} = :{$field}";

    $find = $pdo->prepare($sql);
    $find->bindValue($field, $value);
    $find->execute();

    return $find->fetch();
}

function update($table, $fields, $where)
{
    $pdo = connect();

    !is_array($fields) ? ($fields = (array) $fields) : $fields;

    $data = array_map(function ($field) {
        return "{$field} = :{$field}";
    }, array_keys($fields));

    $collumns = implode(',', $data);
    $sql = "UPDATE {$table} SET {$collumns} WHERE {$where[0]} = :{$where[0]}";

    $data = array_merge($fields, [$where[0] => $where[1]]);

    $update = $pdo->prepare($sql);
    $update->execute($data);

    return $update->rowCount();
}

function delete($table, $field, $value)
{
    $pdo = connect();

    $sql = "DELETE FROM {$table} WHERE {$field} = :{$field}";

    $delete = $pdo->prepare($sql);
    $delete->bindvalue($field, $value);

    return $delete->execute();
}