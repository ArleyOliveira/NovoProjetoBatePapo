<?php

/* MopaBootstrapBundle:Form:fields.html.twig */
class __TwigTemplate_ef9a6e4d0458900eba6bb602fcc4d1b22eaf8efbd39d9bd5c53ad43016f81d45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "MopaBootstrapBundle:Form:fields.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'button_attributes' => array($this, 'block_button_attributes'),
                'button_widget' => array($this, 'block_button_widget'),
                'button_row' => array($this, 'block_button_row'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
                'form_tabs' => array($this, 'block_form_tabs'),
                'tabs_widget' => array($this, 'block_tabs_widget'),
                'form_tab' => array($this, 'block_form_tab'),
                'collection_widget' => array($this, 'block_collection_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'file_widget' => array($this, 'block_file_widget'),
                'form_legend' => array($this, 'block_form_legend'),
                'form_label' => array($this, 'block_form_label'),
                'help_label' => array($this, 'block_help_label'),
                'help_label_tooltip' => array($this, 'block_help_label_tooltip'),
                'help_block_tooltip' => array($this, 'block_help_block_tooltip'),
                'help_label_popover' => array($this, 'block_help_label_popover'),
                'help_block_popover' => array($this, 'block_help_block_popover'),
                'form_actions_widget' => array($this, 'block_form_actions_widget'),
                'form_actions_row' => array($this, 'block_form_actions_row'),
                'form_rows_visible' => array($this, 'block_form_rows_visible'),
                'form_row' => array($this, 'block_form_row'),
                'form_message' => array($this, 'block_form_message'),
                'form_help' => array($this, 'block_form_help'),
                'form_widget_add_btn' => array($this, 'block_form_widget_add_btn'),
                'form_widget_remove_btn' => array($this, 'block_form_widget_remove_btn'),
                'collection_button' => array($this, 'block_collection_button'),
                'label_asterisk' => array($this, 'block_label_asterisk'),
                'widget_addon' => array($this, 'block_widget_addon'),
                'widget_btns' => array($this, 'block_widget_btns'),
                'form_errors' => array($this, 'block_form_errors'),
                'error_type' => array($this, 'block_error_type'),
                'widget_form_group_start' => array($this, 'block_widget_form_group_start'),
                'help_widget_popover' => array($this, 'block_help_widget_popover'),
                'widget_form_group_end' => array($this, 'block_widget_form_group_end'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4e0a6189caa3eba5da3ccf509fa86dfd34d732c8f2a58d9f82cf72c4bdf1cd67 = $this->env->getExtension("native_profiler");
        $__internal_4e0a6189caa3eba5da3ccf509fa86dfd34d732c8f2a58d9f82cf72c4bdf1cd67->enter($__internal_4e0a6189caa3eba5da3ccf509fa86dfd34d732c8f2a58d9f82cf72c4bdf1cd67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MopaBootstrapBundle:Form:fields.html.twig"));

        // line 2
        echo "
";
        // line 4
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('button_widget', $context, $blocks);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('button_row', $context, $blocks);
        // line 45
        echo "
";
        // line 47
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 103
        echo "
";
        // line 104
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 129
        echo "
";
        // line 130
        $this->displayBlock('form_tabs', $context, $blocks);
        // line 135
        echo "
";
        // line 136
        $this->displayBlock('tabs_widget', $context, $blocks);
        // line 151
        echo "
";
        // line 152
        $this->displayBlock('form_tab', $context, $blocks);
        // line 158
        echo "
";
        // line 159
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 189
        echo "
";
        // line 190
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 198
        echo "
";
        // line 199
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 239
        echo "
";
        // line 240
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 284
        echo "
";
        // line 285
        $this->displayBlock('date_widget', $context, $blocks);
        // line 317
        echo "
";
        // line 318
        $this->displayBlock('time_widget', $context, $blocks);
        // line 352
        echo "
";
        // line 353
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 384
        echo "
";
        // line 385
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 391
        echo "
";
        // line 392
        $this->displayBlock('money_widget', $context, $blocks);
        // line 398
        echo "
";
        // line 399
        $this->displayBlock('file_widget', $context, $blocks);
        // line 415
        echo "
";
        // line 417
        echo "
";
        // line 418
        $this->displayBlock('form_legend', $context, $blocks);
        // line 433
        echo "
";
        // line 434
        $this->displayBlock('form_label', $context, $blocks);
        // line 482
        echo "
";
        // line 483
        $this->displayBlock('help_label', $context, $blocks);
        // line 486
        echo "
";
        // line 487
        $this->displayBlock('help_label_tooltip', $context, $blocks);
        // line 499
        echo "
";
        // line 500
        $this->displayBlock('help_block_tooltip', $context, $blocks);
        // line 504
        echo "
";
        // line 505
        $this->displayBlock('help_label_popover', $context, $blocks);
        // line 517
        echo "
";
        // line 518
        $this->displayBlock('help_block_popover', $context, $blocks);
        // line 522
        echo "
";
        // line 523
        $this->displayBlock('form_actions_widget', $context, $blocks);
        // line 528
        echo "
";
        // line 530
        $this->displayBlock('form_actions_row', $context, $blocks);
        // line 533
        echo "
";
        // line 534
        $this->displayBlock('form_rows_visible', $context, $blocks);
        // line 548
        echo "
";
        // line 549
        $this->displayBlock('form_row', $context, $blocks);
        // line 584
        echo "
";
        // line 586
        echo "
";
        // line 587
        $this->displayBlock('form_message', $context, $blocks);
        // line 596
        echo "
";
        // line 598
        echo "
";
        // line 599
        $this->displayBlock('form_help', $context, $blocks);
        // line 610
        echo "
";
        // line 611
        $this->displayBlock('form_widget_add_btn', $context, $blocks);
        // line 620
        echo "
";
        // line 621
        $this->displayBlock('form_widget_remove_btn', $context, $blocks);
        // line 642
        echo "
";
        // line 643
        $this->displayBlock('collection_button', $context, $blocks);
        // line 654
        echo "
";
        // line 655
        $this->displayBlock('label_asterisk', $context, $blocks);
        // line 662
        echo "
";
        // line 663
        $this->displayBlock('widget_addon', $context, $blocks);
        // line 670
        echo "
";
        // line 671
        $this->displayBlock('widget_btns', $context, $blocks);
        // line 684
        echo "
";
        // line 686
        echo "
";
        // line 687
        $this->displayBlock('form_errors', $context, $blocks);
        // line 713
        echo "
";
        // line 715
        echo "
";
        // line 716
        $this->displayBlock('error_type', $context, $blocks);
        // line 727
        echo "
";
        // line 729
        echo "
";
        // line 730
        $this->displayBlock('widget_form_group_start', $context, $blocks);
        // line 767
        echo "
";
        // line 768
        $this->displayBlock('help_widget_popover', $context, $blocks);
        // line 775
        echo "
";
        // line 776
        $this->displayBlock('widget_form_group_end', $context, $blocks);
        
        $__internal_4e0a6189caa3eba5da3ccf509fa86dfd34d732c8f2a58d9f82cf72c4bdf1cd67->leave($__internal_4e0a6189caa3eba5da3ccf509fa86dfd34d732c8f2a58d9f82cf72c4bdf1cd67_prof);

    }

    // line 4
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_43babbfac06e2b44172911b6dc374676cc17643c8077d93893c7e97f8ed47f47 = $this->env->getExtension("native_profiler");
        $__internal_43babbfac06e2b44172911b6dc374676cc17643c8077d93893c7e97f8ed47f47->enter($__internal_43babbfac06e2b44172911b6dc374676cc17643c8077d93893c7e97f8ed47f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 5
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ("btn " . (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")))));
        // line 6
        echo "    ";
        $this->displayParentBlock("button_attributes", $context, $blocks);
        echo "
";
        
        $__internal_43babbfac06e2b44172911b6dc374676cc17643c8077d93893c7e97f8ed47f47->leave($__internal_43babbfac06e2b44172911b6dc374676cc17643c8077d93893c7e97f8ed47f47_prof);

    }

    // line 9
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_560134f0cf97812949dfd2eb473f321dd129afde6b4ceb257427d51729b87c32 = $this->env->getExtension("native_profiler");
        $__internal_560134f0cf97812949dfd2eb473f321dd129afde6b4ceb257427d51729b87c32->enter($__internal_560134f0cf97812949dfd2eb473f321dd129afde6b4ceb257427d51729b87c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 10
        ob_start();
        // line 11
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 12
            if ((array_key_exists("label_format", $context) &&  !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format"))))) {
                // line 13
                $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                 // line 14
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                 // line 15
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            } else {
                // line 18
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            }
        }
        // line 21
        echo "    <button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">
    ";
        // line 22
        if ( !twig_test_empty((isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")))) {
            // line 23
            echo "            ";
            echo $this->env->getExtension('mopa_bootstrap_icon')->renderIcon($this->env, (isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), ((array_key_exists("icon_inverted", $context)) ? (_twig_default_filter((isset($context["icon_inverted"]) ? $context["icon_inverted"] : $this->getContext($context, "icon_inverted")), false)) : (false)));
            echo "
    ";
        }
        // line 25
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "</button>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_560134f0cf97812949dfd2eb473f321dd129afde6b4ceb257427d51729b87c32->leave($__internal_560134f0cf97812949dfd2eb473f321dd129afde6b4ceb257427d51729b87c32_prof);

    }

    // line 29
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_df078ba70a920c38d98dc4c04ff924e994639ae19ff939613697db3fba85c654 = $this->env->getExtension("native_profiler");
        $__internal_df078ba70a920c38d98dc4c04ff924e994639ae19ff939613697db3fba85c654->enter($__internal_df078ba70a920c38d98dc4c04ff924e994639ae19ff939613697db3fba85c654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 30
        echo "    ";
        ob_start();
        // line 31
        echo "        ";
        if ((array_key_exists("button_offset", $context) &&  !twig_test_empty((isset($context["button_offset"]) ? $context["button_offset"] : $this->getContext($context, "button_offset"))))) {
            // line 32
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "class" => (isset($context["button_offset"]) ? $context["button_offset"] : $this->getContext($context, "button_offset"))));
            // line 33
            echo "            <div class=\"form-group\">
                <div ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
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
            echo ">
                ";
            // line 35
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "
                </div>
            </div>
        ";
        } else {
            // line 39
            echo "            <div>
                ";
            // line 40
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "
            </div>
        ";
        }
        // line 43
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_df078ba70a920c38d98dc4c04ff924e994639ae19ff939613697db3fba85c654->leave($__internal_df078ba70a920c38d98dc4c04ff924e994639ae19ff939613697db3fba85c654_prof);

    }

    // line 47
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_7d4194b4ea12d64e00a00dd3c5abff8e8c40a9578d479f4d475a140df7d69f28 = $this->env->getExtension("native_profiler");
        $__internal_7d4194b4ea12d64e00a00dd3c5abff8e8c40a9578d479f4d475a140df7d69f28->enter($__internal_7d4194b4ea12d64e00a00dd3c5abff8e8c40a9578d479f4d475a140df7d69f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 48
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 49
        echo "    ";
        if ((((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) != "hidden") && ( !(null === ((array_key_exists("widget_addon_prepend", $context)) ? (_twig_default_filter((isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : $this->getContext($context, "widget_addon_prepend")), null)) : (null))) ||  !(null === ((array_key_exists("widget_addon_append", $context)) ? (_twig_default_filter((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : $this->getContext($context, "widget_addon_append")), null)) : (null)))))) {
            // line 50
            echo "    <div class=\"input-group\">
        ";
            // line 51
            if ( !(null === ((array_key_exists("widget_addon_prepend", $context)) ? (_twig_default_filter((isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : $this->getContext($context, "widget_addon_prepend")), null)) : (null)))) {
                // line 52
                echo "            ";
                $context["widget_addon"] = (isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : $this->getContext($context, "widget_addon_prepend"));
                // line 53
                echo "            ";
                $this->displayBlock("widget_addon", $context, $blocks);
                echo "
        ";
            }
            // line 55
            echo "    ";
        }
        // line 56
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => (((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["widget_form_control_class"]) ? $context["widget_form_control_class"] : $this->getContext($context, "widget_form_control_class")))));
        // line 57
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        echo "
    ";
        // line 58
        if ((((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) != "hidden") && ( !(null === ((array_key_exists("widget_addon_prepend", $context)) ? (_twig_default_filter((isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : $this->getContext($context, "widget_addon_prepend")), null)) : (null))) ||  !(null === ((array_key_exists("widget_addon_append", $context)) ? (_twig_default_filter((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : $this->getContext($context, "widget_addon_append")), null)) : (null)))))) {
            // line 59
            echo "        ";
            if ( !(null === ((array_key_exists("widget_addon_append", $context)) ? (_twig_default_filter((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : $this->getContext($context, "widget_addon_append")), null)) : (null)))) {
                // line 60
                echo "        ";
                $context["widget_addon"] = (isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : $this->getContext($context, "widget_addon_append"));
                // line 61
                echo "        ";
                $this->displayBlock("widget_addon", $context, $blocks);
                echo "
        ";
            }
            // line 63
            echo "    </div>
    ";
        }
        
        $__internal_7d4194b4ea12d64e00a00dd3c5abff8e8c40a9578d479f4d475a140df7d69f28->leave($__internal_7d4194b4ea12d64e00a00dd3c5abff8e8c40a9578d479f4d475a140df7d69f28_prof);

    }

    // line 67
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_702a286a418741d8d2042662007eddbfa585d549e43dca6cf8e6ab975d737597 = $this->env->getExtension("native_profiler");
        $__internal_702a286a418741d8d2042662007eddbfa585d549e43dca6cf8e6ab975d737597->enter($__internal_702a286a418741d8d2042662007eddbfa585d549e43dca6cf8e6ab975d737597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 68
        ob_start();
        // line 69
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 70
        echo "    ";
        if ((((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) != "hidden") && ((( !(null === ((array_key_exists("widget_addon_prepend", $context)) ? (_twig_default_filter((isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : $this->getContext($context, "widget_addon_prepend")), null)) : (null))) ||  !(null === ((array_key_exists("widget_addon_append", $context)) ? (_twig_default_filter((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : $this->getContext($context, "widget_addon_append")), null)) : (null)))) ||  !(null === ((array_key_exists("widget_btn_prepend", $context)) ? (_twig_default_filter((isset($context["widget_btn_prepend"]) ? $context["widget_btn_prepend"] : $this->getContext($context, "widget_btn_prepend")), null)) : (null)))) ||  !(null === ((array_key_exists("widget_btn_append", $context)) ? (_twig_default_filter((isset($context["widget_btn_append"]) ? $context["widget_btn_append"] : $this->getContext($context, "widget_btn_append")), null)) : (null)))))) {
            // line 71
            echo "    <div class=\"input-group\">
        ";
            // line 72
            if ( !(null === ((array_key_exists("widget_btn_prepend", $context)) ? (_twig_default_filter((isset($context["widget_btn_prepend"]) ? $context["widget_btn_prepend"] : $this->getContext($context, "widget_btn_prepend")), null)) : (null)))) {
                // line 73
                echo "            ";
                $context["widget_btns"] = (isset($context["widget_btn_prepend"]) ? $context["widget_btn_prepend"] : $this->getContext($context, "widget_btn_prepend"));
                // line 74
                echo "            ";
                $this->displayBlock("widget_btns", $context, $blocks);
                echo "
        ";
            }
            // line 76
            echo "        ";
            if ( !(null === ((array_key_exists("widget_addon_prepend", $context)) ? (_twig_default_filter((isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : $this->getContext($context, "widget_addon_prepend")), null)) : (null)))) {
                // line 77
                echo "            ";
                $context["widget_addon"] = (isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : $this->getContext($context, "widget_addon_prepend"));
                // line 78
                echo "            ";
                $this->displayBlock("widget_addon", $context, $blocks);
                echo "
        ";
            }
            // line 80
            echo "    ";
        }
        // line 81
        echo "    ";
        if ( !((array_key_exists("widget_remove_btn", $context)) ? (_twig_default_filter((isset($context["widget_remove_btn"]) ? $context["widget_remove_btn"] : $this->getContext($context, "widget_remove_btn")), null)) : (null))) {
            // line 82
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " not-removable")));
            // line 83
            echo "    ";
        }
        // line 84
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim((((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["widget_form_control_class"]) ? $context["widget_form_control_class"] : $this->getContext($context, "widget_form_control_class"))))));
        // line 85
        echo "    ";
        if (((isset($context["static_text"]) ? $context["static_text"] : $this->getContext($context, "static_text")) === true)) {
            // line 86
            echo "        <p class=\"form-control-static\">";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "</p>
    ";
        } else {
            // line 88
            echo "        ";
            $this->displayParentBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        }
        // line 90
        echo "    ";
        if ((((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) != "hidden") && ((( !(null === ((array_key_exists("widget_addon_prepend", $context)) ? (_twig_default_filter((isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : $this->getContext($context, "widget_addon_prepend")), null)) : (null))) ||  !(null === ((array_key_exists("widget_addon_append", $context)) ? (_twig_default_filter((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : $this->getContext($context, "widget_addon_append")), null)) : (null)))) ||  !(null === ((array_key_exists("widget_btn_prepend", $context)) ? (_twig_default_filter((isset($context["widget_btn_prepend"]) ? $context["widget_btn_prepend"] : $this->getContext($context, "widget_btn_prepend")), null)) : (null)))) ||  !(null === ((array_key_exists("widget_btn_append", $context)) ? (_twig_default_filter((isset($context["widget_btn_append"]) ? $context["widget_btn_append"] : $this->getContext($context, "widget_btn_append")), null)) : (null)))))) {
            // line 91
            echo "        ";
            if ( !(null === ((array_key_exists("widget_addon_append", $context)) ? (_twig_default_filter((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : $this->getContext($context, "widget_addon_append")), null)) : (null)))) {
                // line 92
                echo "            ";
                $context["widget_addon"] = (isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : $this->getContext($context, "widget_addon_append"));
                // line 93
                echo "            ";
                $this->displayBlock("widget_addon", $context, $blocks);
                echo "
        ";
            }
            // line 95
            echo "        ";
            if ( !(null === ((array_key_exists("widget_btn_append", $context)) ? (_twig_default_filter((isset($context["widget_btn_append"]) ? $context["widget_btn_append"] : $this->getContext($context, "widget_btn_append")), null)) : (null)))) {
                // line 96
                echo "            ";
                $context["widget_btns"] = (isset($context["widget_btn_append"]) ? $context["widget_btn_append"] : $this->getContext($context, "widget_btn_append"));
                // line 97
                echo "            ";
                $this->displayBlock("widget_btns", $context, $blocks);
                echo "
        ";
            }
            // line 99
            echo "    </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_702a286a418741d8d2042662007eddbfa585d549e43dca6cf8e6ab975d737597->leave($__internal_702a286a418741d8d2042662007eddbfa585d549e43dca6cf8e6ab975d737597_prof);

    }

    // line 104
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_397ce45e60bab39987abe7d718d5b178e57e0e9a222bc743605c3252fabf8d4a = $this->env->getExtension("native_profiler");
        $__internal_397ce45e60bab39987abe7d718d5b178e57e0e9a222bc743605c3252fabf8d4a->enter($__internal_397ce45e60bab39987abe7d718d5b178e57e0e9a222bc743605c3252fabf8d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 105
        ob_start();
        // line 106
        echo "    ";
        if (($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()) == null)) {
            // line 107
            echo "        ";
            if ((isset($context["render_fieldset"]) ? $context["render_fieldset"] : $this->getContext($context, "render_fieldset"))) {
                echo "<fieldset>";
            }
            // line 108
            echo "        ";
            if ((isset($context["show_legend"]) ? $context["show_legend"] : $this->getContext($context, "show_legend"))) {
                $this->displayBlock("form_legend", $context, $blocks);
            }
            // line 109
            echo "    ";
        }
        // line 110
        echo "
    ";
        // line 111
        if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "tabbed", array())) {
            // line 112
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'tabs');
            echo "
        <div class=\"tab-content\">
    ";
        }
        // line 115
        echo "
    ";
        // line 116
        $this->displayBlock("form_rows_visible", $context, $blocks);
        echo "

    ";
        // line 118
        if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "tabbed", array())) {
            // line 119
            echo "        </div>
    ";
        }
        // line 121
        echo "
    ";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

    ";
        // line 124
        if (($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()) == null)) {
            // line 125
            echo "        ";
            if ((isset($context["render_fieldset"]) ? $context["render_fieldset"] : $this->getContext($context, "render_fieldset"))) {
                echo "</fieldset>";
            }
            // line 126
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_397ce45e60bab39987abe7d718d5b178e57e0e9a222bc743605c3252fabf8d4a->leave($__internal_397ce45e60bab39987abe7d718d5b178e57e0e9a222bc743605c3252fabf8d4a_prof);

    }

    // line 130
    public function block_form_tabs($context, array $blocks = array())
    {
        $__internal_33b89ab7f31b9db15996162a572de104812d13866bff3e529ff53ecdbc272940 = $this->env->getExtension("native_profiler");
        $__internal_33b89ab7f31b9db15996162a572de104812d13866bff3e529ff53ecdbc272940->enter($__internal_33b89ab7f31b9db15996162a572de104812d13866bff3e529ff53ecdbc272940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_tabs"));

        // line 131
        if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "tabsView", array(), "any", true, true)) {
            // line 132
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "tabsView", array()), 'widget');
            echo "
