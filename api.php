<?php
    include_once('connect.php');
    if(isset($_POST['login1'])){

        $ID = $_POST['BANKID'];
        $PASSWORD = $_POST['PASSWORD'];

        $sql = "SELECT ID FROM signup WHERE ID='$ID' && PASSWORD='$PASSWORD' ";
        $result = mysqli_query($connect,$sql);
        $num=mysqli_num_rows($result);
        echo $num;
        // if($num == 1){
        //         echo "done";
        // }else {
        //     echo "no";
        // }
    }
   


   if(isset($_POST['search_device'])){
                    $searchId =htmlentities($_POST['searchId']);
                    $sql = "SELECT * FROM RETRIEVE WHERE SERIAL_NO = '$searchId'";
                    $result=mysqli_query($connect,$sql);
                    $row=mysqli_fetch_assoc($result);
                    $equipment_make=$row['EQUIPMENT_MAKE'];
                    $username=$row['USERNAME'];
                    $department=$row['DEPARTMENT'];
                    $device=array('equipment_make'=>$equipment_make,'username'=>$username,'department'=>$department);
                    
                    echo json_encode($device);
                }
?>

