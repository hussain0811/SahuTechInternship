<!DOCTYPE html>
<html>
<head>
	<title>Contact US</title>
	<style type="text/css">
		input[type=text], select, textarea {
  width: 70%;
  padding: 12px; 
  border: 1px solid #ccc;
  border-radius: 4px; 
  box-sizing: border-box; 
  margin-top: 6px; 
  margin-bottom: 16px; 
  resize: vertical ;
}
input[type=submit] {
  background-color: #6034ac;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer
  width: 70%
}
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
#topbar{
  display: flex;
  justify-content: space-between;
  background-color: #6034ac;
  padding: 5px 25px 5px 25px;
}
#topbar-left a{
  color: white;
  padding-left: 10px;
  font-size: 80%;
}
#topbar-right a{
  color: white;
  padding-right: 10px;
  font-size: 80%;
}

	</style>
</head>
<body>
  <div id="topbar">
    <div id="topbar-left">
      <a href="#">Home</a>
      <a href="#">About Us</a>
    </div>
    <div id="topbar-right">
      <a href="#">Login</a>
      <a href="#">Register</a>
    </div>
  </div>
<div class="container">
  <form method="POST" action="connection.php">

    <label for="fname">Name</label>
    <input type="text" id="fname" name="name" placeholder="Your name.."><br>


    <label for="mail">Email</label>
    <input type="text" id="mail" name="email" placeholder="Your Email.."><br>

  <label for="lname">Phone</label>
    <input type="text" id="phno" name="phno" placeholder="Your Phone no.."><br>
    <label for="msg">Message</label><br>
    <textarea id="msg" name="msg" placeholder="Write something.." style="height:200px;margin-left: 45px;"></textarea><br>

    <input type="submit" value="Submit" name="submit">

  </form>
</div>
</body>
</html>