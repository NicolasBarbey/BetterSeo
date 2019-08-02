<?php
/**
 * Created by PhpStorm.
 * User: nicolasbarbey
 * Date: 25/07/2019
 * Time: 15:56
 */

namespace BetterSeo\Form;


use BetterSeo\BetterSeo;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Thelia\Core\Translation\Translator;
use Thelia\Form\BaseForm;

class BetterSeoForm extends BaseForm
{
    protected function buildForm()
    {

        $form = $this->formBuilder;
        $form
            ->add(
                'noindex_checkbox',
                'integer',
                array(
                    'required' => false,
                    'label'=> Translator::getInstance()->trans(
                        'noindex',
                        array(),
                        BetterSeo::DOMAIN_NAME
                    ),
                    'label_attr' => array(
                        'for' => 'noindex_checkbox'
                    )
                ))
            ->add(
                'nofollow_checkbox',
                'integer',
                array(
                    'required' => false,
                    'label'=> Translator::getInstance()->trans(
                        'nofollow',
                        array(),
                        BetterSeo::DOMAIN_NAME
                    ),
                    'label_attr' => array(
                        'for' => 'nofollow_checkbox'
                    )
                ))
            ->add(
                'canonical_url',
                'url',
                array(
                    'required' => false,
                    'label' => Translator::getInstance()->trans(
                        'canonical',
                        array(),
                        BetterSeo::DOMAIN_NAME
                    ),
                    'label_attr' => array(
                        'for' => 'canonical_url'
                    )
                )
            );
    }

    /*public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
           'object_id' => null,
           'object_type' => null
        ));
    }*/

    public function getName()
    {
        return 'betterseo_form';
    }


}