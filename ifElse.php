<!DOCTYPE html>
<html>
    <style>
        .t{
            color:green;
            text-align:center;
            font:30px;
            font-weight: 700;
        }
    </style>
<body>

<p class="t">
<?php

$t = "mong 6";

if ($t < "mong 1") {
  echo "Visit mother";
} else if ($t < "mong 2") {
  echo "Visit father";
}
else if ($t < "mong 3") {
    echo "Visit MR.Dinh!";
  }
  else if ($t < "mong 4") {
    echo "Visit bo!";
  }
  else if ($t < "mong 5") {
    echo "lên xe!";
  }
  else{
    echo "PNV!";
  }

?></p>
<p class="t">
<?php
switch ($t) {
    case "mong 1":
        echo "lên xe!";
        break;
    case "mong 2":
        echo "Visit bo!";;
        break;
    case "mong 3":
        echo  "Visit MR.Dinh!";
        break;
    case "mong 4":
        echo "Visit papa!";
        break;
    case "mong 5":
        echo "Visit mama!";
        break;
    case "mong 6":
        echo "ngu";
        break;       
}
?></p>
 
</body>
</html>