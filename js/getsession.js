getsession();

function getsession(){
    	var xmlhttp;
   	if (window.XMLHttpRequest) {
		xmlhttp = new XMLHttpRequest();
	} else {
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}

	var url = "php/getsession.php";
  	xmlhttp.open("POST", url, true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    	xmlhttp.onreadystatechange = function(){
	        if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			analysisResponse(xmlhttp.responseText);
		}
	};
	xmlhttp.send();
}

function analysisResponse(res){
	var response = res;
	document.getElementById("username").innerHTML = res;
	if (res.trim()=='') {
		window.location.href = "../index.php";
	}
}

function btn_logout(){
	var xmlhttp;
    	if (window.XMLHttpRequest) {
		xmlhttp = new XMLHttpRequest();
	} else {
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}

	var url = "php/logout.php";
   	xmlhttp.open("POST", url, true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    	xmlhttp.onreadystatechange = function(){
        if (xmlhttp.readyState==4 && xmlhttp.status==200) {
            window.location.href = "../index.php";
        }
    };
    xmlhttp.send();
}
