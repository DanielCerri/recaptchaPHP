<script src="https://www.google.com/recaptcha/api.js?render=6LeS1OsUAAAAABUcESTwu84UtbH37LjQJVM7ZWtj"></script>

 <form action="cadastrar.php" method="post">  
 	<input type="email" name="email"> </input>
 	<input type="hidden" id="token" name="token"> </input>
 	<button type="submit">Enviar </button>
 </form>

<script>
grecaptcha.ready(function() {
    grecaptcha.execute('6LeS1OsUAAAAABUcESTwu84UtbH37LjQJVM7ZWtj', {action: 'homepage'}).then(function(token) {
    //	console.log(token);
       		document.getElementById("token").value=token;
    });
});
</script>
