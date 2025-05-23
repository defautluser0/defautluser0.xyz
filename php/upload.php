<html>
  <head>
    <title>php upload thing</title>
    <link rel=stylesheet href=../style.css>
  </head>
  <body>

<?PHP
  if(!empty($_FILES['uploaded_file']))
  {
    $path = "../uploaded/";
    $path = $path . basename( $_FILES['uploaded_file']['name']);

    if($path == "../uploaded/index.html") {
	    echo "<p class='p'>nope</p>";
    } else if(file_exists($path)) {
	    echo "<p class='p'>file alr exists</p>";
    } else if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      echo "<a class='a p' href='/uploaded/". $_FILES['uploaded_file']['name']. "'>check here</a>";
    } else{
        echo "<p class='p'>error, srry</p>";
    }
  }
?>

  </body>
</html>
