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
    .hide_data{
      display: none;
    }

    #myBtn {
      /* display: none; */
      /* position: fixed;
      bottom: 20px;
      right: 30px;
      z-index: 99; */
      /* font-size: 15px; */
      /* border: none; */
      /* outline: none; */
      /* background-color: red; */
      /* color: white; */
      /* cursor: pointer; */
      /* padding: 15px;
      border-radius: 4px; */
    }

    html {
  scroll-behavior: smooth;
}

[contenteditable]:focus {
    outline: .7px solid #feb81c;
}
</style>
<div class="content">


<button onclick="topFunction()" id="myBtn" class="btn ordinario-button btn-round btn-fab" style="position:fixed;z-index:99;bottom: 20px;right: 30px;display:none"><i class="material-icons">arrow_upward</i></button>

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

      <div class="card">
        <form action="reports/pawn_print.php">
        <section class="karat_rates">
          <div class="card-header card-header-primary text-center">
          KARAT RATES
          </div> <br>
          <div class="card-body">
            <div class="col-xl-12">
                <div class="col-xl-12 mb-3" style="display:flex;justify-content:center;margin-top:-2rem">
                              <select class="selectpicker show-tick" id="karat_type" data-size="7" data-style="btn-success" title="Type" data-width="30%" tabindex="-98" style="text-align-last:center">
                                  <option value="All">All</option>
                                  <option value="Jewelry">Jewelry Items</option>
                                  <option value="Non-Jewelry-Items">Non-Jewelry Items</option>
                                  <option value="Non-Jewelry-Deductions">Non-Jewelry Deductions</option>
                                  <option value="Other-Charges">Other Charges</option>
                              </select>
                </div>
                <div class="col-xl-12 mb-3" style="display:none;justify-content:center;margin-top:-1rem" id="branch">
                      <select class="selectpicker show-tick" id="branch_value" data-size="7" data-style="btn-success" title="Branch" tabindex="-98" data-width="30%">
                              <!-- <option>Daet Branch</option> -->
                              <!-- <option>Manila Branch</option> -->
                        </select>
                </div>
              <div class="row col-xl-12 spinner-display" style="justify-content:center;height:50vh;align-items: center;display:none">
                <div class="spinner-border text-success" style="width: 3rem; height: 3rem;" role="status">
                    <span class="sr-only">Loading...</span>
                  </div>
              </div>
            
          <section id="jewelry_table" class="col-xl-12" style="display:none;">
                
                  <div class="card">
                        <div class="card-header card-header-icon">
                          <div class="card-icon" style="background: linear-gradient(60deg,#702230,#702230)">
                            <i class="material-icons">assignment</i>
                          </div>
                          <h4 class="card-title">Jewelry Items</h4>
                        </div>
                        <div class="card-body col-xl-12 row">
                            <div class="col-xl-7">
                                <h2 class="text-center">Gold</h2>
                                <table class="table table-border">
                                    <thead>
                                        <tr>
                                            <th>Karat</th>
                                            <th>Gram %</th>
                                            <th>Regular Rate</th>
                                            <th>Special Rate</th>
                                        </tr>
                                    </thead>
                                    <tbody id="gold_table">

                                    </tbody>
                                </table>
                            </div>

                        <div class="col-xl-5">
                            <h2 class="text-center">Silver</h2>
                            <table class="table table-border silver_table">
                                <thead>
                                    <tr>
                                        <th>Karat</th>
                                        <th>Gram %</th>
                                        <th>Regular Rate</th>
                                        <th>Special Rate</th>
                                    </tr>
                                </thead>
                                <tbody id="silver_table">

                                </tbody>
                            </table>

                            <h2 class="text-center">Platinum</h2>
                            <table class="table table-border platinum">
                                <thead>
                                    <tr>
                                        <th>Karat</th>
                                        <th>Gram %</th>
                                        <th>Regular Rate</th>
                                        <th>Special Rate</th>
                                    </tr>
                                </thead>
                                <tbody id="platinum_table">


                                </tbody>
                            </table>
                         </div>
          
                        <!-- end content-->
                      </div>
                      <!--  end card  -->
                    </div>
              </section>

              <section id="non_jewelry_table" class="col-xl-12" style="display:none">

                      <div class="card">
                        <div class="card-header card-header-icon">
                          <div class="card-icon" style="background: linear-gradient(60deg,#702230,#702230)">
                            <i class="material-icons">assignment</i>
                          </div>
                          <h4 class="card-title">Non-Jewelry Items</h4>
                        </div>
                        <div class="card-body">
                            <div class="col-xl-12">
                                <!-- <h2 class="text-center">Add Items</h2> -->
                              <table class="table table-border">
                                  <thead>
                                      <tr>
                                          <th>Item Name</th>
                                          <th>Appraised Value</th>
                                          <th colspan="2">Fields</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                        <tr>
                                            <td style="width:30%"><input type="text" name="item_name" id="item_name" class="form-control" placeholder="Item Name"></td>                                       
                                            <td style="width:30%"><input type="text" name="appraised_value" id="appraised_value" class="form-control" placeholder="Appraised Value"></td>                                       
                                            <td style="width:20%"><input type="text" name="label" id="label" class="form-control" placeholder="Label"></td>                                       
                                            <td style="width:20%">
                                            <select name="element" id="element" class="form-control" style="top:-22px;">
                                                <option>TextBox</option>
                                                <option>Select</option>
                                            </select>
                                            </td>                                       
                                        </tr>
                                  </tbody>
                              </table>
                                <div class="col-xl-12">
                                     <button type="button" class="btn btn-sm" style="left:-15px">Add</button>

                                     <div class="col-xl-12">
                                        <div class="row pull-right">
                                            <input type="text" class="form-control" placeholder="Auth Code">
                                            <button type="button" class="btn btn-sm btn-success ml-2">Save</button>
                                        </div>
                                         

                                     </div>
                                </div>

                                    <table class="table table-border">
                                      <thead>
                                          <tr>
                                              <th>Item Name</th>
                                              <th>Appraised Value</th>
                                              <th>Actions</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                            <tr>
                                                <td>G-Shock</td>                                       
                                                <td>8,000</td>                                       
                                                <td style="width:15%">
                                                <button type="button" class="btn btn-xsm"><i class="material-icons">edit</i></button>
                                                <button type="button" class="btn btn-warning btn-xsm"><i class="material-icons">delete</i></button>
                                                </td>                                       
                                            </tr>
                                      </tbody>
                                  </table>
                            </div>
          
                        <!-- end content-->
                      </div>
                      <!--  end card  -->
                    </div>
                    

                </section>

                <section id="deductions_non_jewelry_table" class="col-xl-12" style="display:none">

                  <div class="card">
                    <div class="card-header card-header-icon">
                      <div class="card-icon" style="background: linear-gradient(60deg,#702230,#702230)">
                        <i class="material-icons">assignment</i>
                      </div>
                      <h4 class="card-title">Deductions Non-Jewelry</h4>
                    </div>
                    <div class="card-body">
                        <div class="col-xl-12">
                            <!-- <h2 class="text-center">Add Items</h2> -->
                          <table class="table table-border">
                              <thead>
                                  <tr>
                                      <th>Item Name</th>
                                      <th>Amount</th>
                                      <th></th>
                                  </tr>
                              </thead>
                              <tbody>
                                    <tr>
                                        <td><input type="text" name="deductions_name" id="deductions_name" class="form-control" placeholder="Name"></td>                                       
                                        <td><input type="text" name="deductions_amount" id="deductions_amount" class="form-control" placeholder="Amount"></td>                                       
                                        <td></td>
                                    </tr>
                              </tbody>
                          </table>
                            <div class="col-xl-12">
                                <button type="button" class="btn btn-sm" style="left:-15px">Add</button>

                                <div class="col-xl-12">
                                    <div class="row pull-right">
                                        <input type="text" class="form-control" placeholder="Auth Code">
                                        <button type="button" class="btn btn-sm btn-success ml-2">Save</button>
                                    </div>
                                    

                                </div>
                            </div>

                                <table class="table table-border">
                                  <thead>
                                      <tr>
                                          <th>Item Name</th>
                                          <th>Amount</th>
                                          <th>Actions</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                        <tr>
                                            <td>G-Shock</td>                                       
                                            <td>8,000</td>                                       
                                            <td style="width:20%">
                                            <button type="button" class="btn btn-xsm"><i class="material-icons">edit</i></button>
                                            <button type="button" class="btn btn-warning btn-xsm"><i class="material-icons">delete</i></button>
                                            </td>                                       
                                        </tr>
                                  </tbody>
                              </table>
                        </div>

                    <!-- end content-->
                  </div>
                  <!--  end card  -->
                  </div>


              </section>

              <section id="other_charges" class="col-xl-12" style="display:none">

                  <div class="card">
                    <div class="card-header card-header-icon">
                      <div class="card-icon" style="background: linear-gradient(60deg,#702230,#702230)">
                        <i class="material-icons">assignment</i>
                      </div>
                      <h4 class="card-title">Other Charges</h4>
                    </div>
                    <div class="card-body">
                        <div class="col-xl-12">
                            <!-- <h2 class="text-center">Add Items</h2> -->
                          <table class="table table-border">
                              <thead>
                                  <tr>
                                      <th>Name</th>
                                      <th>Amount</th>
                                      <th></th>
                                  </tr>
                              </thead>
                              <tbody>
                                    <tr>
                                        <td><input type="text" name="other_charges_name" id="other_charges_name" class="form-control" placeholder="Name"></td>                                       
                                        <td><input type="text" name="other_charges_amount" id="other_charges_amount" class="form-control" placeholder="Amount"></td>                                       
                                        <td></td>
                                    </tr>
                              </tbody>
                          </table>
                            <div class="col-xl-12">
                                <button type="button" class="btn btn-sm" style="left:-15px">Add</button>

                                <div class="col-xl-12">
                                    <div class="row pull-right">
                                        <input type="text" class="form-control" placeholder="Auth Code">
                                        <button type="button" class="btn btn-sm btn-success ml-2">Save</button>
                                    </div>
                                    

                                </div>
                            </div>

                                <table class="table table-border">
                                  <thead>
                                      <tr>
                                          <th>Name</th>
                                          <th>Amount</th>
                                          <th>Actions</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                        <tr>
                                            <td>Documentary Stamp</td>                                       
                                            <td>300</td>                                       
                                            <td style="width:20%">
                                            <button type="button" class="btn btn-xsm"><i class="material-icons">edit</i></button>
                                            <button type="button" class="btn btn-warning btn-xsm"><i class="material-icons">delete</i></button>
                                            </td>                                       
                                        </tr>
                                  </tbody>
                              </table>
                        </div>

                    <!-- end content-->
                  </div>
                  <!--  end card  -->
                  </div>

              </section>              
            </div>
          </div>
        </section>
 

        </form>
      </div>
    </div>
  </div>
