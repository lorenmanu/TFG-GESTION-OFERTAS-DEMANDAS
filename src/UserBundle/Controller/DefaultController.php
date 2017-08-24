<?php

namespace UserBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use UserBundle\Entity\User;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use RegistroVisitasUsuarioBundle\Entity\RegistroVisitasUsuario;
use VisitasDiaBundle\Entity\VisitasDia;
use VisitasMesBundle\Entity\VisitasMes;
use VisitasAnioBundle\Entity\VisitasAnio;
use Ob\HighchartsBundle\Highcharts\Highchart;
use Ob\HighchartsBundle\Highcharts\Highstock;
use Doctrine\Common\Collections\ArrayCollection;

class DefaultController extends Controller
{

  public function addUserAction(Request $request){
    $form =  $this->createFormBuilder($user = new User())
    ->add('username','text')
    ->add('email', 'email', array('label' => 'form.email'))
    ->add('plainPassword', 'repeated', array(
        'type' => 'password',
        'first_options' => array('label' => 'form.password'),
        'second_options' => array('label' => 'form.password_confirmation'),
        'invalid_message' => 'fos_user.password.mismatch',
        )
     )
    ->setAction($this->generateUrl('addUser'))
    ->getForm();
    //$form->handleRequest($request);


    /*
    if($form->isValid()){
      dump("hola");
      exit;
      $em = $this->getDoctrine()->getManager();
      $em->persist($user);
      $em->flush();
      return $this->redirectToRoute('homepage');
    }
    */

    return $this->render('UserBundle:Default:addUser.html.twig',array(
      'form' => $form->createView()));
  }

  /*
    =====================================================================================

    Metodo que edita a un usuario del sistema "editUsersAction"


    Pasos del metodo:
      i) Obtiene a todos los usuarios de la base de datos
      iv) Dirigira hacia la plantilla que imprime a los usuarios

      Localizacion: src/UserBundle/Resources/views/Default/editUser.html.twig
    =====================================================================================
  */

  public function editUsersAction(Request $request){
    $users = $this->getDoctrine()
    ->getRepository('UserBundle:User')
    ->findAll();

    $paginator = $this->get('knp_paginator');

    $pagination = $paginator->paginate(
      $users,
      $request->query->getInt('page', 1),
      4
      );

    $pagination->setCustomParameters(array(
      'style' => 'bottom',
      'span_class' => 'whatever'
      ));

    return $this->render('UserBundle:Default:editUsers.html.twig',array(
      'pagination' => $pagination));
  }

  /*
    =====================================================================================

    Metodo que borra a un usuario del sistema


    Pasos del metodo:
      i) Obtiene el nombre del usuario por el metodo get(Request)
      ii) Busca al usuario y su registro de visitas en la base de datos
      iii) Elimina al usuario y su registro de visitas
      iv) Dirigira hacia la plantilla que edita usuarios

      Localizacion: src/UserBundle/Resources/views/Default/editUser.html.twig
    =====================================================================================
  */

