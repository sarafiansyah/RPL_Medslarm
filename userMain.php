<?php
  include "_php/function.php";
  session_start();
  verifyCookie();

  if(!isset($_SESSION['username'])){
    header('Location: index.php');
    return;
  }

  $no=1;
  $username = $_SESSION['username'];
  $showdataadm = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'"));



?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  </head>
  <body>
    <div class="mainbg1">
<?php  include("fw/nav-log.php") ?>
</div>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,160L120,165.3C240,171,480,181,720,170.7C960,160,1200,128,1320,112L1440,96L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path></svg>

<div class="CalendarPlanSet01" style="margin-top: -450px;">
<div class="calendar ">
  <div class="calendar__opts">
    <select name="calendar__month" id="calendar__month">
      <option>Jan</option>
      <option>Feb</option>
      <option>Mar</option>
      <option>Apr</option>
      <option selected>May</option>
      <option>Jun</option>
      <option>Jul</option>
      <option>Aug</option>
      <option>Sep</option>
      <option>Oct</option>
      <option>Nov</option>
      <option>Dec</option>
    </select>

    <select name="calendar__year" id="calendar__year">
      <option>2017</option>
      <option>2018</option>
      <option>2019</option>
      <option selected>2020</option>
    </select>
  </div>

  <div class="calendar__body">
    <div class="calendar__days">
      <div>M</div>
      <div>T</div>
      <div>W</div>
      <div>T</div>
      <div>F</div>
      <div>S</div>
      <div>S</div>
    </div>

    <div class="calendar__dates">
      <div class="calendar__date calendar__date--grey"><span>27</span></div>
      <div class="calendar__date calendar__date--grey"><span>28</span></div>
      <div class="calendar__date calendar__date--grey"><span>29</span></div>
      <div class="calendar__date calendar__date--grey"><span>30</span></div>
      <div class="calendar__date"><span>1</span></div>
      <div class="calendar__date"><span>2</span></div>
      <div class="calendar__date"><span>3</span></div>
      <div class="calendar__date"><span>4</span></div>
      <div class="calendar__date"><span>5</span></div>
      <div class="calendar__date"><span>6</span></div>
      <div class="calendar__date"><span>7</span></div>
      <div class="calendar__date"><span>8</span></div>
      <div class="calendar__date"><span>9</span></div>
      <div class="calendar__date"><span>10</span></div>
      <div class="calendar__date"><span>11</span></div>
      <div class="calendar__date"><span>12</span></div>
      <div class="calendar__date"><span>13</span></div>
      <div class="calendar__date"><span>14</span></div>
      <div class="calendar__date"><span>15</span></div>
      <div class="calendar__date calendar__date--selected calendar__date--first-date calendar__date--range-start"><span>16</span></div>
      <div class="calendar__date calendar__date--selected calendar__date--last-date"><span>17</span></div>
      <div class="calendar__date calendar__date--selected calendar__date--first-date"><span>18</span></div>
      <div class="calendar__date calendar__date--selected"><span>19</span></div>
      <div class="calendar__date calendar__date--selected"><span>20</span></div>
      <div class="calendar__date calendar__date--selected calendar__date--last-date calendar__date--range-end"><span>21</span></div>
      <div class="calendar__date"><span>22</span></div>
      <div class="calendar__date"><span>23</span></div>
      <div class="calendar__date"><span>24</span></div>
      <div class="calendar__date"><span>25</span></div>
      <div class="calendar__date"><span>26</span></div>
      <div class="calendar__date"><span>27</span></div>
      <div class="calendar__date"><span>28</span></div>
      <div class="calendar__date"><span>29</span></div>
      <div class="calendar__date"><span>30</span></div>
      <div class="calendar__date"><span>31</span></div>
    </div>
  </div>

  <div class="calendar__buttons">
    <button class="calendar__button calendar__button--grey">Back</button>

    <button class="calendar__button calendar__button--primary">Apply</button>
  </div>
</div>
</div>

