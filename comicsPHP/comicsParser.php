<?php
function parseSource($file, $sourcePosition, $bufferFile)
{
    $firstQuotePosition = strpos($file, '"', $sourcePosition);
    $secondQuotePosition = strpos($file, '"', $firstQuotePosition + 1);
    $source = substr($file, $firstQuotePosition + 1, ($secondQuotePosition - $firstQuotePosition - 1));
    unlink($bufferFile);
    return $source;
}

function getGenericSiteSource($siteName, $comicName)
{
	$bufferFile = $comicName . "Source.html";
    switch ($siteName) {
    	case "gocomics":
        	$today = date("Y/m/d");
        	break;
        case "comicskingdom":
        	$today = date("Y-m-d");
        	break;
    }
    saveHTML("https://www." . $siteName . ".com/" . $comicName . "/" . $today, $bufferFile);
    $file = file_get_contents('./' . $bufferFile, FILE_USE_INCLUDE_PATH);
    $startingPoint = strpos($file, "og:image");
    $file = substr($file, $startingPoint);
    $sourcePosition = strpos($file, "content");
    return parseSource($file, $sourcePosition, $bufferFile);
}

function getDilbertSource()
{
    $bufferFile = "dilbertSource.html";
    $today = date("Y-m-d");
    saveHTML("https://dilbert.com/strip/" . $today, $bufferFile);
    $file = file_get_contents('./' . $bufferFile, FILE_USE_INCLUDE_PATH);
    $startingPoint = strpos($file, "img-responsive img-comic");
    $file = substr($file, $startingPoint);
    $sourcePosition = strpos($file, "src");
    return parseSource($file, $sourcePosition, $bufferFile);
}

function getArchieSource()
{
    $bufferFile = "archieSource.html";
    saveHTML("https://www.creators.com/read/archie", $bufferFile);
    $file = file_get_contents('./' . $bufferFile, FILE_USE_INCLUDE_PATH);
    $startingPoint = strpos($file, "nav-circlepop");
    $file = substr($file, $startingPoint);
    $sourcePosition = strpos($file, "src");
    return parseSource($file, $sourcePosition, $bufferFile);
}
