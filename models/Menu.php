<?php
class Menu {
    private $menus = [
        [
            'id'          => 1,
            'name'        => 'Strawberry Bliss',
            'description' => 'Kukis strawberry lembut dengan taburan gula merah muda yang manis dan aroma vanilla chochips yang memanjakan.',
            'price'       => 10000,
            'image'       => 'assets/images/Karlie Recipes.jpg',
            'badge'       => 'Best Seller',
        ],
        [
            'id'          => 2,
            'name'        => 'Choco Dreamy',
            'description' => 'Perpaduan cokelat premium dengan keping cokelat lumer di setiap gigitan, dijamin bikin ketagihan!',
            'price'       => 15000,
            'image'       => 'assets/images/kukis.jpg',
            'badge'       => 'Favorit',
        ],
        [
            'id'          => 3,
            'name'        => 'Vanilla Cloud',
            'description' => 'Kukis vanilla klasik dengan tekstur renyah di luar dan lembut di dalam, taburan gula halus di atasnya.',
            'price'       => 10000,
            'image'       => 'assets/images/Vanilla Bean Sugar Cookies (1).jpg',
            'badge'       => 'New',
        ],
        [
            'id'          => 4,
            'name'        => 'Pink Velvet',
            'description' => 'Kukis red velvet spesial berwarna merah muda cantik dengan krim keju di tengahnya yang creamy.',
            'price'       => 15000,
            'image'       => 'assets/images/Red Velvet Cookies with Cream Cheese Frosting.jpg',
            'badge'       => 'Spesial',
        ],
        [
            'id'          => 5,
            'name'        => 'Matcha Strawbery',
            'description' => 'Sensasi matcha Jepang dengan sentuhan strawbery, unik dan menawan.',
            'price'       => 15000,
            'image'       => 'assets/images/matcha.jpg',
            'badge'       => '',
        ],
        [
            'id'          => 6,
            'name'        => 'Rainbow Sprinkle',
            'description' => 'Kukis ceria penuh warna dengan sprinkle pelangi, sempurna untuk hadiah ulang tahun!',
            'price'       => 10000,
            'image'       => 'assets/images/funfetti.jpg',
            'badge'       => 'Limited',
        ],
    ];

    public function getAll() {
        return $this->menus;
    }

    public function getById($id) {
        foreach ($this->menus as $menu) {
            if ($menu['id'] === $id) return $menu;
        }
        return null;
    }
}
?>