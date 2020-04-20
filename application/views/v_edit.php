<!-- start html -->
<section id="sec-nav" class="container">
    <div class="d-flex justify-content-start mb-3">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link disabled" tabindex="-1" aria-disabled="true" href="<?php echo base_url() ?>"><i class="fas fa-compass"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="<?php echo base_url() ?>">จัดการสมาชิก</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" tabindex="-1" aria-disabled="true" href="#"><i class="fas fa-chevron-right"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" tabindex="-1" aria-disabled="true" href="#">แก้ไข</a>
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
                <form id="form-submit" action="<?php echo base_url('Register/edit') ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="reg_id" value="<?php echo $rs_register_detail[0]->reg_id; ?>">
                    <input type="hidden" name="mem_picture" value="<?php echo $rs_register_detail[0]->mem_picture; ?>">
                    <input type="hidden" name="reg_timestamp" value="<?php echo $rs_register_detail[0]->reg_timestamp; ?>">
                    <input type="hidden" name="mem_id" value="<?php echo $rs_register_detail[0]->mem_id; ?>">
                    <div class="form-group">
                        <img id="show-pic" src="<?php echo base_url('images/' . $rs_register_detail[0]->mem_picture); ?>" class="rounded mx-auto d-block w-25" alt="member image">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="username">ชื่อผู้ใช้งาน</label>
                            <input required value="<?php echo $rs_register_detail[0]->reg_username; ?>" name="username" type="text" class="form-control" id="username" placeholder="somchai">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="upfile">รูปประจำตัว</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="upfile" id="upfile">
                                <label id="upfilelabel" class="custom-file-label" for="customFile"><?php echo $rs_register_detail[0]->mem_picture; ?></label>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <span style="display: none;" id="msg-password" class="ml-2 text-danger">รหัสผ่านไม่ตรงกัน</span>
                    </div>
                    <div class="form-row">

                        <div class="form-group col-md-6">
                            <label for="password">รหัสผ่าน</label>
                            <input required value="<?php echo $rs_register_detail[0]->reg_password; ?>" type="password" class="form-control" name="password" id="password" placeholder="1234678">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="idenpassword">ยืนยันรหัสผ่าน</label>
                            <input required value="<?php echo $rs_register_detail[0]->reg_password; ?>" type="password" class="form-control" name="idenpassword" id="idenpassword">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label for="prefixname">คำนำหน้าชื่อ</label>
                            <select required name="prefixname" id="prefixname" class="form-control">
                                <option value="" disabled>เลือก...</option>
                                <?php
                                foreach ($rs_pf_name as $pf_name) {
                                ?>
                                    <option <?php ($rs_register_detail[0]->pfn_id == $pf_name->pfn_id) ? 'selected' : '' ?> value="<?php echo $pf_name->pfn_id; ?>"><?php echo $pf_name->pfn_th; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group col-md-5">
                            <label for="firstname">ชื่อ</label>
                            <input required value="<?php echo $rs_register_detail[0]->mem_fname; ?>" type="text" class="form-control" name="firstname" id="firstname">
                        </div>
                        <div class="form-group col-md-5">
                            <label for="lastname">นามสกุล</label>
                            <input required value="<?php echo $rs_register_detail[0]->mem_lname; ?>" type="text" class="form-control" name="lastname" id="lastname">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address">ที่อยู่</label>
                        <input required value="<?php echo $rs_register_detail[0]->mem_addr; ?>" type="text" class="form-control" name="address" id="address" placeholder="กทม. 12/84 หมูบ้านเฉลิมชัย">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="email">E-mail</label>
                            <input required value="<?php echo $rs_register_detail[0]->mem_email; ?>" type="email" class="form-control" name="email" id="email" placeholder="somcahi@gmail.com">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tel">เบอร์โทรศัพท์</label>
                            <input required value="<?php echo $rs_register_detail[0]->mem_tel; ?>" type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class="form-control" name="tel" id="tel" placeholder="098-654-0633">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="facebook">Facebook</label>
                            <input value="<?php echo $rs_register_detail[0]->mem_fb; ?>" type="text" class="form-control" name="facebook" id="facebook" placeholder="สมชาย รักดี">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="instagram">Instagram</label>
                            <input value="<?php echo $rs_register_detail[0]->mem_ig; ?>" type="text" class="form-control" name="instagram" id="instagram" placeholder="somchai">
                        </div>
                    </div>

                    <div class="d-flex flex-row justify-content-end">
                        <button type="submit" class="btn btn-success">บันทึก</button>
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