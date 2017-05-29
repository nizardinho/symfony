<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class MyFormType extends AbstractType {

	public function buildForm(FormBuilderInterface $builder, array $opt){

		$builder
			->add('name', TextType::class, [
				'data' => 'test',
				'required' => false
			]);

	}
}