<?php

include 'parts/header.php';
include 'parts/nav.php';

echo <<< HTML
<h1>Login</h1>
<form method="post" action="register.php" accept-charset="utf-8">
<label for="name">Username</label>
<input type="text" id="name" placeholder="Max" name="username" required>
<label for="email">eMail</label>
<input type="email" id="email" placeholder="Max@mail.de" name="email" required>
<label for="pw">Password</label>
<input type="password" id="pw" placeholder="eg32-g23" name="pw" required>
<input type="submit">
</form>
HTML;

if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['pw'])){

}

include 'parts/footer.php';