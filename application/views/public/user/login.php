<!-- Main Content -->
<div id="content" class="site-content">
    <!-- Breadcrumb -->
    <div id="breadcrumb">
        <div class="container">
            <h2 class="title">Login</h2>

            <ul class="breadcrumb">
                <li><a href="<?= base_url() ?>" title="Home">Home</a></li>
                <li><span>Login</span></li>
            </ul>
        </div>
    </div>


    <div class="container">
        <div class="login-page">
            <div class="login-form form">
                <div class="block-title">
                    <h2 class="title"><span>Login</span></h2>
                </div>

                <form action="#" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" value="" name="email">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" value="" name="password">
                    </div>

                    <div class="form-group text-center">
                        <div class="link">
                            <a href="#">Forgot your password?</a>
                            <a href="user-register.html">Register?</a>
                        </div>
                    </div>

                    <div class="form-group text-center">
                        <input type="submit" class="btn btn-primary" value="Sign In">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>