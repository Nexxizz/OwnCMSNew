<?php

include 'parts/header.php';
include 'parts/nav.php';
include 'parts/databaseconf.php';

echo <<< HTML
<h1>Register</h1>
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

        $stm2 = 'SELECT username, email FROM users';
        $stm2Query = $connect->query($stm2);

        if (!$stm2Query) {
            throw new Exception("Abfrage fehlgeschlagen: " . $this->_database->error);
        }

        $getValues = $stm2Query->fetch_assoc();

        var_dump($getValues);

        if($getValues['username'] != $_POST['username'] && $getValues['email'] != $_POST['email']) {
            if ($stm = $connect->prepare('INSERT INTO users (username, email, password) VALUES (?, ?, ?)')){
                $stm->bind_param('sss', $_POST['username'], $_POST['email'], $_POST['pw']);
                $stm->execute();
                header('Location: login.php');
                $stm->close();
                die();
            }

        } else {
            echo "Benutzer bereits registriert";
        }

}

include 'parts/footer.php';