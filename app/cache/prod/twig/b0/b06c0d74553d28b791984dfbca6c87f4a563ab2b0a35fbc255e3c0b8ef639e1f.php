<?php

/* form_div_layout.html.twig */
class __TwigTemplate_84cd416e55f7dcfca24deb2d3ef16449e387fcd4d5db7dd0261caf740c4007c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'range_widget' => array($this, 'block_range_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'reset_widget' => array($this, 'block_reset_widget'),
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'form_row' => array($this, 'block_form_row'),
            'button_row' => array($this, 'block_button_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'form' => array($this, 'block_form'),
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'form_enctype' => array($this, 'block_form_enctype'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_rest' => array($this, 'block_form_rest'),
            'form_rows' => array($this, 'block_form_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'button_attributes' => array($this, 'block_button_attributes'),
            'attributes' => array($this, 'block_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1382d36d04f41105cd00d2f8ae69458639ec5cfcf297dfd4141867767f1ed4a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1382d36d04f41105cd00d2f8ae69458639ec5cfcf297dfd4141867767f1ed4a5->enter($__internal_1382d36d04f41105cd00d2f8ae69458639ec5cfcf297dfd4141867767f1ed4a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 16
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 26
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 33
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 37
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 45
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 54
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 74
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 87
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 91
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 95
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 108
        $this->displayBlock('date_widget', $context, $blocks);
        // line 122
        $this->displayBlock('time_widget', $context, $blocks);
        // line 133
        $this->displayBlock('number_widget', $context, $blocks);
        // line 139
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 144
        $this->displayBlock('money_widget', $context, $blocks);
        // line 148
        $this->displayBlock('url_widget', $context, $blocks);
        // line 153
        $this->displayBlock('search_widget', $context, $blocks);
        // line 158
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 163
        $this->displayBlock('password_widget', $context, $blocks);
        // line 168
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 173
        $this->displayBlock('email_widget', $context, $blocks);
        // line 178
        $this->displayBlock('range_widget', $context, $blocks);
        // line 183
        $this->displayBlock('button_widget', $context, $blocks);
        // line 197
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 202
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 209
        $this->displayBlock('form_label', $context, $blocks);
        // line 231
        $this->displayBlock('button_label', $context, $blocks);
        // line 235
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 243
        $this->displayBlock('form_row', $context, $blocks);
        // line 251
        $this->displayBlock('button_row', $context, $blocks);
        // line 257
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 263
        $this->displayBlock('form', $context, $blocks);
        // line 269
        $this->displayBlock('form_start', $context, $blocks);
        // line 283
        $this->displayBlock('form_end', $context, $blocks);
        // line 290
        $this->displayBlock('form_enctype', $context, $blocks);
        // line 294
        $this->displayBlock('form_errors', $context, $blocks);
        // line 304
        $this->displayBlock('form_rest', $context, $blocks);
        // line 325
        echo "
";
        // line 328
        $this->displayBlock('form_rows', $context, $blocks);
        // line 334
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 351
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 365
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 379
        $this->displayBlock('attributes', $context, $blocks);
        
        $__internal_1382d36d04f41105cd00d2f8ae69458639ec5cfcf297dfd4141867767f1ed4a5->leave($__internal_1382d36d04f41105cd00d2f8ae69458639ec5cfcf297dfd4141867767f1ed4a5_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_591a83c937c5acac40bedaa4c87d01b20ac13a13935e3c1baccdb41be84e67d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_591a83c937c5acac40bedaa4c87d01b20ac13a13935e3c1baccdb41be84e67d3->enter($__internal_591a83c937c5acac40bedaa4c87d01b20ac13a13935e3c1baccdb41be84e67d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if (($context["compound"] ?? $this->getContext($context, "compound"))) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_591a83c937c5acac40bedaa4c87d01b20ac13a13935e3c1baccdb41be84e67d3->leave($__internal_591a83c937c5acac40bedaa4c87d01b20ac13a13935e3c1baccdb41be84e67d3_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_734e55b65ac8136031827ddd2f665dedb0ea40cdf1c5e04dc1fbaeb88d376297 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_734e55b65ac8136031827ddd2f665dedb0ea40cdf1c5e04dc1fbaeb88d376297->enter($__internal_734e55b65ac8136031827ddd2f665dedb0ea40cdf1c5e04dc1fbaeb88d376297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 13
        echo "<input type=\"";
        echo twig_escape_filter($this->env, ($context["type"] ?? $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>";
        
        $__internal_734e55b65ac8136031827ddd2f665dedb0ea40cdf1c5e04dc1fbaeb88d376297->leave($__internal_734e55b65ac8136031827ddd2f665dedb0ea40cdf1c5e04dc1fbaeb88d376297_prof);

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_692834107203d3046f6fe4720ab13e346b3169b2668a6cce2dc3ae916ed94bf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_692834107203d3046f6fe4720ab13e346b3169b2668a6cce2dc3ae916ed94bf8->enter($__internal_692834107203d3046f6fe4720ab13e346b3169b2668a6cce2dc3ae916ed94bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 17
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 18
        if (twig_test_empty($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()))) {
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        }
        // line 21
        $this->displayBlock("form_rows", $context, $blocks);
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        // line 23
        echo "</div>";
        
        $__internal_692834107203d3046f6fe4720ab13e346b3169b2668a6cce2dc3ae916ed94bf8->leave($__internal_692834107203d3046f6fe4720ab13e346b3169b2668a6cce2dc3ae916ed94bf8_prof);

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_0ee5c91fb60837fb63d1818dd3e47afc72dbb38465d61b56d82079c570216ccb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ee5c91fb60837fb63d1818dd3e47afc72dbb38465d61b56d82079c570216ccb->enter($__internal_0ee5c91fb60837fb63d1818dd3e47afc72dbb38465d61b56d82079c570216ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("data-prototype" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["prototype"] ?? $this->getContext($context, "prototype")), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_0ee5c91fb60837fb63d1818dd3e47afc72dbb38465d61b56d82079c570216ccb->leave($__internal_0ee5c91fb60837fb63d1818dd3e47afc72dbb38465d61b56d82079c570216ccb_prof);

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_445780506f094cb11a31b55a5b19e4746b594f7b8a520b465aa839c40d8c1e5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_445780506f094cb11a31b55a5b19e4746b594f7b8a520b465aa839c40d8c1e5f->enter($__internal_445780506f094cb11a31b55a5b19e4746b594f7b8a520b465aa839c40d8c1e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>";
        
        $__internal_445780506f094cb11a31b55a5b19e4746b594f7b8a520b465aa839c40d8c1e5f->leave($__internal_445780506f094cb11a31b55a5b19e4746b594f7b8a520b465aa839c40d8c1e5f_prof);

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_3e9d753949455f559940420d2a991cf5796da2d72d842624700cda5e1b419d8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e9d753949455f559940420d2a991cf5796da2d72d842624700cda5e1b419d8a->enter($__internal_3e9d753949455f559940420d2a991cf5796da2d72d842624700cda5e1b419d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 38
        if (($context["expanded"] ?? $this->getContext($context, "expanded"))) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_3e9d753949455f559940420d2a991cf5796da2d72d842624700cda5e1b419d8a->leave($__internal_3e9d753949455f559940420d2a991cf5796da2d72d842624700cda5e1b419d8a_prof);

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_c0f4900143428c1306770c9691cef40a25f389139da34ec544393e732932fb14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0f4900143428c1306770c9691cef40a25f389139da34ec544393e732932fb14->enter($__internal_c0f4900143428c1306770c9691cef40a25f389139da34ec544393e732932fb14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 46
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget');
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => ($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</div>";
        
        $__internal_c0f4900143428c1306770c9691cef40a25f389139da34ec544393e732932fb14->leave($__internal_c0f4900143428c1306770c9691cef40a25f389139da34ec544393e732932fb14_prof);

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_ae969cc58dea4547f1caf18229eee300418d7c0f3c0cf20b15bcb7701a926753 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae969cc58dea4547f1caf18229eee300418d7c0f3c0cf20b15bcb7701a926753->enter($__internal_ae969cc58dea4547f1caf18229eee300418d7c0f3c0cf20b15bcb7701a926753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 55
        if (((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple"))) && ( !$this->getAttribute(($context["attr"] ?? null), "size", array(), "any", true, true) || ($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "size", array()) <= 1)))) {
            // line 56
            $context["required"] = false;
        }
        // line 58
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 59
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 60
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["placeholder"] ?? $this->getContext($context, "placeholder")) != "")) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["placeholder"] ?? $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 62
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 63
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 64
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 65
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 66
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 69
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 70
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 71
        echo "</select>";
        
        $__internal_ae969cc58dea4547f1caf18229eee300418d7c0f3c0cf20b15bcb7701a926753->leave($__internal_ae969cc58dea4547f1caf18229eee300418d7c0f3c0cf20b15bcb7701a926753_prof);

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_28fd4b5af84d385da706af65c368a1d35985ecb027c49f27bcbd0544f6b2c900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28fd4b5af84d385da706af65c368a1d35985ecb027c49f27bcbd0544f6b2c900->enter($__internal_28fd4b5af84d385da706af65c368a1d35985ecb027c49f27bcbd0544f6b2c900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? $this->getContext($context, "options")));
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
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 76
            if (twig_test_iterable($context["choice"])) {
                // line 77
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, (((($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")) === false)) ? ($context["group_label"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["group_label"], array(), ($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "\">
                ";
                // line 78
                $context["options"] = $context["choice"];
                // line 79
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 80
                echo "</optgroup>";
            } else {
                // line 82
                echo "<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                echo "\"";
                if ($this->getAttribute($context["choice"], "attr", array())) {
                    echo " ";
                    $context["attr"] = $this->getAttribute($context["choice"], "attr", array());
                    $this->displayBlock("attributes", $context, $blocks);
                }
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->isSelectedChoice($context["choice"], ($context["value"] ?? $this->getContext($context, "value")))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, (((($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")) === false)) ? ($this->getAttribute($context["choice"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["choice"], "label", array()), array(), ($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "</option>";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_28fd4b5af84d385da706af65c368a1d35985ecb027c49f27bcbd0544f6b2c900->leave($__internal_28fd4b5af84d385da706af65c368a1d35985ecb027c49f27bcbd0544f6b2c900_prof);

    }

    // line 87
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_9c7438a10d106601e1d39665b6b58e6211a212685d2772265f405e4fc9782014 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c7438a10d106601e1d39665b6b58e6211a212685d2772265f405e4fc9782014->enter($__internal_9c7438a10d106601e1d39665b6b58e6211a212685d2772265f405e4fc9782014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 88
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_9c7438a10d106601e1d39665b6b58e6211a212685d2772265f405e4fc9782014->leave($__internal_9c7438a10d106601e1d39665b6b58e6211a212685d2772265f405e4fc9782014_prof);

    }

    // line 91
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_512ed90dfb5ff639758026eed44731af2c79c7561c4ef8870730c73dd9d99b66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_512ed90dfb5ff639758026eed44731af2c79c7561c4ef8870730c73dd9d99b66->enter($__internal_512ed90dfb5ff639758026eed44731af2c79c7561c4ef8870730c73dd9d99b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 92
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_512ed90dfb5ff639758026eed44731af2c79c7561c4ef8870730c73dd9d99b66->leave($__internal_512ed90dfb5ff639758026eed44731af2c79c7561c4ef8870730c73dd9d99b66_prof);

    }

    // line 95
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_5d5357562d0017995e6d5b5081a8b5e8bafe87ec6732fc989fde84d7790e900a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d5357562d0017995e6d5b5081a8b5e8bafe87ec6732fc989fde84d7790e900a->enter($__internal_5d5357562d0017995e6d5b5081a8b5e8bafe87ec6732fc989fde84d7790e900a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 96
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 100
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 101
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 102
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget');
            // line 103
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget');
            // line 104
            echo "</div>";
        }
        
        $__internal_5d5357562d0017995e6d5b5081a8b5e8bafe87ec6732fc989fde84d7790e900a->leave($__internal_5d5357562d0017995e6d5b5081a8b5e8bafe87ec6732fc989fde84d7790e900a_prof);

    }

    // line 108
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_cfbc49c49deba22a680ed3dd3e73116aaf171a69e35681fd391bddcb8f6848de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfbc49c49deba22a680ed3dd3e73116aaf171a69e35681fd391bddcb8f6848de->enter($__internal_cfbc49c49deba22a680ed3dd3e73116aaf171a69e35681fd391bddcb8f6848de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 109
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 110
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 112
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 113
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 114
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 115
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 116
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 118
            echo "</div>";
        }
        
        $__internal_cfbc49c49deba22a680ed3dd3e73116aaf171a69e35681fd391bddcb8f6848de->leave($__internal_cfbc49c49deba22a680ed3dd3e73116aaf171a69e35681fd391bddcb8f6848de_prof);

    }

    // line 122
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_656d160eab1ad99fdadc969dc002fbd30bcd571b359c1777e9e9acf8ff12c7d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_656d160eab1ad99fdadc969dc002fbd30bcd571b359c1777e9e9acf8ff12c7d8->enter($__internal_656d160eab1ad99fdadc969dc002fbd30bcd571b359c1777e9e9acf8ff12c7d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 123
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 124
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 126
            $context["vars"] = (((($context["widget"] ?? $this->getContext($context, "widget")) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 127
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 128
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget', ($context["vars"] ?? $this->getContext($context, "vars")));
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget', ($context["vars"] ?? $this->getContext($context, "vars")));
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget', ($context["vars"] ?? $this->getContext($context, "vars")));
            }
            // line 129
            echo "        </div>";
        }
        
        $__internal_656d160eab1ad99fdadc969dc002fbd30bcd571b359c1777e9e9acf8ff12c7d8->leave($__internal_656d160eab1ad99fdadc969dc002fbd30bcd571b359c1777e9e9acf8ff12c7d8_prof);

    }

    // line 133
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_0e9ae1054b4563ed2c1777d0e6d995ff8feb84e236d6a6e7b30bc92a2847aaee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e9ae1054b4563ed2c1777d0e6d995ff8feb84e236d6a6e7b30bc92a2847aaee->enter($__internal_0e9ae1054b4563ed2c1777d0e6d995ff8feb84e236d6a6e7b30bc92a2847aaee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 135
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 136
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_0e9ae1054b4563ed2c1777d0e6d995ff8feb84e236d6a6e7b30bc92a2847aaee->leave($__internal_0e9ae1054b4563ed2c1777d0e6d995ff8feb84e236d6a6e7b30bc92a2847aaee_prof);

    }

    // line 139
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_30c51611fcf4d7bdf3fc30f895d3de7fae03e92705e292ec1459e19e1a6971cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30c51611fcf4d7bdf3fc30f895d3de7fae03e92705e292ec1459e19e1a6971cc->enter($__internal_30c51611fcf4d7bdf3fc30f895d3de7fae03e92705e292ec1459e19e1a6971cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 140
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "number")) : ("number"));
        // line 141
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_30c51611fcf4d7bdf3fc30f895d3de7fae03e92705e292ec1459e19e1a6971cc->leave($__internal_30c51611fcf4d7bdf3fc30f895d3de7fae03e92705e292ec1459e19e1a6971cc_prof);

    }

    // line 144
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_b0963f9dafcc07bbc96db5b719f864a606250f5f04b603d6bdd3a24dfa5eec83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0963f9dafcc07bbc96db5b719f864a606250f5f04b603d6bdd3a24dfa5eec83->enter($__internal_b0963f9dafcc07bbc96db5b719f864a606250f5f04b603d6bdd3a24dfa5eec83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 145
        echo twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_b0963f9dafcc07bbc96db5b719f864a606250f5f04b603d6bdd3a24dfa5eec83->leave($__internal_b0963f9dafcc07bbc96db5b719f864a606250f5f04b603d6bdd3a24dfa5eec83_prof);

    }

    // line 148
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_3769677a65771dfa48dff774b8849924dfc200d4e04c95ce99cd5df95f9a4246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3769677a65771dfa48dff774b8849924dfc200d4e04c95ce99cd5df95f9a4246->enter($__internal_3769677a65771dfa48dff774b8849924dfc200d4e04c95ce99cd5df95f9a4246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 149
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "url")) : ("url"));
        // line 150
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_3769677a65771dfa48dff774b8849924dfc200d4e04c95ce99cd5df95f9a4246->leave($__internal_3769677a65771dfa48dff774b8849924dfc200d4e04c95ce99cd5df95f9a4246_prof);

    }

    // line 153
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_8f0a7d4909b81b0bf76d41213a90a1cc228a08f1a1a91be9b65e240d9fa640d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f0a7d4909b81b0bf76d41213a90a1cc228a08f1a1a91be9b65e240d9fa640d3->enter($__internal_8f0a7d4909b81b0bf76d41213a90a1cc228a08f1a1a91be9b65e240d9fa640d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 154
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "search")) : ("search"));
        // line 155
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_8f0a7d4909b81b0bf76d41213a90a1cc228a08f1a1a91be9b65e240d9fa640d3->leave($__internal_8f0a7d4909b81b0bf76d41213a90a1cc228a08f1a1a91be9b65e240d9fa640d3_prof);

    }

    // line 158
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_372fba22f45eb495092b3decc86af8838f503b9688815e0f1d3f4c974a681037 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_372fba22f45eb495092b3decc86af8838f503b9688815e0f1d3f4c974a681037->enter($__internal_372fba22f45eb495092b3decc86af8838f503b9688815e0f1d3f4c974a681037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 159
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 160
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_372fba22f45eb495092b3decc86af8838f503b9688815e0f1d3f4c974a681037->leave($__internal_372fba22f45eb495092b3decc86af8838f503b9688815e0f1d3f4c974a681037_prof);

    }

    // line 163
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_68a3e7b0225e3e63e66cc3a82c05846a5528d12b68990d13376f8863779153c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68a3e7b0225e3e63e66cc3a82c05846a5528d12b68990d13376f8863779153c4->enter($__internal_68a3e7b0225e3e63e66cc3a82c05846a5528d12b68990d13376f8863779153c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 164
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "password")) : ("password"));
        // line 165
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_68a3e7b0225e3e63e66cc3a82c05846a5528d12b68990d13376f8863779153c4->leave($__internal_68a3e7b0225e3e63e66cc3a82c05846a5528d12b68990d13376f8863779153c4_prof);

    }

    // line 168
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_e8e1f30dbaf1595800fcf646fcfb2d1901c41dd624ee0e8bfd7d37ee192d076f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8e1f30dbaf1595800fcf646fcfb2d1901c41dd624ee0e8bfd7d37ee192d076f->enter($__internal_e8e1f30dbaf1595800fcf646fcfb2d1901c41dd624ee0e8bfd7d37ee192d076f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 169
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "hidden")) : ("hidden"));
        // line 170
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_e8e1f30dbaf1595800fcf646fcfb2d1901c41dd624ee0e8bfd7d37ee192d076f->leave($__internal_e8e1f30dbaf1595800fcf646fcfb2d1901c41dd624ee0e8bfd7d37ee192d076f_prof);

    }

    // line 173
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_4f2e28b245e5c08e46ead9be4d38e1d599ca33d32eb337612c4e4ffdf81abe35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f2e28b245e5c08e46ead9be4d38e1d599ca33d32eb337612c4e4ffdf81abe35->enter($__internal_4f2e28b245e5c08e46ead9be4d38e1d599ca33d32eb337612c4e4ffdf81abe35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 174
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "email")) : ("email"));
        // line 175
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_4f2e28b245e5c08e46ead9be4d38e1d599ca33d32eb337612c4e4ffdf81abe35->leave($__internal_4f2e28b245e5c08e46ead9be4d38e1d599ca33d32eb337612c4e4ffdf81abe35_prof);

    }

    // line 178
    public function block_range_widget($context, array $blocks = array())
    {
        $__internal_939b782d6c7d748e3dc34a5f34098fc2ebac6c9676d6a9399b4776c968f2ef71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_939b782d6c7d748e3dc34a5f34098fc2ebac6c9676d6a9399b4776c968f2ef71->enter($__internal_939b782d6c7d748e3dc34a5f34098fc2ebac6c9676d6a9399b4776c968f2ef71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        // line 179
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "range")) : ("range"));
        // line 180
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_939b782d6c7d748e3dc34a5f34098fc2ebac6c9676d6a9399b4776c968f2ef71->leave($__internal_939b782d6c7d748e3dc34a5f34098fc2ebac6c9676d6a9399b4776c968f2ef71_prof);

    }

    // line 183
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_fd5131e3c340f3523d971671b51abd79910798d02a24e8830357e8de5c1cb2c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd5131e3c340f3523d971671b51abd79910798d02a24e8830357e8de5c1cb2c9->enter($__internal_fd5131e3c340f3523d971671b51abd79910798d02a24e8830357e8de5c1cb2c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 184
        if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
            // line 185
            if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                // line 186
                $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                 // line 187
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                 // line 188
($context["id"] ?? $this->getContext($context, "id"))));
            } else {
                // line 191
                $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            }
        }
        // line 194
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "</button>";
        
        $__internal_fd5131e3c340f3523d971671b51abd79910798d02a24e8830357e8de5c1cb2c9->leave($__internal_fd5131e3c340f3523d971671b51abd79910798d02a24e8830357e8de5c1cb2c9_prof);

    }

    // line 197
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_e4314c03044435fbe78d0f1c3fa7bf44b9a7072a06db967d1c3fb5f938f7b15a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4314c03044435fbe78d0f1c3fa7bf44b9a7072a06db967d1c3fb5f938f7b15a->enter($__internal_e4314c03044435fbe78d0f1c3fa7bf44b9a7072a06db967d1c3fb5f938f7b15a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 198
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "submit")) : ("submit"));
        // line 199
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_e4314c03044435fbe78d0f1c3fa7bf44b9a7072a06db967d1c3fb5f938f7b15a->leave($__internal_e4314c03044435fbe78d0f1c3fa7bf44b9a7072a06db967d1c3fb5f938f7b15a_prof);

    }

    // line 202
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_3fd62a78bcfb4c4e28c38cd974822549d26e929912e6b9ca80a18dcaa94184eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fd62a78bcfb4c4e28c38cd974822549d26e929912e6b9ca80a18dcaa94184eb->enter($__internal_3fd62a78bcfb4c4e28c38cd974822549d26e929912e6b9ca80a18dcaa94184eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 203
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "reset")) : ("reset"));
        // line 204
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_3fd62a78bcfb4c4e28c38cd974822549d26e929912e6b9ca80a18dcaa94184eb->leave($__internal_3fd62a78bcfb4c4e28c38cd974822549d26e929912e6b9ca80a18dcaa94184eb_prof);

    }

    // line 209
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_663fd642d63e34f2c41b9e0e92a799aeff83ab02fbf8a2a12856a3262841db7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_663fd642d63e34f2c41b9e0e92a799aeff83ab02fbf8a2a12856a3262841db7e->enter($__internal_663fd642d63e34f2c41b9e0e92a799aeff83ab02fbf8a2a12856a3262841db7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 210
        if ( !(($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 211
            if ( !($context["compound"] ?? $this->getContext($context, "compound"))) {
                // line 212
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
            }
            // line 214
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 215
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 217
            if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
                // line 218
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 219
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 220
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 221
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 224
                    $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 227
            echo "<label";
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
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</label>";
        }
        
        $__internal_663fd642d63e34f2c41b9e0e92a799aeff83ab02fbf8a2a12856a3262841db7e->leave($__internal_663fd642d63e34f2c41b9e0e92a799aeff83ab02fbf8a2a12856a3262841db7e_prof);

    }

    // line 231
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_1b38e385f4f89bbc11b7a7d340f01debbd1c2ffd5b0b722ef9f2984a7505f917 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b38e385f4f89bbc11b7a7d340f01debbd1c2ffd5b0b722ef9f2984a7505f917->enter($__internal_1b38e385f4f89bbc11b7a7d340f01debbd1c2ffd5b0b722ef9f2984a7505f917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_1b38e385f4f89bbc11b7a7d340f01debbd1c2ffd5b0b722ef9f2984a7505f917->leave($__internal_1b38e385f4f89bbc11b7a7d340f01debbd1c2ffd5b0b722ef9f2984a7505f917_prof);

    }

    // line 235
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_a3c844ea784340e7efdc3985d7bc81f3ad812f870070d670509399d23115e611 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3c844ea784340e7efdc3985d7bc81f3ad812f870070d670509399d23115e611->enter($__internal_a3c844ea784340e7efdc3985d7bc81f3ad812f870070d670509399d23115e611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 240
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_a3c844ea784340e7efdc3985d7bc81f3ad812f870070d670509399d23115e611->leave($__internal_a3c844ea784340e7efdc3985d7bc81f3ad812f870070d670509399d23115e611_prof);

    }

    // line 243
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_ae9474b7b7c582a2592c2f6f51d68b2e44485fa9587bc1faf93e863e454d3a96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae9474b7b7c582a2592c2f6f51d68b2e44485fa9587bc1faf93e863e454d3a96->enter($__internal_ae9474b7b7c582a2592c2f6f51d68b2e44485fa9587bc1faf93e863e454d3a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 244
        echo "<div>";
        // line 245
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 246
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 247
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 248
        echo "</div>";
        
        $__internal_ae9474b7b7c582a2592c2f6f51d68b2e44485fa9587bc1faf93e863e454d3a96->leave($__internal_ae9474b7b7c582a2592c2f6f51d68b2e44485fa9587bc1faf93e863e454d3a96_prof);

    }

    // line 251
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_fc33e64f459afa4a55b82e1aade3e478d1106dc33f9ecde846b464ee5a26cb96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc33e64f459afa4a55b82e1aade3e478d1106dc33f9ecde846b464ee5a26cb96->enter($__internal_fc33e64f459afa4a55b82e1aade3e478d1106dc33f9ecde846b464ee5a26cb96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 252
        echo "<div>";
        // line 253
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 254
        echo "</div>";
        
        $__internal_fc33e64f459afa4a55b82e1aade3e478d1106dc33f9ecde846b464ee5a26cb96->leave($__internal_fc33e64f459afa4a55b82e1aade3e478d1106dc33f9ecde846b464ee5a26cb96_prof);

    }

    // line 257
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_a914808b5f34f774b1d8d2a92fbc19c4db34753b2f8841f5449d98d3368fea55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a914808b5f34f774b1d8d2a92fbc19c4db34753b2f8841f5449d98d3368fea55->enter($__internal_a914808b5f34f774b1d8d2a92fbc19c4db34753b2f8841f5449d98d3368fea55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 258
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        
        $__internal_a914808b5f34f774b1d8d2a92fbc19c4db34753b2f8841f5449d98d3368fea55->leave($__internal_a914808b5f34f774b1d8d2a92fbc19c4db34753b2f8841f5449d98d3368fea55_prof);

    }

    // line 263
    public function block_form($context, array $blocks = array())
    {
        $__internal_f1b1b3224696a530fd8ac6d85565d570c77c255f988ac4c964f8f4b88d553c69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1b1b3224696a530fd8ac6d85565d570c77c255f988ac4c964f8f4b88d553c69->enter($__internal_f1b1b3224696a530fd8ac6d85565d570c77c255f988ac4c964f8f4b88d553c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 264
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        // line 265
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 266
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        
        $__internal_f1b1b3224696a530fd8ac6d85565d570c77c255f988ac4c964f8f4b88d553c69->leave($__internal_f1b1b3224696a530fd8ac6d85565d570c77c255f988ac4c964f8f4b88d553c69_prof);

    }

    // line 269
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_981ddaf88f0abc876dee91e87ebb10da9bfef5dbe058f18f45ad4aaf2e13cbc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_981ddaf88f0abc876dee91e87ebb10da9bfef5dbe058f18f45ad4aaf2e13cbc0->enter($__internal_981ddaf88f0abc876dee91e87ebb10da9bfef5dbe058f18f45ad4aaf2e13cbc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 270
        $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "setMethodRendered", array(), "method");
        // line 271
        $context["method"] = twig_upper_filter($this->env, ($context["method"] ?? $this->getContext($context, "method")));
        // line 272
        if (twig_in_filter(($context["method"] ?? $this->getContext($context, "method")), array(0 => "GET", 1 => "POST"))) {
            // line 273
            $context["form_method"] = ($context["method"] ?? $this->getContext($context, "method"));
        } else {
            // line 275
            $context["form_method"] = "POST";
        }
        // line 277
        echo "<form name=\"";
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["form_method"] ?? $this->getContext($context, "form_method"))), "html", null, true);
        echo "\"";
        if ((($context["action"] ?? $this->getContext($context, "action")) != "")) {
            echo " action=\"";
            echo twig_escape_filter($this->env, ($context["action"] ?? $this->getContext($context, "action")), "html", null, true);
            echo "\"";
        }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
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
        if (($context["multipart"] ?? $this->getContext($context, "multipart"))) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 278
        if ((($context["form_method"] ?? $this->getContext($context, "form_method")) != ($context["method"] ?? $this->getContext($context, "method")))) {
            // line 279
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, ($context["method"] ?? $this->getContext($context, "method")), "html", null, true);
            echo "\" />";
        }
        
        $__internal_981ddaf88f0abc876dee91e87ebb10da9bfef5dbe058f18f45ad4aaf2e13cbc0->leave($__internal_981ddaf88f0abc876dee91e87ebb10da9bfef5dbe058f18f45ad4aaf2e13cbc0_prof);

    }

    // line 283
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_e9802901edd76f105e605dcbb533c1b368e176279b6ec1c47036136f84b15b14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9802901edd76f105e605dcbb533c1b368e176279b6ec1c47036136f84b15b14->enter($__internal_e9802901edd76f105e605dcbb533c1b368e176279b6ec1c47036136f84b15b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 284
        if (( !array_key_exists("render_rest", $context) || ($context["render_rest"] ?? $this->getContext($context, "render_rest")))) {
            // line 285
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        }
        // line 287
        echo "</form>";
        
        $__internal_e9802901edd76f105e605dcbb533c1b368e176279b6ec1c47036136f84b15b14->leave($__internal_e9802901edd76f105e605dcbb533c1b368e176279b6ec1c47036136f84b15b14_prof);

    }

    // line 290
    public function block_form_enctype($context, array $blocks = array())
    {
        $__internal_9ed2cc1a89d04c09e8d158bd0f197d7a98d0e2f7e8a212e329b74852d3bd9f5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ed2cc1a89d04c09e8d158bd0f197d7a98d0e2f7e8a212e329b74852d3bd9f5f->enter($__internal_9ed2cc1a89d04c09e8d158bd0f197d7a98d0e2f7e8a212e329b74852d3bd9f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_enctype"));

        // line 291
        if (($context["multipart"] ?? $this->getContext($context, "multipart"))) {
            echo "enctype=\"multipart/form-data\"";
        }
        
        $__internal_9ed2cc1a89d04c09e8d158bd0f197d7a98d0e2f7e8a212e329b74852d3bd9f5f->leave($__internal_9ed2cc1a89d04c09e8d158bd0f197d7a98d0e2f7e8a212e329b74852d3bd9f5f_prof);

    }

    // line 294
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_1d8d44c6a918e2df8ba5fdf5507fe544f923bb4bcdd2659622368a11d1066aa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d8d44c6a918e2df8ba5fdf5507fe544f923bb4bcdd2659622368a11d1066aa0->enter($__internal_1d8d44c6a918e2df8ba5fdf5507fe544f923bb4bcdd2659622368a11d1066aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 295
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 296
            echo "<ul>";
            // line 297
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 298
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 300
            echo "</ul>";
        }
        
        $__internal_1d8d44c6a918e2df8ba5fdf5507fe544f923bb4bcdd2659622368a11d1066aa0->leave($__internal_1d8d44c6a918e2df8ba5fdf5507fe544f923bb4bcdd2659622368a11d1066aa0_prof);

    }

    // line 304
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_b6c45b1249370f7301982cfbf87a5f50797c988e51fa0fe46441d6d2ddcec80e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6c45b1249370f7301982cfbf87a5f50797c988e51fa0fe46441d6d2ddcec80e->enter($__internal_b6c45b1249370f7301982cfbf87a5f50797c988e51fa0fe46441d6d2ddcec80e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 305
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 306
            if ( !$this->getAttribute($context["child"], "rendered", array())) {
                // line 307
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 310
        echo "
    ";
        // line 311
        if (( !$this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "methodRendered", array()) && (null === $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())))) {
            // line 312
            $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "setMethodRendered", array(), "method");
            // line 313
            $context["method"] = twig_upper_filter($this->env, ($context["method"] ?? $this->getContext($context, "method")));
            // line 314
            if (twig_in_filter(($context["method"] ?? $this->getContext($context, "method")), array(0 => "GET", 1 => "POST"))) {
                // line 315
                $context["form_method"] = ($context["method"] ?? $this->getContext($context, "method"));
            } else {
                // line 317
                $context["form_method"] = "POST";
            }
            // line 320
            if ((($context["form_method"] ?? $this->getContext($context, "form_method")) != ($context["method"] ?? $this->getContext($context, "method")))) {
                // line 321
                echo "<input type=\"hidden\" name=\"_method\" value=\"";
                echo twig_escape_filter($this->env, ($context["method"] ?? $this->getContext($context, "method")), "html", null, true);
                echo "\" />";
            }
        }
        
        $__internal_b6c45b1249370f7301982cfbf87a5f50797c988e51fa0fe46441d6d2ddcec80e->leave($__internal_b6c45b1249370f7301982cfbf87a5f50797c988e51fa0fe46441d6d2ddcec80e_prof);

    }

    // line 328
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_7f172039d4f353a5f3435568004ccd531def3479e85363788faa07d28520957f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f172039d4f353a5f3435568004ccd531def3479e85363788faa07d28520957f->enter($__internal_7f172039d4f353a5f3435568004ccd531def3479e85363788faa07d28520957f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 329
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 330
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_7f172039d4f353a5f3435568004ccd531def3479e85363788faa07d28520957f->leave($__internal_7f172039d4f353a5f3435568004ccd531def3479e85363788faa07d28520957f_prof);

    }

    // line 334
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_65c50baf76386eef36769b593a9a7b0ceceac1ada1abbe1790d0924ba79dc9d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65c50baf76386eef36769b593a9a7b0ceceac1ada1abbe1790d0924ba79dc9d6->enter($__internal_65c50baf76386eef36769b593a9a7b0ceceac1ada1abbe1790d0924ba79dc9d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 335
        echo "id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        // line 336
        if (($context["read_only"] ?? $this->getContext($context, "read_only"))) {
            echo " readonly=\"readonly\"";
        }
        // line 337
        if (($context["disabled"] ?? $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 338
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            echo " required=\"required\"";
        }
        // line 339
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            if ((("readonly" != $context["attrname"]) ||  !($context["read_only"] ?? $this->getContext($context, "read_only")))) {
                // line 340
                echo " ";
                // line 341
                if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                    // line 342
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
                    echo "\"";
                } elseif ((                // line 343
$context["attrvalue"] === true)) {
                    // line 344
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "\"";
                } elseif ( !(                // line 345
$context["attrvalue"] === false)) {
                    // line 346
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\"";
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_65c50baf76386eef36769b593a9a7b0ceceac1ada1abbe1790d0924ba79dc9d6->leave($__internal_65c50baf76386eef36769b593a9a7b0ceceac1ada1abbe1790d0924ba79dc9d6_prof);

    }

    // line 351
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_f58b2403d88b29d60f02e9beec6faed96182099e04ac232a76ea3bda8f6487c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f58b2403d88b29d60f02e9beec6faed96182099e04ac232a76ea3bda8f6487c8->enter($__internal_f58b2403d88b29d60f02e9beec6faed96182099e04ac232a76ea3bda8f6487c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 352
        if ( !twig_test_empty(($context["id"] ?? $this->getContext($context, "id")))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "\"";
        }
        // line 353
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 354
            echo " ";
            // line 355
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 356
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 357
$context["attrvalue"] === true)) {
                // line 358
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 359
$context["attrvalue"] === false)) {
                // line 360
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_f58b2403d88b29d60f02e9beec6faed96182099e04ac232a76ea3bda8f6487c8->leave($__internal_f58b2403d88b29d60f02e9beec6faed96182099e04ac232a76ea3bda8f6487c8_prof);

    }

    // line 365
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_e1436596408be92eba57222ba22c5b07ecb7bd728c0e4290ff2e9393293db932 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1436596408be92eba57222ba22c5b07ecb7bd728c0e4290ff2e9393293db932->enter($__internal_e1436596408be92eba57222ba22c5b07ecb7bd728c0e4290ff2e9393293db932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 366
        echo "id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        if (($context["disabled"] ?? $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 367
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 368
            echo " ";
            // line 369
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 370
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 371
$context["attrvalue"] === true)) {
                // line 372
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 373
$context["attrvalue"] === false)) {
                // line 374
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_e1436596408be92eba57222ba22c5b07ecb7bd728c0e4290ff2e9393293db932->leave($__internal_e1436596408be92eba57222ba22c5b07ecb7bd728c0e4290ff2e9393293db932_prof);

    }

    // line 379
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_6e9a87dde7b433a6b6ab16c19430db593cf569f74f629dda90c7fe31079443bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e9a87dde7b433a6b6ab16c19430db593cf569f74f629dda90c7fe31079443bf->enter($__internal_6e9a87dde7b433a6b6ab16c19430db593cf569f74f629dda90c7fe31079443bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        // line 380
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 381
            echo " ";
            // line 382
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 383
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 384
$context["attrvalue"] === true)) {
                // line 385
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 386
$context["attrvalue"] === false)) {
                // line 387
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6e9a87dde7b433a6b6ab16c19430db593cf569f74f629dda90c7fe31079443bf->leave($__internal_6e9a87dde7b433a6b6ab16c19430db593cf569f74f629dda90c7fe31079443bf_prof);

    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1319 => 387,  1317 => 386,  1312 => 385,  1310 => 384,  1305 => 383,  1303 => 382,  1301 => 381,  1297 => 380,  1291 => 379,  1276 => 374,  1274 => 373,  1269 => 372,  1267 => 371,  1262 => 370,  1260 => 369,  1258 => 368,  1254 => 367,  1245 => 366,  1239 => 365,  1224 => 360,  1222 => 359,  1217 => 358,  1215 => 357,  1210 => 356,  1208 => 355,  1206 => 354,  1202 => 353,  1196 => 352,  1190 => 351,  1174 => 346,  1172 => 345,  1167 => 344,  1165 => 343,  1160 => 342,  1158 => 341,  1156 => 340,  1151 => 339,  1147 => 338,  1143 => 337,  1139 => 336,  1133 => 335,  1127 => 334,  1116 => 330,  1112 => 329,  1106 => 328,  1095 => 321,  1093 => 320,  1090 => 317,  1087 => 315,  1085 => 314,  1083 => 313,  1081 => 312,  1079 => 311,  1076 => 310,  1069 => 307,  1067 => 306,  1063 => 305,  1057 => 304,  1049 => 300,  1041 => 298,  1037 => 297,  1035 => 296,  1033 => 295,  1027 => 294,  1018 => 291,  1012 => 290,  1005 => 287,  1002 => 285,  1000 => 284,  994 => 283,  984 => 279,  982 => 278,  955 => 277,  952 => 275,  949 => 273,  947 => 272,  945 => 271,  943 => 270,  937 => 269,  930 => 266,  928 => 265,  926 => 264,  920 => 263,  913 => 258,  907 => 257,  900 => 254,  898 => 253,  896 => 252,  890 => 251,  883 => 248,  881 => 247,  879 => 246,  877 => 245,  875 => 244,  869 => 243,  862 => 240,  856 => 235,  845 => 231,  822 => 227,  818 => 224,  815 => 221,  814 => 220,  813 => 219,  811 => 218,  809 => 217,  806 => 215,  804 => 214,  801 => 212,  799 => 211,  797 => 210,  791 => 209,  784 => 204,  782 => 203,  776 => 202,  769 => 199,  767 => 198,  761 => 197,  748 => 194,  744 => 191,  741 => 188,  740 => 187,  739 => 186,  737 => 185,  735 => 184,  729 => 183,  722 => 180,  720 => 179,  714 => 178,  707 => 175,  705 => 174,  699 => 173,  692 => 170,  690 => 169,  684 => 168,  677 => 165,  675 => 164,  669 => 163,  661 => 160,  659 => 159,  653 => 158,  646 => 155,  644 => 154,  638 => 153,  631 => 150,  629 => 149,  623 => 148,  616 => 145,  610 => 144,  603 => 141,  601 => 140,  595 => 139,  588 => 136,  586 => 135,  580 => 133,  572 => 129,  562 => 128,  557 => 127,  555 => 126,  552 => 124,  550 => 123,  544 => 122,  536 => 118,  534 => 116,  533 => 115,  532 => 114,  531 => 113,  527 => 112,  524 => 110,  522 => 109,  516 => 108,  508 => 104,  506 => 103,  504 => 102,  502 => 101,  500 => 100,  496 => 99,  493 => 97,  491 => 96,  485 => 95,  468 => 92,  462 => 91,  445 => 88,  439 => 87,  406 => 82,  403 => 80,  401 => 79,  399 => 78,  394 => 77,  392 => 76,  375 => 75,  369 => 74,  362 => 71,  360 => 70,  358 => 69,  352 => 66,  350 => 65,  348 => 64,  346 => 63,  344 => 62,  335 => 60,  333 => 59,  326 => 58,  323 => 56,  321 => 55,  315 => 54,  308 => 51,  302 => 49,  300 => 48,  296 => 47,  292 => 46,  286 => 45,  278 => 41,  275 => 39,  273 => 38,  267 => 37,  256 => 34,  250 => 33,  243 => 30,  240 => 28,  238 => 27,  232 => 26,  225 => 23,  223 => 22,  221 => 21,  218 => 19,  216 => 18,  212 => 17,  206 => 16,  189 => 13,  187 => 12,  181 => 11,  173 => 7,  170 => 5,  168 => 4,  162 => 3,  155 => 379,  153 => 365,  151 => 351,  149 => 334,  147 => 328,  144 => 325,  142 => 304,  140 => 294,  138 => 290,  136 => 283,  134 => 269,  132 => 263,  130 => 257,  128 => 251,  126 => 243,  124 => 235,  122 => 231,  120 => 209,  118 => 202,  116 => 197,  114 => 183,  112 => 178,  110 => 173,  108 => 168,  106 => 163,  104 => 158,  102 => 153,  100 => 148,  98 => 144,  96 => 139,  94 => 133,  92 => 122,  90 => 108,  88 => 95,  86 => 91,  84 => 87,  82 => 74,  80 => 54,  78 => 45,  76 => 37,  74 => 33,  72 => 26,  70 => 16,  68 => 11,  66 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Widgets #}

{%- block form_widget -%}
    {% if compound %}
        {{- block('form_widget_compound') -}}
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock form_widget -%}

