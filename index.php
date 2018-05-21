<?php

//Define A and B pages
$testingPages = array(
  "a" => file_get_contents('a.html'),
  "b" => file_get_contents('b.html')
);

//Randomly choose a page
if (rand(0,1)==1) {
  //Add a data atribute to body to indicate the page
  $temp = str_replace('<body','<body data-page="a"',$testingPages["a"]);

  //Javascript alert telling you what page is being displayed
  echo str_replace('</head>','  <script>alert("a");</script>'."\n".'</head>',$temp);
}
else{
  //Add a data atribute to body to indicate the page
  $temp = str_replace('<body','<body data-page="b"',$testingPages["b"]);

  //Javascript alert telling you what page is being displayed
  echo str_replace('</head>','  <script>alert("b");</script>'."\n".'</head>',$temp);
}

 ?>
