<!DOCTYPE html>
<html>

<head>
  
  <title>K Blog - Blogs</title>
  <link rel="icon" href="pictures/icon.png">
  <link rel="stylesheet" type="text/css" href="css/theme.css">
  <link rel="stylesheet" type="text/css" href="css/blogs.css">
  <?php include 'memNav.php'; ?>

  <script>

    pointer = 0;
    rows = 0;
    all_title = new Array();
    all_content = new Array();
    all_id = new Array();
    <?php while ($row = mysqli_fetch_row($result)) { ?>
      
      all_title.push('<?php echo $row[0] ?>');
      all_content.push('<?php echo $row[1] ?>');
      all_id.push('<?php echo $row[2] ?>');
      rows++;
      <?php } ?>
      
      function myFunction3()
      {
        for(var i = pointer; i < pointer+4 && i < rows;i++)
        {
          var dive = document.createElement("div");
          var titlee = document.createElement("h1");
          var contentt = document.createElement("p");
          titlee.innerHTML = '<a href="viewBlog.php?id=' + all_id[i] + '" style="color:black;text-decoration:none;">' + decodeURIComponent(all_title[i]) + '</a>';
          contentt.innerHTML = ""+decodeURIComponent(all_content[i])+"";
          dive.setAttribute("class", "blog");
          dive.appendChild(titlee);
          dive.appendChild(contentt);
          var element = document.getElementById("left");
          element.appendChild(dive);
        }
        pointer += 4;
      }
    </script>

  </head>

  <body onload="myFunction3()">

    <div id="body">

      <?php include 'rightMenu.php'; ?>
      
      <div id="left">
    
        <input id="viewMore" type=button value="view more..." onclick="myFunction3()"/>

      </div>
      
    </div>
  
  </body>

</html>