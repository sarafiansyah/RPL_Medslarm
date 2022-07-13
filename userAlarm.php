<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


    <style>
        #current-time {
            font-size: 32px;
        }

        #current-time,
        .create-alarm,
        h1,
        #active-alarm {
            text-align: center;
        }

        .create-alarm,
        .alarm-inputs,
        #active-alarm {
            margin-top: 20px;
        }

        input {
            width: 100px;
            height: 30px;
        }

        .alarm-inputs,
        #alarm-text {
            margin-bottom: 30px;
        }

        button {
            font-size: 18px;
        }

        #active-alarm {
            display: none;
        }

        a {
            text-decoration: none;
        }
    </style>

</head>

<body>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Parcel Sandbox</title>
    </head>

    <body>
        <div id="app">
            <h1>Current Time</h1>
            <div id="current-time"></div>
            <div class="create-alarm">
                <div>Set Alarm</div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="content w-100 shadow">
                            <div class="calendar-container">
                                <div class="calendar">
                                    <div class="year-header">
                                        <span class="left-button fa fa-chevron-left" id="prev"> </span>
                                        <span class="year mx-auto" id="label" style="margin-top: -20px; margin-left: -200px;"></span>
                                        <span class="right-button fa fa-chevron-right" id="next"> </span>
                                    </div>
                                    <table class="months-table w-100">
                                        <tbody>
                                            <tr class="months-row">
                                                <td class="month">Jan</td>
                                                <td class="month">Feb</td>
                                                <td class="month">Mar</td>
                                                <td class="month">Apr</td>
                                                <td class="month">May</td>
                                                <td class="month">Jun</td>
                                                <td class="month">Jul</td>
                                                <td class="month">Aug</td>
                                                <td class="month">Sep</td>
                                                <td class="month">Oct</td>
                                                <td class="month">Nov</td>
                                                <td class="month">Dec</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <table class="days-table w-100">
                                        <td class="day">Sun</td>
                                        <td class="day">Mon</td>
                                        <td class="day">Tue</td>
                                        <td class="day">Wed</td>
                                        <td class="day">Thu</td>
                                        <td class="day">Fri</td>
                                        <td class="day">Sat</td>
                                    </table>
                                    <div class="frame">
                                        <table class="dates-table w-100">
                                            <tbody class="tbody">
                                            </tbody>
                                        </table>
                                    </div>
                                    <button class="button" id="add-button"><i class="fa-solid fa-plus"></i> Add Reminder</button>
                                </div>
                            </div>
                            <div class="events-container">
                            </div>
                            <div class="dialog" id="dialog">
                                <h2 class="dialog-header">Add New Reminder </h2>
                                <form class="form" id="form" style="margin-top: -100px;">
                                    <div class="form-container" align="center">
                                        <label class="form-label" id="valueFromMyButton" for="name">Nama Obat</label>
                                        <input class="input" type="text" id="name" maxlength="36">
                                        <label class="form-label" id="valueFromMyButton" for="count">Dosis</label>
                                        <input class="input" type="number" id="count" min="0" max="1000000" maxlength="7">
                                        <label class="form-label" id="valueFromMyButton" for="time">Berapa Kali Sehari</label>
                                        <input class="input" type="number" id="reps" maxlength="36">
                                        <label class="form-label" id="valueFromMyButton" for="time">Waktu</label>
                                        <input class="input" type="time" id="time" maxlength="36">
                                        <div class="alarm-inputs">
                                            <input type="number" name="hour" placeholder="Enter hours" min="0" max="12" required />
                                            <input type="number" name="min" min="0" max="60" placeholder="Enter minutes" required />
                                            <input type="number" name="sec" min="0" max="60" placeholder="Enter seconds" required />
                                            <select name="zone" required>
                                                <option value="" selected disabled>Zone</option>
                                                <option value="AM">AM</option>
                                                <option value="PM">PM</option>
                                            </select>
                                        </div>
                                        <button>Submit</button><br>
                                        <input type="button" value="Cancel" class="button" id="cancel-button">
                                        <input type="button" value="OK" class="button button-white" id="ok-button">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div id="active-alarm">
            <div id="alarm-text"></div>
            <button id="clear-alarm">Clear Alarm</button>
        </div>
        <audio id="alarm-audio"></audio>

        <script>
            var alarmString = null;

            // Select HTML5 Audio element
            const alarmAudio = document.getElementById("alarm-audio");

            // Select DOM element with create-alarm id
            const createAlarm = document.querySelector(".create-alarm");

            // Select DOM element of active alarm container
            const activeAlarm = document.getElementById("active-alarm");
            const clearAlarm = document.getElementById("clear-alarm");

            // Select DOM element of active alarm text
            const alarmTextContainer = document.getElementById("alarm-text");

            const alarmText = (time) => `Medicine Reminder set at time ${time}`;

            // Initialize alarm sound
            alarmAudio.src = "http://soundbible.com/grab.php?id=1252&type=mp3";
            alarmAudio.load();

            // Handle Create Alarm submit
            const handleSubmit = (event) => {
                // Prevent default action of reloading the page
                event.preventDefault();
                const {
                    hour,
                    sec,
                    min,
                    zone
                } = document.forms[0];
                alarmString = getTimeString({
                    hours: hour.value,
                    seconds: sec.value,
                    minutes: min.value,
                    zone: zone.value
                });
                // Reset form after submit
                document.forms[0].reset();
                // Hide create alarm
                createAlarm.style.display = "none";
                // show active alarm with text
                activeAlarm.style.display = "block";
                alarmTextContainer.innerHTML = alarmText(alarmString);
            };

            const handleClear = () => {
                alarmString = "";
                activeAlarm.style.display = "none";
                createAlarm.style.display = "block";
            };

            // Trigger handleClear on button click
            clearAlarm.addEventListener("click", handleClear);
            // Attach submit event to the form
            document.forms[0].addEventListener("submit", handleSubmit);

            // Function to check if alarm needs to be triggered
            const checkAlarm = (timeString) => {
                if (alarmString === timeString) {
                    swal({
                        title: "Reminder!",
                        text: "You have 1 Paracetamol to consume. Please consume before the time runs out!",
                        icon: "warning",
                        button: "GOT IT!",
                    });
                }
            };

            // Function to convert time to string value
            const getTimeString = ({
                hours,
                minutes,
                seconds,
                zone
            }) => {
                if (minutes / 10 < 1) {
                    minutes = "0" + minutes;
                }
                if (seconds / 10 < 1) {
                    seconds = "0" + seconds;
                }
                return `${hours}:${minutes}:${seconds} ${zone}`;
            };

            // Function to display current time on screen
            const renderTime = () => {
                var currentTime = document.getElementById("current-time");
                const currentDate = new Date();
                var hours = currentDate.getHours();
                var minutes = currentDate.getMinutes();
                var seconds = currentDate.getSeconds();
                var zone = hours >= 12 ? "PM" : "AM";
                if (hours > 12) {
                    hours = hours % 12;
                }
                const timeString = getTimeString({
                    hours,
                    minutes,
                    seconds,
                    zone
                });
                checkAlarm(timeString);
                currentTime.innerHTML = timeString;
            };

            // Update time every second
            setInterval(renderTime, 1000);
        </script>
    </body>

    </html>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>