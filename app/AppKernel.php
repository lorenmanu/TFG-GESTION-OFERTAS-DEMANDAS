<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new Knp\Bundle\MenuBundle\KnpMenuBundle(),

            // You need to add this dependency to make media functional
            new JMS\SerializerBundle\JMSSerializerBundle(),
            new OfertaBundle\OfertaBundle(),
            new DisciplinaBundle\DisciplinaBundle(),
            new AreaBundle\AreaBundle(),
            new RamaBundle\RamaBundle(),
            new ComentarioBundle\ComentarioBundle(),
            new FOS\ElasticaBundle\FOSElasticaBundle(),
            new Knp\Bundle\PaginatorBundle\KnpPaginatorBundle(),
            new FOS\UserBundle\FOSUserBundle(),
            new UserBundle\UserBundle(),
            new Ob\HighchartsBundle\ObHighchartsBundle(),
            new VisitasDiaBundle\VisitasDiaBundle(),
            new VisitasMesBundle\VisitasMesBundle(),
            new VisitasAnioBundle\VisitasAnioBundle(),
            new RegistroOfertasDemandasBundle\RegistroOfertasDemandasBundle(),
            new RegistroVisitasUsuarioBundle\RegistroVisitasUsuarioBundle(),
            new RegistroVisitasOfertaBundle\RegistroVisitasOfertaBundle(),
            new TipoBundle\TipoBundle(),
            new PalabrasClaveOfertaBundle\PalabrasClaveOfertaBundle(),
            new DemandaBundle\DemandaBundle(),
            new RegistroVisitasDemandaBundle\RegistroVisitasDemandaBundle(),
            new PalabrasClaveDemandaBundle\PalabrasClaveDemandaBundle(),
            new PruebaBundle\PruebaBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle()
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'), true)) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
            $bundles[] = new Remg\GeneratorBundle\RemgGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load($this->getRootDir().'/config/config_'.$this->getEnvironment().'.yml');
    }
}
