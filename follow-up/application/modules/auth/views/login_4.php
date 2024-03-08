<div class="login-box" >
    <div class="login-logo">
        <!--        <a href="../../index2.html"><b>Admin</b>LTE</a>-->
        <b>
            Panel Informasi</b><br>
        Divisi Perencanaan Strategis
        
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body" >
        <p class="login-box-msg">Log in</p>

        <form action="<?php echo site_url() . '/auth/login' ?>"  method="post" accept-charset="utf-8" role="form">                            
            <div class="form-group has-feedback">
                <input type="text" class="form-control" name="identity" autofocus>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" name="password" >
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox"> Remember Me
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <!-- /.social-auth-links -->

        <a href="#">I forgot my password</a><br>

    </div>
    <!-- /.login-box-body -->
</div>