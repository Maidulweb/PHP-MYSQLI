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
           <li><a href="join.php">Join</a></li>
           <li><a href="leftjoin.php">Left Join</a></li>
           <li><a href="rightjoin.php">Right Join</a></li>
        </ul>
     </div>
   </header> 
   <?php 
   /* CONNECTION */
    $conn = mysqli_connect('localhost', 'root', '', 'database');
    /* INSERT QUERY */
    if ($conn) {
       if (isset($_POST['details-submit'])) {
        $published = $_POST['time']; 
        $price = $_POST['price']; 
        $book_id = $_POST['book-id'];
        $sql = "INSERT INTO details (published, price, book_id) VALUES ('$published', '$price', '$book_id')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
          echo "Data insert successfully";
        }else {
           echo 'Data insert failed';
        }
     }
    }else {
        echo 'Connection Failed';
     }
 ?>
   <div class="main-body">
      <div class="container">
         <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
            <form class="book-form" action="" method="post">
                  <div class="form-group">
                     <label for="exampleInputEmail1">Published Date</label>
                     <input name="time" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Published Date">
                  </div>
                  <div class="form-group">
                     <label for="exampleInputEmail1">Price</label>
                     <input name="price" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Book Price">
                  </div>
                  <div class="form-group">
                     <label for="exampleInputEmail1">Book Id</label>
                     <input name="book-id" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Book Id">
                  </div>
                  <!-- <div class="form-group">
                     <label for="exampleFormControlSelect1">Tag</label>
                     <select class="form-control" id="exampleFormControlSelect1">
                     <option>life</option>
                     <option>style</option>
                     <option>in</option>
                     </select>
                  </div> -->
                  <button name="details-submit" type="submit" class="btn btn-primary">Submit</button>
             </form>
            </div>
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