<div class="mobile-wrapper">

   <!--======= Header =======-->

   <header class="header">
      <div class="containerCalendar">
         <span>Welcome Back!</span>
         <h1>Calendar Plan</h1>

         <div class="menu-toggle">
            <div>
               <span></span>
               <span></span>
               <span></span>
            </div>
         </div>
      </div>
   </header>

   <!--======= Today =======-->

   <section class="today-box" id="today-box">
      <span class="breadcrumb">Today</span>
      <h3 class="date-title">May 15, 2018</h3>

      <div class="plus-icon">
         <i class="ion ion-ios-add"></i>
      </div>
   </section>

   <!--======= Upcoming Events =======-->

   <section class="upcoming-events">
      <div class="container">
         <h3>
            Lastest Events

         </h3>
         <div class="events-wrapper">
            <div class="event">
               <i class="ion ion-ios-flame hot"></i>
               <h4 class="event__point">11:00 am</h4>
               <span class="event__duration">in 30 minutes.</span>
               <p class="event__description">
                  Monday briefing with the team (...).
               </p>
            </div>
            <div class="event">
               <i class="ion ion-ios-flame done"></i>
               <h4 class="event__point">12:00 pm</h4>
               <span class="event__duration">in 1 hour.</span>
               <p class="event__description">
                  Lunch with Paul Mccartney @Burgers House!
               </p>
            </div>
            <div class="event active">
               <i class="ion ion-ios-radio-button-on icon-in-active-mode"></i>
               <h4 class="event__point">14:00 pm</h4>
               <p class="event__description">
                  Meet clients from project.
               </p>
            </div>
            <div class="event">
               <i class="ion ion-ios-flame-outline upcoming"></i>
               <h4 class="event__point">20:45 pm</h4>
               <span class="event__duration">in 45 minutes.</span>
               <p class="event__description">
                  Watch sci-fi series.
               </p>
            </div>
            <div class="event">
               <i class="ion ion-ios-flame-outline upcoming"></i>
               <h4 class="event__point">23:15 pm</h4>
               <span class="event__duration">in 20 minutes.</span>
               <p class="event__description">
                  Customer dialog on Skype.
               </p>
            </div>
         </div>
         <button class="add-event-button">
            <span class="add-event-button__title">Add Event</span>

            <span class="add-event-button__icon">
               <i class="ion ion-ios-star-outline"></i>
            </span> 


         </button>
      </div>
   </section>
</div>


<div class="container">

  <div class="calendar-base">

    <div class="year">2017</div>
    <!-- year -->

    <div class="triangle-left"></div>
    <!--triangle -->
    <div class="triangle-right"></div>
    <!--  triangle -->

    <div class="months">
      <span class="month-hover">Jan</span>
      <span class="month-hover">Feb</span> 
      <span class="month-hover">Mar</span> 
      <strong class="month-color">Apr</strong>
      <span class="month-hover">May</span>
      <span class="month-hover">Jun</span>
      <span class="month-hover">July</span> 
      <span class="month-hover">Aug</span> 
      <span class="month-hover">Sep</span> 
      <span class="month-hover">Oct</span> 
      <span class="month-hover">Nov</span> 
      <span class="month-hover">Dec</span>
    </div><!-- months -->
    <hr class="month-line" />

    <div class="days">SUN MON TUE WED THU FRI SAT</div>
    <!-- days -->

    <div class="num-dates">

      <div class="first-week"><span class="grey">26 27 28 29 30 31</span> 01</div>
      <!-- first week -->
      <div class="second-week">02 03 04 05 06 07 08</div>
      <!-- week -->
      <div class="third-week"> 09 10 11 12 13 14 15</div>
      <!-- week -->
      <div class="fourth-week"> 16 17 18 19 20 21 22</div>
      <!-- week -->
      <div class="fifth-week"> 23 24 25 26 <strong class="white">27</strong> 28 29</div>
      <!-- week -->
      <div class="sixth-week"> 30 <span class="grey">01 02 03 04 05 06</span></div>
      <!-- week -->
    </div>
    <!-- num-dates -->
    <div class="event-indicator"></div>
    <!-- event-indicator -->
    <div class="active-day"></div>
    <!-- active-day -->
    <div class="event-indicator two"></div>
    <!-- event-indicator -->

  </div>
  <!-- calendar-base -->
  <div class="calendar-left">

    <div class="hamburger">
      <div class="burger-line"></div>
      <!-- burger-line -->
      <div class="burger-line"></div>
      <!-- burger-line -->
      <div class="burger-line"></div>
      <!-- burger-line -->
    </div>
    <!-- hamburger -->


    <div class="num-date">27</div>
    <!--num-date -->
    <div class="day">THURSDAY</div>
    <!--day -->
    <div class="current-events">Current Events
      <br/>
      <ul>
        <li>Day 09 Daily CSS Image</li>
      </ul>
      <span class="posts">See post events</span></div>
    <!--current-events -->

    <div class="create-event">Create an Event</div>
    <!-- create-event -->
    <hr class="event-line" />
    <div class="add-event"><span class="add">+</span></div>
    <!-- add-event -->

  </div>
  <!-- calendar-left -->

