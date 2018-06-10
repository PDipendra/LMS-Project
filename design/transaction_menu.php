<?php
  include "php/display_students.php";
?>
<div class="container">
	<div class="alert" style="box-shadow: 2px 2px 2px 2px grey;" role="alert">
		
		<div class="row">

			<div class="col-sm-5">
				<div class="alert "style="box-shadow: 2px 2px 2px 2px grey;" role="alert">
					<div class="alert "style="" role="alert">
						Enter Student ID and Book Number
					</div>
					<form method="POST" action="">
						<div class="form-group row">
				          <label for="" class="col-sm-4 col-form-label">Student ID :</label>
				          <div class="col-sm-8">
				            <input type="number" class="form-control"  name="student_id" placeholder="Enter Student ID">
				          </div>
				      	</div>
				      	<div class="form-group row">
				          <label for="" class="col-sm-4 col-form-label">Book Number :</label>
				          <div class="col-sm-8">
				            <input type="number" class="form-control"  placeholder="Book Number" name="book_number">
				          </div>
				      	</div>
				      	<div class="form-group row">
				          <label for="" class="col-sm-4 col-form-label">Issue Date :</label>
				          <div class="col-sm-8">
				            <input type="text" class="form-control"   name="issue_date" value="<?php echo date("Y-m-d"); ?>" readonly="" >
				          </div>
				      	</div>
				      	<div class="form-group row">
				          <div class="col-sm">
				            <input type="submit" class="form-control btn btn-primary"  value="Borrow">
				          </div>
				          <div class="col-sm">
				            <input type="submit" class="form-control btn btn-primary"  value="Search" name="search">
				          </div>
				      	</div>
					</form>
				</div>
			</div>

			<div class="col-sm">
				<div class="alert "style="box-shadow: 2px 2px 2px 2px grey;" role="alert">
					<div class="row">
						<div class="col-sm">
							<ul class="">
							  <li class="" style="list-style: none;">
							  	<img src="uploads/<?php echo $image_location; ?>" alt="user image" class="img-thumbnail" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);width: 130px;height: 138px;object-fit: cover;margin: auto;transition:all 0.3s ease;">
							  </li>
					          <li class="" style="list-style: none;" ><?php echo $name; ?></li>
					          <li class="" style="list-style: none;" ><?php echo $address; ?></li>
					          <li class="" style="list-style: none;" ><?php echo $roll ?></li>
					        </ul>
						</div>
						<div class="col-sm-7">
							<ol class="">
					          <li class="" style="font-size: 14px;" >Operating System</li>
					          <li class="" style="font-size: 14px;" >Distributed System</li>
					          <li class="" style="font-size: 14px;" >Computer Network</li>
					          <li class="" style="font-size: 14px;" >Microprocessor based instrumentation</li>
					          <li class="" style="font-size: 14px;" >Engineering professional practice</li>
					          <li class="" style="font-size: 14px;" >Distributed System</li>
					          <li class="" style="font-size: 14px;" >Java </li>
					          <li class="" style="font-size: 14px;" >Satelite Communication</li>
					          <li class="" style="font-size: 14px;" >E-commerce </li>
					          <li class="" style="font-size: 14px;" >World Wide Web</li>
					        </ul>
						</div>
					</div>
					
					<form method="POST" action="" class="form-inline">
						<input type="submit" class="form-control btn btn-primary col-sm-4"  value="Return Books" name="return">
					</form>
				</div>
			</div>

		</div>
	</div>
</div>