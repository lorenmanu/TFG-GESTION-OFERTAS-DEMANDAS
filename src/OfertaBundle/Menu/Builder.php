<?php

namespace OfertaBundle\Menu;
use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;


class Builder extends ContainerAwareInterface {   
  use ContainerAwareTrait;
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');
        dump($this->container->getDoctrine());
        exit;
        $repositoryArea = $this->container->get('doctrine')->getManager()->getRepository('AreaBundle:Area');
        $areas = $repositoryArea->findAll();
        $menu = $factory->createItem('root');

        dump($repositoryArea);
        exit;

        foreach($areas as $area){
          $menu->setChildrenAttribute('id', 'menu');
          $menu->addChild($area->getNombre(),array('uri' => '/app_dev.php//mostrarOfertas/?area='.$area->getNombre()));
          $ramas = $area->getRamas();
          /*
          foreach((array) $ramas as $rama){
            
            $menu[$rama->getNombre()]->addChild($rama->getNombre(), array('uri' => '/app_dev.php/mostrarOfertas/?area='.$area->getNombre().'?rama='.$rama->getNombre()))->setAttribute('divider_append', true);
            $disciplinas = $rama->getDisciplinas();

            /*
            foreach((array) $disciplinas as $disciplina){
              $menu[$disciplina->getNombre()]->addChild($rama->getNombre(), array('uri' => '/app_dev.php/mostrarOfertas/?area='.$area->getNombre().'?disciplina='.$disciplina->getNombre().'&disciplina='$disciplina->getNombre()))->setAttribute('divider_append', true);
            }
            */
            

          //}
        }

        return $menu;

    }
}
