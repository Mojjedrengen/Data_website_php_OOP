<?php
    include_once 'header.php';
?>

    <div id="content-container">
      <div id="main">
          <div class="container">
            <h1>Upload your posts</h1>
            <form action="includes/uploadpost.inc.php" method="post">
                <textarea name="content" cols="30" rows="10" placeholder="Write your post here"></textarea>
                <br><br>
                <button type="submit" name="submit">Submit</button>
            </form>
        </div>
      </div>
    </div>

</body>
</html>