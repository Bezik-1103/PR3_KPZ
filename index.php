<?session_start();
include "students.php";
global $message;
$s = new Students;
if($_POST['login'] && $_POST['password']) $s->login();
if($_POST['name'] && $_POST['surname'] && $_POST['age']) $s->addNew();
if($_POST['logout']) $s->logout();

				
?>
<html>
	<head></head>
	<body>
		<?if ($_SESSION['login']){
			include "form.php";
		}
		else{
			include "login.php";
		}?>
	</body>
</html>