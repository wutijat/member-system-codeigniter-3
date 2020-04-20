<head>
    <title>รายงานสมาชิก</title>
</head>

<body>
    <style>
        img {
            height: 500px;
            margin-bottom: 50px;
        }

        table {
            width: 100%;
            border-spacing: 0;
            border-collapse: collapse;
            font-size: 1.0rem;
        }

        .head {
            font-size: 3rem;
        }

        tr:nth-child(1) td {
            padding-bottom: 50px;
        }

        .content td {
            padding-bottom: 50px;
            padding-left: 50px;
        }

        .page-num {
            text-align: right;
        }
    </style>
    <?php
    $i = 0;
    foreach ($rs_register_detail as $register_detail) {
    ?>
        <div class="page-num">หน้าที่ <?php echo ++$i . '/' . COUNT($rs_register_detail); ?></div>
        <table style="height: 451px; width: 792px;">
            <tbody>
                <tr>
                    <td class="head" align="center" colspan="4"> รายงานสมาชิก</td>
                </tr>
                <tr class="content">
                    <td>&nbsp;</td>
                    <td align="center" colspan="2"> <img src="./images/<?php echo $register_detail->mem_picture ?>" alt=""> </td>
                    <td>&nbsp;</td>
                </tr>
                <tr class="content">
                    <td>&nbsp;</td>
                    <td>&nbsp;หมายเลขผู้ใช้งาน <?php echo str_pad($register_detail->reg_id, 39 - strlen($register_detail->reg_id) - 1, ". ", STR_PAD_BOTH) ?> </td>
                    <td>&nbsp;ชื่อผู้ใช้งาน <?php echo str_pad($register_detail->reg_username, 40 - strlen($register_detail->reg_username) - 1, ". ", STR_PAD_BOTH) ?> </td>
                    <td>&nbsp;</td>
                </tr>
                <tr class="content">
                    <td>&nbsp;</td>
                    <td colspan="2">&nbsp;ชื่อ - นามสกุล <?php echo str_pad($register_detail->pfn_th . '. ' . $register_detail->mem_fname . '. ' . $register_detail->mem_lname, 140 - strlen($register_detail->pfn_th . '. ' . $register_detail->mem_fname . '. ' . $register_detail->mem_lname) - 1, ". ", STR_PAD_BOTH) ?> </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr class="content">
                    <td>&nbsp;</td>
                    <td colspan="2">&nbsp;ที่อยู่อาศัย <?php echo str_pad($register_detail->mem_addr, 165 - strlen($register_detail->mem_addr) - 1, ". ", STR_PAD_BOTH) ?> </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr class="content">
                    <td>&nbsp;</td>
                    <td>&nbsp;เบอร์โทร์ศัพท์ <?php echo str_pad($register_detail->mem_tel, 44 - strlen($register_detail->mem_tel) - 1, ". ", STR_PAD_BOTH) ?> </td>
                    <td>&nbsp;E-mail <?php echo str_pad($register_detail->mem_email, 48 - strlen($register_detail->mem_email) - 1, ". ", STR_PAD_BOTH) ?> </td>
                    <td>&nbsp;</td>
                </tr>
                <tr class="content">
                    <td style="width: 10px;">&nbsp;</td>
                    <td style="width: 359px;">&nbsp;Facebook&nbsp;<?php echo str_pad($register_detail->mem_fb, 60 - strlen($register_detail->mem_fb) - 1, ". ", STR_PAD_BOTH) ?> </td>
                    <td style="width: 323px;">Instagram <?php echo str_pad($register_detail->mem_ig, 50 - strlen($register_detail->mem_ig) - 1, ". ", STR_PAD_BOTH) ?> </td>
                    <td style="width: 13px;">&nbsp;</td>
                </tr>
            </tbody>
        </table>
        <pagebreak />
    <?php } ?>
</body>