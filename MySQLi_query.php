<?php
    if($result = $mysqli->query("SHOW columns from $DB_TABLE")){
        $table_title = array();
        if($result->num_rows){
            $table = $result->fetch_all(MYSQLI_NUM); //Táblázatos formában kérdezzük le
            //https://www.php.net/manual/en/mysqli-result.fetch-array.php
            foreach($table as $title){
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
    }else{
        echo "The mysqli query is faild";
        die();
    }

    //The query run a line-by-line
    if($result = $mysqli->query("SELECT * FROM $DB_TABLE")){
        echo "<pre>";
        if($result->num_rows){
            while($data = $result->fetch_array(MYSQLI_NUM)){ //https://www.php.net/manual/en/mysqli-result.fetch-array.php
                //print_r($data);
                echo "<TR>";
                foreach($data as $value){
                    echo "<td>".$value."</td>";
                }
                echo "</TR>";
            }
        }
    }else{
        echo "Fail to Query command";
        die();
    }
    echo "</Table>";
    $result->free();
    mysqli_close($mysqli);
    //or
    //$mysqli->close();
?>