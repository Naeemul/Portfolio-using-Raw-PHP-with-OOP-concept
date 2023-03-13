<?php
require_once "vendor/autoload.php";
use App\classes\Home;


include "pages/front/header.php"; 
if ("home" == $_GET['page']){
    include ("pages/home.php");
}
elseif ("about" == $_GET['page']){
    include "pages/about.php";
}
elseif ("portfolio" == $_GET['page']){
    include "pages/portfolio.php";
}
elseif ("education" == $_GET['page']){
    include "pages/education.php";
}
elseif ("contact" == $_GET['page']){
    include "pages/contact.php";
}
include "pages/front/footer.php";