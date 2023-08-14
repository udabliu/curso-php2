<?php
 //local host precisa colocar o 8080
  $BASE_URL = "http://" . $_SERVER['SERVER_NAME'] .':8080' . dirname($_SERVER['REQUEST_URI'] . '?') . '/';