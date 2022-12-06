<div class="container">

  <!-- Outer -->
  <div class="row justify-content-center">

    <div class="col-lg-6">

      <div class="card o-hidden border-0 shadow-lg my-5 bg-info">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">

            <!-- <div class="col-lg-5 d-none d-lg-block bg-login-image">
            </div> -->
            <div class="col-lg">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-light-900 mb-4" style="color:#fff!important">Aplikasi Forecasting Pertanian</h1>
                </div>
                <?php echo $this->session->flashdata('message'); ?>
                <div class="row justify-content-center align-items-center">
                  <div class="col-12">
                    <form class="user" method="post" action="<?php echo  base_url('auth'); ?>">
                      <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="email" placeholder="Username" name="email" value="<?= set_value('email'); ?>">
                        <small class="text-danger"><?php echo form_error('email'); ?></small>
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password">
                        <small class="text-danger"><?php echo form_error('password'); ?></small>
                      </div>

                      <button type="submit" class="btn btn-dark btn-user btn-block">
                        Login
                      </button>

                    </form>

                  </div>
                </div>
                <hr>
                <!-- <div class="text-center">
                  <a class="small" style="color:aliceblue!important" href="<?php echo base_url('auth/forgotpassword'); ?>">Forgot Password?</a>
                </div> -->
                <!-- <div class="text-center">
                  <a class="small" style="color:aliceblue!important" href="<?php echo base_url(); ?>auth/registration">Create an Account!</a>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</div>