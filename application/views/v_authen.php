<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">ยินดีตอนรับ</h1>
                                    <?php
                                    if ($this->session->flashdata('login_failed')) {
                                    ?>
                                        <h6 class="text-danger">ชื่อผู้ใช้งาน หรือ รหัสผ่านไม่ถูกต้อง</h6>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <form class="user" action="<?php echo base_url('Authen/login'); ?>" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="username" id="username" aria-describedby="emailHelp" placeholder="กรอกชื่อผู้ใช้งาน...">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" name="password" id="password" placeholder="กรอกรหัสผ่าน...">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">จดจำฉัน</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        เข้าสู่ระบบ
                                    </button>
                                    <hr>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<!-- start script -->
<script>
    const body = document.querySelector('body');
    body.classList.add('bg-gradient-primary');
</script>
<!-- end script -->

<!-- start style -->
<style>
    .bg-login-image {
        background: url(https://images.unsplash.com/photo-1504384308090-c894fdcc538d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=600&q=800)
    }
</style>
<!-- end style -->