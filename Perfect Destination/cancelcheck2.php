<?php
  include "config.php";
  session_start();
    $errors=array();
    if(isset($_POST['submit']))
    {
    if(!empty($_POST['tid'])&&!empty($_POST['bid']))
    {

        $tid = $_POST['tid'];
        $bid =$_POST['bid'];
	    if(!empty($tid)&&!empty($bid))
	    {
		            $query = "SELECT t_id,b_id,b.pid from ticket t,boards b where t.pid=b.pid and t_id = $tid and b_id=$bid";
		        	$query_run = mysqli_query($conn,$query);
		        	$result=mysqli_fetch_assoc($query_run);
				    $query_num_rows = mysqli_num_rows($query_run);
				    $busid=$result['b_id'];
				    $perid=$result['pid'];

          

					if($query_num_rows == 1)
					{
					  $kquery="DELETE from boards where b_id=$busid and pid=$perid";
					  mysqli_query($conn,$kquery);
					  $squery = "DELETE from contains where tid=$tid";
					  mysqli_query($conn,$squery);
					  $iquery="DELETE from ticket where t_id=$tid";
					  mysqli_query($conn,$iquery);
					  $_SESSION['output']="Ticket has been cancelled successfully!";
					  header('location:cancelsuccess.php');
					}
					else
					{
						$_SESSION['output']="Invalid Ticket Number or Bus ID.";
                        header('location:cancelsuccess.php');
                        
					}
       }

}
else
	{
		$_SESSION['output']="Fill the seat no and phone no.";
        header('location:cancelsuccess.php');
	}
	}
?>