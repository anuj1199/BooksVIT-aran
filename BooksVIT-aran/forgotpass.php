<html>
<head>
<title>Forgot Password</title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="vitaran.png" >
	<link rel="stylesheet" href="style.css"/>
<style>
.site-btn {
   display: inline-block;
   border: none;
   font-size: 14px;
   font-weight: 700;
   min-width: 100px;
   padding: 23px 30px;
   border-radius: 9px;
   text-transform: uppercase;
   background: #f7ffa0;
   color: #493365;
   line-height: normal;
   letter-spacing: 2px;
   cursor: pointer;
   text-align: center;
 }
 
 .site-btn:hover {
   color: #493365;
 }
 
 .site-btn.sb-shadow {
   -webkit-box-shadow: 0 19px 27px rgba(0, 0, 0, 0.35);
   box-shadow: 0 19px 27px rgba(0, 0, 0, 0.35);
 }
 
 .site-btn.sb-gradient {
   color: #fff;
 }
 
 .site-btn.sb-dark {
   background: #5a496a;
   color: #fff;
 }
</style>
</head>
<body bgcolor='creme' text='teal' topmargin='30px' leftmargin='150px'>
<img align='center' size="90px" width="80px" src='Capture2.JPG'><H1 align='center' style='font-family:BankGothic Lt bt;'><b><marquee direction='left' behaviour='scroll'>BooksVIT-aran</b></marquee></H1>
<a href='index.php'><input type='image' src='home.jpg' size='60px' width='60px' style='border-radius:35px; position:fixed;' value='Submit''></input></a></th>
<H2 align='center' style='font-family:BankGothic Lt bt;'><b>Forgot Password</b>
<form action="forgotpassword.php" method="POST">
<table align='center' border='0' width='70%' cellpadding='10' cellspacing='10' style='border-radius:30px; background-color:rgb(19,68,89); color: white;' >
<thead>
<tr>
	<th width='20%' align='left'>E-mail:</th>
	<th width='40%' align='left'><input type='email' name='email' id='email' required=''> </th>
</tr>
<tr>
	<th width='20%' align='right'><button class='site-btn'type="submit" id='btn' value='Submit'>Submit</button></th>
</form>
</body>
</html>