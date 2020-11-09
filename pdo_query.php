<?php
    //Read the DB Columns name
    $result = $connection->query("SHOW columns from $DB_TABLE");
    $table_title = array();
    if($result->rowCount()){
        While($title = $result->fetch()){
            array_push($table_title,$title[0]);
        }
        echo "<TABLE>
            <tr>";
                foreach($table_title as $value){
                    echo "<th>".$value."</th>";
                }
        echo "  </tr>";
    }else{
        echo "The table query is faild";
        die();
    }
    //Read the data in DB
    $result = $connection->query("SELECT * FROM $DB_TABLE");
    if($result->rowCount()){
        While($data = $result->fetch(PDO::FETCH_ASSOC)){//Soronkénti feldolgozás
            //https://www.php.net/manual/en/pdostatement.fetch.php
            echo "<TR>";
                foreach($data as $value){
                    echo "<td>".$value."</td>";
                }
            echo "</TR>";
        }
    }else{
        echo "The table query is faild";
        die();
    }
    echo "</Table>";
    $connection = NULL;
?>