<?php

namespace controllers\ajax;

use models\CatalogModel;

class SearchController
{
    public function searchProducts()
    {
        $CatalogModel = new CatalogModel;

        $products = $CatalogModel->getSearch($_POST['search']);
        if (!empty($products)) {
            foreach ($products as $item) {
                include 'templates/catalogCard.php';
            }
        } else {
            echo "Таких вещей нет... Нам очень жаль!";
        }
    }

    public function clearSearch()
    {
        $CatalogModel = new CatalogModel;
        $search = $CatalogModel->getProducts();
        foreach ($search as $item) {
            include 'templates/catalogCard.php';
        }
    }
}
