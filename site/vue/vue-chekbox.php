<!DOCTYPE html>
<html>
<head>
	<title>Multiple Checkbox</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<h4>Multiple Checkbox</h4>
<hr>
<form method="post">
<table class="table table-bordered">
	<thead>
		<tr>
			<th></th>
			<th>Product Name</th>
			<th>Price</th>
			<th>Quantity</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><input type="checkbox" name="prodid[]" value="5"></td>
		</tr>

		<tr>
			<td><input type="checkbox" name="prodid[]" value="6"></td>
		</tr>

	</tbody>
</table>
<div class="text-center">
	<input type="submit" name="submit" class="btn btn-success" value="Submit">
	</div>
</div>
</form>
</body>
</html>