<?php

/* :default:portada.html.twig */
class __TwigTemplate_4eb6b4ab8f1f929a673e58a62f20d9f1363c23468156ecdcbdcde9ff0782e938 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title>Portada | Cupon</title>
  </head>


  <body id=\"portada\"><div id=\"contenedor\">
    <header>
      <h1><a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("portada");
        echo "\">CUPON</a></h1>
        <nav>
          <ul>
            <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("portada");
        echo "\">Oferta del día</a></li>
              <li><a href=\"#\">Ofertas recientes</a></li>
              <li><a href=\"#\">Mis ofertas</a></li>
          </ul>
        </nav>
    </header>

    <section class=\"descripcion\">
      <h1><a href=\"#\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oferta"] ?? null), "nombre", array()), "html", null, true);
        echo "</a></h1>
      ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oferta"] ?? null), "descripcion", array()), "html", null, true);
        echo "
      <a class=\"boton\" href=\"#\">Comprar</a>
    </section>

    <section class=\"galeria\">
      <img alt=\"Fotografía de la oferta\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute(        // line 29
($context["oferta"] ?? null), "rutaFoto", array()))), "html", null, true);
        echo "\">
        <p class=\"precio\">";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oferta"] ?? null), "precio", array()), "html", null, true);
        echo " &euro; <span>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oferta"] ?? null), "descuento", array()), "html", null, true);
        // line 31
        echo "</span></p>
        <p><strong>Condiciones:</strong> ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oferta"] ?? null), "condiciones", array()), "html", null, true);
        echo "</p>
    </section>

    <section class=\"estado\">
      <div class=\"tiempo\">
        <strong>Faltan</strong>: ";
        // line 37
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["oferta"] ?? null), "fechaExpiracion", array())), "html", null, true);
        echo "
      </div>
      <div class=\"compras\">
        <strong>Compras</strong>: ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oferta"] ?? null), "compras", array()), "html", null, true);
        echo "
      </div>

      <div class=\"faltan\">
        ";
        // line 44
        $context["faltan"] = ($this->getAttribute(($context["oferta"] ?? null), "umbral", array()) - $this->getAttribute(($context["oferta"] ?? null), "compras", array()));
        // line 45
        echo "        ";
        if ((($context["faltan"] ?? null) > 0)) {
            // line 46
            echo "          Faltan <strong>";
            echo twig_escape_filter($this->env, ($context["faltan"] ?? null), "html", null, true);
            echo " compras</strong> <br/>
          para activar la oferta
        ";
        } else {
            // line 49
            echo "        <strong>Oferta activada</strong> por superar las
        <strong>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oferta"] ?? null), "umbral", array()), "html", null, true);
            echo "</strong> compras necesarias
        ";
        }
        // line 52
        echo "      </div>

      <section class=\"direccion\">
        <h2>Disfruta de la oferta en</h2>
        <p>
          <a href=\"#\">";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["oferta"] ?? null), "comentario", array()), "descripcion", array()), "html", null, true);
        echo "</a>
          ";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["oferta"] ?? null), "comentario", array()), "fecha", array()), "html", null, true);
        echo "
        </p>
      </section>
      <section class=\"tienda\">
        <h2>Sobre la tienda</h2>
        ";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["oferta"] ?? null), "tienda", array()), "descripcion", array()), "html", null, true);
        echo "
      </section>

    </section>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return ":default:portada.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 63,  124 => 58,  120 => 57,  113 => 52,  108 => 50,  105 => 49,  98 => 46,  95 => 45,  93 => 44,  86 => 40,  80 => 37,  72 => 32,  69 => 31,  65 => 30,  61 => 29,  60 => 28,  52 => 23,  48 => 22,  37 => 14,  31 => 11,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":default:portada.html.twig", "/home/ubuntu/Escritorio/todo/TFG-LRR2/app/Resources/views/default/portada.html.twig");
    }
}
