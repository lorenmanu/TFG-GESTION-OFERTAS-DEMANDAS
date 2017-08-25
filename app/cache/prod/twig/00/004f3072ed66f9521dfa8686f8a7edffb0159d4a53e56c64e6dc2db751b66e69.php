<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_106584a8c5c5571eeca5bff59599755374b4db24dac394e3abf445df9d95160c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_35e2156e41ae011559979e64a88e563bae0e315c5e594577629eea887ac46a6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35e2156e41ae011559979e64a88e563bae0e315c5e594577629eea887ac46a6b->enter($__internal_35e2156e41ae011559979e64a88e563bae0e315c5e594577629eea887ac46a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 89
        echo "
";
        // line 90
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 94
        echo "
";
        // line 95
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 114
        echo "
";
        // line 115
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 125
        echo "
";
        // line 126
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 136
        echo "
";
        // line 138
        echo "
";
        // line 139
        $this->displayBlock('form_label', $context, $blocks);
        // line 143
        echo "
";
        // line 144
        $this->displayBlock('choice_label', $context, $blocks);
        // line 149
        echo "
";
        // line 150
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 153
        echo "
";
        // line 154
        $this->displayBlock('radio_label', $context, $blocks);
        // line 157
        echo "
";
        // line 158
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 182
        echo "
";
        // line 184
        echo "
";
        // line 185
        $this->displayBlock('form_row', $context, $blocks);
        // line 192
        echo "
";
        // line 193
        $this->displayBlock('button_row', $context, $blocks);
        // line 198
        echo "
";
        // line 199
        $this->displayBlock('choice_row', $context, $blocks);
        // line 203
        echo "
";
        // line 204
        $this->displayBlock('date_row', $context, $blocks);
        // line 208
        echo "
";
        // line 209
        $this->displayBlock('time_row', $context, $blocks);
        // line 213
        echo "
";
        // line 214
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 218
        echo "
";
        // line 219
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 225
        echo "
";
        // line 226
        $this->displayBlock('radio_row', $context, $blocks);
        // line 232
        echo "
";
        // line 234
        echo "
";
        // line 235
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_35e2156e41ae011559979e64a88e563bae0e315c5e594577629eea887ac46a6b->leave($__internal_35e2156e41ae011559979e64a88e563bae0e315c5e594577629eea887ac46a6b_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_ec94927fa20df4f4db4b42e1d24f8b36380ee7bd0793cd410b1e63c4e7e07097 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec94927fa20df4f4db4b42e1d24f8b36380ee7bd0793cd410b1e63c4e7e07097->enter($__internal_ec94927fa20df4f4db4b42e1d24f8b36380ee7bd0793cd410b1e63c4e7e07097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_ec94927fa20df4f4db4b42e1d24f8b36380ee7bd0793cd410b1e63c4e7e07097->leave($__internal_ec94927fa20df4f4db4b42e1d24f8b36380ee7bd0793cd410b1e63c4e7e07097_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_6975749e0affab09179fb436ed009669b5362b2b59a893d6853c8f80989f7217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6975749e0affab09179fb436ed009669b5362b2b59a893d6853c8f80989f7217->enter($__internal_6975749e0affab09179fb436ed009669b5362b2b59a893d6853c8f80989f7217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_6975749e0affab09179fb436ed009669b5362b2b59a893d6853c8f80989f7217->leave($__internal_6975749e0affab09179fb436ed009669b5362b2b59a893d6853c8f80989f7217_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_2a87432b602248b208d8054bd1fd435ac77f4b56ab2291909a3c28d4186531e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a87432b602248b208d8054bd1fd435ac77f4b56ab2291909a3c28d4186531e0->enter($__internal_2a87432b602248b208d8054bd1fd435ac77f4b56ab2291909a3c28d4186531e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_2a87432b602248b208d8054bd1fd435ac77f4b56ab2291909a3c28d4186531e0->leave($__internal_2a87432b602248b208d8054bd1fd435ac77f4b56ab2291909a3c28d4186531e0_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_272613e48dabfb1b014ac3d8d9d4a72dae9ff2cd9dbe8e9aa829cd09b0c34154 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_272613e48dabfb1b014ac3d8d9d4a72dae9ff2cd9dbe8e9aa829cd09b0c34154->enter($__internal_272613e48dabfb1b014ac3d8d9d4a72dae9ff2cd9dbe8e9aa829cd09b0c34154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_bd31f322b5c49da1421b6b58b066e5b3556551f3455e0e48bac241d5c63a4c25 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_d5f5e2db1ef13b61920063bdf0bb5084f58c7da1c3b49723ee7e9509a0dcd006 = "{{") && ('' === $__internal_d5f5e2db1ef13b61920063bdf0bb5084f58c7da1c3b49723ee7e9509a0dcd006 || 0 === strpos($__internal_bd31f322b5c49da1421b6b58b066e5b3556551f3455e0e48bac241d5c63a4c25, $__internal_d5f5e2db1ef13b61920063bdf0bb5084f58c7da1c3b49723ee7e9509a0dcd006)));
        // line 25
        echo "        ";
        if ( !($context["append"] ?? $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if (($context["append"] ?? $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_272613e48dabfb1b014ac3d8d9d4a72dae9ff2cd9dbe8e9aa829cd09b0c34154->leave($__internal_272613e48dabfb1b014ac3d8d9d4a72dae9ff2cd9dbe8e9aa829cd09b0c34154_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_cb7ea4b788a6400e58a847fa48d63d1a1f102dc589e8bfd9a30e4c776aa3f722 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb7ea4b788a6400e58a847fa48d63d1a1f102dc589e8bfd9a30e4c776aa3f722->enter($__internal_cb7ea4b788a6400e58a847fa48d63d1a1f102dc589e8bfd9a30e4c776aa3f722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_cb7ea4b788a6400e58a847fa48d63d1a1f102dc589e8bfd9a30e4c776aa3f722->leave($__internal_cb7ea4b788a6400e58a847fa48d63d1a1f102dc589e8bfd9a30e4c776aa3f722_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_2464fa60c2a46abee1c51737f6544c622f07a5a7e0d5de1c1246259ef132e6df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2464fa60c2a46abee1c51737f6544c622f07a5a7e0d5de1c1246259ef132e6df->enter($__internal_2464fa60c2a46abee1c51737f6544c622f07a5a7e0d5de1c1246259ef132e6df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_2464fa60c2a46abee1c51737f6544c622f07a5a7e0d5de1c1246259ef132e6df->leave($__internal_2464fa60c2a46abee1c51737f6544c622f07a5a7e0d5de1c1246259ef132e6df_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_205ae4736944cc0418e74ddcca205e57a7bc9ee0592a520d91763564160f7e25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_205ae4736944cc0418e74ddcca205e57a7bc9ee0592a520d91763564160f7e25->enter($__internal_205ae4736944cc0418e74ddcca205e57a7bc9ee0592a520d91763564160f7e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_205ae4736944cc0418e74ddcca205e57a7bc9ee0592a520d91763564160f7e25->leave($__internal_205ae4736944cc0418e74ddcca205e57a7bc9ee0592a520d91763564160f7e25_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_5e56453cf8f0ef1bef998f611c663b7bf1e8c89606027513d1992e3799a46430 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e56453cf8f0ef1bef998f611c663b7bf1e8c89606027513d1992e3799a46430->enter($__internal_5e56453cf8f0ef1bef998f611c663b7bf1e8c89606027513d1992e3799a46430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_5e56453cf8f0ef1bef998f611c663b7bf1e8c89606027513d1992e3799a46430->leave($__internal_5e56453cf8f0ef1bef998f611c663b7bf1e8c89606027513d1992e3799a46430_prof);

    }

    // line 90
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_bf50428c0c731ac18b7b7cb296f9990e0ec7b4564b99d6bd5e90242c405f1a80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf50428c0c731ac18b7b7cb296f9990e0ec7b4564b99d6bd5e90242c405f1a80->enter($__internal_bf50428c0c731ac18b7b7cb296f9990e0ec7b4564b99d6bd5e90242c405f1a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 91
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 92
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_bf50428c0c731ac18b7b7cb296f9990e0ec7b4564b99d6bd5e90242c405f1a80->leave($__internal_bf50428c0c731ac18b7b7cb296f9990e0ec7b4564b99d6bd5e90242c405f1a80_prof);

    }

    // line 95
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_bcf728348068af540a4b31150150da2ee1da7e3bd71cd2f966cf84e4447ad3d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcf728348068af540a4b31150150da2ee1da7e3bd71cd2f966cf84e4447ad3d8->enter($__internal_bcf728348068af540a4b31150150da2ee1da7e3bd71cd2f966cf84e4447ad3d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 96
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 98
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 99
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 100
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 104
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 105
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 106
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 107
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 108
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            echo "</div>";
        }
        
        $__internal_bcf728348068af540a4b31150150da2ee1da7e3bd71cd2f966cf84e4447ad3d8->leave($__internal_bcf728348068af540a4b31150150da2ee1da7e3bd71cd2f966cf84e4447ad3d8_prof);

    }

    // line 115
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_90402a09e6c1392c2c62ea5745f85164dc7aba5f1959e0812d2c75f6401afd01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90402a09e6c1392c2c62ea5745f85164dc7aba5f1959e0812d2c75f6401afd01->enter($__internal_90402a09e6c1392c2c62ea5745f85164dc7aba5f1959e0812d2c75f6401afd01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 116
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 117
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 118
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 120
            echo "<div class=\"checkbox\">";
            // line 121
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 122
            echo "</div>";
        }
        
        $__internal_90402a09e6c1392c2c62ea5745f85164dc7aba5f1959e0812d2c75f6401afd01->leave($__internal_90402a09e6c1392c2c62ea5745f85164dc7aba5f1959e0812d2c75f6401afd01_prof);

    }

    // line 126
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_e78a84980dbf57641b0f3020d8f2b7c278a52b23f9de20354725c7dd3b2ee3c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e78a84980dbf57641b0f3020d8f2b7c278a52b23f9de20354725c7dd3b2ee3c3->enter($__internal_e78a84980dbf57641b0f3020d8f2b7c278a52b23f9de20354725c7dd3b2ee3c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 127
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 128
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 129
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 131
            echo "<div class=\"radio\">";
            // line 132
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 133
            echo "</div>";
        }
        
        $__internal_e78a84980dbf57641b0f3020d8f2b7c278a52b23f9de20354725c7dd3b2ee3c3->leave($__internal_e78a84980dbf57641b0f3020d8f2b7c278a52b23f9de20354725c7dd3b2ee3c3_prof);

    }

    // line 139
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_c66aaf88a4530ffbda7ae4b44f5be7980c76340ffd7f7fbb46eb49fa08f29214 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c66aaf88a4530ffbda7ae4b44f5be7980c76340ffd7f7fbb46eb49fa08f29214->enter($__internal_c66aaf88a4530ffbda7ae4b44f5be7980c76340ffd7f7fbb46eb49fa08f29214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 140
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 141
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_c66aaf88a4530ffbda7ae4b44f5be7980c76340ffd7f7fbb46eb49fa08f29214->leave($__internal_c66aaf88a4530ffbda7ae4b44f5be7980c76340ffd7f7fbb46eb49fa08f29214_prof);

    }

    // line 144
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_d130383e30c70b3f278f8392a0eb19003a476219d39c7c8f092d8cc70caa1b83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d130383e30c70b3f278f8392a0eb19003a476219d39c7c8f092d8cc70caa1b83->enter($__internal_d130383e30c70b3f278f8392a0eb19003a476219d39c7c8f092d8cc70caa1b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 146
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 147
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_d130383e30c70b3f278f8392a0eb19003a476219d39c7c8f092d8cc70caa1b83->leave($__internal_d130383e30c70b3f278f8392a0eb19003a476219d39c7c8f092d8cc70caa1b83_prof);

    }

    // line 150
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_7a5ed1d4373acd711ec36c15b6249239add55bd17b51d73b2f1f50bbfff2ccb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a5ed1d4373acd711ec36c15b6249239add55bd17b51d73b2f1f50bbfff2ccb5->enter($__internal_7a5ed1d4373acd711ec36c15b6249239add55bd17b51d73b2f1f50bbfff2ccb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 151
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_7a5ed1d4373acd711ec36c15b6249239add55bd17b51d73b2f1f50bbfff2ccb5->leave($__internal_7a5ed1d4373acd711ec36c15b6249239add55bd17b51d73b2f1f50bbfff2ccb5_prof);

    }

    // line 154
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_8650c5d0487850ca9d5828a7ad4389a9795979d5871bb9697a42b935169a5ff8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8650c5d0487850ca9d5828a7ad4389a9795979d5871bb9697a42b935169a5ff8->enter($__internal_8650c5d0487850ca9d5828a7ad4389a9795979d5871bb9697a42b935169a5ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 155
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_8650c5d0487850ca9d5828a7ad4389a9795979d5871bb9697a42b935169a5ff8->leave($__internal_8650c5d0487850ca9d5828a7ad4389a9795979d5871bb9697a42b935169a5ff8_prof);

    }

    // line 158
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_9a7599ce5f74d41e46f7e7245ab461763365318c1775a835dcc0036fc199ae26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a7599ce5f74d41e46f7e7245ab461763365318c1775a835dcc0036fc199ae26->enter($__internal_9a7599ce5f74d41e46f7e7245ab461763365318c1775a835dcc0036fc199ae26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 159
        echo "    ";
        // line 160
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 161
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 162
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 163
                echo "        ";
            }
            // line 164
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 165
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 166
                echo "        ";
            }
            // line 167
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 168
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 169
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 170
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 171
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 174
                    $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 177
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 178
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 179
            echo "</label>
    ";
        }
        
        $__internal_9a7599ce5f74d41e46f7e7245ab461763365318c1775a835dcc0036fc199ae26->leave($__internal_9a7599ce5f74d41e46f7e7245ab461763365318c1775a835dcc0036fc199ae26_prof);

    }

    // line 185
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_a54fb2724118cf7bed11b918dd6be000894284408abcf001d6322bad36004b08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a54fb2724118cf7bed11b918dd6be000894284408abcf001d6322bad36004b08->enter($__internal_a54fb2724118cf7bed11b918dd6be000894284408abcf001d6322bad36004b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 186
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 187
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 188
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 189
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 190
        echo "</div>";
        
        $__internal_a54fb2724118cf7bed11b918dd6be000894284408abcf001d6322bad36004b08->leave($__internal_a54fb2724118cf7bed11b918dd6be000894284408abcf001d6322bad36004b08_prof);

    }

    // line 193
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_312c2ae61964e8a43d486b4dfe56c7b57e9d44d7d49817102abc9249e77153f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_312c2ae61964e8a43d486b4dfe56c7b57e9d44d7d49817102abc9249e77153f8->enter($__internal_312c2ae61964e8a43d486b4dfe56c7b57e9d44d7d49817102abc9249e77153f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 194
        echo "<div class=\"form-group\">";
        // line 195
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 196
        echo "</div>";
        
        $__internal_312c2ae61964e8a43d486b4dfe56c7b57e9d44d7d49817102abc9249e77153f8->leave($__internal_312c2ae61964e8a43d486b4dfe56c7b57e9d44d7d49817102abc9249e77153f8_prof);

    }

    // line 199
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_cd478d9bd96aaa2ad1bb597b89b1db15213a0e908753def103d81e4b4759724d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd478d9bd96aaa2ad1bb597b89b1db15213a0e908753def103d81e4b4759724d->enter($__internal_cd478d9bd96aaa2ad1bb597b89b1db15213a0e908753def103d81e4b4759724d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 200
        $context["force_error"] = true;
        // line 201
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_cd478d9bd96aaa2ad1bb597b89b1db15213a0e908753def103d81e4b4759724d->leave($__internal_cd478d9bd96aaa2ad1bb597b89b1db15213a0e908753def103d81e4b4759724d_prof);

    }

    // line 204
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_2d086c05cae3e642bcce1fe9813d0c1e316984f96f5bce6245f8e1cab4153794 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d086c05cae3e642bcce1fe9813d0c1e316984f96f5bce6245f8e1cab4153794->enter($__internal_2d086c05cae3e642bcce1fe9813d0c1e316984f96f5bce6245f8e1cab4153794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 205
        $context["force_error"] = true;
        // line 206
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_2d086c05cae3e642bcce1fe9813d0c1e316984f96f5bce6245f8e1cab4153794->leave($__internal_2d086c05cae3e642bcce1fe9813d0c1e316984f96f5bce6245f8e1cab4153794_prof);

    }

    // line 209
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_1021e8a10eea77ec8a768209c7a343a78561913b62ff2c2bfa8d61b5af294c1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1021e8a10eea77ec8a768209c7a343a78561913b62ff2c2bfa8d61b5af294c1a->enter($__internal_1021e8a10eea77ec8a768209c7a343a78561913b62ff2c2bfa8d61b5af294c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 210
        $context["force_error"] = true;
        // line 211
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_1021e8a10eea77ec8a768209c7a343a78561913b62ff2c2bfa8d61b5af294c1a->leave($__internal_1021e8a10eea77ec8a768209c7a343a78561913b62ff2c2bfa8d61b5af294c1a_prof);

    }

    // line 214
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_3f1bf029f03ee1992e791203fae78ba2a0817cf4a56b4503c5507f531abaaba0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f1bf029f03ee1992e791203fae78ba2a0817cf4a56b4503c5507f531abaaba0->enter($__internal_3f1bf029f03ee1992e791203fae78ba2a0817cf4a56b4503c5507f531abaaba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 215
        $context["force_error"] = true;
        // line 216
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_3f1bf029f03ee1992e791203fae78ba2a0817cf4a56b4503c5507f531abaaba0->leave($__internal_3f1bf029f03ee1992e791203fae78ba2a0817cf4a56b4503c5507f531abaaba0_prof);

    }

    // line 219
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_45321a82d58c9a80d2c20397d88d186aa815fd0a1f3f630a04cb20f00fa4b9da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45321a82d58c9a80d2c20397d88d186aa815fd0a1f3f630a04cb20f00fa4b9da->enter($__internal_45321a82d58c9a80d2c20397d88d186aa815fd0a1f3f630a04cb20f00fa4b9da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 220
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 221
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 222
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 223
        echo "</div>";
        
        $__internal_45321a82d58c9a80d2c20397d88d186aa815fd0a1f3f630a04cb20f00fa4b9da->leave($__internal_45321a82d58c9a80d2c20397d88d186aa815fd0a1f3f630a04cb20f00fa4b9da_prof);

    }

    // line 226
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_2655ee723e0f923cff406ee5a3c8ca7cb991709190bfdfc92ecf14d30b43ce8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2655ee723e0f923cff406ee5a3c8ca7cb991709190bfdfc92ecf14d30b43ce8a->enter($__internal_2655ee723e0f923cff406ee5a3c8ca7cb991709190bfdfc92ecf14d30b43ce8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 227
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 228
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 229
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 230
        echo "</div>";
        
        $__internal_2655ee723e0f923cff406ee5a3c8ca7cb991709190bfdfc92ecf14d30b43ce8a->leave($__internal_2655ee723e0f923cff406ee5a3c8ca7cb991709190bfdfc92ecf14d30b43ce8a_prof);

    }

    // line 235
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_5e0aeda595eca8aa6ca8baad57184af4fef0a0e4e605b38bfa9802345202bb67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e0aeda595eca8aa6ca8baad57184af4fef0a0e4e605b38bfa9802345202bb67->enter($__internal_5e0aeda595eca8aa6ca8baad57184af4fef0a0e4e605b38bfa9802345202bb67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 236
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 237
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 238
            echo "    <ul class=\"list-unstyled\">";
            // line 239
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 240
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 242
            echo "</ul>
    ";
            // line 243
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_5e0aeda595eca8aa6ca8baad57184af4fef0a0e4e605b38bfa9802345202bb67->leave($__internal_5e0aeda595eca8aa6ca8baad57184af4fef0a0e4e605b38bfa9802345202bb67_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  837 => 243,  834 => 242,  826 => 240,  822 => 239,  820 => 238,  814 => 237,  812 => 236,  806 => 235,  799 => 230,  797 => 229,  795 => 228,  789 => 227,  783 => 226,  776 => 223,  774 => 222,  772 => 221,  766 => 220,  760 => 219,  753 => 216,  751 => 215,  745 => 214,  738 => 211,  736 => 210,  730 => 209,  723 => 206,  721 => 205,  715 => 204,  708 => 201,  706 => 200,  700 => 199,  693 => 196,  691 => 195,  689 => 194,  683 => 193,  676 => 190,  674 => 189,  672 => 188,  670 => 187,  664 => 186,  658 => 185,  649 => 179,  645 => 178,  630 => 177,  626 => 174,  623 => 171,  622 => 170,  621 => 169,  619 => 168,  616 => 167,  613 => 166,  610 => 165,  607 => 164,  604 => 163,  601 => 162,  598 => 161,  595 => 160,  593 => 159,  587 => 158,  580 => 155,  574 => 154,  567 => 151,  561 => 150,  554 => 147,  552 => 146,  546 => 144,  539 => 141,  537 => 140,  531 => 139,  523 => 133,  521 => 132,  519 => 131,  516 => 129,  514 => 128,  512 => 127,  506 => 126,  498 => 122,  496 => 121,  494 => 120,  491 => 118,  489 => 117,  487 => 116,  481 => 115,  473 => 111,  467 => 108,  466 => 107,  465 => 106,  461 => 105,  457 => 104,  450 => 100,  449 => 99,  448 => 98,  444 => 97,  442 => 96,  436 => 95,  429 => 92,  427 => 91,  421 => 90,  412 => 85,  409 => 84,  399 => 83,  394 => 81,  392 => 80,  390 => 79,  387 => 77,  385 => 76,  379 => 75,  370 => 70,  368 => 69,  366 => 67,  365 => 66,  364 => 65,  363 => 64,  358 => 62,  356 => 61,  354 => 60,  351 => 58,  349 => 57,  343 => 56,  335 => 52,  333 => 51,  331 => 50,  329 => 49,  327 => 48,  323 => 47,  321 => 46,  318 => 44,  316 => 43,  310 => 42,  302 => 38,  300 => 37,  298 => 36,  292 => 35,  285 => 32,  279 => 30,  277 => 29,  275 => 28,  269 => 26,  266 => 25,  264 => 24,  261 => 23,  255 => 22,  248 => 19,  246 => 18,  240 => 17,  233 => 14,  231 => 13,  225 => 12,  218 => 9,  215 => 7,  213 => 6,  207 => 5,  200 => 235,  197 => 234,  194 => 232,  192 => 226,  189 => 225,  187 => 219,  184 => 218,  182 => 214,  179 => 213,  177 => 209,  174 => 208,  172 => 204,  169 => 203,  167 => 199,  164 => 198,  162 => 193,  159 => 192,  157 => 185,  154 => 184,  151 => 182,  149 => 158,  146 => 157,  144 => 154,  141 => 153,  139 => 150,  136 => 149,  134 => 144,  131 => 143,  129 => 139,  126 => 138,  123 => 136,  121 => 126,  118 => 125,  116 => 115,  113 => 114,  111 => 95,  108 => 94,  106 => 90,  103 => 89,  101 => 75,  98 => 74,  96 => 56,  93 => 55,  91 => 42,  88 => 41,  86 => 35,  83 => 34,  81 => 22,  78 => 21,  76 => 17,  73 => 16,  71 => 12,  68 => 11,  66 => 5,  63 => 4,  60 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/home/ubuntu/Escritorio/todo/TFG-LRR2/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
