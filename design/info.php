<div class="container" >
    <div class="row">

        <div class="col-sm-4">

            <div class="alert" style="box-shadow: 2px 2px 2px 2px grey;" role="alert">
              <hr>
              <h4 class="alert-heading">Setting and More</h4>
              <hr>
              <p class="mb-0">No. of book member can issue:</p>
              <hr>
              <p class="mb-0">No. of day  can keep book:</p>
              <hr>
              <p class="mb-0">Fine per week:</p>
              <hr>
            </div>
        </div>
        <div class="col-sm">
              <div class="alert" style="box-shadow: 2px 2px 2px 2px grey;" role="alert">
                <h4 class="alert-heading"><b>TOTAL STUDENTS :</b></h4>
                <hr>
                <p class="mb-0">
                  <?php
                    echo "$pdoRowStudent";
                  ?>
                </p>             
              </div>
              <div class="alert" style="box-shadow: 2px 2px 2px 2px grey;" role="alert">
                <h4 class="alert-heading"><b>TOTAL BOOKS :</b></h4>
                <hr>
                <p class="mb-0">
                  <?php
                    echo "$pdoRowBook";
                  ?>
                </p>             
              </div>
        </div>
        <div class="col-sm">
              <div class="alert" style="box-shadow: 2px 2px 2px 2px grey;" role="alert">
                <h4 class="alert-heading"><b>TOTAL FACULTY :</b></h4>
                <hr>
                <p class="mb-0">985</p>             
              </div>
              <div class="alert" style="box-shadow: 2px 2px 2px 2px grey;" role="alert">
                <h4 class="alert-heading"><b>TOTAL STAFF :</b></h4>
                <hr>
                <p class="mb-0">985</p>             
              </div>
        </div>
        
  </div>
</div>