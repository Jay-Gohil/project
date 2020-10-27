<?php
include '..\opencv\include\header.php';
?>

<html>
    <BODY bgcolor ="lime">
        <form id="form1" name="form1" method="post" action="drd.php">
            State List :
            <?php
				$con=mysqli_connect("localhost","root","","vlpr");
				// Check connection
				if (mysqli_connect_errno())
				{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}

				$result = mysqli_query($con,"SELECT * FROM states");

				echo "<Select name='stateName'>
					<option>---Select---</option>";
				

				while($row = mysqli_fetch_array($result))
				{
				echo "<option value=".$row['Id'].">" . $row['Name'] . "</td>";
				}
				
				echo"</Select>";
				mysqli_close($con);
			?>
            <input type="submit" name="Submit" value="Select" />
        </form>
    </body>
</html>
<?php
include '..\opencv\include\footer.php';
?>	