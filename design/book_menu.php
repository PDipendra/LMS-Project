<?php
  include "php/db_connect.php";
?>
<div class="container">
  <div class="row">

<div class="col-sm">
  <div class="alert" style="box-shadow: 2px 2px 2px 2px grey;" role="alert">
    <form style="margin-top: 20px;margin-bottom: 20px;" method="POST" action="{{route('book.store')}}">
      
      <div class="form-group row">
        <label for="ISBN" class="col-sm-2 col-form-label">ISBN Number :</label>
      <div class="col-sm">
        <input type="number" class="form-control"  placeholder="ISBN Number" name="isbn" required="">
      </div>
        <label for="BookNumber" class="col-sm-2 col-form-label">Book Number :</label>
      <div class="col-sm">
        <input type="number" class="form-control"  placeholder="Book Number" name="book_number" required="">
      </div>
    </div>

      <div class="form-group row">
        <?php
                 $sql = "SELECT book_type FROM book_type";
                 $projresult = $conn->query($sql);                       
                 $projresult->setFetchMode(PDO::FETCH_ASSOC);
                 echo'<label for="BookType" class="col-sm-2 col-form-label">Book Type</label>';
                 echo'<div class="col-sm">';
                 echo'<select class="custom-select" name="book_type">';
            while ( $row = $projresult->fetch() ) 
            {
               echo '<option value="'.$row['book_type'].'">'.$row['book_type'].'</option>';
            }
            echo '</select>';
        ?>
      </div>
        <?php
                 $sql = "SELECT author_name FROM author";
                 $projresult = $conn->query($sql);                       
                 $projresult->setFetchMode(PDO::FETCH_ASSOC);
                 echo'<label for="author_name" class="col-sm-2 col-form-label">Author Name</label>';
                 echo'<div class="col-sm">';
                 echo'<select class="custom-select" name="author_name">';
            while ( $row = $projresult->fetch() ) 
            {
               echo '<option value="'.$row['author_name'].'">'.$row['author_name'].'</option>';
            }
            echo '</select>';
        ?>
      </div>
    </div>

      <div class="form-group row">
        <label for="BookName" class="col-sm-2 col-form-label">Book Name :</label>
      <div class="col-sm">
        <input type="text" class="form-control" name="BookName" placeholder="Enter Book Name" required="">
      </div>
        <?php
                 $sql = "SELECT category_name FROM category";
                 $projresult = $conn->query($sql);                       
                 $projresult->setFetchMode(PDO::FETCH_ASSOC);
                 echo'<label for="category" class="col-sm-2 col-form-label">Category Name</label>';
                 echo'<div class="col-sm">';
                 echo'<select class="custom-select" name="category_name">';
            while ( $row = $projresult->fetch() ) 
            {
               echo '<option value="'.$row['category_name'].'">'.$row['category_name'].'</option>';
            }
            echo '</select>';
        ?>
      </div>
      </div>
      <div class="form-group row">
        <label for="Edition" class="col-sm-2 col-form-label">Edition :</label>
        <div class="col-sm">
          <input type="text"  class="form-control" name="Price" placeholder="Edition">
        </div>
        <?php
                 $sql = "SELECT publisher_name FROM publisher";
                 $projresult = $conn->query($sql);                       
                 $projresult->setFetchMode(PDO::FETCH_ASSOC);
                 echo'<label for="publisher_name" class="col-sm-2 col-form-label">Publisher Name</label>';
                 echo'<div class="col-sm">';
                 echo'<select class="custom-select" name="publisher_name">';
            while ( $row = $projresult->fetch() ) 
            {
               echo '<option value="'.$row['publisher_name'].'">'.$row['publisher_name'].'</option>';
            }
            echo '</select>';
        ?>
      </div>
      </div>
      <div class="form-group row">
        <label for="Price" class="col-sm-2 col-form-label">Price :</label>
        <div class="col-sm-4">
          <input type="text"  class="form-control" name="Price" placeholder="Price">
        </div>
        <div class="col-sm">
          <input type="submit" name="" class="form-control btn btn-primary" value="Add Record">
        </div>
    </div>
    </form>
  </div>
</div></div></div>