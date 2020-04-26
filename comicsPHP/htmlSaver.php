<?php
function saveHTML($remoteURL, $fileName)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $remoteURL);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    $content = curl_exec($ch);
    if (curl_errno($ch)) {
        echo curl_error($ch);
    } else {
        $fh = fopen($fileName, 'w');
        if (!$fh) {
            echo "Error by creating file";
        } else {
            fwrite($fh, $content);
            fclose($fh);
        }
    }
    curl_close($ch);
}
