<?php
include 'header.php';
?>
  <form action="search.php" method="POST">
 <input type="text" name="search" placeholder="search">
   <button type="submit" name="submit-search"></button>
</form>
<h1>front page</h1>
<h2>all articles</h2>

<div class="article-container">
  <?php
  $sql = "SELECT * FROM article";
  $result = mysqli_query($conn, $sql);
  $queryResult = mysqli_num_rows($result);
  if ($queryResult > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<div>
      <h3>".$row['a_title']."</h3>
       <p>".$row['a_text']."<p>
        <p>".$row['a_date']."</p>
      </div>"
    }
  }
  ?>
</div>

</body>
</html>
