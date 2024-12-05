<!DOCTYPE html>
<html lang="en" ng-app="reservationListApp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation List</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/reservation-list.css') }}" rel="stylesheet">
</head>
<body ng-controller="ReservationListController">
    <div class="container mt-4">
        <h2 class="mb-4">Reservation List</h2>

        <!-- Search and Filter Section -->
        <div class="row mb-4">
            <div class="col-md-4">
                <input type="text" 
                       class="form-control" 
                       ng-model="searchText" 
                       placeholder="Search reservations...">
            </div>
            <div class="col-md-3">
                <select class="form-select" ng-model="filterRestaurant">
                    <option value="">All Restaurants</option>
                    <option ng-repeat="restaurant in restaurants" value="@{{restaurant}}">@{{restaurant}}</option>
                </select>
            </div>
            <div class="col-md-3">
                <select class="form-select" ng-model="sortBy">
                    <option value="schedule">Sort by Date</option>
                    <option value="name">Sort by Name</option>
                    <option value="restaurant">Sort by Restaurant</option>
                </select>
            </div>
            <div class="col-md-2">
                <button class="btn btn-primary w-100" ng-click="sortReverse = !sortReverse">
                    @{{ sortReverse ? 'Desc' : 'Asc' }}
                </button>
            </div>
        </div>

        <!-- Reservations Table -->
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Person</th>
                        <th>Restaurant</th>
                        <th>Schedule</th>
                        <th>Phone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat="reservation in reservations | filter:searchFilter | filter:restaurantFilter | orderBy:sortBy:sortReverse">
                        <td>@{{reservation.name}}</td>
                        <td>@{{reservation.person}}</td>
                        <td>@{{reservation.restaurant}}</td>
                        <td>@{{formatDate(reservation.schedule)}}</td>
                        <td>@{{reservation.symptoms}}</td>
                        <td>
                            <button class="btn btn-sm btn-primary me-1" ng-click="editReservation(reservation)">
                                Edit
                            </button>
                            <button class="btn btn-sm btn-danger" ng-click="deleteReservation(reservation)">
                                Delete
                            </button>
                        </td>
                    </tr>
                    <tr ng-if="reservations.length === 0">
                        <td colspan="6" class="text-center">No reservations found</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- AngularJS -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="{{ asset('js/reservation-list.js') }}"></script>
</body>
</html>