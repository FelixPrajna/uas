<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link rel="stylesheet" href="css/reservation.css">
    <link rel="icon" href="./images/favicon.ico">
    <title>BiteOfBliss Reservation</title>
</head>
<body>
    <div id="wrapper">
        <div id="left"></div>
        <div id="right">
            <h1>Reservation Appointment</h1>

            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <form id="form" method="POST" action="{{ route('reservations.store') }}">
                @csrf
                <div>
                    <span>Full Name:</span>
                    <input
                        type="text"
                        name="name"
                        autocomplete="off"
                        placeholder="Your name"
                        id="name"
                    >
                </div>

                <div>
                    <span>Total Person:</span>
                    <input
                        type="number"
                        name="person"
                        autocomplete="off"
                        placeholder="?"
                        id="person"
                    >
                </div>

                <div>
                    <span>Address:</span>
                    <input
                        type="text"
                        name="address"
                        autocomplete="off"
                        placeholder="Your Address"
                        id="address"
                    >
                </div>

                <div>
                    <span>Schedule:</span>
                    <input
                        type="datetime-local"
                        name="schedule"
                        id="schedule"
                    >
                </div>

                <div class="mb-3">
                    <label class="form-label">Restaurant</label>
                    <select class="form-control" name="restaurant" required>
                        <option value="">Pilih Restaurant</option>
                        <option value="Pierre">Pierre</option>
                        <option value="Altitude Grill">Altitude Grill</option>
                        <option value="Isshin">Isshin</option>
                    </select>
                </div>

                <div>
                    <span>Phone Numbers:</span>
                    <input
                        type="text"
                        name="phone_number"
                        autocomplete="off"
                        placeholder="08#######"
                        id="phone_number"
                    >
                </div>

                <div>
                    <span>Description:</span>
                    <textarea
                        name="description"
                        id="description"
                        placeholder="Additional details about your condition..."
                        rows="4"
                    ></textarea>
                </div>

                <button type="submit" class="send-button">Send</button>
                <button type="button" class="cancel-button" onclick="redirectToHome()">Cancel</button>

            </form>
        </div>
    </div>
    
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="js/reservation.js"></script>
</body>
</html>