<!-- start html -->
<section id="sec-register-form" class="container">
    <!-- Collapsable Card Example -->
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
            <h6 class="m-0 font-weight-bold text-primary">แบบฟอร์มสมาชิก</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="collapseCardExample">
            <div class="card-body">
                <form action="<?php echo base_url('Register/enroll') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <img id="show-pic" src="<?php echo base_url('images/' . $ex_mem_picture); ?>" class="rounded mx-auto d-block w-25" alt="member image">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="username">ชื่อผู้ใช้งาน</label>
                            <input name="username" type="text" class="form-control" id="username" placeholder="somchai">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="upfile">รูปประจำตัว</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="upfile" id="upfile">
                                <label id="upfilelabel" class="custom-file-label" for="customFile">เลือกรูปภาพ...</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">

                        <div class="form-group col-md-6">
                            <label for="password">รหัสผ่าน</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="1234678">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="idenpassword">ยืนยันรหัสผ่าน</label>
                            <input type="password" class="form-control" name="idenpassword" id="idenpassword">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label for="prefixname">คำนำหน้าชื่อ</label>
                            <select name="prefixname" id="prefixname" class="form-control">
                                <option selected disabled>เลือก...</option>
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
                            <label for="firstname">ชื่อ</label>
                            <input type="text" class="form-control" name="firstname" id="firstname">
                        </div>
                        <div class="form-group col-md-5">
                            <label for="lastname">นามสกุล</label>
                            <input type="text" class="form-control" name="lastname" id="lastname">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address">ที่อยู่</label>
                        <input type="text" class="form-control" name="address" id="address" placeholder="กทม. 12/84 หมูบ้านเฉลิมชัย">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="somcahi@gmail.com">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tel">เบอร์โทรศัพท์</label>
                            <input type="text" class="form-control" name="tel" id="tel" placeholder="098-654-0633">
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
    const inputFile = document.querySelector('#upfile');
    const labelFile = document.querySelector('#upfilelabel');
    const showPic = document.querySelector('#show-pic');

    inputFile.addEventListener('change', () => {
        labelFile.innerHTML = inputFile.files[0].name
        showPic.src = URL.createObjectURL(inputFile.files[0]); // set src to blob url
    })
</script>
<!-- end script -->