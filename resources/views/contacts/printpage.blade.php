<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
			<title>Print Only First Page</title>
		</head>
		<body style="margin: 0; padding: 0;">
			<div style="display: flex; flex-wrap: wrap; align-content: flex-start; background-color: #ffffff; padding: 2px;">
		
		@foreach($contacts as $contact)
		<div style="background-color: rgb(255, 255, 255); padding: 1px; margin: 2px; height: 68px; color: rgb(0, 0, 0); font-size: 12px; border: solid black;">
					<b align="center"> Internet Access Voucher</b>
					<table align="center">
						<tr>
							<td>Username:</td>
							<td>{{ $contact->username }}</td>
						</tr>
						<tr>
							<td>Password:</td>
							<td>{{ $contact->password }}</td>
						</tr>
						<tr>
							<td>Valid For:</td>
							<td>{{ ($contact->validity)/60 }} minutes</td>
						</tr>
					</table>
				</div>


		@endforeach

	</div>
	<br>
{{ $contacts->links('pagination::bootstrap-4') }}
	
	<a href="{{ route('contacts.index') }}">
					<button type="button" class="btn btn-primary">Return</button>
				</a>
			</body>
		</html>