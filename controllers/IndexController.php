<?php

class IndexController extends Controller
{
    private $pageTpl = "/views/products.tpl.php";

    public function __construct()
    {
        $this->repository = new IndexRepository();
        $this->view       = new View();
    }

    public function index()
    {
        $this->pageData['products'] = $this->repository->getAllProducts();
        $this->pageData['title']    = "Товары";
        $this->view->render($this->pageTpl, $this->pageData);

        if ($_FILES) {
            if ($_FILES['csv']['type'] != 'text/csv' || $_FILES['csv']['type'] == '') {
                $this->pageData['errors'] = "Ошибка! Возможно данный файл имеет некорректный формат";
            } else {
                if (move_uploaded_file($_FILES['csv']['tmp_name'], UPLOAD_FOLDER . $_FILES['csv']['name'])) {
                    $csvFile = file(UPLOAD_FOLDER . $_FILES['csv']['name']);
                    foreach ($csvFile as $key => $value) {
                        if ($key == 0) {
                            continue;
                        }
                        $this->repository->addFromCSV(str_getcsv($value, ';'));
                    }
                }
            }
        }
    }
}