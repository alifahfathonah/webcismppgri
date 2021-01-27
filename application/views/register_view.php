

<span style="background-color:red;">
  <div class="container"><!-- container class is used to centered  the body of the browser with some decent width-->
      <div class="row"><!-- row class is used for grid system in Bootstrap-->
          <div class="col-md-4 col-md-offset-4"><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->
              <div class="login-panel panel panel-success">
                  <div class="panel-heading">
                      <h3 class="panel-title">Please do Registration here</h3>
                  </div>
                  <div class="panel-body">

					  <?php
					  $pesan_sukses = $this->session->flashdata('sukses_msg');
					  $failmsg = $this->session->flashdata('fail_msg');
					  if($pesan_sukses){
					  	?>
					  <div class="alert-success">
						  <?php echo $pesan_sukses;?>
					  </div>
					  <?php
					  }else if($failmsg){?>
					  	<div class="alert-danger">
						  <?php echo $failmsg;?>

					  </div>
					  <?php

					  }
					  ?>

                      <form role="form" method="post" action="<?php echo base_url('user/cek_login'); ?>">

                              <div class="form-group">
                                  <input class="form-control" placeholder="Please enter E-mail" name="user_email" type="email" autofocus>
                              </div>
                              <div class="form-group">
                                  <input class="form-control" placeholder="Enter Password" name="user_password" type="password" value="">
                              </div>

						  <button class="btn btn-lg btn-success btn-block" type="submit" value="Register" name="register" >Register</button>

                          </fieldset>
                      </form>
                      <center><b>You have Already registered ?</b> <br></b><a href="<?php echo base_url('user/login_view'); ?>"> Please Login</a></center><!--for centered text-->
                  </div>
              </div>
          </div>
      </div>
  </div>



</span>