</div>

<script>

// console.log(window.location.hash.substring(1));

const dropdown_item = document.querySelectorAll('.dropdown_item');
const karat_type = document.getElementById('karat_type');
const branch = document.getElementById('branch');
const branch_value = document.getElementById('branch_value');
const dropdown = document.getElementsByClassName("dropdown-toggle")[0];
const spinner = document.getElementsByClassName("spinner-display")[0];
const jewelry_table = document.getElementById('jewelry_table');
const non_jewelry_table = document.getElementById('non_jewelry_table');
const deductions_non_jewelry_table = document.getElementById('deductions_non_jewelry_table');
const other_charges = document.getElementById('other_charges');
const urlParams = new URLSearchParams(window.location.search);
const type = urlParams.get('type');
checkHash();
    karat_type.addEventListener('change', function(){
        branch.style.display = 'flex';
        const value = this.value;
        // window.location = '#' + value;
        window.history.pushState( {} , '', '?pg=form&sub=karat_rates&tbl=settings&type='+value ); // append query string without refreshing
        $('#branch_value')
        .html("<option value='daet'>Daet Branch</option><option value='manila'>Manila Branch</option>")
        .selectpicker('refresh');
        jewelry_table.style.display = "none";
        non_jewelry_table.style.display = "none";
        deductions_non_jewelry_table.style.display = "none";
        other_charges.style.display = "none";

    });

    branch_value.addEventListener('change', function(){
        const value = this.value;
        spinner.style.display = 'flex';
        window.location = '#' + value;
        switch(karat_type.value){
          case 'Jewelry':
            tablesData(value);
          break;
          case 'Non-Jewelry-Items':
            non_jewelry_table.style.removeProperty('display');
            spinner.style.display = "none";

          break;
          case 'Non-Jewelry-Deductions':
            deductions_non_jewelry_table.style.removeProperty('display');
            spinner.style.display = "none";

          break;
          case 'Other-Charges':
            other_charges.style.removeProperty('display');
            spinner.style.display = "none";

          break;
        }

    });
  // for(let i = 0; i < dropdown_item.length; i++){
  //     dropdown_item[i].addEventListener('click', function(){
  //       spinner.style.display = 'flex';
  //       table.style.display = 'none';
  //       // gold_table.innerHTML = '';
  //       // silver_table.innerHTML = '';
  //       // gold_table.innerHTML = '';
  //       const dropdown_value = dropdown_item[i].getAttribute("href").substring(1);
  //       const dropdown_text = dropdown_item[i].text;
  //       dropdown.innerHTML = dropdown_text;
  //       tablesData(dropdown_value);
  //     });
  // }

  function tablesData(branch){
      fetch('scripts/karat_rates_script.php?branch='+branch)
        .then((response) => {
           return response.json();
        })
        .then((myJson) => {
          // console.log(typeof myJson);
          for(let key in myJson){
            document.getElementById(key+'_table').innerHTML = '';
              for(let i = 0; i < myJson[key].karat.length; i++){
                document.getElementById(key+'_table').innerHTML += "<tr>"
                          +"<td>"+myJson[key].karat[i]+"</td>"
                          +"<td>"+myJson[key].gram[i]+"</td>"
                          +"<td contenteditable='true'>"+myJson[key].regular_rate[i]+"</td>"
                          +"<td contenteditable='true'>"+myJson[key].special_rate[i]+"</td>"
                          +"</tr>";
                }
                
                // <tr><td>"+myJson.gold.karat[i]+"</td><td>"+myJson.gold.gram[i]+"</td><td>"+myJson.gold.regular_rate[i]+"</td><td>"+myJson.gold.special_rate[i]+"</td></tr>";
           
            }
          jewelry_table.style.removeProperty('display');
          spinner.style.display = "none";
      });
  }

  function checkHash(){
    if(window.location.hash){
      spinner.style.display = 'flex';
      const value = window.location.hash.substring(1);
      // console.log(type);
      switch(type){
          case 'Jewelry':
            tablesData(value);
          break;
          case 'Non-Jewelry-Items':
            non_jewelry_table.style.removeProperty('display');
            spinner.style.display = "none";
          break;
          case 'Non-Jewelry-Deductions':
            deductions_non_jewelry_table.style.removeProperty('display');
            spinner.style.display = "none";
          break;
          case 'Other-Charges':
            other_charges.style.removeProperty('display');
            spinner.style.display = "none";
          break;
        }
      // dropdown.innerHTML = window.location.hash.substring(1) + " Branch";
    }else{
      // dropdown.innerHTML = 'Select Branch';
    }
  }

  // myBtn = document.getElementById("myBtn");

  // window.onscroll = function() {scrollFunction()};

  // function scrollFunction(){
  //   if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
  //     myBtn.style.display = "block";
  //   } else {
  //     myBtn.style.display = "none";
  //   }
  // }

  function topFunction(){
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
  }



// When the user clicks on the button, scroll to the top of the document

</script>