<?php
class HomeController extends Controller {
    public function index() {
        $menuModel = new Menu();
        $menus = $menuModel->getAll();

        $this->view('home', [
            'menus'        => $menus,
            'page_title'   => 'Crumble & Co. — Kukis Homemade Premium',
            'shop_name'    => 'Crumble & Co.',
            'tagline'      => 'Dibuat dengan cinta, dikirim dengan senyum 🍪',
        ]);
    }
}
?>