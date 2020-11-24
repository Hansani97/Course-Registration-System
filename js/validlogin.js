var Reg_Number = document.forms['form']['Reg_Number'];
var Password = document.forms['form']['Password'];

var Reg_Number_error = document.getElementById("Reg_Number_error");
var pass_error = document.getElementById("pass_error");

Reg_Number.addEventListener("textInput", Reg_Number_verify);
Password.addEventListener("textInput", pass_verify);

function validated(){
	if(Reg_Number.value.length <8 ){
		Reg_Number.style.border = "1px solid red";
		Reg_Number_error.style.display = "block";
		Reg_Number .focus();
		return false;
	}
	if(password.value.length < 6 ){
		password.style.border = "1px solid red";
		pass_error.style.display = "block";
		password.focus();
		return false;
	}
}
function Reg_Number_verify(){
	if(Reg_Number.value.length >=7){
		Reg_Number.style.border = "1px solid skyblue";
		Reg_Number_error.style.display = "none";
		return true;
	}
}
function pass_verify(){
	if(password.value.length >=5){
		password.style.border = "1px solid skyblue";
		pass_error.style.display = "none";
		return true;
	}
}