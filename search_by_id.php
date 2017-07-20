	
<?php
include_once('connect.php');

	if(isset($_POST['SEARCH'])){
		$SEARCH =$_POST['search_id'];


		$sql = "SELECT * FROM SCB1 WHERE SERIAL_NO LIKE '%$SEARCH%'";
		$result =mysqli_query($connect,$sql);
		$row = mysqli_num_rows($result);
$html="";
		if($row >0){
			// echo $row;


			while($q = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                  if($q['DATE_DISPATCHED']=='0000-00-00'){
                            $q['DATE_DISPATCHED']='<label class="label label-info label-xs">Pending</label>';}
                        if($q['DATE_REPAIRED']=='0000-00-00') {
                                     $q['DATE_REPAIRED']='<label class="label label-info label-xs">Pending</label>';}
                        if ($q['TECHNICHIAN']=='') {
                                $q['TECHNICHIAN']='<label class="label label-info label-xs">Pending</label>';}
                        if ($q['ISSUE']=='') {
                                $q['ISSUE']='<label class="label label-info label-xs">Pending</label>';
                        }
                        if ($q['RESOLUTION']=='') {
                                $q['RESOLUTION']='<label class="label label-info label-xs">Pending</label>';
                        }
			  $html.='<tr>

                                <td>'.$q['DATE_RECEIVED'].'</td>
                                <td>'.$q['EQUIPMENT_MAKE'].'</td>
                                <td>'.$q['SERIAL_NO'].'</td>
                                <td>'.$q['DEPARTMENT'].'</td>
                                <td>'.$q['USERNAME'].'</td>
                                <td>'.$q['ISSUE'].'</td>
                                <td>'.$q['RESOLUTION'].'</td>
                                <td>'.$q['DATE_REPAIRED'].'</td>
                                <td>'.$q['DATE_DISPATCHED'].'</td>
                                <td>'.$q['TECHNICHIAN'].'</td>
                                <td><a href="delete.php?ID='.$row['ID'].'">delete</a></td>
                                <td><a onclick="edit_form(\''.$row['SERIAL_NO'].'\')">update</a></td>
                            </tr>';
			}
            echo $html;
		// }else {echo "no rows in SCB1";}
        }
	}
	
?>


