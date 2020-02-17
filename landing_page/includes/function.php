<?php
class MainFunction{

  public  $conn;
  private $host     = "192.168.0.179";
  private $db_name  = "rsk_logistics";
  private $username = "root";
  private $password = "regan";

  public function __construct(){

    // try{
    //   $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
    //   $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
    // } catch(PDOException $exception){
    //     echo "Connection error: " . $exception->getMessage();
    // }

    // $this->connection = $this->conn;

    // return $this->conn;
  }

  function formGroup($type=NULL,$title=NULL,$name=NULL,$value=NULL,$attribute=NULL,$date_format=NULL){
    echo '<div class="form-group">
            <label>'.$title.'</label>
            <input type="'.$type.'" class="au-input au-input--full '.$name.'" id="'.$name.'" name="'.$name.'" placeholder="'.$title.'" value="'.$value.'" '.$attribute.'>
          </div>';
  }

  function reportStartup(){
    // echo '<link rel="stylesheet" media="all" type="text/css" href="">';
  }

  function url_enc($page=NULL,$subpage=NULL,$table=NULL,$id=NULL,$ref=NULL,$any=NULL){
    $pg = isset($page) ? '?pg='.urlencode($page) : '?'  ;
    $sub = isset($subpage) ? '&sub='.urlencode($subpage) : '';
    $tbl = isset($table) ? '&tbl='.urlencode($table) : '';
    $id = isset($id) ? '&id='.urlencode($id) : '';
    $ref = isset($ref) ? '&ref='.urlencode($ref) : '';
    $result = $pg.$sub.$tbl.$id.$ref.$any;

    return $result;
  }

  function editRecord($logged=NULL,$page=NULL,$p_key=NULL){
    $logged = isset($logged)!='' ? $logged : $_SESSION['logistics_id'];
		$query = "SELECT 
      b.module_access
    FROM
    rsk_masterlist.module_page a
      LEFT JOIN rsk_masterlist.module_access b ON b.module_page_id = a.module_page_id AND b.status != 2
    WHERE a.status != 2 AND a.page = '$page' AND b.credential_id = $logged";
    $result = $this->connection->prepare($query);
    $result->execute();
    $edit_button = "";
    $row = $result->fetch(PDO::FETCH_ASSOC);
    $edit_button = $row['module_access'];

    return $edit_button;
  }

}
?>