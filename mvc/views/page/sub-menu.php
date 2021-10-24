<?php
echo $_SESSION["user_email"];
 ?>
 <form action="/mvc/User/logout" method="post"class="form-signin">
     <input type="submit" value="Logout">
 </form>
