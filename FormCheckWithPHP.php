<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="jquery-1.10.2.js"></script>
</head>

<body>
<form action="FormCheckWithPHP.php" enctype="multipart/form-data" method="post">
Name : <input type="text" size="20" id="name"  /><br />
Age : <input type="text" size="20" id="age" /><br />
Date of Birth : <input type="text" size="20" id="birth" /><br />




<input type="submit" value="Submit" id="submit" />
</form>

<script>
$(document).ready(function(e) {
    
	$('#submit').click(function(){
		
		var name = $('#name').val();
		var alpha=/[A-z]/;
		var nameValue=alpha.test(name);
		
		if(($('#name').val().length===0) || ($('#name').val().length<2) || (!nameValue)){
			
			alert('Empty');
			return false;
			
		}
		else {
			
			alert('Correct');
			return true;
		}
		
		});
	
});
</script>
</body>
</html>