";
        }
        
        $__internal_33b89ab7f31b9db15996162a572de104812d13866bff3e529ff53ecdbc272940->leave($__internal_33b89ab7f31b9db15996162a572de104812d13866bff3e529ff53ecdbc272940_prof);

    }

    // line 136
    public function block_tabs_widget($context, array $blocks = array())
    {
        $__internal_4e05728ac3f61124a4669449fa0d5e23debf1399eef12004be75abcc48505e17 = $this->env->getExtension("native_profiler");
        $__internal_4e05728ac3f61124a4669449fa0d5e23debf1399eef12004be75abcc48505e17->enter($__internal_4e05728ac3f61124a4669449fa0d5e23debf1399eef12004be75abcc48505e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabs_widget"));

        // line 137
        ob_start();
        // line 138
        echo "<ul class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "attr", array()), "class", array()), "html", null, true);
        echo "\">
    ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "tabs", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 140
            echo "        ";
            $context["class"] = ((($this->getAttribute($context["tab"], "active", array())) ? ("active ") : ("")) . (($this->getAttribute($context["tab"], "disabled", array())) ? ("disabled") : ("")));
            // line 141
            echo "        <li";
            if ( !twig_test_empty(trim((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class"))))) {
                echo " class=\"";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
                echo "\"";
            }
            echo ">
            <a data-toggle=\"tab\" href=\"#";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute($context["tab"], "id", array()), "html", null, true);
            echo "\">
                ";
            // line 143
            if ($this->getAttribute($context["tab"], "icon", array())) {
                echo $this->env->getExtension('mopa_bootstrap_icon')->renderIcon($this->env, $this->getAttribute($context["tab"], "icon", array()));
            }
            // line 144
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["tab"], "label", array()), array(), $this->getAttribute($context["tab"], "translation_domain", array())), "html", null, true);
            echo "
            </a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "</ul>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_4e05728ac3f61124a4669449fa0d5e23debf1399eef12004be75abcc48505e17->leave($__internal_4e05728ac3f61124a4669449fa0d5e23debf1399eef12004be75abcc48505e17_prof);

    }

    // line 152
    public function block_form_tab($context, array $blocks = array())
    {
        $__internal_d5887cace1f8f5a85a12c323a281cc96fe835647b45d9e79b67e1c7b6d6b8c9d = $this->env->getExtension("native_profiler");
        $__internal_d5887cace1f8f5a85a12c323a281cc96fe835647b45d9e79b67e1c7b6d6b8c9d->enter($__internal_d5887cace1f8f5a85a12c323a281cc96fe835647b45d9e79b67e1c7b6d6b8c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_tab"));

        // line 153
        echo "    ";
        $context["tab_attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((("tab-pane" . (($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "tab_active", array())) ? (" active") : (""))) . " ") . (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : (""))), "id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
        // line 154
        echo "    <div";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tab_attr"]) ? $context["tab_attr"] : $this->getContext($context, "tab_attr")));
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
        echo ">
        ";
        // line 155
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_d5887cace1f8f5a85a12c323a281cc96fe835647b45d9e79b67e1c7b6d6b8c9d->leave($__internal_d5887cace1f8f5a85a12c323a281cc96fe835647b45d9e79b67e1c7b6d6b8c9d_prof);

    }

    // line 159
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_f4f8415ee13e89dde85729778b5876d5a15800e52c1bde28572827c50c7b3315 = $this->env->getExtension("native_profiler");
        $__internal_f4f8415ee13e89dde85729778b5876d5a15800e52c1bde28572827c50c7b3315->enter($__internal_f4f8415ee13e89dde85729778b5876d5a15800e52c1bde28572827c50c7b3315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 160
        ob_start();
        // line 161
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 162
            echo "        ";
            $context["prototype_markup"] = $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), 'row');
            // line 163
            echo "        ";
            $context["data_prototype_name"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "form", array(), "any", false, true), "vars", array(), "any", false, true), "prototype", array(), "any", false, true), "vars", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "form", array(), "any", false, true), "vars", array(), "any", false, true), "prototype", array(), "any", false, true), "vars", array(), "any", false, true), "name", array()), "__name__")) : ("__name__"));
            // line 164
            echo "        ";
            $context["data_prototype_label"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "form", array(), "any", false, true), "vars", array(), "any", false, true), "prototype", array(), "any", false, true), "vars", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "form", array(), "any", false, true), "vars", array(), "any", false, true), "prototype", array(), "any", false, true), "vars", array(), "any", false, true), "label", array()), "__name__label__")) : ("__name__label__"));
            // line 165
            echo "        ";
            $context["widget_form_group_attr"] = twig_array_merge(twig_array_merge((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : $this->getContext($context, "widget_form_group_attr")), array("data-prototype" =>             // line 166
(isset($context["prototype_markup"]) ? $context["prototype_markup"] : $this->getContext($context, "prototype_markup")), "data-prototype-name" =>             // line 167
(isset($context["data_prototype_name"]) ? $context["data_prototype_name"] : $this->getContext($context, "data_prototype_name")), "data-prototype-label" =>             // line 168
(isset($context["data_prototype_label"]) ? $context["data_prototype_label"] : $this->getContext($context, "data_prototype_label")))),             // line 169
(isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
            // line 170
            echo "    ";
        }
        // line 171
        echo "    ";
        // line 172
        echo "\t";
        if ((twig_in_filter("collection", $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "block_prefixes", array())) && $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true))) {
            // line 173
            echo "\t\t";
            $context["widget_form_group_attr"] = twig_array_merge((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : $this->getContext($context, "widget_form_group_attr")), array("class" => (((($this->getAttribute((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : null), "class", array()), "row")) : ("row")) . " ") . $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "class", array()))));
            // line 174
            echo "\t";
        }
        // line 175
        echo "    ";
        // line 176
        echo "    ";
        $context["widget_form_group_attr"] = twig_array_merge((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : $this->getContext($context, "widget_form_group_attr")), array("id" => (("collection" . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))) . "_form_group"), "class" => ((($this->getAttribute((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : $this->getContext($context, "widget_form_group_attr")), "class", array()) . " collection-items ") . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))) . "_form_group")));
        // line 177
        echo "
    <div ";
        // line 178
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : $this->getContext($context, "widget_form_group_attr")));
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
        echo ">
    ";
        // line 180
        echo "    ";
        if (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array())) == 0) && array_key_exists("prototype", $context))) {
            // line 181
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["prototype_names"]) ? $context["prototype_names"] : $this->getContext($context, "prototype_names")));
            foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                // line 182
                echo "            ";
                echo twig_replace_filter((isset($context["prototype_markup"]) ? $context["prototype_markup"] : $this->getContext($context, "prototype_markup")), array("__name__" => $context["name"]));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 184
            echo "    ";
        }
        // line 185
        echo "    ";
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_f4f8415ee13e89dde85729778b5876d5a15800e52c1bde28572827c50c7b3315->leave($__internal_f4f8415ee13e89dde85729778b5876d5a15800e52c1bde28572827c50c7b3315_prof);

    }

    // line 190
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_e2175e1268ba3bf781b75707b1382e7efbe08a6e59e43753c5cd6fcd05bf6cba = $this->env->getExtension("native_profiler");
        $__internal_e2175e1268ba3bf781b75707b1382e7efbe08a6e59e43753c5cd6fcd05bf6cba->enter($__internal_e2175e1268ba3bf781b75707b1382e7efbe08a6e59e43753c5cd6fcd05bf6cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 191
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => (((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["widget_form_control_class"]) ? $context["widget_form_control_class"] : $this->getContext($context, "widget_form_control_class")))));
        // line 192
        echo "    ";
        if (((isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")) == "inline-btn")) {
            // line 193
            echo "        ";
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
            echo "
    ";
        } else {
            // line 195
            echo "        ";
            $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_e2175e1268ba3bf781b75707b1382e7efbe08a6e59e43753c5cd6fcd05bf6cba->leave($__internal_e2175e1268ba3bf781b75707b1382e7efbe08a6e59e43753c5cd6fcd05bf6cba_prof);

    }

    // line 199
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_eb59edf6e0dd37efd70bae37a979ec731ba67812cd9ca0538e718cc4ccafaf3a = $this->env->getExtension("native_profiler");
        $__internal_eb59edf6e0dd37efd70bae37a979ec731ba67812cd9ca0538e718cc4ccafaf3a->enter($__internal_eb59edf6e0dd37efd70bae37a979ec731ba67812cd9ca0538e718cc4ccafaf3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 200
        echo "    ";
        ob_start();
        // line 201
        echo "        ";
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 202
        echo "        ";
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), "class", array()) . " ") . ((((isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")) != "")) ? ((((((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) ? ("checkbox") : ("radio")) . "-") . (isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")))) : ("")))));
        // line 203
        echo "        ";
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 204
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => (((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["horizontal_input_wrapper_class"]) ? $context["horizontal_input_wrapper_class"] : $this->getContext($context, "horizontal_input_wrapper_class")))));
            // line 205
            echo "        ";
        }
        // line 206
        echo "        ";
        if (((isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")) == "inline-btn")) {
            // line 207
            echo "            <div class=\"btn-group\" data-toggle=\"buttons\">
        ";
        }
        // line 209
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 210
            echo "            ";
            if (!twig_in_filter((isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")), array(0 => "inline", 1 => "inline-btn"))) {
                // line 211
                echo "                <div class=\"";
                echo (((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) ? ("checkbox") : ("radio"));
                echo "\"";
                // line 212
                if (((isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")) == "inline-btn")) {
                    echo " class=\"btn-group\" data-toggle=\"buttons\"";
                }
                echo ">
            ";
            }
            // line 214
            echo "            ";
            if (((isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")) == "inline-btn")) {
                // line 215
                echo "                ";
                $context["label_attr"] = twig_array_merge(((array_key_exists("label_attr", $context)) ? (_twig_default_filter((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array())) : (array())), array("class" => ("btn " . (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))));
                // line 216
                echo "            ";
            }
            // line 217
            echo "            ";
            if (($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "checked", array()) && ((isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")) == "inline-btn"))) {
                // line 218
                echo "                ";
                $context["label_attr_copy"] = twig_array_merge(((array_key_exists("label_attr", $context)) ? (_twig_default_filter((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array())) : (array())), array("class" => ("active " . (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))));
                // line 219
                echo "            ";
            } else {
                // line 220
                echo "                ";
                $context["label_attr_copy"] = ((array_key_exists("label_attr", $context)) ? (_twig_default_filter((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array())) : (array()));
                // line 221
                echo "            ";
            }
            // line 222
            echo "            <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr_copy"]) ? $context["label_attr_copy"] : $this->getContext($context, "label_attr_copy")));
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
            echo ">
            ";
            // line 223
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("horizontal_label_class" => (isset($context["horizontal_label_class"]) ? $context["horizontal_label_class"] : $this->getContext($context, "horizontal_label_class")), "horizontal_input_wrapper_class" => (isset($context["horizontal_input_wrapper_class"]) ? $context["horizontal_input_wrapper_class"] : $this->getContext($context, "horizontal_input_wrapper_class")), "attr" => array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array()), "")) : ("")))));
            echo "
            ";
            // line 224
            if ((((isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")) == "inline-btn") || ((isset($context["widget_checkbox_label"]) ? $context["widget_checkbox_label"] : $this->getContext($context, "widget_checkbox_label")) == "widget"))) {
                // line 225
                echo "                ";
                echo $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "label", array()), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
                echo "
            ";
            } else {
                // line 227
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "label", array()), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "
            ";
            }
            // line 229
            echo "            </label>
            ";
            // line 230
            if (!twig_in_filter((isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")), array(0 => "inline", 1 => "inline-btn"))) {
                // line 231
                echo "                </div>
            ";
            }
            // line 233
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 234
        echo "        ";
        if (((isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")) == "inline-btn")) {
            // line 235
            echo "            </div>
        ";
        }
        // line 237
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_eb59edf6e0dd37efd70bae37a979ec731ba67812cd9ca0538e718cc4ccafaf3a->leave($__internal_eb59edf6e0dd37efd70bae37a979ec731ba67812cd9ca0538e718cc4ccafaf3a_prof);

    }

    // line 240
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_566308a79eb36cfbd979d56084296038db3d02c2825cda542c1165c1fc393376 = $this->env->getExtension("native_profiler");
        $__internal_566308a79eb36cfbd979d56084296038db3d02c2825cda542c1165c1fc393376->enter($__internal_566308a79eb36cfbd979d56084296038db3d02c2825cda542c1165c1fc393376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 241
        echo "    ";
        ob_start();
        // line 242
        echo "        ";
        if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
            // line 243
            if ((array_key_exists("label_format", $context) &&  !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format"))))) {
                // line 244
                $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                 // line 245
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                 // line 246
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            } else {
                // line 249
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            }
        }
        // line 252
        echo "        ";
        if ((($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()) != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "block_prefixes", array())))) {
            // line 253
            echo "            <div";
            // line 254
            if (((isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")) == "inline-btn")) {
                echo " class=\"btn-group\" data-toggle=\"buttons\"";
            } else {
                // line 255
                echo " class=\"checkbox\"";
            }
            // line 256
            echo ">
        ";
        }
        // line 258
        echo "        ";
        if (((($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()) != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "block_prefixes", array()))) && (isset($context["label_render"]) ? $context["label_render"] : $this->getContext($context, "label_render")))) {
            // line 259
            echo "            ";
            if (((isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")) == "inline-btn")) {
                // line 260
                echo "                ";
                $context["label_attr"] = ((array_key_exists("attr", $context)) ? (_twig_default_filter((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array())) : (array()));
                // line 261
                echo "                ";
                if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
                    // line 262
                    echo "                    ";
                    $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => ("active " . (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")))));
                    // line 263
                    echo "                ";
                }
                // line 264
                echo "            ";
            }
            // line 265
            echo "            <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
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
            // line 266
            if ( !(isset($context["horizontal"]) ? $context["horizontal"] : $this->getContext($context, "horizontal"))) {
                echo " class=\"checkbox-inline\"";
            }
            echo ">
        ";
        }
        // line 268
        echo "        <input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo "/>
        ";
        // line 269
        if ((($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()) != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "block_prefixes", array())))) {
            // line 270
            echo "            ";
            if ((isset($context["label_render"]) ? $context["label_render"] : $this->getContext($context, "label_render"))) {
                // line 271
                echo "                ";
                if (twig_in_filter((isset($context["widget_checkbox_label"]) ? $context["widget_checkbox_label"] : $this->getContext($context, "widget_checkbox_label")), array(0 => "both", 1 => "widget"))) {
                    // line 272
                    echo "                    ";
                    echo $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
                    echo "
                ";
                } else {
                    // line 274
                    echo "                    ";
                    $this->displayBlock("form_help", $context, $blocks);
                    echo "
                ";
                }
                // line 276
                echo "                </label>
            ";
            }
            // line 278
            echo "        ";
        }
        // line 279
        echo "        ";
        if ((($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()) != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "block_prefixes", array())))) {
            // line 280
            echo "            </div>
        ";
        }
        // line 282
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_566308a79eb36cfbd979d56084296038db3d02c2825cda542c1165c1fc393376->leave($__internal_566308a79eb36cfbd979d56084296038db3d02c2825cda542c1165c1fc393376_prof);

    }

    // line 285
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_0f7db979720722fdb0d554bc6af3a74d745868abcd2efb9b97e303fb1750eef5 = $this->env->getExtension("native_profiler");
        $__internal_0f7db979720722fdb0d554bc6af3a74d745868abcd2efb9b97e303fb1750eef5->enter($__internal_0f7db979720722fdb0d554bc6af3a74d745868abcd2efb9b97e303fb1750eef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 286
        ob_start();
        // line 287
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 288
            echo "    ";
            if (array_key_exists("datepicker", $context)) {
                // line 289
                echo "        ";
                $context["widget_addon_icon"] = (($this->getAttribute((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : null), "icon", array(), "any", true, true)) ? ($this->getAttribute((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : $this->getContext($context, "widget_addon_append")), "icon", array())) : ("calendar"));
                // line 290
                echo "        <div ";
                if ($this->getAttribute((isset($context["datepicker"]) ? $context["datepicker"] : null), "attr", array(), "any", true, true)) {
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["datepicker"]) ? $context["datepicker"] : $this->getContext($context, "datepicker")), "attr", array()));
                    foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                        echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                        echo "\" ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                echo " data-provider=\"datepicker\" class=\"input-group date\" data-date=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                echo "\" data-link-field=\"";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "\" data-link-format=\"yyyy-mm-dd\">
            <input type=\"hidden\" value=\"";
                // line 291
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                echo "\" ";
                $this->displayBlock("widget_attributes", $context, $blocks);
                echo ">
            ";
                // line 292
                if ((array_key_exists("widget_reset_icon", $context) && ((isset($context["widget_reset_icon"]) ? $context["widget_reset_icon"] : $this->getContext($context, "widget_reset_icon")) == true))) {
                    // line 293
                    echo "                <span class=\"input-group-addon\">";
                    echo $this->env->getExtension('mopa_bootstrap_icon')->renderIcon($this->env, "remove");
                    echo "</span>
            ";
                }
                // line 295
                echo "            ";
                // line 296
                echo "            ";
                $context["id"] = ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "_mopa_picker_display");
                // line 297
                echo "            ";
                $context["full_name"] = null;
                // line 298
                echo "            ";
                $context["type"] = "text";
                // line 299
                echo "            ";
                $this->displayBlock("form_widget_simple", $context, $blocks);
                echo "
            <span class=\"input-group-addon\">";
                // line 300
                echo $this->env->getExtension('mopa_bootstrap_icon')->renderIcon($this->env, (isset($context["widget_addon_icon"]) ? $context["widget_addon_icon"] : $this->getContext($context, "widget_addon_icon")));
                echo "</span>
        </div>
    ";
            } else {
                // line 303
                echo "        ";
                $this->displayBlock("form_widget_simple", $context, $blocks);
                echo "
    ";
            }
        } else {
            // line 306
            echo "    ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "inline")) : ("inline"))));
            // line 307
            echo "    \t<div class=\"row\">
        ";
            // line 308
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" => (((("<div class=\"" . (($this->getAttribute(            // line 309
(isset($context["date_wrapper_class"]) ? $context["date_wrapper_class"] : null), "year", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["date_wrapper_class"]) ? $context["date_wrapper_class"] : null), "year", array(), "array"), "col-xs-4")) : ("col-xs-4"))) . "\">") . $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget', array("attr" => array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array()), "")) : ("")) . ""))))) . "</div>"), "{{ month }}" => (((("<div class=\"" . (($this->getAttribute(            // line 310
(isset($context["date_wrapper_class"]) ? $context["date_wrapper_class"] : null), "month", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["date_wrapper_class"]) ? $context["date_wrapper_class"] : null), "month", array(), "array"), "col-xs-4")) : ("col-xs-4"))) . "\">") . $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget', array("attr" => array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array()), "")) : ("")) . ""))))) . "</div>"), "{{ day }}" => (((("<div class=\"" . (($this->getAttribute(            // line 311
(isset($context["date_wrapper_class"]) ? $context["date_wrapper_class"] : null), "day", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["date_wrapper_class"]) ? $context["date_wrapper_class"] : null), "day", array(), "array"), "col-xs-4")) : ("col-xs-4"))) . "\">") . $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget', array("attr" => array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array()), "")) : ("")) . ""))))) . "</div>")));
            // line 312
            echo "
        </div>
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_0f7db979720722fdb0d554bc6af3a74d745868abcd2efb9b97e303fb1750eef5->leave($__internal_0f7db979720722fdb0d554bc6af3a74d745868abcd2efb9b97e303fb1750eef5_prof);

    }

    // line 318
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_b67d72726aa57c5fb6e2a4c51d2cb3c16e3d51144d177def7f1f37cd9c3afc30 = $this->env->getExtension("native_profiler");
        $__internal_b67d72726aa57c5fb6e2a4c51d2cb3c16e3d51144d177def7f1f37cd9c3afc30->enter($__internal_b67d72726aa57c5fb6e2a4c51d2cb3c16e3d51144d177def7f1f37cd9c3afc30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 319
        ob_start();
        // line 320
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 321
            echo "    ";
            if (array_key_exists("timepicker", $context)) {
                // line 322
                echo "        ";
                $context["widget_addon_icon"] = (($this->getAttribute((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : null), "icon", array(), "any", true, true)) ? ($this->getAttribute((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : $this->getContext($context, "widget_addon_append")), "icon", array())) : ("time"));
                // line 323
                echo "        <div ";
                if ($this->getAttribute((isset($context["timepicker"]) ? $context["timepicker"] : null), "attr", array(), "any", true, true)) {
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["timepicker"]) ? $context["timepicker"] : $this->getContext($context, "timepicker")), "attr", array()));
                    foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                        echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                        echo "\" ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                echo " data-provider=\"timepicker\" class=\"input-group date\" data-date=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                echo "\" data-link-field=\"";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "\" data-link-format=\"hh:ii\">
            <input type=\"hidden\" value=\"";
                // line 324
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                echo "\" ";
                $this->displayBlock("widget_attributes", $context, $blocks);
                echo ">
            ";
                // line 325
                if ((array_key_exists("widget_reset_icon", $context) && ((isset($context["widget_reset_icon"]) ? $context["widget_reset_icon"] : $this->getContext($context, "widget_reset_icon")) == true))) {
                    // line 326
                    echo "                <span class=\"input-group-addon\">";
                    echo $this->env->getExtension('mopa_bootstrap_icon')->renderIcon($this->env, "remove");
                    echo "</span>
            ";
                }
                // line 328
                echo "            ";
                // line 329
                echo "            ";
                $context["id"] = ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "_mopa_picker_display");
                // line 330
                echo "            ";
                $context["full_name"] = null;
                // line 331
                echo "            ";
                $context["type"] = "text";
                // line 332
                echo "            ";
                $this->displayBlock("form_widget_simple", $context, $blocks);
                echo "
            <span class=\"input-group-addon\">";
                // line 333
                echo $this->env->getExtension('mopa_bootstrap_icon')->renderIcon($this->env, (isset($context["widget_addon_icon"]) ? $context["widget_addon_icon"] : $this->getContext($context, "widget_addon_icon")));
                echo "</span>
        </div>
    ";
            } else {
                // line 336
                echo "        ";
                $this->displayBlock("form_widget_simple", $context, $blocks);
                echo "
    ";
            }
        } else {
            // line 339
            echo "    ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : (""))));
            // line 340
            echo "    ";
            ob_start();
            // line 341
            echo "    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget', array("horizontal_input_wrapper_class" => ((array_key_exists("horizontal_input_wrapper_class", $context)) ? (_twig_default_filter((isset($context["horizontal_input_wrapper_class"]) ? $context["horizontal_input_wrapper_class"] : $this->getContext($context, "horizontal_input_wrapper_class")), "col-sm-2")) : ("col-sm-2"))));
            echo "
    ";
            // line 342
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                // line 343
                echo "        ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget', array("horizontal_input_wrapper_class" => ((array_key_exists("horizontal_input_wrapper_class", $context)) ? (_twig_default_filter((isset($context["horizontal_input_wrapper_class"]) ? $context["horizontal_input_wrapper_class"] : $this->getContext($context, "horizontal_input_wrapper_class")), "col-sm-2")) : ("col-sm-2"))));
                echo "
    ";
            }
            // line 345
            echo "    ";
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                // line 346
                echo "        :";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget', array("horizontal_input_wrapper_class" => ((array_key_exists("horizontal_input_wrapper_class", $context)) ? (_twig_default_filter((isset($context["horizontal_input_wrapper_class"]) ? $context["horizontal_input_wrapper_class"] : $this->getContext($context, "horizontal_input_wrapper_class")), "col-sm-2")) : ("col-sm-2"))));
                echo "
    ";
            }
            // line 348
            echo "    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b67d72726aa57c5fb6e2a4c51d2cb3c16e3d51144d177def7f1f37cd9c3afc30->leave($__internal_b67d72726aa57c5fb6e2a4c51d2cb3c16e3d51144d177def7f1f37cd9c3afc30_prof);

    }

    // line 353
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_5a230a62b55a6a76b70759d01bfe8e989eb0719c7397842f9da052b57bfe7406 = $this->env->getExtension("native_profiler");
        $__internal_5a230a62b55a6a76b70759d01bfe8e989eb0719c7397842f9da052b57bfe7406->enter($__internal_5a230a62b55a6a76b70759d01bfe8e989eb0719c7397842f9da052b57bfe7406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 354
        ob_start();
        // line 355
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 356
            echo "        ";
            if (array_key_exists("datetimepicker", $context)) {
                // line 357
                echo "            ";
                $context["widget_addon_icon"] = (($this->getAttribute((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : null), "icon", array(), "any", true, true)) ? ($this->getAttribute((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : $this->getContext($context, "widget_addon_append")), "icon", array())) : ("th"));
                // line 358
                echo "            <div ";
                if ($this->getAttribute((isset($context["datetimepicker"]) ? $context["datetimepicker"] : null), "attr", array(), "any", true, true)) {
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["datetimepicker"]) ? $context["datetimepicker"] : $this->getContext($context, "datetimepicker")), "attr", array()));
                    foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                        echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                        echo "\" ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                echo " data-provider=\"datetimepicker\" class=\"input-group date\" data-date=\"";
                if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "Y-m-d H:i"), "html", null, true);
                }
                echo "\" data-link-field=\"";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "\" data-link-format=\"yyyy-mm-dd hh:ii\">
                <input type=\"hidden\" value=\"";
                // line 359
                if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "Y-m-d H:i"), "html", null, true);
                }
                echo "\" ";
                $this->displayBlock("widget_attributes", $context, $blocks);
                echo ">
                ";
                // line 360
                if ((array_key_exists("widget_reset_icon", $context) && ((isset($context["widget_reset_icon"]) ? $context["widget_reset_icon"] : $this->getContext($context, "widget_reset_icon")) == true))) {
                    // line 361
                    echo "                    <span class=\"input-group-addon\">";
                    echo $this->env->getExtension('mopa_bootstrap_icon')->renderIcon($this->env, "remove");
                    echo "</span>
                ";
                }
                // line 363
                echo "                ";
                // line 364
                echo "                ";
                $context["id"] = ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "_mopa_picker_display");
                // line 365
                echo "                ";
                $context["full_name"] = null;
                // line 366
                echo "                ";
                $context["type"] = "text";
                // line 367
                echo "                ";
                $this->displayBlock("form_widget_simple", $context, $blocks);
                echo "
                <span class=\"input-group-addon\">";
                // line 368
                echo $this->env->getExtension('mopa_bootstrap_icon')->renderIcon($this->env, (isset($context["widget_addon_icon"]) ? $context["widget_addon_icon"] : $this->getContext($context, "widget_addon_icon")));
                echo "</span>
            </div>
        ";
            } else {
                // line 371
                echo "            ";
                $this->displayBlock("form_widget_simple", $context, $blocks);
                echo "
        ";
            }
            // line 373
            echo "    ";
        } else {
            // line 374
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : (""))));
            // line 375
            echo "            <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
                ";
            // line 376
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            echo "
                ";
            // line 377
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            echo "
                ";
            // line 378
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("attr" => array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array()), "")) : (""))), "horizontal_input_wrapper_class" => ((array_key_exists("horizontal_input_wrapper_class", $context)) ? (_twig_default_filter((isset($context["horizontal_input_wrapper_class"]) ? $context["horizontal_input_wrapper_class"] : $this->getContext($context, "horizontal_input_wrapper_class")), "col-sm-3")) : ("col-sm-3"))));
            echo "
                ";
            // line 379
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("attr" => array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array()), "")) : (""))), "horizontal_input_wrapper_class" => ((array_key_exists("horizontal_input_wrapper_class", $context)) ? (_twig_default_filter((isset($context["horizontal_input_wrapper_class"]) ? $context["horizontal_input_wrapper_class"] : $this->getContext($context, "horizontal_input_wrapper_class")), "col-sm-2")) : ("col-sm-2"))));
            echo "
            </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_5a230a62b55a6a76b70759d01bfe8e989eb0719c7397842f9da052b57bfe7406->leave($__internal_5a230a62b55a6a76b70759d01bfe8e989eb0719c7397842f9da052b57bfe7406_prof);

    }

    // line 385
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_67841c07fcb8c3831968bd84868e660f48100b99ff6333a9359c0c4ccdd1a881 = $this->env->getExtension("native_profiler");
        $__internal_67841c07fcb8c3831968bd84868e660f48100b99ff6333a9359c0c4ccdd1a881->enter($__internal_67841c07fcb8c3831968bd84868e660f48100b99ff6333a9359c0c4ccdd1a881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 386
        ob_start();
        // line 387
        echo "    ";
        $context["widget_addon_append"] = twig_array_merge((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : $this->getContext($context, "widget_addon_append")), array("text" => (($this->getAttribute((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : null), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : null), "text", array()), "%")) : ("%"))));
        // line 388
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_67841c07fcb8c3831968bd84868e660f48100b99ff6333a9359c0c4ccdd1a881->leave($__internal_67841c07fcb8c3831968bd84868e660f48100b99ff6333a9359c0c4ccdd1a881_prof);

    }

    // line 392
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_bf66e69f2aa81ca4066de790b43494dff3db599f1e4667537cc85b764eb240d6 = $this->env->getExtension("native_profiler");
        $__internal_bf66e69f2aa81ca4066de790b43494dff3db599f1e4667537cc85b764eb240d6->enter($__internal_bf66e69f2aa81ca4066de790b43494dff3db599f1e4667537cc85b764eb240d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 393
        ob_start();
        // line 394
        echo "    ";
        $context["widget_addon_prepend"] = ((((((isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : $this->getContext($context, "widget_addon_prepend")) != false) || ((isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : $this->getContext($context, "widget_addon_prepend")) == null)) && ((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")) != "{{ widget }}"))) ? (array("text" => twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")))) : (((array_key_exists("widget_addon_prepend", $context)) ? (_twig_default_filter((isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : $this->getContext($context, "widget_addon_prepend")), null)) : (null))));
        // line 395
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_bf66e69f2aa81ca4066de790b43494dff3db599f1e4667537cc85b764eb240d6->leave($__internal_bf66e69f2aa81ca4066de790b43494dff3db599f1e4667537cc85b764eb240d6_prof);

    }

    // line 399
    public function block_file_widget($context, array $blocks = array())
    {
        $__internal_428f3be43d48bd30125a77766c70c2f05d69b6559a7e65bad03b7955a9672c3a = $this->env->getExtension("native_profiler");
        $__internal_428f3be43d48bd30125a77766c70c2f05d69b6559a7e65bad03b7955a9672c3a->enter($__internal_428f3be43d48bd30125a77766c70c2f05d69b6559a7e65bad03b7955a9672c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "file_widget"));

        // line 400
        ob_start();
        // line 401
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "file")) : ("file"));
        // line 402
        echo "    ";
        if ( !(null === ((array_key_exists("widget_addon_prepend", $context)) ? (_twig_default_filter((isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : $this->getContext($context, "widget_addon_prepend")), null)) : (null)))) {
            // line 403
            echo "        ";
            $context["widget_addon"] = (isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : $this->getContext($context, "widget_addon_prepend"));
            // line 404
            echo "        ";
            $this->displayBlock("widget_addon", $context, $blocks);
            echo "
    ";
        }
        // line 406
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo "/>
";
        // line 407
        if ((((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) != "hidden") &&  !(null === (($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "type", array()), null)) : (null))))) {
            // line 408
            echo "    ";
            if ( !(null === ((array_key_exists("widget_addon_append", $context)) ? (_twig_default_filter((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : $this->getContext($context, "widget_addon_append")), null)) : (null)))) {
                // line 409
                echo "        ";
                $context["widget_addon"] = (isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : $this->getContext($context, "widget_addon_append"));
                // line 410
                echo "        ";
                $this->displayBlock("widget_addon", $context, $blocks);
                echo "
    ";
            }
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_428f3be43d48bd30125a77766c70c2f05d69b6559a7e65bad03b7955a9672c3a->leave($__internal_428f3be43d48bd30125a77766c70c2f05d69b6559a7e65bad03b7955a9672c3a_prof);

    }

    // line 418
    public function block_form_legend($context, array $blocks = array())
    {
        $__internal_a9d8dca259b676735dab4055c10a12c3274f50a1b4b5ec73d5676e81079a4ba6 = $this->env->getExtension("native_profiler");
        $__internal_a9d8dca259b676735dab4055c10a12c3274f50a1b4b5ec73d5676e81079a4ba6->enter($__internal_a9d8dca259b676735dab4055c10a12c3274f50a1b4b5ec73d5676e81079a4ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_legend"));

        // line 419
        ob_start();
        // line 420
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 421
            if ((array_key_exists("label_format", $context) &&  !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format"))))) {
                // line 422
                $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                 // line 423
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                 // line 424
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            } else {
                // line 427
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            }
        }
        // line 430
        echo "    <";
        echo twig_escape_filter($this->env, (isset($context["legend_tag"]) ? $context["legend_tag"] : $this->getContext($context, "legend_tag")), "html", null, true);
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "</";
        echo twig_escape_filter($this->env, (isset($context["legend_tag"]) ? $context["legend_tag"] : $this->getContext($context, "legend_tag")), "html", null, true);
        echo ">
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a9d8dca259b676735dab4055c10a12c3274f50a1b4b5ec73d5676e81079a4ba6->leave($__internal_a9d8dca259b676735dab4055c10a12c3274f50a1b4b5ec73d5676e81079a4ba6_prof);

    }

    // line 434
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_d86a2adba116bc67d1f996b0ad3ea3e41c5a7f2101f8230368e35b1839faa4e5 = $this->env->getExtension("native_profiler");
        $__internal_d86a2adba116bc67d1f996b0ad3ea3e41c5a7f2101f8230368e35b1839faa4e5->enter($__internal_d86a2adba116bc67d1f996b0ad3ea3e41c5a7f2101f8230368e35b1839faa4e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 435
        if ((!twig_in_filter("checkbox", (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes"))) || twig_in_filter((isset($context["widget_checkbox_label"]) ? $context["widget_checkbox_label"] : $this->getContext($context, "widget_checkbox_label")), array(0 => "label", 1 => "both")))) {
            // line 436
            ob_start();
            // line 437
            echo "    ";
            if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
                // line 438
                echo "        ";
                if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                    // line 439
                    if ((array_key_exists("label_format", $context) &&  !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format"))))) {
                        // line 440
                        $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                         // line 441
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                         // line 442
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                    } else {
                        // line 445
                        $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                    }
                }
                // line 448
                echo "        ";
                if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
                    // line 449
                    echo "            ";
                    $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                    // line 450
                    echo "        ";
                }
                // line 451
                echo "        ";
                $context["label_attr_class"] = "";
                // line 452
                echo "        ";
                if ((isset($context["horizontal"]) ? $context["horizontal"] : $this->getContext($context, "horizontal"))) {
                    // line 453
                    echo "            ";
                    $context["label_attr_class"] = (("control-label " . (isset($context["label_attr_class"]) ? $context["label_attr_class"] : $this->getContext($context, "label_attr_class"))) . (isset($context["horizontal_label_class"]) ? $context["horizontal_label_class"] : $this->getContext($context, "horizontal_label_class")));
                    // line 454
                    echo "        ";
                }
                // line 455
                echo "        ";
                if ((isset($context["horizontal_label_div_class"]) ? $context["horizontal_label_div_class"] : $this->getContext($context, "horizontal_label_div_class"))) {
                    // line 456
                    echo "        <div class=\"";
                    echo twig_escape_filter($this->env, (isset($context["horizontal_label_div_class"]) ? $context["horizontal_label_div_class"] : $this->getContext($context, "horizontal_label_div_class")), "html", null, true);
                    echo "\">
        ";
                }
                // line 458
                echo "        ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["label_attr_class"]) ? $context["label_attr_class"] : $this->getContext($context, "label_attr_class"))) . (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) ? (" required") : (" optional"))))));
                // line 459
                echo "        <label";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
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
                echo ">
        ";
                // line 460
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                // line 461
                $this->displayBlock("label_asterisk", $context, $blocks);
                echo "
        ";
                // line 462
                if (((twig_in_filter("collection", $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "block_prefixes", array())) && ((array_key_exists("widget_add_btn", $context)) ? (_twig_default_filter((isset($context["widget_add_btn"]) ? $context["widget_add_btn"] : $this->getContext($context, "widget_add_btn")), null)) : (null))) && ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "allow_add", array()) == true))) {
                    // line 463
                    echo "            &nbsp;";
                    $this->displayBlock("form_widget_add_btn", $context, $blocks);
                    echo "
        ";
                }
                // line 465
                echo "        ";
                if ((isset($context["help_label"]) ? $context["help_label"] : $this->getContext($context, "help_label"))) {
                    // line 466
                    echo "            ";
                    $this->displayBlock("help_label", $context, $blocks);
                    echo "
        ";
                }
                // line 468
                echo "        ";
                if ($this->getAttribute((isset($context["help_label_tooltip"]) ? $context["help_label_tooltip"] : $this->getContext($context, "help_label_tooltip")), "title", array())) {
                    // line 469
                    echo "            ";
                    $this->displayBlock("help_label_tooltip", $context, $blocks);
                    echo "
        ";
                }
                // line 471
                echo "        ";
                if ($this->getAttribute((isset($context["help_label_popover"]) ? $context["help_label_popover"] : $this->getContext($context, "help_label_popover")), "title", array())) {
                    // line 472
                    echo "            ";
                    $this->displayBlock("help_label_popover", $context, $blocks);
                    echo "
        ";
                }
                // line 474
                echo "        </label>
        ";
                // line 475
                if ((isset($context["horizontal_label_div_class"]) ? $context["horizontal_label_div_class"] : $this->getContext($context, "horizontal_label_div_class"))) {
                    // line 476
                    echo "        </div>
        ";
                }
                // line 478
                echo "    ";
            }
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        }
        
        $__internal_d86a2adba116bc67d1f996b0ad3ea3e41c5a7f2101f8230368e35b1839faa4e5->leave($__internal_d86a2adba116bc67d1f996b0ad3ea3e41c5a7f2101f8230368e35b1839faa4e5_prof);

    }

    // line 483
    public function block_help_label($context, array $blocks = array())
    {
        $__internal_ee3abe03fa9a9206a6711e1e1972629523e0df2b76d432cb855a73e90cfe9db6 = $this->env->getExtension("native_profiler");
        $__internal_ee3abe03fa9a9206a6711e1e1972629523e0df2b76d432cb855a73e90cfe9db6->enter($__internal_ee3abe03fa9a9206a6711e1e1972629523e0df2b76d432cb855a73e90cfe9db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help_label"));

        // line 484
        echo "    <span class=\"help-block\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["help_label"]) ? $context["help_label"] : $this->getContext($context, "help_label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "</span>
";
        
        $__internal_ee3abe03fa9a9206a6711e1e1972629523e0df2b76d432cb855a73e90cfe9db6->leave($__internal_ee3abe03fa9a9206a6711e1e1972629523e0df2b76d432cb855a73e90cfe9db6_prof);

    }

    // line 487
    public function block_help_label_tooltip($context, array $blocks = array())
    {
        $__internal_8783fb30f54ba8998c9858e858bd484de8b3f80b700b5491c23b6074ecd67ffa = $this->env->getExtension("native_profiler");
        $__internal_8783fb30f54ba8998c9858e858bd484de8b3f80b700b5491c23b6074ecd67ffa->enter($__internal_8783fb30f54ba8998c9858e858bd484de8b3f80b700b5491c23b6074ecd67ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help_label_tooltip"));

        // line 488
        echo "    <span class=\"help-block\">
        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"";
        // line 489
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["help_label_tooltip"]) ? $context["help_label_tooltip"] : $this->getContext($context, "help_label_tooltip")), "placement", array()), "html", null, true);
        echo "\" data-title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["help_label_tooltip"]) ? $context["help_label_tooltip"] : $this->getContext($context, "help_label_tooltip")), "title", array()), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "\">
            ";
        // line 490
        if ( !($this->getAttribute((isset($context["help_label_tooltip"]) ? $context["help_label_tooltip"] : $this->getContext($context, "help_label_tooltip")), "icon", array()) === false)) {
            // line 491
            echo "                ";
            echo $this->env->getExtension('mopa_bootstrap_icon')->renderIcon($this->env, $this->getAttribute((isset($context["help_label_tooltip"]) ? $context["help_label_tooltip"] : $this->getContext($context, "help_label_tooltip")), "icon", array()));
            echo "
            ";
        }
        // line 493
        echo "            ";
        if ( !($this->getAttribute((isset($context["help_label_tooltip"]) ? $context["help_label_tooltip"] : $this->getContext($context, "help_label_tooltip")), "text", array()) === null)) {
            // line 494
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["help_label_tooltip"]) ? $context["help_label_tooltip"] : $this->getContext($context, "help_label_tooltip")), "text", array()), "html", null, true);
            echo "
            ";
        }
        // line 496
        echo "        </a>
    </span>