{%- block form_widget_simple -%}
    {%- set type = type|default('text') -%}
    <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
{%- endblock form_widget_simple -%}

{%- block form_widget_compound -%}
    <div {{ block('widget_container_attributes') }}>
        {%- if form.parent is empty -%}
            {{ form_errors(form) }}
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </div>
{%- endblock form_widget_compound -%}

{%- block collection_widget -%}
    {% if prototype is defined %}
        {%- set attr = attr|merge({'data-prototype': form_row(prototype) }) -%}
    {% endif %}
    {{- block('form_widget') -}}
{%- endblock collection_widget -%}

{%- block textarea_widget -%}
    <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>
{%- endblock textarea_widget -%}

{%- block choice_widget -%}
    {% if expanded %}
        {{- block('choice_widget_expanded') -}}
    {% else %}
        {{- block('choice_widget_collapsed') -}}
    {% endif %}
{%- endblock choice_widget -%}

{%- block choice_widget_expanded -%}
    <div {{ block('widget_container_attributes') }}>
    {%- for child in form %}
        {{- form_widget(child) -}}
        {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}
    {% endfor -%}
    </div>
{%- endblock choice_widget_expanded -%}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
        {%- if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ placeholder != '' ? (translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain)) }}</option>
        {%- endif -%}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {%- if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif -%}
        {%- endif -%}
        {%- set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed -%}

