<div class="container">
  <div class="row">

<div class="col-sm">
      <div class="alert" style="box-shadow: 2px 2px 2px 2px grey;" role="alert">
        <form style="margin-top: 20px;margin-bottom: 20px;" method="POST" action="addbatch.php">
          <div class="form-group row">
            <label for="BatchNumber" class="col-sm-2 col-form-label">BATCH NUMBER</label>
          <div class="col-sm">
            <input type="text" class="form-control"  placeholder="Enter Batch Number eg:- 072" name="batch_no" required="">
          </div>
        </div>
          <div class="form-group row">
            <div class="col-sm">
              <input type="submit" name="insert" class="form-control btn btn-primary" value="Add Record">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>