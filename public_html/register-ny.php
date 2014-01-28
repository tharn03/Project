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
                วันที่สมัคร&nbsp;<input class="input-small" type="text" value="<?php echo date('d-m-Y'); ?>" readonly />
                ตำแหน่ง&nbsp;1.&nbsp;<input type="text" name="regdate">
                2.&nbsp;<input type="text" name="regdate">
            </div>
            <br>
            <div class="well">
                <legend>ข้อมูลส่วนตัว</legend>
                <div class="form-inline">    
                        <label class="radio">
                            <input type="radio" name="prefix" value="1" checked> นาย
                        </label>
                        <label class="radio">
                            <input type="radio" name="prefix" value="2" > นางสาว
                        </label>
                        <label class="radio">
                            <input type="radio" name="prefix" value="3" > นาง
                        </label>
                        <label class="radio">
                            <input type="radio" name="prefix" value="0" > อื่นๆ
                        </label>
                        <input type="text" name="pcode" class="input-small">&nbsp;
                        ชื่อ-นามสกุล&nbsp;<input class="span3" id="prependedInput1" type="text" name="pname">&nbsp;&nbsp;
                        ชื่อเล่น&nbsp;<input class="span2" id="prependedInput2" type="text" name="lname">
                    </div>
                        <br>
                    <div class="inline">
                        
                        <label class="radio">
                            <input type="radio" name="prefix" value="1" checked> Mr.
                        </label>
                        <label class="radio">
                            <input type="radio" name="prefix" value="2" > Ms.
                        </label>
                        <label class="radio">
                            <input type="radio" name="prefix" value="3" > Mrs.
                        </label>
                        <label class="radio">
                            <input type="radio" name="prefix" value="0" > etc.
                        </label>
                        <input type="text" name="pcode" class="input-small">&nbsp;
                        Name&nbsp;<input class="span3" id="prependedInput1" type="text" name="pname">&nbsp;&nbsp;
                        Nickname&nbsp;<input class="span2" id="prependedInput2" type="text" name="lname">

                    </div>
                        <br>
                    <div class="inline">
                        
                        เพศ&nbsp;<input class="span1" id="prependedInput1" type="text" name="pname">&nbsp;&nbsp;
                        อายุ&nbsp;<input class="span1" id="prependedInput1" type="text" name="pname">&nbsp;ปี&nbsp;&nbsp;
                        วัน/เดือน/ปี&nbsp;เกิด&nbsp;<input class="span2" id="prependedInput1" type="date" name="pname">&nbsp;&nbsp;
                        จังหวัดที่เกิด&nbsp;<select name="province" class="input-medium">
                                        <option value="a" selected disabled>เลือกจังหวัด</option>
                                        <?php while($pv_list = mysql_fetch_array($province)) { ?>
                                        <option value="<?php echo $pv_list['PROVINCE_ID']; ?>"><?php echo $pv_list['PROVINCE_NAME']; ?></option>
                                        <?php } ?>
                                      </select>&nbsp;&nbsp;
                        
                    </div>
                        <br>
                    <div class="inline">
                        
                        น้ำหนัก&nbsp;<input class="input-small" id="prependedInput1" type="text" name="pname">&nbsp;ก.ก.&nbsp;&nbsp;
                        ส่วนสูง&nbsp;<input class="input-small" id="prependedInput1" type="text" name="pname">&nbsp;ซ.ม.&nbsp;&nbsp;
                        กรุ๊ปเลือด&nbsp;<select class="input-mini">
                                        <option>O</option>
                                        <option>A</option>
                                        <option>B</option>
                                        <option>AB</option>
                                    </select>&nbsp;&nbsp;
                        ศาสนา&nbsp;<input class="input-small" id="prependedInput1" type="text" name="pname">&nbsp;&nbsp;
                        เชื้อชาติ&nbsp;<input class="input-small" id="prependedInput1" type="text" name="pname">&nbsp;&nbsp;
                        
                    </div>
                        <br>
                    <div class="inline">
                        
                        สัญชาติ&nbsp;<input class="input-small" id="prependedInput1" type="text" name="pname">&nbsp;&nbsp;
                        สถานะสมรส&nbsp;
                        <label class="radio">
                            <input type="radio" name="prefix" value="1" checked> โสด
                        </label>
                        <label class="radio">
                            <input type="radio" name="prefix" value="2" > สมรส
                        </label>&nbsp;&nbsp;
                        E-Mail&nbsp;<input class="input" id="prependedInput1" type="text" name="pname">
                        
                    </div>
                        <br>
                    <div class="inline">
                        
                        สถานะทางการทหาร
                        <label class="radio">
                            <input type="radio" name="prefix" value="1" checked>จะถูกเกณฑ์ทหารปีพ.ศ.<input class="input-mini" type="text" name="pname">&nbsp;&nbsp; 
                        </label>
                        <label class="radio">
                            <input type="radio" name="prefix" value="2" >เคยถูกเกณ์ทหาร&nbsp;
                        </label>
                        <label class="radio">
                            <input type="radio" name="prefix" value="3" >ได้รับการยกเว้นเพราะ&nbsp;<input class="input" type="text" name="pname">
                        </label>
                        
                    </div>
                        <br>
                    <div class="inline">
                        
                        โรคประจำตัว
                        <label class="radio">
                            <input type="radio" name="prefix" value="2" >ไม่มี&nbsp;
                        </label>
                        <label class="radio">
                            <input type="radio" name="prefix" value="1" checked>มี&nbsp;<input class="input-small" type="text" name="pname">&nbsp; 
                        </label>
                        แพ้ยา&nbsp;<input class="input" type="text" name="pname">&nbsp;&nbsp;
                        หมายเหตุ&nbsp;<input class="input" type="text" name="pname">
                        
                    </div>
                        <br>
                    <div class="inline">
                        
                        ปฏิบัติงานต่างจังหวัด&nbsp;
                        <label class="radio">
                            <input type="radio" name="prefix1" value="2" >ได้&nbsp;
                        </label>
                        <label class="radio">
                            <input type="radio" name="prefix1" value="1" checked>ไม่ได้&nbsp; 
                        </label>
                        
                    </div>
                    
            </div>
            <div class="well">
                <legend>เอกสารประจำตัว</legend>
                <div class="inline">
                        
                        เลขที่บัตรประชาชน&nbsp;<input class="input" type="text" name="pname">&nbsp;&nbsp; 
                        ออกให้&nbsp;ณ&nbsp;อำเภอ&nbsp;<input class="input-small" type="text" name="pname">&nbsp;&nbsp;
                        จังหวัด&nbsp;<select name="per_province" class="input-medium">
                                        <option value="" selected>เลือกจังหวัด</option>
                                        <?php while($pv_list1 = mysql_fetch_array($province1)) { ?>
                                        <option value="<?php echo $pv_list1['PROVINCE_ID']; ?>"><?php echo $pv_list1['PROVINCE_NAME']; ?></option>
                                        <?php } ?>
                                  </select>&nbsp;&nbsp;
                        
                </div>
                <br>
                <div class="inline">
                        
                        วันที่ออกบัตร&nbsp;<input class="input" type="date" name="pname">&nbsp;&nbsp;
                        วันที่หมดอายุ&nbsp;<input class="input" type="date" name="pname">&nbsp;&nbsp;
                        
                </div>
                
            </div>
            <div class="well">
                    <legend>ที่อยู่</legend>
                    <div class="inline">
                        
                        <strong>ที่อยู่ปัจจุบัน</strong>&nbsp;
                        เลขที่&nbsp;<input class="input-mini" type="text" name="pname">&nbsp;&nbsp;
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
                        
                        <label class="checkbox">
                            <input type="checkbox"> ตามที่อยู่ปัจจุบัน
                        </label>
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        <strong>ที่อยู่ตามทะเบียนบ้าน</strong>&nbsp;
                        เลขที่&nbsp;<input class="input-mini" type="text" name="pname">&nbsp;&nbsp;
                        หมู่&nbsp;<input class="input-small" type="text" name="pname">&nbsp;&nbsp;
                        ซอย&nbsp;<input class="input-small" type="text" name="pname">&nbsp;&nbsp;
                        ถนน&nbsp;<input class="input" type="text" name="pname">&nbsp;&nbsp;
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        ตำบล/แขวง&nbsp;<input class="input" type="text" name="pname">&nbsp;&nbsp;
                        อำเภอ/เขต&nbsp;<input class="input" type="text" name="pname">&nbsp;&nbsp;
                        จังหวัด&nbsp;<select name="peradd_province" class="input-medium">
                                        <option value="" selected>เลือกจังหวัด</option>
                                        <?php while($pv_list3 = mysql_fetch_array($province3)) { ?>
                                        <option value="<?php echo $pv_list3['PROVINCE_ID']; ?>"><?php echo $pv_list3['PROVINCE_NAME']; ?></option>
                                        <?php } ?>
                                  </select>&nbsp;&nbsp;
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        รหัสไปรษณีย์&nbsp;<input class="input" type="text" name="pname">&nbsp;&nbsp;
                        โทรศัพท์&nbsp;<input class="input" type="text" name="pname">&nbsp;&nbsp;
                        มือถือ&nbsp;<input class="input" type="text" name="pname">&nbsp;&nbsp;
                        
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
                    <div class="inline">
                        
                        
                        
                    </div>
                    
            </div>
            <div class="well">
                    <legend>ประวัติการฝึกงาน</legend>
            </div>
            <div class="well">
                    <legend>ความสามารถ</legend>
            </div>
            <div class="well">
                    <legend>การฝึกอบรม</legend>
            </div>
            <div class="well">
                    <legend>ข้อมูลคู่สมรส</legend>
            </div>
            <div class="well">
                    <legend>ประวัติครอบครัว</legend>
            </div>
            <div class="well">
                    <legend>บุคคลอ้างอิง หรือผู้ที่สามารถติดต่อได้</legend>
            </div>
            <div class="well">
                    <legend>สิ่งค้ำประกัน</legend>
            </div>
            <div class="well">
                    <legend>ความสนใจเกี่ยวกับงานของบริษัท</legend>
            </div>
            <div class="well">
                    <legend>ท่านทราบตำแหน่งงานว่างได้อย่างไร</legend>
            </div>
            </form>
        </div>
        <br><br>
                
        <script src="js/jquery-1.10.2.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>