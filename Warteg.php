<?php
    require_once "method.php";
    $obj_menu = new Warteg();
    $request_method = $_SERVER["REQUEST_METHOD"];
    switch ($request_method) {
        case 'GET':
            if (!empty($_GET["id"])) {
                $id = intval($_GET["id"]);
                $obj_menu->get_warteg($id);
            } else {
                    $obj_menu->get_wartegs();
                }
            break;
        
        case 'POST':
            if (!empty($_GET["id"])) {
                $id = intval($_GET["id"]);
                $obj_menu->update_menu($id);
            } else {
                $obj_mie->insert_mie();
                }
            break;
            
        case 'DELETE':
            $id = intval($_GET["id"]);
            $obj_menu->delete_menu($id);
            break;

        default:
                header("HTTP/1.0 405 Method Not Allowed");
            break;
    }