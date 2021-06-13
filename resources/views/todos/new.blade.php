@extends('layout.app')
@section('title')
Form
@endsection
@section('content')
  <h1>Please fill the following form</h1>
  <h2>Form Details</h2>
  <form action = "/action_page.php"><br>
    <label for= "fname">First name:</label>
  <input type="text" id="fname" name="fname" value=""><br><br>
  <label for="lname">Last name:</label>
  <input type="text" id="lname" name="lname" value=""><br><br>
  <label for= "fname">Email address:</label>
<input type="email" id="fname" name="fname" value=""><br><br>
<label for= "fname">Phone No:</label>
<input type="number" id="fname" name="fname" value=""><br><br>
  <h3>Gender</h3>
  <input type="radio" id="male" name="gender" value="male">
<label for="male">Male</label><br>
<input type="radio" id="female" name="gender" value="female">
<label for="female">Female</label><br>
<input type="radio" id="other" name="gender" value="other">
<label for="other">Other</label><br><br>
<p>Please click <a href = "/contact">here</a> for the contact details.</p>
<input type="submit" value="Submit">
<input type="reset" value="Clear">
<button><a style="text-decoration:none" href="/todos">Back</a></button>
@endsection
