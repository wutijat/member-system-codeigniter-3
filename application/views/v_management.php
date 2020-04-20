<!-- start html -->
<section id="sec-nav" class="container">
    <div class="d-flex justify-content-start mb-3">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link disabled" tabindex="-1" aria-disabled="true" href="<?php echo base_url() ?>"><i class="fas fa-compass"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" tabindex="-1" aria-disabled="true" href="<?php echo base_url() ?>">จัดการสมาชิก</a>
            </li>
        </ul>
    </div>
</section>
<section id="sec-member-dashboard" class="container">
    <div class="row">
        <div class="col-xl-4 col-md-12 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <span class="text-xs font-weight-bold text-info text-uppercase mb-1">จำนวนสมาชิก (ทั้งหมด)</span>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $rs_count_register[0]->all_member; ?> คน</div>
                        </div>
                        <div class="col-auto">
                            <i class="far fa-address-book h2"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-12 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <span class="text-xs font-weight-bold text-info text-uppercase mb-1">จำนวนยอดสมัครสมาชิก (วันนี้)</span>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $rs_count_now_register[0]->all_member; ?> คน</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar-plus h2"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-12 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <span class="text-xs font-weight-bold text-danger text-uppercase mb-1">สมาชิกที่ถูกลบ (ทั้งหมด)</span>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $rs_count_cancel_register[0]->all_member; ?> คน</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-slash h2"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section id="sec-member-table" class="container">
    <?php
    if (COUNT($rs_register_detail)) {
    ?>
        <!-- DataTales Example -->
        <div class="card border-left-primary shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">ตารางแสดงสมาชิก</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="text-center">ลำดับ</th>
                                <th class="text-center">ชื่อผู้ใช้งาน</th>
                                <th class="w-5 text-center">รูปประจำตัว</th>
                                <th class="text-center">ชื่อ-นามสกุล</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">เบอร์โทรศัพท์</th>
                                <th class="text-center">ดำเนินการ</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th class="text-center">ลำดับ</th>
                                <th class="text-center">ชื่อผู้ใช้งาน</th>
                                <th class="text-center">รูปประจำตัว</th>
                                <th class="text-center">ชื่อ-นามสกุล</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">เบอร์โทรศัพท์</th>
                                <th class="text-center">ดำเนินการ</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php $i = 0;
                            foreach ($rs_register_detail as $register_detail) {
                            ?>
                                <tr>
                                    <td class="text-center">
                                        <p class="mt-2"><?php echo $i + 1 ?></p>
                                    </td>
                                    <td class="text-center">
                                        <p class="mt-2"><?php echo $register_detail->reg_username ?></p>
                                    </td>
                                    <td class="text-center"> <img src="<?php echo base_url('images/' . $register_detail->mem_picture); ?>" class="img-fluid"> </td>
                                    <td class="text-center">
                                        <p class="mt-2"><?php echo $register_detail->pfn_th . ' ' . $register_detail->mem_fname . ' ' . $register_detail->mem_lname ?></p>
                                    </td>
                                    <td class="text-center">
                                        <p class="mt-2"><?php echo $register_detail->mem_email ?></p>
                                    </td>
                                    <td class="text-center">
                                        <p class="mt-2"><?php echo $register_detail->mem_tel ?></p>
                                    </td>
                                    <td class="text-center">
                                        <button onclick="gethByIndex(<?php echo $i ?>)" title="ดู" class="btn btn-info">
                                            <i class="fas fa-search"></i>
                                        </button>
                                        <a title="พิมพ์" target="blank" href="<?php echo base_url('Pdf_exporter/get/' . $register_detail->reg_id); ?>" class="btn btn-secondary"><i class="fas fa-file-download"></i></a>
                                        <a title="แก้ไข" href="<?php echo base_url('Management/edit/' . $register_detail->reg_id); ?>" class="btn btn-warning"><i class="far fa-edit"></i></a>
                                        <a title="ลบ" href="<?php echo base_url('Register/cancel/' . $register_detail->reg_id); ?>" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                            <?php
                                $i++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <?php
    } else {
    ?>
        <h1>ยังไม่มีสมาชิกในระบบ</h1>
    <?php
    }
    ?>
</section>
<!-- end html -->

<!-- start style -->
<style>
    table img {
        max-height: 40px;
    }

    #alert img {
        max-height: 200px;
    }
