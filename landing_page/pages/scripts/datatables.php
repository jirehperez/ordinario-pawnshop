<?php

$dbDetails = array(
    'host' => 'localhost',
    'user' => 'root',
    'pass' => 'regan',
    'db'   => 'rsk_masterlist'
);

switch($_GET['data_type']){
  case("renew_redeem"):
    $table = 'setup_employee';
    $primaryKey = 'employee_id';
    $where = "";
    $columns = array(
        array( 'db' => 'first_name', 'dt' => 0 ),
        array( 'db' => 'middle_name', 'dt' => 1 ),
        array( 'db' => 'last_name', 'dt' => 2 ),
        array( 'db' => 'company', 'dt' => 3 ),
        array( 'db' => 'warehouse', 'dt' => 4 ),
        array( 'db' => 'department', 'dt' => 5 ),
        array( 'db' => 'position', 'dt' => 6 ),
        array( 'db' => 'position', 'dt' => 7 ),
        array( 'db' => 'position', 'dt' => 8 ),
        array( 'db' => 'position', 'dt' => 9 ),
        array( 'db' => 'p_key', 'dt' => -1 )
    );
  break;
  default:
}

// Include SQL query processing class
if($_GET['data_type'] != ''){
  require( 'ssp.class.php' );
  echo json_encode(
      // SSP::simple( $_GET, $dbDetails, $table, $primaryKey, $columns)
      SSP::complex( $_GET, $dbDetails, $table, $primaryKey, $columns, $where)
  );
}