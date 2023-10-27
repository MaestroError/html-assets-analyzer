<?php

require "vendor/autoload.php";

use maestroerror\Scanner;
use maestroerror\FileManager;

$scanner = new Scanner();

$assets = $scanner->getAssets();
$html = $scanner->getHtmlFiles();


$matches = [];

foreach ($html as $htmlFile) {
    $htmlContent = file_get_contents("html\\".$htmlFile);
    
    foreach ($assets as $asset) {
        $explode = explode("\\", $asset);
        if (strpos($htmlContent, $explode[count($explode)-1]) !== false) {
            $matches[$htmlFile][] = $asset;
        }
    }
}

// Sorting by HTML file path (if needed)
ksort($matches);

print_r($matches);
echo json_encode($matches);