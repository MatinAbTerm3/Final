<?php

if( ! class_exists('Inputs'))
{
	class Inputs
	{
		static function makeInput($type , $label , $name , $option = '' , $helper = '' , $value = '' , $pattern = '' , $class = 'form-control')
		{
			if(isset($type) && $type == 'email')
			{
				$pattern = '[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$';
			}
			else if(isset($type) && $type == 'password')
			{
				$pattern = '(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}';
				
			}
			else if(isset($type) && $type == 'tel')
			{
				$pattern = '09(1[0-9]|3[1-9]|2[1-9])-?[0-9]{3}-?[0-9]{4}';
			}
			else if(isset($type) && $type == 'text')
			{
				$pattern = '[A-Za-z0-9]{3,}';
			}
			echo "	
					<section class = 'input-group mb-3'>
						<label for = '{$name}' class = 'form-label'> {$label} </label>
						<input type = '{$type}' id = '{$name}' name = '{$name}' class = '{$class}' pattern = '{$pattern}' {$option}>";
						if($type == 'password')
						{
							echo "<button type = 'button' class = 'input-group-text far fa-eye ' id = 'toggleButton'></button>";
						}
						echo"
						<section class = 'text-muted'>{$helper}</section>
					</section>";
					
			
		}
		static function makeSubmit()
		{
			echo "
				<input type = 'submit' value = 'ثبت' class = 'btn btn-primary' name = 'submit'>
			";
		}
		public function __construct($action = '' , $method = 'POST')
		{
			echo "<form action = '{$action}' method = '{$method}'>";
			$tokenn = Validation :: tokenGenerator();
			$_SESSION['csrfToken'] = $tokenn; 
			$csr =  "<input type = 'hidden' name = 'csrfToken' class = 'form-control' value = '$tokenn'>";
			echo $csr;
		}
		public function __destruct()
		{
			echo "</form>";
		}
		
		public static function csrfCheck($csrf_token)
		{
			if(isset($_SESSION['csrfToken']))
			{
				return $_SESSION['csrfToken'] === $csrf_token;
			}
			else
			{
				return false;
			}
		}
	}
}

?>