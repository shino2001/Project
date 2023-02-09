



<?php
include('session.php');
include('connect.php');
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="dashbord.css">
  
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-m-plus-plus'></i>
      <span class="logo_name">Admin</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="admin.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Home</span>
          </a>
        </li>
        <li>
          <a href="viewtech.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Teacher</span>
          </a>
        </li>
        <li>
          <a href="addteacher.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Add New Teacher</span>
          </a>
        </li>
        <li>
          <a href="">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">subject</span>
          </a>
        </li>
        <li>
          <a href="viewstu.php">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Student</span>
          </a>
        </li>
        <li>
          <a href="teacher_leave_status.php">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">teacher leave</span>
          </a>
        </li>
        <li>
          <a href="officefee.php">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Office</span>
          </a>
        </li>
        <li>
          <a href="timetable.php">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">timetable</span>
          </a>
        </li>
        
        <li>
          <a href="#">
            <i class='bx bx-user' ></i>
            <span class="links_name">Settings</span>
          </a>
        </li>
        <li class="">
          <a href="logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      
<?php
include('connect.php');



if (isset($_POST["submit"]))
{
	
    $day=$_POST['day'];
    $batch=$_POST['batch'];
    $subject=$_POST['subject'];
    $teacher=$_POST['teacher'];
    $to=$_POST['to'];
    $from=$_POST['from'];


  
   
    
     
      mysqli_query($conn, "INSERT INTO `timetable`( `day`, `batch`, `subject`, `teacher`, `to`, `from`)
     VALUES ('$day','$batch','$subject','$teacher','$to','$from')");
 
    }
  ?>

<link rel="stylesheet" href="timetable.css"> 

<div class="container"> 

  <form id="contact" action="" method="post">
 
  <h2>Time Table</h2>
    <fieldset>
    <select name="day" id="day" name="day" required>
    <option value="sel">Select day</option>
  <option value="Monday">Monday</option>
  <option value="Tuesday">Tuesday</option>
  <option value="Wednesday">Wednesday</option>
  <option value="Thursday" >Thursday</option>
  <option value="Friday" >Friday</option>
  

</select> 
    
     
      
  
    </fieldset>
    <fieldset>
    <select name="batch" id="batch" name="batch" required>
    <option value="sel">Select Batch</option>
  <option value="Plus one">Plus one</option>
  <option value="Plus two">Plus Two</option>

  

</select> 
   
    </fieldset>
    <fieldset>
    <select name="subject" id="subject" name="subject" required>
    <option value="sel">Select Subject</option>
  <option value="Chemistry">Chemistry</option>
  <option value="Physics">Physics</option>
  <option value="Biology">Biology</option>
  <option value="Maths" >Maths</option>

  

</select> 
     
    </fieldset>
    <input placeholder="teacher" type="text"  name="teacher"id="teacher" required>
    </fieldset>
    </fieldset>
    <h2>Time From</h2>
    <input placeholder="From" type="time"  name="from"id="from" required>
    </fieldset>
    <h2>Time To</h2>
    <input placeholder="TO" type="time"  name="to"id="to" required>
   
   
    
    
    
    <fieldset>
      <button name="submit" type="submit" id="submit" name="submit" onsubmit="alert('register successfully')"data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
 
  
</div>