<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>PA form  - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
     <!-- Fonts -->
        <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <style type="text/css">
        body{   background-repeat: no-repeat;
                    background: rgb(185,210,224); /* Old browsers */
                    background: -moz-radial-gradient(center, ellipse cover,  rgba(185,210,224,1) 0%, rgba(187,214,228,1) 0%, rgba(186,211,225,1) 15%, rgba(186,211,225,1) 38%, rgba(169,199,215,1) 68%, rgba(169,199,215,1) 68%, rgba(169,199,215,1) 82%, rgba(158,191,208,1) 100%); /* FF3.6-15 */
                    background: -webkit-radial-gradient(center, ellipse cover,  rgba(185,210,224,1) 0%,rgba(187,214,228,1) 0%,rgba(186,211,225,1) 15%,rgba(186,211,225,1) 38%,rgba(169,199,215,1) 68%,rgba(169,199,215,1) 68%,rgba(169,199,215,1) 82%,rgba(158,191,208,1) 100%); /* Chrome10-25,Safari5.1-6 */
                    background: radial-gradient(ellipse at center,  rgba(185,210,224,1) 0%,rgba(187,214,228,1) 0%,rgba(186,211,225,1) 15%,rgba(186,211,225,1) 38%,rgba(169,199,215,1) 68%,rgba(169,199,215,1) 68%,rgba(169,199,215,1) 82%,rgba(158,191,208,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
                    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b9d2e0', endColorstr='#9ebfd0',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
                }
                .red{background-color: red;
                    }
                .yellow{background-color: yellow;
                    }
                    .green{background-color: green;
                    }
                    .white{background-color: white;
                    }
                .black{background-color: black;
                    }    
        h4{padding: 25px 0px;
          text-align: center;}        
        .container{margin-top:100px;
          
        border:3px solid #F4F4F4;
        background-color: #fff;}        
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top clearfix">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">1669 NAVI</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                    <ul class="nav navbar-nav">
                        <li ><a href="/">หน้าแรก <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">เหตุด่วน/อุบัติเหตุ</a></li>
                    </ul>
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="ค้นหาเหตุด่วน/อุบัติเหตุ">
                        </div>
                        <button type="submit" class="btn btn-default">ค้นหา</button>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">ข้อมูลผู้ใช้ <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li class="divider"></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

<div class="container">
	<div class="row">
		<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<h4>เพิ่มเหตุด่วน/อุบัติเหตุ</h4>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="requestName">เหตุการณ์</label>  
  <div class="col-md-4">
  <input id="requestName" name="accident_name" placeholder="ชื่อเหตุการณ์" class="form-control input-md" required autofocus type="text" >
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="minB">พิกัดสถานที่</label>  
  <div class="col-md-2">
  <input id="minB" name="latitude" placeholder="latitude" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="maxB"></label>  
  <div class="col-md-2">
  <input id="maxB" name="latitude" placeholder="longitude" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="econLimOil">เบอร์โทรศัพท์ผู้แจ้งเหตุ</label>  
  <div class="col-md-5">
  <input id="econLimOil" name="tel_num_call" placeholder="หมายเลขโทรศัพท์" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="uregency">ระดับความรุณแรง</label>
  <div class="col-md-4">
    <select id="uregency" name="uregency" class="form-control">
      <option class="red" value="NormalLevel">วิกฤตแดง ESI-1</option>
      <option class="red" value="Urgent">วิกฤตแดง ESI-2</option>
      <option class="yellow" value="VeryUrgent">เร่งด่วน ESI-3</option>
      <option class="green" value="VeryUrgent">ไม่รุนแรง ESI-4</option>
      <option class="white" value="VeryUrgent">ทั่วไป ESI-5</option>
      <option class="black" value="VeryUrgent">ไม่มีผู้ป่วย(มารับบริการอื่น)</option>
    </select>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-default">Submit</button>
  </div>
</div>

</fieldset>
</form>

	</div>
</div>
<script type="text/javascript">

</script>
</body>
</html>
