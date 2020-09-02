<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}
.container>p{
   text-align:center;
   font-size:1.2em;
}
/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
  border-radius:5px;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.submitbtn {
  background-color:#FF7F50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 26%;
  margin-left:37%;
  opacity: 0.9;
}

.submitbtn:hover {
  opacity: 1.2;
}


</style>
</head>
<body>

<form method="POST" action="{{route('form.add')}}">
@csrf
  <div class="container">
    
    <p>Please fill all details in the form .</p>
    <hr>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter name" name="name"  required>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
    <label for="pincode"><b>Pincode</b></label>
    <input type="text" placeholder="Enter pincode" name="pincode"  required>

    <button type="submit" class="submitbtn">Submit</button>
  </div>

</form>

</body>
</html>
