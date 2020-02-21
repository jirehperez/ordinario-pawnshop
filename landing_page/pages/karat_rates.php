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
        <section class="batch1">
          <div class="card-header card-header-primary text-center">
          KARAT RATES
          </div> <br>
          <div class="card-body">
            <div class="col-xl-12 row mobile_resize">
                <div class="col-xl-12 mb-3" style="margin-top:-2rem">
                    <div class="form-group row" style="display:flex;justify-content:center">
                        <div class="dropdown">
                          <button class="btn btn-warning dropdown-toggle" style="width:250px" data-name="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Branch
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="width:250px">
                            <a class="dropdown-item dropdown_item" href="#daet">Daet Branch</a>
                            <a class="dropdown-item dropdown_item" href="#manila">Manila Branch</a>
                          </div>
                        </div>
                            <!-- <select name="branch" id="branch" class="form-control">
                            <option disabled="" selected=""></option>
                            <option value="Daet">Daet</option>
                            <option value="Manila">Manila</option>
                            </select>
                             -->
           
                    </div>
                </div>
              <div class="row col-xl-12 spinner-display" style="justify-content:center;height:50vh;align-items: center;display:none">
                <div class="spinner-border text-success" style="width: 3rem; height: 3rem;" role="status">
                    <span class="sr-only">Loading...</span>
                  </div>
              </div>
            
                <section id="table" class="col-xl-12 row" style="display:none">
                
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
                </section>
              </div>
 
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
const dropdown = document.getElementsByClassName("dropdown-toggle")[0];
const spinner = document.getElementsByClassName("spinner-display")[0];
const table = document.getElementById('table');
  checkHash();

  for(let i = 0; i < dropdown_item.length; i++){
      dropdown_item[i].addEventListener('click', function(){
        spinner.style.display = 'flex';
        table.style.display = 'none';
        // gold_table.innerHTML = '';
        // silver_table.innerHTML = '';
        // gold_table.innerHTML = '';
        const dropdown_value = dropdown_item[i].getAttribute("href").substring(1);
        const dropdown_text = dropdown_item[i].text;
        dropdown.innerHTML = dropdown_text;
        tablesData(dropdown_value);
      });
  }

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
          table.style.removeProperty('display');
          spinner.style.display = "none";
      });
  }
  function checkHash(){
    if(window.location.hash){
      spinner.style.display = 'flex';
      tablesData(window.location.hash.substring(1));
      dropdown.innerHTML = window.location.hash.substring(1) + " Branch";
    }else{
      dropdown.innerHTML = 'Select Branch';
    }
  }

  myBtn = document.getElementById("myBtn");

  window.onscroll = function() {scrollFunction()};

  function scrollFunction(){
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      myBtn.style.display = "block";
    } else {
      myBtn.style.display = "none";
    }
  }
  function topFunction(){
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
  }



// When the user clicks on the button, scroll to the top of the document

</script>