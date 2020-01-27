<?php 
  if(isset($_GET['sub'])){
    $edit = $connect->editRecord(1,$tbl); 
    if($_GET['sub'] == 'renew_redeem'){ ?>
      return "\
        <center>\
          <a class='btn btn-warning btn-xsm' href='reference_id="+data[-1]+"'>\
            <i class='material-icons'>search</i>\
          </a>\
          <a class='btn btn-success btn-xsm' href='reference_id="+data[-1]+"' title='Edit'>\
            <i class='material-icons'>edit</i>\
          </a>\
          <a class='btn btn-danger btn-xsm' href='reference_id="+data[-1]+"' title='Delete'>\
            <i class='material-icons'>delete</i>\
          </a>\
          <a class='btn btn-primary btn-xsm' href='reference_id="+data[-1]+"' title='Renew'>\
            <i class='material-icons'>autorenew</i>\
          </a>\
          <a class='btn btn-info btn-xsm' href='reference_id="+data[-1]+"' title='Redeem'>\
            <i class='material-icons'>send</i>\
          </a>\
        </center>";
  <?php } 
  }
  ?>