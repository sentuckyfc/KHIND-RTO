<?php
require_once ROOT . '/core/Controller.php';

class CatalogController extends Controller {
    public function index() {
        $products = Product::getAll();
        $agent = Agent::getCurrent();
        $this->render('catalog/index', compact('products', 'agent'));
    }
}
