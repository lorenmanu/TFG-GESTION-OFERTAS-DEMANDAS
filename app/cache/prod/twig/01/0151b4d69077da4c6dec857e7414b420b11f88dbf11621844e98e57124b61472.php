<?php

/* base.html.twig */
class __TwigTemplate_954447785f6a8cbbb354edaf78ac0829ce12139518fe8679cca76a5fa30e2e11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'menuLateral' => array($this, 'block_menuLateral'),
            'cuerpo' => array($this, 'block_cuerpo'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_31985f332b330c4824e19d5d7ed225496e22be71ac470527a6fa1ab694ebd9b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31985f332b330c4824e19d5d7ed225496e22be71ac470527a6fa1ab694ebd9b2->enter($__internal_31985f332b330c4824e19d5d7ed225496e22be71ac470527a6fa1ab694ebd9b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
  <title>Ofertas y Demandas Departamento Investigación</title>


  <script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>
  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
  <script src=\"https://ajax.googleapis.com/ajax/libs/mootools/1.4.2/mootools-yui-compressed.js\" type=\"text/javascript\"></script>



  <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
  <link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/SidebarNav.min.css"), "html", null, true);
        echo "\" media=\"all\" />
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" media=\"all\" />

  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>

  <!-- Latest compiled and minified CSS -->
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css\">

  <!-- Latest compiled and minified JavaScript -->
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js\"></script>

  <!-- (Optional) Latest compiled and minified JavaScript translation files -->
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/i18n/defaults-*.min.js\"></script>


</head>
<body>
  <div id=\"cabecera\">
    <img id=\"imgID\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/general/cabecera-departamento.png"), "html", null, true);
        echo "\" alt=\"\" />
  </div>
  <div id=\"cuerpoPrincipal\" class='wrapper'>
    ";
        // line 38
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 39
            echo "    <aside class=\"sidebar-left navbar navbar-inverse\">
      <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\".collapse\" aria-expanded=\"false\">
          <span class=\"sr-only\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"";
            // line 47
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\">Inicio</a>
      </div>
      <nav class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
        <ul class=\"sidebar-menu\">
          <li class=\"treeview\">
            <a href=\"#\">
              <i class=\"fa fa-pie-chart\"></i> <span>Secciones</span> <i class=\"fa fa-angle-left pull-right\"></i>
            </a>
            <ul class=\"treeview-menu\">
              <li><a href=\"";
            // line 56
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mostrarOfertas", array("limpiarCriteriosBusquedas" => "si"));
            echo "\"><i class=\"fa fa-square\" aria-hidden=\"true\"></i> Ofertas </a></li>
              <li><a href=\"";
            // line 57
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mostrarDemandas", array("limpiarCriteriosBusquedas" => "si"));
            echo "\"><i class=\"fa fa-square\" aria-hidden=\"true\"></i> Demandas </a></li>
                <li><a href=\"";
            // line 58
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registroOfertasDemandas");
            echo "\"><i class=\"fa fa-line-chart\" aria-hidden=\"true\"></i>Registro Ofertas/Demandas Resueltas </a></li>
            </ul>
          </li>
          ";
            // line 61
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 62
                echo "            <li class=\"treeview\">
              <a href=\"#\">
                <i class=\"fa fa-cogs\" aria-hidden=\"true\"></i> <span>Administración</span> <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"";
                // line 67
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editUsers");
                echo "\"><i class=\"fa fa-user-o\" aria-hidden=\"true\"></i> Gestionar Usuarios </a></li>
                <li><a href=\"";
                // line 68
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editarMenu");
                echo "\"><i class=\"fa fa-bars\" aria-hidden=\"true\"></i> Editar Menú </a></li>
              </ul>
            </li>
          ";
            }
            // line 72
            echo "          <li class=\"treeview\">
            <a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\LogoutUrlExtension')->getLogoutPath("main"), "html", null, true);
            echo "\">
              <span>Logout</span>
            </a>
          </li>

          ";
            // line 78
            $this->displayBlock('menuLateral', $context, $blocks);
            // line 80
            echo "        </ul>
      </nav>
      <!-- /.navbar-collapse -->
    </aside>
    ";
        }
        // line 85
        echo "
    <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/SidebarNav.min.js"), "html", null, true);
        echo "\" type='text/javascript'></script>
    <script>
      \$('.sidebar-menu').SidebarNav()
    </script>

    <div class='content container-fluid'>

      ";
        // line 93
        $this->displayBlock('cuerpo', $context, $blocks);
        // line 95
        echo "    </div>

  </div>
