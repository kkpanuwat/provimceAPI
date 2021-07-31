<?php
    include "./connectDB/connectDB.php";
    $provinceName = [
        'เก้าเลี้ยว',
        'โกรกพระ',
        'ชุมตาบง',
        'ชุมแสง',
        'ตากฟ้า',
        'ตาคลี',
        'ท่าตะโก',
        'บรรพตพิสัย',
        'พยุหะคีรี',
        'ไพศาลี',
        'เมืองนครสวรรค์',
        'แม่เปิน',
        'แม่วงก์',
        'ลาดยาว',
        'หนองบัว'                                                
    ];
    foreach($provinceName as $name){
        $sql = "INSERT INTO district(district_name,province_id) VALUES ('$name',23)";
        mysqli_query($conn,$sql);
    }
