<?php

/* PruebaBundle:Default:index.html.twig */
class __TwigTemplate_e6435d39eabca8fe618870a4c45d9618da4d186f4a8a3fbdbf2bb4d017666c0d extends Twig_Template
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
        echo "Hello World!
";
    }

    public function getTemplateName()
    {
        return "PruebaBundle:Default:index.html.twig";
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
        return new Twig_Source("", "PruebaBundle:Default:index.html.twig", "/home/ubuntu/Escritorio/todo/TFG-LRR2/src/PruebaBundle/Resources/views/Default/index.html.twig");
    }
}
