<?php include 'logicpy.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style1.css">
    <title>Python FV</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="vitaran.png" >
  </head>
  <body>
    <div class="container">
	<body bgcolor='creme' text='teal' topmargin='30px' leftmargin='150px'>
<img align='center' size="200px" width="180px" src='vitaran.png'><H1 align='center' style='font-family:BankGothic Lt bt;'><b><marquee direction='left' behaviour='scroll'>Python</b></marquee></H1>
      <div class="row">

        <form action="uploadpy.php" method="post" enctype="multipart/form-data" >
          <h3>Upload File</h3>
          <input type="file" name="myfile"> <br>
          <button type="submit" name="save">upload</button>
        </form>
      </div>
    </div>
  </body>
</html>
