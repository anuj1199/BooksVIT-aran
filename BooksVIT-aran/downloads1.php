<?php include 'filesLogic1.php';?>
<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="style1.css">
    <title>BooksVIT-aran SV</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="vitaran.png" >
</head>
<body>

<img align='center' size="200px" width="180px" src='vitaran.png'><H1 align='center' style='font-family:BankGothic Lt bt;'><b><marquee direction='left' behaviour='scroll'>BooksVIT-aran</b></marquee></H1>
<table>
<thead>
    <th>ID</th>
	<th>Course</th>
    <th>Filename</th>
    <th>size (in kb)</th>
    <th>Downloads</th>
    <th>Action</th>
</thead>
<tbody>
  <?php foreach ($files as $file): ?>
    <tr>
      <td><?php echo $file['id']; ?></td>
	  <td>maths</td>
      <td><?php echo $file['name']; ?></td>
      <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
      <td><?php echo $file['downloads']; ?></td>
      <td><a href="downloads.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
    </tr>
  <?php endforeach;
  if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    // fetch file to download from database
    $sql = "SELECT * FROM maths WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'uploads/' . $file['name'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/' . $file['name']));
        readfile('uploads/' . $file['name']);

        // Now update downloads count
        $newCount = $file['downloads'] + 1;
        $updateQuery = "UPDATE files SET downloads=$newCount WHERE id=$id";
        mysqli_query($conn, $updateQuery);
        exit;
    }

}  ?>


</tbody>
</table>

</body>
</html>