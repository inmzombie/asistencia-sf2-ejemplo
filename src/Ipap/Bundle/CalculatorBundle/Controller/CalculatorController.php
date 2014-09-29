<?php

namespace Ipap\Bundle\CalculatorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class CalculatorController extends Controller
{
    /**
     * @Route("/operation")
     * @Template()
     */
    public function operationAction()
    {
        return array(
            'result' => '',
        );
    }

}
