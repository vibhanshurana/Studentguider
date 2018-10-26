
<form method="post" action="b_reg_php.php" onSubmit="return Validate()" name="vForm">
		<table width="600" border="0" cellpadding="3"> 
      <tr>
        <td colspan="2"><p style="font-size: 24px">REGISTRATION</p></td>
        </tr>
      <tr>
        <td width="300">NAME</td>
			<td><input type="text" name="username" class="textInput" placeholder="Name">
			<div id="name_error" class="val_error"></div>
		</td></tr>
		<tr>
        <td>E MAIL</td>
			<td><input type="email" name="email" class="textInput" placeholder="Email">
			<div id="email_error" class="val_error"></div>
		</td></tr>
		<tr>
        <td>PASSWORD</td>
			<td><input type="password" name="password" class="textInput" placeholder="Password">
		</td></tr>
		 <tr>
        <td>CONFIRM PASSWORD</td>
			<td><input type="password" name="password_confirmation" class="textInput" placeholder="password confirmation">
			<div id="password_error" class="val_error"></div>
		</td></tr>
		 <tr>
		   <td>DEPARTMENT</td>
		   <td>
        <label>
  <select id="department" name="department"  placeholder="department">
  <option>---SELECT---</option>
    <option>Arch. I Year</option>
    <option>Arch. II Year</option>
    <option>Arch. III Year</option>
    <option>Arch. IV Year</option>
    <option>BT  I Year</option>
    <option>BT  II Year</option>
    <option>BT  III Year</option>
    <option>BT  IV Year</option>
    <option>BM I Year</option>
    <option>BM II Year</option>
    <option>BM III Year</option>
    <option>BM IV Year</option>
    <option>CHEM. I Year</option>
    <option>CHEM. II Year</option>
    <option>CHEM. III Year</option>
    <option>CHEM. IV Year</option>
    <option>CIVIL I Year</option>
    <option>CIVIL II Year</option>
    <option>CIVILI IIIYear</option>
    <option>CIVIL IV Year</option>
    <option>CSE I Year</option>
    <option>CSE II Year</option>
    <option>CSE III Year</option>
    <option>CSE IV Year</option>
    <option>Electrical I Year</option>
    <option>Electrical II Year</option>
    <option>Electrical III Year</option>
    <option>Electrical IV Year</option>
    <option>E. &amp; TC I Year</option>
    <option>E. &amp; TC II Year</option>
    <option>E. &amp; TC III Year</option>
    <option>E. &amp; TC IV Year</option>
    <option>IT I Year</option>
    <option>IT II Year</option>
    <option>IT III Year</option>
    <option>IT IV Year</option>
    <option>Mechanical I Year</option>
    <option>Mechanical II Year</option>
    <option>Mechanical III Year</option>
    <option>Mechanical IV Year</option>
    <option>Mining I Year</option>
    <option>Mining II Year</option>
    <option>Mining III Year</option>
    <option>Mining IV Year</option>
    <option>META I Year</option>
    <option>META II Year</option>
    <option>META III Year</option>
    <option>META III Year</option>
    <option>META IV Year</option>
    <option>MCA I Year</option>
    <option>MCA II Year</option>
    <option>MCA III Year</option>
  </select>
</label>
			<div id="department_error" class="val_error"></div></td>
	      </tr>
		 <tr>
		   <td>MOBILE</td>
		   <td><input type="text" name="mobile" class="textInput" placeholder="mobile">
			<div id="mobile_error" class="val_error"></div></td>
	      </tr>
		<tr>
        <td>&nbsp;</td>
        <td>
			<input type="submit" class="btn" name="register" value="Register">
		</td></tr></table>
	</form>
    

<!-- add javascript here -->
<script type="text/javascript">
	// GETTING ALL INPUT TEXT FIELDS
	var username = document.forms["vForm"]["username"];
	var email = document.forms["vForm"]["email"];
	var password = document.forms["vForm"]["password"];
	var password_confirmation = document.forms["vForm"]["password_confirmation"];
	var department = document.forms["vForm"]["department"];
	var mobile = document.forms["vForm"]["mobile"];
	// GETTING ALL ERROR OBJECTS
	var name_error = document.getElementById("name_error");
	var email_error = document.getElementById("email_error");
	var password_error = document.getElementById("password_error");
	var department_error = document.getElementById("department_error");
	var mobile_error = document.getElementById("mobile_error");
	// SETTING ALL EVENT LISTENERS
	username.addEventListener("blur", nameVerify, true);
	email.addEventListener("blur", emailVerify, true);
	function Validate(){
		// VALIDATE USERNAME
		if(username.value == ""){
			name_error.textContent = "Username is required";
			username.style.border = "1px solid red";
			username.focus();
			return false;
		}
		// VALIDATE EMAIL
		if(email.value == ""){
			email_error.textContent = "Email is required";
			email.style.border = "1px solid red";
			email.focus();
			return false;
		}
		// VALIDATE PASSWORD
		if (password.value != password_confirmation.value) {
			password_error.textContent = "Passwords not match";
			password.style.border = "1px solid red";
			password_confirmation.style.border = "1px solid red";
			password.focus();
			return false;
		}
		// PASSWORD REQUIRED
		if (password.value == "" || password_confirmation.value == "") {
			password_error.textContent = "Password required";
			password.style.border = "1px solid red";
			password_confirmation.style.border = "1px solid red";
			password.focus();
			return false;
		}
		// VALIDATE department
		if(department.value == "---SELECT---"){
			department_error.textContent = "Select Proper Department";
			department.style.border = "1px solid red";
			department.focus();
			return false;
		}
				// VALIDATE department
		if(mobile.value == "" || mobile.value.length!=10){
			mobile_error.textContent = "Enter valid Mobile Number";
			mobile.style.border = "1px solid red";
			mobile.focus();
			return false;
		}
	}
		
	// ADD EVENT LISTENERS
	function nameVerify(){
		if (username.value != "") {
			name_error.innerHTML = "";
			username.style.border = "1px solid #110E0F";
			return true;
		}
	}
	function emailVerify(){
		if (email.value != "") {
			email_error.innerHTML = "";
			email.style.border = "1px solid #110E0F";
			return true;
		}
	}
</script>