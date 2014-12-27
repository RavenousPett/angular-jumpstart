function CustomersController($scope){

    $scope.sortBy = 'name';
    $scope.reverse = false;

    $scope.customers = [
        {joined: '2000-12-02', name: 'James', city: 'Chandler', orderTotal: '9.9950'},
        {joined: '2020-12-02', name: 'Liz', city: 'Bournemouth', orderTotal: '8'},
        {joined: '2010-12-02', name: 'David', city: 'Chandler', orderTotal: '9.9950'},
        {joined: '2000-12-02', name: 'James', city: 'Alton', orderTotal: '7.20'}
    ];

    $scope.doSort = function(propName){
        $scope.sortBy = propName;
        $scope.reverse = !$scope.reverse;
    }

}