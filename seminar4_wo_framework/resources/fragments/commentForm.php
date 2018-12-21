<?php
if(isset($_SESSION['userUid'])){
echo  "<div class='commentSubmit'>
        <form method='POST'>
        <input id='commentUsername' type='hidden' value='".$_SESSION['userUid']."'>
        <input id='commentDate' type='hidden' value='".date('Y-m-d H.i:s')."'>
        <textarea id='comMessage'></textarea><br>
        <button id='submitId' type='submit'>Comment</button>
        </form>
      </div>";
      }
?>

<script type="text/javascript">
$(document).ready(function(){
  $('#submitId').click(function(e) {
    e.preventDefault();
    var commentUsername = $('#commentUsername').val();
    var commentDate = $('#commentDate').val();
    var comMessage = $('#comMessage').val();
    $.ajax({
        type: 'POST',
        url: 'resources/includes/postComment.php',
        data: {
          commentUsernamePHP: commentUsername,
          commentDatePHP: commentDate,
          commentMessagePHP: comMessage
         },
        success: function() {
            alert('Comment was created');
        }
    });
  });
});
</script>
