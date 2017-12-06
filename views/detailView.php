
<?php
  include("template/header.php")
 ?>


   <div class="jumbotron">
     <h2 class="display-3"><?php echo $book->getTitle(); ?></h2>
     <h5 class="display-5"><?php echo $book->getAuthor(); ?></h5>
     <h5 class="display-5"><?php echo $book->getReleaseDate(); ?></h5>

     <p class="lead"> <?php echo $book->getSummary(); ?> </p>
     <hr class="my-2">
     <p><?php echo $book->getReleaseDate(); ?></p>

     <?php if($book->getStatus() == "available"){
       echo "<p>This book is available now !</p>";
     }else{
       echo "<p>This book has been borrowed by: " . $user->getName() . "</p>";
     } ?>



   <!-- BORROW BOOK -->
    <div class="container_form">

         <form action="" method="post">

           <div class="form-group row">
             <label for="inputAmount" class="col-sm-2 col-form-label">User Code</label>
             <div class="col-sm-10">
               <input name="updateUserCode" type="text" class="form-control">
             </div>
           </div>

           <input class="btn btn-primary" type="submit" name="borrowBook" value="Borrow">
         </form>

     </div>



 <?php
   include("template/footer.php")
  ?>
