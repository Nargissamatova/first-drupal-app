<?php

namespace Drupal\hello_name\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;

class HelloNameController extends ControllerBase
{
    public function hello()
    {
        return [
            '#markup' => '<p>The simplest <b>render array</b> possible. My name is Nargis</p>',
        ];
    }
}
