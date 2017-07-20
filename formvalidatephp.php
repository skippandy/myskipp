<?php
session_start();
	include_once('connect.php');
    if(isset($_POST['edit_form'])){
        $serialNo=htmlentities($_POST['serialNo']);
        $_SESSION['serialNo']=$serialNo;
        echo 1;
    }

    if(isset($_POST['populate_serialNo'])){
        $serialNo=$_SESSION['serialNo'];
        echo $serialNo;
    }

    if(isset($_POST['insert'])){

        $SERIAL_NO  = $_POST['SERIAL_NO'];
        $DATE_RECEIVED = $_POST['DATE_RECEIVED'];
        $EQUIPMENT_MAKE = $_POST['EQUIPMENT_MAKE'];
        $SERIAL_NO = $_POST['SERIAL_NO'];
        $DEPARTMENT = $_POST['DEPARTMENT'];
        $USERNAME = $_POST['USERNAME'];
      

        $sql = "INSERT INTO scb1 (DATE_RECEIVED,EQUIPMENT_MAKE,SERIAL_NO,DEPARTMENT,USERNAME) 
        VALUE (NOW(),'$EQUIPMENT_MAKE','$SERIAL_NO','$DEPARTMENT','$USERNAME')";


        $result = mysqli_query($connect,$sql);
        if($result){
            
             //header('Location: basic_table.php');
             echo 1;
        }else{

         echo " couldnt entered";
     }
    }

        //include_once('connect.php');
        if(isset($_POST['formval'])){

        $SERIAL_NO  = $_POST['SERIAL_NO'];
        $ISSUE = $_POST['ISSUE'];
        $RESOLUTION = $_POST['RESOLUTION'];
        $DATE_REPAIRED = $_POST['DATE_REPAIRED'];
        $DATE_DISPATCHED = $_POST['DATE_DISPATCHED'];
        $TECHNICHIAN = $_POST['TECHNICHIAN'];

      

        $sql = "UPDATE  scb1 SET ISSUE='$ISSUE',RESOLUTION='$RESOLUTION',DATE_REPAIRED='$DATE_REPAIRED',
        DATE_DISPATCHED='$DATE_DISPATCHED',TECHNICHIAN='$TECHNICHIAN' WHERE SERIAL_NO='$SERIAL_NO'";
    
        $result = mysqli_query($connect,$sql);
        if($result){
            
             //header('Location: basic_table.php');
             echo $DATE_REPAIRED;
        }else{

         echo " couldnt entered";
     }
    }
?>