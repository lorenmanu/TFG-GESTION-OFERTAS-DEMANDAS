<?php

/* DemandaBundle:Default:menu.html.twig */
class __TwigTemplate_4b57abaf6413de3c9e3221f08e4d87de1b26465a3e0cf3140ab9f1fcf258b1bc extends Twig_Template
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
        echo "    <li class=\"treeview\">
      <a href=\"#\">
        <i class=\"fa fa-share\"></i> <span>¿ Dónde buscar ?</span>
        <i class=\"fa fa-angle-left pull-right\"></i>
      </a>
      <ul class=\"treeview-menu\">
        <li class=\"treeview\">
          <a href=\"#\">
            <i class=\"fa fa-list\" aria-hidden=\"true\"></i><span>Categorías</span><i class=\"fa fa-angle-left pull-right\"></i>
          </a>
          ";
        // line 11
        if ((array_key_exists("areas", $context) && array_key_exists("tipos", $context))) {
            // line 12
            echo "            <ul class=\"treeview-menu\">
              ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["areas"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["area"]) {
                // line 14
                echo "                <li id=\"liArea\">
                  <i class=\"fa fa-circle-o\" id=\"circleArea\"></i>
                  <a id=\"enlace\" href=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mostrarDemandas", array("area_id" => $this->getAttribute($context["area"], "id", array()))), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["area"], "getNombre", array(), "method"), "html", null, true);
                echo "</a>
                  <a id=\"mostrarOpciones\"><i id=\"flecha\" class=\"fa fa-angle-left pull-right\"> </i></a>
                  <ul class=\"treeview-menu\">
                    ";
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["area"], "getRamas", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["rama"]) {
                    // line 20
                    echo "                      <li id=\"liArea\">
                        <i class=\"fa fa-circle-o\" id=\"circleArea\"></i>
                        <a id=\"enlace\" href=\"";
                    // line 22
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mostrarDemandas", array("area_id" => $this->getAttribute($context["area"], "id", array()), "rama_id" => $this->getAttribute($context["rama"], "id", array()))), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["rama"], "getNombre", array(), "method"), "html", null, true);
                    echo "</a>
                        <a id=\"mostrarOpciones\"><i id=\"flecha\" class=\"fa fa-angle-left pull-right\"> </i></a>
                        <ul class=\"treeview-menu\">
                          ";
                    // line 25
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["rama"], "getDisciplinas", array(), "method"));
                    foreach ($context['_seq'] as $context["_key"] => $context["disciplina"]) {
                        // line 26
                        echo "                            <li id=\"liArea\">
                              <a href=\"";
                        // line 27
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mostrarDemandas", array("area_id" => $this->getAttribute($context["area"], "id", array()), "rama_id" => $this->getAttribute($context["rama"], "id", array()), "disciplina_id" => $this->getAttribute($context["disciplina"], "id", array()))), "html", null, true);
                        echo "\"><i class=\"fa fa-circle-o\"></i> ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["disciplina"], "getNombre", array(), "method"), "html", null, true);
                        echo " </a>
                            </li>
                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['disciplina'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 30
                    echo "                        </ul>
                      </li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rama'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "                  </ul>
                </li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['area'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "            </ul>
          ";
        }
        // line 38
        echo "          <li class=\"treeview\">
            <a href=\"#\">
              <i class=\"fa fa-hand-o-right\" aria-hidden=\"true\"></i><span>Tipo</span> <i class=\"fa fa-angle-left pull-right\"></i>
            </a>
            <ul class=\"treeview-menu\">
              ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tipos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tipo"]) {
            // line 44
            echo "                <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mostrarDemandas", array("tipo" => $this->getAttribute($context["tipo"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-arrow-right\" aria-hidden=\"true\"></i>
 ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipo"], "getNombre", array(), "method"), "html", null, true);
            echo " </a></li>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tipo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "            </ul>
          </li>
        </li>
      </ul>
    </li>
";
    }

    public function getTemplateName()
    {
        return "DemandaBundle:Default:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 47,  122 => 45,  117 => 44,  113 => 43,  106 => 38,  102 => 36,  94 => 33,  86 => 30,  75 => 27,  72 => 26,  68 => 25,  60 => 22,  56 => 20,  52 => 19,  44 => 16,  40 => 14,  36 => 13,  33 => 12,  31 => 11,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "DemandaBundle:Default:menu.html.twig", "/home/ubuntu/Escritorio/todo/TFG-LRR2/src/DemandaBundle/Resources/views/Default/menu.html.twig");
    }
}
