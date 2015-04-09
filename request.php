
<!DOCTYPE html>
<html>
<head>
<?php include("header.php"); ?>	
</head>
<body>
<?php include("navbar.php"); ?>
<div class="jumbotron no-margin">
<div class="container">
<h2>
	Request For Quote
</h2>
</div>

<div class="container"

<form name="MyForm" action="send.php"  onsubmit="return validateForm()" method="post">
	<div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="Name" class="form-control" id="name" placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="email" placeholder="Enter email">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Company Name</label>
    <input type="Name" class="form-control" id="exampleInputEmail1" placeholder="Enter Company name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Company URL</label>
    <input type="Name" class="form-control" id="exampleInputEmail1" placeholder="Enter Company URL">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contact Number</label>
    <input type="Contact Number" class="form-control" id="exampleInputPassword1" placeholder="Number"> 
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Service Required</label>

  <select class="form-control">
  <option>Web Development</option>
  <option>Android App Development</option>
  <option>Ios App Development</option>
  <option>Testing</option>
  <option>Other</option>
</select>
</div>
  <div class="form-group">
    <label for="exampleInputFile">Specs and Description</label>
    <input type="file" id="exampleInputFile">
    <p class="help-block"></p>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Check me out
    </label>
  </div>
  <button type="submit" name="submitButton" class="btn btn-default">Submit</button>
</form>
</div>
</div>
<?php include("footer.php"); ?> 

<script src="bootstrap/js/jquery-1.11.2.min.js"></script>  
<script src="bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="external.js"></script>
</body>
</html>