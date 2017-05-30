<?php

/* UserBundle:Default:index.html.twig */
class __TwigTemplate_839e7c7e76d46028c18c4fef35f570c216354e27a1742e7f0a23528d5fef333e extends Twig_Template
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
        $__internal_36076da2144270d7c288b4afa1adcd88cf50de20194ae3b74e08651e5f02ba87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36076da2144270d7c288b4afa1adcd88cf50de20194ae3b74e08651e5f02ba87->enter($__internal_36076da2144270d7c288b4afa1adcd88cf50de20194ae3b74e08651e5f02ba87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_36076da2144270d7c288b4afa1adcd88cf50de20194ae3b74e08651e5f02ba87->leave($__internal_36076da2144270d7c288b4afa1adcd88cf50de20194ae3b74e08651e5f02ba87_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "UserBundle:Default:index.html.twig", "/home/lorenmanu/Escritorio/TFG-V2-master/src/UserBundle/Resources/views/Default/index.html.twig");
    }
}
