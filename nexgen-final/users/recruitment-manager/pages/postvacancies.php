<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>

	<link rel="stylesheet" type="text/css" href=./pages/css/formstyle.css"> <style>

	input[type="text"] {
	width: 80%;
	padding: 12px 20px;
	margin: 8px 0;
	display: inline-block;
	border: 1px solid #ccc;
	border-radius: 4px;
	box-sizing: border-box;
	}

	.hr-heading h2 {
	/* border-radius: 5px; */
	/* background-color: #f2f2f2; */
	color: darkblue;
	/* padding: 20px; */
	}

	.hr-button {
	background-color: #6880d3;
	border-radius: 15px;
	border: none;
	color: white;
	padding: 15px 32px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 16px;
	margin: 4px 2px;
	cursor: pointer;
	}

	.hr-button2 {
	background-color: #6880d3;
	border-radius: 15px;
	border: none;
	color: white;
	padding: 15px 32px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 16px;
	margin: 4px 2px;
	cursor: pointer;
	}

	.hr-table {
	font-family: helvetica, arial;
	font-size: 11px;
	border-collapse: collapse;
	width: 100%;
	}

	.hr-table td,
	th {
	border: 3px solid #6880d3;
	padding: 10px;
	}
	</style>


</head>

<body>
	<div class="hr-heading">

		<h2>POST VACANCIES</h2>

		<form>

			<table class="hr-table">
				<tr>
					<td>Department</td>

					<td><select>
							<option value=”sw”>Software Development</option>
							<option value=”acc”>Accouting</option>
							<option value=”mktg”>Marketing</option>
						</select>
					</td>
				</tr>

				<tr>
					<td>Position</td>
					<td><select>
							<option value=”programmer”>Programmer</option>
							<option value=”accountant”>Accountant</option>
							<option value=”salesexe”>Sales Executive</option>
							<option value=”coord”>Coordinator</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Job Description/Responsibilities</td>
					<td><textarea rows="3" cols="40" name="text"></textarea></td>
				</tr>
				<tr>
					<td>Qualifications</td>
					<td><input type="text" id="qual" name="qual"></td>
				</tr>

				<tr>
					<td>Experience</td>
					<td><input type="text" id="exp" name="exp"></td>
				</tr>

				<tr>
					<td>Comments</td>
					<td><textarea rows="3" cols="40" name="text"></textarea></td>
				</tr>

				<tr>
					<td>Deadline</td>
					<td><input type="date" id="deadline" name="deadline"></td>
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