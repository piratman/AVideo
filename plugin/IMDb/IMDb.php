<?php

global $global;
require_once $global['systemRootPath'] . 'plugin/Plugin.abstract.php';
//require_once $global['systemRootPath'] . 'plugin/Audit/Objects/AuditTable.php';

class IMDb extends PluginAbstract {

    public function getDescription() {
        return "Enables you to scrape data from IMDB.com";
    }

    public function getName() {
        return "IMDb";
    }

    public function getUUID() {
        return "21171156-dc62-46e3-ace9-86c6e8f9c81b";
    }  

    public function getPluginVersion() {
        return "1.0";   
    }
    
    public function getVideosManagerListButton() {
        global $global;
        $btn = '<br><button type="button" class="btn btn-primary btn-light btn-sm btn-xs" '
                . ' onclick="getIMDb(\'+ row.id+\');" '
                . ' data-row-id="right"  data-toggle="tooltip" data-placement="left" title="IMDb"><i class="fab fa-imdb"></i> IMDb Scrape</button>';
        return $btn;
    }
    
    public function getFooterCode() {
        global $global;
        if (basename($_SERVER["SCRIPT_FILENAME"]) === 'managerVideos.php') {
            include $global['systemRootPath'] . 'plugin/IMDb/footer.php';
        }
    }

}
