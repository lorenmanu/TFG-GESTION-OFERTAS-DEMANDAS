<?php

/* UserBundle:Default:editUsers.html.twig */
class __TwigTemplate_c9b8c25c922682b0262cdf5a3e169bac5d5057818462d95c56efc692249ab569 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UserBundle:Default:editUsers.html.twig", 1);
        $this->blocks = array(
            'cuerpo' => array($this, 'block_cuerpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"count\">
        <span class=\"label label-primary\">
            Numero de Usuarios: ";
        // line 5
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["pagination"] ?? null), "getTotalItemCount", array()) - 1), "html", null, true);
        echo "
        </span>
    </div>
    <br/>
    <div class=\"row\">
    \t<div class=\"col-md-12\">
    \t\t<table class=\"table table-bordered\">
        \t\t<tr>
            \t\t";
        // line 14
        echo "            \t\t<th";
        if ($this->getAttribute(($context["pagination"] ?? null), "isSorted", array(0 => "e.username"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">
                \t\t";
        // line 15
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["pagination"] ?? null), "Usuario", "e.username");
        echo "
            \t\t</th>
        \t\t</tr>

        \t";
        // line 20
        echo "        \t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 21
            echo "        \t\t\t";
            if ((twig_first($this->env, $this->getAttribute($context["entry"], "roles", array())) != "ROLE_SUPER_ADMIN")) {
                // line 22
                echo "            \t\t\t<tr ";
                if (($this->getAttribute($context["loop"], "index", array()) % 2 == 1)) {
                    echo "class=\"color\"";
                }
                echo ">
                \t\t\t<td>
                \t\t\t\t<p class=\"infoUser\"> ";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "username", array()), "html", null, true);
                echo " </p>
                \t\t\t</td>
                \t\t\t<td>
                \t\t\t\t<a href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteUser", array("nameUser" => $this->getAttribute($context["entry"], "username", array()))), "html", null, true);
                echo "\"><button type=\"button\" class=\"btn btnOptions btn-primary btn-modal\">Eliminar ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "username", array()), "html", null, true);
                echo " </button> </a>
                \t\t\t\t<a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("perfilUser", array("userId" => $this->getAttribute($context["entry"], "id", array()))), "html", null, true);
                echo "\"><button type=\"button\" class=\"btn btnOptions btn-primary btn-modal\"> Ver ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "username", array()), "html", null, true);
                echo " </button> </a>

\t\t\t\t\t\t\t</td>
            \t\t\t</tr>


            \t\t";
            }
            // line 35
            echo "        \t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    \t\t</table>
    \t</div>
    </div>
    ";
        // line 40
        echo "    <div class=\"navigation\">
        ";
        // line 41
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["pagination"] ?? null));
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "UserBundle:Default:editUsers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 41,  132 => 40,  127 => 36,  113 => 35,  101 => 28,  95 => 27,  89 => 24,  81 => 22,  78 => 21,  60 => 20,  53 => 15,  46 => 14,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "UserBundle:Default:editUsers.html.twig", "/home/ubuntu/Escritorio/todo/TFG-LRR2/src/UserBundle/Resources/views/Default/editUsers.html.twig");
    }
}