	public function removeUseraction(Request $request){
    $em = $this->getDoctrine()->getManager();
    $userManager = $this->get('fos_user.user_manager');
    //$user=$em->getRepository('UserBundle:User')->findById($request->query->get('idUser'));
    $user=$em->getRepository('UserBundle:User')->findBy( array('username' => $request->query->get('nameUser')));
    $registroVisitasUsuario = $em->getRepository('RegistroVisitasUsuarioBundle:RegistroVisitasUsuario')->findBy( array('usuario' => $user[0]->getId()));

    if(count($registroVisitasUsuario)>0){
      $em->remove($registroVisitasUsuario[0]);
    }

    $em->flush();

  $userManager->deleteUser($user[0]);

  return $this->redirectToRoute('editUsers');
}

/*
  =====================================================================================

  Metodo que devuelve el perfil del usuario "perfilUserAction"


  Pasos del metodo:
    i) Obtiene la id del usuario por el metodo get(Request)
    ii) Creara el formulario de contacto con el usuario
    iii) Buscara el registro de visitas por anio del usuario en la base de datos y sus ofertas
    iv) Comprueba si el formuario es valido para mandar el Mensaje
    v) Dirigira hacia la plantilla que imprimira el perfil

    Localizacion: src/UserBundle/Resources/views/Default/perfilUser.html.twig
  =====================================================================================
*/

public function perfilUserAction(Request $request){
  $session = $request->getSession();
  $em = $this->getDoctrine()->getManager();
  $userId=$request->query->get('userId');

  $formContact = $this->createFormBuilder(null)
                ->add('mensaje', 'textarea', array('label' => 'Mensaje'))
                ->add('Enviar','submit', array('attr' => array('class' => 'btn btn-success pull-right')))
                ->setAction($this->generateUrl('perfilUser'))
                ->getForm();


    $user=$em->getRepository('UserBundle:User')->findBy( array('id' => $userId))[0];
    $registroVisitasUsuario = $em->getRepository('RegistroVisitasUsuarioBundle:RegistroVisitasUsuario')->findBy( array( 'usuario' => $userId ));
    $ofertas=$em->getRepository('OfertaBundle:Oferta')->findByAutor($user->getName());
    $demandas=$em->getRepository('DemandaBundle:Demanda')->findByAutor($user->getName());

    $paginatorOferta = $this->get('knp_paginator');
    $paginationOferta = $paginatorOferta->paginate(
      $ofertas,
      $request->query->getInt('page', 1),
      2
      );

      $paginatorDemanda = $this->get('knp_paginator');
      $paginationDemanda = $paginatorDemanda->paginate(
        $demandas,
        $request->query->getInt('page', 1),
        2
        );

    $topeAnio=count($registroVisitasUsuario[0]->getVisitasAnio())-1;
    $anio=$registroVisitasUsuario[0]->getVisitasAnio()[$topeAnio];


    $ob = $this->getGraficaPorAnio($anio);

    $paginationOferta->setCustomParameters(array(
      'style' => 'bottom',
      'span_class' => 'whatever'
      ));

      $paginationDemanda->setCustomParameters(array(
        'style' => 'bottom',
        'span_class' => 'whatever'
        ));
      $formContact->handleRequest($request);

      if($formContact->isValid()){
        $message = \Swift_Message::newInstance()
        ->setSubject('Mensaje del Administrador')
        ->setFrom($this->getUser()->getEmail())
        ->setTo($user->getEmail())
        ->setBody(
          $formContact->get('mensaje')->getData()
        )
      ;

      $this->get('mailer')->send($message);
    }


    return $this->render('UserBundle:Default:perfilUser.html.twig', array(
      'ob' => $ob, 'paginationOferta' => $paginationOferta, 'paginationDemanda' => $paginationDemanda, 'user' => $user, 'anios' => $registroVisitasUsuario[0]->getVisitasAnio(), 'user' => $user, 'formContact' => $formContact->createView()
      ));
}

public function mostrarOfertasUserAction(Request $request){
  $session = $request->getSession();
  $em = $this->getDoctrine()->getManager();
  $userId=$request->query->get('userId');



    $user=$em->getRepository('UserBundle:User')->findBy( array('id' => $userId))[0];
    $ofertas=$em->getRepository('OfertaBundle:Oferta')->findByAutor($user->getName());

    $paginatorOferta = $this->get('knp_paginator');
    $paginationOferta = $paginatorOferta->paginate(
      $ofertas,
      $request->query->getInt('page', 1),
      2
      );



    $paginationOferta->setCustomParameters(array(
      'style' => 'bottom',
      'span_class' => 'whatever'
      ));



    return $this->render('UserBundle:Default:mostrarOfertasUser.html.twig', array(
      'pagination' => $paginationOferta,  'user' => $user,
      ));
}


public function mostrarDemandasUserAction(Request $request){
  $session = $request->getSession();
  $em = $this->getDoctrine()->getManager();
  $userId=$request->query->get('userId');



    $user=$em->getRepository('UserBundle:User')->findBy( array('id' => $userId))[0];
    $demandas=$em->getRepository('DemandaBundle:Demanda')->findByAutor($user->getName());

    $paginatorDemanda = $this->get('knp_paginator');
    $paginationDemanda = $paginatorDemanda->paginate(
      $demandas,
      $request->query->getInt('page', 1),
      2
      );



    $paginationDemanda->setCustomParameters(array(
      'style' => 'bottom',
      'span_class' => 'whatever'
      ));



    return $this->render('UserBundle:Default:mostrarDemandasUser.html.twig', array(
      'pagination' => $paginationDemanda,  'user' => $user,
      ));
}

/*
  =====================================================================================

  Metodo que devuelve el numero de visitas por anio "registroVisitasUser"


  Pasos del metodo:
    i) Obtiene la id del anio y del user por el metodo get(Request)
    ii) Buscara al usuario y su registro de visitas por anio en la base de datos
    iii) Obtiene la id del usuario logueado y busca si registro de visitas en la base de datos.
    iv) Dibuja la grafica de visitas del anio
    v) Dirigira hacia la plantilla que imprimira la visita

    Localizacion: src/UserBundle/Resources/views/Default/index.html.twig
  =====================================================================================
*/

public function registroVisitasUserAction(Request $request){
 $em = $this->getDoctrine()->getManager();
 $anioId= $request->query->get('idAnio');
 $userId= $request->query->get('userId');

 $user=$em->getRepository('UserBundle:User')->findBy( array('id' => $userId))[0];
 $registroVisitasUsuario=$em->getRepository('RegistroVisitasUsuarioBundle:RegistroVisitasUsuario')->findBy( array('usuario' => $userId ))[0];
  $anio=$em->getRepository('VisitasAnioBundle:VisitasAnio')->findById($anioId)[0];

  $ob = $this->getGraficaPorAnio($anio);


    return $this->render('UserBundle:Default:registroVisitasUser.html.twig', array(
      'chart' => $ob, 'anios' => $registroVisitasUsuario->getVisitasAnio(), 'user'  => $user
      ));
}

/*
  =====================================================================================

  Metodo que devuelve el registro de ofertas resueltas o no de la base datos


  Pasos del metodo:
    i) Obtiene el registro de ofertas y demandas resueltas de la base de datos
    ii) Dibujara la grafica
    iii) Dirigira hacia la plantilla que imprimira la grafica

    Localizacion: src/UserBundle/Resources/views/Default/registroOfertasDemandas.html.twig
  =====================================================================================
*/

public function registroOfertasDemandasAction(Request $request){
 $em = $this->getDoctrine()->getManager();
 $user = $this->container->get('security.context')->getToken()->getUser();

 $registroOfertasDemandas=$em->getRepository('RegistroOfertasDemandasBundle:RegistroOfertasDemandas')->findAll()[0];

 $seriesOfertas = array(
     array("name" => "Registro Ofertas",    "data" => array($registroOfertasDemandas->getOfertasResueltas(),
     $registroOfertasDemandas->getOfertasNoResueltas()))
 );

 $seriesDemandas = array(
     array("name" => "Registro Demandas",    "data" => array($registroOfertasDemandas->getDemandasResueltas(),
     $registroOfertasDemandas->getDemandasNoResueltas()))
 );

 $obOfertas = new Highchart();
 $obOfertas->chart->renderTo('lineOfertas');  // The #id of the div where to render the chart
 $obOfertas->title->text('Ofertas');
 $obOfertas->xAxis->title(array('text'  => "Ofertas Resueltas/No Resueltas"));
 $obOfertas->yAxis->title(array('text'  => "Número"));
 $obOfertas->xAxis->categories(array("Ofertas Resueltas", "Ofertas No Resueltas"));
 $obOfertas->chart->type('column');
 $obOfertas->yAxis->tickInterval(1);
 $obOfertas->xAxis->tickInterval(1);
 $obOfertas->series($seriesOfertas);

 $obDemandas = new Highchart();
 $obDemandas->chart->renderTo('lineDemandas');  // The #id of the div where to render the chart
 $obDemandas->title->text('Demandas');
 $obDemandas->xAxis->title(array('text'  => "Demandas Resueltas/No Resueltas"));
 $obDemandas->yAxis->title(array('text'  => "Número"));
 $obDemandas->xAxis->categories(array("Demandas Resueltas", "Demandas No Resueltas"));
 $obDemandas->chart->type('column');
 $obDemandas->yAxis->tickInterval(1);
 $obDemandas->xAxis->tickInterval(1);
 $obDemandas->series($seriesDemandas);

 return $this->render('UserBundle:Default:registroOfertasDemandas.html.twig', array(
     'chartOfertas' => $obOfertas, 'chartDemandas' => $obDemandas, 'user' => $user
 ));


}

/*
  =====================================================================================

  metodo que devuelve la pagina inicial de la aplicación "indexUser"


  Pasos del metodo:
    i) Obtiene la session.
    ii) Comprueba si el usuario se ha logueado antes para sumarle la visita.
    iii) Obtiene la id del usuario logueado y busca si registro de visitas en la base de datos.
    iv) Dibuja la grafica de visitas del ultimo anio.
    v) Dirigira hacia la plantilla que imprimira el perfil del usuario.

    Localizacion: src/UserBundle/Resources/views/Default/index.html.twig
  =====================================================================================
*/

public function indexUserAction(Request $request){
 $em = $this->getDoctrine()->getManager();
 $session = $request->getSession();

  if($session->get('logged')==null){
    $session->set('logged', "si");
    //for($i=0;$i<740; $i=$i+1){
      $this->sumarVisitasUsuario(0);
    //}
  }

  $user = $this->container->get('security.context')->getToken()->getUser();
  $visitas=array();

  $user = $this->container->get('security.context')->getToken()->getUser();

  $registroVisitasUsuario=$em->getRepository('RegistroVisitasUsuarioBundle:RegistroVisitasUsuario')->findBy( array('usuario' => $user->getId()));




  $topeAnio=count($registroVisitasUsuario[0]->getVisitasAnio())-1;
  $anio=$registroVisitasUsuario[0]->getVisitasAnio()[$topeAnio];


  $ob = $this->getGraficaPorAnio($anio);

    return $this->render('index.html.twig', array(
      'chart' => $ob, 'anios' => $registroVisitasUsuario[0]->getVisitasAnio()
      ));
}

/*
  =====================================================================================

  Metodo obtener la grafica de visitas por anio

  Devolvera la grafica de visitas correspondientes al anio.

  Pasos del metodo:
    i) Recorrera cada uno de los meses del anio.
     i.i) Si el primer mes del anio no es enero(mes=1)
      i.i.i) Dibujara los meses anteriores indicando que tienen 0 visitas.

     i.ii) Recorrera cada uno de los dias del mes.
      i.ii.i) Comprueba si el primer dia del mes es mayor que 1( el usuario no habrá visitado los dias anteriores del mes)
        i.ii.i.i) Si es asi, dibujara los demas dias indicando que tiene 0 visitas.
      i.ii.ii) Dibuja el dia correspondiente al mes de la iteracion.
      i.ii.iii) Comprueba si el siguiente dia a dibujar es mayor a uno( el usuario no habrá visitado en varios dias)
        i.ii.iii.i) Si es asi, dibujara los demas dias indicando que tiene 0 visitas hasta el siguiente dia de la iteracion
      i.ii.iv) Comprueba si el ultimo dia a dibujar no es ultimo del mes correspondiente
        i.ii.iii.i) Si es asi, dibujara los demas dias indicando que tiene 0 visitas hasta el final del mes

     i.iii) Comprueba si el siguiente mes a dibujar es mayor a uno( el usuario no habrá visitado en varios meses)
      i.iii.i) Si es asi, dibujara los demas mes indicando que tiene 0 visitas hasta el siguiente mes de la iteracion

     i.iv) Comprueba si el ultimo mes a dibujar no es ultimo del anio correspondiente
      i.iv.i) Si es asi, dibujara los demas meses indicando que tiene 0 visitas hasta el final del anio


    ix) Devuelve la grafica de las ofertas por Anio

  =====================================================================================
*/

public function getGraficaPorAnio($anio){
  $topeMeses=count($anio->getVisitasMes());
  $topeMes=0;
  $ob = new Highchart();


  $ob->chart->renderTo('linechart');
  $ob->chart->type('column');
  $ob->title->text('Visitas Oferta. Año:'.' '.$anio->getAnio());

  $ob->plotOptions->series(
        array(
            'dataLabels' => array(
                'enabled' => true,
                'format' => '<p><small>{point.name}: {point.y:.0f}<br></small></p>',
                'style'     => array('color' => '#AA4643', 'font-size' => '0px')
            )
        )
    );



  $ob->tooltip->headerFormat('<span style="color:{point.color} style="font-size:12px>{point.name}</span>');
  $ob->tooltip->footerFormat('<span style="font-size:12px>{point.name}</span>');
  $ob->tooltip->pointFormat('<span style="color:{point.color}; font-size: 10px;">{point.name}</span>: <b>{point.y:.0f}</b> visitas<br/>');
  $ob->yAxis->tickInterval(5);
  $ob->xAxis->tickInterval(1);
  $ob->xAxis->setMax(5);
  $ob->yAxis->title(array('text'  => "Visitas"));
  $ob->chart->zoomType('x');

  for($i=0; $i<$topeMeses; $i=$i+1){
    $mes=$anio->getVisitasMes()[$i];

    if($i==0){

      if($mes->getMes()>1){
        for($k=1; $k<$mes->getMes();$k=$k+1){
          $visitasMes[]=array(
                    'name' => $k."/".$anio->getAnio(),
                    'y' => 0,
                    'drilldown' =>  $k."/".($mes->getMes()+$k),
          );
        }
      }
    }

    $aux=array(
              'name' => $mes->getMes()."/".$anio->getAnio(),
              'y' => $mes->getVisitas(),
              'drilldown' =>  $anio->getAnio()."/".$mes->getMes(),
    );
    for($j=0; $j<count($mes->getVisitasDia()); $j=$j+1){
      $dia=$mes->getVisitasDia()[$j];
      if($j==0){
        if($dia->getDia()>1){
          for($k=1; $k<$dia->getDia();$k=$k+1){
            $visitasDia[]=array($k."/".$mes->getMes(),0);
          }
        }
      }


      $visitasDia[]=array($dia->getDia()
                            ."/".$mes->getMes(),
                            $dia->getVisitas());

      if($j<(count($mes->getVisitasDia())-1)){
        $diaSiguiente = $mes->getVisitasDia()[$j+1];
        if($diaSiguiente->getDia()>($dia->getDia()+1)){
          $intervalo=$diaSiguiente->getDia()-$dia->getDia();
          for($k=1; $k<$intervalo;$k=$k+1){
            $visitasDia[]=array(($dia->getDia()+$k)
                                  ."/".$mes->getMes(),
                                  0);
          }
        }
      }

      if($j==(count($mes->getVisitasDia())-1)){

        if($mes->getMes()<8){
          if($mes->getMes()%2==0){
            $topeMes=30;
          }
          else{
            $topeMes=31;
          }
        }
        else{
          if($mes->getMes()%2==0){
            $topeMes=31;
          }
          else{
            $topeMes=30;
          }
        }

        if($mes->getMes()==2){
          if($anio->getAnio()%4==0 && $anio->getAnio()%100!=0 && $anio->getAnio()%400==0 ){
            $topeMes=29;
          }
          else{
            $topeMes=28;
          }
        }

        if($dia->getDia()<$topeMes){
          $intervalo=$topeMes-$dia->getDia();
          for($k=1; $k<$intervalo+1;$k=$k+1){
            $visitasDia[]=array(($dia->getDia()+$k)
                                  ."/".$mes->getMes(),
                                  0);
          }

        }

      }


    }

    $visitasDiaMes[]=array(
                    'name' => "Visitas por dia. Mes: ".$mes->getMes()."/".$anio->getAnio(),
                    'id' => $anio->getAnio()."/".$mes->getMes(),
                    'data' => $visitasDia
    );

    $visitasMes[]=$aux;

    if($i<($topeMeses-1)) {
      if(($mes->getMes()+1)<$anio->getVisitasMes()[$i+1]->getMes()){
        $intervalo=$anio->getVisitasMes()[$i+1]->getMes()-$mes->getMes();
        for($k=1; $k<$intervalo+1;$k=$k+1){
          $visitasMes[]=array(
                    'name' => ($mes->getMes()+$k)."/".$anio->getAnio(),
                    'y' => 0,
                    'drilldown' =>  $anio->getAnio()."/".($mes->getMes()+$k),
          );
        }
      }
    }

    if($i==($topeMeses-1)){

      if($mes->getMes()<12){
        $intervalo=12-$mes->getMes();
        for($k=1; $k<$intervalo+1;$k=$k+1){
          $visitasMes[]=array(
                    'name' => ($mes->getMes()+$k)."/".$anio->getAnio(),
                    'y' => 0,
                    'drilldown' =>  $anio->getAnio()."/".($mes->getMes()+$k),
          );
        }
      }
    }



    unset($visitasDia);
    }



    $ob->series(
        array(
            array(
                'name' => 'Visitas por meses'.". Año: ". $anio->getAnio(),
                'colorByPoint' => true,
                'data' => $visitasMes
            )
        )
    );

    $ob->drilldown->series($visitasDiaMes);
    $ob->xAxis->categories(array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31));
    $ob->drilldown->text('Visitas por dia');

