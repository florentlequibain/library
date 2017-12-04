
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
   </div>



 <?php
   include("template/footer.php")
  ?>
