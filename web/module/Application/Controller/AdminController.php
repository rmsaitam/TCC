<?php

namespace Application\Controller;

use Application\Helper\Output;
use Application\Model\ProdutoModel;
use Szy\Mvc\Controller\AbstractController;
use Szy\Mvc\View\View;

class AdminController extends AbstractController
{
    /**
     * @return void
     */
    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
        sleep(4);
    }

    /**
     * @param string $mobile
     * @return View
     */
    public function indexAction($mobile = null)
    {
        $output = new Output(Output::STATUS_OK);

        $model = new ProdutoModel();
        $r = $model->query("SELECT * FROM produto LIMIT 10");

        $output->data = $r->getArrayCopy();

        $this->response->write($output);
        return;
    }
}