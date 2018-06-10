<?php
  include "php/add_students.php";
?>
<script type="text/javascript" href="./js/bootstrap.min.js" ></script>
<div class="container" >
    <div class="row">

<div class="col-sm">
  <div class="alert" style="box-shadow: 2px 2px 2px 2px grey;" role="alert">
    <form style="margin-top: 20px;margin-bottom: 20px;" action="students.php" method="POST" enctype="multipart/form-data">  

        <div class="form-group row">
          <label for="StudentID" class="col-sm-2 col-form-label">Student ID</label>
          <div class="col-sm-4">
            <input type="number" class="form-control"  placeholder="Student ID" name="student_id" required="">
          </div>
          <label class="col-sm-2 col-form-label" for="StudentImage">Select Image</label>
          <div class="col-sm">
            <input type="file" class="form-control " name="image" required="">
          </div>
        </div>
        <div class="form-group row">
          <label for="StudentName" class="col-sm-2 col-form-label">Name</label>
          <div class="col-sm">
            <input type="text" class="form-control" name="name" placeholder="Student Name" required="">
          </div>
          <label for="StudentAddress" class="col-sm-2 col-form-label">Address</label>
          <div class="col-sm">
            <input type="text" class="form-control"  placeholder="Student Address" name="address" required="">
          </div>
        </div>

        <div class="form-group row">
        <?php
                 $sql = "SELECT batch_no FROM batch";
                 $projresult = $conn->query($sql);                       
                 $projresult->setFetchMode(PDO::FETCH_ASSOC);
                 echo'<label for="Batch" class="col-sm-2 col-form-label">Batch</label>';
                 echo'<div class="col-sm">';
                 echo'<select class="custom-select" name="batch" required="">';
            while ( $row = $projresult->fetch() ) 
            {
               echo '<option value="'.$row['batch_no'].'">'.$row['batch_no'].'</option>';
            }
            echo '</select>';
         ?>
       </div>
          <label for="StudentRoll" class="col-sm-2 col-form-label">Roll No.</label>
          <div class="col-sm">
            <input type="text" class="form-control" name="roll" placeholder="eg. 072-BCT-110" required="">
          </div>
        </div>

          <div class="form-group row">
          <label for="ContactNumber" class="col-sm-2 col-form-label">Contact No.</label>
          <div class="col-sm">
            <input type="number" class="form-control" placeholder="Contact Number" name="contact" required="">
          </div>
          <label for="Email" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm">
            <input type="email" class="form-control" placeholder="Please enter valid Email" name="email" required="">
          </div>
        </div>

          <div class="form-group row">
              <?php
                     $sql = "SELECT faculty_name FROM faculty";
                     $projresult = $conn->query($sql);                       
                     $projresult->setFetchMode(PDO::FETCH_ASSOC);
                     echo'<label for="Faculty" class="col-sm-2 col-form-label">Faculty</label>';
                     echo'<div class="col-sm">';
                     echo'<select class="custom-select" name="faculty" required="">';
                while ( $row = $projresult->fetch() ) 
                {
                   echo '<option value="'.$row['faculty_name'].'">'.$row['faculty_name'].'</option>';
                }
                echo '</select>';
              ?>
            </div>
          <label for="Gender" class="col-sm-2 col-form-label">Gender</label>
          <div class="col-sm">
          <select class="custom-select" name="gender">
              <option selected name="gender" value="Female">Female</option>
              <option name="gender" value="Male">Male</option>
          </select>
          </div>
          </div>
          
         <div class="form-group row">
          <div class="col-sm">
          <input type="submit" value="Add Record" class="form-control btn btn-primary" name="insert">
         </div>
         </div>

        </div>
</form>
        	  </div>
        </div>
  </div>
</div>