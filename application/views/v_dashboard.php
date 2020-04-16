<!-- start html -->
<section id="sec-member-menu">
    <a href="<?php echo base_url('Register/show'); ?>" class="btn btn-primary">เพิ่มสมาชิก</a>
</section>
<section id="sec-member-table">
    <?php
    if (COUNT($rs_register_detail)) {
    ?>
        <table id="member-table" class="table table-responsive-md table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th class="text-center">ชื่อผู้ใช้งาน</th>
                    <th class="w-5 text-center">รูปประจำตัว</th>
                    <th class="text-center">ชื่อ-นามสกุล</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Facebook</th>
                    <th class="text-center">Instagram</th>
                    <th class="text-center">เบอร์โทรศัพท์</th>
                    <th class="text-center">ดำเนินการ</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rs_register_detail as $register_detail) { ?>
                    <tr>
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
                            <p class="mt-2"><?php echo $register_detail->mem_fb ?></p>
                        </td>
                        <td class="text-center">
                            <p class="mt-2"><?php echo $register_detail->mem_ig ?></p>
                        </td>
                        <td class="text-center">
                            <p class="mt-2"><?php echo $register_detail->mem_tel ?></p>
                        </td>
                        <td class="text-center">
                            <a href="<?php echo base_url('Dashboard/edit/' . $register_detail->reg_id); ?>" class="btn btn-warning">แก้ไข</a>
                            <a href="<?php echo base_url('Register/cancel/' . $register_detail->reg_id); ?>" class="btn btn-danger">ลบ</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
            <tfoot>
                <tr>
                    <th class="text-center">ชื่อผู้ใช้งาน</th>
                    <th class="text-center">รูปประจำตัว</th>
                    <th class="text-center">ชื่อ-นามสกุล</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Facebook</th>
                    <th class="text-center">Instagram</th>
                    <th class="text-center">เบอร์โทรศัพท์</th>
                    <th class="text-center">ดำเนินการ</th>
                </tr>
            </tfoot>
        </table>
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
    img {
        max-height: 40px;
    }
</style>
<!-- end style -->

<!-- start script -->
<?php
if (COUNT($rs_register_detail)) {
?>
    <script>
        $('#member-table').DataTable();
    </script>
    <!-- end script -->
<?php
}
?>