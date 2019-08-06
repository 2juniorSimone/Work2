<?php


namespace AppBundle\Controller;


class WorkController
{
    /**
     * @Route ("/work")
     * @return \HttpResponse
     */
    public function showAction()
    {
        return new \HttpResponse('Test!');
    }


}