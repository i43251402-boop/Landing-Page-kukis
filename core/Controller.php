<?php
class Controller {
    protected function view($view, $data = []) {
        extract($data);
        require_once 'views/header.php';
        require_once 'views/' . $view . '.php';
        require_once 'views/footer.php';
    }
}
?>