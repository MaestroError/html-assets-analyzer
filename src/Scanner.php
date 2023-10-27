<?php

namespace maestroerror;

use maestroerror\FileManager;

Class Scanner {

    protected $assets;
    protected $html;

    public function __construct(string $assetsFolder = "assets", string $htmlFolder = "html") {
        $this->assets = FileManager::folder($assetsFolder)->getFilesAll();
        $this->html = FileManager::folder($htmlFolder)->getFilesAll();
    }

    public function getAssets() {
        return $this->assets;
    }

    public function getHtmlFiles() {
        return $this->html;
    }
}