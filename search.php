<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="icon-bar">
  <a href="index.html"><i class="fa fa-home"></i></a>
  <a class="active" href="search.html"><i class="fa fa-search"></i></a>
 <a href="mailto:contactzachstep@gmail.com"><i class="fa fa-envelope"></i></a>
<a href="https://www.instagram.com/stepzach/"><i class="fa fa-instagram" style="font-size:38px"></i></a>
  <a href="news.html"><i class="fa fa-user-circle-o"></i></a>
</div>
<link rel="stylesheet" type="text/css"href="styles.css">
  <?php
include 'dbh.php';
?>
  <form action="dbh.php" method="POST">
 <input type="text" name="search" placeholder="search">
   <button type="submit" name="submit-search"></button>
</form>
<h1>front page</h1>
<h2>all articles:</h2>

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
