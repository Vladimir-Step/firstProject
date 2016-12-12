<?php

namespace NailsBundle\Controller;

use NailsBundle\Entity\color;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;



class NailsController extends Controller
{
    
    /**
     * @Route("/nails/create_nails_color", name="Создание цвета ногтей")
     */
    public function create_nails_colorAction(Request $request)
    {
        $NailsColor = new color;

        $form = $this-> createFormBuilder($NailsColor)
        -> add('NailsColorName', TextType::class, array('label' => 'Цвет: ','attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
        -> add('Send', SubmitType::class, array('label' => 'Создать','attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
        -> getForm();

        $form -> handleRequest($request);

        if ($form -> isSubmitted() && $form -> isValid()) {
            //GET data
            $NailsColorName = $form['NailsColorName'] -> getData();

            $NailsColor -> setNailsColorName($NailsColorName);

            $em = $this -> getDoctrine() -> getManager();
            $em -> persist($NailsColor);
            $em -> flush();

            $this -> addFlash(
                'notice',
                'Цвет Добавлен'
            );
            return $this -> redirectToRoute('Создание цвета ногтей', array('color' => $NailsColorName));
        }
		return $this->render('nails/AdminNails.html.twig', array(
            'form' => $form -> createView() 
            ));
    }
    /**
     * @Route("/edit/{id}", name="edit")
     */
    public function editAction($id, Request $request)
    {
        //die('TODOS');
        // replace this example code with whatever you need
        return $this->render('test/edit.html.twig');
    }
}

