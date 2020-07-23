var apiURL = 'loadData.php';
var app = angular.module('appProductos',['angularUtils.directives.dirPagination','ngMessages','appLogin'])
        .controller('productosController',function($scope,$http,$window){
            $scope.NumxPag = 5;
            $scope.productos = [];
            
            $scope.sort = function(keyname){
                $scope.sortKey = keyname;
                $scope.reverse = !$scope.reverse;
            };
            
            $scope.consultaProductos = function(){
                $http(method='GET',
                      url= apiURL + "?a=get&t=prodma")
                    .then(function(resp){
                        $scope.productos = resp.data;
                    })
                            .catch(function(resp){
                                console.log(resp);
                            });                                                                                  
            };
        });


