var app = angular.module('appProductos',['angularUtils.directives.dirPagination','ngMessages','appLogin'])
        .controller('productosController',function($scope,$http,$window){
            $scope.logout = function(){
                var link = "";
                link = apiURL + '?logout';
                
                $http({
                   method:'GET',
                   url: link
                })
                .then(function(resp){
                    $window.location.reload();
                })
                .catch(function(resp){
                    console.log(resp);
                });
                        
            };
        });


