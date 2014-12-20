<!DOCTYPE html>
<html ng-app>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
		<title>Using Directives</title>
	</head>

	<body ng-init="name='Richard'">
		<h1>{{ 1 + 1 }}</h1>

		<div ng-hide="isHidden">
			<input type="text" ng-model="name"> 
			<br />{{ name }}
			<br /><span ng-bind="name"></span>
		</div>

		<input type="checkbox" ng-model="isHidden">

		<button ng-click="name='Michelle'">Change Name</button>

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.28/angular.min.js"></script>
	</body>

</html>