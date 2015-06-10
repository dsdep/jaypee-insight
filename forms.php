

<!DOCTYPE html>
<html>
<head>

  <meta charset="UTF-8">

  <title>REGISTER HERE</title>

    <link rel="stylesheet" href="style.css" media="screen" type="text/css" />



</head>

<body>


 <div id="wrap">
  <div id="regbar">
    <div id="navthing">
      <h2><a href="#" id="loginform">Login</a> | <a href="#" id="registration">Register</a></h2>
 
          <form action="" method ="post">
    <div class="login">
    
      <div class="arrow-up"></div>
      <div class="formholder">
        <div class="randompad">
 <fieldset>
    
            <label name="loginpage">*login type</label>
		<div class="column column2"><input type="radio" name="loginpage" value="teacher" required="required"/><span> teacher </span></div>

		<div class="column column2"><input type="radio" name="loginpage" value="student" required="required"/><span> student </span></div>
        <br>
              <label name="email">*Email</label>
             <input type="email" name="email" placeholder="example@example.com" required="required" />
            
             <label name="password">*Password</label>
             <input type="password" name="password"   size="12" required="required" />
             <!--<input type="submit"  value="Login" />-->
   <div class="submit"><input type="submit" value="Submit"/></div> 

           </fieldset>
        </div>
      </div>
    </div></form>
    
    <form action ="login.php" method="post">
    <div id="wrap">
  <div id="regbar">
    <div id="navthing">
     <div class="register">
      <div class="arrow-up"></div>
      <div class="formholder">
        <div class="randompad">
           <fieldset>
             <label name="first_name">*first name</label>
             <input type="text" name="first_name" placeholder="first name" pattern="^[A-Za-z]*"  minlength="3" maxlength="15" required="required" />
             
             <label name="last_name">*last name</label>
             <input type="text" name="last_name" placeholder="last name"  pattern="^[A-Za-z]*" minlength="3" maxlength="15" required="required" />
             
             <label name="date">*date of birth</label>
             <input type="date" name="date" placeholder="date" data-format="yyyy-mm-dd" required="required" />
             
             <label name="enrollment_no">*enrollment no</label>
             <input type="phone" name="enrollment_no" pattern="[+]?[\.\s\-\(\)\*\#0-9]{3,}" minlength="10" maxlength="10" required="required" />
             
             <label name="branch">*Branch</label>
		<div class="column column2"><input type="radio" name="branch" value="CSE " required="required"/><span> CSE </span></div>

		<div class="column column2"><input type="radio" name="branch" value="ECE" required="required"/><span> ECE </span></div>
<br>
<label class="batch">*batch</label>
<input type="text" name="batch" placeholder="ex.f6" />

<label name="year">*Year</label>		
<div class="column column2"><input type="radio" name="year" value="1st" required="required"/><span>1st</span></div>
<div class="column column2"><input type="radio" name="year" value="2nd" required="required"/><span>2nd</span></div>

<div class="column column2"><input type="radio"  name="year" value="3rd" required="required"/><span>3rd</span></div>

<div class="column column2"><input type="radio" name="year" value="4th" required="required"/><span>4th</span></div>
<br>

<label name="phone_no">*contact no</label>
<input type="phone" pattern="[+]?[\.\s\-\(\)\*\#0-9]{3,}" minlength="10" maxlength="10" name="phone_no" required="required" placeholder="xxxxxxxxxx"/>
<br>
<br>
<label name="email">*Email</label>
             <input type="email" name="email" placeholde="example@example.com" required="required" />
                          
          <div class="submit"><input type="submit" value="Submit"/></div> 
           </fieldset>
        </div>
      </div>
    </div>
    
  
    </div>
  </div>
</div>
 </form>



  <script src='jquery.js'></script>
 <script src="index.js"></script>
 

</body>

</html>
