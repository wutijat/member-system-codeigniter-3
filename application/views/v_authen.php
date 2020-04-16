<div class="container-fluid">
    <div class="row no-gutter">
        <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
        <div class="col-md-8 col-lg-6">
            <div class="login d-flex align-items-center py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-lg-8 mx-auto">
                            <h3 class="login-heading mb-4">ยินดีตอนรับ </h3>
                            <?php
                            if ($this->session->flashdata('login_failed')) {
                            ?>
                                <h6 class="text-danger">ชื่อผู้ใช้งาน หรือ รหัสผ่านไม่ถูกต้อง</h6>
                            <?php
                            }
                            ?>
                            <form action="<?php echo base_url('Authen/login'); ?>" method="post">
                                <div class="form-label-group">
                                    <input type="text" id="txt-username" name="username" class="form-control" placeholder="username" required autofocus>
                                    <label for="txt-username">ชื่อผู้ใช้งาน</label>
                                </div>

                                <div class="form-label-group">
                                    <input type="password" id="txt-password" name="password" class="form-control" placeholder="Password" required>
                                    <label for="txt-password">รหัสผ่าน</label>
                                </div>

                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">จำรหัสผ่าน</label>
                                </div>
                                <button id="btn-login" class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">เข้าสู่ระบบ</button>
                                <div class="text-center">
                                    <a class="small" href="#">ลืมรหัสผ่าน ?</a></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- start style -->
<style>
    :root {
        --input-padding-x: 1.5rem;
        --input-padding-y: 0.75rem;
    }

    .login,
    .image {
        min-height: 100vh;
    }

    .bg-image {
        background-image: url('https://source.unsplash.com/WEQbe2jBg40/600x1200');
        background-size: cover;
        background-position: center;
    }

    .login-heading {
        font-weight: 300;
    }

    .btn-login {
        font-size: 0.9rem;
        letter-spacing: 0.05rem;
        padding: 0.75rem 1rem;
        border-radius: 2rem;
    }

    .form-label-group {
        position: relative;
        margin-bottom: 1rem;
    }

    .form-label-group>input,
    .form-label-group>label {
        padding: var(--input-padding-y) var(--input-padding-x);
        height: auto;
        border-radius: 2rem;
    }

    .form-label-group>label {
        position: absolute;
        top: 0;
        left: 0;
        display: block;
        width: 100%;
        margin-bottom: 0;
        /* Override default `<label>` margin */
        line-height: 1.5;
        color: #495057;
        cursor: text;
        /* Match the input under the label */
        border: 1px solid transparent;
        border-radius: .25rem;
        transition: all .1s ease-in-out;
    }

    .form-label-group input::-webkit-input-placeholder {
        color: transparent;
    }

    .form-label-group input:-ms-input-placeholder {
        color: transparent;
    }

    .form-label-group input::-ms-input-placeholder {
        color: transparent;
    }

    .form-label-group input::-moz-placeholder {
        color: transparent;
    }

    .form-label-group input::placeholder {
        color: transparent;
    }

    .form-label-group input:not(:placeholder-shown) {
        padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
        padding-bottom: calc(var(--input-padding-y) / 3);
    }

    .form-label-group input:not(:placeholder-shown)~label {
        padding-top: calc(var(--input-padding-y) / 3);
        padding-bottom: calc(var(--input-padding-y) / 3);
        font-size: 12px;
        color: #777;
    }

    /* Fallback for Edge
-------------------------------------------------- */

    @supports (-ms-ime-align: auto) {
        .form-label-group>label {
            display: none;
        }

        .form-label-group input::-ms-input-placeholder {
            color: #777;
        }
    }

    /* Fallback for IE
-------------------------------------------------- */

    @media all and (-ms-high-contrast: none),
    (-ms-high-contrast: active) {
        .form-label-group>label {
            display: none;
        }

        .form-label-group input:-ms-input-placeholder {
            color: #777;
        }
    }
</style>
<!-- end style -->