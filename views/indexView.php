
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

<article id="booksTable" class="col-8">
<!-- TABLE WITH ALL BOOKS -->
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
</article>

<article id="usersTable" class="col-4">
  <!-- TABLE WITH ALL USERS -->
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
        <td>A C T I O N S</td>
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
