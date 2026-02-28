<?php
require_once ROOT . '/core/Controller.php';

class JoinController extends Controller {
    public function index() {
        $products = Product::getAll();
        $agent = Agent::getCurrent();
        $this->render('join/index', compact('products', 'agent'));
    }
}
