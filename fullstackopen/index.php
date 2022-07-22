<!DOCTYPE html>
<html lang="en">
<head>
  <script data-host="https://microanalytics.io" data-dnt="false" src="https://microanalytics.io/js/script.js" id="ZwSg9rf6GA" async defer></script>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>fullstackopen projects - cmd-mish.dev</title>
</head>
<body>
  <h1>fullstackopen projects</h1>
  <p>
    This page contains examples of my projects from <a href="https://fullstackopen.com/">fullstackopen.com</a>
  </p>
  <ul>
    <?php
      $files = scandir('.');
      foreach($files as $row) {
        if ($row[0] !== "." && is_dir($row)) {
          print('<li><a href="./'.$row.'">'.$row.'</a></li>');
        }
      }
    ?>
  </ul>
</body>
</html>