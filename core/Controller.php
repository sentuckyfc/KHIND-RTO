<?php
/**
 * KHIND RTO - Base Controller
 */
class Controller {
    /**
     * Render a view with layout (header + view + footer)
     *
     * @param string $view  View path relative to app/views/ (e.g. 'home/index')
     * @param array  $data  Variables to extract into the view scope
     */
    public function render($view, $data = []) {
        extract($data);
        include ROOT . '/app/views/layouts/header.php';
        include ROOT . '/app/views/' . $view . '.php';
        include ROOT . '/app/views/layouts/footer.php';
    }
}
