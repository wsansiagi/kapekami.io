<?php $this->load->view('layout/head');?>
<body class="hold-transition login-page" style="background-image:url('../asset/img/bg2.jpg'); ">
    <div class="login-box">
        
        <div class="login-box-body">
            <div class="login-logo">
                <a href="../../index2.html"><b>Sinergitas Data dan Informasi</a>
            </div>
            <p class="login-box-msg">Masukkan Username dan Password</p>
            <div class="body">
                <form id="sign_in" action="<?php echo base_url("auth/cek_login"); ?>" method="POST">
                    <div class="form-group has-feedback">
                            <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <button class="btn btn-primary btn-block btn-flat" type="submit">SIGN IN</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>