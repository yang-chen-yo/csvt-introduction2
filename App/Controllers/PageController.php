<?php

namespace App\Controllers;

use Collator;

class PageController
{

    public static function web_render($type, $view)
    {
        switch ($type) {
            case "admin":
                $nav = "Frontend/layouts/" . $type . "-layout.html";
                $footer = "Frontend/footers/public-footer.html";
                $select = "Frontend/admin-select.html";
                break;
            case "user":
                $nav = "Frontend/layouts/" . $type . "-layout.html";
                $footer = "Frontend/footers/public-footer.html";
                $select = "Frontend/space.html";
                break;

            case "login":
                $nav = "Frontend/space.html";
                $footer = "Frontend/space.html";
                $select = "Frontend/space.html";
                break;
        }
        $body = "Frontend/bodies/".$view.".html";
        include "Frontend/header.html";
    }
}
