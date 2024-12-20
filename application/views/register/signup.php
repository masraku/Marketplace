<body>
    <div class="main">
    <form action="<?php echo base_url('SignUp/insert_user');?>" method="post">
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                            <div class="form-group">
                                <label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="username" placeholder="Your Name" required/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" required/>
                            </div>
                            <div class="form-group">
                                <label for="telephone"><i class="zmdi zmdi-lock"></i></label>
                                <input type="telephone" name="telephone" id="telephone" placeholder="Telephone" required/>
                            </div>
                            <div class="d-flex flex-wrap gap-3">
                            <div class="form-group flex-fill">
                                <label for="alamat"><i class="zmdi zmdi-lock"></i></label>
                                <input type="text" name="alamat" id="alamat" placeholder="Alamat" required class="form-control"/>
                            </div>
                            <div class="form-group flex-fill">
                                <label for="kabupaten"><i class="zmdi zmdi-lock"></i></label>
                                <input type="text" name="kabupaten" id="kabupaten" placeholder="Kabupaten" required class="form-control"/>
                            </div>
                            <div class="form-group flex-fill">
                                <label for="provinsi"><i class="zmdi zmdi-lock"></i></label>
                                <input type="text" name="provinsi" id="provinsi" placeholder="Provinsi" required class="form-control"/>
                            </div>
                            <div class="form-group flex-fill">
                                <label for="pos"><i class="zmdi zmdi-lock"></i></label>
                                <input type="text" name="pos" id="pos" placeholder="Kode Pos" required class="form-control"/>
                            </div>
                        </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password" required/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password" required/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                            <div class="signup-image">
                            <a href="<?php echo base_url('login')?>" class="signup-image-link">I am already member</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        </div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>