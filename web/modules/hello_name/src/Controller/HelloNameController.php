<?php

namespace Drupal\hello_name\Controller;

use Symfony\Component\HttpFoundation\Response;

use Drupal\Core\Controller\ControllerBase;
use  Drupal\Core\Link;
use Drupal\Core\Url;

class HelloNameController extends ControllerBase
{
    public function hello()
    {
        $url = Url::fromRoute('hello_name.form');
        $link = Link::fromTextAndUrl($this->t('Go to the form'), $url)->toString();
        return  ['#markup' => '<p>The simplest <b>render array</b> possible. My name is Nargis</p>',];
    }
    public function greeting($name)
    {
        return ['#markup' => $this->t('Hello, @name!', ['@name' => $name])];
    }
}
