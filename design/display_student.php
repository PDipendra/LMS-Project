<?php
  include "php/display_students.php";
?>
<div class="container">
  <div class="alert" style="box-shadow: 2px 2px 2px 2px grey">
  <div class="alert" style="box-shadow: 2px 2px 2px 2px grey">
    <form class="form-inline" method="POST" action="">
      <label for="" class="col-form-label col-sm-4"><b>Search Students Details</b></label>
      <input type="text" name="student_id" placeholder="Enter the Student ID" class="form-control col-sm-4">&nbsp&nbsp
      <input type="submit" name="search" value="Search Info" class="form-control col-sm-3 btn-primary">
    </form>
  </div>
  <div class="alert" style="box-shadow: 2px 2px 2px 2px grey;">
  <div class="row" >
    <div class="col-sm-3">
      <div class="alert">
        <img src="uploads/<?php echo $image_location; ?>" alt="..." class="img-thumbnail" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);width: 175px;height: 170px;object-fit: cover;margin: auto;transition:all 0.3s ease;">
      </div>
    </div>
    <div class="col-sm-4">
      <div class="">
        <ul class="list-group">
          <li class="list-group-item list-group-item-primary"><b>Student ID:</b>&nbsp&nbsp
            <?php echo $student_id; ?>
          </li>
          <li class="list-group-item list-group-item-primary"><b>Faculty:</b>&nbsp&nbsp
            <?php echo $faculty; ?>
          </li>
          <li class="list-group-item list-group-item-primary"><b>Batch:</b>&nbsp&nbsp
            <?php echo $batch; ?>
          </li>
          <li class="list-group-item list-group-item-primary"><b>Roll Number:</b>&nbsp&nbsp
            <?php echo $roll; ?>
          </li>
        </ul>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="">
        <ul class="list-group">
          <li class="list-group-item list-group-item-primary"><b>Student Name:</b>&nbsp&nbsp
            <?php echo $name; ?>
          </li>
          <li class="list-group-item list-group-item-primary"><b>Address:</b>&nbsp&nbsp
            <?php echo $address; ?>
          </li>
          <li class="list-group-item list-group-item-primary"><b>Gender:</b>&nbsp&nbsp
            <?php echo $gender; ?>
          </li>
          <li class="list-group-item list-group-item-primary"><b>Contact:</b>&nbsp&nbsp
            <?php echo $contact; ?>
          </li>
        </ul>
      </div>
    </div>

  </div>
</div>
</div>
</div>