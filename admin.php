<html>

<head>
    <link href="css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="js/axios.min.js"></script>
    <script src="js/custom.js"></script>
    <link rel="stylesheet" href="style.css">

    <title>index</title>
</head>

<body>
    <div class="container-fluid">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="#"
                class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap"></use>
                </svg>
                <span class="fs-4">Divine Sanctuary</span>
            </a>

            <ul class="nav nav-pills">
                <li class="nav-item"><a href="home.html" class="nav-link active" aria-current="page">Home</a></li>
                <li class="nav-item"><a href="about.html" class="nav-link">About Temples</a></li>
                <li class="nav-item"><a href="festivals.html" class="nav-link">Festivals</a></li>
                <li class="nav-item"><a href="darshan.html" class="nav-link">Darshan Booking</a></li>
                <li class="nav-item"><a href="donation.html" class="nav-link">Donation</a></li>

                <li class="nav-item"><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        Login
                    </button></li>
                <li class="nav-item">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0">
                                </path>
                            </svg>
                        </span>
                        <input type="text" class="form-control search-field" placeholder="Input group example"
                            aria-label="Input group example" aria-describedby="basic-addon1">
                    </div>
                </li>
            </ul>
        </header>

        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="#"
                class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap"></use>
                </svg>
                <span class="fs-4">You are an Admin and you have special previliges</span>
            </a>

            <ul class="nav nav-pills button-align">
                <li class="nav-item"><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#events">
                        Events
                    </button></li>
                <li class="nav-item"><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#temples">
                        Temples
                    </button></li>
                <li class="nav-item"><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#donations">
                        Donation Dashboard
                    </button></li>
                <li class="nav-item"><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#calanders">
                        Calander
                    </button></li>
            </ul>
        </header>

    </div>
    <div class="modal fade" id="events" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form method="post" id="event_id" onsubmit="return false;">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Events</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="ename" class="form-label">Enter Event Name</label>
                            <input type="text" class="form-control" name="ename" id="ename" placeholder="dasara"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="edate" class="form-label">Date of Event</label>
                            <input type="date" class="form-control" name="edate" id="eDate" required>
                        </div>
                        <div class="mb-3">
                            <label for="edura" class="form-label">Enter Event Duration</label>
                            <input type="text" class="form-control" name="edura" id="edura" placeholder="1 day"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="eloc" class="form-label">Enter Location</label>
                            <input type="text" class="form-control" name="eloc" id="loc" placeholder="tirumala"
                                id="locationInput" required>
                        </div>
                        <div class="mb-3">
                            <label for="ecity" class="form-label">Enter City</label>
                            <input type="text" class="form-control" name="ecity" id="cityInput" placeholder="tirupati"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="etname" class="form-label">Temple Name</label>
                            <input type="text" class="form-control" name="etname" id="tnameInput" placeholder="tirumala"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="etime" class="form-label">Enter Time</label>
                            <input type="time" class="form-control" name="etime" id="timeInput" placeholder="2:30 PM"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="etext" class="form-label">Enter description</label>
                            <textarea class="form-control" name="etext" id="dtextarea" rows="4" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="sub">Add Event</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="temples" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form method="post" id="temple" onsubmit="return false;">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Temple</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="tname" class="form-label">Temple Name</label>
                            <input type="text" class="form-control" name="tname" id="tname" placeholder="tirumala"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="tlocation" class="form-label">Location</label>
                            <input type="text" class="form-control" name="tlocation" id="tlocation"
                                placeholder="tirumala" required>
                        </div>
                        <div class="mb-3">
                            <label for="pin" class="form-label">Pincode</label>
                            <input type="text" class="form-control" name="pin" id="pin" placeholder="123456" required>
                        </div>
                        <div class="mb-3">
                            <label for="tcity" class="form-label">Enter City</label>
                            <input type="text" class="form-control" name="tcity" id="tcity" placeholder="tirupati"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="tstate" class="form-label">Temple State</label>
                            <input type="text" class="form-control" name="tstate" id="tstate"
                                placeholder="Andhra Pradesh " required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" value="Add Temple" class="btn btn-primary" name="sub">
                    </div>
                </form>
            </div>
        </div>
    </div>







    <div class="modal fade" id="donations" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="donation.php" method="post" id="donation">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Donation</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="dname" class="form-label">Temple Name</label>
                            <input type="text" class="form-control" name="dname" id="dname" placeholder="tirumala"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="amt" class="form-label">Amount</label>
                            <input type="text" class="form-control" name="amt" id="amt" placeholder="500 rs" required>
                        </div>
                        <div class="mb-3">
                            <label for="dtime" class="form-label">Time</label>
                            <input type="time" class="form-control" name="dtime" id="dtime" placeholder="123456"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="did" class="form-label">Transaction ID</label>
                            <input type="text" class="form-control" name="did" id="Did" placeholder="2345678" required>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" value="donation" class="btn btn-primary" name="sub">
                    </div>
                </form>
            </div>
        </div>
    </div>





    <div class="modal fade" id="calanders" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form  method="post" id="calendar" onsubmit="return false;">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">calender</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="cdate" class="form-label">Date of Event</label>
                            <input type="date" class="form-control" name="cdate" id="cDate" required>
                        </div>
                        <div class="mb-3">
                            <label for="cname" class="form-label">Name</label>
                            <input type="text" class="form-control" name="cname" id="cName" placeholder="rathotsavam"
                                required>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" value="add to calander" class="btn btn-primary" name="sub">
                    </div>
                </form>
            </div>
        </div>
    </div>



    <div class="toast align-items-center text-bg-primary border-0" id="event_toast" class="sign-up-toast" role="alert"
        aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                You have successfully added the event </div>
        </div>
    </div>



    <div class="toast align-items-center text-bg-primary border-0" id="temple_toast" class="sign-up-toast" role="alert"
        aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                You have successfully added the temple </div>
        </div>
    </div>









    <div class="toast align-items-center text-bg-primary border-0" id="calendar_toast" class="sign-up-toast" role="alert"
        aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                You have successfully added into the calendar </div>
        </div>
    </div>
</body>

</html>