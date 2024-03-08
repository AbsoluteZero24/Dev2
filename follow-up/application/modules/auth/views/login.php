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
        </div>
        <div class="footer text-center">
            <button type="submit" class="btn btn-rose btn-simple btn-wd btn-lg">Let's go</button>
        </div>
    </div>
</form>

<form action="<?php echo site_url() . '/auth/login' ?>"  method="post" accept-charset="utf-8" role="form">                            
    <div class="card card-login card-hidden">
        <div class="card-header text-center" data-background-color="rose">
            <h4 class="card-title">Login</h4>
        </div>
        <br>
        <br>
        <div class="card-content">
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="material-icons">email</i>
                </span>
                <div class="form-group label-floating">
                    <label class="control-label" >Email address</label>
                    <input type="text" class="form-control" name="identity" autofocus autocomplete>
                </div>
            </div>
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="material-icons">lock_outline</i>
                </span>
                <div class="form-group label-floating">
                    <label class="control-label">Password</label>
                    <input type="password" class="form-control" name="password" value="" autocomplete>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="footer text-center">
            <button type="submit" class="btn btn-rose btn-wd btn-lg">Masuk</button>
        </div>
    </div>
</form>

<div class="container" hidden >
    <div class="row">
        <div class="col-lg-4 col-lg-offset-4">
            <br>
            <h3 class="text-center"><b>Sistem Informasi<br>Verifikasi Ekspor Migas</b></h3>
            <br>

            <div class="panel panel-primary" style="margin-left: auto; margin-right: auto; width: 400px">
                <div class="panel-body" >
                    <p class="text-center">Sign in</p>
                    <hr class="clean">
                    <form action="<?php echo site_url() . '/auth/login' ?>"  method="post" accept-charset="utf-8" role="form">                            
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input type="text" class="form-control form-control-circle"  name="identity" placeholder="Username/Email Adress" autofocus>
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                            <input class="form-control form-control-circle" name="password"  type="password"  placeholder="Password" value="">
                        </div>
                        <div class="form-group">
                            <label class="cr-styled">
                                <input type="checkbox" ng-model="todo.done">
                                <i class="fa"></i> 
                            </label>
                            Remember me
                        </div>
                        <button type="submit" class="btn btn-purple btn-block">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
