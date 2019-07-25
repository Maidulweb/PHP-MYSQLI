<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Database</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
 
   <header>
     <div class="menu">
        <ul>
           <li><a href="index.php">Home</a></li>
           <li><a href="authority.php">Book Name</a></li>
           <li><a href="details.php">Book Details</a></li>
        </ul>
     </div>
   </header> 
   
   <div class="main-body">
      <div class="container">
         <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
    <?php 
        /* CONNECTION */
            $conn = mysqli_connect('localhost', 'root', '', 'database');
            /* INSERT QUERY */
            if ($conn) {
               $id = $_GET['id'];
               if($id){
               $sql = "SELECT * FROM authority WHERE id = '$id'";
                  $result = mysqli_query($conn, $sql);
                  if($result){
                     while($row = mysqli_fetch_assoc($result)){
                          $name = $row['book_name'];
                          $author = $row['book_author'];
                  
                  
                  
     ?>
                <form class="book-form" action="" method="post">
                <input type="hidden" name="id" value="<?php echo $id;?>">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Book Name</label>
                        <input name="edit-name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            value="<?php echo $name;?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Author</label>
                        <input name="edit-author" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $author;?>">
                    </div>
                    <!-- <div class="form-group">
                        <label for="exampleFormControlSelect1">Tag</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                        <option>life</option>
                        <option>style</option>
                        <option>in</option>
                        </select>
                    </div> -->
                    <input class="btn btn-primary" type="submit" name="edit" value="Edit">
                </form>
                <?php
                 }
               }
            }else {
                  header('Location: index.php');
               }
                ?>
            </div>
            <?php
                  }else {
                    echo 'Connection Failed';
                 }

                 if(isset($_POST['edit'])){
                    $name = $_POST['edit-name'];
                    $author = $_POST['edit-author'];
                    /* ======  UPDATE ====== */
                  $sql = "UPDATE authority SET book_name = '$name', book_author = '$author' WHERE id = '$id'";
                  $result = mysqli_query($conn, $sql); 
                  header('Location: index.php');
                 }
                ?>
            <div class="col-md-3"></div>
         </div>
      </div><!-- container -->
   </div><!-- main-body -->
   <div class="footer">
     <h1>Footer</h1>
   </div>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>