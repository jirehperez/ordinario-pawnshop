<?php
include('includes/header.php');
?>
<style>
    @media(min-width: 576px){
        .float-left-jc{
            float: left;
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
</style>
<div class="col-xl-12 my-5 h-100">
    <div class="col-xl-12">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pawn</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Pawn</li>
        </ol>
    </nav>


    </div>
    <div class="container progress-div">
        <div class="progress mb-4" style="height: 20px;">
            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 0%;background-color:#feb81c" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                0%
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                Add Pawn
            </div>
            <div class="card-body text-center">
                <section class="batch1">
                    <h5 class="text-center mb-4">Ticket Details</h5>
                    <hr>
                    <div class="col-xl-12 row">

                        <div class="col-xl-6">
                            <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-4 col-12 col-lg-2 col-xl-4 col-form-label">PT #:</label>
                                    <div class="col-sm-8 col-12 col-lg-9 col-xl-7 text-xl-left text-md-left text-lg-left text-sm-left pt-2">1</div>
                            </div>

                            <div class="form-group row mt-3">
                                    <label for="staticEmail" class="col-sm-4 col-12 col-lg-2 col-xl-4 col-form-label">Transaction Type:</label>
                                    <div class="col-sm-8 col-12 col-lg-9 col-xl-7">
                                        <select name="transaction_type" id="transaction_type" class="form-control">
                                            <option value="Old">Old</option>
                                            <option value="New">New</option>
                                        </select>
                                    </div>
                            </div>

                            <div class="form-group row mt-3">
                                    <label for="staticEmail" class="col-sm-4 col-12 col-lg-2 col-xl-4 col-form-label">Processed By:</label>
                                    <div class="col-sm-8 col-12 col-lg-9 col-xl-7 text-xl-left text-md-left text-lg-left text-sm-left pt-2">Chris Domingo</div>
                            </div>
                        </div>
                        <!-- second row -->
                        <div class="col-xl-6">
                            <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-4 col-12 col-lg-2 col-xl-4 col-form-label">Transaction Date:</label>
                                    <div class="col-sm-8 col-12 col-lg-9 col-xl-7">
                                        <input type="date" name="transaction_date" id="transaction_date" class="form-control">
                                    </div>
                            </div>

                            <div class="form-group row mt-3">
                                    <label for="staticEmail" class="col-sm-4 col-12 col-lg-2 col-xl-4 col-form-label">Maturity Date:</label>
                                    <div class="col-sm-8 col-12 col-lg-9 col-xl-7">
                                        <input type="date" name="transaction_date" id="maturity_date" class="form-control">
                                    </div>
                            </div>


                            <div class="form-group row mt-3">
                                    <label for="staticEmail" class="col-sm-4 col-12 col-lg-2 col-xl-4 col-form-label">Expiration Date:</label>
                                    <div class="col-sm-8 col-12 col-lg-9 col-xl-7">
                                        <input type="date" name="transaction_date" id="maturity_date" class="form-control">
                                    </div>
                            </div>

                            <div class="form-group row mt-3">
                                    <label for="staticEmail" class="col-sm-4 col-12 col-lg-2 col-xl-4 col-form-label">Auction Date:</label>
                                    <div class="col-sm-8 col-12 col-lg-9 col-xl-7">
                                        <input type="date" name="transaction_date" id="maturity_date" class="form-control">
                                    </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary mx-auto btn-lg mt-3 mb-3" id="next1"><i class="fas fa-arrow-circle-right"></i></button>
                </section>
        
                <!-- Customer Tab -->
                <section class="batch2" style="display:none">
                    <h5 class="text-center mb-4">Customer</h5>
                    <hr>
                    <div class="col-xl-12 container">

                        <div class="col-xl-12">
                            <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-4 col-12 col-lg-2 col-xl-4 col-form-label">Name</label>
                                    <div class="col-sm-8 col-12 col-lg-9 col-xl-7">
                                    <select name="customer" id="customer" class="form-control">
                                            <option></option>
                                            <option value="REGAN INDUSTRIAL SALES INC.">REGAN INDUSTRIAL SALES INC.</option>
                                            <option value="SUPREME STEEL PIPE CORP.">SUPREME STEEL PIPE CORP.</option>
                                            <option value="KIRIN RESOURCES INC.">KIRIN RESOURCES INC.</option>
                                        </select>
                                    </div>
                            </div>

                            <div class="form-group row mt-3">
                                    <label for="staticEmail" class="col-sm-4 col-12 col-lg-2 col-xl-4 col-form-label">ID Presented:</label>
                                    <div class="col-sm-8 col-12 col-lg-9 col-xl-7">
                                        <select name="transaction_type" id="transaction_type" class="form-control">
                                            <option></option>
                                            <option value="SSS">SSS</option>
                                            <option value="Driver's License">Driver's License</option>
                                            <option value="Pag-ibig">Pag-ibig</option>
                                            <option value="Postal ID">Postal ID</option>
                                            <option value="Passport">Passport</option>
                                        </select>
                                    </div>
                            </div>

                            <div class="form-group row mt-3">
                                    <label for="staticEmail" class="col-sm-4 col-12 col-lg-2 col-xl-4 col-form-label">ID Number:</label>
                                    <div class="col-sm-8 col-12 col-lg-9 col-xl-7">
                                        <input type="text" class="form-control" name="id_number" id="id_number">
                                    </div>
                            </div>

                            <div class="form-group row mt-3">
                                    <label for="staticEmail" class="col-sm-4 col-12 col-lg-2 col-xl-4 col-form-label">ID Image:</label>
                                    <div class="col-sm-8 col-12 col-lg-9 col-xl-2">

                                    <label class="btn btn-success btn-sm float-left-jc">  
                                    <i class="fas fa-arrow-circle-up"></i> Upload Image <input type="file" hidden>
                                    </label>
                                        <!-- <div class="custom-file">
                                            <input type="file" class="custom-file-input bg-success" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>          -->
                                                              
                                    </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary mx-auto btn-lg mt-3 mb-3" id="next2"><i class="fas fa-arrow-circle-right"></i></button>
                </section>

                <!-- Item Tab -->
                <section class="batch3" style="display:none">
                    <h5 class="text-center mb-4">Item</h5>
                    <hr>
                    <div class="col-xl-12 row">

                        <div class="col-xl-6">
                            <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-4 col-12 col-lg-2 col-xl-4 col-form-label">Item Category</label>
                                    <div class="col-sm-8 col-12 col-lg-9 col-xl-8">
                                        <select name="item_category" id="item_category" class="form-control">
                                            <option></option>
                                            <option value="Jewelry">Jewelry</option>
                                            <option value="Non-Jewelry">Non-Jewelry</option>
                                        </select>                                  
                                    </div>
                            </div>

                            <div class="form-group row mt-3">
                                    <label for="staticEmail" class="col-sm-4 col-12 col-lg-2 col-xl-4 col-form-label">Material Item Type Karat</label>
                                    <div class="col-sm-8 col-12 col-lg-9 col-xl-8">
                                        <select name="transaction_type" id="transaction_type" class="form-control">
                                            <option></option>
                                            <option value="SSS">SSS</option>
                                            <option value="Driver's License">Driver's License</option>
                                            <option value="Pag-ibig">Pag-ibig</option>
                                            <option value="Postal ID">Postal ID</option>
                                            <option value="Passport">Passport</option>
                                        </select>
                                    </div>
                            </div>

                            <div class="form-group row mt-3">
                                    <label for="staticEmail" class="col-sm-4 col-12 col-lg-2 col-xl-4 col-form-label">Weight (g)</label>
                                    <div class="col-sm-8 col-12 col-lg-9 col-xl-8">
                                        <input class="form-control" type="number" name="weight" id="weight" value="0.00">
                                    </div>
                            </div>

                            <div class="form-group row mt-3">
                                    <label for="staticEmail" class="col-sm-4 col-12 col-lg-2 col-xl-4 col-form-label">Rate Appraised Value</label>
                                    <div class="col-sm-8 col-12 col-lg-9 col-xl-8">
                                        <input class="form-control" type="number" name="rate_appraised_value" id="rate_appraised_value" value="0">
                                    </div>
                            </div> 

                        </div>

                        
                        <div class="col-xl-6">
                            <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-4 col-12 col-lg-2 col-xl-4 col-form-label">Description</label>
                                    <div class="col-sm-8 col-12 col-lg-9 col-xl-8">
                                         <textarea class="form-control" rows="5" id="description"></textarea>                              
                                    </div>
                            </div>

                            <div class="form-group row mt-3">
                                    <label for="staticEmail" class="col-sm-4 col-12 col-lg-2 col-xl-4 col-form-label">Upload Image</label>
                                    <div class="col-sm-8 col-12 col-lg-9 col-xl-8">
                                        <label class="btn btn-success btn-sm float-left-jc">  
                                            <i class="fas fa-arrow-circle-up"></i> Upload Image <input type="file" hidden>
                                        </label>
                                    </div>
                            </div>

                        </div>

                        <button type="button" class="btn ordinario-button mb-4 mx-auto">Submit</button>

                        <div class="col-sm-12 col-12 col-lg-12 col-xl-12 table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Material Item Type Karat</th>
                                        <th>Weight (g)</th>
                                        <th>Rate Appraised Value</th>

                                    </tr>
                                    <tr>
                                        <td>Gold</td>
                                        <td>5.00</td>
                                        <td>1,200.00</td>
                                    </tr>
                         
                                </thead>
                            </table>
                        </div>

                        </div>
                        <button type="button" class="btn btn-primary mx-auto btn-lg mt-3 mb-3" id="next3"><i class="fas fa-arrow-circle-right"></i></button>
                </section>

                           <!-- Computation Tab -->
                <section class="batch4" style="display:none">
                    <h5 class="text-center mb-4">Computation</h5>
                    <hr>
                    <div class="col-xl-12 container">

                        <div class="col-xl-12">
                            <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-12 col-md-12 col-12 col-lg-3 col-xl-5 col-form-label">Appraised Value</label>
                                    <div class="col-sm-12 col-12 col-lg-8 col-xl-5">
                                          <input class="form-control" type="number" name="rate_appraised_value" id="rate_appraised_value" value="0">
                              
                                    </div>
                            </div>

                            <div class="form-group row mt-3">
                                    <label for="staticEmail" class="col-sm-12 col-md-12 col-12 col-lg-3 col-xl-5 col-form-label">Principal</label>
                                    <div class="col-sm-12 col-12 col-lg-8 col-xl-5">
                                         <input class="form-control" type="number" name="rate_appraised_value" id="rate_appraised_value" value="0">
                                    </div>
                            </div>
                            <div class="form-group row mt-3">
                                    <label for="staticEmail" class="col-sm-12 col-md-12 col-12 col-lg-3 col-xl-5 col-form-label">Other Charges</label>
                                    <div class="col-sm-12 col-12 col-lg-8 col-xl-5">
                                         <input class="form-control" type="number" name="rate_appraised_value" id="rate_appraised_value" value="0">
                                    </div>
                            </div>
                            <div class="form-group row mt-3">
                                    <label for="staticEmail" class="col-sm-12 col-md-12 col-12 col-lg-3 col-xl-5 col-form-label">Net Proceeds</label>
                                    <div class="col-sm-12 col-12 col-lg-8 col-xl-5">
                                         <input class="form-control" type="number" name="rate_appraised_value" id="rate_appraised_value" value="0">
                                    </div>
                            </div>

                            <div class="form-group row mt-3">
                                    <label for="staticEmail" class="col-sm-12 col-md-12 col-12 col-lg-3 col-xl-5 col-form-label">Other Charges</label>
                                    <div class="col-sm-4 col-md-5 col-12 col-lg-3 col-xl-3">
                                         <select class="form-control" name="other_charges" id="other_charges">
                                             <option></option>
                                         </select>
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-12 col-lg-3 col-xl-2 margin-small">
                                         <input class="form-control" type="number" name="rate_appraised_value" id="rate_appraised_value" value="0">
                                    </div>
                                    <div class="col-sm-4 col-md-3 col-12 col-lg-2 col-xl-2">
                                    <button type="button" class="btn btn-success btn-small"><i class="fas fa-plus-circle"></i></button>
                                    <button type="button" class="btn btn-danger btn-small"><i class="fas fa-minus-circle"></i></button>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn ordinario-button mx-auto btn-lg mt-3 mb-3" id="next4">Submit</button>
                </section>
            </div>
        </div>
    </div>

</div>

<?php
include('includes/footer.php')
?>

<script>
    $(document).ready(function(){
        $('#next1').on('click', function(){
            $('.batch1').toggle("slide");
            $('.batch2').toggle("slide");
            $('.progress-bar').css('width', '25%');
            $('.progress-bar').text('25%')
        });
        $('#next2').on('click', function(){
            // $('.batch1').toggle("slide");
            $('.batch2').toggle("slide");
            $('.batch3').toggle("slide");
            $('.progress-bar').css('width', '50%');
            $('.progress-bar').text('50%')
        });

        $('#next3').on('click', function(){
            $('.batch4').toggle("slide");
            $('.batch3').toggle("slide");
            $('.progress-bar').css('width', '75%');
            $('.progress-bar').text('75%')
        });
    });
</script>