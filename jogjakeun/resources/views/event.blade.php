<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EVENT</title>
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

  
  <!-- style css -->
  <style>
h4{
	height: 100%;
	background-color: #34363D;
	line-height: 60px;
	padding: 0 5px;
	color: white;

}
*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: sans-serif;
}
	input{
		display: none;
	}
.container{
	width: 100%;
	text-align:center;
	}
h1{
	font-weight: normal;
	font-size: 35;
	position: relative;
	margin: 40px 0;
	color: white;

}
h1::before{
	content: '';
	position: absolute;
	width: 100px;
	height: 3px
	background-color: #34363D;;
	bottom: 
}
.top-content{
	background-color: #34363D;
	width: 90%;
	margin: 0 auto 20px auto;
	height: 60px;
	display: flex;
	align-items: center;	
	border-radius: 5px;
	box-shadow: 3px 3px 5px #34363D;
}
h3{
	height: 100%;
	background-color: #34363D;
	line-height: 60px;
	padding: 0 50px;
	color: white;

}


label{ 
	display: inline-block;
	height: 100%;
	margin: 0 20px;
	line-height: 60px;
	font-size: 18px;
	color: gray;
	cursor: pointer;
	transition: .5s;

}
label:hover{
	color: #ECCD20;
}

button{
	color: red;
	background-color: white;
	
}
span{
	color: white;
	}
.photo-gallery{
	width: 90%;
	margin: auto;
	display: grid;
	grid-template-columns: repeat(3, 1fr);
	grid-gap: 30px;
}

.pic{
	position: relative;
	height: 267px;
	border border-radius: 10px;
	box-shadow: 2px 2px 4px #34363D;
	cursor: pointer;
}
.pic img{
	width: 100%;
	height: 100%;
	border-radius: 10px;
}
.pic:hover::after{
	height: 100%;
}
.pic:hover::before{
	margin-top: 0;
	opacity: 1;
}
#check1:checked ~ .container .photo-gallery .pic{
	opacity: 1;
	transform: scale(1);
	position: relative;
	transition: .5s;
}
#check3:checked ~ .container .photo-gallery .video{
	opacity: 1;
	transform: scale(1);
	position: relative;
	transition: .5s;
}
#check3:checked ~ .container .photo-gallery .photo{
	opacity: 0;
	transform: scale(0);
	position: absolute;
	transition: .5s;
}
#check2:checked ~ .container .photo-gallery .photo{
	opacity: 1;
	transform: scale(1);
	position: relative;
	transition: .5s;
}
#check2:checked ~ .container .photo-gallery .video{
	opacity: 0;
	transform: scale(0);
	position: absolute;
	transition: .5s;
}
 </style>
 
</head>
<body style="background-color: #34363D;">

<input type="radio" name="photos" id="check1" checked>
<input type="radio" name="photos" id="check2">
<input type="radio" name="photos" id="check3">
<input type="radio" name="photos" id="check4">

<div class="container">
  <h1>EVENT</h1>
  <div class="top-content">
    <h3>Photo & Video</h3>
    <label for="check1">Semua</label>
    <label for="check2">Photo</label>
    <label for="check3">Video</label>
  </div>
    
   <div class="photo-gallery">
     <div class="pic photo">
       <img src="/img/photo1.png">
       <button onclick="Gas()" type="button" class="like" > like</button> <span id="bisa">0</span>
      <h1><span id="overhere"></span></h1>
    <script type="text/javascript">
        function ok(){
          document.getElementById("bisa").innerHTML = "you";
        }

        function Gas(){
          var foo = document.getElementById('bisa').innerHTML;
          foo++;
          document.getElementById('bisa').innerHTML = foo;
        }
    </script>
     </div>


     <div class="pic video">
       <img src="/img/video1.png">
       <button onclick="Gas1()" type="button" class="like" > like</button> <span id="bisa1">0</span>
      <h1><span id="overhere"></span></h1>
    <script type="text/javascript">
        function ok(){
          document.getElementById("bisa1").innerHTML = "you";
        }

        function Gas1(){
          var foo = document.getElementById('bisa1').innerHTML;
          foo++;
          document.getElementById('bisa1').innerHTML = foo;
        }
    </script>
     </div>
     <div class="pic photo">
       <img src="/img/photo2.png">
       <button onclick="Gas2()" type="button" class="like" > like</button> <span id="bisa2">0</span>
      <h1><span id="overhere"></span></h1>
    <script type="text/javascript">
        function ok(){
          document.getElementById("bisa2").innerHTML = "you";
        }

        function Gas2(){
          var foo = document.getElementById('bisa2').innerHTML;
          foo++;
          document.getElementById('bisa2').innerHTML = foo;
        }
    </script>
     </div>
     <div class="pic video">
       <img src="/img/video2.png">
       <button onclick="Gas3()" type="button" class="like" > like</button> <span id="bisa3">0</span>
      <h1><span id="overhere"></span></h1>
    <script type="text/javascript">
        function ok(){
          document.getElementById("bisa3").innerHTML = "you";
        }

        function Gas3(){
          var foo = document.getElementById('bisa3').innerHTML;
          foo++;
          document.getElementById('bisa3').innerHTML = foo;
        }
    </script>
     </div>
     <div class="pic photo">
       <img src="/img/photo3.png">
       <button onclick="Gas4()" type="button" class="like" > like</button> <span id="bisa4">0</span>
      <h1><span id="overhere"></span></h1>
    <script type="text/javascript">
        function ok(){
          document.getElementById("bisa4").innerHTML = "you";
        }

        function Gas4(){
          var foo = document.getElementById('bisa4').innerHTML;
          foo++;
          document.getElementById('bisa4').innerHTML = foo;
        }
    </script>
     </div>
     <div class="pic video">
       <img src="/img/video3.png">
       <button onclick="Gas5()" type="button" class="like" > like</button> <span id="bisa5">0</span>
      <h1><span id="overhere"></span></h1>
    <script type="text/javascript">
        function ok(){
          document.getElementById("bisa5").innerHTML = "you";
        }

        function Gas5(){
          var foo = document.getElementById('bisa5').innerHTML;
          foo++;
          document.getElementById('bisa5').innerHTML = foo;
        }
    </script>
     </div>
   </div>



</div>

</body>
</html>