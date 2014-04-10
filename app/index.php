<html ng-app="App">
	<head>
		<link type="text/css" rel="stylesheet" href="css/bootstrap.css"></link>
		<link type="text/css" rel="stylesheet" href="css/style.css"></link>
		<script src="lib/angular/angular.js"></script>
		<script src="js/modules.js"></script>
		<script src="js/modules-mocks.js"></script>
		<script src="js/controllers.js"></script>
	</head>
	<body ng-controller="UserListCtrl">
		<div class="container">
			<div class="row">
				<div class="twelve column">
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>Name</th>
								<th>Email</th>
								<th>Birthday</th>
								<th>Age</th>
							</tr>
						</thead>
						<tbody>
							<tr ng-repeat="user in users">
								<td>{{user.login}}</td>
								<td>{{user.email}}</td>
								<td class="birthday">{{user.birthday|date: yyyy-MM-dd}}</td>
								<td>{{age(user)}}</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>