</style>
<!-- end style -->

<!-- start script -->
<?php
if (COUNT($rs_register_detail)) {
?>
    <script>
        $('#member-table').DataTable({
            "language": {
                "search": "Filter records:"
            }
        });
        // Call the dataTables jQuery plugin
        $(document).ready(function() {
            $('#dataTable').DataTable({
                oLanguage: {
                    "sSearch": "ค้นหา...",
                    "sLengthMenu": "แสดง _MENU_ รายการ",
                    "sInfo": "กำลังแสดง _START_ ถึง _END_ จาก _TOTAL_ รายการ",
                    "oPaginate": {
                        "sPrevious": "ย้อนกลับ",
                        "sNext": "ถัดไป",
                    },
                },
                dom: "<'row'<'col-sm-8'<'toolbar'>> <'col-sm-4'f> >" +
                    "<'row'<'col-sm-12'tr>>" +
                    "<'row'<'col-sm-5'i><'col-sm-7'p>>",
            });

            $("div.toolbar").html(
                `<a target="blank" href="<?php echo base_url('Pdf_exporter/get'); ?>" class="btn btn-secondary btn-icon-split">
                    <span class="icon text-white">
                        <i class="fas fa-print ้"></i>
                    </span>
                    <span class="text">พิมพ์แบบฟอร์มสมาชิกทั้งหมด</span>
                </a>`
            );
        });
        // 
        const rs_register_detail = JSON.parse('<?php echo json_encode($rs_register_detail) ?>')
        // 
        const gethByIndex = index => {
            const data = rs_register_detail[index];
            console.log(data)
            Swal.fire({
                width: '60%',
                title: '<strong>ข้อมูลสมาชิก</strong>',
                icon: 'info',
                html: '<div id="alert" class="mt-2">' +
                    '<div class="row">' +
                    '<div class="col-12 d-flex justify-content-center"> ' +
                    '<img class="img-fluid" src="<?php echo base_url('images/'); ?>' + data.mem_picture + '" />' +
                    '</div>' +
                    '</div>' +
                    '<div style="padding:2.5rem;">' +
                    '<div class="row">' +
                    '<div class="col-6 d-flex justify-content-between"> ' +
                    '<p>หมายเลขสมาชิก : </p><p>' + data.reg_id + '</p>' +
                    '</div>' +
                    '<div class="col-6 d-flex justify-content-between"> ' +
                    '<p>ชื่อผู้ใช้งาน : </p><p>' + data.reg_username + '</p>' +
                    '</div>' +
                    '</div>' +
                    '<div class="row">' +
                    '<div class="col-6 d-flex justify-content-between"> ' +
                    '<p>ชื่อ - นามสกุล : </p><p>' + data.pfn_th + ' ' + data.mem_fname + ' ' + data.mem_lname + '</p>' +
                    '</div>' +
                    '<div class="col-6 d-flex justify-content-between"> ' +
                    '<p>ที่อยู่อาศัย : </p><p>' + data.mem_addr + '</p>' +
                    '</div>' +
                    '</div>' +
                    '<div class="row">' +
                    '<div class="col-6 d-flex justify-content-between"> ' +
                    '<p>E-mail : </p><p>' + data.mem_email + '</p>' +
                    '</div>' +
                    '<div class="col-6 d-flex justify-content-between"> ' +
                    '<p>เบอร์โทรศัทพ์ : </p><p>' + data.mem_tel + '</p>' +
                    '</div>' +
                    '</div>' +
                    '<div class="row">' +
                    '<div class="col-6 d-flex justify-content-between"> ' +
                    '<p>Facebook : </p><p>' + data.mem_fb + '</p>' +
                    '</div>' +
                    '<div class="col-6 d-flex justify-content-between"> ' +
                    '<p>Instagram : </p><p>' + data.mem_ig + '</p>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '</div>',

                showCloseButton: true,
                showCancelButton: false,
                focusConfirm: false,
                confirmButtonText: 'ปิด',
            })
        }
        // 
    </script>
    <!-- end script -->
<?php
}
?>