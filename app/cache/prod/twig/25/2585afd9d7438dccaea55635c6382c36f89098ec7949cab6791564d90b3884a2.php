<?php

/* DisciplinaBundle:Default:index.html.twig */
class __TwigTemplate_b1f74b1f4880d519ad015a18e98ee724a8896d04bd5829675a4062a282bfe1e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig.php", "DisciplinaBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'side' => array($this, 'block_side'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig.php";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_side($context, array $blocks = array())
    {
        // line 4
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["disciplinas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["disciplina"]) {
            // line 5
            echo "                  <p id=\"nombre\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["disciplina"], "getNombre", array(), "method"), "html", null, true);
            echo " </p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['disciplina'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "

";
    }

    public function getTemplateName()
    {
        return "DisciplinaBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  36 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "DisciplinaBundle:Default:index.html.twig", "/home/ubuntu/Escritorio/todo/TFG-LRR2/src/DisciplinaBundle/Resources/views/Default/index.html.twig");
    }
}
