
<body>
    <div class="main">
    <?php if ($this->session->flashdata('message')): ?>
        <p><?php echo $this->session->flashdata('message'); ?></p>
        <?php endif; ?>
    
     <section class="sign-in">
        `<form action="<?php echo base_url('Login/masuk');?>" method="POST">
                <div class="container">
                    <div class="signin-content">
                        <div class="signin-form">
                            <h2 class="form-title">Login</h2>
                            <form method="POST" class="register-form" id="login-form">
                                <div class="form-group">
                                    <label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                    <input type="text" name="username" id="username" placeholder="Your Name"/>
                                </div>
                                <div class="form-group">
                                    <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                    <input type="password" name="password" id="password" placeholder="Password"/>
                                </div>
                                <div class="form-group form-button">
                                    <input type="submit" name="login" id="login" class="form-submit" value="Log in"/>
                                </div>
                            </form>
                            <div class="login-image">
                                <a href="<?php echo base_url('signup')?>" class="signup-image-link">Don't have account yet?</a>
                                </div>
                                </ul>
                            </div>
            </form>
                    </div>
                </div>
            </div>
    </section>
    </div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>