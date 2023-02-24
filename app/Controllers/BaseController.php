<?php
namespace app\Controllers;
class BaseController {
    public function renderHTML($fileName, $data) {
        include($fileName);
    }
}
?>