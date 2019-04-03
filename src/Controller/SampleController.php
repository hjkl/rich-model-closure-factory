<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\SampleType;

class SampleController extends Controller
{
    public function sample(Request $request)
    {
        $form = $this->createForm(SampleType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            echo 'valid'; die;
        }

        return $this->render('sample.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
