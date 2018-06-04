<style>
	#login-btn,
	#logout-btn{
		display: none;
	}
</style>
<p>
	В учебных целх - <br />
	логин:  root,<br /> 
	пароль: оставить строку пустой
</p>

<form action="index.php?c=C_Page&act=login" method="POST">
	<label for="login">Login:    </label><br /> 
	<input class='input' type="text" name='login' require> <br /><br /> 
	<label for="password">Password: </label><br />
	<input class='input' type="password" name='password' require>
	<input type="submit" value='Log In'>
</form>