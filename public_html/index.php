<?php

set_include_path(get_include_path().PATH_SEPARATOR.dirname(__FILE__)."/../app");
set_include_path(get_include_path().PATH_SEPARATOR.dirname(__FILE__)."/../vendor");
set_include_path(get_include_path().PATH_SEPARATOR.dirname(__FILE__)."/../lib");


require "application.php";

initialisation();