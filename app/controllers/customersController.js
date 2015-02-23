(function() {
    
    var CustomersController = function ($scope, customersFactory, appSettings) {
        $scope.sortBy = 'name';
        $scope.reverse = false;
        $scope.customers = [];
        $scope.appSettings = appSettings;

        function init(){
            customersFactory.getCustomers()
                .success(function(customers){

                    $scope.customers = customers;  

                })
                .errors(function(data, status, headers, config){

                    // handle error

                });
        }

        init();
        
        $scope.doSort = function(propName) {
           $scope.sortBy = propName;
           $scope.reverse = !$scope.reverse;
        };

    };
    
    CustomersController.$inject = ['$scope', 'customersFactory', 'appSettings'];

    angular.module('customersApp')
      .controller('CustomersController', CustomersController);
    
}());