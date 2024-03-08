<form action="<?php echo site_url() . '/auth/login' ?>"  method="post" accept-charset="utf-8" role="form">                            
    <div class="card card-login card-hidden">
        <div class="card-header text-center" data-background-color="rose">
            <h4 class="card-title">Login</h4>
            <div class="social-line hidden">
                <a href="#btn" class="btn btn-just-icon btn-simple">
                    <i class="fa fa-facebook-square"></i>
                </a>
                <a href="#pablo" class="btn btn-just-icon btn-simple">
                    <i class="fa fa-twitter"></i>
                </a>
                <a href="#eugen" class="btn btn-just-icon btn-simple">
                    <i class="fa fa-google-plus"></i>
                </a>
            </div>
        </div>
        <div class="card-content">
            <br><br>
            <div class="input-group">
                
                <span class="input-group-addon">
                    <i class="material-icons">email</i>
                </span>
                <div class="form-group label-floating">
                    <label class="control-label">Email address</label>
                    <input type="text" class="form-control" name="identity" autofocus>
                </div>
            </div>
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="material-icons">lock_outline</i>
                </span>
                <div class="form-group label-floating">
                    <label class="control-label">Password</label>
                    <input type="password" class="form-control" name="password" >
                </div>
            </div>
            <br><br>
        </div>
        <div class="footer text-center">
            <button type="submit" class="btn btn-rose btn-simple btn-wd btn-lg">Let's go</button>
        </div>
    </div>
</form>