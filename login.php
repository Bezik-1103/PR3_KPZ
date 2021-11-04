<form action="/" method="POST">
	<p>Name: <input type="text" name="login"></input>
	<p>Password: <input type="text" name="password"></input>
	<p><input type="submit"></input>
</form>
<?if(!empty($message)){
	echo $message;
}
?>