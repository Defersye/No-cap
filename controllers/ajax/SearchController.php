<?php

namespace controllers\ajax;

use models\HomeModel;

class SearchController
{
    public function searchProducts()
    {
        $CatalogModel = new \models\CatalogModel;

        $products = $CatalogModel->getSearch($_POST['search']);
        if (!empty($products)) {
            foreach ($products as $item) {
                include 'templates/catalogCard.php';
            }
        } else {
            echo "There's no such products... We're so sorry!";
        }
    }

    public function clearSearch()
    {
        $CatalogModel = new \models\CatalogModel;
        $search = $CatalogModel->getProducts();
        foreach ($search as $item) {
            include 'templates/catalogCard.php';
        }
    }
}
