<style>
    form .form-group select.form-control {
    position: static;
    top: -5px;
    }
</style>
<div class="content">
  <!-- <div class="container-fluid"> -->
    
    <!-- <a href="" data-modal="#modal" class="modal__trigger">Modal 1</a>
    <div id="modal" class="modal modal__bg" role="dialog" aria-hidden="true">
      <div class="modal__dialog">
        <div class="modal__content">
          <div class="col-xl-12 row mobile_resize">
            <div class="col-xl-6">
              <div class="form-group label-floating">
                <label class="control-label">Inventory Number</label>
                  <input class="form-control" type="number" name="appraised_value" id="appraised_value" value="0">
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div> -->
    
    <!-- <div class="col-xl-12 container table-responsive" id="itemTable"> -->
    <div class="col-xl-12">
              <div class="card">
                <div class="card-header card-header-icon">
                  <div class="card-icon" style="background: linear-gradient(60deg,#702230,#702230)">
                    <i class="material-icons">person_add</i>
                  </div>
                  <h4 class="card-title">Users</h4>
                </div>

                 <div class="card-body">
                 <form action="javascript:insertDataDB('user')" id="user">

                    <div class="col-xl-12 mt-5">
                        <div class="col-xl-6 mx-auto">
                            <div class="row">
                                <label class="col-xl-3 col-lg-4 col-md-4 ">First Name: </label>
                                <div class="col-xl-7" style="top:-20px;">
                                    <input type="text" class="form-control" name="firstName" id="firstName">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-xl-3 col-lg-4 col-md-4 ">Last Name: </label>
                                <div class="col-xl-7" style="top:-20px;">
                                    <input type="text" class="form-control" name="lastName" id="lastName">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-xl-3 col-lg-4 col-md-4 ">Username: </label>
                                <div class="col-xl-7" style="top:-20px;">
                                    <input type="text" class="form-control" name="username" id="username">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-xl-3 col-lg-4 col-md-4 ">Password: </label>
                                <div class="col-xl-7" style="top:-20px;">
                                    <input type="password" class="form-control" name="password" id="password">
                                </div>
                            </div>
                            <div class="row" style="position:static">
                                <label class="col-xl-3 col-lg-4 col-md-4 ">Branch: </label>
                                <div class="col-xl-7" style="top:-20px;">
                                    <select name="branch" id="branch" class="form-control">
                                        <option value=""></option>
                                        <option value="daet">Daet Branch</option>
                                        <option value="manila">Manila Branch</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-xl-3 col-lg-4 col-md-4 ">Access: </label>
                                <div class="col-xl-7" style="top:-20px;">
                                    <select name="access" id="access" class="form-control">
                                            <option value=""></option>
                                            <option value="USER">End-User</option>
                                            <option value="ADMIN">Administrator</option>
                                    </select>                                
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-xl-3 col-lg-4 col-md-4 ">Auth Code: </label>
                                <div class="col-xl-7" style="top:-20px;">
                                    <input type="text" class="form-control" name="authCode" id="authCode">
                                </div>
                            </div>
                                <div class="text-center">
                                         <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                        </div>


                    </div>

                    </form>
                      <table class="table table-hover mt-3">
                          <thead>
                              <tr>
                                <th>Full Name</th>
                                <th>Username</th>
                                <th>Branch</th>
                                <th>Access</th>
                                <th>Auth Code</th>
                                <th>Actions</th>
                              </tr>
                          </thead>
                          <tbody id="users_data">
                              <!-- <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr> -->
                          </tbody>
                      </table>
                      <div class="row col-xl-12 spinner-display" style="justify-content:center;height:50vh;align-items: center;display:none">
                        <div class="spinner-border text-success" style="width: 3rem; height: 3rem;" role="status">
                            <span class="sr-only">Loading...</span>
                          </div>
                      </div>
                <!-- end content-->
              </div>

              <!--  end card  -->
            </div>
    <!-- </div> -->
  <!-- </div> -->
</div>
<script>
const table = 'users';
const spinner = document.getElementsByClassName("spinner-display")[0];
spinner.style.display = 'flex';

</script>