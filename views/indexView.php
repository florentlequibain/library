
<?php
  include("template/header.php")
 ?>

 <!-- ADD BOOK WITH DROPDOWN FORM -->
  <div class="container_form">

 <!-- DROPDOWN BUTTON -->
  <button type="button" class="btn btn-primary button_show_projets"
          onclick="displayYesNo()">Add new Book</button>

     <div id="YesNo" class="container">

       <form action="" method="post">

         <div class="form-group row">
           <label for="inputName" class="col-sm-2 col-form-label">Title</label>
           <div class="col-sm-10">
             <input name="title" type="text" class="form-control">
           </div>
         </div>

         <div class="form-group row">
           <label for="inputAmount" class="col-sm-2 col-form-label">Author</label>
           <div class="col-sm-10">
             <input name="author" type="text" class="form-control">
           </div>
         </div>

         <div class="form-group row">
           <label for="inputAmount" class="col-sm-2 col-form-label">Release Date</label>
           <div class="col-sm-10">
             <input name="releaseDate" type="date" class="form-control">
           </div>
         </div>

         <div class="form-group row">
           <label for="inputAmount" class="col-sm-2 col-form-label">Type</label>
           <div class="col-sm-10">
             <input name="type" type="text" class="form-control">
           </div>
         </div>

        <div class="form-group row">
          <label for="inputAmount" class="col-sm-2 col-form-label">Status</label>
          <div class="col-sm-10">
            <input name="status" type="text" class="form-control" value="available">
          </div>
        </div>

        <div class="form-group row">
          <label for="inputAmount" class="col-sm-2 col-form-label">User Code</label>
          <div class="col-sm-10">
            <input name="userCode" type="number" class="form-control" value="1">
          </div>
        </div>

        <div class="form-group row">
          <label for="comment">Summary:</label>
          <textarea name="summary" class="form-control" rows="5"></textarea>
        </div>

         <input class="btn btn-primary" type="submit" name="addBook" value="Add">
       </form>

     </div>

   </div>


<h3>Books Availables</h3>

<!-- TABLE WITH ALL BOOKS -->
<table class="table table-striped">

  <thead>
    <tr>
      <th>Title</th>
      <th>Author</th>
      <th>release Date</th>
      <th>Type</th>
      <th>Status</th>
      <th>Actions</th>
    </tr>
  </thead>

  <tbody>

    <?php
    foreach ($books as $book) {
      ?>

    <tr>
      <td><?php echo $book->getTitle(); ?></td>
      <td><?php echo $book->getAuthor(); ?></td>
      <td><?php echo $book->getReleaseDate(); ?></td>
      <td><?php echo $book->getType(); ?></td>
      <td><?php echo $book->getStatus(); ?></td>
      <td> A C T I O N S </td>
    </tr>

    <?php
    }
    ?>

  </tbody>
</table>


<?php
  include("template/footer.php")
 ?>
