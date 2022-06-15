<?php
function db_get_pdo()
{
    $host = 'localhost';
    $port = '3306';
    $dbname = 'php';
    $charset = 'utf8';
    $username = 'root';
    $db_pw = "pwd";
    $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=$charset";
    $pdo = new PDO($dsn, $username, $db_pw);
    return $pdo;
}

function db_select($query, $param=array()){
    $pdo = db_get_pdo();
    try {
        $st = $pdo->prepare($query);
        $st->execute($param);
        $result =$st->fetchAll(PDO::FETCH_ASSOC);
        $pdo = null;
        return $result;
    } catch (PDOException $ex) {
        return false;
    } finally {
        $pdo = null;
    }
}

// var_dump(db_select("select * from tbl_person"));
// echo "<br />";
// var_dump(db_select("select * from tbl_person where person_id = ?", array(1)));
// echo "<br />";
// var_dump(db_select("select * from tbl_person where person_id = :person_id", array('person_id' => 1)));

function db_insert($query, $param = array())
{
    $pdo = db_get_pdo();
    try {
        $st = $pdo->prepare($query);
        $result = $st->execute($param);
        $last_id = $pdo->lastInsertId();
        $pdo = null;
        if ($result) {
            return $last_id;
        } else {
            return false;
        }
    } catch (PDOException $ex) {
        return false;
    } finally {
        $pdo = null;
    }
}

// var_dump(
//     db_insert(
//         "insert into tbl_person (name, age) values (?,?)",
//         array("php", 25)
//     )
// );

// var_dump(
//     db_insert(
//         "insert into tbl_person (name, age) values (:name,:age)",
//         array("name" =>"php7", "age" => 5)
//     )
// );


function db_update_delete($query, $param = array())
{
    $pdo = db_get_pdo();
    try {
        $st = $pdo->prepare($query);
        $result = $st->execute($param);
        $pdo = null;
        return $result;
    } catch (PDOException $ex) {
        return false;
    } finally {
        $pdo = null;
    }
}

// var_dump(
//     db_update_delete(
//         "update tbl_person set age=:age where person_id = :person_id", 
//         array("age" => 4, "person_id" => 1) 
//     )
// );

// var_dump(
//     db_update_delete(
//         "delete from tbl_person where person_id = ?", 
//         array(3) 
//     )
// );

?>

