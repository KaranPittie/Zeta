<!DOCTYPE HTML>
<html>
<head>
	<link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
	<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<title>
		Encrypt
	</title>
</head>

<body>
<form class="form-horizontal" method="post" action="{{ URL::to('/sender/request') }}">
<input type="hidden" name="_token" id="csrf-token" value="{{ csrf_token() }}" />

<fieldset>

<!-- Form Name -->
<legend></legend>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="begin"></label>
  <div class="col-md-4">
    <button id="begin" name="begin" class="btn btn-primary">Encrypt</button>
  </div>
</div>
</fieldset>
</form>

</body>
</html>
