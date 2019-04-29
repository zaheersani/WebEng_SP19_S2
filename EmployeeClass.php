<?php
require_once ("config.php");

class Employee {
    public $id, $EmpID, $FullName, $Designation;
    private $pdo;

    public function __construct($id=null, $EmpID=null, $FullName=null, $Designation=null)
    {
        $connString = "mysql:host=" . DBHOST . ";dbname=" . DBNAME;
        $this->pdo = new PDO($connString, DBUSER, DBPASSWORD);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if($id != null) {
            $this->id = $id;
            $this->EmpID = $EmpID;
            $this->FullName = $FullName;
            $this->Designation = $Designation;
        }
    }

    /*
     * Function takes employee attributes to insert into database
     * Function returns true on successful insertion, otherwise false
     */
    public function Insert($id, $EmpID, $FullName, $Designation) {
        // TODO: Write Definition to insert record into database
    }

    /*
     * Function takes employee attributes to update record in database
     * Function returns true on successful update otherwise false
     */
    public function Update($id, $EmpID, $FullName, $Designation) {
        // TODO: Write Definition of this method
    }

    /*
     * This function returns Employee objects Array
     */
    public function GetAllRecords() {
        $sql = "select * from employee";
        $result = $this->pdo->query($sql);
        $empArr = array();
        $i = 0;
        while($row = $result->fetch()) {
            $row['EmpID'];
            $empArr[$i] = new Employee($row['id'], $row['EmpID'], $row['FullName'], $row['Designation']);
            $i++;
        }
        return $empArr;
    }

    /*
     * This function returns single Object of this class
     * Search Criteria: id
     */
    public function GetSingleRecord($id) {
        // TODO: Write definition of this method
    }

    /*
     * Delete single Record
     */
    public function Delete($id) {
        // TODO: Write Definition of this method
    }
}

?>