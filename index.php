<!DOCTYPE html>
<html ng-app="customersApp">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
		<title>Using Directives</title>

		<!-- Css -->
		<link rel="stylesheet" type="text/css" href="css/main.css">
	</head>

	<body>

		<div ng-view></div>

		<!--	AngularJS	-->
		<script type="text/javascript" src="scripts/angular.js"></script>
		<!--	ngRoute	-->
		<script type="text/javascript" src="scripts/angular-route.js"></script>
		<script type="text/javascript" src="app/app.js"></script>
		<script type="text/javascript" src="app/controllers/customersController.js"></script>
		<script type="text/javascript" src="app/controllers/ordersController.js"></script>
		<script type="text/javascript" src="app/services/customersFactory.js"></script>
		<script type="text/javascript" src="app/services/customersService.js"></script>

	</body>

</html>