<!-- start html -->
<section id="sec-nav" class="container">
    <div class="d-flex justify-content-start mb-3">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link disabled" tabindex="-1" aria-disabled="true" href="<?php echo base_url() ?>"><i class="fas fa-compass"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" tabindex="-1" aria-disabled="true" href="<?php echo base_url('Register/show') ?>">สมัครสมาชิก</a>
            </li>
        </ul>
    </div>
</section>
<section id="sec-register-form" class="container">
    <!-- Collapsable Card Example -->
    <div class="card border-left-primary shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
            <h6 class="m-0 font-weight-bold text-primary">แบบฟอร์มสมาชิก</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="collapseCardExample">
            <div class="card-body">
                <form id="form-submit" action="<?php echo base_url('Register/enroll') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <img id="show-pic" src="<?php echo base_url('images/' . $ex_mem_picture); ?>" class="rounded mx-auto d-block w-25" alt="member image">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="username"> <span class="text-danger">*</span> ชื่อผู้ใช้งาน</label>
                            <input required name="username" type="text" class="form-control" id="username" placeholder="somchai">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="upfile"><span class="text-danger">*</span>รูปประจำตัว</label>
                            <div class="custom-file">
                                <input required type="file" class="custom-file-input" name="upfile" id="upfile">
                                <label id="upfilelabel" class="custom-file-label" for="customFile">เลือกรูปภาพ...</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <span style="display: none;" id="msg-password" class="ml-2 text-danger">รหัสผ่านไม่ตรงกัน</span>
                    </div>
                    <div class="form-row">

                        <div class="form-group col-md-6">
                            <label for="password"><span class="text-danger">*</span>รหัสผ่าน</label>
                            <input required type="password" class="form-control" name="password" id="password" placeholder="1234678">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="idenpassword"><span class="text-danger">*</span>ยืนยันรหัสผ่าน</label>
                            <input required type="password" class="form-control" name="idenpassword" id="idenpassword">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label for="prefixname"><span class="text-danger">*</span>คำนำหน้าชื่อ</label>
                            <select name="prefixname" id="prefixname" class="form-control" required>
                                <option value="" selected disabled>เลือก...</option>
                                <?php
                                foreach ($rs_pf_name as $pf_name) {
                                ?>
                                    <option value="<?php echo $pf_name->pfn_id; ?>"><?php echo $pf_name->pfn_th; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group col-md-5">
                            <label for="firstname"><span class="text-danger">*</span>ชื่อ</label>
                            <input required type="text" class="form-control" name="firstname" id="firstname">
                        </div>
                        <div class="form-group col-md-5">
                            <label for="lastname"><span class="text-danger">*</span>นามสกุล</label>
                            <input required type="text" class="form-control" name="lastname" id="lastname">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address"><span class="text-danger">*</span>ที่อยู่</label>
                        <input required type="text" class="form-control" name="address" id="address" placeholder="กทม. 12/84 หมูบ้านเฉลิมชัย">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="email"><span class="text-danger">*</span>E-mail</label>
                            <input required type="email" class="form-control" name="email" id="email" placeholder="somcahi@gmail.com">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tel"><span class="text-danger">*</span>เบอร์โทรศัพท์</label>
                            <input required pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" type="tel" class="form-control" name="tel" id="tel" placeholder="098-654-0633">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="facebook">Facebook</label>
                            <input type="text" class="form-control" name="facebook" id="facebook" placeholder="สมชาย รักดี">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="instagram">Instagram</label>
                            <input type="text" class="form-control" name="instagram" id="instagram" placeholder="somchai">
                        </div>
                    </div>

                    <div class="d-flex flex-row justify-content-end">
                        <button type="submit" class="btn btn-success">สมัคร</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- end html -->

<!-- start style -->
<style>

</style>
<!-- end style -->

<!-- start script -->
<script>
    const formSubmit = document.querySelector('#form-submit');
    const inputFile = document.querySelector('#upfile');
    const labelFile = document.querySelector('#upfilelabel');
    const showPic = document.querySelector('#show-pic');
    const msgPassword = document.querySelector('#msg-password');
    const idenPassword = document.querySelector('#idenpassword');
    const password = document.querySelector('#password');
    const tel = document.querySelector('#tel');
    const patern = /[0-9]/g;
    const validation = () => password.value == idenPassword.value;

    inputFile.addEventListener('change', () => {
        labelFile.innerHTML = inputFile.files[0].name
        showPic.src = URL.createObjectURL(inputFile.files[0]); // set src to blob url
    })

    password.addEventListener('focus', () => {
        password.value = ''
        idenPassword.value = ''
        msgPassword.style.display = 'none'
        idenPassword.classList.remove('is-invalid')
        password.classList.remove('is-invalid')
    })

    idenPassword.addEventListener('input', () => {
        if (idenPassword.value != password.value) {
            msgPassword.style.display = 'inline'
            idenPassword.classList.add('is-invalid')
            password.classList.add('is-invalid')
        } else {
            msgPassword.style.display = 'none'
            idenPassword.classList.remove('is-invalid')
            password.classList.remove('is-invalid')
        }
        console.log(validation())
    })

    tel.addEventListener('change', () => {
        const numberPure = tel.value.match(patern).join('')
        const numberShow = numberPure.substr(0, 3) + '-' +
            numberPure.substr(3, 3) + '-' +
            numberPure.substr(6, numberPure.length)
        tel.value = numberShow
    })

    formSubmit.addEventListener('submit', (event) => {
        event.preventDefault();
        if (validation()) {
            formSubmit.submit();
        }
    })
</script>
<!-- end script -->