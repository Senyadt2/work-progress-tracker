<?php

$conn = mysqli_connect("localhost","root","","workprogresstracker");


$val=$_POST['data'];

$sql_task = "select * from tasks";
$result_task = mysqli_query($conn,$sql_task);

$idnum = 1;
echo "<tr>
<th>#</th>
<th>Task Title</th>
<th>status</th>
<th>start date</th>
<th>end date</th>
<th>task description</th>
<th>e-id</th>
<th>Delete</th>

</tr>";
if($result_task -> num_rows > 0)
{
for($a=0;$a<$val;$a++){
    $rows = $result_task->fetch_assoc();
    if($rows['task_id']==''){

    }else{

    echo "<tr>
    <td>".$idnum ."</td>
    <td>".$rows['task_title']."</td>
    <td>".$rows['status']."</td>
    <td>".$rows['start_date']."</td>
    <td>".$rows['end_date']."</td>
    <td>".$rows['task_description']."</td>
    <td>".$rows['e_id']."</td>
    <td> <a href ='tasskdelete.php?task_id=".$rows["task_id"]."'>Delete</a></td>
    <tr>";
    $idnum++;

}
}
}
else
{
    echo "no data";
}


?>