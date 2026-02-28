<?php
require_once ROOT . '/core/Controller.php';

class HomeController extends Controller {
    public function index() {
        $products = Product::getAll();
        $agent = Agent::getCurrent();
        $this->render('home/index', compact('products', 'agent'));
    }
}
