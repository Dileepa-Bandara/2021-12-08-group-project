<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>

	<link rel="stylesheet" type="text/css" href="./pages/css/formstyle.css">
</head>

<body>
	<div class="hr-heading">

		<h2>UPDATE EMPLOYEE</h2>

		<form>

			<table class="hr-table">
				<tr>
					<td>EmpID</td>
					<td><input type="text" id="empid" value="EM0001"></td>
				</tr>
				<tr>
					<td>Full Name</td>
					<td><input type="text" id="fullname" value="Robin Jack"></td>
				</tr>
				<tr>
					<td>Department</td>

					<td><select>
							<option value=”sw”>Software Development</option>
						</select>
					</td>
				</tr>

				<tr>
					<td>Position</td>
					<td><select>
							<option value=”programmer”>Programmer</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Work Schedule</td>
					<td><input type="text" id="schedule" value="Full Time"></td>
				</tr>

				<tr>
					<td>Email</td>
					<td><input type="text" id="email" value="robinj@gmail.com"></td>
				</tr>

				<tr>
					<td>Contact No</td>
					<td><input type="text" id="contact" value="0777123123"></td>
				</tr>

				<tr align="center">
					<td> <button class="hr-button2">Cancel</button></td>
					<td><button class="hr-button">Save</button></td>
				</tr>

			</table>
			<br>

		</form>


	</div>

</body>

</html>