{% extends 'base.html.twig.php' %}

{% block side %}
    <div id="frecuentes" class="mod-menu_secciones menu_frecuentes" style="display: none;">
      <ul>
        <li class="adicional1 item-first_level">
          <a href="#">
            Elemento 1er nivel
          </a>
          <ul>
            <li class="tipo1 item-second_level">
              <a href="#">
                Elemento 2º nivel
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  
  <div id="pagina">
    <h1 id="titulo_pagina"><span class="texto_titulo">TITULO DE PÁGINA</span></h1>
    <div id="contenido" class="sec_interior">
      <div class="content_doku">
        <p>
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.
        </p>

        <h1 class="h1Primer">
          <a id="doku_encabezado_de_primer_nivel" name="__doku_encabezado_de_primer_nivel">Encabezado de primer nivel</a>
        </h1>
        <div class="level1">
          <p>Contenido nivel 1</p>
        </div>
        <h2>
          <a id="doku_encabezado_de_segundo_nivel" name="__doku_encabezado_de_segundo_nivel">Encabezado de segundo nivel</a>
        </h2>
        <div class="level2">
          <ul class="enlaces">
            <li class="level1">
              <div class="li"> item</div>
              <ul class="enlaces2">
                <li class="level2">
                  <div class="li2"> item</div>
                </li>
              </ul>
            </li>
          </ul>
          <ul>
            <li class="level1">
              <div class="li"> item</div>
              <ul>
                <li class="level2">
                  <div class="li2"> item</div>
                </li>
              </ul>
            </li>
          </ul>
          <ul class="departamento">
            <li class="level1 level1_primero impar">
              <div class="li"> item</div>
              <ul class="departamento">
                <li class="level2 par">
                  <div class="li2"> item</div>
                </li>
              </ul>
            </li>
          </ul>
          <ol>
            <li class="level1">
              <div class="li"> item</div>
              <ol>
                <li class="level2">
                  <div class="li2"> item</div>
                </li>
              </ol>
            </li>
          </ol>
          <ul class="enlaces">
            <li class="level1">
              <div class="li">
                <a rel="nofollow" title="http://www.google.com" class="urlextern" href="http://www.google.com"> item </a>
              </div>
              <ul class="enlaces2">
                <li class="level2">
                  <div class="li2">
                    <a rel="nofollow" title="http://www.google.com" class="urlextern" href="http://www.google.com"> item </a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
          <ul>
            <li class="level1">
              <div class="li">
                <a rel="nofollow" title="http://www.google.com" class="urlextern" href="http://www.google.com"> item </a>
              </div>
              <ul>
                <li class="level2">
                  <div class="li2">
                    <a rel="nofollow" title="http://www.google.com" class="urlextern" href="http://www.google.com"> item </a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
          <ul class="departamento">
            <li class="level1 impar">
              <div class="li">
                <a rel="nofollow" title="http://www.google.com" class="urlextern" href="http://www.google.com"> item </a>
              </div>
              <ul class="departamento">
                <li class="level2 level1_ultimo par">
                  <div class="li2">
                    <a rel="nofollow" title="http://www.google.com" class="urlextern" href="http://www.google.com"> item </a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
          <ol>
            <li class="level1">
              <div class="li">
                <a rel="nofollow" title="http://www.google.com" class="urlextern" href="http://www.google.com"> item </a>
              </div>
              <ol>
                <li class="level2">
                  <div class="li2">
                    <a rel="nofollow" title="http://www.google.com" class="urlextern" href="http://www.google.com"> item </a>
                  </div>
                </li>
              </ol>
            </li>
          </ol>
          <table class="inline">
            <tbody>
              <tr>
                <th class="leftalign">Probando  </th>
                <th class="centeralign">  A hacer  </th>
                <th class="rightalign">  Una tabla</th>
              </tr>
              <tr>
                <td class="centeralign par">  Con campos  </td>
                <td class="rightalign impar">  De todo</td>
                <td class="leftalign par">Tipo distinto  </td>
              </tr>
              <tr>
                <td class="centeralign par">  Con campos  </td>
                <td class="rightalign impar">  De todo</td>
                <td class="leftalign par">Tipo distinto  </td>
              </tr>
              <tr>
                <td class="centeralign par">  Con campos  </td>
                <td class="rightalign impar">  De todo</td>
                <td class="leftalign par">Tipo distinto  </td>
              </tr>
              <tr>
                <td class="centeralign par">  Con campos  </td>
                <td class="rightalign impar">  De todo</td>
                <td class="leftalign par">Tipo distinto  </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  {% endblock %}
