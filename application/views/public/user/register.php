<!-- Main Content -->
<div id="content" class="site-content">
    <!-- Breadcrumb -->
    <div id="breadcrumb">
        <div class="container">
            <h2 class="title">Create Account</h2>

            <ul class="breadcrumb">
                <li><a href="<?= base_url() ?>" title="Home">Home</a></li>
                <li><span>Create Account</span></li>
            </ul>
        </div>
    </div>


    <div class="container">
        <div class="register-page">
            <div class="register-form form">
                <div class="block-title">
                    <h2 class="title"><span>Create Account</span></h2>
                </div>

                <form action="<?= base_url('register/register'); ?>" method="post">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" value="" name="fname">
                    </div>

                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" value="" name="lname">
                    </div>

                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" value="" name="username">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" value="" name="password">
                    </div>
                    <?= $this->session->flashdata('message'); ?>
                    <div class="form-group text-center">
                        <input type="submit" class="btn btn-primary" value="Create Account">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>