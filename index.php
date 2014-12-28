<!DOCTYPE html>
<html ng-app="customersApp">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
		<title>Using Directives</title>

		<!-- Css -->
		<link rel="stylesheet" type="text/css" href="css/main.css">
	</head>

	<body ng-init="data={name: 'James', isVisible: true, loggedIn: false, status: 'navy'}">
		<!--
		ng-cloak
		ng-switch
		ng-class
		ng-show
		-->
		<div ng-cloak>

			<h1>Customer Data</h1>

			Filter: <input type="text" ng-model="customerFilter.name">

			<div ng-controller="CustomersController">

				<table>
					<tr>
						<th ng-click="doSort('name')">Name</th>
						<th ng-click="doSort('city')">City</th>
						<th ng-click="doSort('orderTotal')">Order Total</th>
						<th ng-click="doSort('joined')">Joined</th>
					</tr>

					<tr ng-repeat="cust in customers | filter:customerFilter | orderBy:sortBy:reverse" >
						<td>{{ cust.name | uppercase}}</td>
						<td>{{ cust.city | lowercase}}</td>
						<td>{{ cust.orderTotal | currency:'£' }}</td>
						<td>{{ cust.joined | date:'dd-mm-yy' }}</td>
					</tr>
				</table>

				<br />

				<span>Total customers: {{ customers.length }}</span>


			</div>

			<h1>{{ 1 + 1 }}</h1>

			<div ng-switch on="data.loggedIn">
				<div ng-switch-when="true">
					Welcome {{ data.name }}
				</div>

				<div ng-switch-default ng-class="data.status">Login</div>

			</div>

			<br />

			<div ng-show="data.isVisible">
				Name: <input type="text" ng-model="name">
				<br />{{ name }}
				<br /><span ng-bind="name"></span>
			</div>
<!---->
<!--			<div ng-hide="isHidden">-->
<!--				Name: <input type="text" ng-model="name">-->
<!--				<br />{{ name }}-->
<!--				<br /><span ng-bind="name"></span>-->
<!--			</div>-->

<!--			<input type="checkbox" ng-model="isHidden">-->

<!--			<button ng-click="name='Michelle'">Change Name</button>-->

<!--			<div ng-init="names=['David', 'James', 'Richard']">-->
<!---->
<!--				<h3>Interating through data with ng-repeat</h3>-->
<!---->
<!--				<ul>-->
<!--					<li ng-repeat="name in names">{{ name }}</li>-->
<!--				</ul>-->
<!---->
<!--			</div>-->

				<div ng-init="people=[{name:'John', city:'Chandler'}, {name:'Tina', city:'Los Angeles'}, {name:'David', city:'London'}, {name:'James', city:'Bagshot'}]">

					<h3>Interating through data with ng-repeat</h3>

					<ul>
						<li ng-repeat="person in people">{{ person.name }}, {{ person.city }}</li>
<!--						<li ng-repeat="person in people">{{ person.name + ', ' + person.city }}</li>-->

					</ul>

					<br />

					<table>
						<tr>
							<td>Name</td>
							<td>City</td>
						</tr>
						<tr ng-repeat="person in people">
							<td>{{ person.name }}</td>
							<td>{{ person.city }}</td>
						</tr>
					</table>

				</div>

		</div>

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.28/angular.min.js"></script>
		<script type="text/javascript" src="app/app.js"></script>
		<script type="text/javascript" src="app/controllers/customersController.js"></script>

	</body>

</html>