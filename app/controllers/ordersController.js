(function() {
    
    var OrdersController = function ($scope, $log, $routeParams, customersFactory) {

        var customerId = $routeParams.customerId;
        $scope.customer = null;

        function init(){

            customersFactory.getCustomer(customerId)
                .success(function(customer){

                    $scope.customer = customer;  
                                      
                })
                .error(function(data, status, headers, config){

                    $log.log(data.error + " " + status);

                });

        } 
        
        init();

    };
    
    OrdersController.$inject = ['$scope', '$log', '$routeParams', 'customersFactory'];

    angular.module('customersApp')
      .controller('OrdersController', OrdersController);
    
}());