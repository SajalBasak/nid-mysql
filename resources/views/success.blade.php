<!DOCTYPE html>
<html>
<head>
	<title>Records</title>
</head>
<body>
	<table border="2">
		<tr>
		<td>nid_number</td>
	<td>first_name</td>
	<td>middle_name</td>
	<td>last_name</td>
	<td>father_name</td>
	<td>mother_name</td>
	<td>contact_number</td>
	<td>birth_date</td>
	<td>blood_group</td>
	<td>gender</td>
	<td>village_id_no</td>
	</tr>
	<br>

@foreach ($users as $user)

<tr>
	<td>{{ $user->nid_number }}</td>
	<td>{{ $user->first_name }}</td>
	<td>{{ $user->middle_name }}</td>
	<td>{{ $user->last_name }}</td>
	<td>{{ $user->father_name }}</td>
	<td>{{ $user->mother_name }}</td>
	<td>{{ $user->contact_number }}</td>
	<td>{{ $user->birth_date }}</td>
	<td>{{ $user->blood_group }}</td>
	<td>{{ $user->gender }}</td>
	<td>{{ $user->village_id_no }}</td>
</tr>
<br>

@endforeach
	</table>
	
</body>
</html>