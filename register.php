<?php

declare(strict_types=1);
// UTF-8 marker äöüÄÖÜß€


require_once './Page.php';
include 'parts/nav.php';


class register extends Page
{
    // to do: declare reference variables for members
    // representing substructures/blocks

    /**
     * Instantiates members (to be defined above).
     * Calls the constructor of the parent i.e. page class.
     * So, the database connection is established.
     * @throws Exception
     */
    protected function __construct()
    {
        parent::__construct();
        // to do: instantiate members representing substructures/blocks
    }

    /**
     * Cleans up whatever is needed.
     * Calls the destructor of the parent i.e. page class.
     * So, the database connection is closed.
     */
    public function __destruct()
    {
        parent::__destruct();
    }


    /**
     * Fetch all data that is necessary for later output.
     * Data is returned in an array e.g. as associative array.
     * @return array An array containing the requested data.
     * This may be a normal array, an empty array or an associative array.
     */


    protected function getViewData(): array
    {
        // to do: fetch data for this view from the database
        // to do: return array containing data
        return array();
    }

    /**
     * First the required data is fetched and then the HTML is
     * assembled for output. i.e. the header is generated, the content
     * of the page ("view") is inserted and -if available- the content of
     * all views contained is generated.
     * Finally, the footer is added.
     * @return void
     */
    protected function generateView(): void
    {
        $data = $this->getViewData(); //NOSONAR ignore unused $data
        $this->generatePageHeader('Own CMS New', 'js/main.js'); //to do: set optional parameters
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
        $this->generatePageFooter();
    }

    /**
     * Processes the data that comes via GET or POST.
     * If this page is supposed to do something with submitted
     * data do it here.
     * @return void
     */
    protected function processReceivedData(): void
    {
        parent::processReceivedData();
        if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['pw'])){

            $stm2 = 'SELECT username, email FROM users';
            $stm2Query = $this->_database->query($stm2);

            if (!$stm2Query) {
                throw new Exception("Abfrage fehlgeschlagen: " . $this->_database->error);
            }

            $getValues = $stm2Query->fetch_assoc();

            var_dump($getValues);

            if($getValues['username'] != $_POST['username'] && $getValues['email'] != $_POST['email']) {
                if ($stm = $this->_database->prepare('INSERT INTO users (username, email, password) VALUES (?, ?, ?)')){
                    //        $hashed = SHA1($_POST['password']);
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
        // to do: call processReceivedData() for all members
    }

    /**
     * This main-function has the only purpose to create an instance
     * of the class and to get all the things going.
     * I.e. the operations of the class are called to produce
     * the output of the HTML-file.
     * The name "main" is no keyword for php. It is just used to
     * indicate that function as the central starting point.
     * To make it simpler this is a static function. That is you can simply
     * call it without first creating an instance of the class.
     * @return void
     */
    public static function main(): void
    {
        try {
            $page = new register();
            $page->processReceivedData();
            $page->generateView();
        } catch (Exception $e) {
            //header("Content-type: text/plain; charset=UTF-8");
            header("Content-type: text/html; charset=UTF-8");
            echo $e->getMessage();
        }
    }
}

// This call is starting the creation of the page.
// That is input is processed and output is created.
register::main();

// Zend standard does not like closing php-tag!
// PHP doesn't require the closing tag (it is assumed when the file ends).
// Not specifying the closing ? >  helps to prevent accidents
// like additional whitespace which will cause session
// initialization to fail ("headers already sent").
//? >
