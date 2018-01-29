function btn_register(){
	var username = document.getElementById("name").value;
	var password = document.getElementById("password").value;
	var repeatpassword = document.getElementById("password2").value;
	var parameters = "action=register" + "&username=" + username + "&password=" + password;

	if(password!=repeatpassword){
       		document.getElementById("RegError").innerHTML = "Please enter the same password!";
        	return;
   	}
	var xmlhttp;
        if (window.XMLHttpRequest) {
       		//code for IE7+, Firefox, Chrome, Opera, Safari
        	xmlhttp = new XMLHttpRequest();
        } else {    //  code for IE6, IE5
   		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }

        var url = "php/login.php";
       	xmlhttp.open("POST", url, true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.onreadystatechange = function(){
        	if (xmlhttp.readyState==4 && xmlhttp.status==200) {
        		analysisResponse(xmlhttp.responseText);
        	}
        };

	xmlhttp.send(parameters);
}

function btn_login(){
	var xmlhttp;
   	if (window.XMLHttpRequest) {
        //code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
	} else {    //  code for IE6, IE5
       		 xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
     
	var url = "php/login.php";
       	xmlhttp.open("POST", url, true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     	xmlhttp.onreadystatechange = function(){
        	if (xmlhttp.readyState==4 && xmlhttp.status==200) {
        		analysisResponse(xmlhttp.responseText);
        	}
        };
       
	var username = document.getElementById("name").value;
        var password = document.getElementById("password").value;
        var parameters = "action=login" + "&username=" + username + "&password=" + password;
       	xmlhttp.send(parameters);

}

function analysisResponse(res){
	if(res.trim()=='trueuser'){
       		window.location.href = "homepage.php";            
    	}
	else if(res.trim()=='falseuser'){
       		document.getElementById("LogError").innerHTML = "User name and password do not match!";
    	}
	else if(res.trim()=='nametoken'){
        	document.getElementById("RegError").innerHTML = "The user name is already token!";
    	}
	else if(res.trim()=='register'){
	        window.location.href = "homepage.php";
    	}
}
