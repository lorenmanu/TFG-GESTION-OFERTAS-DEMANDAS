<?php

/* DemandaBundle:Default:menu.html.twig */
class __TwigTemplate_c49352952046750b4533a71f1a7166af0b47984d9c01602ccaae7ec0f8c30604 extends Twig_Template
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
        $__internal_8da505c6687bffd7d5b26fa3bfa0f9ba4b560084dba699df433bc1d4f3c64bf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8da505c6687bffd7d5b26fa3bfa0f9ba4b560084dba699df433bc1d4f3c64bf3->enter($__internal_8da505c6687bffd7d5b26fa3bfa0f9ba4b560084dba699df433bc1d4f3c64bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DemandaBundle:Default:menu.html.twig"));

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
            $context['_seq'] = twig_ensure_traversable(($context["areas"] ?? $this->getContext($context, "areas")));
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
        $context['_seq'] = twig_ensure_traversable(($context["tipos"] ?? $this->getContext($context, "tipos")));
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
        
        $__internal_8da505c6687bffd7d5b26fa3bfa0f9ba4b560084dba699df433bc1d4f3c64bf3->leave($__internal_8da505c6687bffd7d5b26fa3bfa0f9ba4b560084dba699df433bc1d4f3c64bf3_prof);

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
        return array (  133 => 47,  125 => 45,  120 => 44,  116 => 43,  109 => 38,  105 => 36,  97 => 33,  89 => 30,  78 => 27,  75 => 26,  71 => 25,  63 => 22,  59 => 20,  55 => 19,  47 => 16,  43 => 14,  39 => 13,  36 => 12,  34 => 11,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("    <li class=\"treeview\">
      <a href=\"#\">
        <i class=\"fa fa-share\"></i> <span>¿ Dónde buscar ?</span>
        <i class=\"fa fa-angle-left pull-right\"></i>
      </a>
      <ul class=\"treeview-menu\">
        <li class=\"treeview\">
          <a href=\"#\">
            <i class=\"fa fa-list\" aria-hidden=\"true\"></i><span>Categorías</span><i class=\"fa fa-angle-left pull-right\"></i>
          </a>
          {% if  areas is defined and tipos is defined %}
            <ul class=\"treeview-menu\">
              {% for area in areas %}
                <li id=\"liArea\">
                  <i class=\"fa fa-circle-o\" id=\"circleArea\"></i>
                  <a id=\"enlace\" href=\"{{ path('mostrarDemandas', {'area_id': area.id}) }}\"> {{ area.getNombre() }}</a>
                  <a id=\"mostrarOpciones\"><i id=\"flecha\" class=\"fa fa-angle-left pull-right\"> </i></a>
                  <ul class=\"treeview-menu\">
                    {% for rama in area.getRamas()  %}
                      <li id=\"liArea\">
                        <i class=\"fa fa-circle-o\" id=\"circleArea\"></i>
                        <a id=\"enlace\" href=\"{{ path('mostrarDemandas', { 'area_id': area.id ,'rama_id': rama.id}) }}\"> {{ rama.getNombre() }}</a>
                        <a id=\"mostrarOpciones\"><i id=\"flecha\" class=\"fa fa-angle-left pull-right\"> </i></a>
                        <ul class=\"treeview-menu\">
                          {% for disciplina in rama.getDisciplinas()  %}
                            <li id=\"liArea\">
                              <a href=\"{{ path('mostrarDemandas', {'area_id': area.id,'rama_id': rama.id, 'disciplina_id': disciplina.id}) }}\"><i class=\"fa fa-circle-o\"></i> {{ disciplina.getNombre() }} </a>
                            </li>
                          {% endfor %}
                        </ul>
                      </li>
                    {% endfor %}
                  </ul>
                </li>
              {% endfor %}
            </ul>
          {% endif %}
          <li class=\"treeview\">
            <a href=\"#\">
              <i class=\"fa fa-hand-o-right\" aria-hidden=\"true\"></i><span>Tipo</span> <i class=\"fa fa-angle-left pull-right\"></i>
            </a>
            <ul class=\"treeview-menu\">
              {% for tipo in tipos %}
                <li><a href=\"{{ path('mostrarDemandas', {'tipo': tipo.id}) }}\"><i class=\"fa fa-arrow-right\" aria-hidden=\"true\"></i>
 {{ tipo.getNombre() }} </a></li>
              {% endfor %}
            </ul>
          </li>
        </li>
      </ul>
    </li>
", "DemandaBundle:Default:menu.html.twig", "/home/ubuntu/Escritorio/todo/TFG-LRR2/src/DemandaBundle/Resources/views/Default/menu.html.twig");
    }
}