</div>
<!-- container -->

<div class="container mx-auto" style="padding: 20px;">
<div class="col-md-10 mx-auto ">
    <div class="row  mx-auto">
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-cherry">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-shopping-cart"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">New Orders</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                3,243
                            </h2>
                        </div>
                        <div class="col-4 text-right">
                            <span>12.5% <i class="fa fa-arrow-up"></i></span>
                        </div>
                    </div>
                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                        <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-blue-dark">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-users"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">Customers</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                15.07k
                            </h2>
                        </div>
                        <div class="col-4 text-right">
                            <span>9.23% <i class="fa fa-arrow-up"></i></span>
                        </div>
                    </div>
                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                        <div class="progress-bar l-bg-green" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-green-dark">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-ticket-alt"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">Ticket Resolved</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                578
                            </h2>
                        </div>
                        <div class="col-4 text-right">
                            <span>10% <i class="fa fa-arrow-up"></i></span>
                        </div>
                    </div>
                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                        <div class="progress-bar l-bg-orange" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-orange-dark">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-dollar-sign"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">Revenue Today</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                $11.61k
                            </h2>
                        </div>
                        <div class="col-4 text-right">
                            <span>2.5% <i class="fa fa-arrow-up"></i></span>
                        </div>
                    </div>
                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                        <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="container">
