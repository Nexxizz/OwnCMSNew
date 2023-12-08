<?php

declare(strict_types=1);
// UTF-8 marker äöüÄÖÜß€


require_once './Page.php';

class edit extends Page
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
        if (isset($_GET['site'])) {

        $siteName = $this->_database->real_escape_string($_GET['site']);

        $sql = "SELECT * FROM examples where name = '$siteName'";

        $recordset = $this->_database->query($sql);
        if (!$recordset) {
            throw new Exception("Abfrage fehlgeschlagen: " . $this->_database->error);
        }

        $result = $recordset->fetch_assoc();
//        $record = $recordset->fetch_assoc();
//        while ($record) {
//            $result[] = $record;
//            $record = $recordset->fetch_assoc();
//        }

        $recordset->free();
        return $result;
        }
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
        if($data != array()) {
        $this->generatePageHeader('Own CMS New', 'js/main.js'); //to do: set optional parameters
        $titel = htmlspecialchars($data['title']);
        $navi = htmlspecialchars($data['navi']);
        $content = htmlspecialchars($data['content']);
        $siteName = $data['name'];
        echo <<< TITEL
        <a href="dashboard.php">Zurück zu Dashboard</a>

        <form action="edit.php?site=$siteName" method="post" accept-charset="utf-8">
        <h3>Titel</h3>
        <textarea rows="5" cols="120" name="titel">$titel</textarea>
        <input type="submit" value="Editieren">
        </form>
TITEL;


        echo <<< NAVI
        <form action="edit.php?site=$siteName" method="post" accept-charset="utf-8">
        <h3>Navigation</h3>
        <textarea rows="15" cols="120" name="navi">$navi</textarea>
        <input type="submit" value="Editieren">
        </form>
NAVI;

        echo <<< MAIN
        <form action="edit.php?site=$siteName" method="post" accept-charset="utf-8">
        <h3>Content</h3>
        <textarea rows="20" cols="120" name="content">$content</textarea>
        <input type="submit" value="Editieren">
        </form>
MAIN;

        $this->generatePageFooter();
    }
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
        if (isset($_GET['site'])) {
            $siteName = $this->_database->real_escape_string($_GET['site']);
            if (isset($_POST['titel'])) {
                $saveTitel = $this->_database->real_escape_string($_POST['titel']);
                $sqlUpdateOrdArt = "UPDATE examples SET title = '$saveTitel' WHERE name = '$siteName'";

                $sqlUpdateCheck = $this->_database->query($sqlUpdateOrdArt);

                if (!$sqlUpdateCheck) {
                    throw new Exception("Abfrage fehlgeschlagen: " . $this->_database->error);
                }
                echo "Titel editiert";
//                header('Location: edit.php?site='.$siteName);
            }

            if (isset($_POST['navi'])) {
                $saveNavi = $this->_database->real_escape_string($_POST['navi']);
                $sqlUpdateOrdArt = "UPDATE examples SET navi = '$saveNavi' WHERE name = '$siteName'";

                $sqlUpdateCheck = $this->_database->query($sqlUpdateOrdArt);

                if (!$sqlUpdateCheck) {
                    throw new Exception("Abfrage fehlgeschlagen: " . $this->_database->error);
                }
                echo "Navi editiert";
//                header('Location: edit.php?site='.$siteName);
            }

            if (isset($_POST['content'])) {
                $saveContent = $this->_database->real_escape_string($_POST['content']);
                $sqlUpdateOrdArt = "UPDATE examples SET content = '$saveContent' WHERE name = '$siteName'";

                $sqlUpdateCheck = $this->_database->query($sqlUpdateOrdArt);

                if (!$sqlUpdateCheck) {
                    throw new Exception("Abfrage fehlgeschlagen: " . $this->_database->error);
                }
                echo "Content editiert";
//                header('Location: edit.php?site='.$siteName);
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
            $page = new edit();
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
edit::main();

// Zend standard does not like closing php-tag!
// PHP doesn't require the closing tag (it is assumed when the file ends).
// Not specifying the closing ? >  helps to prevent accidents
// like additional whitespace which will cause session
// initialization to fail ("headers already sent").
//? >
