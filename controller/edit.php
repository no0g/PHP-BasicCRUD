<?php 

include "../config/config.php";
if(isset($_POST['editbutton'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $tpnumber = $_POST['tpnumber'];

    // check duplicate
    $check = $mysqli->prepare("SELECT * FROM students where name = ? or tpnumber = ?");
    $check->bind_param("ss",$name,$tpnumber);
    $check->execute();
    $check->store_result();
    if($check->num_rows > 1){
            header("location: ../student/edit/?id=$id&message=duplicate");
    }else {
        $update = $mysqli->prepare("UPDATE students SET name = ?, tpnumber = ? where id = ?");
        $update->bind_param("sss",$name,$tpnumber,$id);
        $result = $update->execute();
        if($result){
            header("location: ../student/edit/?id=$id&message=success");
        }else {
            header("location: ../student/edit/?id=$id&message=sqlfail");
        }
    }
} else {
    header("location: ../student/edit/?message=specifydata");
}


?>