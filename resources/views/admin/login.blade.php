<form action="" method="POST">
<input type="text" name="username"><br>
<input type="text" name="password"><br>
<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
<input type="submit" />
</form>