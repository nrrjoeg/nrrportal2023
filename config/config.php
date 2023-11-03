<?php

    $nrrroot = '';
    
    $imagedir = $nrrroot.'/nrrportal/assets/images';
    
    $cssdir = $nrrroot.'/nrrportal/assets/css';
    
    $viewsdir = $nrrroot.'/nrrportal/views';

    $indexdir = $_SERVER['DOCUMENT_ROOT'].'/nrrportal';
    
    $jsdir = $_SERVER['DOCUMENT_ROOT'].'/nrrportal/assets/js';
    
    $configdir = $_SERVER['DOCUMENT_ROOT'].'/nrrportal/config';
    
    $subviewsdir = $_SERVER['DOCUMENT_ROOT'].'/nrrportal/views/subviews';

    $chartsdir = $_SERVER['DOCUMENT_ROOT'].'/nrrportal/views/subviews/charts';
    
    $processdir = $_SERVER['DOCUMENT_ROOT'].'/nrrportal/process';

    $todaydate = date("Y-m-d");

    $yesterday = date('Y-m-d', strtotime("-1 days"));

    $firstdayofcurrentmonth = date('Y-m-01');
    $lastdayofcurrentmonth = date('Y-m-t');

    $firstdayoflastmonth = date('Y-m-d', strtotime(date('Y-m-01').' -1 MONTH'));
    $lastdayoflastmonth = date('Y-m-d', strtotime('-1 second',strtotime(date('m').'/01/'.date('Y')))) ;

    $firstdayofyear = date('Y-m-d', strtotime('first day of january this year'));

?>
