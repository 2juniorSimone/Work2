<?php


namespace AppBundle\Controller;


use Symfony\Component\HttpFoundation\Response;


class WorkController
{
    /**
     * @Route ("/work")
     * @return \HttpResponse
     */
    public function showAction()
    {
        return new Response('Test!');
    }


}