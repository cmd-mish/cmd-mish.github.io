<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="../resources/style.css" defer>
  <script data-host="https://microanalytics.io" data-dnt="false" src="https://microanalytics.io/js/script.js"
    id="ZwSg9rf6GA" async defer></script>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>fullstackopen projects - cmd-mish.dev</title>
</head>

<body>
  <a href="../" class="logo-link">
    <div class="logo-container">
      <div class="button-container cmd-button">
        <div id="cmd-button-symbol">&#x2318;</div>
        <div id="cmd-button-text">command</div>
      </div>

      <div id="connector">+</div>

      <div class="button-container mish-button">
        <div id="mish-button-text">mish</div>
      </div>
    </div>
    <div class="nav-bar">
      <ul>
        <li><a href="https://github.com/cmd-mish">github</a></li>
        <li><a href="../">fullstackopen</a></li>
        <li><a href="https://www.linkedin.com/in/popov-mikhail-al/s">linkedin</a></li>
      </ul>
    </div>
  </a>

  <div class="content-container">
    <div class="content">
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
    </div>
  </div>


</body>

</html>
