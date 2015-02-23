(function() {
    
    var OrdersController = function ($scope, $routeParams, customersFactory) {

        var customerId = $routeParams.customerId;
        $scope.customer = null;

        function init(){

            customersFactory.getCustomer(customerId)
                .success(function(customer){

                    $scope.customers = customer;  
                                      
                })
                .errors(function(data, status, headers, config){

                    // handle error

                });

        } 
        
        init();

    };
    
    OrdersController.$inject = ['$scope', '$routeParams', 'customersFactory'];

    angular.module('customersApp')
      .controller('OrdersController', OrdersController);
    
}());