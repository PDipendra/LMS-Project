<style>
  a{
    font-family: caladea;
    font-weight: bold;
  }
</style>
<!-- Navbar and the content here -->
  <div class="container" style="margin-bottom: 5px">
    
    <nav class="navbar navbar-expand-lg" style="box-shadow: 2px 2px 2px 2px grey;background-color:##ccccb3;">
      <a class="navbar-brand" href="index.php"><b>LMS HOME</b></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="students.php">STUDENT ENTRY</a>  
          </li>
          <li class="nav-item">
            <a class="nav-link" href="books.php">BOOK ENTRY</a>  
          </li>
          <li class="nav-item">
            <a class="nav-link" href="transaction.php">TRANSACTION</a>  
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              STUDENT INFO
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="addfaculty.php">ADD FACULTY</a>
              <a class="dropdown-item" href="addbatch.php">ADD BATCH</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              BOOK INFO
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="addcategory.php">ADD CATEGORY</a>
              <a class="dropdown-item" href="addauthor.php">ADD AUTHOR</a>
              <a class="dropdown-item" href="addpublisher.php">ADD PUBLISHER</a>
              <a class="dropdown-item" href="addtype.php">ADD BOOK TYPE</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              GET DETAILS
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="displaystudents.php">SEARCH STUDENT</a>
              <a class="dropdown-item" href="">SEARCH BOOK</a>
          </li>
        </ul>
      </div>
    </nav>
    </div>