<!DOCTYPE HTML>
<html>
<head>
	<link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
	<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<title>
		Sender
	</title>
</head>

<body>
	<form class="form-horizontal" method="post" action="{{ URL::to('/sender') }}">
	<input type="hidden" name="_token" id="csrf-token" value="{{ csrf_token() }}" />

	<fieldset>

		<!-- Form Name -->
		<legend>Sender</legend>

		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="sp_key">Sender Private Key</label>  
		  <div class="col-md-4">
		  <input id="sp_key" name="sp_key" placeholder="Private Key" class="form-control input-md" required="" type="text">
		    
		  </div>
		</div>

		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="message">Message</label>  
		  <div class="col-md-4">
		  <input id="message" name="message" placeholder="Enter the message" class="form-control input-md" required="" type="text">
		    
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