<html>
<style>
  body { 
	background: #8AC16B;
  }
  p{
	Position:absolute;
	top:50%;
	left:50%;
	transform:translate(-50%,-50%);
	font-size: 40pt;
  }
 
  #blink-2{
  color: #000;
  font-size: 40px;
  font-weight: 700;
  text-align: center;
  animation:blur .75s ease-out infinite;
  text-shadow:text-shadow: 0 0 5px #abc, 0 0 7px #abc;
}

@keyframes blur{
  from{
      text-shadow:0px 0px 10px #fff,
      0px 0px 10px #fff, 
      0px 0px 25px #fff,
      0px 0px 25px #fff,
      0px 0px 25px #fff,
      0px 0px 25px #fff,
      0px 0px 25px #fff,
      0px 0px 25px #fff,
      0px 0px 50px #fff,
      0px 0px 50px #fff,
      0px 0px 50px #7B96B8,
      0px 0px 150px #7B96B8,
      0px 10px 100px #7B96B8,
      0px 10px 100px #7B96B8,
      0px 10px 100px #7B96B8,
      0px 10px 100px #7B96B8,
      0px -10px 100px #7B96B8,
      0px -10px 100px #7B96B8;}
}

</style>
<body>
<p id="blink-2">Hello Admin</p>
</body>
</html>