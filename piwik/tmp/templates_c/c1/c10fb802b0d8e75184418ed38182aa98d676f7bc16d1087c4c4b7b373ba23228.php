<?php

/* @Live/_actionCommon.twig */
class __TwigTemplate_8d87d22abd2198cb622403ea7db5bb954dc6787bdf38ac76157c77ead59a0e6a extends Twig_Template
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
        echo "<li class=\"";
        if ($this->getAttribute(($context["action"] ?? null), "goalName", array(), "any", true, true)) {
            echo "goal";
        } else {
            echo "action";
        }
        echo "\"
    title=\"";
        // line 2
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Live.renderActionTooltip", ($context["action"] ?? $this->getContext($context, "action")), ($context["visitInfo"] ?? $this->getContext($context, "visitInfo"))));
        echo "\">
    <div>
        ";
        // line 5
        echo "        ";
        if ( !twig_test_empty((($this->getAttribute(($context["action"] ?? null), "pageTitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["action"] ?? null), "pageTitle", array()), false)) : (false)))) {
            // line 6
            echo "            <span class=\"truncated-text-line\">";
            echo call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), array($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "pageTitle", array())));
            echo "</span>
        ";
        }
        // line 8
        echo "        ";
        if ($this->getAttribute(($context["action"] ?? null), "siteSearchKeyword", array(), "any", true, true)) {
            // line 9
            echo "            ";
            if (($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "type", array()) == "search")) {
                // line 10
                echo "                <img src='";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "icon", array()), "html", null, true);
                echo "' title='";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Actions_SubmenuSitesearch")), "html", null, true);
                echo "'
                     class=\"action-list-action-icon search\">
            ";
            }
            // line 13
            echo "            <span class=\"truncated-text-line\">";
            echo call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), array($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "siteSearchKeyword", array())));
            echo "</span>
        ";
        }
        // line 15
        echo "        ";
        if ( !twig_test_empty($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "url", array()))) {
            // line 16
            echo "            ";
            if ((($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "type", array()) == "action") &&  !twig_test_empty((($this->getAttribute(($context["action"] ?? null), "pageTitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["action"] ?? null), "pageTitle", array()), false)) : (false))))) {
                echo "<p>";
            }
            // line 17
            echo "            ";
            if ((($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "type", array()) == "download") || ($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "type", array()) == "outlink"))) {
                // line 18
                echo "                <img src='";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "icon", array()), "html", null, true);
                echo "' class=\"action-list-action-icon ";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "type", array()), "html", null, true);
                echo "\">
            ";
            }
            // line 20
            echo "
            ";
            // line 21
            if ((((is_string($__internal_4ad3a90adbb9c356fcb945fec3f75991b7e36b42cb038c53454870a5490ba610 = twig_lower_filter($this->env, twig_trim_filter($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "url", array())))) && is_string($__internal_fb9fc03f419e5f622e9a473cc68c4972306893b70b9703db052c4132875453fd = "javascript:") && ('' === $__internal_fb9fc03f419e5f622e9a473cc68c4972306893b70b9703db052c4132875453fd || 0 === strpos($__internal_4ad3a90adbb9c356fcb945fec3f75991b7e36b42cb038c53454870a5490ba610, $__internal_fb9fc03f419e5f622e9a473cc68c4972306893b70b9703db052c4132875453fd))) || (is_string($__internal_556c6f5e0e5b45ef855b7b24f2e745cf8dbcf76e32ddba15cf2a97e789de3adc = twig_lower_filter($this->env, twig_trim_filter($this->getAttribute(            // line 22
($context["action"] ?? $this->getContext($context, "action")), "url", array())))) && is_string($__internal_2f2d7f3a06b1eeb5d928afb817b6fcd34b96702b212a3cd7b976de7150ed286a = "vbscript:") && ('' === $__internal_2f2d7f3a06b1eeb5d928afb817b6fcd34b96702b212a3cd7b976de7150ed286a || 0 === strpos($__internal_556c6f5e0e5b45ef855b7b24f2e745cf8dbcf76e32ddba15cf2a97e789de3adc, $__internal_2f2d7f3a06b1eeb5d928afb817b6fcd34b96702b212a3cd7b976de7150ed286a)))) || (is_string($__internal_2e338c34e9cb236cf574c7441e45c4dacf3c75e7f720d18714f43b627c3564b4 = twig_lower_filter($this->env, twig_trim_filter($this->getAttribute(            // line 23
($context["action"] ?? $this->getContext($context, "action")), "url", array())))) && is_string($__internal_1580898f7d2f6ae12dc81941cace41fa6131aace5b8d7e7af1bc67e6262c22ff = "data:") && ('' === $__internal_1580898f7d2f6ae12dc81941cace41fa6131aace5b8d7e7af1bc67e6262c22ff || 0 === strpos($__internal_2e338c34e9cb236cf574c7441e45c4dacf3c75e7f720d18714f43b627c3564b4, $__internal_1580898f7d2f6ae12dc81941cace41fa6131aace5b8d7e7af1bc67e6262c22ff))))) {
                // line 24
                echo "                ";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "url", array()), "html", null, true);
                echo "
            ";
            } else {
                // line 26
                echo "                <a href=\"";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "url", array()), "html", null, true);
                echo "\" rel=\"noreferrer\" target=\"_blank\"
                   class=\"action-list-url truncated-text-line\">
                    ";
                // line 28
                echo \Piwik\piwik_escape_filter($this->env, twig_replace_filter($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "url", array()), array("http://" => "", "https://" => "")), "html", null, true);
                echo "
                </a>
            ";
            }
            // line 31
            echo "            ";
            if ((($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "type", array()) == "action") &&  !twig_test_empty((($this->getAttribute(($context["action"] ?? null), "pageTitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["action"] ?? null), "pageTitle", array()), false)) : (false))))) {
                echo "</p>";
            }
            // line 32
            echo "        ";
        } elseif (($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "type", array()) != "search")) {
            // line 33
            echo "            <p>
                <span>";
            // line 34
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_NotDefined", call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Actions_ColumnPageURL")))), "html", null, true);
            echo "</span>
            </p>
        ";
        }
        // line 37
        echo "    </div>
