<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TestBd</title>


    <script type="text/javascript">
        function validateForm() {
          var Familia = document.forms["loginForm"]["Familia"].value;
          var Ima = document.forms["loginForm"]["Ima"].value;
          var Otchestvo = document.forms["loginForm"]["Otchestvo"].value;
            var login = document.forms["loginForm"]["Email"].value;
            var password = document.forms["loginForm"]["Password"].value;

            if (login == "" || password == "") {
                alert("Пожалуйста, заполните все поля.");
                return false;
            }
        }
    </script>



	<style>
body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .title {
            text-align: center;
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .input-container {
            position: relative;
            margin-bottom: 1.5rem;
        }

        .input {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 1rem;
        }

        .input:focus {
            outline: none;
            border-color: #6a737d;
        }

        .placeholder {
            position: absolute;
            left: 0.5rem;
            top: 0.5rem;
            color: #6a737d;
            pointer-events: none;
            transition: 0.3s;
        }

.input:focus ~ .placeholder,
.input:not(:placeholder-shown) ~ .placeholder {
  transform: translateY(-30px) translateX(10px) scale(0.75);
}

.input:not(:placeholder-shown) ~ .placeholder {
  color: #808097;
}

.input:focus ~ .placeholder {
  color: #dc2f55;
}

.submit {
  background-color: #08d;
  border-radius: 12px;
  border: 0;
  box-sizing: border-box;
  color: #eee;
  cursor: pointer;
  font-size: 18px;
  height: 50px;
  margin-top: 38px;
  // outline: 0;
  text-align: center;
  width: 100%;
}

.submit:active {
  background-color: #06b;
}


.form__error {
  color: black;
  text-align: left;
  font-size: 12px;
  display: block;
  margin-top: 3px;
  display: none;
}

input:valid:not(:placeholder-shown) {
  border-color: green;
}

input:invalid:not(:placeholder-shown) {
  border-color: red;
}
input:invalid:not(:placeholder-shown) + .form__error {
  display: block;
}

.form__field {
  margin-bottom: 10px;
}
	</style>
</head>
<body>
<?php
$host='localhost';
$db='priut_dlya_jivotnih';
$user='root';
$password='';
$link=mysqli_connect($host,$user,$password,$db) or die("Ошибка".mysqli_error($link));
    if(isset ($_POST['Familia']) && isset ($_POST['Ima']) && isset($_POST['Otchestvo']) && isset ($_POST['Email']) && isset ($_POST['Password'])){
    $Fam=$_POST['Familia'];
    $Ima=$_POST['Ima'];
    $Otchestvo=$_POST['Otchestvo'];
    $Em=$_POST['Email'];
    $password = $_POST['Password'];
    if($Fam && $Ima && $Otchestvo && $Em && $password){
        $query = "insert into sotrudniki(Familia,Ima,Otchestvo,Email,Password) values('$Fam', '$Ima', '$Otchestvo','$Em', '$password')";
        $result = mysqli_query($link, $query) or die ("Ошибка".mysqli_error($link));
        }
        }
?>
<form method="POST" name="loginForm" onsubmit="return validateForm()">
<div class="form">
      <div class="title">Регистрация</div>
	  <div class="input-container ic2">
        <input id="lastname" class="input" type="text" placeholder=" " Name="Familia" pattern="^[А-Яа-яЁё\s]+$"/>
        <div class="cut"></div>
        <label for="lastname" class="placeholder">Фамилия</label>
      </div>
	  <div class="input-container ic2">
        <input id="lastname" class="input" type="text" placeholder=" " Name="Ima" pattern="^[А-Яа-яЁё\s]+$"/>
        <div class="cut"></div>
        <label for="lastname" class="placeholder">Имя</label>
      </div>
	  <div class="input-container ic2">
        <input id="lastname" class="input" type="text" placeholder=" " Name="Otchestvo" pattern="^[А-Яа-яЁё\s]+$"/>
        <div class="cut"></div>
        <label for="lastname" class="placeholder">Отчество</label>
      </div>
      <div class="input-container ic2">
        <input id="lastname" class="input" type="email" placeholder=" " Name="Email"/>
        <span class="form__error">Это поле должно содержать E-Mail в формате example@site.com</span>
        <div class="cut"></div>
        <label for="lastname" class="placeholder">Email</label>
      </div>
      <div class="input-container ic3">
        <input id="email" class="input" type="text" placeholder=" " Name="Password"/>
        <div class="cut cut-short"></div>
        <label for="email" class="placeholder">Пароль</>
      </div>
      <button type="submit" class="submit">Зарегистрироваться</button>
    </div>
</form>
</body>
</html>

