<?php

namespace controllers\ajax;

use models\CatalogModel;

class FilterController
{
    public function filterProducts()
    {
        $CatalogModel = new CatalogModel;

        $products = $CatalogModel->getFilters($_GET['category'], $_GET['collection'], $_GET['discount']);
        if (!empty($products)) {
            foreach ($products as $item) {
                include 'templates/catalogCard.php';
            }
        } else {
            echo "There are no such items... We are very sorry!";
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
