<?php require('../includes/header.php'); ?>
<style>
	hr{
		background:rgba(165, 144, 144, 0.2);
	}
	input#password{
		border-right: 0px;
	}
</style>

<section class="h-100">
	<div class="align-items-center h-100">
		<div class="mx-auto col-md-8 col-sm-10 col-lg-7 col-xl-6 col-12">
			<img src="../assets/img/ordinario_colored.png" alt="ordinario_pawnshop" class="img-fluid mb-5 d-block mx-auto rounded"  style="margin-top:3rem!important">
			<div class="card border">
				<div class="card-header  text-center">
						Insert Title Here
				</div>
				<div class="card-body">
					<form action="dashboard.php">
						<div class="form-group row">
							<label for="staticEmail" class="col-sm-4 col-12 col-lg-3 col-xl-3 col-form-label"> <i class="fas fa-user-circle"></i>Username</label>
							<div class="col-sm-8 col-12 col-lg-9 col-xl-8">
							<input type="text" class="form-control" >
							</div>
						</div>
						<div class="form-group row">
							<label for="inputPassword" class="col-sm-4 col-12 col-lg-3 col-xl-3 col-form-label"> <i class="fas fa-key"></i>Password</label>
							<div class="input-group col-sm-8 col-12 col-lg-9 col-xl-8">
								<input type="password" class="form-control" id="password">
								<div class="input-group-append" style="border :1px solid #ced4da;border-left:0px;border-radius:.25rem;margin-left:-5px;margin-top:0px;height:38px">
									<button type="button" class="btn btn-outline" id="showPassword" data-id="off"><i class="fas fa-eye"></i></button>
								</div>
							</div>
						</div>
							<div class="form-group row">
								<label class="offset-lg-4 offset-5 offset-sm-5 form-check-label">
									<input class="form-check-input" type="checkbox"> Remember me
								</label>
							</div>
							<div class="col-xl-12">
								<button class="btn btn-primary mt-2 mb-1" style="width:100%">Sign In</button>
							</div>
					</form>
					<div>
						<hr>
						<h6 class="text-center"> <a href="#" class="text-danger"> <i class="fas fa-exclamation-circle"></i>  Forgot Password? </a></h6>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<?php
    require('../includes/footer.php');
?>
