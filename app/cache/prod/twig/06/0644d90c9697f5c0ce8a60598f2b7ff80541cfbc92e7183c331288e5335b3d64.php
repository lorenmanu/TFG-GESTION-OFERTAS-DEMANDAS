<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_09d9158084d2cb0873ebf68ae9cfeb703aea241d45979763be11194053652983 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/layout.html.twig", 1);
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
        $__internal_0e133329ba059296647235e6e22cda1869a912e9e1287e2eb3254959048524b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e133329ba059296647235e6e22cda1869a912e9e1287e2eb3254959048524b4->enter($__internal_0e133329ba059296647235e6e22cda1869a912e9e1287e2eb3254959048524b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e133329ba059296647235e6e22cda1869a912e9e1287e2eb3254959048524b4->leave($__internal_0e133329ba059296647235e6e22cda1869a912e9e1287e2eb3254959048524b4_prof);

    }

    // line 2
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_fed21619972d37138a747a02bddff9197d10cae59686bdf7f356bc1cf0760a1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fed21619972d37138a747a02bddff9197d10cae59686bdf7f356bc1cf0760a1b->enter($__internal_fed21619972d37138a747a02bddff9197d10cae59686bdf7f356bc1cf0760a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 3
        echo "  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/modalMostrarOfertas.css"), "html", null, true);
        echo "\" media=\"all\" />
    <div class=\"row\">

        <div class=\"col-xs-5 col-sm-9 col-md-9 col-lg-9\">
          <h2>LOGIN</h2>
        </div>
        <div class=\"col-xs-7 col-sm-3 col-md-3 col-lg-3\">
          <button type=\"button\" class=\"btn-link\" data-toggle=\"modal\" data-target=\"#modalIntro\">
            <h3>Información</h3>
          </button>
        </div>

    </div>
    <div class=\"row\">
      <hr>
      <div class=\"col-sm-12\">
      ";
        // line 19
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 20
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
      ";
        }
        // line 22
        echo "
          <form class=\"form-signin form-horizontal\" action=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

            <div class=\"form-group\">
              <label for=\"username\" class=\"col-sm-2 control-label\" >Usuario:</label>
              <div class=\"col-xs-12 col-sm-8 col-md-8\">
                <input type=\"email\" id=\"username\" name=\"_username\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" class=\"form-control\" required=\"required\" />
              </div>
            </div>

            <div class=\"form-group\">
              <label for=\"password\" class=\"col-sm-2 control-label\" >Clave:</label>
              <div class=\"col-xs-12 col-sm-8 col-md-8\">
                <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" />
              </div>
            </div>

            <div class=\"form-group\">
              <label for=\"password\" class=\"col-sm-2 control-label\" >Recordar</label>
              <div class=\"col-xs-12 col-sm-6 col-md-8\">
                    <input type=\"checkbox\" value=\"remember-me\" />
                </div>
            </div>

            <div class=\"form-group\">
              <div class=\"col-sm-offset-2 col-sm-10\">
                  <label>
                    <input type=\"submit\" class=\"btn btn-lg btn-primary btn-block \" id=\"_submit\" name=\"_submit\" value=\"Login\" />
                  </label>
               </div>
            </div>


            <div class=\"form-group\">
              <div class=\"col-sm-offset-2 col-sm-10\">
                <a id=\"link_help\" href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">Register</a>
              </div>
            </div>


        </form>
      </div>






    </div>

  </div>

  <div class=\"modal fade modal-fullscreen footer-to-bottom\" id=\"modalIntro\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
    <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
      <div class=\"modal-header\">
        <div class=\"panel panel-default\" id=\"modalCabecera\">
          <div class=\"panel-heading\">
            <div class=\"row\">
              <div class=\"col-xs-10 col-sm-10 col-md-10 col-lg-10\">
                <h2>
                  Información del sistema
                </h2>
              </div>
              <div class=\"col-xs-2 col-sm-2 col-md-2 col-lg-2\">
                <h4>
                  <a id=\"linkCerrar\" href=\"#\" data-dismiss=\"modal\" class=\"class pull-right\"><span class=\"glyphicon glyphicon-remove\"></span></a>
                </h4>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class=\"modal-body\">

        <div class=\"container-fluid text-center\">
          <br>
          <div class=\"row\">
            <div class=\"col-xs-6 col-sm-2 col-md-2 col-lg-2\">
              <h3> Ofertas </h3>
            </div>

            <div class=\"col-xs-6 col-sm-1 col-md-1 col-lg-1\">
              <h3> <span class=\"glyphicon glyphicon-import\" aria-hidden=\"true\"></span> </h3>
            </div>

            <div class=\"col-xs-12 col-sm-6 col-md-8 col-lg-8\">
              <div class=\"well\">
                <p>
                  Aquí podrá indicar que tiene una herramienta y la ofrece para
                  que los usuarios del sistema la puedan usar si lo precisan.
                  Para añadir una nueva oferta, deberá rellenar un formulario indicando:
                  el nombre de la oferta, descripción, condiciones, fecha de inicio, fecha fin, contacto, una imagen,
                  el area, rama y disciplina al cual pertenecen y por último el tipo que es.
                </p>
              </div>
            </div>
          </div>


          <hr>

          <div class=\"row\">
            <div class=\"col-xs-6 col-sm-2 col-md-2 col-lg-2\">
              <h3> Demandas </h3>
            </div>

            <div class=\"col-xs-6 col-sm-1 col-md-1 col-lg-1\">
              <h3> <span class=\" glyphicon glyphicon-export\" aria-hidden=\"true\"></span> </h3>
            </div>

            <div class=\"col-xs-12 col-sm-6 col-md-8 col-lg-8\">
              <div class=\"well\">
              <p>
                Aquí podrá indicar que solicita una herramienta y quiere
                que los usuarios del sistema le ayuden a encontrarla si pueden.
                Para añadir una nueva demanda, al igual que con la oferta, deberá rellenar un formulario indicando:
                el nombre de la demanda ,descripción, condiciones, fecha de inicio, fecha fin, contacto, una imagen,
                el area, rama y disciplina al cual pertenecen  y por último el tipo que es.
              </p>
              </div>
            </div>
          </div>

          <hr>

          <div class=\"row\">
            <div class=\"col-xs-6 col-sm-2 col-md-2 col-lg-2\">
              <h3> Busqueda </h3>
            </div>

            <div class=\"col-xs-6 col-sm-1 col-md-1 col-lg-1\">
              <h3> <span class=\"glyphicon glyphicon-search\" aria-hidden=\"true\"></span> </h3>
            </div>

            <div class=\"col-xs-12 col-sm-6 col-md-8 col-lg-8\">
              <div class=\"well\">
                <p>
                  Se proporciona un sistema de búsqueda, el cual permitirá buscar ofertas y demandas según su tipo,
                  área, rama y disciplina al cual pertenece, además de palabras clave en el campo descripción.
                </p>
              </div>
            </div>
          </div>

        <hr>

          <div class=\"row\">
            <div class=\"col-xs-6 col-sm-2 col-md-2 col-lg-2\">
              <h3> Areas </h3>
            </div>

            <div class=\"col-xs-6 col-sm-1 col-md-1 col-lg-1\">
              <h3> <span class=\"glyphicon glyphicon-th-list\" aria-hidden=\"true\"></span> </h3>
            </div>

            <div class=\"col-xs-12 col-sm-6 col-md-8 col-lg-8\">
              <div class=\"well\">
                <p>
                Cada oferta o demanda pertenecerá a una área, rama y disciplina. Esto permitirá filtrar los resultados de las búsquedas en base a
                 estos criterios.
                </p>
              </div>
            </div>
          </div>


        <hr>


        </div>


      </div>
      <div class=\"modal-footer\">
        <div class=\"container-fluid\">
          <button type=\"button\" class=\"btn btn-primary btn-lg pull-right\" data-dismiss=\"modal\" >Cerrar</button>
        </div>
      </div>
    </div>
  </div>



