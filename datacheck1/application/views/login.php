
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" id="email" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" id="password" name="password" type="password" value="">
                                </div>
                               
                                <a href="javascript:void(0)" class="btn btn-lg btn-success btn-block" onclick="checkUser()">Login</a>
                            </fieldset>
                        </form>
						<br/><div id="errorMessage"><div class="loginmsg"></div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
