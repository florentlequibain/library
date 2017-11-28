
<h3>Books Availables</h3>

<!-- TABLE WITH ALL BOOKS -->
<table class="table table-striped">

  <thead>
    <tr>
      <th>ID</th>
      <th>Title</th>
      <th>Author</th>
      <th>release Date</th>
      <th>Type</th>
      <th>Summary</th>
      <th>Status</th>
      <th>Actions</th>
    </tr>
  </thead>

  <tbody>

<!-- SHOW ALL ACCOUNT CLASSES -->
    <?php
    foreach ($books as $book) {
      ?>

    <tr>
      <td><?php echo $book->getId(); ?></td>
      <td><?php echo $book->getTitle(); ?></td>
      <td><?php echo $book->getAuthor(); ?></td>
      <td><?php echo $book->getReleaseDate(); ?></td>
      <td><?php echo $book->getType(); ?></td>
      <td><?php echo $book->getSummary(); ?></td>
      <td><?php echo $book->getStatus(); ?></td>
      <td> A C T I O N S </td>
    </tr>

    <?php
    }
    ?>

  </tbody>
</table>