";
        
        $__internal_8783fb30f54ba8998c9858e858bd484de8b3f80b700b5491c23b6074ecd67ffa->leave($__internal_8783fb30f54ba8998c9858e858bd484de8b3f80b700b5491c23b6074ecd67ffa_prof);

    }

    // line 500
    public function block_help_block_tooltip($context, array $blocks = array())
    {
        $__internal_e2a187a9ea0fb1aa72a48808f7cd63e31ca2b7ca364ed733c4517ec5bb0ff86a = $this->env->getExtension("native_profiler");
        $__internal_e2a187a9ea0fb1aa72a48808f7cd63e31ca2b7ca364ed733c4517ec5bb0ff86a->enter($__internal_e2a187a9ea0fb1aa72a48808f7cd63e31ca2b7ca364ed733c4517ec5bb0ff86a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help_block_tooltip"));

        // line 501
        echo "    ";
        $context["help_label_tooltip"] = (isset($context["help_block_tooltip"]) ? $context["help_block_tooltip"] : $this->getContext($context, "help_block_tooltip"));
        // line 502
        echo "    ";
        $this->displayBlock("help_label_tooltip", $context, $blocks);
        echo "
";
        
        $__internal_e2a187a9ea0fb1aa72a48808f7cd63e31ca2b7ca364ed733c4517ec5bb0ff86a->leave($__internal_e2a187a9ea0fb1aa72a48808f7cd63e31ca2b7ca364ed733c4517ec5bb0ff86a_prof);

    }

    // line 505
    public function block_help_label_popover($context, array $blocks = array())
    {
        $__internal_f5b45e9e75638ff20901d6b840599c4f1efbecb9798eeab172880738a87ea17d = $this->env->getExtension("native_profiler");
        $__internal_f5b45e9e75638ff20901d6b840599c4f1efbecb9798eeab172880738a87ea17d->enter($__internal_f5b45e9e75638ff20901d6b840599c4f1efbecb9798eeab172880738a87ea17d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help_label_popover"));

        // line 506
        echo "    <span class=\"help-block\">
        <a href=\"#\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"";
        // line 507
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["help_label_popover"]) ? $context["help_label_popover"] : $this->getContext($context, "help_label_popover")), "placement", array()), "html", null, true);
        echo "\" data-title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["help_label_popover"]) ? $context["help_label_popover"] : $this->getContext($context, "help_label_popover")), "title", array()), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "\" data-content=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["help_label_popover"]) ? $context["help_label_popover"] : $this->getContext($context, "help_label_popover")), "content", array()), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "\" data-html=\"true\">
            ";
        // line 508
        if ( !($this->getAttribute((isset($context["help_label_popover"]) ? $context["help_label_popover"] : $this->getContext($context, "help_label_popover")), "icon", array()) === false)) {
            // line 509
            echo "                ";
            echo $this->env->getExtension('mopa_bootstrap_icon')->renderIcon($this->env, $this->getAttribute((isset($context["help_label_popover"]) ? $context["help_label_popover"] : $this->getContext($context, "help_label_popover")), "icon", array()));
            echo "
            ";
        }
        // line 511
        echo "            ";
        if ( !($this->getAttribute((isset($context["help_label_popover"]) ? $context["help_label_popover"] : $this->getContext($context, "help_label_popover")), "text", array()) === null)) {
            // line 512
            echo "                ";
            echo $this->getAttribute((isset($context["help_label_popover"]) ? $context["help_label_popover"] : $this->getContext($context, "help_label_popover")), "text", array());
            echo "
            ";
        }
        // line 514
        echo "        </a>
    </span>
