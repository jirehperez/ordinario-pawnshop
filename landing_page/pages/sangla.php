<style>
    @media(min-width: 576px){
      .float-left-jc{
        float: left;
      }
      .float-right-mey{
        float: right;
      }
    }
    @media(max-width: 576px){
      .btn-small {
        padding: .25rem .5rem;
        font-size: .875rem;
        line-height: 1.5;
        border-radius: .2rem;
      }
      .margin-small{
        margin: 1rem 0;
      }
    }
    table{
      text-align: center;
      font-size: 11pt !important;
      padding: 0px !important;
    }
    table td{
      border:1px solid #D2D2D2
    }
</style>
<div class="content">
  <div class="container-fluid">
    <!-- <div class="col-xl-12"> -->
    <!-- <div class="col-xl-12">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Pawn</a></li>
          <li class="breadcrumb-item active" aria-current="page">Add Pawn</li>
        </ol>
      </nav>
    </div> -->
    <div class="progress-div">
      <div class="progress mb-4" style="height: 15px;">
        <div class="progress-bar progress-bar-striped progress-bar-animated" 
          role="progressbar" style="width: 0%;background-color:#feb81c" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
            0%
        </div>
      </div>
      <div class="card">
        <form action="reports/pawn_print.php">
        <section class="batch1">
          <div class="card-header card-header-primary text-center">
            TICKET DETAILS
          </div> <br>
          <div class="card-body">
            <div class="col-xl-12 row mobile_resize">
              <div class="col-xl-6">
                <div class="form-group row">
                  <label class="col-xl-4 col-form-label">PT #:</label>
                  <div class="col-xl-6 pt-2">
                    1
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-xl-4 col-form-label">Transaction Type:</label>
                  <div class="col-xl-6">
                    <select name="transaction_type" id="transaction_type" class="form-control">
                      <option disabled="" selected=""></option>
                      <option value="Old">Old</option>
                      <option value="New">New</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-xl-4 col-form-label">Processed By:</label>
                  <div class="col-xl-6 pt-2">
                    Chris Domingo
                  </div>
                </div>
              </div>
              <!-- second column -->
              <div class="col-xl-6">
              <div class="form-group row">
                <label class="col-xl-4">Transaction Date:</label>
                <div class="col-xl-12">
                  <input type="date" name="transaction_date" id="transaction_date" class="form-control" onchange="transaction_dates()">
                </div>
              </div>
                <div class="form-group row mt-3">
                  <label class="col-xl-4">Maturity Date:</label>
                  <div class="col-xl-12">
                    <input type="text" name="maturity_date" id="maturity_date" class="form-control" readonly>
                  </div>
                </div>
                <div class="form-group row mt-3">
                  <label class="col-xl-4">Expiration Date:</label>
                  <div class="col-sm-12">
                    <input type="text" name="expiration_date" id="expiration_date" class="form-control" readonly>
                  </div>
                </div>
                <div class="form-group row mt-3">
                  <label class="col-xl-4">Auction Date:</label>
                  <div class="col-xl-12">
                    <input type="text" name="auction_date" id="auction_date" class="form-control" readonly>
                  </div>
                </div>
              </div>
            </div>
            <button type="button" class="btn btn-primary float-right-mey" id="next1"><i class="material-icons">arrow_forward</i></button>
          </div>
        </section>
        <!-- Customer Tab -->
        <section class="batch2" style="display:none">
          <div class="card-header card-header-primary text-center">
            CUSTOMER
          </div> <br>
          <div class="card-body">
            <div class="col-xl-12 row mobile_resize">
              <div class="col-xl-6">
                <div class="form-group label-floating">
                  <label class="control-label">Name</label>
                    <select name="customer" id="customer" class="form-control">
                      <option></option>
                      <option value="REGAN INDUSTRIAL SALES INC.">REGAN INDUSTRIAL SALES INC.</option>
                      <option value="SUPREME STEEL PIPE CORP.">SUPREME STEEL PIPE CORP.</option>
                      <option value="KIRIN RESOURCES INC.">KIRIN RESOURCES INC.</option>
                    </select>
                </div>
                <div class="form-group label-floating">
                  <label class="control-label">ID Presented:</label>
                    <select name="id_type" id="id_type" class="form-control">
                      <option></option>
                      <option value="SSS">SSS</option>
                      <option value="Driver's License">Driver's License</option>
                      <option value="Pag-ibig">Pag-ibig</option>
                      <option value="Postal ID">Postal ID</option>
                      <option value="Passport">Passport</option>
                    </select>
                </div>
                <div class="form-group label-floating">
                  <label class="control-label">Country</label>
                  <select name="country_id" id="country_id" class="form-control">
                    <option disabled="" selected=""></option>
                    <option value="Afghanistan"> Afghanistan </option>
                    <option value="Albania"> Albania </option>
                    <option value="Algeria"> Algeria </option>
                    <option value="American Samoa"> American Samoa </option>
                    <option value="Andorra"> Andorra </option>
                    <option value="Angola"> Angola </option>
                    <option value="Anguilla"> Anguilla </option>
                    <option value="Antarctica"> Antarctica </option>
                  </select>
                </div>
                <div class="form-group label-floating">
                  <label class="control-label">ID Number:</label>
                  <input type="text" class="form-control" name="id_number" id="id_number">
                </div>
              </div>
              <div class="col-xl-6">
                <div class="form-group row">
                  <label class="label-floating">ID Image:</label>
                  <div class="col-sm-12">
                    <label class="btn btn-success btn-sm float-left-jc">  
                      <i class="material-icons">arrow_upward</i> Upload Image <input type="file" hidden>
                    </label>  
                  </div>
                </div>
              </div>
            </div>
            <button type="button" class="btn btn-primary float-left-jc" id="back1"><i class="material-icons">arrow_back</i></button>
            <button type="button" class="btn btn-primary float-right-mey" id="next2"><i class="material-icons">arrow_forward</i></button>
          </div>
        </section>
        <!-- Item Tab -->
        <section class="batch3" style="display:none;">
          <div class="card-header card-header-primary text-center">
            ITEM
          </div> <br>
          <div class="card-body">
            <div class="col-xl-12 row mobile_resize">
              <div class="col-xl-3">
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" id="category_jewelry" name="category" value="jewelry" onclick="getSuki(this)"> Jewelry
                    <span class="circle">
                      <span class="check"></span>
                    </span>
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" id="category_non-jewelry" name="category" value="non-jewelry" onclick="getSuki(this)"> Non-Jewelry
                    <span class="circle">
                      <span class="check"></span>
                    </span>
                  </label>
                </div>
              </div>
              <div class="col-xl-6">
                <div id="suki" class="form-check" style="display:none;">
                  <label class="form-check-label">
                    <input id="suki_check" class="form-check-input" type="checkbox" value=""> Suki Rate? (For Jewelry Items)
                    <span class="form-check-sign">
                      <span class="check"></span>
                    </span>
                  </label>
                </div>
              </div>
              <div class="col-xl-12 container table-responsive" id="itemTable">
              </div>
              <button id="addTable" class="btn btn-warning btn-sm" type="button">ADD</button>
              <!-- <button type="button" class="btn btn-primary btn-sm mx-auto">Submit</button> -->
            </div>
            <button type="button" class="btn btn-primary float-left-jc" id="back2"><i class="material-icons">arrow_back</i></button>
            <button type="button" class="btn btn-primary float-right-mey" id="next3"><i class="material-icons">arrow_forward</i></button>
          </div>
        </section>
        <!-- Computation Tab -->
        <section class="batch4" style="display:none">
          <div class="card-header card-header-primary text-center">
            COMPUTATION
          </div> <br>
          <div class="card-body">
            <div class="col-xl-12 row mobile_resize">
              <div class="col-xl-6">
                <div class="form-group label-floating">
                  <label class="control-label">Appraised Value</label>
                    <input class="form-control" type="number" name="appraised_value" id="appraised_value" value="0">
                </div>
                <div class="form-group label-floating">
                  <label class="control-label">Principal</label>
                    <input class="form-control" type="number" name="principal" id="principal" value="0">
                </div>
                <div class="form-group label-floating">
                  <label class="control-label">Other Charges</label>
                    <input class="form-control" type="number" name="other_charges" id="other_charges" value="0">
                </div>
                <div class="form-group label-floating">
                  <label class="control-label">Net Proceeds</label>
                    <input class="form-control" type="number" name="net_proceeds" id="net_proceeds" value="0">
                </div>
              </div>
              <div class="col-xl-6">
                <div class="form-group label-floating">
                  <label class="control-label">Other Charges</label>
                    <select class="form-control">
                      <option></option>
                    </select>
                </div>
                <div class="form-group row label-floating">
                  <label class="control-label">Amount</label>
                  <div class="col-sm-3">
                    <input class="form-control" type="number" value="0">
                  </div>
                    <button type="button" class="btn btn-success btn-sm"><i class="material-icons">add</i></button>
                    <button type="button" class="btn btn-danger btn-sm"><i class="material-icons">remove</i></button>
                </div>
              </div>
            </div>
            <button type="button" class="btn btn-primary float-left-jc" id="back3"><i class="material-icons">arrow_back</i></button>
            <button type="submit" class="btn btn-primary float-right-mey" id="add_pawn"><i class="material-icons">check</i></button>
          </div>
        </section>
        </form>
      </div>
    </div>
  </div>
</div>
<script>
  function getSuki(radio){
    if(document.getElementById("category_jewelry").checked){
        document.getElementById("suki").style.display = "block";
        document.getElementById("suki_check").disabled = false;
    }else {
        document.getElementById("suki").style.display = "none";
        document.getElementById("suki_check").disabled = true;
    }
  }


</script>