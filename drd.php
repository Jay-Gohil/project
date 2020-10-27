<?php
include '..\opencv\include\header.php';
?>
<?php
if($_POST['Submit'] == 'Select')
{
   $id=$_POST['stateName'];
   $cnt=$id;
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "vlpr";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysql_error());
} 

$sql = "SELECT SUBSTRING(Plate_Num, 1, 2) FROM plate_master;";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
			switch($id) 
			{
				case 1:
					if($row == "AN")
						echo $row;
						$cnt=$cnt+1;
					break;
				case 2:
					if($row == 'AP')
						echo $row;
						$cnt=$cnt+1;
					break;
				case 3:
					if($row == 'AR')
						echo $row;
						$cnt=$cnt+1;
					break;
				case 4:
					if($row == 'AS')
						echo $row;
						$cnt=$cnt+1;
					break;
				case 5:
					if($row == 'BR')
						echo $row;
						$cnt=$cnt+1;
					break;
				case 6:
					if($row=='CH')
						echo $row;
						$cnt=$cnt+1;
					break;
				case 7:
					if($row=='CG')
						echo $row;
						$cnt=$cnt+1;
					break;
				case 8:
					if($row=='DN')
						echo $row;
						$cnt=$cnt+1;
					break;
				case 9:
					if($row=='DD')
						echo $row;
						$cnt=$cnt+1;
					break;
				case 10:
					if($row=='DL')
						echo $row;
						$cnt=$cnt+1;
					break;
				case 11:
					if($row=='GA')
						echo $row;
						$cnt=$cnt+1;
					break;
				case 12:
					if($row=='GJ')
						echo $row;
						$cnt=$cnt+1;
					break;
				case 13:
					if($row=='HR')
						echo $row;
						$cnt=$cnt+1;
					break;
				case 14:
					if($row=='HP')
						echo $row;
						$cnt=$cnt+1;
					break;
				case 15:
					if($row=='JK')
						echo $row;
						$cnt=$cnt+1;
					break;
				case 16:
					if($row=='JH')
						echo $row;
						$cnt=$cnt+1;
					break;
				case 17:
					if($row=='KA')
						echo $row;
						$cnt=$cnt+1;
					break;
				case 18:
					if($row=='KL')
						echo $row;
						$cnt=$cnt+1;
					break;
				case 19:
					if($row=='LD')
						echo $row;
						$cnt=$cnt+1;
					break;
				case 20:
					if($row=='MP')
						echo $row;
						$cnt=$cnt+1;
					break;
				case 21:
					if($row=='MH')
						echo $row;
						$cnt=$cnt+1;
					break;
				case 22:
					if($row=='MN')
						echo $row;
						$cnt=$cnt+1;
					break;
				case 23:
					if($row=='ML')
						echo $row;
						$cnt=$cnt+1;
					break;
				case 24:
					if($row=='MZ')
						echo $row;
						$cnt=$cnt+1;
					break;
				case 25:
					if($row=='NL')
						echo $row;
						$cnt=$cnt+1;
					break;
				case 26:
					if($row=='OR' or $row=='OD')
						echo $row;
						$cnt=$cnt+1;
					break;
				case 27:
					if($row=='PY')
						echo $row;
						$cnt=$cnt+1;
					break;
				case 28:
					if($row=='PB')
						echo $row;
						$cnt=$cnt+1;
					break;
				case 29:
					if($row=='RJ')
						echo $row;
						$cnt=$cnt+1;
					break;
				case 30:
					if($row=='SK')
						echo $row;
						$cnt=$cnt+1;
					break;
				case 31:
					if($row=='TN')
						echo $row;
						$cnt=$cnt+1;
					break;
				case 32:
					if($row=='TS')
						echo $row;
						$cnt=$cnt+1;
					break;
				case 33:
					if($row=='TR')
						echo $row;
						$cnt=$cnt+1;
					break;
				case 34:
					if($row=='UP')
						echo $row;
						$cnt=$cnt+1;
					break;
				case 35:
					if($row=='UK')
						echo $row;
						$cnt=$cnt+1;
					break;
				case 36:
					if($row=='WB')
						echo $row;
						$cnt=$cnt+1;
					break;
			}
			$disp=$cnt-$id;
			if($disp > 0)
				echo "<br> The total number of Plates scanned of the State are ".($disp)."<br>";
			else
				echo "<br> There no records of the state <br>";
		}	
    } 
mysqli_close($conn);
}
?>
<?php
include '..\opencv\include\footer.php';
?>	
