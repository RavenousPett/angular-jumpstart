(function() {
    
    var OrdersController = function ($scope, $routeParams, customersFactory) {

        var customerId = $routeParams.customerId;
        $scope.customer = null;

        function init(){

            customersFactory.getCustomer(customerId)
                .success(function(customer){

                    $scope.customer = customer;  
                                      
                })
                .error(function(data, status, headers, config){



                });

        } 
        
        init();

    };
    
    OrdersController.$inject = ['$scope', '$routeParams', 'customersFactory'];

    angular.module('customersApp')
      .controller('OrdersController', OrdersController);
    
}());