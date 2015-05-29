angular.module('validate',[])
.config(function($interpolateProvider){
    $interpolateProvider.startSymbol('{[{').endSymbol('}]}')
})

.directive("repeatPassword", function() {
    return {
        require: "ngModel",
        link: function(scope, elem, attrs, ctrl) {
            var otherInput = elem.inheritedData("$formController")[attrs.repeatPassword];

            ctrl.$parsers.push(function(value) {
                if(value === otherInput.$viewValue) {
                    ctrl.$setValidity("repeat", true);
                    return value;
                }
                ctrl.$setValidity("repeat", false);
            });

            otherInput.$parsers.push(function(value) {
                ctrl.$setValidity("repeat", value === ctrl.$viewValue);
                return value;
            });
        }
    };
})

.controller('signinForm', function($scope,$http){

	$scope.submitForm = function() {
        // check to make sure the form is completely valid
        if ($scope.userForm.$valid) {
            
            $http.post('create_user',{
                name: $scope.user.name,
				plast: $scope.user.plast,
                mlast: $scope.user.mlast,
				email: $scope.user.email,
				password: $scope.user.password,
			})
			.success(function(result){
				//console.log(result)
                if(result == 1)
				    window.location = "/private/";
                else
                    window.location = "/message";
			})
			.error(function(error){
				console.log(error)
				window.location = "/message";
			})
        }
    };

    $scope.find = function(){
        $http.get('find/'+$scope.user.email)
        .success(function(result){
            console.log(result)
            if(result == 1){
                $scope.checkemail = 'Email Ya registrado.';
            }
            else{
                $scope.checkemail = '';
            }
        })
        .error(function(error){
            console.log(error)
        });
    }
})

.controller('securedPasswordForm', function($scope,$http){
	$scope.submitForm = function() {
        // check to make sure the form is completely valid
        if ($scope.userForm.$valid) {
            
            $http.post('password',{
				password: $scope.user.password,
				newPassword: $scope.user.newPassword,
			})
			.success(function(result){
				//console.log(result)
				window.location = "";
			})
			.error(function(error){
				console.log(error)
				window.location = "";
			})
        }
    };
})