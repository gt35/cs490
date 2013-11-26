<?php
session_start();
$crn = $_SESSION['crnNumber'];
?>
<html>
<form id="form" action="http://web.njit.edu/~gt35/cs490/front/professorWelcome2.php" method="POST">
<input type="hidden" name="dropDown" value="<?php echo $crn ?>">
</form>
<script>
document.getElementById("form").submit();
</script>
</html>