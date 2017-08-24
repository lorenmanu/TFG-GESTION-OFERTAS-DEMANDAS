<?php

/* @Oferta/Default/tests/OfertaBundle/Controller/DefaultControllerTest.php */
class __TwigTemplate_aea2e974c5d10350b7317b44985213c6b8f03f01caeb3e865b35208abecc03b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<?php

namespace OfertaBundle\\Tests\\Controller;

use Symfony\\Bundle\\FrameworkBundle\\Test\\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        \$client = static::createClient();

        \$crawler = \$client->request('GET', '/');

        \$this->assertContains('Hello World', \$client->getResponse()->getContent());
    }
}
";
    }

    public function getTemplateName()
    {
        return "@Oferta/Default/tests/OfertaBundle/Controller/DefaultControllerTest.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Oferta/Default/tests/OfertaBundle/Controller/DefaultControllerTest.php", "/home/ubuntu/Escritorio/todo/TFG-LRR2/src/OfertaBundle/Resources/views/Default/tests/OfertaBundle/Controller/DefaultControllerTest.php");
    }
}