";
        
        $__internal_f5b45e9e75638ff20901d6b840599c4f1efbecb9798eeab172880738a87ea17d->leave($__internal_f5b45e9e75638ff20901d6b840599c4f1efbecb9798eeab172880738a87ea17d_prof);

    }

    // line 518
    public function block_help_block_popover($context, array $blocks = array())
    {
        $__internal_52c0d26e43835c7db6ac18bd2668c0d1c1f9d6230b636d8f81b178fbe55745fd = $this->env->getExtension("native_profiler");
        $__internal_52c0d26e43835c7db6ac18bd2668c0d1c1f9d6230b636d8f81b178fbe55745fd->enter($__internal_52c0d26e43835c7db6ac18bd2668c0d1c1f9d6230b636d8f81b178fbe55745fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help_block_popover"));

        // line 519
        echo "    ";
        $context["help_label_popover"] = (isset($context["help_block_popover"]) ? $context["help_block_popover"] : $this->getContext($context, "help_block_popover"));
        // line 520
        echo "    ";
        $this->displayBlock("help_label_popover", $context, $blocks);
        echo "
";
        
        $__internal_52c0d26e43835c7db6ac18bd2668c0d1c1f9d6230b636d8f81b178fbe55745fd->leave($__internal_52c0d26e43835c7db6ac18bd2668c0d1c1f9d6230b636d8f81b178fbe55745fd_prof);

    }

    // line 523
    public function block_form_actions_widget($context, array $blocks = array())
    {
        $__internal_413e7dfcbbacd419bd5c367fae126d726fe25edb97a27ff59095db504adf32c7 = $this->env->getExtension("native_profiler");
        $__internal_413e7dfcbbacd419bd5c367fae126d726fe25edb97a27ff59095db504adf32c7->enter($__internal_413e7dfcbbacd419bd5c367fae126d726fe25edb97a27ff59095db504adf32c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_actions_widget"));

        // line 524
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 525
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["button"], 'widget');
            echo "&nbsp; ";
            // line 526
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_413e7dfcbbacd419bd5c367fae126d726fe25edb97a27ff59095db504adf32c7->leave($__internal_413e7dfcbbacd419bd5c367fae126d726fe25edb97a27ff59095db504adf32c7_prof);

    }

    // line 530
    public function block_form_actions_row($context, array $blocks = array())
    {
        $__internal_ebefc68c25e8b1159c567e790ebec0cf343861225d98e5616c9d76edca1c9480 = $this->env->getExtension("native_profiler");
        $__internal_ebefc68c25e8b1159c567e790ebec0cf343861225d98e5616c9d76edca1c9480->enter($__internal_ebefc68c25e8b1159c567e790ebec0cf343861225d98e5616c9d76edca1c9480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_actions_row"));

        // line 531
        echo "    ";
        $this->displayBlock("button_row", $context, $blocks);
        echo "
";
        
        $__internal_ebefc68c25e8b1159c567e790ebec0cf343861225d98e5616c9d76edca1c9480->leave($__internal_ebefc68c25e8b1159c567e790ebec0cf343861225d98e5616c9d76edca1c9480_prof);

    }

    // line 534
    public function block_form_rows_visible($context, array $blocks = array())
    {
        $__internal_97ac20067b3659e3586e9228a567b8b64b52a97fb889c28dd22d044d07968c66 = $this->env->getExtension("native_profiler");
        $__internal_97ac20067b3659e3586e9228a567b8b64b52a97fb889c28dd22d044d07968c66->enter($__internal_97ac20067b3659e3586e9228a567b8b64b52a97fb889c28dd22d044d07968c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows_visible"));

        // line 535
        ob_start();
        // line 536
        echo "     ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 537
            echo "        <div class=\"symfony-form-errors\">
            ";
            // line 538
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
        </div>
    ";
        }
        // line 541
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 542
            echo "        ";
            if (!twig_in_filter("hidden", $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "block_prefixes", array()))) {
                echo " ";
                // line 543
                echo "            ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row');
                echo "
        ";
            }
            // line 545
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_97ac20067b3659e3586e9228a567b8b64b52a97fb889c28dd22d044d07968c66->leave($__internal_97ac20067b3659e3586e9228a567b8b64b52a97fb889c28dd22d044d07968c66_prof);

    }

    // line 549
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_d0736e64fc313cc81bee67d2680298182e2867705b56daa014720dadb0f950c2 = $this->env->getExtension("native_profiler");
        $__internal_d0736e64fc313cc81bee67d2680298182e2867705b56daa014720dadb0f950c2->enter($__internal_d0736e64fc313cc81bee67d2680298182e2867705b56daa014720dadb0f950c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 550
        ob_start();
        // line 551
        echo "    ";
        if (twig_in_filter("tab", $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "block_prefixes", array()))) {
            // line 552
            echo "        ";
            $this->displayBlock("form_tab", $context, $blocks);
            echo "
    ";
        } elseif ((        // line 553
(isset($context["embed_form"]) ? $context["embed_form"] : $this->getContext($context, "embed_form")) === true)) {
            // line 554
            echo "        ";
            if ( !twig_test_empty((isset($context["widget_prefix"]) ? $context["widget_prefix"] : $this->getContext($context, "widget_prefix")))) {
                echo $this->env->getExtension('translator')->trans((isset($context["widget_prefix"]) ? $context["widget_prefix"] : $this->getContext($context, "widget_prefix")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
            }
            echo " ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget', $context);
            echo " ";
            if ( !twig_test_empty((isset($context["widget_suffix"]) ? $context["widget_suffix"] : $this->getContext($context, "widget_suffix")))) {
                echo $this->env->getExtension('translator')->trans((isset($context["widget_suffix"]) ? $context["widget_suffix"] : $this->getContext($context, "widget_suffix")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
            }
            // line 555
            echo "    ";
        } else {
            // line 556
            echo "        ";
            $this->displayBlock("widget_form_group_start", $context, $blocks);
            echo "

        ";
            // line 558
            if (((isset($context["horizontal"]) ? $context["horizontal"] : $this->getContext($context, "horizontal")) &&  !(isset($context["label_render"]) ? $context["label_render"] : $this->getContext($context, "label_render")))) {
                // line 559
                echo "            ";
                $context["horizontal_input_wrapper_class"] = (((isset($context["horizontal_input_wrapper_class"]) ? $context["horizontal_input_wrapper_class"] : $this->getContext($context, "horizontal_input_wrapper_class")) . " ") . (isset($context["horizontal_label_offset_class"]) ? $context["horizontal_label_offset_class"] : $this->getContext($context, "horizontal_label_offset_class")));
                // line 560
                echo "        ";
            }
            // line 561
            echo "
        ";
            // line 562
            if ((isset($context["horizontal"]) ? $context["horizontal"] : $this->getContext($context, "horizontal"))) {
                // line 563
                echo "        <div class=\"";
                echo twig_escape_filter($this->env, (isset($context["horizontal_input_wrapper_class"]) ? $context["horizontal_input_wrapper_class"] : $this->getContext($context, "horizontal_input_wrapper_class")), "html", null, true);
                echo "\">
        ";
            }
            // line 565
            echo "
        ";
            // line 566
            if ( !twig_test_empty((isset($context["widget_prefix"]) ? $context["widget_prefix"] : $this->getContext($context, "widget_prefix")))) {
                echo $this->env->getExtension('translator')->trans((isset($context["widget_prefix"]) ? $context["widget_prefix"] : $this->getContext($context, "widget_prefix")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
            }
            echo " ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget', $context);
            echo " ";
            if ( !twig_test_empty((isset($context["widget_suffix"]) ? $context["widget_suffix"] : $this->getContext($context, "widget_suffix")))) {
                echo $this->env->getExtension('translator')->trans((isset($context["widget_suffix"]) ? $context["widget_suffix"] : $this->getContext($context, "widget_suffix")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
            }
            // line 567
            echo "
        ";
            // line 568
            $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
            // line 569
            echo "        ";
            if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) != "hidden")) {
                // line 570
                echo "        ";
                $this->displayBlock("form_message", $context, $blocks);
                echo "
        ";
            }
            // line 572
            echo "
        ";
            // line 573
            if ((isset($context["horizontal"]) ? $context["horizontal"] : $this->getContext($context, "horizontal"))) {
                // line 574
                echo "        </div>
        ";
            }
            // line 576
            echo "
        ";
            // line 577
            if (((( !(null === $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) && twig_in_filter("collection", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "block_prefixes", array()))) && ((array_key_exists("widget_remove_btn", $context)) ? (_twig_default_filter((isset($context["widget_remove_btn"]) ? $context["widget_remove_btn"] : $this->getContext($context, "widget_remove_btn")), null)) : (null))) && (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array()), false)) : (false)))) {
                // line 578
                echo "            ";
                $this->displayBlock("form_widget_remove_btn", $context, $blocks);
                echo "
        ";
            }
            // line 580
            $this->displayBlock("widget_form_group_end", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_d0736e64fc313cc81bee67d2680298182e2867705b56daa014720dadb0f950c2->leave($__internal_d0736e64fc313cc81bee67d2680298182e2867705b56daa014720dadb0f950c2_prof);

    }

    // line 587
    public function block_form_message($context, array $blocks = array())
    {
        $__internal_4cd702a917e6c7672a18196cc407077731e48f4630c1d13f49d117df9e3e6312 = $this->env->getExtension("native_profiler");
        $__internal_4cd702a917e6c7672a18196cc407077731e48f4630c1d13f49d117df9e3e6312->enter($__internal_4cd702a917e6c7672a18196cc407077731e48f4630c1d13f49d117df9e3e6312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_message"));

        // line 588
        ob_start();
        // line 589
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    ";
        // line 591
        if (((!twig_in_filter("checkbox", (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes"))) || ((isset($context["widget_checkbox_label"]) ? $context["widget_checkbox_label"] : $this->getContext($context, "widget_checkbox_label")) != "label")) && (isset($context["help_block"]) ? $context["help_block"] : $this->getContext($context, "help_block")))) {
            // line 592
            echo "        ";
            $this->displayBlock("form_help", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_4cd702a917e6c7672a18196cc407077731e48f4630c1d13f49d117df9e3e6312->leave($__internal_4cd702a917e6c7672a18196cc407077731e48f4630c1d13f49d117df9e3e6312_prof);

    }

    // line 599
    public function block_form_help($context, array $blocks = array())
    {
        $__internal_d4021aab172393844e655c14d87289f76f4b54d4b2019e1cb5868b9203c72680 = $this->env->getExtension("native_profiler");
        $__internal_d4021aab172393844e655c14d87289f76f4b54d4b2019e1cb5868b9203c72680->enter($__internal_d4021aab172393844e655c14d87289f76f4b54d4b2019e1cb5868b9203c72680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_help"));

        // line 600
        ob_start();
        // line 601
        echo "    ";
        if ((isset($context["help_block"]) ? $context["help_block"] : $this->getContext($context, "help_block"))) {
            echo "<p class=\"help-block\">";
            echo $this->env->getExtension('translator')->trans((isset($context["help_block"]) ? $context["help_block"] : $this->getContext($context, "help_block")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
            echo "</p>";
        }
        // line 602
        echo "    ";
        if ($this->getAttribute((isset($context["help_block_tooltip"]) ? $context["help_block_tooltip"] : $this->getContext($context, "help_block_tooltip")), "title", array())) {
            // line 603
            echo "        &nbsp;";
            $this->displayBlock("help_block_tooltip", $context, $blocks);
            echo "
    ";
        }
        // line 605
        echo "    ";
        if ($this->getAttribute((isset($context["help_block_popover"]) ? $context["help_block_popover"] : $this->getContext($context, "help_block_popover")), "title", array())) {
            // line 606
            echo "        &nbsp;";
            $this->displayBlock("help_block_popover", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_d4021aab172393844e655c14d87289f76f4b54d4b2019e1cb5868b9203c72680->leave($__internal_d4021aab172393844e655c14d87289f76f4b54d4b2019e1cb5868b9203c72680_prof);

    }

    // line 611
    public function block_form_widget_add_btn($context, array $blocks = array())
    {
        $__internal_817ff14545d20aa5dd31a3b8cbd1a4e8186aa6181cc80ab467b5ef7742d6406f = $this->env->getExtension("native_profiler");
        $__internal_817ff14545d20aa5dd31a3b8cbd1a4e8186aa6181cc80ab467b5ef7742d6406f->enter($__internal_817ff14545d20aa5dd31a3b8cbd1a4e8186aa6181cc80ab467b5ef7742d6406f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_add_btn"));

        // line 612
        ob_start();
        // line 613
        echo "    ";
        if (((array_key_exists("widget_add_btn", $context)) ? (_twig_default_filter((isset($context["widget_add_btn"]) ? $context["widget_add_btn"] : $this->getContext($context, "widget_add_btn")), null)) : (null))) {
            // line 614
            echo "        ";
            $context["button_type"] = "add";
            // line 615
            echo "        ";
            $context["button_values"] = (isset($context["widget_add_btn"]) ? $context["widget_add_btn"] : $this->getContext($context, "widget_add_btn"));
            // line 616
            echo "        ";
            $this->displayBlock("collection_button", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_817ff14545d20aa5dd31a3b8cbd1a4e8186aa6181cc80ab467b5ef7742d6406f->leave($__internal_817ff14545d20aa5dd31a3b8cbd1a4e8186aa6181cc80ab467b5ef7742d6406f_prof);

    }

    // line 621
    public function block_form_widget_remove_btn($context, array $blocks = array())
    {
        $__internal_3a510940a8ceca2e30f1adb906dfe73910b7001c333b8e5346848b34c59096ac = $this->env->getExtension("native_profiler");
        $__internal_3a510940a8ceca2e30f1adb906dfe73910b7001c333b8e5346848b34c59096ac->enter($__internal_3a510940a8ceca2e30f1adb906dfe73910b7001c333b8e5346848b34c59096ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_remove_btn"));

        // line 622
        ob_start();
        // line 623
        echo "    ";
        if (($this->getAttribute((isset($context["widget_remove_btn"]) ? $context["widget_remove_btn"] : null), "wrapper_div", array(), "any", true, true) &&  !($this->getAttribute((isset($context["widget_remove_btn"]) ? $context["widget_remove_btn"] : $this->getContext($context, "widget_remove_btn")), "wrapper_div", array()) === false))) {
            // line 624
            echo "        <div class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["widget_remove_btn"]) ? $context["widget_remove_btn"] : $this->getContext($context, "widget_remove_btn")), "wrapper_div", array()), "class", array()), "html", null, true);
            echo "\">
    ";
        }
        // line 626
        echo "    ";
        if (($this->getAttribute((isset($context["widget_remove_btn"]) ? $context["widget_remove_btn"] : null), "horizontal_wrapper_div", array(), "any", true, true) &&  !($this->getAttribute((isset($context["widget_remove_btn"]) ? $context["widget_remove_btn"] : $this->getContext($context, "widget_remove_btn")), "horizontal_wrapper_div", array()) === false))) {
            // line 627
            echo "        <div class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["widget_remove_btn"]) ? $context["widget_remove_btn"] : $this->getContext($context, "widget_remove_btn")), "horizontal_wrapper_div", array()), "class", array()), "html", null, true);
            echo "\">
    ";
        }
        // line 629
        echo "    ";
        if (((array_key_exists("widget_remove_btn", $context)) ? (_twig_default_filter((isset($context["widget_remove_btn"]) ? $context["widget_remove_btn"] : $this->getContext($context, "widget_remove_btn")), null)) : (null))) {
            // line 630
            echo "    ";
            $context["button_type"] = "remove";
            // line 631
            echo "    ";
            $context["button_values"] = (isset($context["widget_remove_btn"]) ? $context["widget_remove_btn"] : $this->getContext($context, "widget_remove_btn"));
            // line 632
            echo "    ";
            $this->displayBlock("collection_button", $context, $blocks);
            echo "
    ";
        }
        // line 634
        echo "    ";
        if (($this->getAttribute((isset($context["widget_remove_btn"]) ? $context["widget_remove_btn"] : null), "horizontal_wrapper_div", array(), "any", true, true) &&  !($this->getAttribute((isset($context["widget_remove_btn"]) ? $context["widget_remove_btn"] : $this->getContext($context, "widget_remove_btn")), "horizontal_wrapper_div", array()) === false))) {
            // line 635
            echo "        </div>
    ";
        }
        // line 637
        echo "    ";
        if (($this->getAttribute((isset($context["widget_remove_btn"]) ? $context["widget_remove_btn"] : null), "wrapper_div", array(), "any", true, true) &&  !($this->getAttribute((isset($context["widget_remove_btn"]) ? $context["widget_remove_btn"] : $this->getContext($context, "widget_remove_btn")), "wrapper_div", array()) === false))) {
            // line 638
            echo "        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_3a510940a8ceca2e30f1adb906dfe73910b7001c333b8e5346848b34c59096ac->leave($__internal_3a510940a8ceca2e30f1adb906dfe73910b7001c333b8e5346848b34c59096ac_prof);

    }

    // line 643
    public function block_collection_button($context, array $blocks = array())
    {
        $__internal_fe29c1e6682063f79366e088401d83778a1658d22a5074275514314ec7520273 = $this->env->getExtension("native_profiler");
        $__internal_fe29c1e6682063f79366e088401d83778a1658d22a5074275514314ec7520273->enter($__internal_fe29c1e6682063f79366e088401d83778a1658d22a5074275514314ec7520273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_button"));

        // line 644
        echo "<a ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["button_values"]) ? $context["button_values"] : $this->getContext($context, "button_values")), "attr", array()));
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
        echo " data-collection-";
        echo twig_escape_filter($this->env, (isset($context["button_type"]) ? $context["button_type"] : $this->getContext($context, "button_type")), "html", null, true);
        echo "-btn=\".";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array(), "array"), "html", null, true);
        echo "_form_group\">
";
        // line 645
        if ( !(null === $this->getAttribute((isset($context["button_values"]) ? $context["button_values"] : $this->getContext($context, "button_values")), "icon", array()))) {
            // line 646
            echo "    ";
            echo $this->env->getExtension('mopa_bootstrap_icon')->renderIcon($this->env, $this->getAttribute((isset($context["button_values"]) ? $context["button_values"] : $this->getContext($context, "button_values")), "icon", array()), (($this->getAttribute((isset($context["button_values"]) ? $context["button_values"] : null), "icon_inverted", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["button_values"]) ? $context["button_values"] : null), "icon_inverted", array()), false)) : (false)));
            echo "
";
        }
        // line 648
        if ($this->getAttribute((isset($context["button_values"]) ? $context["button_values"] : null), "label", array(), "any", true, true)) {
            // line 649
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["button_values"]) ? $context["button_values"] : $this->getContext($context, "button_values")), "label", array()), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "
";
        }
        // line 651
        echo "</a>

";
        
        $__internal_fe29c1e6682063f79366e088401d83778a1658d22a5074275514314ec7520273->leave($__internal_fe29c1e6682063f79366e088401d83778a1658d22a5074275514314ec7520273_prof);

    }

    // line 655
    public function block_label_asterisk($context, array $blocks = array())
    {
        $__internal_4dff25a5dcb23c29ed13a0c7189e9b2f17c7713738c698586fdc1ad7eb4ac47e = $this->env->getExtension("native_profiler");
        $__internal_4dff25a5dcb23c29ed13a0c7189e9b2f17c7713738c698586fdc1ad7eb4ac47e->enter($__internal_4dff25a5dcb23c29ed13a0c7189e9b2f17c7713738c698586fdc1ad7eb4ac47e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label_asterisk"));

        // line 656
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            // line 657
            if ((isset($context["render_required_asterisk"]) ? $context["render_required_asterisk"] : $this->getContext($context, "render_required_asterisk"))) {
                echo "&nbsp;<span class=\"asterisk\">*</span>";
            }
        } else {
            // line 659
            if ((isset($context["render_optional_text"]) ? $context["render_optional_text"] : $this->getContext($context, "render_optional_text"))) {
                echo "&nbsp;<span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("(optional)", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "</span>";
            }
        }
        
        $__internal_4dff25a5dcb23c29ed13a0c7189e9b2f17c7713738c698586fdc1ad7eb4ac47e->leave($__internal_4dff25a5dcb23c29ed13a0c7189e9b2f17c7713738c698586fdc1ad7eb4ac47e_prof);

    }

    // line 663
    public function block_widget_addon($context, array $blocks = array())
    {
        $__internal_f07d53883fc16b5460225df920c145bc9aa33423b96481f82fb6c0dc0d052a1b = $this->env->getExtension("native_profiler");
        $__internal_f07d53883fc16b5460225df920c145bc9aa33423b96481f82fb6c0dc0d052a1b->enter($__internal_f07d53883fc16b5460225df920c145bc9aa33423b96481f82fb6c0dc0d052a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_addon"));

        // line 664
        ob_start();
        // line 665
        $context["widget_addon_icon"] = (($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "icon", array(), "any", true, true)) ? ($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : $this->getContext($context, "widget_addon")), "icon", array())) : (null));
        // line 666
        $context["widget_addon_icon_inverted"] = (($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "icon_inverted", array(), "any", true, true)) ? ($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : $this->getContext($context, "widget_addon")), "icon_inverted", array())) : (false));
        // line 667
        echo "    <span class=\"input-group-addon\">";
        echo (((($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "text", array()), false)) : (false))) ? ($this->env->getExtension('translator')->trans($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : $this->getContext($context, "widget_addon")), "text", array()), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))) : ($this->env->getExtension('mopa_bootstrap_icon')->renderIcon($this->env, (isset($context["widget_addon_icon"]) ? $context["widget_addon_icon"] : $this->getContext($context, "widget_addon_icon")), (isset($context["widget_addon_icon_inverted"]) ? $context["widget_addon_icon_inverted"] : $this->getContext($context, "widget_addon_icon_inverted")))));
        echo "</span>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_f07d53883fc16b5460225df920c145bc9aa33423b96481f82fb6c0dc0d052a1b->leave($__internal_f07d53883fc16b5460225df920c145bc9aa33423b96481f82fb6c0dc0d052a1b_prof);

    }

    // line 671
    public function block_widget_btns($context, array $blocks = array())
    {
        $__internal_9edfe058a3e22f323ea69ef8f794074814954e10cf627bcf6e38537218fd4c3c = $this->env->getExtension("native_profiler");
        $__internal_9edfe058a3e22f323ea69ef8f794074814954e10cf627bcf6e38537218fd4c3c->enter($__internal_9edfe058a3e22f323ea69ef8f794074814954e10cf627bcf6e38537218fd4c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_btns"));

        // line 672
        ob_start();
        // line 673
        echo "    <span class=\"input-group-btn\">
    ";
        // line 674
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["widget_btns"]) ? $context["widget_btns"] : $this->getContext($context, "widget_btns")));
        foreach ($context['_seq'] as $context["_key"] => $context["widget_btn"]) {
            // line 675
            echo "        <button type=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["widget_btn"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["widget_btn"], "type", array()), "button")) : ("button")), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, ("btn " . (($this->getAttribute($context["widget_btn"], "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["widget_btn"], "class", array()), "btn-default")) : ("btn-default"))), "html", null, true);
            echo "\">
        ";
            // line 676
            if ( !twig_test_empty($this->getAttribute($context["widget_btn"], "icon", array()))) {
                // line 677
                echo "                ";
                echo $this->env->getExtension('mopa_bootstrap_icon')->renderIcon($this->env, $this->getAttribute($context["widget_btn"], "icon", array()), (($this->getAttribute($context["widget_btn"], "icon_inverted", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["widget_btn"], "icon_inverted", array()), false)) : (false)));
                echo "
        ";
            }
            // line 679
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((($this->getAttribute($context["widget_btn"], "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["widget_btn"], "label", array()), "")) : ("")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "</button>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget_btn'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 681
        echo "    </span>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_9edfe058a3e22f323ea69ef8f794074814954e10cf627bcf6e38537218fd4c3c->leave($__internal_9edfe058a3e22f323ea69ef8f794074814954e10cf627bcf6e38537218fd4c3c_prof);

    }

    // line 687
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_ed8e61e8ba751f5b545bb344b864c5292e57966f26719663a1becb39575f8bcd = $this->env->getExtension("native_profiler");
        $__internal_ed8e61e8ba751f5b545bb344b864c5292e57966f26719663a1becb39575f8bcd->enter($__internal_ed8e61e8ba751f5b545bb344b864c5292e57966f26719663a1becb39575f8bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 688
        ob_start();
        // line 689
        if ((isset($context["error_delay"]) ? $context["error_delay"] : $this->getContext($context, "error_delay"))) {
            // line 690
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 691
                echo "        ";
                if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                    // line 692
                    echo "            ";
                    if ($this->getAttribute($context["child"], "set", array(0 => "errors", 1 => (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))), "method")) {
                    }
                    // line 693
                    echo "        ";
                }
                // line 694
                echo "    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 696
            echo "    ";
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
                // line 697
                echo "        ";
                if (($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()) == null)) {
                    // line 698
                    echo "            ";
                    $context["__internal_1773cac5f56fcf52a53abf0e3adbe9fdb69494add257116941bd74f55993b8f5"] = $this->loadTemplate("MopaBootstrapBundle::flash.html.twig", "MopaBootstrapBundle:Form:fields.html.twig", 698);
                    // line 699
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
                    foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                        // line 700
                        echo "                ";
                        echo $context["__internal_1773cac5f56fcf52a53abf0e3adbe9fdb69494add257116941bd74f55993b8f5"]->getflash("danger", $this->getAttribute($context["error"], "message", array()));
                        echo "
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 702
                    echo "        ";
                } else {
                    // line 703
                    echo "            <span class=\"help-";
                    $this->displayBlock("error_type", $context, $blocks);
                    echo "\">
            ";
                    // line 704
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
                    foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                        // line 705
                        echo "                ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                        echo " <br>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 707
                    echo "            </span>
        ";
                }
                // line 709
                echo "    ";
            }
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ed8e61e8ba751f5b545bb344b864c5292e57966f26719663a1becb39575f8bcd->leave($__internal_ed8e61e8ba751f5b545bb344b864c5292e57966f26719663a1becb39575f8bcd_prof);

    }

    // line 716
    public function block_error_type($context, array $blocks = array())
    {
        $__internal_7de637d21b8c8c4156d0f1f466e23a6fd497ecc003579411dfc78fe24f629e9d = $this->env->getExtension("native_profiler");
        $__internal_7de637d21b8c8c4156d0f1f466e23a6fd497ecc003579411dfc78fe24f629e9d->enter($__internal_7de637d21b8c8c4156d0f1f466e23a6fd497ecc003579411dfc78fe24f629e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "error_type"));

        // line 717
        ob_start();
        // line 718
        if ((isset($context["error_type"]) ? $context["error_type"] : $this->getContext($context, "error_type"))) {
            // line 719
            echo "    ";
            echo twig_escape_filter($this->env, (isset($context["error_type"]) ? $context["error_type"] : $this->getContext($context, "error_type")), "html", null, true);
            echo "
";
        } elseif (($this->getAttribute(        // line 720
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()) == null)) {
            // line 721
            echo "    ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "error_type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "error_type", array()), "inline")) : ("inline")), "html", null, true);
            echo "
