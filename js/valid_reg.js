var name = document.forms['form']['name'];
var email = document.forms['form']['email'];
var password = document.forms['form']['password'];
var password = document.forms['form']['password'];

var name_error = document.getElementById("name_error");
var email_error = document.getElementById("email_error");
var pass_error = document.getElementById("pass_error");
var pass_error = document.getElementById("pass_error");

name.addEventListener("textInput", name_verify);
email.addEventListener("textInput", email_verify);
password.addEventListener("textInput", pass_verify);
password.addEventListener("textInput", pass_verify);

function validated(){
	if(name.value.length < 10 ){
		name.style.border = "1px solid red";
		name_error.style.display = "block";
		name.focus();
		return false;
	}
	if(email.value.length < 10 ){
		email.style.border = "1px solid red";
		email_error.style.display = "block";
		email.focus();
		return false;
	}
	if(password.value.length < 7 ){
		password.style.border = "1px solid red";
		pass_error.style.display = "block";
		password.focus();
		return false;
	}
	if(password.value.length < 7 ){
		password.style.border = "1px solid red";
		pass_error.style.display = "block";
		password.focus();
		return false;
	}
}
function name_verify(){
	if(name.value.length >=10){
		name.style.border = "1px solid skyblue";
		name_error.style.display = "none";
		return true;
	}
}
function email_verify(){
	if(email.value.length >=10){
		email.style.border = "1px solid skyblue";
		email_error.style.display = "none";
		return true;
	}
}
function pass_verify(){
	if(password.value.length >=7){
		password.style.border = "1px solid skyblue";
		pass_error.style.display = "none";
		return true;
	}
}
function pass_verify(){
	if(password.value.length >=7){
		password.style.border = "1px solid skyblue";
		pass_error.style.display = "none";
		return true;
	}
}