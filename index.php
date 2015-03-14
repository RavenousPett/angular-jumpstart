<!DOCTYPE html>
<html ng-app="customersApp">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
		<title>Using Directives</title>

		<!-- Css -->
		<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
	</head>

	<header>
        <nav class="navbar navbar-default">
            <ul class="nav navbar-nav">
                <li><a href="#/customers">Customers</a></li>
                <li><a href="#/orders">Orders</a></li>
            </ul>
        </nav>
    </header>

	<body>

		<div ng-view></div>

		<!--	AngularJS	-->
		<script type="text/javascript" src="scripts/angular.js"></script>
		<!--	ngRoute	-->
		<script type="text/javascript" src="scripts/angular-route.js"></script>
		<script type="text/javascript" src="app/app.js"></script>
		<script type="text/javascript" src="app/controllers/customersController.js"></script>
		<script type="text/javascript" src="app/controllers/ordersController.js"></script>
		<script type="text/javascript" src="app/controllers/allOrdersController.js"></script>
		<script type="text/javascript" src="app/services/customersFactory.js"></script>
		<script type="text/javascript" src="app/services/customersService.js"></script>
		<script type="text/javascript" src="app/services/values.js"></script>


	</body>

</html>