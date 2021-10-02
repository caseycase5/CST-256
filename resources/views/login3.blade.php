<?php ?>

@extends('layouts.appmaster')
@section('title', 'Login Page')
@section('content')
    <!-- Note Shown: Insert your Login Form from login.php Here -->
    <!-- Display all the Data Validation Rule Errors -->
	<?php
    if($errors->count() != 0) {
        echo "<h5>List of Errors</h5>";
        foreach($errors->all() as $message) {
            echo $message . "<br/>";
        }
    }
	?>
    
    <form action = "dologin3" method = "POST">
		<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
		<h2> Enter First Name, Last Name, and Product Name</h2>
		<table>
			<tr>
				<td>First Name:</td>
				<td><input type = "text" name = "firstName" /></td>
			</tr>

			<tr>
				<td>Last Name:</td>
				<td><input type = "text" name = "lastName" /></td>
			</tr>
			<tr>
				<td>Product Name:</td>
				<td><input type = "text" name = "product" /></td>
			</tr>
			<tr>
				<td colspan = "2" align = "center">
					<input type = "submit" value = "Login" />
				</td>
		</table>
		</form>
@endsection