";
        
        $__internal_fed21619972d37138a747a02bddff9197d10cae59686bdf7f356bc1cf0760a1b->leave($__internal_fed21619972d37138a747a02bddff9197d10cae59686bdf7f356bc1cf0760a1b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 58,  83 => 29,  75 => 24,  71 => 23,  68 => 22,  62 => 20,  60 => 19,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block cuerpo %}
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/modalMostrarOfertas.css') }}\" media=\"all\" />
    <div class=\"row\">

        <div class=\"col-xs-5 col-sm-9 col-md-9 col-lg-9\">
          <h2>LOGIN</h2>
        </div>
        <div class=\"col-xs-7 col-sm-3 col-md-3 col-lg-3\">
          <button type=\"button\" class=\"btn-link\" data-toggle=\"modal\" data-target=\"#modalIntro\">
            <h3>Información</h3>
          </button>
        </div>

    </div>
    <div class=\"row\">
      <hr>
      <div class=\"col-sm-12\">
      {% if error %}
        <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
      {% endif %}

          <form class=\"form-signin form-horizontal\" action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />

            <div class=\"form-group\">
              <label for=\"username\" class=\"col-sm-2 control-label\" >Usuario:</label>
              <div class=\"col-xs-12 col-sm-8 col-md-8\">
                <input type=\"email\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" class=\"form-control\" required=\"required\" />
              </div>
            </div>

            <div class=\"form-group\">
              <label for=\"password\" class=\"col-sm-2 control-label\" >Clave:</label>
              <div class=\"col-xs-12 col-sm-8 col-md-8\">
                <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" />
              </div>
            </div>

            <div class=\"form-group\">
              <label for=\"password\" class=\"col-sm-2 control-label\" >Recordar</label>
              <div class=\"col-xs-12 col-sm-6 col-md-8\">
                    <input type=\"checkbox\" value=\"remember-me\" />
                </div>
            </div>

            <div class=\"form-group\">
              <div class=\"col-sm-offset-2 col-sm-10\">
                  <label>
                    <input type=\"submit\" class=\"btn btn-lg btn-primary btn-block \" id=\"_submit\" name=\"_submit\" value=\"Login\" />
                  </label>
               </div>
            </div>


            <div class=\"form-group\">
              <div class=\"col-sm-offset-2 col-sm-10\">
                <a id=\"link_help\" href=\"{{ path('fos_user_registration_register') }}\">Register</a>
              </div>
            </div>


        </form>
      </div>






    </div>

  </div>

  <div class=\"modal fade modal-fullscreen footer-to-bottom\" id=\"modalIntro\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
    <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
      <div class=\"modal-header\">
        <div class=\"panel panel-default\" id=\"modalCabecera\">
          <div class=\"panel-heading\">
            <div class=\"row\">
              <div class=\"col-xs-10 col-sm-10 col-md-10 col-lg-10\">
                <h2>
                  Información del sistema
                </h2>
              </div>
              <div class=\"col-xs-2 col-sm-2 col-md-2 col-lg-2\">
                <h4>
                  <a id=\"linkCerrar\" href=\"#\" data-dismiss=\"modal\" class=\"class pull-right\"><span class=\"glyphicon glyphicon-remove\"></span></a>
                </h4>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class=\"modal-body\">

        <div class=\"container-fluid text-center\">
          <br>
          <div class=\"row\">
            <div class=\"col-xs-6 col-sm-2 col-md-2 col-lg-2\">
              <h3> Ofertas </h3>
            </div>

            <div class=\"col-xs-6 col-sm-1 col-md-1 col-lg-1\">
              <h3> <span class=\"glyphicon glyphicon-import\" aria-hidden=\"true\"></span> </h3>
            </div>

            <div class=\"col-xs-12 col-sm-6 col-md-8 col-lg-8\">
              <div class=\"well\">
                <p>
                  Aquí podrá indicar que tiene una herramienta y la ofrece para
                  que los usuarios del sistema la puedan usar si lo precisan.
                  Para añadir una nueva oferta, deberá rellenar un formulario indicando:
                  el nombre de la oferta, descripción, condiciones, fecha de inicio, fecha fin, contacto, una imagen,
                  el area, rama y disciplina al cual pertenecen y por último el tipo que es.
                </p>
              </div>
            </div>
          </div>


          <hr>

          <div class=\"row\">
            <div class=\"col-xs-6 col-sm-2 col-md-2 col-lg-2\">
              <h3> Demandas </h3>
            </div>

            <div class=\"col-xs-6 col-sm-1 col-md-1 col-lg-1\">
              <h3> <span class=\" glyphicon glyphicon-export\" aria-hidden=\"true\"></span> </h3>
            </div>

            <div class=\"col-xs-12 col-sm-6 col-md-8 col-lg-8\">
              <div class=\"well\">
              <p>
                Aquí podrá indicar que solicita una herramienta y quiere
                que los usuarios del sistema le ayuden a encontrarla si pueden.
                Para añadir una nueva demanda, al igual que con la oferta, deberá rellenar un formulario indicando:
                el nombre de la demanda ,descripción, condiciones, fecha de inicio, fecha fin, contacto, una imagen,
                el area, rama y disciplina al cual pertenecen  y por último el tipo que es.
              </p>
              </div>
            </div>
          </div>

          <hr>

          <div class=\"row\">
            <div class=\"col-xs-6 col-sm-2 col-md-2 col-lg-2\">
              <h3> Busqueda </h3>
            </div>

            <div class=\"col-xs-6 col-sm-1 col-md-1 col-lg-1\">
              <h3> <span class=\"glyphicon glyphicon-search\" aria-hidden=\"true\"></span> </h3>
            </div>

            <div class=\"col-xs-12 col-sm-6 col-md-8 col-lg-8\">
              <div class=\"well\">
                <p>
                  Se proporciona un sistema de búsqueda, el cual permitirá buscar ofertas y demandas según su tipo,
                  área, rama y disciplina al cual pertenece, además de palabras clave en el campo descripción.
                </p>
              </div>
            </div>
          </div>

        <hr>

          <div class=\"row\">
            <div class=\"col-xs-6 col-sm-2 col-md-2 col-lg-2\">
              <h3> Areas </h3>
            </div>

            <div class=\"col-xs-6 col-sm-1 col-md-1 col-lg-1\">
              <h3> <span class=\"glyphicon glyphicon-th-list\" aria-hidden=\"true\"></span> </h3>
            </div>

            <div class=\"col-xs-12 col-sm-6 col-md-8 col-lg-8\">
              <div class=\"well\">
                <p>
                Cada oferta o demanda pertenecerá a una área, rama y disciplina. Esto permitirá filtrar los resultados de las búsquedas en base a
                 estos criterios.
                </p>
              </div>
            </div>
          </div>


        <hr>


        </div>


      </div>
      <div class=\"modal-footer\">
        <div class=\"container-fluid\">
          <button type=\"button\" class=\"btn btn-primary btn-lg pull-right\" data-dismiss=\"modal\" >Cerrar</button>
        </div>
      </div>
    </div>
  </div>



{% endblock %}
", "@FOSUser/layout.html.twig", "/home/ubuntu/Escritorio/todo/TFG-LRR2/src/UserBundle/Resources/views/layout.html.twig");
    }
}
