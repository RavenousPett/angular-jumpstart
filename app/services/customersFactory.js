(function(){

	var customersFactory = function($http){

        var factory = {};

        factory.getCustomers = function(){

            return $http.get('http://localhost:8080/customers');

        };

        factory.getCustomer = function(customerId){

            return $http.get('http://localhost:8080/customer/' + customerId);

        }

        factory.getOrders = function() {

            return $http.get('http://localhost:8080/orders');

        }
        
        factory.deleteCustomer = function(customerId) {

            return $http.delete('http://localhost:8080/customers/' + customerId);
        }

        return factory;

	};

    customersFactory.$inject = ['$http'];

	angular.module('customersApp').factory('customersFactory', customersFactory);

}());