<?php 
	include('config.php');
?>
<?php 
	$sql = "SELECT * FROM `users`"; 
	$result = mysqli_query($conn , $sql); 
	if($result->num_rows > 0){
?>
<html>
<head>
</head>
<body>	
	<table border = "1">
		<thead>
			<tr>
				<th>ID</th>
				<th>Username</th>
				<th>Email</th>	
				<th>Gender</th>
				<th>City</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				while($row = $result->fetch_array()){?>
			<tr>
				<td><?php echo $row[0]?></td>
				<td><?php echo $row[1]?></td>
				<td><?php echo $row[2]?></td>
				<td><?php echo $row[3]?></td>
				<td><?php echo $row[4]?></td>

				<td><a href="edit.php?id=<?php echo $row['id'] ?>">
				<input type="button" name="Edit" value = "Edit"></a></td>

				<td><a href="delete.php?id=<?php echo $row['id'] ?>">
				<input type="button" onclick="return delinfo()" name="Delete" value = "Delete"></a></td>
			</tr>
			<?php } ?>	
		</tbody>
	</table>
	<?php } 
?>
<script type="text/javascript">	
function delinfo()
{
  if(confirm("Sure to delete this Entry?")){
       return true;
  }
  else{
    return false;
  }
}
</script>
</body>
</html>