<div class="row">
    <div class="col-lg-4">
        <div class="card card-margin">
            <div class="card-header no-border">
                <h5 class="card-title">MOM</h5>
            </div>
            <div class="card-body pt-0">
                <div class="widget-49">
                    <div class="widget-49-title-wrapper">
                        <div class="widget-49-date-primary">
                            <span class="widget-49-date-day">09</span>
                            <span class="widget-49-date-month">apr</span>
                        </div>
                        <div class="widget-49-meeting-info">
                            <span class="widget-49-pro-title">PRO-08235 DeskOpe. Website</span>
                            <span class="widget-49-meeting-time">12:00 to 13.30 Hrs</span>
                        </div>
                    </div>
                    <ol class="widget-49-meeting-points">
                        <li class="widget-49-meeting-item"><span>Expand module is removed</span></li>
                        <li class="widget-49-meeting-item"><span>Data migration is in scope</span></li>
                        <li class="widget-49-meeting-item"><span>Session timeout increase to 30 minutes</span></li>
                    </ol>
                    <div class="widget-49-meeting-action">
                        <a href="#" class="btn btn-sm btn-flash-border-primary">View All</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card card-margin">
            <div class="card-header no-border">
                <h5 class="card-title">MOM</h5>
            </div>
            <div class="card-body pt-0">
                <div class="widget-49">
                    <div class="widget-49-title-wrapper">
                        <div class="widget-49-date-warning">
                            <span class="widget-49-date-day">13</span>
                            <span class="widget-49-date-month">apr</span>
                        </div>
                        <div class="widget-49-meeting-info">
                            <span class="widget-49-pro-title">PRO-08235 Lexa Corp.</span>
                            <span class="widget-49-meeting-time">12:00 to 13.30 Hrs</span>
                        </div>
                    </div>
                    <ol class="widget-49-meeting-points">
                        <li class="widget-49-meeting-item"><span>Scheming module is removed</span></li>
                        <li class="widget-49-meeting-item"><span>App design contract confirmed</span></li>
                        <li class="widget-49-meeting-item"><span>Client request to send invoice</span></li>
                    </ol>
                    <div class="widget-49-meeting-action">
                        <a href="#" class="btn btn-sm btn-flash-border-warning">View All</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card card-margin">
            <div class="card-header no-border">
                <h5 class="card-title">MOM</h5>
            </div>
            <div class="card-body pt-0">
                <div class="widget-49">
                    <div class="widget-49-title-wrapper">
                        <div class="widget-49-date-success">
                            <span class="widget-49-date-day">22</span>
                            <span class="widget-49-date-month">apr</span>
                        </div>
                        <div class="widget-49-meeting-info">
                            <span class="widget-49-pro-title">PRO-027865 Opera module</span>
                            <span class="widget-49-meeting-time">12:00 to 13.30 Hrs</span>
                        </div>
                    </div>
                    <ol class="widget-49-meeting-points">
                        <li class="widget-49-meeting-item"><span>Scope is revised and updated</span></li>
                        <li class="widget-49-meeting-item"><span>Time-line has been changed</span></li>
                        <li class="widget-49-meeting-item"><span>Received approval to start wire-frame</span></li>
                    </ol>
                    <div class="widget-49-meeting-action">
                        <a href="#" class="btn btn-sm btn-flash-border-success">View All</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="container mt-5 mb-3">
    <div class="row">
        <div class="col-md-4">
            <div class="card p-3 mb-2">
                <div class="d-flex justify-content-between">
                    <div class="d-flex flex-row align-items-center">
                        <div class="icon"> <i class="bx bxl-mailchimp"></i> </div>
                        <div class="ms-2 c-details">
                            <h6 class="mb-0">Mailchimp</h6> <span>1 days ago</span>
                        </div>
                    </div>
                    <div class="badge"> <span>Design</span> </div>
                </div>
                <div class="mt-5">
                    <h3 class="heading">Senior Product<br>Designer-Singapore</h3>
                    <div class="mt-5">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="mt-3"> <span class="text1">32 Applied <span class="text2">of 50 capacity</span></span> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 mb-2">
                <div class="d-flex justify-content-between">
                    <div class="d-flex flex-row align-items-center">
                        <div class="icon"> <i class="bx bxl-dribbble"></i> </div>
                        <div class="ms-2 c-details">
                            <h6 class="mb-0">Dribbble</h6> <span>4 days ago</span>
                        </div>
                    </div>
                    <div class="badge"> <span>Product</span> </div>
                </div>
                <div class="mt-5">
                    <h3 class="heading">Junior Product<br>Designer-Singapore</h3>
                    <div class="mt-5">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="mt-3"> <span class="text1">42 Applied <span class="text2">of 70 capacity</span></span> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 mb-2">
                <div class="d-flex justify-content-between">
                    <div class="d-flex flex-row align-items-center">
                        <div class="icon"> <i class="bx bxl-reddit"></i> </div>
                        <div class="ms-2 c-details">
                            <h6 class="mb-0">Reddit</h6> <span>2 days ago</span>
                        </div>
                    </div>
                    <div class="badge"> <span>Design</span> </div>
                </div>
                <div class="mt-5">
                    <h3 class="heading">Software Architect <br>Java - USA</h3>
                    <div class="mt-5">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="mt-3"> <span class="text1">52 Applied <span class="text2">of 100 capacity</span></span> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  <!-- Footer -->
  <footer
          class="text-center text-lg-start text-white"
          style="background-color: #1c2331"
          >
    <!-- Section: Social media -->
    <section
             class="d-flex justify-content-between p-4"
             style="background-color: #4285F4"
             >
      <!-- Left -->
      <div class="me-5">
        <span>Get connected with us on social networks:</span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        <a href="" class="text-white me-4">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold">Company name</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              Here you can use rows and columns to organize your footer
              content. Lorem ipsum dolor sit amet, consectetur adipisicing
              elit.
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Products</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              <a href="#!" class="text-white">MDBootstrap</a>
            </p>
            <p>
              <a href="#!" class="text-white">MDWordPress</a>
            </p>
            <p>
              <a href="#!" class="text-white">BrandFlow</a>
            </p>
            <p>
              <a href="#!" class="text-white">Bootstrap Angular</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Useful links</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              <a href="#!" class="text-white">Your Account</a>
            </p>
            <p>
              <a href="#!" class="text-white">Become an Affiliate</a>
            </p>
            <p>
              <a href="#!" class="text-white">Shipping Rates</a>
            </p>
            <p>
              <a href="#!" class="text-white">Help</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Contact</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
            <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
            <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
            <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div
         class="text-center p-3"
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
      © 2020 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/"
         >MDBootstrap.com</a
        >
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->


<!-- End of .container -->
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>