{%- block choice_widget_options -%}
    {% for group_label, choice in options %}
        {%- if choice is iterable -%}
            <optgroup label=\"{{ choice_translation_domain is same as(false) ? group_label : group_label|trans({}, choice_translation_domain) }}\">
                {% set options = choice %}
                {{- block('choice_widget_options') -}}
            </optgroup>
        {%- else -%}
            <option value=\"{{ choice.value }}\"{% if choice.attr %} {% set attr = choice.attr %}{{ block('attributes') }}{% endif %}{% if choice is selectedchoice(value) %} selected=\"selected\"{% endif %}>{{ choice_translation_domain is same as(false) ? choice.label : choice.label|trans({}, choice_translation_domain) }}</option>
        {%- endif -%}
    {% endfor %}
{%- endblock choice_widget_options -%}

{%- block checkbox_widget -%}
    <input type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock checkbox_widget -%}

{%- block radio_widget -%}
    <input type=\"radio\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock radio_widget -%}

{%- block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date) -}}
            {{- form_widget(form.time) -}}
        </div>
    {%- endif -%}
{%- endblock datetime_widget -%}

{%- block date_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- date_pattern|replace({
                '{{ year }}':  form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}':   form_widget(form.day),
            })|raw -}}
        </div>
    {%- endif -%}
{%- endblock date_widget -%}

