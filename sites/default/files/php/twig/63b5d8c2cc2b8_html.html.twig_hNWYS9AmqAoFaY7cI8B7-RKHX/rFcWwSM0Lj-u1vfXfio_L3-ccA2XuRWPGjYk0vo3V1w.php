<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/zuvi/templates/layout/html.html.twig */
class __TwigTemplate_c5bd43b4c4a71752f053c47d8ec471000d8c83d87c3d7b4b9f9dca83ee83f9a8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 29, "if" => 48];
        $filters = ["clean_class" => 31, "escape" => 39, "safe_join" => 42, "raw" => 50, "t" => 60];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 'safe_join', 'raw', 't'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 26
        echo "
";
        // line 29
        $context["body_classes"] = [0 => (( !        // line 30
($context["root_path"] ?? null)) ? ("homepage") : ("site-page")), 1 => ((        // line 31
($context["node_type"] ?? null)) ? (("page-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null))))) : ("")), 2 => ((( !$this->getAttribute(        // line 32
($context["page"] ?? null), "sidebar_first", []) &&  !$this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) ? ("no-sidebar") : ("")), 3 => ((($this->getAttribute(        // line 33
($context["page"] ?? null), "sidebar_first", []) &&  !$this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) ? ("one-sidebar sidebar-left") : ("")), 4 => ((($this->getAttribute(        // line 34
($context["page"] ?? null), "sidebar_second", []) &&  !$this->getAttribute(($context["page"] ?? null), "sidebar_first", []))) ? ("one-sidebar sidebar-right") : ("")), 5 => ((($this->getAttribute(        // line 35
($context["page"] ?? null), "sidebar_first", []) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) ? ("two-sidebar") : (""))];
        // line 38
        echo "<!DOCTYPE html>
<html";
        // line 39
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null)), "html", null, true);
        echo ">
  <head>
    <head-placeholder token=\"";
        // line 41
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)), "html", null, true);
        echo "\">
    <title>";
        // line 42
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null)), " | "));
        echo "</title>
    <link rel=\"preload\" as=\"font\" href=\"";
        // line 43
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/fonts/open-sans.woff2\" type=\"font/woff2\" crossorigin>
    <link rel=\"preload\" as=\"font\" href=\"";
        // line 44
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/fonts/roboto.woff2\" type=\"font/woff2\" crossorigin>
    <link rel=\"preload\" as=\"font\" href=\"";
        // line 45
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/fonts/roboto-bold.woff2\" type=\"font/woff2\" crossorigin>
    <css-placeholder token=\"";
        // line 46
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)), "html", null, true);
        echo "\">
    <js-placeholder token=\"";
        // line 47
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)), "html", null, true);
        echo "\">
";
        // line 48
        if (($context["styling"] ?? null)) {
            // line 49
            echo "<style>
";
            // line 50
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["styling_code"] ?? null)));
            echo "
</style>
";
        }
        // line 53
        echo "  </head>
  <body";
        // line 54
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["body_classes"] ?? null)], "method")), "html", null, true);
        echo ">
    ";
        // line 59
        echo "    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      ";
        // line 60
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Skip to main content"));
        echo "
    </a>
    ";
        // line 62
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null)), "html", null, true);
        echo "
    ";
        // line 63
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null)), "html", null, true);
        echo "
    ";
        // line 64
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null)), "html", null, true);
        echo "
    <js-bottom-placeholder token=\"";
        // line 65
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)), "html", null, true);
        echo "\">
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/zuvi/templates/layout/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 65,  136 => 64,  132 => 63,  128 => 62,  123 => 60,  120 => 59,  116 => 54,  113 => 53,  107 => 50,  104 => 49,  102 => 48,  98 => 47,  94 => 46,  90 => 45,  86 => 44,  82 => 43,  78 => 42,  74 => 41,  69 => 39,  66 => 38,  64 => 35,  63 => 34,  62 => 33,  61 => 32,  60 => 31,  59 => 30,  58 => 29,  55 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/zuvi/templates/layout/html.html.twig", "/opt/lampp/htdocs/DrupalRepo/drupal-8.9.14/themes/custom/zuvi/templates/layout/html.html.twig");
    }
}
