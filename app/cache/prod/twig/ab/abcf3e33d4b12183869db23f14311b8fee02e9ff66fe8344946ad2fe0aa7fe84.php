<?php

/* public/ejemplo.cnt */
class __TwigTemplate_a1981856556c492d0c60a6ad8087bfeed9127d49ca346d965b9e1dad4a5a948f extends Twig_Template
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
        echo "<div>
\tEjemplo Contenido

</div>
";
    }

    public function getTemplateName()
    {
        return "public/ejemplo.cnt";
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
        return new Twig_Source("", "public/ejemplo.cnt", "/home/ubuntu/Escritorio/todo/TFG-LRR2/app/Resources/views/public/ejemplo.cnt");
    }
}
