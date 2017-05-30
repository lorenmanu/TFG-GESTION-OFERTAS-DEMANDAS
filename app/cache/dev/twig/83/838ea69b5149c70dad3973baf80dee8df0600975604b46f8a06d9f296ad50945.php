<?php

/* OfertaBundle:Default:menu2.html.twig */
class __TwigTemplate_cb933fa19003b62e290d72fadd02e75245dcbe3eff3748b4f2bc8ea76077ea74 extends Twig_Template
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
        $__internal_13530e70583b42a2f333ec67f3959eff5279c649e029b01f102e5e3e6bcdec8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13530e70583b42a2f333ec67f3959eff5279c649e029b01f102e5e3e6bcdec8a->enter($__internal_13530e70583b42a2f333ec67f3959eff5279c649e029b01f102e5e3e6bcdec8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OfertaBundle:Default:menu2.html.twig"));

        // line 1
        if (array_key_exists("areas", $context)) {
            // line 2
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["areas"]) ? $context["areas"] : $this->getContext($context, "areas")));
            foreach ($context['_seq'] as $context["_key"] => $context["area"]) {
                // line 3
                echo "\t\t<ul>
\t\t\t<li class=\"has-sub\"> <a href=\"";
                // line 4
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grafica_ofertas", array("area_id" => $this->getAttribute($context["area"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["area"], "getNombre", array(), "method"), "html", null, true);
                echo "</a><ul>
\t\t\t\t";
                // line 5
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["area"], "getRamas", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["rama"]) {
                    // line 6
                    echo "\t\t\t\t\t<li class=\"has-sub\"> 
\t\t\t\t\t\t<a href=\"";
                    // line 7
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grafica_ofertas", array("area_id" => $this->getAttribute($context["area"], "id", array()), "rama_id" => $this->getAttribute($context["rama"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["rama"], "getNombre", array(), "method"), "html", null, true);
                    echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
                    // line 10
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["rama"], "getDisciplinas", array(), "method"));
                    foreach ($context['_seq'] as $context["_key"] => $context["disciplina"]) {
                        // line 11
                        echo "\t\t\t\t\t\t\t\t<li class=\"has-sub\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 12
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grafica_ofertas", array("area_id" => $this->getAttribute($context["area"], "id", array()), "rama_id" => $this->getAttribute($context["rama"], "id", array()), "disciplina_id" => $this->getAttribute($context["disciplina"], "id", array()))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["disciplina"], "getNombre", array(), "method"), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t         </li>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['disciplina'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 16
                    echo "\t\t\t\t\t\t</ul>
\t\t\t\t    </li>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rama'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                echo "\t\t\t</ul>
\t\t\t</li>
\t\t</ul>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['area'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_13530e70583b42a2f333ec67f3959eff5279c649e029b01f102e5e3e6bcdec8a->leave($__internal_13530e70583b42a2f333ec67f3959eff5279c649e029b01f102e5e3e6bcdec8a_prof);

    }

    public function getTemplateName()
    {
        return "OfertaBundle:Default:menu2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 19,  72 => 16,  60 => 12,  57 => 11,  53 => 10,  45 => 7,  42 => 6,  38 => 5,  32 => 4,  29 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if areas is defined %}
\t{% for area in areas  %}
\t\t<ul>
\t\t\t<li class=\"has-sub\"> <a href=\"{{ path('grafica_ofertas', {'area_id': area.id}) }}\">{{ area.getNombre() }}</a><ul>
\t\t\t\t{% for rama in area.getRamas()  %}
\t\t\t\t\t<li class=\"has-sub\"> 
\t\t\t\t\t\t<a href=\"{{ path('grafica_ofertas', { 'area_id': area.id ,'rama_id': rama.id}) }}\">{{ rama.getNombre() }}
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t{% for disciplina in rama.getDisciplinas()  %}
\t\t\t\t\t\t\t\t<li class=\"has-sub\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('grafica_ofertas', {'area_id': area.id,'rama_id': rama.id, 'disciplina_id': disciplina.id}) }}\">{{ disciplina.getNombre() }}
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t         </li>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</ul>
\t\t\t\t    </li>
\t\t\t\t{% endfor %}
\t\t\t</ul>
\t\t\t</li>
\t\t</ul>
\t{% endfor %}
{% endif %}", "OfertaBundle:Default:menu2.html.twig", "/home/lorenmanu/Escritorio/TFG-V2-master/src/OfertaBundle/Resources/views/Default/menu2.html.twig");
    }
}
