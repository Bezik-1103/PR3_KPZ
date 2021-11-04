<form action="/" method="POST">
<p>Name of std:<input type="text" name="name"></p>
<p>Surname of std:<input type="text" name="surname"></p>
<p>Age of std:<input type="number" name="age"></p>
<p><input type="submit"></p>
<br><button type="submit" name="logout" id="logout" value="logout">Logout</button>
	
</form>

<?if(!empty($message)){
	echo $message;
}
?>
<style>table,th,td{
	border: 1px solid;
}</style>
<br><b>The list of students:</b>
<br>
<table>
	<?if (!empty($_SESSION['students'])){?>
	<?foreach(unserialize($_SESSION['students']) as $s){?>
	<tr>
		<td><?echo $s['name']?></td>
		<td><?echo $s['surname']?></td>
		<td><?echo $s['age']?></td>
	</tr>
	<?}
	}?>
</table>
