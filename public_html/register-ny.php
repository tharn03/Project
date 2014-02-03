<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    require_once "config.inc.php";
    require_once "nocache.inc.php";
    require_once "datahelper.inc.php";
    mysql_connect($host,$dbuser,$dbpassword) or die ("ติดต่อ host ไม่ได้");
    mysql_select_db($dbname) or die ("ติดต่อฐานข้อมูลไม่ได้");
    mysql_query("SET NAMES utf8;");
    $province = mysql_query("SELECT * FROM province ORDER BY PROVINCE_NAME");
    $province1 = mysql_query("SELECT * FROM province ORDER BY PROVINCE_NAME");
    $province2 = mysql_query("SELECT * FROM province ORDER BY PROVINCE_NAME");
    $province3 = mysql_query("SELECT * FROM province ORDER BY PROVINCE_NAME");
    $province4 = mysql_query("SELECT * FROM province ORDER BY PROVINCE_NAME");
    $province5 = mysql_query("SELECT * FROM province ORDER BY PROVINCE_NAME");
    $province6 = mysql_query("SELECT * FROM province ORDER BY PROVINCE_NAME");
    mysql_close();
?>
<html>
    <head>
        <title>NiyomPanich Co.,Ltd.</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <label class="brand" >eRECRUIT</label>
                    <ul class="nav">
                        <li class="active"><a href="#"><img src="img/nylogo-bw.gif" width="25">&nbsp;นิยมพานิช</a></li>
                        <li><a href="#"><img src="img/ToyotaChiangmai-bw.gif" width="25">&nbsp;โตโยต้า เชียงใหม่</a></li>
                        <li><a href="#"><img src="img/logowinwave-bw.gif" width="25">&nbsp;วินเวฟ</a></li>
                        <li class="dropdown">
                              <a class="dropdown-toggle"
                                 data-toggle="dropdown"
                                 href="#">
                                  <img src="img/LogoMatrix-bw.gif" width="35">&nbsp;แมทริกซ์
                                  <b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#"><img src="img/LogoMatrix-bw.gif" width="35">&nbsp;แมทริกซ์</a></li>
                                <li><a href="#"><img src="img/LogoNorthwave-bw.gif" width="35">&nbsp;นอร์ทเวฟ</a></li>
                              </ul>
                        </li>
                        <li><a href="#"><img src="img/LogoNorthwave-bw.gif" width="35">&nbsp;นอร์ทเวฟ</a></li>
                        <li><a href="#"><img src="img/logomsd-bw.gif" width="35">&nbsp;มิตรสินด่วน</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <br><br><br>
        <div class="container" id="border">
            <form id="signup" class="form-inline" method="post" action="register_i.php">
            <div>
                <img src="img/nylogo.gif" width="80">
                &nbsp;&nbsp;
                <img src="img/nytxt.gif" width="300">
            </div>
            <br>
            <div class="form-inline">
                วันที่สมัคร&nbsp;<input class="input-small" type="text" name="date" value="<?php echo date('d-m-Y'); ?>" readonly />
                ตำแหน่ง&nbsp;1.&nbsp;<input type="text" name="position1" autofocus>
                2.&nbsp;<input type="text" name="position2">
            </div>
            <br>
            <div class="well">
                <legend>ข้อมูลส่วนตัว</legend>
                <div class="form-inline">    
                        <label class="radio">
                            <input type="radio" name="prefixth" value="นาย" checked> นาย
                        </label>
                        <label class="radio">
                            <input type="radio" name="prefixth" value="นางสาว" > นางสาว
                        </label>
                        <label class="radio">
                            <input type="radio" name="prefixth" value="นาง" > นาง
                        </label>
                        <label class="radio">
                            <input type="radio" name="prefixth" value="0" > อื่นๆ
                        </label>
                        <input type="text" name="prefixthbox" class="input-small">&nbsp;
                        ชื่อ-นามสกุล&nbsp;<input class="span3" id="prependedInput1" type="text" name="name">&nbsp;&nbsp;
                        ชื่อเล่น&nbsp;<input class="span2" id="prependedInput2" type="text" name="nickname">
                    </div>
                        <br>
                    <div class="inline">
                        
                        <label class="radio">
                            <input type="radio" name="prefixen" value="Mr." checked> Mr.
                        </label>
                        <label class="radio">
                            <input type="radio" name="prefixen" value="Ms." > Ms.
                        </label>
                        <label class="radio">
                            <input type="radio" name="prefixen" value="Mrs." > Mrs.
                        </label>
                        <label class="radio">
                            <input type="radio" name="prefixen" value="0" > etc.
                        </label>
                        <input type="text" name="prefix_enbox" class="input-small">&nbsp;
                        Name&nbsp;<input class="span3" id="prependedInput1" type="text" name="name_en">&nbsp;&nbsp;
                        Nickname&nbsp;<input class="span2" id="prependedInput2" type="text" name="nickname_en">

                    </div>
                        <br>
                    <div class="inline">
                        
                        เพศ&nbsp;<input class="span1" id="prependedInput1" type="text" name="sex">&nbsp;&nbsp;
                        อายุ&nbsp;<input class="span1" id="prependedInput1" type="text" name="age">&nbsp;ปี&nbsp;&nbsp;
                        วัน/เดือน/ปี&nbsp;เกิด&nbsp;<input class="span2" id="prependedInput1" type="date" name="bdate">&nbsp;&nbsp;
                        จังหวัดที่เกิด&nbsp;<select name="bprovince" class="input-medium">
                                        <option value="a" selected disabled>เลือกจังหวัด</option>
                                        <?php while($pv_list = mysql_fetch_array($province)) { ?>
                                        <option value="<?php echo $pv_list['PROVINCE_ID']; ?>"><?php echo $pv_list['PROVINCE_NAME']; ?></option>
                                        <?php } ?>
                                      </select>&nbsp;&nbsp;
                        
                    </div>
                        <br>
                    <div class="inline">
                        
                        น้ำหนัก&nbsp;<input class="input-small" id="prependedInput1" type="text" name="weight">&nbsp;ก.ก.&nbsp;&nbsp;
                        ส่วนสูง&nbsp;<input class="input-small" id="prependedInput1" type="text" name="height">&nbsp;ซ.ม.&nbsp;&nbsp;
                        กรุ๊ปเลือด&nbsp;<select class="input-mini" name="blood">
                                        <option value="o">O</option>
                                        <option value="a">A</option>
                                        <option value="b">B</option>
                                        <option value="ab">AB</option>
                                    </select>&nbsp;&nbsp;
                        ศาสนา&nbsp;<input class="input-small" id="prependedInput1" type="text" name="religion">&nbsp;&nbsp;
                        เชื้อชาติ&nbsp;<input class="input-small" id="prependedInput1" type="text" name="national">&nbsp;&nbsp;
                        
                    </div>
                        <br>
                    <div class="inline">
                        
                        สัญชาติ&nbsp;<input class="input-small" id="prependedInput1" type="text" name="nationality">&nbsp;&nbsp;
                        สถานะสมรส&nbsp;
                        <label class="radio">
                            <input type="radio" name="marry_st" value="1" checked> โสด
                        </label>
                        <label class="radio">
                            <input type="radio" name="marry_st" value="2" > สมรส
                        </label>&nbsp;&nbsp;
                        E-Mail&nbsp;<input class="input" id="prependedInput1" type="text" name="email">
                        
                    </div>
                        <br>
                    <div class="inline">
                        
                        สถานะทางการทหาร
                        <label class="radio">
                            <input type="radio" name="sold_st" value="1" checked>จะถูกเกณฑ์ทหารปีพ.ศ.<input class="input-mini" type="text" name="pname">&nbsp;&nbsp; 
                        </label>
                        <label class="radio">
                            <input type="radio" name="sold_st" value="2" >เคยถูกเกณ์ทหาร&nbsp;
                        </label>
                        <label class="radio">
                            <input type="radio" name="sold_st" value="3" >ได้รับการยกเว้นเพราะ&nbsp;<input class="input" type="text" name="sold_st_txt">
                        </label>
                        
                    </div>
                        <br>
                    <div class="inline">
                        
                        โรคประจำตัว
                        <label class="radio">
                            <input type="radio" name="disease" value="1" checked>ไม่มี&nbsp;
                        </label>
                        <label class="radio">
                            <input type="radio" name="disease" value="2" >มี&nbsp;<input class="input-small" type="text" name="disease_txt">&nbsp; 
                        </label>
                        แพ้ยา&nbsp;<input class="input" type="text" name="med">&nbsp;&nbsp;
                        หมายเหตุ&nbsp;<input class="input" type="text" name="med_star">
                        
                    </div>
                        <br>
                    <div class="inline">
                        
                        ปฏิบัติงานต่างจังหวัด&nbsp;
                        <label class="radio">
                            <input type="radio" name="other_prov" value="1" >ได้&nbsp;
                        </label>
                        <label class="radio">
                            <input type="radio" name="other_prov" value="2" checked>ไม่ได้&nbsp; 
                        </label>
                        
                    </div>
                    
            </div>
            <div class="well">
                <legend>เอกสารประจำตัว</legend>
                <div class="inline">
                        
                        เลขที่บัตรประชาชน&nbsp;<input class="input" type="text" name="per_id">&nbsp;&nbsp; 
                        ออกให้&nbsp;ณ&nbsp;อำเภอ&nbsp;<input class="input-small" type="text" name="per_id_amphur">&nbsp;&nbsp;
                        จังหวัด&nbsp;<select name="per_province" class="input-medium">
                                        <option value="" selected>เลือกจังหวัด</option>
                                        <?php while($pv_list1 = mysql_fetch_array($province1)) { ?>
                                        <option value="<?php echo $pv_list1['PROVINCE_ID']; ?>"><?php echo $pv_list1['PROVINCE_NAME']; ?></option>
                                        <?php } ?>
                                  </select>&nbsp;&nbsp;
                        
                </div>
                <br>
                <div class="inline">
                        
                        วันที่ออกบัตร&nbsp;<input class="input" type="date" name="per_mfd">&nbsp;&nbsp;
                        วันที่หมดอายุ&nbsp;<input class="input" type="date" name="per_exp">&nbsp;&nbsp;
                        
                </div>
                
            </div>
            <div class="well">
                    <legend>ที่อยู่</legend>
                    <div class="inline">
                        
                        <strong>ที่อยู่ปัจจุบัน</strong>&nbsp;
                        เลขที่&nbsp;<input class="input-mini" type="text" name="add_num">&nbsp;&nbsp;
                        หมู่&nbsp;<input class="input-small" type="text" name="add_num2">&nbsp;&nbsp;
                        ซอย&nbsp;<input class="input-small" type="text" name="add_soi">&nbsp;&nbsp;
                        ถนน&nbsp;<input class="input" type="text" name="add_road">&nbsp;&nbsp;
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        ตำบล/แขวง&nbsp;<input class="input" type="text" name="add_tumbon">&nbsp;&nbsp;
                        อำเภอ/เขต&nbsp;<input class="input" type="text" name="add_amphur">&nbsp;&nbsp;
                        จังหวัด&nbsp;<select name="add_province" class="input-medium">
                                        <option value="" selected>เลือกจังหวัด</option>
                                        <?php while($pv_list2 = mysql_fetch_array($province2)) { ?>
                                        <option value="<?php echo $pv_list2['PROVINCE_ID']; ?>"><?php echo $pv_list2['PROVINCE_NAME']; ?></option>
                                        <?php } ?>
                                  </select>&nbsp;&nbsp;
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        รหัสไปรษณีย์&nbsp;<input class="input" type="text" name="add_post">&nbsp;&nbsp;
                        โทรศัพท์&nbsp;<input class="input" type="text" name="add_tel">&nbsp;&nbsp;
                        มือถือ&nbsp;<input class="input" type="text" name="add_mobi">&nbsp;&nbsp;
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        <label class="checkbox">
                            <input type="checkbox" value="1" name="copy_add"> ตามที่อยู่ปัจจุบัน
                        </label>
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        <strong>ที่อยู่ตามทะเบียนบ้าน</strong>&nbsp;
                        เลขที่&nbsp;<input class="input-mini" type="text" name="add2_num">&nbsp;&nbsp;
                        หมู่&nbsp;<input class="input-small" type="text" name="add2_num2">&nbsp;&nbsp;
                        ซอย&nbsp;<input class="input-small" type="text" name="add2_soi">&nbsp;&nbsp;
                        ถนน&nbsp;<input class="input" type="text" name="add2_road">&nbsp;&nbsp;
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        ตำบล/แขวง&nbsp;<input class="input" type="text" name="add2_tumbon">&nbsp;&nbsp;
                        อำเภอ/เขต&nbsp;<input class="input" type="text" name="add2_amphur">&nbsp;&nbsp;
                        จังหวัด&nbsp;<select name="add2_province" class="input-medium">
                                        <option value="" selected>เลือกจังหวัด</option>
                                        <?php while($pv_list3 = mysql_fetch_array($province3)) { ?>
                                        <option value="<?php echo $pv_list3['PROVINCE_ID']; ?>"><?php echo $pv_list3['PROVINCE_NAME']; ?></option>
                                        <?php } ?>
                                  </select>&nbsp;&nbsp;
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        รหัสไปรษณีย์&nbsp;<input class="input" type="text" name="add2_post">&nbsp;&nbsp;
                        โทรศัพท์&nbsp;<input class="input" type="text" name="add2_tel">&nbsp;&nbsp;
                        มือถือ&nbsp;<input class="input" type="text" name="add2_mobi">&nbsp;&nbsp;
                        
                    </div>
                    <div class="inline">
                        
                        
                        
                    </div>
                    
            </div>
            <div class="well">
                    <legend>ประวัติการศึกษา</legend>
                    <table border='1' width='900' class="table table-bordered table-striped">
                        <tr>
                            <th>ลำดับ</th>
                            <th>วุฒิการศึกษา</th>
                            <th>สถาบันการศึกษา</th>
                            <th>ปีที่จบ</th>
                            <th>GPA</th>
                            <th>คณะ</th>
                            <th>สาขาวิชา</th>
                        </tr>
                        <tr>
                            <td><input class="span1" type="text" name="lname"></td>
                            <td><input class="input-mini" type="text" name="lname"></td>
                            <td><input class="input" type="text" name="lname"></td>
                            <td><input class="span1" type="text" name="lname"></td>
                            <td><input class="span1" type="text" name="lname"></td>
                            <td><input class="input-mini" type="text" name="lname"></td>
                            <td><input class="input-mini" type="text" name="lname"></td>
                        </tr>
                    </table>
            </div>
            <div class="well">
                    <legend>ประวัติการทำงาน</legend>
                    <div class="inline">
                        
                        บริษัท&nbsp;<input class="input-large" type="text" name="lname">&nbsp;&nbsp;
                        วันที่เริ่ม&nbsp;<input class="input" type="date" name="lname">&nbsp;&nbsp;
                        วันที่ออก&nbsp;<input class="input" type="date" name="lname">&nbsp;&nbsp;

                    </div>
                    <br>
                    <div class="inline">
                        
                        ตำแหน่ง&nbsp;<input class="input" type="text" name="lname">&nbsp;&nbsp;
                        ลักษณะงาน&nbsp;<input class="input" type="text" name="lname">&nbsp;&nbsp;
                        สาเหตุที่ออก&nbsp;<input class="input" type="text" name="lname">&nbsp;&nbsp;
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        เงินเดือนออกเมื่อ&nbsp;<input class="span2" type="date" name="lname">&nbsp;&nbsp;
                        ผู้ที่ติดต่อได้&nbsp;<input class="input" type="text" name="lname">&nbsp;&nbsp;
                        โทรศัพท์&nbsp;<input class="input" type="tel" name="lname">&nbsp;&nbsp;
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        หมายเหตุ&nbsp;<input class="input-xxlarge" type="text" name="lname">&nbsp;&nbsp;
                        
                    </div>
                    <hr>
                    <div class="inline">
                        
                        บริษัท&nbsp;<input class="input-large" type="text" name="lname">&nbsp;&nbsp;
                        วันที่เริ่ม&nbsp;<input class="input" type="date" name="lname">&nbsp;&nbsp;
                        วันที่ออก&nbsp;<input class="input" type="date" name="lname">&nbsp;&nbsp;

                    </div>
                    <br>
                    <div class="inline">
                        
                        ตำแหน่ง&nbsp;<input class="input" type="text" name="lname">&nbsp;&nbsp;
                        ลักษณะงาน&nbsp;<input class="input" type="text" name="lname">&nbsp;&nbsp;
                        สาเหตุที่ออก&nbsp;<input class="input" type="text" name="lname">&nbsp;&nbsp;
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        เงินเดือนออกเมื่อ&nbsp;<input class="span2" type="date" name="lname">&nbsp;&nbsp;
                        ผู้ที่ติดต่อได้&nbsp;<input class="input" type="text" name="lname">&nbsp;&nbsp;
                        โทรศัพท์&nbsp;<input class="input" type="tel" name="lname">&nbsp;&nbsp;
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        หมายเหตุ&nbsp;<input class="input-xxlarge" type="text" name="lname">&nbsp;&nbsp;
                        
                    </div>
                    <hr>
                    <div class="inline">
                        
                        **อาชีพอิสระ/อาชีพเสริม&nbsp;<input class="input" type="text" name="lname">&nbsp;&nbsp;
                        ตำแหน่ง&nbsp;<input class="input" type="text" name="lname">&nbsp;&nbsp;
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        บริษัท&nbsp;<input class="span2" type="text" name="lname">&nbsp;&nbsp;
                        รายได้&nbsp;<input class="input" type="text" name="lname">&nbsp;&nbsp;
                        ผู้ติดต่อได้&nbsp;<input class="input" type="tel" name="lname">&nbsp;&nbsp;
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        หมายเหตุ&nbsp;<input class="input-xxlarge" type="text" name="lname">&nbsp;&nbsp;
                        
                    </div>
                    <hr>
                    <p><strong>*บริษัทในเครือของบริษัทนิยมพานิช จำกัด ประกอบด้วย สหพานิช,นิยมพานิชลำปาง,มิตรสินด่วน,วินเวฟ,ร้านตัวแทน</strong>&nbsp;<i class="icon-hand-down"></i></p>
                    <br>
                    <div class="inline">
                        
                        บริษัท&nbsp;<input class="input-large" type="text" name="lname">&nbsp;&nbsp;
                        วันที่เริ่ม&nbsp;<input class="input" type="date" name="lname">&nbsp;&nbsp;
                        วันที่ออก&nbsp;<input class="input" type="date" name="lname">&nbsp;&nbsp;

                    </div>
                    <br>
                    <div class="inline">
                        
                        ตำแหน่ง&nbsp;<input class="input" type="text" name="lname">&nbsp;&nbsp;
                        ลักษณะงาน&nbsp;<input class="input" type="text" name="lname">&nbsp;&nbsp;
                        สาเหตุที่ออก&nbsp;<input class="input" type="text" name="lname">&nbsp;&nbsp;
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        เงินเดือนออกเมื่อ&nbsp;<input class="span2" type="date" name="lname">&nbsp;&nbsp;
                        ผู้ที่ติดต่อได้&nbsp;<input class="input" type="text" name="lname">&nbsp;&nbsp;
                        โทรศัพท์&nbsp;<input class="input" type="tel" name="lname">&nbsp;&nbsp;
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        หมายเหตุ&nbsp;<input class="input-xxlarge" type="text" name="lname">&nbsp;&nbsp;
                        
                    </div>
                    
            </div>
            <div class="well">
                    <legend>ประวัติการฝึกงาน</legend>
                    <div class="inline">
                        
                        วันที่เริ่ม&nbsp;<input class="input" type="date" name="lname">&nbsp;&nbsp;
                        วันที่ออก&nbsp;<input class="input" type="date" name="lname">&nbsp;&nbsp;
                        บริษัท/ห้าง/ร้าน&nbsp;<input class="input-large" type="text" name="lname">&nbsp;&nbsp;

                    </div>
                    <br>
                    <div class="inline">
                        
                        ลักษณะงาน&nbsp;<input class="input" type="text" name="lname">&nbsp;&nbsp;
                        ประเภทธุรกิจ&nbsp;<input class="input" type="text" name="lname">&nbsp;&nbsp;
                        ตำแหน่ง&nbsp;<input class="input" type="text" name="lname">&nbsp;&nbsp;
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        ที่ตั้ง&nbsp;<input class="input" type="text" name="lname">&nbsp;&nbsp;
                        ผู้ที่ติดต่อได้&nbsp;<input class="input" type="text" name="lname">&nbsp;&nbsp;
                        โทรศัพท์&nbsp;<input class="input" type="tel" name="lname">&nbsp;&nbsp;
                        
                    </div>
                    <div class="inline">
                        
                        
                        
                    </div>
            
            </div>
            <div class="well">
                    <legend>ความสามารถ</legend>
                    <div class="inline">
                        
                        <strong>พิมพ์ดีด</strong>&nbsp;
                        <label class="radio">
                            <input type="radio" name="prefix" value="1" checked> ได้
                        </label>
                        <label class="radio">
                            <input type="radio" name="prefix" value="2" > ไม่ได้
                        </label>&nbsp;&nbsp;
                        ไทย&nbsp;<input class="span1" type="text" name="pname">&nbsp;คำ/นาที&nbsp;&nbsp;
                        อังกฤษ&nbsp;<input class="span1" type="text" name="pname">&nbsp;คำ/นาที&nbsp;&nbsp;
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        <strong>ความสามารถในการขับขี่</strong>&nbsp;
                        รถจักรยานยนต์
                        <label class="radio">
                            <input type="radio" name="prefix" value="1" checked> ได้
                        </label>
                        <label class="radio">
                            <input type="radio" name="prefix" value="2" > ไม่ได้
                        </label>&nbsp;&nbsp;
                        ใบอนุญาติขับขี่
                        <label class="radio">
                            <input type="radio" name="prefix" value="1" checked> มี
                        </label>
                        <label class="radio">
                            <input type="radio" name="prefix" value="2" > ไม่มี
                        </label>&nbsp;&nbsp;
                        เลขที่&nbsp;<input class="input" type="text" name="pname">&nbsp;&nbsp;
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>&nbsp;
                        รถยนต์
                        <label class="radio">
                            <input type="radio" name="prefix" value="1" checked> ได้
                        </label>
                        <label class="radio">
                            <input type="radio" name="prefix" value="2" > ไม่ได้
                        </label>&nbsp;&nbsp;
                        ใบอนุญาติขับขี่
                        <label class="radio">
                            <input type="radio" name="prefix" value="1" checked> มี
                        </label>
                        <label class="radio">
                            <input type="radio" name="prefix" value="2" > ไม่มี
                        </label>&nbsp;&nbsp;
                        เลขที่&nbsp;<input class="input" type="text" name="pname">&nbsp;&nbsp;
                        
                    </div>
                    <br>
                    <table>
                        <tr>
                            <td style="text-align: left" width='225'>คอมพิวเตอร์โปรแกรม</td>
                            <td style="text-align: left" width='225'>1.&nbsp;<input class="span2" type="text" name="pname"></td>
                            <td style="text-align: left" width='225'>2.&nbsp;<input class="span2" type="text" name="pname"></td>
                            <td style="text-align: left" width='225'>3.&nbsp;<input class="span2" type="text" name="pname"></td>
                        </tr>
                        <tr>
                            <td style="text-align: left" width='225'>เครื่องใช้สำนักงาน</td>
                            <td style="text-align: left" width='225'>1.&nbsp;<input class="span2" type="text" name="pname"></td>
                            <td style="text-align: left" width='225'>2.&nbsp;<input class="span2" type="text" name="pname"></td>
                            <td style="text-align: left" width='225'>3.&nbsp;<input class="span2" type="text" name="pname"></td>
                        </tr>
                        <tr>
                            <td style="text-align: left" width='225'>กีฬาที่ชอบ</td>
                            <td style="text-align: left" width='225'>1.&nbsp;<input class="span2" type="text" name="pname"></td>
                            <td style="text-align: left" width='225'>2.&nbsp;<input class="span2" type="text" name="pname"></td>
                            <td style="text-align: left" width='225'>3.&nbsp;<input class="span2" type="text" name="pname"></td>
                        </tr>
                        <tr>
                            <td style="text-align: left" width='225'>อื่นๆ</td>
                            <td style="text-align: left" width='225'>1.&nbsp;<input class="span2" type="text" name="pname"></td>
                            <td style="text-align: left" width='225'>2.&nbsp;<input class="span2" type="text" name="pname"></td>
                            <td style="text-align: left" width='225'>3.&nbsp;<input class="span2" type="text" name="pname"></td>
                        </tr>
                    </table>
                    <hr>
                    <strong>ความสามารถทางด้านภาษา</strong>&nbsp;
                    <br>
                    <table class="table table-bordered">
                        <tr class="info">
                            <td style="text-align: center" width='180' rowspan="2">ภาษา</td>
                            <td style="text-align: center" width='240' colspan="3">พูด</td>
                            <td style="text-align: center" width='240' colspan="3">อ่าน</td>
                            <td style="text-align: center" width='240' colspan="3">เขียน</td>
                        </tr>
                        <tr class="info">
                            
                            <td style="text-align: center" width='80'>ดี</td>
                            <td style="text-align: center" width='80'>ปานกลาง</td>
                            <td style="text-align: center" width='80'>พอใช้</td>
                            <td style="text-align: center" width='80'>ดี</td>
                            <td style="text-align: center" width='80'>ปานกลาง</td>
                            <td style="text-align: center" width='80'>พอใช้</td>
                            <td style="text-align: center" width='80'>ดี</td>
                            <td style="text-align: center" width='80'>ปานกลาง</td>
                            <td style="text-align: center" width='80'>พอใช้</td>
                        </tr>
                        <tr>
                            <td style="text-align: center"><input class="input" type="text" name="prefix"></td>
                            <td style="text-align: center"><input type="radio" name="prefix" value="2" ></td>
                            <td style="text-align: center"><input type="radio" name="prefix" value="2" ></td>
                            <td style="text-align: center"><input type="radio" name="prefix" value="2" ></td>
                            <td style="text-align: center"><input type="radio" name="prefix" value="2" ></td>
                            <td style="text-align: center"><input type="radio" name="prefix" value="2" ></td>
                            <td style="text-align: center"><input type="radio" name="prefix" value="2" ></td>
                            <td style="text-align: center"><input type="radio" name="prefix" value="2" ></td>
                            <td style="text-align: center"><input type="radio" name="prefix" value="2" ></td>
                            <td style="text-align: center"><input type="radio" name="prefix" value="2" ></td>
                        </tr>
                        <tr>
                            <td style="text-align: center"><input class="input" type="text" name="prefix"></td>
                            <td style="text-align: center"><input type="radio" name="prefix" value="2" ></td>
                            <td style="text-align: center"><input type="radio" name="prefix" value="2" ></td>
                            <td style="text-align: center"><input type="radio" name="prefix" value="2" ></td>
                            <td style="text-align: center"><input type="radio" name="prefix" value="2" ></td>
                            <td style="text-align: center"><input type="radio" name="prefix" value="2" ></td>
                            <td style="text-align: center"><input type="radio" name="prefix" value="2" ></td>
                            <td style="text-align: center"><input type="radio" name="prefix" value="2" ></td>
                            <td style="text-align: center"><input type="radio" name="prefix" value="2" ></td>
                            <td style="text-align: center"><input type="radio" name="prefix" value="2" ></td>
                        </tr>
                    </table>
                    
            </div>
            <div class="well">
                    <legend>การฝึกอบรม</legend>
                    <table class="table table-bordered">
                        <tr class="info">
                            <td style="text-align: center" width='600' rowspan="2">หลักสูตร</td>
                            <td style="text-align: center" width='300' colspan="4">จำนวน</td>
                        </tr>
                        <tr class="info">
                            <td style="text-align: center" width='75'>ชั่วโมง</td>
                            <td style="text-align: center" width='75'>วัน</td>
                            <td style="text-align: center" width='75'>เดือน</td>
                            <td style="text-align: center" width='75'>ปี</td>
                        </tr>
                        <tr>
                            <td style="text-align: center"><input class="span6" type="text" name="prefix"></td>
                            <td style="text-align: center"><input class="input-mini" type="text" name="prefix"></td>
                            <td style="text-align: center"><input class="input-mini" type="text" name="prefix"></td>
                            <td style="text-align: center"><input class="input-mini" type="text" name="prefix"></td>
                            <td style="text-align: center"><input class="input-mini" type="text" name="prefix"></td>
                        </tr>
                        <tr>
                            <td style="text-align: center"><input class="span6" type="text" name="prefix"></td>
                            <td style="text-align: center"><input class="input-mini" type="text" name="prefix"></td>
                            <td style="text-align: center"><input class="input-mini" type="text" name="prefix"></td>
                            <td style="text-align: center"><input class="input-mini" type="text" name="prefix"></td>
                            <td style="text-align: center"><input class="input-mini" type="text" name="prefix"></td>
                        </tr>
                        <tr>
                            <td style="text-align: center"><input class="span6" type="text" name="prefix"></td>
                            <td style="text-align: center"><input class="input-mini" type="text" name="prefix"></td>
                            <td style="text-align: center"><input class="input-mini" type="text" name="prefix"></td>
                            <td style="text-align: center"><input class="input-mini" type="text" name="prefix"></td>
                            <td style="text-align: center"><input class="input-mini" type="text" name="prefix"></td>
                        </tr>
                    </table>
            </div>
            <div class="well">
                    <legend>ข้อมูลคู่สมรส</legend>
                    <div class="inline">
                        
                        <label class="radio">
                            <input type="radio" name="prefix1" value="1">ไม่มีคู่สมรส&nbsp; 
                        </label>
                        <label class="radio">
                            <input type="radio" name="prefix1" value="1">สมรสจดทะเบียน&nbsp; 
                        </label>
                        เลขที่&nbsp;<input type="text" name="prefix">
                        ปี พ.ศ.<input type="text" name="prefix">&nbsp;&nbsp;
                        <label class="radio">
                            <input type="radio" name="prefix1" value="1">หย่า&nbsp; 
                        </label>
                        <label class="radio">
                            <input type="radio" name="prefix1" value="1">แยกกันอยู่&nbsp; 
                        </label>
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        รายได้คู่สมรส&nbsp;
                        <label class="radio">
                            <input type="radio" name="prefix1" value="1">มี&nbsp; 
                        </label>
                        <label class="radio">
                            <input type="radio" name="prefix1" value="1">ไม่มี&nbsp; 
                        </label>&nbsp; &nbsp; 
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        ชื่อ-สกุลสามี/ภรรยา&nbsp;<input class="span3" id="prependedInput1" type="text" name="pname">&nbsp;&nbsp; 
                        วัน/เดือน/ปี&nbsp;เกิด<input class="span2" id="prependedInput1" type="text" name="pname">
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        ที่อยู่เลขที่&nbsp;<input class="input-mini" type="text" name="pname">&nbsp;&nbsp;
                        หมู่&nbsp;<input class="input-small" type="text" name="pname">&nbsp;&nbsp;
                        ซอย&nbsp;<input class="input-small" type="text" name="pname">&nbsp;&nbsp;
                        ถนน&nbsp;<input class="input" type="text" name="pname">&nbsp;&nbsp;
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        ตำบล/แขวง&nbsp;<input class="input" type="text" name="pname">&nbsp;&nbsp;
                        อำเภอ/เขต&nbsp;<input class="input" type="text" name="pname">&nbsp;&nbsp;
                        จังหวัด&nbsp;<select name="nowadd_province" class="input-medium">
                                        <option value="" selected>เลือกจังหวัด</option>
                                        <?php while($pv_list2 = mysql_fetch_array($province2)) { ?>
                                        <option value="<?php echo $pv_list2['PROVINCE_ID']; ?>"><?php echo $pv_list2['PROVINCE_NAME']; ?></option>
                                        <?php } ?>
                                  </select>&nbsp;&nbsp;
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        รหัสไปรษณีย์&nbsp;<input class="input" type="text" name="pname">&nbsp;&nbsp;
                        โทรศัพท์&nbsp;<input class="input" type="text" name="pname">&nbsp;&nbsp;
                        มือถือ&nbsp;<input class="input" type="text" name="pname">&nbsp;&nbsp;
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        อาชีพ/ตำแหน่ง&nbsp;<input class="input" type="text" name="pname">&nbsp;&nbsp;
                        สถานที่ทำงาน&nbsp;<input class="input" type="text" name="pname">&nbsp;&nbsp;
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        จำนวนบุตร&nbsp;<input class="input-mini" type="number" name="pname" min="0">&nbsp;คน&nbsp;&nbsp;
                        <label class="radio">
                            <input type="radio" name="prefix1" value="1">กำลังศึกษา&nbsp; 
                        </label>
                        <label class="radio">
                            <input type="radio" name="prefix1" value="1">ไม่ศึกษา&nbsp; 
                        </label>&nbsp; &nbsp; 
                        
                    </div>
                    
            </div>
            <div class="well">
                    <legend>ประวัติครอบครัว</legend>
                    <div class="inline">
                        
                        ชื่อ-สกุล&nbsp;บิดา&nbsp;<input class="รืยีะ" id="prependedInput1" type="text" name="pname">&nbsp;&nbsp;
                        <label class="radio">
                            <input type="radio" name="prefix1" value="1">ถึงแก่กรรม
                        </label>
                        <label class="radio">
                            <input type="radio" name="prefix1" value="1">มีชีวิตอยู่&nbsp; 
                        </label>&nbsp; &nbsp; 
                        อายุ&nbsp;<input class="span1" type="text" name="pname">&nbsp;ปี&nbsp;&nbsp;
                        อาชีพ&nbsp;<input class="span2" type="text" name="pname">&nbsp;&nbsp;
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        ที่อยู่&nbsp;<input class="input-xxlarge" type="text" name="pname">&nbsp;&nbsp;
                        โทรศัพท์&nbsp;<input class="span2" type="text" name="pname">
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        ชื่อ-สกุล&nbsp;มารดา&nbsp;<input class="รืยีะ" id="prependedInput1" type="text" name="pname">&nbsp;&nbsp;
                        <label class="radio">
                            <input type="radio" name="prefix1" value="1">ถึงแก่กรรม
                        </label>
                        <label class="radio">
                            <input type="radio" name="prefix1" value="1">มีชีวิตอยู่&nbsp; 
                        </label>&nbsp; &nbsp; 
                        อายุ&nbsp;<input class="span1" type="text" name="pname">&nbsp;ปี&nbsp;&nbsp;
                        อาชีพ&nbsp;<input class="span2" type="text" name="pname">&nbsp;&nbsp;
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        ที่อยู่&nbsp;<input class="input-xxlarge" type="text" name="pname">&nbsp;&nbsp;
                        โทรศัพท์&nbsp;<input class="span2" type="text" name="pname">
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        ข้าพเจ้ามีพี่น้องร่วมบิดามารดา&nbsp;<input class="span1" type="text" name="pname">&nbsp;คน&nbsp;&nbsp;
                        ข้าพเจ้าเป็นบุตรคนที่&nbsp;<input class="span1" type="text" name="pname">
                        
                    </div>
                    <br>
                    <table width="900" border="0" class="table table-bordered">
                        <tr class="info">
                            <td width="40" style="text-align: center">ลำดับ</td>
                            <td width="200" style="text-align: center">ชื่อ-สกุล</td>
                            <td width="50" style="text-align: center">อายุ</td>
                            <td width="100" style="text-align: center">อาชีพ/ตำแหน่ง</td>
                            <td width="100" style="text-align: center">สถานที่ทำงาน</td>
                        </tr>
                        <tr>
                            <td width="40" style="text-align: center"><input class="span1" type="text" name="pname"></td>
                            <td width="200" style="text-align: center"><input class="span3" type="text" name="pname"></td>
                            <td width="50" style="text-align: center"><input class="span1" type="text" name="pname"></td>
                            <td width="100" style="text-align: center"><input class="span3" type="text" name="pname"></td>
                            <td width="100" style="text-align: center"><input class="span3" type="text" name="pname"></td>
                        </tr>
                        <tr>
                            <td width="40" style="text-align: center"><input class="span1" type="text" name="pname"></td>
                            <td width="200" style="text-align: center"><input class="span3" type="text" name="pname"></td>
                            <td width="50" style="text-align: center"><input class="span1" type="text" name="pname"></td>
                            <td width="100" style="text-align: center"><input class="span3" type="text" name="pname"></td>
                            <td width="100" style="text-align: center"><input class="span3" type="text" name="pname"></td>
                        </tr>
                        <tr>
                            <td width="40" style="text-align: center"><input class="span1" type="text" name="pname"></td>
                            <td width="200" style="text-align: center"><input class="span3" type="text" name="pname"></td>
                            <td width="50" style="text-align: center"><input class="span1" type="text" name="pname"></td>
                            <td width="100" style="text-align: center"><input class="span3" type="text" name="pname"></td>
                            <td width="100" style="text-align: center"><input class="span3" type="text" name="pname"></td>
                        </tr>
                    </table>
                    
            </div>
            <div class="well">
                
                    <legend>บุคคลอ้างอิง หรือผู้ที่สามารถติดต่อได้</legend>
                    <table width="900" border="0" class="table table-bordered">
                        <tr class="info">
                            <td width="40" style="text-align: center">ลำดับ</td>
                            <td width="50" style="text-align: center">ความสัมพันธ์</td>
                            <td width="200" style="text-align: center">ชื่อ-สกุล</td>
                            <td width="50" style="text-align: center">อายุ</td>
                            <td width="100" style="text-align: center">อาชีพ/ตำแหน่ง</td>
                            <td width="100" style="text-align: center">เบอร์โทร</td>
                        </tr>
                        <tr>
                            <td style="text-align: center"><input class="span1" type="text" name="pname"></td>
                            <td style="text-align: center"><input class="span2" type="text" name="pname"></td>
                            <td style="text-align: center"><input class="span3" type="text" name="pname"></td>
                            <td style="text-align: center"><input class="span1" type="text" name="pname"></td>
                            <td style="text-align: center"><input class="span2" type="text" name="pname"></td>
                            <td style="text-align: center"><input class="span2" type="text" name="pname"></td>
                        </tr>
                        <tr>
                            <td style="text-align: center"><input class="span1" type="text" name="pname"></td>
                            <td style="text-align: center"><input class="span2" type="text" name="pname"></td>
                            <td style="text-align: center"><input class="span3" type="text" name="pname"></td>
                            <td style="text-align: center"><input class="span1" type="text" name="pname"></td>
                            <td style="text-align: center"><input class="span2" type="text" name="pname"></td>
                            <td style="text-align: center"><input class="span2" type="text" name="pname"></td>
                        </tr>
                        <tr>
                            <td style="text-align: center"><input class="span1" type="text" name="pname"></td>
                            <td style="text-align: center"><input class="span2" type="text" name="pname"></td>
                            <td style="text-align: center"><input class="span3" type="text" name="pname"></td>
                            <td style="text-align: center"><input class="span1" type="text" name="pname"></td>
                            <td style="text-align: center"><input class="span2" type="text" name="pname"></td>
                            <td style="text-align: center"><input class="span2" type="text" name="pname"></td>
                        </tr>
                        
                    </table>
                    
            </div>
            <div class="well">
                    <legend>ความสนใจเกี่ยวกับงานของบริษัท</legend>
                    <div class="inline">
                        
                        1.&nbsp;หากบริษัท นิยมพานิชย์ จำกัดพิจารณารับท่านเข้าทำงาน ท่านจะสามารถเริ่มงานได้เร็วที่สุดเมื่อใด&nbsp;&nbsp;<input class="span2" type="date" name="pname">
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        2.&nbsp;ท่านประสงค์จะทำงานกับบริษัท นิยมพานิชย์ จำกัดที่&nbsp;&nbsp;
                        <label class="radio">
                            <input type="radio" name="prefix1" value="1">สำนักงานใหญ่
                        </label>
                        <label class="radio">
                            <input type="radio" name="prefix1" value="1">สาขา&nbsp;<input class="span2" type="text" name="pname">
                        </label>
                        <label class="radio">
                            <input type="radio" name="prefix1" value="1">ที่ใดก็ได้
                        </label>
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        4.&nbsp;ท่านยินดีให้ทางบริษัท นิยมพานิชย์ จำกัด ส่งใบสมัครของท่านไปให้บริษัทฯ ในเครือเลือกในตำแหน่งที่ท่านสมัคร&nbsp;
                        <label class="radio">
                            <input type="radio" name="prefix1" value="1">ยินดี
                        </label>
                        <label class="radio">
                            <input type="radio" name="prefix1" value="1">ไม่ยินดี
                        </label>
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        5.&nbsp;ท่านสมัครงานไว้กับที่ใดบ้าง&nbsp;<input class="span9" type="text" name="pname">
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        6.&nbsp;ท่านมีแผนที่จะศึกษาต่อหรือไม่&nbsp;
                        <label class="radio">
                            <input type="radio" name="prefix1" value="1">ไม่มี
                        </label>
                        <label class="radio">
                            <input type="radio" name="prefix1" value="1">มี
                        </label>&nbsp;&nbsp;
                        เมื่อไหร่&nbsp;<input class="span2" type="text" name="pname">&nbsp;
                        สถาบัน&nbsp;<input class="span2" type="text" name="pname">&nbsp;
                        สาขาวิชา&nbsp;<input class="span2" type="text" name="pname">
                        
                    </div>
                    
            </div>
            <div class="well">
                    <legend>ท่านทราบตำแหน่งงานว่างได้อย่างไร</legend>
                    <div class="inline">
                        
                        <label class="checkbox">
                            <input type="checkbox"> หนังสือพิมพ์&nbsp;&nbsp;&nbsp;
                        </label>
                        <label class="checkbox">
                            <input type="checkbox"> วิทยุ&nbsp;&nbsp;&nbsp;
                        </label>
                        <label class="checkbox">
                            <input type="checkbox"> ป้ายประกาศในบริษัท&nbsp;&nbsp;&nbsp;
                        </label>
                        <label class="checkbox">
                            <input type="checkbox"> Internet&nbsp;&nbsp;&nbsp;
                        </label>
                        <label class="checkbox">
                            <input type="checkbox"> สำนักงานจัดหางานจังหวัด&nbsp;<select name="province" class="input-medium">
                                                                        <option value="a" selected disabled>เลือกจังหวัด</option>
                                                                        <?php while($pv_list = mysql_fetch_array($province)) { ?>
                                                                        <option value="<?php echo $pv_list['PROVINCE_ID']; ?>"><?php echo $pv_list['PROVINCE_NAME']; ?></option>
                                                                        <?php } ?>
                                                                      </select>
                        </label>
                        
                    </div>
                    <hr>
                    <div class="inline">
                        
                        <label class="checkbox">
                            <input type="checkbox"> รับสมัคร/ประกาศจากสถาบันการศึกษา&nbsp;
                            <input class="span4" type="text" name="pname">&nbsp;
                            อื่นๆ&nbsp;<input class="span4" type="text" name="pname">
                        </label>
                        
                    </div>
                    <hr>
                    <div class="inline">
                        
                        <label class="checkbox">
                            <input type="checkbox"> พนักงานบริษัทฯแนะนำ&nbsp;
                            ชื่อ&nbsp;<input class="span3" type="text" name="pname">
                            มีความสัมพันธ์ในฐานะ&nbsp;<input class="span2" type="text" name="pname">
                        </label>
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        &nbsp;&nbsp;&nbsp;&nbsp;แผนก&nbsp;<input class="span2" type="text" name="pname">
                        ตำแหน่ง&nbsp;<input class="span2" type="text" name="pname">
                        โทร&nbsp;<input class="span2" type="text" name="pname">
                        
                    </div>
                    <hr>
                    <div class="inline">
                        
                        <label class="checkbox">
                            <input type="checkbox"> บุคคลภายนอกแนะนำ&nbsp;
                            ชื่อ&nbsp;<input class="span3" type="text" name="pname">
                            มีความสัมพันธ์ในฐานะ&nbsp;<input class="span2" type="text" name="pname">
                        </label>
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        &nbsp;&nbsp;&nbsp;&nbsp;ที่อยู่/สถานที่ทำงาน&nbsp;<input class="span6" type="text" name="pname">&nbsp;
                        โทร&nbsp;<input class="span2" type="tel" name="pname">
                        
                    </div>
                    
            </div>
            
            <div class="inline">
                        
                <h4 class="text-center text-error"><strong>ข้าพเจ้าขอรับรองว่า&nbsp;ข้อความข้างต้นถูกต้อง&nbsp;และเป็นความจริงทุกประการ&nbsp;หากข้าพเจ้าให้ข้อความเป็นเท็จ&nbsp;
                        <br><br>ข้าพเจ้ายินยอมให้บริษัท&nbsp;นิยมพานิช&nbsp;จำกัด&nbsp;เลิกจ้างทันที&nbsp;โดยไม่ต้องจ่ายค่าชดเชยใดๆ&nbsp;ทั้งสิ้น</strong></h4>
            
            </div>
            <br>
            <div class="text-center">
                        
                <input type="submit" value="บันทึกข้อมูล" class="btn btn-info">&nbsp;&nbsp;
                <input type="reset" value="ล้างข้อมูล" class="btn btn-danger">
                
            </div>
            </form>
        </div>
        <br>
        
        <br><br>
        <div class="text-center">
                        
            NIYOMPANICH CO., LTD.
                
        </div>
        <script src="js/jquery-1.10.2.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/typeahead.js"></script>
        
    </body>
</html>