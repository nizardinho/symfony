<?php
/**
 * Created by PhpStorm.
 * User: programme
 * Date: 27/05/2017
 * Time: 17:16
 */
namespace AppBundle\Controller;


use AppBundle\Form\Type\MyFormType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MyController extends Controller {


	/**
	 * @Route("/my/{param}", name="my", defaults={"param"=1})
	 * @Method("GET")
	 *
	 */
    public function MyFunction (Request $request) {

    	$form = $this->createForm(MyFormType::class);

        return $this->render('myTemplate/my.html.twig', [
        	'name' => $request->get('param'),
			'form' => $form->createView()
		]);
    }
}