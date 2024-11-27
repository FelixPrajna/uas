angular.module('authApp', [])
    .controller('AuthController', ['$scope', '$http', function($scope, $http) {
        $scope.isAuthenticated = false;
        $scope.showLoginForm = false;
        $scope.showRegisterForm = false;

        $scope.user = {};
        $scope.newUser = {};

        $scope.showLogin = function() {
            $scope.showLoginForm = true;
            $scope.showRegisterForm = false;
        };

        $scope.showRegister = function() {
            $scope.showLoginForm = false;
            $scope.showRegisterForm = true;
        };

        $scope.login = function() {
            $http.post('/api/login', $scope.user)
                .then(function(response) {
                    alert(response.data.message);
                    $scope.isAuthenticated = true;
                    $scope.showLoginForm = false;
                })
                .catch(function(error) {
                    alert(error.data.error || 'Login failed');
                });
        };

        $scope.register = function() {
            $http.post('/api/register', $scope.newUser)
                .then(function(response) {
                    alert(response.data.message);
                    $scope.showRegisterForm = false;
                    $scope.showLoginForm = true;
                })
                .catch(function(error) {
                    alert(error.data.error || 'Registration failed');
                });
        };

        $scope.logout = function() {
            $http.post('/api/logout')
                .then(function(response) {
                    alert(response.data.message);
                    $scope.isAuthenticated = false;
                })
                .catch(function(error) {
                    alert(error.data.error || 'Logout failed');
                });
        };
    }]);
