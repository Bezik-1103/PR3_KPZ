<?class Students{
	function redirect($url){
		header('Location:'.$url);
	}
	function login(){
		/*перевірка логіну та паролю придуманого власноруч та у випадку, коли це задовільнитеме умові задаємо $_SESSION['login']=true*/ 
		global $message;
		if($_POST['login']=='trevertor' && $_POST['password']==230203){
			$_SESSION['login']=true;
			$this->redirect('/');
		}
		else{
			$message = 'Невірний логін або пароль';
		}
	}
	function logout(){
		// розлогінюємося
		unset($_SESSION_);
		$_SESSION['login']=false;
		$this->redirect('/');
	}
	function addNew(){
		/*за допомогою $_POST робимо перевірку та зберігаємо студентів*/
		//приклад перевірки для імені
		global $message;
		if((!isset($_POST['name'])  || empty($_POST['name']) || !is_string($_POST['name']))){
			$message = 'Некоректно введене імя';
		}
		if((!isset($_POST['surname'])  || empty($_POST['surname']) || !is_string($_POST['surname']))){
			$message = 'Некоректно введене прізвище';
		}
		if((!isset($_POST['age'])  || empty($_POST['age']) || !is_string($_POST['age']))){
			$message = 'Некоректно введений вік';
		}
		//якщо всі 3 поля введені коректно, тоді...
		if(empty($message)){
			//перевіряємо чи існує наш кукіс, якщо так то зчитуємо його
			$students = array();
			if(isset($_SESSION['students']) && !empty($_SESSION['students'])){
				$students = unserialize($_SESSION['students']);
			}
			/*далі  до масиву $students додаємо нового студента та перезаписуємо масив до нашого кукіс*/

			$students[count($students)] = $_POST;
			//die(var_dump($students));
			$_SESSION['students']= serialize($students);
			$this->redirect('/');
		}

	}
	
}

