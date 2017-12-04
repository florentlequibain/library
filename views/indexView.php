
<?php
  include("template/header.php")
 ?>

 <!-- ADD BOOK WITH DROPDOWN FORM -->
  <div class="container_form">

 <!-- DROPDOWN BUTTON -->
  <button type="button" class="btn btn-primary button_show_projets"
          onclick="displayYesNo1()">Add new Book</button>

     <div id="YesNo1" class="container">

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

<div class="tablesContainer container">


<div class="selectBookContainer col-12">

<!-- DROPDOWN SELECTOR -->
<form class="" action="" method="post">

  <div class="form-group">
   <label for="sel1">Select type:</label>
   <select name="selectTypeDropdown" class="form-control" id="sel1">
     <option value="SF" name="SF">SF</option>
     <option value="thriller" name="thriller">thriller</option>
     <option value="fantasy" name="fantasy">fantasy</option>
     <option value="all" name="all">all</option>
   </select>
 </div>

 <input class="btn btn-primary " type="submit" name="selectType" value="select type">
</form>

</div>

<!-- TABLE WITH ALL BOOKS -->
<article id="booksTable" class="col-8">
<table class="table table-striped">
  <h3>Books Availables</h3>


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

      <?php if($book->getStatus() == "available"){
        $colorStatus = "available";
      }else{
        $colorStatus = "borrowed";
      }
      ?>

    <tr>
      <td><?php echo $book->getTitle(); ?></td>
      <td><?php echo $book->getAuthor(); ?></td>
      <td><?php echo $book->getReleaseDate(); ?></td>
      <td><?php echo $book->getType(); ?></td>
      <td class=" <?php echo $colorStatus; ?>"><?php echo $book->getStatus(); ?></td>
      <td>

        <!-- DELETE -->
        <form class="" action="" method="post">
          <input type="hidden" name="hiddenDeleteBook" value=" <?php echo $book->getIdBook() ?>">
          <input class="btn btn-primary delete" type="submit" name="deleteBook" value="Delete Book">
        </form>

        <!-- UPDATE -->
         <div class="container_form">

        <!-- DROPDOWN BUTTON -->
         <button type="button" class="btn btn-primary button_show_projets"
                 onclick="displayYesNo2()">UPDATE</button>

            <div id="YesNo2" class="container">

              <form action="" method="post">

                <div class="form-group row">
                  <label for="inputName" class="col-sm-2 col-form-label">Title</label>
                  <div class="col-sm-10">
                    <input name="newTitle" type="text" class="form-control" value="<?php echo $book->getTitle() ?>">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="inputAmount" class="col-sm-2 col-form-label">Author</label>
                  <div class="col-sm-10">
                    <input name="newAuthor" type="text" class="form-control" value="<?php echo $book->getAuthor() ?>">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="inputAmount" class="col-sm-2 col-form-label">Release Date</label>
                  <div class="col-sm-10">
                    <input name="newReleaseDate" type="date" class="form-control" value="<?php echo $book->getReleaseDate() ?>">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="inputAmount" class="col-sm-2 col-form-label">Type</label>
                  <div class="col-sm-10">
                    <input name="newType" type="text" class="form-control" value="<?php echo $book->getType() ?>">
                  </div>
                </div>

               <div class="form-group row">
                 <label for="inputAmount" class="col-sm-2 col-form-label">Status</label>
                 <div class="col-sm-10">
                   <input name="newStatus" type="text" class="form-control" value="<?php echo $book->getStatus() ?>">
                 </div>
               </div>

               <div class="form-group row">
                 <label for="inputAmount" class="col-sm-2 col-form-label">User Code</label>
                 <div class="col-sm-10">
                   <input name="newUserCode" type="number" class="form-control" value="1">
                 </div>
               </div>

               <div class="form-group row">
                 <label for="comment">Summary:</label>
                 <textarea name="newSummary" class="form-control" rows="5" value="<?php echo $book->getSummary() ?>"></textarea>
               </div>

                <input class="btn btn-primary" type="submit" name="updateBook" value="Update">
              </form>

            </div>

          </div>


          <!-- SEE -->
          <a href="bookDetailController.php?id= <?php echo $book->getIdBook() ?>">SEE BOOK</a>
      </td>
    </tr>

    <?php
    }
    ?>

  </tbody>
</table>
</article>

<!-- TABLE WITH ALL USERS -->
<article id="usersTable" class="col-4">
  <table class="table table-striped">

    <h3>Users</h3>

    <thead>
      <tr>
        <th>Name</th>
        <th>User Code</th>
        <th>Actions</th>
      </tr>
    </thead>

    <tbody>

      <?php
      foreach ($users as $user) {
        ?>

      <tr>
        <td><?php echo $user->getName(); ?></td>
        <td><?php echo $user->getUserCode(); ?></td>
        <td>actions</td>
      </tr>

      <?php
      }
      ?>

    </tbody>
  </table>
</article>

</div>

<?php
  include("template/footer.php")
 ?>
