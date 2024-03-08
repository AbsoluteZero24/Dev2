
<div class="container" >
    <div class="row">
        <div class="col-lg-4 col-lg-offset-4">
            <br>

            <br>


            <div class="panel-body">
                <h3 class="text-center"><b>Sistem Informasi<br>Monitoring Follow-up Temuan</b></h3>
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
                    <button type="submit" style="background-color: #4b646f; color: white" class="btn btn-purple btn-block">Sign in</button>
                </form>
            </div>

        </div>
    </div>
</div>
</body>