";
        } else {
            // line 723
            echo "    block
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_7de637d21b8c8c4156d0f1f466e23a6fd497ecc003579411dfc78fe24f629e9d->leave($__internal_7de637d21b8c8c4156d0f1f466e23a6fd497ecc003579411dfc78fe24f629e9d_prof);

    }

    // line 730
    public function block_widget_form_group_start($context, array $blocks = array())
    {
        $__internal_fbc44a7a61dae5a73ecafb094087298d007776ef8b67599860e35f3e48ca2cf0 = $this->env->getExtension("native_profiler");
        $__internal_fbc44a7a61dae5a73ecafb094087298d007776ef8b67599860e35f3e48ca2cf0->enter($__internal_fbc44a7a61dae5a73ecafb094087298d007776ef8b67599860e35f3e48ca2cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_form_group_start"));

        // line 731
        if ((((array_key_exists("widget_form_group", $context)) ? (_twig_default_filter((isset($context["widget_form_group"]) ? $context["widget_form_group"] : $this->getContext($context, "widget_form_group")), false)) : (false)) || ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()) == null))) {
            // line 732
            echo "    ";
            if (( !(null === $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) && twig_in_filter("collection", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "block_prefixes", array())))) {
                echo " ";
                // line 733
                echo "        ";
                if ( !(isset($context["omit_collection_item"]) ? $context["omit_collection_item"] : $this->getContext($context, "omit_collection_item"))) {
                    // line 734
                    echo "            ";
                    // line 735
                    echo "        \t";
                    $context["widget_form_group_attr"] = twig_array_merge((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : $this->getContext($context, "widget_form_group_attr")), array("class" => "collection-item"));
                    // line 736
                    echo "        ";
                }
                // line 737
                echo "    ";
            }
            // line 738
            echo "    ";
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
                // line 739
                echo "\t    ";
                // line 740
                echo "\t    ";
                $context["widget_form_group_attr"] = twig_array_merge((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : $this->getContext($context, "widget_form_group_attr")), array("class" => ((($this->getAttribute((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : null), "class", array()), "")) : ("")) . " has-error")));
                // line 741
                echo "    ";
            }
            // line 742
            echo "    ";
            if (($this->getAttribute((isset($context["help_widget_popover"]) ? $context["help_widget_popover"] : $this->getContext($context, "help_widget_popover")), "selector", array()) === null)) {
                // line 743
                echo "        ";
                $context["help_widget_popover"] = twig_array_merge((isset($context["help_widget_popover"]) ? $context["help_widget_popover"] : $this->getContext($context, "help_widget_popover")), array("selector" => ("#" . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))));
                // line 744
                echo "    ";
            }
            // line 745
            echo "    <div";
            if ( !($this->getAttribute((isset($context["help_widget_popover"]) ? $context["help_widget_popover"] : $this->getContext($context, "help_widget_popover")), "title", array()) === null)) {
                $this->displayBlock("help_widget_popover", $context, $blocks);
            }
            echo " ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : $this->getContext($context, "widget_form_group_attr")));
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
            echo ">
    ";
            // line 747
            echo "    ";
            if (((((twig_length_filter($this->env, (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"))) > 0) && ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()) != null)) && !twig_in_filter("field", $this->getAttribute($this->getAttribute(            // line 748
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "block_prefixes", array()))) && !twig_in_filter("date", $this->getAttribute($this->getAttribute(            // line 749
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "block_prefixes", array())))) {
                // line 750
                echo "        ";
                if ((isset($context["show_child_legend"]) ? $context["show_child_legend"] : $this->getContext($context, "show_child_legend"))) {
                    // line 751
                    echo "            ";
                    $this->displayBlock("form_legend", $context, $blocks);
                    echo "
        ";
                } elseif (                // line 752
(isset($context["label_render"]) ? $context["label_render"] : $this->getContext($context, "label_render"))) {
                    // line 753
                    echo "            ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
                    echo "
        ";
                } else {
                    // line 755
                    echo "        ";
                }
                // line 756
                echo "    ";
            } else {
                // line 757
                echo "        ";
                if ((isset($context["label_render"]) ? $context["label_render"] : $this->getContext($context, "label_render"))) {
                    // line 758
                    echo "            ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
                    echo "
        ";
                }
                // line 760
                echo "    ";
            }
        } else {
            // line 762
            echo "    ";
            if ((isset($context["label_render"]) ? $context["label_render"] : $this->getContext($context, "label_render"))) {
                // line 763
                echo "        ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
                echo "
    ";
            }
        }
        
        $__internal_fbc44a7a61dae5a73ecafb094087298d007776ef8b67599860e35f3e48ca2cf0->leave($__internal_fbc44a7a61dae5a73ecafb094087298d007776ef8b67599860e35f3e48ca2cf0_prof);

    }

    // line 768
    public function block_help_widget_popover($context, array $blocks = array())
    {
        $__internal_8330d883ab9a28e6c2dab980f0e208807a00eb3710c53168032986afc3edf54e = $this->env->getExtension("native_profiler");
        $__internal_8330d883ab9a28e6c2dab980f0e208807a00eb3710c53168032986afc3edf54e->enter($__internal_8330d883ab9a28e6c2dab980f0e208807a00eb3710c53168032986afc3edf54e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help_widget_popover"));

        // line 769
        echo " ";
        ob_start();
        // line 770
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["help_widget_popover"]) ? $context["help_widget_popover"] : $this->getContext($context, "help_widget_popover")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 771
            echo " data-";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["attrvalue"], array(), ((array_key_exists("domain", $context)) ? (_twig_default_filter((isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain")), "messages")) : ("messages"))), "html", null, true);
            echo "\"
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 773
        echo " ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_8330d883ab9a28e6c2dab980f0e208807a00eb3710c53168032986afc3edf54e->leave($__internal_8330d883ab9a28e6c2dab980f0e208807a00eb3710c53168032986afc3edf54e_prof);

    }

    // line 776
    public function block_widget_form_group_end($context, array $blocks = array())
    {
        $__internal_6bbee72e305a6c57f08043efad7a55cb389fdb89895cb1c582fcf7b9807702a6 = $this->env->getExtension("native_profiler");
        $__internal_6bbee72e305a6c57f08043efad7a55cb389fdb89895cb1c582fcf7b9807702a6->enter($__internal_6bbee72e305a6c57f08043efad7a55cb389fdb89895cb1c582fcf7b9807702a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_form_group_end"));

        // line 777
        ob_start();
        // line 778
        if ((((array_key_exists("widget_form_group", $context)) ? (_twig_default_filter((isset($context["widget_form_group"]) ? $context["widget_form_group"] : $this->getContext($context, "widget_form_group")), false)) : (false)) || ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()) == null))) {
            // line 779
            echo "    </div>
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6bbee72e305a6c57f08043efad7a55cb389fdb89895cb1c582fcf7b9807702a6->leave($__internal_6bbee72e305a6c57f08043efad7a55cb389fdb89895cb1c582fcf7b9807702a6_prof);

    }

    public function getTemplateName()
    {
        return "MopaBootstrapBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  2749 => 779,  2747 => 778,  2745 => 777,  2739 => 776,  2731 => 773,  2720 => 771,  2715 => 770,  2712 => 769,  2706 => 768,  2694 => 763,  2691 => 762,  2687 => 760,  2681 => 758,  2678 => 757,  2675 => 756,  2672 => 755,  2666 => 753,  2664 => 752,  2659 => 751,  2656 => 750,  2654 => 749,  2653 => 748,  2651 => 747,  2631 => 745,  2628 => 744,  2625 => 743,  2622 => 742,  2619 => 741,  2616 => 740,  2614 => 739,  2611 => 738,  2608 => 737,  2605 => 736,  2602 => 735,  2600 => 734,  2597 => 733,  2593 => 732,  2591 => 731,  2585 => 730,  2575 => 723,  2569 => 721,  2567 => 720,  2562 => 719,  2560 => 718,  2558 => 717,  2552 => 716,  2542 => 709,  2538 => 707,  2529 => 705,  2525 => 704,  2520 => 703,  2517 => 702,  2508 => 700,  2503 => 699,  2500 => 698,  2497 => 697,  2494 => 696,  2479 => 694,  2476 => 693,  2472 => 692,  2469 => 691,  2451 => 690,  2449 => 689,  2447 => 688,  2441 => 687,  2432 => 681,  2423 => 679,  2417 => 677,  2415 => 676,  2408 => 675,  2404 => 674,  2401 => 673,  2399 => 672,  2393 => 671,  2382 => 667,  2380 => 666,  2378 => 665,  2376 => 664,  2370 => 663,  2358 => 659,  2353 => 657,  2351 => 656,  2345 => 655,  2336 => 651,  2330 => 649,  2328 => 648,  2322 => 646,  2320 => 645,  2300 => 644,  2294 => 643,  2284 => 638,  2281 => 637,  2277 => 635,  2274 => 634,  2268 => 632,  2265 => 631,  2262 => 630,  2259 => 629,  2253 => 627,  2250 => 626,  2244 => 624,  2241 => 623,  2239 => 622,  2233 => 621,  2221 => 616,  2218 => 615,  2215 => 614,  2212 => 613,  2210 => 612,  2204 => 611,  2192 => 606,  2189 => 605,  2183 => 603,  2180 => 602,  2173 => 601,  2171 => 600,  2165 => 599,  2153 => 592,  2151 => 591,  2145 => 589,  2143 => 588,  2137 => 587,  2126 => 580,  2120 => 578,  2118 => 577,  2115 => 576,  2111 => 574,  2109 => 573,  2106 => 572,  2100 => 570,  2097 => 569,  2095 => 568,  2092 => 567,  2082 => 566,  2079 => 565,  2073 => 563,  2071 => 562,  2068 => 561,  2065 => 560,  2062 => 559,  2060 => 558,  2054 => 556,  2051 => 555,  2040 => 554,  2038 => 553,  2033 => 552,  2030 => 551,  2028 => 550,  2022 => 549,  2010 => 545,  2004 => 543,  2000 => 542,  1995 => 541,  1989 => 538,  1986 => 537,  1983 => 536,  1981 => 535,  1975 => 534,  1965 => 531,  1959 => 530,  1948 => 526,  1944 => 525,  1939 => 524,  1933 => 523,  1923 => 520,  1920 => 519,  1914 => 518,  1905 => 514,  1899 => 512,  1896 => 511,  1890 => 509,  1888 => 508,  1880 => 507,  1877 => 506,  1871 => 505,  1861 => 502,  1858 => 501,  1852 => 500,  1843 => 496,  1837 => 494,  1834 => 493,  1828 => 491,  1826 => 490,  1820 => 489,  1817 => 488,  1811 => 487,  1801 => 484,  1795 => 483,  1785 => 478,  1781 => 476,  1779 => 475,  1776 => 474,  1770 => 472,  1767 => 471,  1761 => 469,  1758 => 468,  1752 => 466,  1749 => 465,  1743 => 463,  1741 => 462,  1737 => 461,  1735 => 460,  1719 => 459,  1716 => 458,  1710 => 456,  1707 => 455,  1704 => 454,  1701 => 453,  1698 => 452,  1695 => 451,  1692 => 450,  1689 => 449,  1686 => 448,  1682 => 445,  1679 => 442,  1678 => 441,  1677 => 440,  1675 => 439,  1672 => 438,  1669 => 437,  1667 => 436,  1665 => 435,  1659 => 434,  1644 => 430,  1640 => 427,  1637 => 424,  1636 => 423,  1635 => 422,  1633 => 421,  1630 => 420,  1628 => 419,  1622 => 418,  1609 => 410,  1606 => 409,  1603 => 408,  1601 => 407,  1594 => 406,  1588 => 404,  1585 => 403,  1582 => 402,  1580 => 401,  1578 => 400,  1572 => 399,  1561 => 395,  1558 => 394,  1556 => 393,  1550 => 392,  1539 => 388,  1536 => 387,  1534 => 386,  1528 => 385,  1516 => 379,  1512 => 378,  1508 => 377,  1504 => 376,  1499 => 375,  1496 => 374,  1493 => 373,  1487 => 371,  1481 => 368,  1476 => 367,  1473 => 366,  1470 => 365,  1467 => 364,  1465 => 363,  1459 => 361,  1457 => 360,  1449 => 359,  1426 => 358,  1423 => 357,  1420 => 356,  1417 => 355,  1415 => 354,  1409 => 353,  1399 => 348,  1393 => 346,  1390 => 345,  1384 => 343,  1382 => 342,  1377 => 341,  1374 => 340,  1371 => 339,  1364 => 336,  1358 => 333,  1353 => 332,  1350 => 331,  1347 => 330,  1344 => 329,  1342 => 328,  1336 => 326,  1334 => 325,  1328 => 324,  1307 => 323,  1304 => 322,  1301 => 321,  1299 => 320,  1297 => 319,  1291 => 318,  1280 => 312,  1278 => 311,  1277 => 310,  1276 => 309,  1275 => 308,  1272 => 307,  1269 => 306,  1262 => 303,  1256 => 300,  1251 => 299,  1248 => 298,  1245 => 297,  1242 => 296,  1240 => 295,  1234 => 293,  1232 => 292,  1226 => 291,  1205 => 290,  1202 => 289,  1199 => 288,  1197 => 287,  1195 => 286,  1189 => 285,  1181 => 282,  1177 => 280,  1174 => 279,  1171 => 278,  1167 => 276,  1161 => 274,  1155 => 272,  1152 => 271,  1149 => 270,  1147 => 269,  1134 => 268,  1127 => 266,  1113 => 265,  1110 => 264,  1107 => 263,  1104 => 262,  1101 => 261,  1098 => 260,  1095 => 259,  1092 => 258,  1088 => 256,  1085 => 255,  1081 => 254,  1079 => 253,  1076 => 252,  1072 => 249,  1069 => 246,  1068 => 245,  1067 => 244,  1065 => 243,  1062 => 242,  1059 => 241,  1053 => 240,  1045 => 237,  1041 => 235,  1038 => 234,  1032 => 233,  1028 => 231,  1026 => 230,  1023 => 229,  1017 => 227,  1011 => 225,  1009 => 224,  1005 => 223,  989 => 222,  986 => 221,  983 => 220,  980 => 219,  977 => 218,  974 => 217,  971 => 216,  968 => 215,  965 => 214,  958 => 212,  954 => 211,  951 => 210,  946 => 209,  942 => 207,  939 => 206,  936 => 205,  933 => 204,  930 => 203,  927 => 202,  924 => 201,  921 => 200,  915 => 199,  904 => 195,  898 => 193,  895 => 192,  892 => 191,  886 => 190,  874 => 185,  871 => 184,  862 => 182,  857 => 181,  854 => 180,  839 => 178,  836 => 177,  833 => 176,  831 => 175,  828 => 174,  825 => 173,  822 => 172,  820 => 171,  817 => 170,  815 => 169,  814 => 168,  813 => 167,  812 => 166,  810 => 165,  807 => 164,  804 => 163,  801 => 162,  798 => 161,  796 => 160,  790 => 159,  780 => 155,  764 => 154,  761 => 153,  755 => 152,  746 => 148,  735 => 144,  731 => 143,  727 => 142,  718 => 141,  715 => 140,  711 => 139,  706 => 138,  704 => 137,  698 => 136,  688 => 132,  686 => 131,  680 => 130,  671 => 126,  666 => 125,  664 => 124,  659 => 122,  656 => 121,  652 => 119,  650 => 118,  645 => 116,  642 => 115,  635 => 112,  633 => 111,  630 => 110,  627 => 109,  622 => 108,  617 => 107,  614 => 106,  612 => 105,  606 => 104,  596 => 99,  590 => 97,  587 => 96,  584 => 95,  578 => 93,  575 => 92,  572 => 91,  569 => 90,  563 => 88,  557 => 86,  554 => 85,  551 => 84,  548 => 83,  545 => 82,  542 => 81,  539 => 80,  533 => 78,  530 => 77,  527 => 76,  521 => 74,  518 => 73,  516 => 72,  513 => 71,  510 => 70,  507 => 69,  505 => 68,  499 => 67,  490 => 63,  484 => 61,  481 => 60,  478 => 59,  476 => 58,  471 => 57,  468 => 56,  465 => 55,  459 => 53,  456 => 52,  454 => 51,  451 => 50,  448 => 49,  445 => 48,  439 => 47,  431 => 43,  425 => 40,  422 => 39,  415 => 35,  400 => 34,  397 => 33,  394 => 32,  391 => 31,  388 => 30,  382 => 29,  371 => 25,  365 => 23,  363 => 22,  356 => 21,  352 => 18,  349 => 15,  348 => 14,  347 => 13,  345 => 12,  342 => 11,  340 => 10,  334 => 9,  324 => 6,  321 => 5,  315 => 4,  308 => 776,  305 => 775,  303 => 768,  300 => 767,  298 => 730,  295 => 729,  292 => 727,  290 => 716,  287 => 715,  284 => 713,  282 => 687,  279 => 686,  276 => 684,  274 => 671,  271 => 670,  269 => 663,  266 => 662,  264 => 655,  261 => 654,  259 => 643,  256 => 642,  254 => 621,  251 => 620,  249 => 611,  246 => 610,  244 => 599,  241 => 598,  238 => 596,  236 => 587,  233 => 586,  230 => 584,  228 => 549,  225 => 548,  223 => 534,  220 => 533,  218 => 530,  215 => 528,  213 => 523,  210 => 522,  208 => 518,  205 => 517,  203 => 505,  200 => 504,  198 => 500,  195 => 499,  193 => 487,  190 => 486,  188 => 483,  185 => 482,  183 => 434,  180 => 433,  178 => 418,  175 => 417,  172 => 415,  170 => 399,  167 => 398,  165 => 392,  162 => 391,  160 => 385,  157 => 384,  155 => 353,  152 => 352,  150 => 318,  147 => 317,  145 => 285,  142 => 284,  140 => 240,  137 => 239,  135 => 199,  132 => 198,  130 => 190,  127 => 189,  125 => 159,  122 => 158,  120 => 152,  117 => 151,  115 => 136,  112 => 135,  110 => 130,  107 => 129,  105 => 104,  102 => 103,  100 => 67,  97 => 66,  95 => 47,  92 => 45,  90 => 29,  87 => 28,  85 => 9,  82 => 8,  80 => 4,  77 => 2,  14 => 1,);
    }
}
/* {% use 'form_div_layout.html.twig' %}*/
/* */
/* {# Buttons #}*/
/* {% block button_attributes %}*/
/*     {% set attr = attr|merge({class: 'btn ' ~ attr.class | default("btn-default")}) %}*/
/*     {{ parent() }}*/
/* {% endblock button_attributes %}*/
/* */
/* {% block button_widget %}*/
/* {% spaceless %}*/
/*     {% if label is empty %}*/
/*         {%- if label_format is defined and label_format is not empty -%}*/
/*             {% set label = label_format|replace({*/
/*             '%name%': name,*/
/*             '%id%': id,*/
/*             }) %}*/
/*         {%- else -%}*/
/*             {% set label = name|humanize %}*/
/*         {%- endif -%}*/
/*     {% endif %}*/
/*     <button type="{{ type|default('button') }}" {{ block('button_attributes') }}>*/
/*     {% if icon is not empty %}*/
/*             {{ mopa_bootstrap_icon(icon, icon_inverted|default(false)) }}*/
/*     {% endif %}*/
/*     {{ label|trans({}, translation_domain) }}</button>*/
/* {% endspaceless %}*/
/* {% endblock button_widget %}*/
/* */
/* {% block button_row %}*/
/*     {% spaceless %}*/
/*         {% if button_offset is defined and button_offset is not empty %}*/
/*             {% set attr = attr|merge({'for': id, 'class': button_offset }) %}*/
/*             <div class="form-group">*/
/*                 <div {% for attrname, attrvalue in attr %} {{attrname}}="{{attrvalue}}"{% endfor %}>*/
/*                 {{ form_widget(form) }}*/
/*                 </div>*/
/*             </div>*/
/*         {% else %}*/
/*             <div>*/
/*                 {{ form_widget(form) }}*/
/*             </div>*/
/*         {% endif %}*/
/*     {% endspaceless %}*/
/* {% endblock button_row %}*/
/* */
/* {# Widgets #}*/
/* {% block textarea_widget %}*/
/*     {% set type = type|default('text') %}*/
/*     {% if type != 'hidden' and ( widget_addon_prepend|default(null) is not null or widget_addon_append|default(null) is not null ) %}*/
/*     <div class="input-group">*/
/*         {% if widget_addon_prepend|default(null) is not null %}*/
/*             {% set widget_addon = widget_addon_prepend %}*/
/*             {{ block('widget_addon') }}*/
/*         {% endif %}*/
/*     {% endif %}*/
/*     {% set attr = attr|merge({'class': attr.class|default('') ~ ' ' ~ widget_form_control_class}) %}*/
/*     {{ parent() }}*/
/*     {% if type != 'hidden' and ( widget_addon_prepend|default(null) is not null or widget_addon_append|default(null) is not null ) %}*/
/*         {% if widget_addon_append|default(null) is not null %}*/
/*         {% set widget_addon = widget_addon_append %}*/
/*         {{ block('widget_addon') }}*/
/*         {% endif %}*/
/*     </div>*/
/*     {% endif %}*/
/* {% endblock textarea_widget %}*/
/* */
/* {% block form_widget_simple %}*/
/* {% spaceless %}*/
/*     {% set type = type|default('text') %}*/
/*     {% if type != 'hidden' and ( widget_addon_prepend|default(null) is not null or widget_addon_append|default(null) is not null or widget_btn_prepend|default(null) is not null or widget_btn_append|default(null) is not null ) %}*/
/*     <div class="input-group">*/
/*         {% if widget_btn_prepend|default(null) is not null %}*/
/*             {% set widget_btns = widget_btn_prepend %}*/
/*             {{ block('widget_btns') }}*/
/*         {% endif %}*/
/*         {% if widget_addon_prepend|default(null) is not null %}*/
/*             {% set widget_addon = widget_addon_prepend %}*/
/*             {{ block('widget_addon') }}*/
/*         {% endif %}*/
/*     {% endif %}*/
/*     {% if not widget_remove_btn|default(null) %}*/
/*         {% set attr = attr|merge({'class': attr.class|default('') ~ ' not-removable'}) %}*/
/*     {% endif %}*/
/*     {% set attr = attr|merge({'class': (attr.class|default('') ~ ' ' ~ widget_form_control_class)|trim}) %}*/
/*     {% if static_text is same as(true) %}*/
/*         <p class="form-control-static">{{ value }}</p>*/
/*     {% else %}*/
/*         {{ parent() }}*/
/*     {% endif %}*/
/*     {% if type != 'hidden' and ( widget_addon_prepend|default(null) is not null or widget_addon_append|default(null) is not null or widget_btn_prepend|default(null) is not null or widget_btn_append|default(null) is not null ) %}*/
/*         {% if widget_addon_append|default(null) is not null %}*/
/*             {% set widget_addon = widget_addon_append %}*/
/*             {{ block('widget_addon') }}*/
/*         {% endif %}*/
/*         {% if widget_btn_append|default(null) is not null %}*/
/*             {% set widget_btns = widget_btn_append %}*/
/*             {{ block('widget_btns') }}*/
/*         {% endif %}*/
/*     </div>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock form_widget_simple %}*/
/* */
/* {% block form_widget_compound %}*/
/* {% spaceless %}*/
/*     {% if form.parent == null %}*/
/*         {% if render_fieldset %}<fieldset>{% endif %}*/
/*         {% if show_legend %}{{ block('form_legend') }}{% endif %}*/
/*     {% endif %}*/
/* */
/*     {% if form.vars.tabbed %}*/
/*         {{ form_tabs(form) }}*/
/*         <div class="tab-content">*/
/*     {% endif %}*/
/* */
/*     {{ block('form_rows_visible') }}*/
/* */
/*     {% if form.vars.tabbed %}*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*     {{ form_rest(form) }}*/
/* */
/*     {% if form.parent == null %}*/
/*         {% if render_fieldset %}</fieldset>{% endif %}*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock form_widget_compound %}*/
/* */
/* {% block form_tabs %}*/
/* {% if form.vars.tabsView is defined %}*/
/* {{ form_widget(form.vars.tabsView) }}*/
/* {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block tabs_widget %}*/
/* {% spaceless %}*/
/* <ul class="{{ form.vars.attr.class }}">*/
/*     {% for tab in form.vars.tabs %}*/
/*         {% set class = (tab.active ? 'active ' : '') ~ (tab.disabled ? 'disabled' : '') %}*/
/*         <li{% if class|trim is not empty %} class="{{ class }}"{% endif %}>*/
/*             <a data-toggle="tab" href="#{{ tab.id }}">*/
/*                 {% if tab.icon %}{{ mopa_bootstrap_icon(tab.icon) }}{% endif %}*/
/*                 {{ tab.label|trans({}, tab.translation_domain) }}*/
/*             </a>*/
/*         </li>*/
/*     {% endfor %}*/
/* </ul>*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block form_tab %}*/
/*     {% set tab_attr = attr|merge({'class': 'tab-pane' ~ (form.vars.tab_active ? ' active' : '') ~ ' ' ~ attr.class|default(''), 'id': id}) %}*/
/*     <div{% for attrname, attrvalue in tab_attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}>*/
/*         {{ block('form_widget') }}*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block collection_widget %}*/
/* {% spaceless %}*/
/*     {% if prototype is defined %}*/
/*         {% set prototype_markup = form_row(prototype) %}*/
/*         {% set data_prototype_name = form.vars.form.vars.prototype.vars.name|default('__name__') %}*/
/*         {% set data_prototype_label = form.vars.form.vars.prototype.vars.label|default('__name__label__') %}*/
/*         {% set widget_form_group_attr = widget_form_group_attr|merge({*/
/*             'data-prototype': prototype_markup,*/
/*             'data-prototype-name': data_prototype_name,*/
/*             'data-prototype-label': data_prototype_label*/
/*         })|merge(attr) %}*/
/*     {% endif %}*/
/*     {# Add row by default use attr.class to change#}*/
/* 	{% if 'collection' in form.vars.block_prefixes and attr.class is defined %}*/
/* 		{% set widget_form_group_attr = widget_form_group_attr|merge({'class': widget_form_group_attr.class|default('row') ~ ' ' ~ attr.class}) %}*/
/* 	{% endif %}*/
/*     {# collection item adds class {form_id}_form-group  too #}*/
/*     {% set widget_form_group_attr = widget_form_group_attr|merge({'id': 'collection' ~ id ~ '_form_group', 'class': widget_form_group_attr.class ~ ' collection-items ' ~ id ~ '_form_group'}) %}*/
/* */
/*     <div {% for attrname,attrvalue in widget_form_group_attr %} {{attrname}}="{{attrvalue}}"{% endfor %}>*/
/*     {# Add initial prototype form #}*/
/*     {% if form.vars.value|length == 0 and prototype is defined %}*/
/*         {% for name in prototype_names %}*/
/*             {{ prototype_markup|replace({'__name__': name})|raw }}*/
/*         {% endfor %}*/
/*     {% endif %}*/
/*     {{ block('form_widget') }}*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock collection_widget %}*/
/* */
/* {% block choice_widget_collapsed %}*/
/*     {% set attr = attr|merge({'class': attr.class|default('') ~ ' ' ~ widget_form_control_class}) %}*/
/*     {% if widget_type == 'inline-btn' %}*/
/*         {{ block('choice_widget_expanded') }}*/
/*     {% else %}*/
/*         {{ parent() }}*/
/*     {% endif %}*/
/* {% endblock choice_widget_collapsed %}*/
/* */
/* {% block choice_widget_expanded %}*/
/*     {% spaceless %}*/
/*         {% set label_attr = label_attr|merge({'class': (label_attr.class|default(''))}) %}*/
/*         {% set label_attr = label_attr|merge({'class': (label_attr.class ~ ' ' ~ (widget_type != '' ? (multiple ? 'checkbox' : 'radio') ~ '-' ~ widget_type : ''))}) %}*/
/*         {% if expanded %}*/
/*             {% set attr = attr|merge({'class': attr.class|default('') ~ ' ' ~ horizontal_input_wrapper_class}) %}*/
/*         {% endif %}*/
/*         {% if widget_type == 'inline-btn' %}*/
/*             <div class="btn-group" data-toggle="buttons">*/
/*         {% endif %}*/
/*         {% for child in form %}*/
/*             {% if widget_type not in ['inline', 'inline-btn'] %}*/
/*                 <div class="{{ multiple ? 'checkbox' : 'radio' }}"*/
/*                 {%- if widget_type == 'inline-btn' %} class="btn-group" data-toggle="buttons"{% endif %}>*/
/*             {% endif %}*/
/*             {% if widget_type == 'inline-btn' %}*/
/*                 {% set label_attr = label_attr|default({})|merge({'class': 'btn ' ~ label_attr.class|default('')}) %}*/
/*             {% endif %}*/
/*             {% if child.vars.checked and widget_type == 'inline-btn' %}*/
/*                 {% set label_attr_copy = label_attr|default({})|merge({'class': 'active ' ~ label_attr.class|default('')}) %}*/
/*             {% else %}*/
/*                 {% set label_attr_copy = label_attr|default({}) %}*/
/*             {% endif %}*/
/*             <label{% for attrname, attrvalue in label_attr_copy %} {{ attrname }}="{{ attrvalue }}"{% endfor %}>*/
/*             {{ form_widget(child, {'horizontal_label_class': horizontal_label_class, 'horizontal_input_wrapper_class': horizontal_input_wrapper_class, 'attr': {'class': attr.widget_class|default('') }}) }}*/
/*             {% if widget_type == 'inline-btn' or widget_checkbox_label == 'widget'%}*/
/*                 {{ child.vars.label|trans({}, translation_domain)|raw }}*/
/*             {% else %}*/
/*                 {{ child.vars.label|trans({}, translation_domain) }}*/
/*             {% endif %}*/
/*             </label>*/
/*             {% if widget_type not in ['inline', 'inline-btn'] %}*/
/*                 </div>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*         {% if widget_type == 'inline-btn' %}*/
/*             </div>*/
/*         {% endif %}*/
/*     {% endspaceless %}*/
/* {% endblock choice_widget_expanded %}*/
/* */
/* {% block checkbox_widget %}*/
/*     {% spaceless %}*/
/*         {% if label is not same as(false) and label is empty %}*/
/*             {%- if label_format is defined and label_format is not empty -%}*/
/*                 {% set label = label_format|replace({*/
/*                 '%name%': name,*/
/*                 '%id%': id,*/
/*                 }) %}*/
/*             {%- else -%}*/
/*                 {% set label = name|humanize %}*/
/*             {%- endif -%}*/
/*         {% endif %}*/
/*         {% if form.parent != null and 'choice' not in form.parent.vars.block_prefixes %}*/
/*             <div*/
/*             {%- if widget_type == 'inline-btn' %} class="btn-group" data-toggle="buttons"*/
/*             {%- else %} class="checkbox"*/
/*             {%- endif %}>*/
/*         {% endif %}*/
/*         {% if form.parent != null and 'choice' not in form.parent.vars.block_prefixes and label_render %}*/
/*             {% if widget_type == 'inline-btn' %}*/
/*                 {% set label_attr = attr|default({}) %}*/
/*                 {% if checked %}*/
/*                     {% set label_attr = label_attr|merge({'class': 'active ' ~ attr.class|default('')}) %}*/
/*                 {% endif %}*/
/*             {% endif %}*/
/*             <label{% for attrname, attrvalue in label_attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}*/
/*             {%- if not horizontal %} class="checkbox-inline"{% endif %}>*/
/*         {% endif %}*/
/*         <input type="checkbox" {{ block('widget_attributes') }}{% if value is defined %} value="{{ value }}"{% endif %}{% if checked %} checked="checked"{% endif %}/>*/
/*         {% if form.parent != null and 'choice' not in form.parent.vars.block_prefixes %}*/
/*             {% if label_render %}*/
/*                 {% if widget_checkbox_label in ['both', 'widget'] %}*/
/*                     {{ label|trans({}, translation_domain)|raw }}*/
/*                 {% else %}*/
/*                     {{ block('form_help') }}*/
/*                 {% endif %}*/
/*                 </label>*/
/*             {% endif %}*/
/*         {% endif %}*/
/*         {% if form.parent != null and 'choice' not in form.parent.vars.block_prefixes %}*/
/*             </div>*/
/*         {% endif %}*/
/*     {% endspaceless %}*/
/* {% endblock checkbox_widget %}*/
/* */
/* {% block date_widget %}*/
/* {% spaceless %}*/
/* {% if widget == 'single_text' %}*/
/*     {% if datepicker is defined %}*/
/*         {% set widget_addon_icon = widget_addon_append.icon is defined ? widget_addon_append.icon : 'calendar'  %}*/
/*         <div {% if datepicker.attr is defined %}{%- for attrname, attrvalue in datepicker.attr %}{{ attrname }}="{{ attrvalue }}" {% endfor %}{% endif %} data-provider="datepicker" class="input-group date" data-date="{{ value }}" data-link-field="{{ id }}" data-link-format="yyyy-mm-dd">*/
/*             <input type="hidden" value="{{ value }}" {{ block('widget_attributes') }}>*/
/*             {% if widget_reset_icon is defined and widget_reset_icon == true %}*/
/*                 <span class="input-group-addon">{{ mopa_bootstrap_icon('remove') }}</span>*/
/*             {% endif %}*/
/*             {# Clear the id & name attributes so that they don't override the hidden fields values #}*/
/*             {% set id = id ~ '_mopa_picker_display' %}*/
/*             {% set full_name = null %}*/
/*             {% set type = 'text' %}*/
/*             {{ block('form_widget_simple') }}*/
/*             <span class="input-group-addon">{{ mopa_bootstrap_icon(widget_addon_icon) }}</span>*/
/*         </div>*/
/*     {% else %}*/
/*         {{ block('form_widget_simple') }}*/
/*     {% endif %}*/
/* {% else %}*/
/*     {% set attr = attr|merge({'class': attr.class|default('inline')}) %}*/
/*     	<div class="row">*/
/*         {{ date_pattern|replace({*/
/*             '{{ year }}':  '<div class="'~date_wrapper_class['year']|default('col-xs-4')~'">'~form_widget(form.year, {'attr': {'class': attr.widget_class|default('') ~ ''}})~'</div>',*/
/*             '{{ month }}': '<div class="'~date_wrapper_class['month']|default('col-xs-4')~'">'~form_widget(form.month, {'attr': {'class': attr.widget_class|default('') ~ ''}})~'</div>',*/
/*             '{{ day }}':   '<div class="'~date_wrapper_class['day']|default('col-xs-4')~'">'~form_widget(form.day, {'attr': {'class': attr.widget_class|default('') ~ ''}})~'</div>',*/
/*         })|raw }}*/
/*         </div>*/
/* {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock date_widget %}*/
/* */
/* {% block time_widget %}*/
/* {% spaceless %}*/
/* {% if widget == 'single_text' %}*/
/*     {% if timepicker is defined %}*/
/*         {% set widget_addon_icon = widget_addon_append.icon is defined ? widget_addon_append.icon : 'time'  %}*/
/*         <div {% if timepicker.attr is defined %}{%- for attrname, attrvalue in timepicker.attr %}{{ attrname }}="{{ attrvalue }}" {% endfor %}{% endif %} data-provider="timepicker" class="input-group date" data-date="{{ value }}" data-link-field="{{ id }}" data-link-format="hh:ii">*/
/*             <input type="hidden" value="{{ value }}" {{ block('widget_attributes') }}>*/
/*             {% if widget_reset_icon is defined and widget_reset_icon == true %}*/
/*                 <span class="input-group-addon">{{ mopa_bootstrap_icon('remove') }}</span>*/
/*             {% endif %}*/
/*             {# Clear the id & name attributes so that they don't override the hidden fields values #}*/
/*             {% set id = id ~ '_mopa_picker_display' %}*/
/*             {% set full_name = null %}*/
/*             {% set type = 'text' %}*/
/*             {{ block('form_widget_simple') }}*/
/*             <span class="input-group-addon">{{ mopa_bootstrap_icon(widget_addon_icon) }}</span>*/
/*         </div>*/
/*     {% else %}*/
/*         {{ block('form_widget_simple') }}*/
/*     {% endif %}*/
/* {% else %}*/
/*     {% set attr = attr|merge({'class': attr.class|default('')}) %}*/
/*     {% spaceless %}*/
/*     {{ form_widget(form.hour, { 'horizontal_input_wrapper_class': horizontal_input_wrapper_class|default('col-sm-2')}) }}*/
/*     {% if with_minutes %}*/
/*         {{ form_widget(form.minute, { 'horizontal_input_wrapper_class': horizontal_input_wrapper_class|default('col-sm-2')}) }}*/
/*     {% endif %}*/
/*     {% if with_seconds %}*/
/*         :{{ form_widget(form.second, { 'horizontal_input_wrapper_class': horizontal_input_wrapper_class|default('col-sm-2') }) }}*/
/*     {% endif %}*/
/*     {% endspaceless %}*/
/* {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock time_widget %}*/
/* */
/* {% block datetime_widget %}*/
/* {% spaceless %}*/
/*     {% if widget == 'single_text' %}*/
/*         {% if datetimepicker is defined %}*/
/*             {% set widget_addon_icon = widget_addon_append.icon is defined ? widget_addon_append.icon : 'th'  %}*/
/*             <div {% if datetimepicker.attr is defined %}{%- for attrname, attrvalue in datetimepicker.attr %}{{ attrname }}="{{ attrvalue }}" {% endfor %}{% endif %} data-provider="datetimepicker" class="input-group date" data-date="{% if value %}{{ value|date('Y-m-d H:i') }}{% endif %}" data-link-field="{{ id }}" data-link-format="yyyy-mm-dd hh:ii">*/
/*                 <input type="hidden" value="{% if value %}{{ value|date('Y-m-d H:i') }}{% endif %}" {{ block('widget_attributes') }}>*/
/*                 {% if widget_reset_icon is defined and widget_reset_icon == true %}*/
/*                     <span class="input-group-addon">{{ mopa_bootstrap_icon('remove') }}</span>*/
/*                 {% endif %}*/
/*                 {# Clear the id & name attributes so that they don't override the hidden fields values #}*/
/*                 {% set id = id ~ '_mopa_picker_display' %}*/
/*                 {% set full_name = null %}*/
/*                 {% set type = 'text' %}*/
/*                 {{ block('form_widget_simple') }}*/
/*                 <span class="input-group-addon">{{ mopa_bootstrap_icon(widget_addon_icon) }}</span>*/
/*             </div>*/
/*         {% else %}*/
/*             {{ block('form_widget_simple') }}*/
/*         {% endif %}*/
/*     {% else %}*/
/*             {% set attr = attr|merge({'class': attr.class|default('')}) %}*/
/*             <div {{ block('widget_container_attributes') }}>*/
/*                 {{ form_errors(form.date) }}*/
/*                 {{ form_errors(form.time) }}*/
/*                 {{ form_widget(form.date, {'attr': {'class': attr.widget_class|default('')}, 'horizontal_input_wrapper_class': horizontal_input_wrapper_class|default('col-sm-3')}) }}*/
/*                 {{ form_widget(form.time, {'attr': {'class': attr.widget_class|default('')}, 'horizontal_input_wrapper_class': horizontal_input_wrapper_class|default('col-sm-2')}) }}*/
/*             </div>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock datetime_widget %}*/
/* */
/* {% block percent_widget %}*/
/* {% spaceless %}*/
/*     {% set widget_addon_append = widget_addon_append|merge({'text': widget_addon_append.text|default('%')}) %}*/
/*     {{ block('form_widget_simple') }}*/
/* {% endspaceless %}*/
/* {% endblock percent_widget %}*/
/* */
/* {% block money_widget %}*/
/* {% spaceless %}*/
/*     {% set widget_addon_prepend = (widget_addon_prepend != false or widget_addon_prepend == null) and money_pattern != '{{ widget }}' ? {'text': money_pattern|replace({ '{{ widget }}': ''})} : widget_addon_prepend|default(null) %}*/
/*     {{ block('form_widget_simple') }}*/
/* {% endspaceless %}*/
/* {% endblock money_widget %}*/
/* */
/* {% block file_widget %}*/
/* {% spaceless %}*/
/* {% set type = type|default('file') %}*/
/*     {% if widget_addon_prepend|default(null) is not null %}*/
/*         {% set widget_addon = widget_addon_prepend %}*/
/*         {{ block('widget_addon') }}*/
/*     {% endif %}*/
/* <input type="{{ type }}" {{ block('widget_attributes') }}/>*/
/* {% if type != 'hidden' and widget_addon.type|default(null) is not null %}*/
/*     {% if widget_addon_append|default(null) is not null %}*/
/*         {% set widget_addon = widget_addon_append %}*/
/*         {{ block('widget_addon') }}*/
/*     {% endif %}*/
/* {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock file_widget %}*/
/* */
/* {# Labels #}*/
/* */
/* {% block form_legend %}*/
/* {% spaceless %}*/
/*     {% if label is empty %}*/
/*         {%- if label_format is defined and label_format is not empty -%}*/
/*             {% set label = label_format|replace({*/
/*             '%name%': name,*/
/*             '%id%': id,*/
/*             }) %}*/
/*         {%- else -%}*/
/*             {% set label = name|humanize %}*/
/*         {%- endif -%}*/
/*     {% endif %}*/
/*     <{{ legend_tag }}>{{ label|trans({}, translation_domain) }}</{{ legend_tag }}>*/
/* {% endspaceless %}*/
/* {% endblock form_legend %}*/
/* */
/* {% block form_label %}*/
/* {% if 'checkbox' not in block_prefixes or widget_checkbox_label in ['label', 'both'] %}*/
/* {% spaceless %}*/
/*     {% if label is not same as(false) %}*/
/*         {% if label is empty %}*/
/*             {%- if label_format is defined and label_format is not empty -%}*/
/*                 {% set label = label_format|replace({*/
/*                 '%name%': name,*/
/*                 '%id%': id,*/
/*                 }) %}*/
/*             {%- else -%}*/
/*                 {% set label = name|humanize %}*/
/*             {%- endif -%}*/
/*         {% endif %}*/
/*         {% if not compound %}*/
/*             {% set label_attr = label_attr|merge({'for': id}) %}*/
/*         {% endif %}*/
/*         {% set label_attr_class = '' %}*/
/*         {% if horizontal %}*/
/*             {% set label_attr_class = 'control-label ' ~ label_attr_class ~ horizontal_label_class %}*/
/*         {% endif %}*/
/*         {% if horizontal_label_div_class %}*/
/*         <div class="{{ horizontal_label_div_class }}">*/
/*         {% endif %}*/
/*         {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ " " ~ label_attr_class ~ (required ? ' required' : ' optional'))|trim }) %}*/
/*         <label{% for attrname,attrvalue in label_attr %} {{attrname}}="{{attrvalue}}"{% endfor %}>*/
/*         {{ label|trans({}, translation_domain) }}*/
/*         {{- block('label_asterisk') }}*/
/*         {% if 'collection' in form.vars.block_prefixes and widget_add_btn|default(null) and form.vars.allow_add == true %}*/
/*             &nbsp;{{ block('form_widget_add_btn') }}*/
/*         {% endif %}*/
/*         {% if help_label %}*/
/*             {{ block('help_label') }}*/
/*         {% endif %}*/
/*         {% if help_label_tooltip.title %}*/
/*             {{ block('help_label_tooltip') }}*/
/*         {% endif %}*/
/*         {% if help_label_popover.title %}*/
/*             {{ block('help_label_popover') }}*/
/*         {% endif %}*/
/*         </label>*/
/*         {% if horizontal_label_div_class %}*/
/*         </div>*/
/*         {% endif %}*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endif %}*/
/* {% endblock form_label %}*/
/* */
/* {% block help_label %}*/
/*     <span class="help-block">{{ help_label|trans({}, translation_domain) }}</span>*/
/* {% endblock help_label %}*/
/* */
/* {% block help_label_tooltip %}*/
/*     <span class="help-block">*/
/*         <a href="#" data-toggle="tooltip" data-placement="{{ help_label_tooltip.placement}}" data-title="{{ help_label_tooltip.title|trans({}, translation_domain) }}">*/
/*             {% if help_label_tooltip.icon is not same as(false) %}*/
/*                 {{ mopa_bootstrap_icon(help_label_tooltip.icon) }}*/
/*             {% endif %}*/
/*             {% if help_label_tooltip.text is not same as(null) %}*/
/*                 {{ help_label_tooltip.text }}*/
/*             {% endif %}*/
/*         </a>*/
/*     </span>*/
/* {% endblock help_label_tooltip %}*/
/* */
/* {% block help_block_tooltip %}*/
/*     {% set help_label_tooltip = help_block_tooltip %}*/
/*     {{ block('help_label_tooltip') }}*/
/* {% endblock help_block_tooltip %}*/
/* */
/* {% block help_label_popover %}*/
/*     <span class="help-block">*/
/*         <a href="#" data-toggle="popover" data-trigger="hover" data-placement="{{ help_label_popover.placement}}" data-title="{{ help_label_popover.title|trans({}, translation_domain) }}" data-content="{{ help_label_popover.content|trans({}, translation_domain) }}" data-html="true">*/
/*             {% if help_label_popover.icon is not same as(false) %}*/
/*                 {{ mopa_bootstrap_icon(help_label_popover.icon) }}*/
/*             {% endif %}*/
/*             {% if help_label_popover.text is not same as(null) %}*/
/*                 {{ help_label_popover.text|raw }}*/
/*             {% endif %}*/
/*         </a>*/
/*     </span>*/
/* {% endblock help_label_popover %}*/
/* */
/* {% block help_block_popover %}*/
/*     {% set help_label_popover = help_block_popover %}*/
/*     {{ block('help_label_popover') }}*/
/* {% endblock help_block_popover %}*/
/* */
/* {% block form_actions_widget %}*/
/*     {% for button in form.children %}*/
/*         {{ form_widget(button) }}&nbsp; {# this needs to be here due to https://github.com/twbs/bootstrap/issues/3245 #}*/
/*     {% endfor  %}*/
/* {% endblock %}*/
/* */
/* {# Rows #}*/
/* {% block form_actions_row %}*/
/*     {{ block('button_row')  }}*/
/* {% endblock %}*/
/* */
/* {% block form_rows_visible %}*/
/* {% spaceless %}*/
/*      {% if errors|length > 0 %}*/
/*         <div class="symfony-form-errors">*/
/*             {{ form_errors(form) }}*/
/*         </div>*/
/*     {% endif %}*/
/*     {% for child in form %}*/
/*         {% if 'hidden' not in child.vars.block_prefixes %} {# smbdy: why do we not add the hiddens of childs? 131024 phiamo: i think form rest should do this !? it was afaik removed because it cause side effekts #}*/
/*             {{ form_row(child) }}*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* {% endspaceless %}*/
/* {% endblock form_rows_visible %}*/
/* */
/* {% block form_row %}*/
/* {% spaceless %}*/
/*     {% if 'tab' in form.vars.block_prefixes %}*/
/*         {{ block('form_tab') }}*/
/*     {% elseif embed_form is same as(true) %}*/
/*         {% if widget_prefix is not empty %}{{ widget_prefix|trans({}, translation_domain)|raw }}{% endif %} {{ form_widget(form, _context) }} {% if widget_suffix is not empty %}{{ widget_suffix|trans({}, translation_domain)|raw }}{% endif %}*/
/*     {% else %}*/
/*         {{ block('widget_form_group_start') }}*/
/* */
/*         {% if horizontal and not label_render %}*/
/*             {% set horizontal_input_wrapper_class = horizontal_input_wrapper_class ~ ' ' ~ horizontal_label_offset_class %}*/
/*         {% endif %}*/
/* */
/*         {% if horizontal %}*/
/*         <div class="{{ horizontal_input_wrapper_class }}">*/
/*         {% endif %}*/
/* */
/*         {% if widget_prefix is not empty %}{{ widget_prefix|trans({}, translation_domain)|raw }}{% endif %} {{ form_widget(form, _context) }} {% if widget_suffix is not empty %}{{ widget_suffix|trans({}, translation_domain)|raw }}{% endif %}*/
/* */
/*         {% set type = type|default('text') %}*/
/*         {% if type != 'hidden' %}*/
/*         {{ block('form_message') }}*/
/*         {% endif %}*/
/* */
/*         {% if horizontal %}*/
/*         </div>*/
/*         {% endif %}*/
/* */
/*         {% if form.parent is not null and 'collection' in form.parent.vars.block_prefixes and widget_remove_btn|default(null) and form.parent.vars.allow_delete|default(false) %}*/
/*             {{ block('form_widget_remove_btn') }}*/
/*         {% endif -%}*/
/*         {{ block('widget_form_group_end') }}*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock form_row %}*/
/* */
/* {# Support #}*/
/* */
/* {% block form_message %}*/
/* {% spaceless %}*/
/*     {{ form_errors(form) }}*/
/* */
/*     {% if ('checkbox' not in block_prefixes or widget_checkbox_label != 'label') and help_block %}*/
/*         {{ block('form_help') }}*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock form_message %}*/
/* */
/* {# Help #}*/
/* */
/* {% block form_help %}*/
/* {% spaceless %}*/
/*     {% if help_block %}<p class="help-block">{{ help_block|trans({}, translation_domain)|raw }}</p>{%endif %}*/
/*     {% if help_block_tooltip.title %}*/
/*         &nbsp;{{ block('help_block_tooltip') }}*/
/*     {% endif %}*/
/*     {% if help_block_popover.title %}*/
/*         &nbsp;{{ block('help_block_popover') }}*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock form_help %}*/
/* */
/* {% block form_widget_add_btn %}*/
/* {% spaceless %}*/
/*     {% if widget_add_btn|default(null) %}*/
/*         {% set button_type = 'add' %}*/
/*         {% set button_values = widget_add_btn %}*/
/*         {{ block('collection_button') }}*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock form_widget_add_btn %}*/
/* */
/* {% block form_widget_remove_btn %}*/
/* {% spaceless %}*/
/*     {% if widget_remove_btn.wrapper_div is defined and widget_remove_btn.wrapper_div is not same as(false) %}*/
/*         <div class="{{ widget_remove_btn.wrapper_div.class }}">*/
/*     {% endif %}*/
/*     {% if widget_remove_btn.horizontal_wrapper_div is defined and widget_remove_btn.horizontal_wrapper_div is not same as(false) %}*/
/*         <div class="{{ widget_remove_btn.horizontal_wrapper_div.class }}">*/
/*     {% endif %}*/
/*     {% if widget_remove_btn|default(null) %}*/
/*     {% set button_type = 'remove' %}*/
/*     {% set button_values = widget_remove_btn %}*/
/*     {{ block('collection_button') }}*/
/*     {% endif %}*/
/*     {% if widget_remove_btn.horizontal_wrapper_div is defined and widget_remove_btn.horizontal_wrapper_div is not same as(false) %}*/
/*         </div>*/
/*     {% endif %}*/
/*     {% if widget_remove_btn.wrapper_div is defined and widget_remove_btn.wrapper_div is not same as(false) %}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock form_widget_remove_btn %}*/
/* */
/* {% block collection_button %}*/
/* <a {% for attrname,attrvalue in button_values.attr %} {{attrname}}="{{attrvalue}}"{% endfor %} data-collection-{{ button_type }}-btn=".{{ form.vars['id'] }}_form_group">*/
/* {% if button_values.icon is not null %}*/
/*     {{ mopa_bootstrap_icon(button_values.icon, button_values.icon_inverted|default(false)) }}*/
/* {% endif %}*/
/* {% if button_values.label is defined %}*/
/*     {{ button_values.label|trans({}, translation_domain) }}*/
/* {% endif %}*/
/* </a>*/
/* */
/* {% endblock collection_button %}*/
/* */
/* {% block label_asterisk %}*/
/* {% if required %}*/
/*     {%- if render_required_asterisk %}&nbsp;<span class="asterisk">*</span>{% endif %}*/
/* {% else %}*/
/*     {%- if render_optional_text %}&nbsp;<span>{{ "(optional)"|trans({}, translation_domain) }}</span>{% endif %}*/
/* {% endif %}*/
/* {% endblock label_asterisk %}*/
/* */
/* {% block widget_addon %}*/
/* {% spaceless %}*/
/* {% set widget_addon_icon = widget_addon.icon is defined ? widget_addon.icon : null  %}*/
/* {% set widget_addon_icon_inverted = widget_addon.icon_inverted is defined ? widget_addon.icon_inverted : false  %}*/
/*     <span class="input-group-addon">{{ (widget_addon.text|default(false) ? widget_addon.text|trans({}, translation_domain)|raw : mopa_bootstrap_icon(widget_addon_icon, widget_addon_icon_inverted)) }}</span>*/
/* {% endspaceless %}*/
/* {% endblock widget_addon %}*/
/* */
/* {% block widget_btns %}*/
/* {% spaceless %}*/
/*     <span class="input-group-btn">*/
/*     {% for widget_btn in widget_btns %}*/
/*         <button type="{{ widget_btn.type | default('button') }}" class="{{ 'btn ' ~ widget_btn.class | default('btn-default') }}">*/
/*         {% if widget_btn.icon is not empty %}*/
/*                 {{ mopa_bootstrap_icon(widget_btn.icon, widget_btn.icon_inverted | default(false)) }}*/
/*         {% endif %}*/
/*         {{ widget_btn.label | default("") | trans({}, translation_domain) }}</button>*/
/*     {% endfor %}*/
/*     </span>*/
/* {% endspaceless %}*/
/* {% endblock widget_btns %}*/
/* */
/* {# Errors #}*/
/* */
/* {% block form_errors %}*/
/* {% spaceless %}*/
/* {% if error_delay %}*/
/*     {% for child in form %}*/
/*         {% if loop.index == 1 %}*/
/*             {% if child.set('errors', errors) %}{% endif %}*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* {% else %}*/
/*     {% if errors|length > 0 %}*/
/*         {% if form.parent == null %}*/
/*             {% from 'MopaBootstrapBundle::flash.html.twig' import flash %}*/
/*             {% for error in errors %}*/
/*                 {{ flash('danger', error.message) }}*/
/*             {% endfor %}*/
/*         {% else %}*/
/*             <span class="help-{{ block('error_type') }}">*/
/*             {% for error in errors %}*/
/*                 {{ error.message }} <br>*/
/*             {% endfor %}*/
/*             </span>*/
/*         {% endif %}*/
/*     {% endif %}*/
/* {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock form_errors %}*/
/* */
/* {# used to determine which type of error #}*/
/* */
/* {% block error_type %}*/
/* {% spaceless %}*/
/* {% if error_type %}*/
/*     {{ error_type }}*/
/* {% elseif form.parent == null %}*/
/*     {{ form.vars.error_type | default('inline') }}*/
/* {% else %}*/
/*     block*/
/* {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock error_type %}*/
/* */
/* {# widget helper blocks #}*/
/* */
/* {% block widget_form_group_start %}*/
/* {% if widget_form_group|default(false) or form.parent == null %}*/
/*     {% if form.parent is not null and 'collection' in form.parent.vars.block_prefixes %} {# i am a collection child #}*/
/*         {% if not omit_collection_item %}*/
/*             {# collection item wrapper doesnt need form-group it gets added to childs anyways #}*/
/*         	{% set widget_form_group_attr = widget_form_group_attr|merge({class: 'collection-item'}) %}*/
/*         {% endif %}*/
/*     {% endif %}*/
/*     {% if errors|length > 0 %}*/
/* 	    {# Add Error Class to Widget Wrapper#}*/
/* 	    {% set widget_form_group_attr = widget_form_group_attr|merge({'class': widget_form_group_attr.class|default('') ~ ' has-error'}) %}*/
/*     {% endif %}*/
/*     {% if help_widget_popover.selector is same as(null) %}*/
/*         {% set help_widget_popover = help_widget_popover|merge({'selector': '#' ~ id }) %}*/
/*     {% endif %}*/
/*     <div{% if help_widget_popover.title is not same as(null) %}{{ block('help_widget_popover') }}{% endif %} {% for attrname,attrvalue in widget_form_group_attr %} {{attrname}}="{{attrvalue}}"{% endfor %}>*/
/*     {# a form item containing the field in block_prefixes is a near subform or a field directly #}*/
/*     {% if (form|length > 0 and form.parent != null)*/
/*         and 'field' not in form.vars.block_prefixes*/
/*         and 'date' not in form.vars.block_prefixes %}*/
/*         {% if show_child_legend%}*/
/*             {{ block('form_legend') }}*/
/*         {% elseif label_render %}*/
/*             {{ form_label(form, label|default(null)) }}*/
/*         {% else %}*/
/*         {% endif %}*/
/*     {% else %}*/
/*         {% if label_render %}*/
/*             {{ form_label(form, label|default(null)) }}*/
/*         {% endif %}*/
/*     {% endif %}*/
/* {% else %}*/
/*     {% if label_render %}*/
/*         {{ form_label(form, label|default(null)) }}*/
/*     {% endif %}*/
/* {% endif %}*/
/* {% endblock widget_form_group_start %}*/
/* */
/* {% block help_widget_popover %}*/
/*  {% spaceless %}*/
/*  {% for attrname,attrvalue in help_widget_popover %}*/
/*  data-{{attrname}}="{{attrvalue|trans({}, domain|default('messages'))}}"*/
/*  {% endfor %}*/
/*  {% endspaceless %}*/
/* {% endblock help_widget_popover %}*/
/* */
/* {% block widget_form_group_end %}*/
/* {% spaceless %}*/
/* {% if widget_form_group|default(false) or form.parent == null %}*/
/*     </div>*/
/* {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock widget_form_group_end %}*/
/* */
