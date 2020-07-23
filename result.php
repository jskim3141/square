<!doctype html>
<html lang="ko">
	<head>
		<meta charset="utf-8">
		<title>네모네모 로직-Lv.1</title>
		<style>
    body {
      background-color: lightblue;
      opacity: 0.7;
    }
      .box{
        width:1910px;
        height: 959px;
        border:5px solid black;
        position: absolute;top:0;left:0;
      }
      header{
        font-size: 80px;
        margin: 40px;
      }

      #subtitle{
        position: absolute;top: 105px;left: 550px;
        font-size: 20px;
      }
      #clear{
        position: absolute;top: 500px;left: 900px;
        color: black;
        font-size: 60px;
      }
      #curvedarrow {
        position: absolute;top:910px;left: 1840px;
        width: 0;
        height: 0;
        border-top: 9px solid transparent;
        border-right: 9px solid blue;
        transform: rotate(10deg);
      }
      #curvedarrow:after {
        content: "";
        position: absolute;
        border: 0 solid transparent;
        border-top: 3px solid blue;
        border-radius: 20px 0 0 0;
        top: -12px;
        left: -9px;
        width: 12px;
        height: 12px;
        transform: rotate(45deg);
      }
		</style>
	</head>
	<body>
    <div class="box"></div>
    <header><b>S Q U A R E</b></header>
    <b id='subtitle'>RESULT</b>
    <?php
      if($_GET['id']==1){
        echo '<div id="clear"><b>CLEAR</b></div>';
      }else{
        echo '<div id="clear"><b>FAIL</b></div>';
      };
     ?>
     <div id='curvedarrow' onclick="window.location.href = 'https://jskim3141.github.io/square/'">New</div>
	</body>
</html>
