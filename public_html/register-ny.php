<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
                วันที่สมัคร&nbsp;<input class="span2" type="datetime" name="regdate">
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
                        <input type="text" name="pcode" class="input-small">
                        ชื่อ-นามสกุล&nbsp;<input class="span3" id="prependedInput1" type="text" name="pname">
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
                        <input type="text" name="pcode" class="input-small">
                        Name&nbsp;<input class="span3" id="prependedInput1" type="text" name="pname">
                        Nickname&nbsp;<input class="span2" id="prependedInput2" type="text" name="lname">

                    </div>
                        <br>
                    <div class="inline">
                        
                        เพศ&nbsp;<input class="span1" id="prependedInput1" type="text" name="pname">&nbsp;&nbsp;
                        อายุ&nbsp;<input class="span1" id="prependedInput1" type="text" name="pname">&nbsp;ปี&nbsp;&nbsp;
                        วัน/เดือน/ปี&nbsp;เกิด&nbsp;<input class="span2" id="prependedInput1" type="date" name="pname">&nbsp;&nbsp;
                        จังหวัดที่เกิด&nbsp;<input class="span2" id="prependedInput1" type="text" name="pname">&nbsp;&nbsp;
                        
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
                                    </select>
                        ศาสนา&nbsp;<input class="input-small" id="prependedInput1" type="text" name="pname">&nbsp;&nbsp;
                        เชื้อชาติ&nbsp;<input class="input-small" id="prependedInput1" type="text" name="pname">&nbsp;&nbsp;
                        
                    </div>
                        <br>
                    <div class="inline">
                        
                        เชื้อชาติ&nbsp;<input class="input-small" id="prependedInput1" type="text" name="pname">&nbsp;&nbsp;
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
                        
                        ปฏิบัติงานต่างจังหวัด
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
                        จังหวัด&nbsp;<select name="province" class="input-medium">
                                        <option value="" selected>เลือกจังหวัด</option>
                                        <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                                        <option value="กระบี่">กระบี่ </option>
                                        <option value="กาญจนบุรี">กาญจนบุรี </option>
                                        <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
                                        <option value="กำแพงเพชร">กำแพงเพชร </option>
                                        <option value="ขอนแก่น">ขอนแก่น</option>
                                        <option value="จันทบุรี">จันทบุรี</option>
                                        <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
                                        <option value="ชัยนาท">ชัยนาท </option>
                                        <option value="ชัยภูมิ">ชัยภูมิ </option>
                                        <option value="ชุมพร">ชุมพร </option>
                                        <option value="ชลบุรี">ชลบุรี </option>
                                        <option value="เชียงใหม่">เชียงใหม่ </option>
                                        <option value="เชียงราย">เชียงราย </option>
                                        <option value="ตรัง">ตรัง </option>
                                        <option value="ตราด">ตราด </option>
                                        <option value="ตาก">ตาก </option>
                                        <option value="นครนายก">นครนายก </option>
                                        <option value="นครปฐม">นครปฐม </option>
                                        <option value="นครพนม">นครพนม </option>
                                        <option value="นครราชสีมา">นครราชสีมา </option>
                                        <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
                                        <option value="นครสวรรค์">นครสวรรค์ </option>
                                        <option value="นราธิวาส">นราธิวาส </option>
                                        <option value="น่าน">น่าน </option>
                                        <option value="นนทบุรี">นนทบุรี </option>
                                        <option value="บึงกาฬ">บึงกาฬ</option>
                                        <option value="บุรีรัมย์">บุรีรัมย์</option>
                                        <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
                                        <option value="ปทุมธานี">ปทุมธานี </option>
                                        <option value="ปราจีนบุรี">ปราจีนบุรี </option>
                                        <option value="ปัตตานี">ปัตตานี </option>
                                        <option value="พะเยา">พะเยา </option>
                                        <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
                                        <option value="พังงา">พังงา </option>
                                        <option value="พิจิตร">พิจิตร </option>
                                        <option value="พิษณุโลก">พิษณุโลก </option>
                                        <option value="เพชรบุรี">เพชรบุรี </option>
                                        <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
                                        <option value="แพร่">แพร่ </option>
                                        <option value="พัทลุง">พัทลุง </option>
                                        <option value="ภูเก็ต">ภูเก็ต </option>
                                        <option value="มหาสารคาม">มหาสารคาม </option>
                                        <option value="มุกดาหาร">มุกดาหาร </option>
                                        <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
                                        <option value="ยโสธร">ยโสธร </option>
                                        <option value="ยะลา">ยะลา </option>
                                        <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
                                        <option value="ระนอง">ระนอง </option>
                                        <option value="ระยอง">ระยอง </option>
                                        <option value="ราชบุรี">ราชบุรี</option>
                                        <option value="ลพบุรี">ลพบุรี </option>
                                        <option value="ลำปาง">ลำปาง </option>
                                        <option value="ลำพูน">ลำพูน </option>
                                        <option value="เลย">เลย </option>
                                        <option value="ศรีสะเกษ">ศรีสะเกษ</option>
                                        <option value="สกลนคร">สกลนคร</option>
                                        <option value="สงขลา">สงขลา </option>
                                        <option value="สมุทรสาคร">สมุทรสาคร </option>
                                        <option value="สมุทรปราการ">สมุทรปราการ </option>
                                        <option value="สมุทรสงคราม">สมุทรสงคราม </option>
                                        <option value="สระแก้ว">สระแก้ว </option>
                                        <option value="สระบุรี">สระบุรี </option>
                                        <option value="สิงห์บุรี">สิงห์บุรี </option>
                                        <option value="สุโขทัย">สุโขทัย </option>
                                        <option value="สุพรรณบุรี">สุพรรณบุรี </option>
                                        <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
                                        <option value="สุรินทร์">สุรินทร์ </option>
                                        <option value="สตูล">สตูล </option>
                                        <option value="หนองคาย">หนองคาย </option>
                                        <option value="หนองบัวลำภู">หนองบัวลำภู </option>
                                        <option value="อำนาจเจริญ">อำนาจเจริญ </option>
                                        <option value="อุดรธานี">อุดรธานี </option>
                                        <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
                                        <option value="อุทัยธานี">อุทัยธานี </option>
                                        <option value="อุบลราชธานี">อุบลราชธานี</option>
                                        <option value="อ่างทอง">อ่างทอง </option>
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
                        
                        
                        
                    </div>
            </div>
            <div class="well">
                    <legend>ประวัติการศึกษา</legend>
            </div>
            <div class="well">
                    <legend>ประวัติการทำงาน</legend>
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