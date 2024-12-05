var app = angular.module('reservationListApp', []);

app.controller('ReservationListController', function($scope, $http) {
    // Initialize variables
    $scope.reservations = [];
    $scope.searchText = '';
    $scope.filterRestaurant = '';
    $scope.sortBy = 'schedule';
    $scope.sortReverse = false;
    
    // Available restaurants for filter
    $scope.restaurants = ['Pierre', 'Altitude Grill', 'Isshin', 'Ojju', ''];
    
    // Load reservations from API
    function loadReservations() {
        $http.get('/api/reservations')
            .then(function(response) {
                $scope.reservations = response.data;
            })
            .catch(function(error) {
                console.error('Error loading reservations:', error);
            });
    }

    // Format date
    $scope.formatDate = function(dateString) {
        return new Date(dateString).toLocaleString('en-US', {
            year: 'numeric',
            month: 'short',
            day: '2-digit',
            hour: '2-digit',
            minute: '2-digit'
        });
    };

    // Search filter function
    $scope.searchFilter = function(reservation) {
        if (!$scope.searchText) return true;
        
        var searchText = $scope.searchText.toLowerCase();
        return (reservation.name && reservation.name.toLowerCase().includes(searchText)) ||
               (reservation.symptoms && reservation.symptoms.toLowerCase().includes(searchText)) ||
               (reservation.restaurants && reservation.restaurants.toLowerCase().includes(searchText));
    };

    // Restaurant filter function
    $scope.restaurantFilter = function(reservation) {
        if (!$scope.filterRestaurant) return true;
        return reservation.restaurant === $scope.filterRestaurant;
    };

    // Edit reservation
    $scope.editReservation = function(reservation) {
        // Implement edit functionality
        console.log('Edit reservation:', reservation);
    };

    // Delete reservation
    $scope.deleteReservation = function(reservation) {
        if (confirm('Are you sure you want to delete this reservation?')) {
            $http.delete('/api/reservations/' + reservation._id)
                .then(function() {
                    var index = $scope.reservations.indexOf(reservation);
                    $scope.reservations.splice(index, 1);
                })
                .catch(function(error) {
                    console.error('Error deleting reservation:', error);
                });
        }
    };

    // Initialize
    loadReservations();
});