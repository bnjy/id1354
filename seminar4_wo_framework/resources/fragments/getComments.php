    <script>
      $(document).ready(function(){
        var commentsCount = 1;
        $("#comments-button").click(function() {
          commentsCount = commentsCount + 1;
          $('#load-comment-div').load("resources/includes/showComments.php", {
            commentNewCount: commentsCount
          });
        });
      });
    </script>

    <?php
      require 'resources/includes/dbh.inc.php';
      $sql = "SELECT * FROM comments LIMIT 2";
      $result = $conn->query($sql);
      while($row = $result->fetch_assoc()){
        echo "<div id='comment-div' class='comment-box'><p>";
          echo $row['uidComment']."<br>";
          echo $row['commentDate']."<br>";
          echo $row['message'];
        echo "</p>";
?>
<?php
    if(isset($_SESSION['userUid'])) {
      if($_SESSION['userUid'] == $row['uidComment']){
        echo "<form class='delete-form' method='POST'>
                <input id='comment-id' type='hidden' value='".$row['cid']."'>
                <button id='deleteId' type='submit'>Delete</button>
              </form>

              <form class='edit-form' method='POST'>
                <input id='cid' type='hidden' value='".$row['cid']."'>
                <input id='uidComment' type='hidden' value='".$row['uidComment']."'>
                <input id='date' type='hidden' value='".$row['commentDate']."'>
                <input id='message' type='hidden' value='".$row['message']."'>
                <button>Edit</button>
              </form>
              ";
      }
    }
    echo "</div>";
  }
  ?>
  <div id='load-comment-div'></div>

  <button id='comments-button'>Show more comments</button>

<script type="text/javascript">
  $(document).ready(function(){
    $('#deleteId').click(function(e) {
      e.preventDefault();
      var commentId = $('#comment-id').val();
      var result = confirm('Are you sure you want to delete this comment?');
      if(result){
        $.ajax({
            type: 'POST',
            url: 'resources/includes/deleteComments.php',
            data: {
              commentDeletePHP: commentId
             },
            success: function(data) {
              if(data){
                alert('Comment was deleted');
              } else {
                alert('Nothing was deleted');
              }
            }
        });
      }
    });
  });
  </script>