{%- block time_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        {%- set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} -%}
        <div {{ block('widget_container_attributes') }}>
            {{ form_widget(form.hour, vars) }}{% if with_minutes %}:{{ form_widget(form.minute, vars) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second, vars) }}{% endif %}
        </div>
    {%- endif -%}
{%- endblock time_widget -%}

{%- block number_widget -%}
    {# type=\"number\" doesn't work with floats #}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }}
{%- endblock number_widget -%}

{%- block integer_widget -%}
    {%- set type = type|default('number') -%}
    {{ block('form_widget_simple') }}
{%- endblock integer_widget -%}

{%- block money_widget -%}
    {{ money_pattern|replace({ '{{ widget }}': block('form_widget_simple') })|raw }}
{%- endblock money_widget -%}

{%- block url_widget -%}
    {%- set type = type|default('url') -%}
    {{ block('form_widget_simple') }}
{%- endblock url_widget -%}

{%- block search_widget -%}
    {%- set type = type|default('search') -%}
    {{ block('form_widget_simple') }}
{%- endblock search_widget -%}

{%- block percent_widget -%}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }} %
{%- endblock percent_widget -%}

{%- block password_widget -%}
    {%- set type = type|default('password') -%}
    {{ block('form_widget_simple') }}
{%- endblock password_widget -%}

