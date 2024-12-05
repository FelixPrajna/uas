var app = angular.module('reservationApp', []);

function redirectToHome() {
    window.location.href = '/home';
}

app.controller('ReservationController', function($scope, $http) {
    // Initialize reservation object
    $scope.reservation = {};
    
    // List of available restaurants
    $scope.restaurants = [
        'Pierre',
        'Altitude Grill',
        'Isshin',
        'Ojju'
    ];

    // Form submission handler
    $scope.submitForm = function() {
        if ($scope.reserForm.$valid) {
            // Prepare the data
            var reservationData = {
                name: $scope.reservation.name,
                person: parseInt($scope.reservation.person),
                address: $scope.reservationn.address,
                schedule: $scope.reservation.schedule,
                restaurant: $scope.reservation.restaurant,
                symptoms: $scope.reservation.symptoms,
                description: $scope.reservation.description || ''
            };

            // Send POST request to API
            $http.post('/api/reservations', reservationData)
                .then(function(response) {
                    // Show success message
                    Toastify({
                        text: "Reservation scheduled successfully!",
                        duration: 3000,
                        style: {
                            background: "#7FA98E"
                        }
                    }).showToast();
                    
                    // Reset form
                    $scope.reservation = {};
                    $scope.reserForm.$setPristine();
                    $scope.reserForm.$setUntouched();
                })
                .catch(function(error) {
                    // Show error message
                    Toastify({
                        text: "Error: " + (error.data.message || "Something went wrong!"),
                        duration: 3000,
                        style: {
                            background: "#ff4444"
                        }
                    }).showToast();
                });
        }
    };

    // Helper function to format date for datetime-local input
    $scope.formatDate = function(date) {
        if (!date) return '';
        var d = new Date(date);
        var month = '' + (d.getMonth() + 1);
        var day = '' + d.getDate();
        var year = d.getFullYear();
        var hour = '' + d.getHours();
        var minute = '' + d.getMinutes();

        if (month.length < 2) month = '0' + month;
        if (day.length < 2) day = '0' + day;
        if (hour.length < 2) hour = '0' + hour;
        if (minute.length < 2) minute = '0' + minute;

        return [year, month, day].join('-') + 'T' + [hour, minute].join(':');
    };
});

// Add this at the bottom of your file
document.addEventListener('DOMContentLoaded', function() {
    // Close button functionality for alerts
    document.querySelectorAll('.btn-close').forEach(function(button) {
        button.addEventListener('click', function() {
            var alert = this.closest('.alert');
            alert.style.opacity = '0';
            setTimeout(function() {
                alert.style.display = 'none';
            }, 150);
        });
    });

    // Auto-hide alerts after 3 seconds
    setTimeout(function() {
        document.querySelectorAll('.alert').forEach(function(alert) {
            alert.style.opacity = '0';
            setTimeout(function() {
                alert.style.display = 'none';
            }, 150);
        });
    }, 3000);
});