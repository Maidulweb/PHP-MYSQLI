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
       
    }else {
        echo 'Connection Failed';
     }
 ?>
   <div class="main-body">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="home">
            <table class="table">
               <thead>
                  <tr>
                     <th scope="col">ID</th>
                     <th scope="col">Book Name</th>
                     <th scope="col">Author</th>
                     <th scope="col">Action</th>
                  </tr>
               </thead>
               <tbody>
               <?php
                  $sql = 'SELECT * FROM authority';
                  $result = mysqli_query($conn, $sql);
                  if($result){
                    while ($row = mysqli_fetch_assoc($result)){
                       $id = $row['id'];
                       $book = $row['book_name'];
                       $name = $row['book_author'];

               ?>
               <tr>
                     <th scope="row"><?php echo $id;?></th>
                     <td><?php echo $book?></td>
                     <td><?php echo $name?></td>
                     <td><a href="authorityedit.php?id=<?php echo $id;?>">Edit</a> &uarr;&darr; <a href="authoritydelete.php?id=<?php echo $id;?>">Delete</a></td>
                  </tr>
               <?php
               
                         }
                        }
                  ?>
               </tbody>
             </table>
            </div>
          </div>
          <div class="col-md-6">
            <div class="home">
            <table class="table">
               <thead>
                  <tr>
                     <th scope="col">ID</th>
                     <th scope="col">Published Date</th>
                     <th scope="col">Book Price</th>
                     <th scope="col">Buy</th>
                  </tr>
               </thead>
               <tbody>
                  <?php
                        $sql = 'SELECT * FROM details';
                        $result = mysqli_query($conn, $sql);
                        if($result){
                        while ($row = mysqli_fetch_assoc($result)){
                           $id = $row['id'];
                           $published = $row['published'];
                           $price = $row['price'];
                  ?>
                        <tr>
                           <th scope="row"><?php echo $id;?></th>
                           <td><?php echo $published;?></td>
                           <td><?php echo $price;?></td>
                           <td><a href="detailsedit.php?id=<?php echo $id;?>">Edit</a> &uarr;&darr; <a href="detailsdelete.php?id=<?php echo $id;?>">Delete</a></td>
                        </tr>
                  <?php
                      }
                     }
                  ?>
               </tbody>
             </table>
            </div>
          </div>
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