</body>
</html>
";
        
        $__internal_31985f332b330c4824e19d5d7ed225496e22be71ac470527a6fa1ab694ebd9b2->leave($__internal_31985f332b330c4824e19d5d7ed225496e22be71ac470527a6fa1ab694ebd9b2_prof);

    }

    // line 78
    public function block_menuLateral($context, array $blocks = array())
    {
        $__internal_f1cd692e264877a3dc833971361ee094acb3983b02850f0e57d79dc8962c05fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1cd692e264877a3dc833971361ee094acb3983b02850f0e57d79dc8962c05fb->enter($__internal_f1cd692e264877a3dc833971361ee094acb3983b02850f0e57d79dc8962c05fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuLateral"));

        // line 79
        echo "          ";
        
        $__internal_f1cd692e264877a3dc833971361ee094acb3983b02850f0e57d79dc8962c05fb->leave($__internal_f1cd692e264877a3dc833971361ee094acb3983b02850f0e57d79dc8962c05fb_prof);

    }

    // line 93
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_0ec9ac8665c86a6cc64e0ce00f013ee0ca221ec76a1bb50bca8058de6b153037 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ec9ac8665c86a6cc64e0ce00f013ee0ca221ec76a1bb50bca8058de6b153037->enter($__internal_0ec9ac8665c86a6cc64e0ce00f013ee0ca221ec76a1bb50bca8058de6b153037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 94
        echo "      ";
        
        $__internal_0ec9ac8665c86a6cc64e0ce00f013ee0ca221ec76a1bb50bca8058de6b153037->leave($__internal_0ec9ac8665c86a6cc64e0ce00f013ee0ca221ec76a1bb50bca8058de6b153037_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 94,  190 => 93,  183 => 79,  177 => 78,  165 => 95,  163 => 93,  153 => 86,  150 => 85,  143 => 80,  141 => 78,  133 => 73,  130 => 72,  123 => 68,  119 => 67,  112 => 62,  110 => 61,  104 => 58,  100 => 57,  96 => 56,  84 => 47,  74 => 39,  72 => 38,  66 => 35,  46 => 18,  42 => 17,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"es\">
<head>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
  <title>Ofertas y Demandas Departamento Investigación</title>


  <script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>
  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
  <script src=\"https://ajax.googleapis.com/ajax/libs/mootools/1.4.2/mootools-yui-compressed.js\" type=\"text/javascript\"></script>



  <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
  <link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/SidebarNav.min.css') }}\" media=\"all\" />
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/style.css') }}\" media=\"all\" />

  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>

  <!-- Latest compiled and minified CSS -->
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css\">

  <!-- Latest compiled and minified JavaScript -->
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js\"></script>

  <!-- (Optional) Latest compiled and minified JavaScript translation files -->
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/i18n/defaults-*.min.js\"></script>


</head>
<body>
  <div id=\"cabecera\">
    <img id=\"imgID\" src=\"{{ asset('img/general/cabecera-departamento.png') }}\" alt=\"\" />
  </div>
  <div id=\"cuerpoPrincipal\" class='wrapper'>
    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
    <aside class=\"sidebar-left navbar navbar-inverse\">
      <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\".collapse\" aria-expanded=\"false\">
          <span class=\"sr-only\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"{{ path('homepage') }}\">Inicio</a>
      </div>
      <nav class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
        <ul class=\"sidebar-menu\">
          <li class=\"treeview\">
            <a href=\"#\">
              <i class=\"fa fa-pie-chart\"></i> <span>Secciones</span> <i class=\"fa fa-angle-left pull-right\"></i>
            </a>
            <ul class=\"treeview-menu\">
              <li><a href=\"{{ path('mostrarOfertas', {'limpiarCriteriosBusquedas': \"si\"}) }}\"><i class=\"fa fa-square\" aria-hidden=\"true\"></i> Ofertas </a></li>
              <li><a href=\"{{ path('mostrarDemandas', {'limpiarCriteriosBusquedas': \"si\"}) }}\"><i class=\"fa fa-square\" aria-hidden=\"true\"></i> Demandas </a></li>
                <li><a href=\"{{ path('registroOfertasDemandas') }}\"><i class=\"fa fa-line-chart\" aria-hidden=\"true\"></i>Registro Ofertas/Demandas Resueltas </a></li>
            </ul>
          </li>
          {% if is_granted('ROLE_ADMIN') %}
            <li class=\"treeview\">
              <a href=\"#\">
                <i class=\"fa fa-cogs\" aria-hidden=\"true\"></i> <span>Administración</span> <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"{{ path('editUsers') }}\"><i class=\"fa fa-user-o\" aria-hidden=\"true\"></i> Gestionar Usuarios </a></li>
                <li><a href=\"{{ path('editarMenu') }}\"><i class=\"fa fa-bars\" aria-hidden=\"true\"></i> Editar Menú </a></li>
              </ul>
            </li>
          {% endif %}
          <li class=\"treeview\">
            <a href=\"{{ logout_path('main') }}\">
              <span>Logout</span>
            </a>
          </li>

          {% block menuLateral %}
          {% endblock %}
        </ul>
      </nav>
      <!-- /.navbar-collapse -->
    </aside>
    {% endif %}

    <script src=\"{{ asset('js/SidebarNav.min.js') }}\" type='text/javascript'></script>
    <script>
      \$('.sidebar-menu').SidebarNav()
    </script>

    <div class='content container-fluid'>

      {% block cuerpo %}
      {% endblock %}
    </div>

  </div>
</body>
</html>
", "base.html.twig", "/home/ubuntu/Escritorio/todo/TFG-LRR2/app/Resources/views/base.html.twig");
    }
}
