<?php
function parseSource($file, $sourcePosition, $bufferFile)
{
    $firstQuotePosition = strpos($file, '"', $sourcePosition);
    $secondQuotePosition = strpos($file, '"', $firstQuotePosition + 1);
    $source = substr($file, $firstQuotePosition + 1, ($secondQuotePosition - $firstQuotePosition));
    unlink($bufferFile);
    return $source;
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

function getHagarSource()
{
    $bufferFile = "hagarSource.html";
    saveHTML("https://www.comicskingdom.com/hagar-the-horrible", $bufferFile);
    $file = file_get_contents('./' . $bufferFile, FILE_USE_INCLUDE_PATH);
    $startingPoint = strpos($file, "image-url");
    $file = substr($file, $startingPoint);
    return parseSource($file, 1, $bufferFile);
}
