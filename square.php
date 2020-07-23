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
			.aa {width: 100px;height: 100px;border: 5px solid black;background-color: white;transition: all ease 1s;animation-name: ex;
        position: absolute;top: 400px; left: 750px;}
			.aa:hover {transform: scale( 1.1 );}
      .bb {width: 100px;height: 100px;border: 5px solid black;background-color: white;transition: all ease 1s;
        position: absolute;top: 400px; left: 950px;}
      .bb:hover {transform: scale( 1.1 );}
      .cc {width: 100px;height: 100px;border: 5px solid black;background-color: white;transition: all ease 1s;
        position: absolute;top: 400px; left: 1150px;}
      .cc:hover {transform: scale( 1.1 );}
      .dd {width: 100px;height: 100px;border: 5px solid black;background-color: white;transition: all ease 1s;
        position: absolute;top: 600px; left: 750px;}
      .dd:hover {transform: scale( 1.1 );}
      .ee {width: 100px;height: 100px;border: 5px solid black;background-color: white;transition: all ease 1s;
        position: absolute;top: 600px; left: 950px;}
      .ee:hover {transform: scale( 1.1 );}
      .ff {width: 100px;height: 100px;border: 5px solid black;background-color: white;transition: all ease 1s;
        position: absolute;top: 600px; left: 1150px;}
      .ff:hover {transform: scale( 1.1 );}
      .gg {width: 100px;height: 100px;border: 5px solid black;background-color: white;transition: all ease 1s;
        position: absolute;top: 800px; left: 750px;}
      .gg:hover {transform: scale( 1.1 );}
      .hh {width: 100px;height: 100px;border: 5px solid black;background-color: white;transition: all ease 1s;
        position: absolute;top: 800px; left: 950px;}
      .hh:hover {transform: scale( 1.1 );}
      .ii {width: 100px;height: 100px;border: 5px solid black;background-color: white;transition: all ease 1s;
        position: absolute;top: 800px; left: 1150px;}
      .ii:hover {transform: scale( 1.1 );}
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
      #subtitle{
        position: absolute;top: 105px;left: 550px;
        font-size: 20px;
      }
      div.w1{font-size: 50px;position: absolute;top: 310px;left: 790px;}
      div.w2{font-size: 50px;position: absolute;top: 310px;left: 990px;}
      div.w3{font-size: 50px;position: absolute;top: 310px;left: 1190px;}
      div.h1{font-size: 50px;position: absolute;top: 420px;left: 670px;}
      div.h2{font-size: 50px;position: absolute;top: 620px;left: 670px;}
      div.h3{font-size: 50px;position: absolute;top: 820px;left: 670px;}
		</style>
	</head>
	<body>
    <header><b>S Q U A R E</b></header>
    <b id='subtitle'>Lv1. Tutorial</b>
    <div class="box"></div>
		<div class="aa" id='a'></div>
    <div class="bb" id='b'></div>
    <div class="cc" id='c'></div>
    <div class="dd" id='d'></div>
    <div class="ee" id='e'></div>
    <div class="ff" id='f'></div>
    <div class="gg" id='g'></div>
    <div class="hh" id='h'></div>
    <div class="ii" id='i'></div>

    <div class="w1"><b>1</b></div>
    <div class="w2"><b>3</b></div>
    <div class="w3"><b>1</b></div>
    <div class="h1"><b>1</b></div>
    <div class="h2"><b>1</b></div>
    <div class="h3"><b>3</b></div>

    <script type="text/javascript">
      var doc = document;
      var clicka = doc.getElementById('a');        //대상 지정
      a=0;
      clicka.addEventListener('click',function(){a++;});        //겟엘리멘트바이아이디
      setInterval(function(){if(a==1){clicka.style.background= 'black';}else if(a==2){a-=2;clicka.style.background= 'white';}else{clicka.style.background= 'white';}},500);
      var clickb = doc.getElementById('b');        //대상 지정
      b=0;
      clickb.addEventListener('click',function(){b+=2;});        //겟엘리멘트바이아이디
      setInterval(function(){if(b==2){clickb.style.background= 'black';}else if(b==4){b-=4;clickb.style.background= 'white';}else{clickb.style.background= 'white';}},500);
      var clickc = doc.getElementById('c');        //대상 지정
      c=0;
      clickc.addEventListener('click',function(){c+=4;});        //겟엘리멘트바이아이디
      setInterval(function(){if(c==4){clickc.style.background= 'black';}else if(c==8){c-=8;clickc.style.background= 'white';}else{clickc.style.background= 'white';}},500);
      var clickd = doc.getElementById('d');        //대상 지정
      d=0;
      clickd.addEventListener('click',function(){d+=8;});        //겟엘리멘트바이아이디
      setInterval(function(){if(d==8){clickd.style.background= 'black';}else if(d==16){d-=16;clickd.style.background= 'white';}else{clickd.style.background= 'white';}},500);
      var clicke = doc.getElementById('e');        //대상 지정
      e=0;
      clicke.addEventListener('click',function(){e+=16;});        //겟엘리멘트바이아이디
      setInterval(function(){if(e==16){clicke.style.background= 'black';}else if(e==32){e-=32;clicke.style.background= 'white';}else{clicke.style.background= 'white';}},500);
      var clickf = doc.getElementById('f');        //대상 지정
      f=0;
      clickf.addEventListener('click',function(){f+=32;});        //겟엘리멘트바이아이디
      setInterval(function(){if(f==32){clickf.style.background= 'black';}else if(f==64){f-=64;clickf.style.background= 'white';}else{clickf.style.background= 'white';}},500);
      var clickg = doc.getElementById('g');        //대상 지정
      g=0;
      clickg.addEventListener('click',function(){g+=64;});        //겟엘리멘트바이아이디
      setInterval(function(){if(g==64){clickg.style.background= 'black';}else if(g==128){g-=128;clickg.style.background= 'white';}else{clickg.style.background= 'white';}},500);
      var clickh = doc.getElementById('h');        //대상 지정
      h=0;
      clickh.addEventListener('click',function(){h+=128;});        //겟엘리멘트바이아이디
      setInterval(function(){if(h==128){clickh.style.background= 'black';}else if(h==256){h-=256;clickh.style.background= 'white';}else{clickh.style.background= 'white';}},500);
      var clicki = doc.getElementById('i');        //대상 지정
      i=0;
      clicki.addEventListener('click',function(){i+=256;});        //겟엘리멘트바이아이디
      setInterval(function(){if(i==256){clicki.style.background= 'black';}else if(i==512){i-=512;clicki.style.background= 'white';}else{clicki.style.background= 'white';}},500);
    </script>
    <div id="curvedarrow" onclick="if(a+b+c+d+e+f+g+h+i==466){
      window.location.href = '/square_result.php?id=1';
    }else{
      window.location.href = '/square_result.php?id=0';
    }" ><b>Submit</b></div>
	</body>
</html>
