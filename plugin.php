switch ($modx->event->name) {
    case 'OnLoadWebDocument':
        // контакты
        $res = $modx->getObject("modResource", 8); // настройки сайта
        $contacts = json_decode($res->getTVValue("contacts"), true);
        $pls = [];
        foreach($contacts as $row){
            $key = $row["key"];
            $pls["{$key}.value"] = $row["value"];
            $pls["{$key}.title"] = $row["title"];
        }
        $modx->setPlaceholders($pls, 'contacts.');
        return;
    break;
}