    return $ob;
}

/*
  =====================================================================================

  Metodo sumar visitas a oferta "sumarVisitasOferta":

  Buscará la fecha de la visita en la base de datos, en caso de encontrarla la sumará, en caso contrario creará una nueva.

  Pasos del metodo:
    i) Comprueba si la oferta tiene creada ya un registro de visitas.
      i.i) En caso negativo, creará un nuevo registro con la fecha y visita correspondiente.

    ii) En caso afirmativo:
      ii.i) Comprueba si existe la fecha con el anio en el registro de visitas.
        ii.i.i) Si existe el anio, comprueba si existe el mes.
          ii.i.i.i) Si existe el mes, comprueba el dia.
            ii.i.i.i.i) Si existe el día, sumará la visita a la fecha.
            ii.i.i.i.ii) Si no existe el dia, creará la nueva fecha con el día sumandole la visita correspondiente.
          ii.i.i.ii) Si no existe el mes, creará el mes y el dia correspondiente, y sumará la visita a la fecha.
        ii.i.ii) Si no existe el anio, creará la nueva fecha con el anio, mes y dia correspondiente y le sumará la visita a la oferta.

  =====================================================================================
*/


public function sumarVisitasUsuario($i){
  $em = $this->getDoctrine()->getManager();
  $date = new \DateTime('today+740day');
  $anio=$date->format('Y');
  $user = $this->container->get('security.context')->getToken()->getUser();

  $registroVisitasUsuario=$em->getRepository('RegistroVisitasUsuarioBundle:RegistroVisitasUsuario')->findBy( array('usuario' => $user->getId()));
    if($registroVisitasUsuario==null){
      $registroVisitasUsuario = new RegistroVisitasUsuario();
      $registroVisitasUsuario->setUsuario($user);

      $visitasDia = new VisitasDia();
      $visitasDia->setDia($date->format('d'));
      $visitasDia->setVisitas(1);
      $visitasMes = new VisitasMes();
      $visitasMes->setMes($date->format('m'));
      $visitasMes->setVisitas(1);
      $visitasMes->addVisitasDium($visitasDia);
      $visitasAnio = new VisitasAnio();
      $visitasAnio->setAnio($date->format('Y'));
      $visitasAnio->setVisitas(1);
      $visitasAnio->addVisitasMe($visitasMes);

      $visitasDia->setVisitasMes($visitasMes);
      $visitasMes->setVisitasAnio($visitasAnio);
      $registroVisitasUsuario->addVisitasDium($visitasDia);
      $registroVisitasUsuario->addVisitasMe($visitasMes);
      $registroVisitasUsuario->addVisitasAnio($visitasAnio);

      $em->persist($visitasDia);
      $em->persist($visitasMes);
      $em->persist($visitasAnio);
      $em->persist($registroVisitasUsuario);
      $em->flush();
    }
    else {

      $visitasAnio=null;

      for($i=0; $i<count($registroVisitasUsuario[0]->getVisitasAnio()); $i=$i+1){
        if($registroVisitasUsuario[0]->getVisitasAnio()[$i]->getAnio()==$date->format('Y')){
          $visitasAnio = $registroVisitasUsuario[0]->getVisitasAnio()[$i];
        }
      }

      if($visitasAnio!=null){
        $visitasMes=$em->getRepository('VisitasMesBundle:VisitasMes')->findBy( array('visitasAnio' => $visitasAnio->getId(),'mes' => $date->format('m') ));
        if($visitasMes!=null){
          $visitasDia=$em->getRepository('VisitasDiaBundle:VisitasDia')->findBy( array('visitasMes' => $visitasMes[0]->getId(),'dia' => $date->format('d') ));
          if($visitasDia!=null){
            $visitasDia[0]->setVisitas($visitasDia[0]->getVisitas()+1);
            $visitasMes[0]->setVisitas($visitasMes[0]->getVisitas()+1);
            $visitasAnio->setVisitas($visitasAnio->getVisitas()+1);
          }
          else{
            $visitasDia = new VisitasDia();
            $visitasDia->setDia($date->format('d'));
            $visitasDia->setVisitas(1);
            $em->persist($visitasDia);
            $em->flush();
            $visitasDia->setVisitasMes($visitasMes[0]);
            $visitasMes[0]->addVisitasDium($visitasDia);
            $visitasMes[0]->setVisitas($visitasMes[0]->getVisitas()+1);
            $visitasAnio->setVisitas($visitasAnio->getVisitas()+1);   ;

            $registroVisitasUsuario[0]->addVisitasDium($visitasDia);
          }
        }
        else{
          $visitasDia = new VisitasDia();
          $visitasDia->setDia($date->format('d'));
          $visitasDia->setVisitas(1);
          $visitasMes = new VisitasMes();
          $visitasMes->setMes($date->format('m'));
          $visitasMes->setVisitas(1);
          $visitasMes->setVisitasAnio($visitasAnio);
          $visitasDia->setVisitasMes($visitasMes);
          $visitasMes->addVisitasDium($visitasDia);
          $visitasAnio->setVisitas($visitasAnio->getVisitas()+1);
          $visitasAnio->addVisitasMe($visitasMes);
          $em->persist($visitasDia);
          $em->persist($visitasMes);
          $em->flush();
          $registroVisitasUsuario[0]->addVisitasDium($visitasDia);
          $registroVisitasUsuario[0]->addVisitasMe($visitasMes);
        }
      }
      else{
        $visitasDia = new VisitasDia();
        $visitasDia->setDia($date->format('d'));
        $visitasDia->setVisitas(1);
        $visitasMes = new VisitasMes();
        $visitasMes->setMes($date->format('m'));
        $visitasMes->setVisitas(1);
        $visitasMes->addVisitasDium($visitasDia);
        $visitasAnio = new VisitasAnio();
        $visitasAnio->setAnio($date->format('Y'));
        $visitasAnio->setVisitas(1);
        $visitasAnio->addVisitasMe($visitasMes);

        $visitasDia->setVisitasMes($visitasMes);
        $visitasMes->setVisitasAnio($visitasAnio);
        $registroVisitasUsuario[0]->addVisitasDium($visitasDia);
        $registroVisitasUsuario[0]->addVisitasMe($visitasMes);
        $registroVisitasUsuario[0]->addVisitasAnio($visitasAnio);

        $em->persist($visitasDia);
        $em->persist($visitasMes);
        $em->persist($visitasAnio);
        $em->persist($registroVisitasUsuario[0]);
        $em->flush();
      }
    }
    $em->flush();

  }


}
