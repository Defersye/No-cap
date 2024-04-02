<?php

namespace controllers\ajax;

use models\CatalogModel;

class FilterController
{
    public function filterProducts()
    {
        $CatalogModel = new CatalogModel;

        $products = $CatalogModel->getFilters($_POST['category'], $_POST['collection'], $_POST['discount']);
        if (!empty($products)) {
            foreach ($products as $item) {
                include 'templates/catalogCard.php';
            }
        } else {
            echo "There's no such products... We're so sorry!";
        }
    }
    public function clearFilter()
    {
        $CatalogModel = new CatalogModel;
        $filter = $CatalogModel->getProducts();
        foreach ($filter as $item) {
            include 'templates/catalogCard.php';
        }
    }
}
