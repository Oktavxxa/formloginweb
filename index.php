<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>192410101040</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<style>
    body {
    background: #9a8262;
    }

    h2 {
    color: black;
    }

    .login {
    padding: 1em;
    margin: 2em auto;
    width: 17em;
    background: #e8ca93;
    border-radius: 3px;
    }

    label {
    font-size: 12pt;
    color: black;
    }

    input[type="text"],
    input[type="password"],
    textarea {
    padding: 8px;
    width: 95%;
    background: #efefef;
    border: 0;
    font-size: 10pt;
    margin: 6px 0px;
    }

    .tombol {
    background: #9a8262;
    color: black;
    border: 0;
    padding: 5px 8px;
    border-radius: 5px;
    margin: 10px 225px;
    }
</style>
<body>
<br/>
	<br/>
	<center><h2>MASUKKAN AKUN</h2></center>	
	<br/>
	<div class="login">
	<br/>
		<form action="login.php" method="post" onSubmit="return validasi()">
			<div>
				<label>Username:</label>
				<input type="text" name="username" id="username" />
			</div>
			<div>
				<label>Password:</label>
				<input type="password" name="password" id="password" class="form-password"/>
			</div>	
            <tr>
                <td style="font-size: 12px;">
                <input type="checkbox" id="form-checkbox">Show Password
                </td>
            </tr>		
			<div>
				<input type="submit" value="Login" class="tombol">
			</div>
		</form>
	</div>
</body>
<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}
    $(document).ready(function(){		
        $('#form-checkbox').click(function(){
            if($(this).is(':checked')){
                $('.form-password').attr('type','text');
            }else{
                $('.form-password').attr('type','password');
            }
        });
    });
 
</script>
</html>