{%- block hidden_widget -%}
    {%- set type = type|default('hidden') -%}
    {{ block('form_widget_simple') }}
{%- endblock hidden_widget -%}

{%- block email_widget -%}
    {%- set type = type|default('email') -%}
    {{ block('form_widget_simple') }}
{%- endblock email_widget -%}

{%- block range_widget -%}
    {% set type = type|default('range') %}
    {{- block('form_widget_simple') -}}
{%- endblock range_widget %}

{%- block button_widget -%}
    {%- if label is empty -%}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {%- endif -%}
    <button type=\"{{ type|default('button') }}\" {{ block('button_attributes') }}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</button>
{%- endblock button_widget -%}

{%- block submit_widget -%}
    {%- set type = type|default('submit') -%}
    {{ block('button_widget') }}
{%- endblock submit_widget -%}

{%- block reset_widget -%}
    {%- set type = type|default('reset') -%}
    {{ block('button_widget') }}
{%- endblock reset_widget -%}

{# Labels #}

{%- block form_label -%}
    {% if label is not same as(false) -%}
        {% if not compound -%}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</label>
    {%- endif -%}
{%- endblock form_label -%}

{%- block button_label -%}{%- endblock -%}

{# Rows #}

{%- block repeated_row -%}
    {#
    No need to render the errors here, as all errors are mapped
    to the first child (see RepeatedTypeValidatorExtension).
    #}
    {{- block('form_rows') -}}
{%- endblock repeated_row -%}

{%- block form_row -%}
    <div>
        {{- form_label(form) -}}
        {{- form_errors(form) -}}
        {{- form_widget(form) -}}
    </div>
{%- endblock form_row -%}

{%- block button_row -%}
    <div>
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row -%}

{%- block hidden_row -%}
    {{ form_widget(form) }}
{%- endblock hidden_row -%}

{# Misc #}

{%- block form -%}
    {{ form_start(form) }}
        {{- form_widget(form) -}}
    {{ form_end(form) }}
{%- endblock form -%}

{%- block form_start -%}
    {%- do form.setMethodRendered() -%}
    {% set method = method|upper %}
    {%- if method in [\"GET\", \"POST\"] -%}
        {% set form_method = method %}
    {%- else -%}
        {% set form_method = \"POST\" %}
    {%- endif -%}
    <form name=\"{{ name }}\" method=\"{{ form_method|lower }}\"{% if action != '' %} action=\"{{ action }}\"{% endif %}{% for attrname, attrvalue in attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}{% if multipart %} enctype=\"multipart/form-data\"{% endif %}>
    {%- if form_method != method -%}
        <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
    {%- endif -%}
{%- endblock form_start -%}

{%- block form_end -%}
    {%- if not render_rest is defined or render_rest -%}
        {{ form_rest(form) }}
    {%- endif -%}
    </form>
{%- endblock form_end -%}

{%- block form_enctype -%}
    {% if multipart %}enctype=\"multipart/form-data\"{% endif %}
{%- endblock form_enctype -%}

{%- block form_errors -%}
    {%- if errors|length > 0 -%}
    <ul>
        {%- for error in errors -%}
            <li>{{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {%- endif -%}
{%- endblock form_errors -%}

{%- block form_rest -%}
    {% for child in form -%}
        {% if not child.rendered %}
            {{- form_row(child) -}}
        {% endif %}
    {%- endfor %}

    {% if not form.methodRendered and form.parent is null %}
        {%- do form.setMethodRendered() -%}
        {% set method = method|upper %}
        {%- if method in [\"GET\", \"POST\"] -%}
            {% set form_method = method %}
        {%- else -%}
            {% set form_method = \"POST\" %}
        {%- endif -%}

        {%- if form_method != method -%}
            <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
        {%- endif -%}
    {% endif %}
{% endblock form_rest %}

{# Support #}

{%- block form_rows -%}
    {% for child in form %}
        {{- form_row(child) -}}
    {% endfor %}
{%- endblock form_rows -%}

{%- block widget_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"
    {%- if read_only %} readonly=\"readonly\"{% endif -%}
    {%- if disabled %} disabled=\"disabled\"{% endif -%}
    {%- if required %} required=\"required\"{% endif -%}
    {%- for attrname, attrvalue in attr if 'readonly' != attrname or not read_only -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock widget_attributes -%}

{%- block widget_container_attributes -%}
    {%- if id is not empty %}id=\"{{ id }}\"{% endif -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock widget_container_attributes -%}

{%- block button_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"{% if disabled %} disabled=\"disabled\"{% endif -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock button_attributes -%}

{% block attributes -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock attributes -%}
", "form_div_layout.html.twig", "/home/ubuntu/Escritorio/todo/TFG-LRR2/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_div_layout.html.twig");
    }
}