</li>
";
    }

    public function getTemplateName()
    {
        return "@Live/_actionCommon.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 37,  118 => 34,  115 => 33,  112 => 32,  107 => 31,  101 => 28,  95 => 26,  89 => 24,  87 => 23,  86 => 22,  85 => 21,  82 => 20,  74 => 18,  71 => 17,  66 => 16,  63 => 15,  57 => 13,  48 => 10,  45 => 9,  42 => 8,  36 => 6,  33 => 5,  28 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<li class=\"{% if action.goalName is defined %}goal{% else %}action{% endif %}\"
    title=\"{{ postEvent('Live.renderActionTooltip', action, visitInfo) }}\">
    <div>
        {# Page view / Download / Outlink #}
        {% if action.pageTitle|default(false) is not empty %}
            <span class=\"truncated-text-line\">{{ action.pageTitle|rawSafeDecoded }}</span>
        {% endif %}
        {% if action.siteSearchKeyword is defined %}
            {% if action.type == 'search' %}
                <img src='{{ action.icon }}' title='{{ 'Actions_SubmenuSitesearch'|translate }}'
                     class=\"action-list-action-icon search\">
            {% endif %}
            <span class=\"truncated-text-line\">{{ action.siteSearchKeyword|rawSafeDecoded }}</span>
        {% endif %}
        {% if action.url is not empty %}
            {% if action.type == 'action' and action.pageTitle|default(false) is not empty %}<p>{% endif %}
            {% if action.type == 'download' or action.type == 'outlink' %}
                <img src='{{ action.icon }}' class=\"action-list-action-icon {{ action.type }}\">
            {% endif %}

            {% if action.url|trim|lower starts with 'javascript:' or
            action.url|trim|lower starts with 'vbscript:' or
            action.url|trim|lower starts with 'data:' %}
                {{ action.url }}
            {% else %}
                <a href=\"{{ action.url }}\" rel=\"noreferrer\" target=\"_blank\"
                   class=\"action-list-url truncated-text-line\">
                    {{ action.url|replace({'http://': '', 'https://': ''}) }}
                </a>
            {% endif %}
            {% if action.type == 'action' and action.pageTitle|default(false) is not empty %}</p>{% endif %}
        {% elseif action.type != 'search' %}
            <p>
                <span>{{ 'General_NotDefined'|translate('Actions_ColumnPageURL'|translate) }}</span>
            </p>
        {% endif %}
    </div>
</li>
", "@Live/_actionCommon.twig", "/home/digitearow/www/piwik/plugins/Live/templates/_actionCommon.twig");
    }
}
