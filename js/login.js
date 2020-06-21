var apiURL = 'loadData.php';

var app = angular.module('appLogin',['ngMessages'])
        .controller('loginController',function($scope,$http,$window){
            $http.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded;charset=utf-8;';
            $scope.msj = "";
            $scope.Login = {};
            
            $scope.submit = function(){
                var link = "";
                link = apiURL + '?login';
                
                $http({
                    method:'POST',
                    url: link,
                    data: $.param($scope.Login)
                })
                .then(function(resp){
                    if(resp.data.ok === true){
                        $scope.msj = "";
                        $window.location.reload();
                    }
                    else
                    {
                        $scope.msj = "DATOS DE INGRESO INCORRECTOS";
                        console.log(resp.data.ok);
                    }
                })
                .catch(function(resp){                    
                    console.log(resp);
                });
            };
        });


