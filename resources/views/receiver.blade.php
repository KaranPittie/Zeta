<!DOCTYPE HTML>
<html>
<head>
	<link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
	<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<title>
		Receiver
	</title>
</head>

<body>
	<form class="form-horizontal" method="post" action="{{ URL::to('/receiver') }}">
	<input type="hidden" name="_token" id="csrf-token" value="{{ csrf_token() }}" />

	<fieldset>

<!-- Form Name -->
<legend>Receiver</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="rp_key">Receiver Private Key</label>  
  <div class="col-md-4">
  <input id="rp_key" name="rp_key" placeholder="Private Key" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-4">
    <button id="" name="" class="btn btn-success">Submit</button>
  </div>
</div>

</fieldset>

</form>
</body>
</html>