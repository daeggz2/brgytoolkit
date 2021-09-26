<?php
	include_once("connections/conn.php");
   
    if(isset($_POST['id'])) {
        $value = $_POST['value'];
        $column = $_POST['column'];
        $id = $_POST['id'];

        $query = "UPDATE facilities SET $column = :value WHERE md5(id) = :id LIMIT 1";
        $result = $conn->prepare($query);
        $result->bindParam('value', $value);
        $result->bindParam('id', $id);

        if($result->execute()){
            echo "Yup";
        }
        else {
            echo "fail";
        }

    }