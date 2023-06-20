<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule</title>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/student_schedule.css">
</head>
<body>

<div class="idance">
    <div class="schedule content-block">
        <div class="container">
            <h2 data-aos="zoom-in-up" class="aos-init aos-animate">Student Schedule</h2>

           <!-- Profile Picture -->
<div class="profile-picture">
    <img src="img/user.jpg" alt="Profile Picture" id="profile-image">
    <div class="profile-dropdown" id="dropdown-content">
        <a onclick="manageProfile()">Manage Profile</a>
        <a onclick="logout()">Logout</a>
    </div>
</div>

            <div class="timetable">
        
              <!-- Schedule Top Navigation -->
              <nav class="nav nav-tabs">
                <a class="nav-link active">Mon</a>
                <a class="nav-link">Tue</a>
                <a class="nav-link">Wed</a>
                <a class="nav-link">Thu</a>
                <a class="nav-link">Fri</a>
               
              </nav>
        
              <div class="tab-content">
                <div class="tab-pane show active">
                  <div class="row">
        
                    <!-- Schedule Item 1 -->
                    <div class="col-md-6">
                      <div class="timetable-item">
                        <div class="timetable-item-img">
                          <img src="img/math.png" alt="Math">
                        </div>
                        <div class="timetable-item-main">
                          <div class="timetable-item-time">07:30AM - 08:30AM</div>
                          <div class="timetable-item-name">Math</div>
                         
                        </div>
                      </div>
                    </div>
        
                    <!-- Schedule Item 2 -->
                    <div class="col-md-6">
                      <div class="timetable-item">
                        <div class="timetable-item-img">
                          <img src="img/english.png" alt="English">
                        </div>
                        <div class="timetable-item-main">
                          <div class="timetable-item-time">08:40AM - 09:40AM</div>
                          <div class="timetable-item-name">English</div>
                       
                        </div>
                      </div>
                    </div>
        
                    <!-- Schedule Item 3 -->
                    <div class="col-md-6">
                      <div class="timetable-item">
                        <div class="timetable-item-img">
                          <img src="img/science.jpg" alt="Science">
                        </div>
                        <div class="timetable-item-main">
                          <div class="timetable-item-time">09:40AM - 10:40AM</div>
                          <div class="timetable-item-name">Science</div>
                       
                        </div>
                      </div>
                    </div>
        
                    <!-- Schedule Item 4 -->
                    <div class="col-md-6">
                      <div class="timetable-item">
                        <div class="timetable-item-img">
                          <img src="img/pd.jpeg" alt="Personal Development">
                        </div>
                        <div class="timetable-item-main">
                          <div class="timetable-item-time">11:00AM - 11:50AM</div>
                          <div class="timetable-item-name">Personal Development</div>
                       
                        </div>
                      </div>
                    </div>
        
                    <!-- Schedule Item 5 -->
                    <div class="col-md-6">
                      <div class="timetable-item">
                        <div class="timetable-item-img">
                          <img src="img/philo.jpg" alt="Philosophy">
                        </div>
                        <div class="timetable-item-main">
                          <div class="timetable-item-time">1:15PM - 2:15PM</div>
                          <div class="timetable-item-name">Philosophy</div>
                      
                        </div>
                      </div>
                    </div>
        
                    <!-- Schedule Item 6 -->
                    <div class="col-md-6">
                      <div class="timetable-item">
                        <div class="timetable-item-img">
                          <img src="img/pe.jpg" alt="PE">
                        </div>
                        <div class="timetable-item-main">
                          <div class="timetable-item-time">2:20PM - 03:20PM</div>
                          <div class="timetable-item-name">PE</div>
                     
                        </div>
                      </div>
                    </div>
                      <!-- Schedule Item 7 -->
                      <div class="col-md-6">
                      <div class="timetable-item">
                        <div class="timetable-item-img">
                          <img src="img/entrep.png" alt="Entrepreneurship">
                        </div>
                        <div class="timetable-item-main">
                          <div class="timetable-item-time">03:40PM - 04:40PM</div>
                          <div class="timetable-item-name">Entrepreneurship</div>
                     
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
  </div>
  
</body>
</html>
