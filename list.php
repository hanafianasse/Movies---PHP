<table class="table table-hover">
	<thead>
		<tr>
			<td>id</td>
			<td>name</td>
			<td>rating</td>
			<td>comming in</td>
		</tr>
	</thead>
	<tbody>
	<?php
		try{
			$stmt = $db->query('select * from movie');
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				echo '<tr>';
					echo '<td>'.$row['id'].'</td>';
					echo '<td>'.$row['name'].'</td>';
					echo '<td>'.$row['rating'].'</td>';
					echo '<td>'.$row['date'].'</td>';
					echo '<td><a href="update.php?id='.$row["id"].'"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>';
					echo '<td><a href="delete.php?id='.$row["id"].'"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>';
				echo '</tr>';
			}
		}
		catch(PDOException $ex) {
			echo "An Error occured!";
			echo $ex->getMessage();
		}
	?>
	</tbody>
</table>

<?php
	if(isset($_GET["updated"])){
		echo '<script type="text/javascript">Messenger().post("Your request has succeded !");</script>';
	}
?>