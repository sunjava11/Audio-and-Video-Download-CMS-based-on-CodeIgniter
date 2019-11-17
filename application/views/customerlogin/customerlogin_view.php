<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

			<div class="container">
				<div class="row">
					<div class="col-md-9">
					<div style="margin-top:50px"></div>

                    <?php if(isset($loginerror)):?>
                    <div class="alert alert-danger">
                        <?=$loginerror?>
                    </div>
                    <?php endif;?>
					<?= form_open("CustomerLogin/Login")?>
					<h3>Customer Login</h3>
						<div class="col-md-6">
                        <div class="form-group"
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" required/>
                        </div>

                        <div class="form-group"
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required/>
                        </div>
                        
                        <input type="submit" value="Login" class="btn btn-success"/>
                        <a href="<?=site_url("CustomerLogin/ForgetPassword")?>"> (forget password?)</a>
                        </div>
                        <?= form_close();?>
					</div>					
				</div>
			</div>
			