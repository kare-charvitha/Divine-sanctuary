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
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js'></script>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="js/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

    <title>index</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Divine Sanctuary</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="javascript:void(0)"
                            onclick="scrollToTargetAdjusted('home')">Home</a>


                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="javascript:void(0)"
                            onclick="scrollToTargetAdjusted('about_temples')">About Temples</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Link
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <button type="button" id="login-btn" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Login
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" id="cal_button" class="btn btn-primary"
                            onclick="openCalender()">Calendar</button>
                    </li>
                    <li class="nav-item"><button type="button" id="donation-btn" class="btn btn-primary"
                            onclick="getTempleData()">
                            Donation
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" id="darshan-btn" class="btn btn-primary"
                            onclick="getTempleData_darshan()">
                            Darshan Booking
                        </button>
                    </li>

                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container-fluid" id="home">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">

                    <span style="color:blue;font-size:30px">
                        <marquee>Welcome to Divine Sanctuary</marquee>
                    </span><br>

                    <span style="color:red;font-size:20px">Divine Sanctuary is your one-stop destination to explore and
                        connect with sacred temples from across
                        the country. Our platform brings together information on a variety of temples and keeps you
                        updated
                        with events happening at each location. Designed for devotees, Divine Sanctuary allows you to
                        book
                        darshan sessions, make donations to the temples, and keep a complete history of your bookings
                        and
                        donations in one place.</span><br>

                    <span style="color:teal;font-size:30px"> Features:</span><br>

                    Temple Insights: Discover detailed information about different temples, their history, rituals, and
                    daily schedules.<br>
                    Event Updates: Stay informed on upcoming events, special ceremonies, and festivals happening at your
                    favorite temples.<br>
                    Darshan Booking: Secure your visit in advance by booking darshan directly through our platform.<br>
                    Donation Portal: Offer your support with online donations, with an easy-to-access transaction
                    history.<br>
                    Booking and Donation History: View a comprehensive log of your darshan bookings and donation
                    transactions.<br>
                    Explore Divine Sanctuary and deepen your spiritual journey with ease and convenience.
                </div>
                <div class="col-md-6">Container 2</div>
            </div>
            <div class="row">
                <div class="col-md-6">vhidskjbmwiehfdvkbj</div>
                <div class="col-md-6">eguhihwekjdbjhsckbj</div>
            </div>
        </div>
    </div>

    <div id="about_temples">
        <center>

        </center>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/balaji.jpg" width="100%" height="850" alt="Balaji">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Tirupathi temple </h5>
                        <p>The Tirupati Balaji Temple, located in Tirumala, Andhra Pradesh, is dedicated to Lord
                            Venkateswara and is one of the most visited pilgrimage sites in India. Millions of
                            devotees
                            come annually to seek blessings, especially during the grand Venkateswara Brahmotsavam
                            festival. The temple features stunning architecture, including a golden dome, and offers
                            the
                            famous "Tirupati laddus" to visitors. Facilities such as accommodation and dining ensure
                            a
                            comfortable experience for pilgrims. Overall, it stands as a profound symbol of faith
                            and
                            devotion.</p>
                        <a href="tiru.html" target="_blank">
                            <button>About temple</button>
                        </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/Brihadeeswarar.jpg" width="100%" height="850"
                        alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Thisis the head </h5>
                        <p>This is the paragraph</p>
                        <a href="briha.html">
                            <button>About temple</button>
                        </a>

                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/shirdi.jpg" width="100%" height="850" alt="shirdi">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Thisis the head </h5>
                        <p>This is the paragraph</p>
                        <a href="shiridi.html">
                            <button>About temple</button>
                        </a>

                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/Kashi.jpg" width="100%" height="850" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Thisis the head </h5>
                        <p>This is the paragraph</p>
                        <a href="kashi.html">
                            <button>About temple</button>
                        </a>

                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/puri.jpg" width="100%" height="850" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Thisis the head </h5>
                        <p>This is the paragraph</p>
                        <a href="puri.html">
                            <button>About temple</button>
                        </a>

                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/meenakshi.jpg" width="100%" height="850" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Thisis the head </h5>
                        <p>This is the paragraph</p>
                        <a href="meenakshi.html">
                            <button>About temple</button>
                        </a>

                    </div>
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="images/siddhi.jpg" width="100%" height="850" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Thisis the head </h5>
                        <p>This is the paragraph</p>
                        <a href="siddhi.html">
                            <button>About temple</button>
                        </a>

                    </div>
                </div>


                <div class="carousel-item">
                    <img class="d-block w-100" src="images/rameshwaram.jpg" width="100%" height="850"
                        alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Thisis the head </h5>
                        <p>This is the paragraph</p>
                        <a href="rameshwaram.html">
                            <button>About temple</button>
                        </a>

                    </div>
                </div>


                <div class="carousel-item">
                    <img class="d-block w-100" src="images/padmanabha.jpg" width="100%" height="850" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Thisis the head </h5>
                        <p>This is the paragraph</p>
                        <a href="padmanabha.html">
                            <button>About temple</button>
                        </a>

                    </div>
                </div>


                <div class="carousel-item">
                    <img class="d-block w-100" src="images/vrindhavan.jpg" width="100%" height="850" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Thisis the head </h5>
                        <p>This is the paragraph</p>
                        <a href="vrindhavan.html">
                            <button>About temple</button>
                        </a>

                    </div>
                </div>


            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form method="post" id="login" onsubmit="return false;">
                    <div class="modal-body">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="log">Login</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div><br>
                        <div class="mb-3">
                            <label for="email_log" class="form-label">Enter Email</label>
                            <input type="email" class="form-control" name="email_log" id="email_log"
                                placeholder="name@example.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="password_log" class="form-label">Enter Password</label>
                            <input type="password" class="form-control" name="password_log" id="password_log"
                                placeholder="enter your password" required>
                        </div>
                        <center> <input type="submit" value="Login" class="btn btn-primary" name="sub"> </center>
                    </div>
                    <center> Don't Have An Account?

                        <button class="btn btn-text" onclick="showSignUp()"> Click Here To Register</button>
                    </center>


                </form>
                <form method="post" id="register" onsubmit="return false;">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Registration</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nameInput" class="form-label">Enter Name</label>
                            <input type="text" class="form-control" name="name" id="nameInput" placeholder="abcd"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="emailInput" class="form-label">Enter Email</label>
                            <input type="email" class="form-control" name="email" id="email_sign"
                                placeholder="name@example.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="mobileInput" class="form-label">Enter Mobile Number</label>
                            <input type="text" class="form-control" name="mobile" id="mobileInput"
                                placeholder="767xxxxxxx" pattern="[0-9]{10}" required>
                        </div>
                        <div class="mb-3">
                            <label for="addressTextarea" class="form-label">Enter Address</label>
                            <textarea class="form-control" name="address" id="addressTextarea" rows="3"
                                required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="passwordInput" class="form-label">Set Password</label>
                            <input type="password" class="form-control" name="password" id="set_password"
                                placeholder="Set password here" required>
                        </div>
                        <div class="mb-3">
                            <label for="passwordInput" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" name="confirm" id="confirm_password"
                                placeholder="confirm password here" required>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="sub">Sign Up</button>
                    </div>


                    <center>Already Have An Account?<br>
                        <button class="btn btn-text" onclick="showLogin()">Login</button>
                    </center>
                </form>

            </div>
        </div>
    </div>




    <div class="modal fade" id="userdonation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form method="post" id="udonation" onsubmit="return false;">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Donation</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="duname" class="form-label">User Name</label>
                            <input type="text" class="form-control" name="duname" id="duname" placeholder="mahesh"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="dtname" class="form-label">Temple Name</label>
                            <select name="dtname" class="form-control" id="dtname" required placeholder="temple name">

                            </select>

                        </div>
                        <div class="mb-3">
                            <label for="damt" class="form-label">Amount</label>
                            <input type="text" class="form-control" name="damt" id="damt" placeholder="500 rs" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" value="donate" class="btn btn-primary" name="sub">
                    </div>
                </form>
            </div>
        </div>
    </div>




    <div class="modal fade" id="darshan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form method="post" id="udarshan" onsubmit="return false;">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Darshan</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="darshan_uname" class="form-label">User Name</label>
                            <input type="text" class="form-control" name="darshan_uname" id="darshan_uname"
                                placeholder="mahesh" required>
                        </div>
                        <div class="mb-3">
                            <label for="darshan_temple" class="form-label">Temple Name</label>
                            <select name="darshan_temple" class="form-control" id="darshan_temple" required
                                placeholder="temple name">

                            </select>

                        </div>
                        <div class="mb-3">
                            <label for="darshan_date" class="form-label">Date</label>
                            <input type="date" class="form-control" name="darshan_date" id="darshan_date" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" value="Book For Darshan" class="btn btn-primary" name="Book For Darshan">
                    </div>
                </form>
            </div>
        </div>
    </div>








    <div class="modal fade" id="calendarmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div id="calendar">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div class="toast align-items-center text-bg-primary border-0" id="toast" class="sign-up-toast" role="alert"
        aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                You have successfully registered please click on Login to continue
            </div>
        </div>
    </div>


    <div class="toast align-items-center text-bg-primary border-0" id="donation_toast" class="sign-up-toast"
        role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                You have successfully donated
            </div>
        </div>
    </div>

    <div class="toast align-items-center text-bg-primary border-0" id="darshan_toast" class="sign-up-toast" role="alert"
        aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                You have successfully Booked For Darshan
            </div>
        </div>
    </div>

    <div class="toast align-items-center text-bg-primary border-0" id="login_toast" class="sign-up-toast" role="alert"
        aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body" id="toast_id">
          </div>
        </div>
    </div>


</body>

</html>