<?php

class DataManager {

    private $data;
    private $csvFilePath = "data.csv";

    public function packData() {
        $this->data = array(
            $_POST['name'],
            $_POST['surname'],
            $_POST['datepicker'],
            $_POST['sex'],
            $_POST['nation'],
            $_POST['nationality'],
            $_POST['address'],
            $_POST['nr'],
            $_POST['home'],
            $_POST['npa'],
            $_POST['state'],
            $_POST['cellPhone'],
            $_POST['homePhone'],
            $_POST['email'],

            $_POST['name2'],
            $_POST['surname2'],
            $_POST['datepicker2'],
            $_POST['sex2'],
            $_POST['nation2'],
            $_POST['nationality2'],
            $_POST['address2'],
            $_POST['nr2'],
            $_POST['home2'],
            $_POST['npa2'],
            $_POST['state2'],
            $_POST['cellPhone2'],
            $_POST['homePhone2'],
            $_POST['email2'],

            $_POST['schoolType'],
            $_POST['schoolName'],
            $_POST['schoolPlace'],
            $_POST['schoolYear'],

            $_POST['workType'],
            $_POST['workName'],
            $_POST['workPlace'],
            $_POST['workYear']
        );
    }

    public function writeData() {
        $file = fopen($this->csvFilePath, 'a');

        fputcsv($file, $this->data);

        fclose($file);
    }
}

$manager = new DataManager();
$manager->packData();
$manager->writeData();

$name = $_POST['name'];

header("Location: Welcome.php?n=".$name);

?>
