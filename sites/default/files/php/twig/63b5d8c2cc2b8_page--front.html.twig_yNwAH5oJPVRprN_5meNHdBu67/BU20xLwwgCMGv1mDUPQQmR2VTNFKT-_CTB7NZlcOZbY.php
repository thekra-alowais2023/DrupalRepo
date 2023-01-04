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

/* themes/custom/zuvi/templates/layout/page--front.html.twig */
class __TwigTemplate_5395d68e6800837987832d7e16b9f43c0d61c89209efca46ef6e9ce0b23de20f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["include" => 11, "if" => 15];
        $filters = ["escape" => 22];
        $functions = ["attach_library" => 37];

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
                ['escape'],
                ['attach_library']
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
        // line 11
        $this->loadTemplate("@zuvi/template-parts/header.html.twig", "themes/custom/zuvi/templates/layout/page--front.html.twig", 11)->display($context);
        // line 12
        $this->loadTemplate("@zuvi/template-parts/highlighted.html.twig", "themes/custom/zuvi/templates/layout/page--front.html.twig", 12)->display($context);
        // line 13
        echo "<div id=\"main-wrapper\" class=\"main-wrapper\">
\t<div class=\"container clear\">
\t\t";
        // line 15
        if (($context["front_sidebar"] ?? null)) {
            // line 16
            echo "\t\t\t<div class=\"main-container\">
\t\t\t";
        }
        // line 18
        echo "\t\t\t<main id=\"home-main\" class=\"page-content home-content clear\">
\t\t\t\t<a id=\"main-content\" tabindex=\"-1\"></a>
\t\t\t\t";
        // line 21
        echo "\t\t\t\t";
        $this->loadTemplate("@zuvi/template-parts/content_top.html.twig", "themes/custom/zuvi/templates/layout/page--front.html.twig", 21)->display($context);
        // line 22
        echo "\t\t\t\t";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
\t\t\t\t";
        // line 23
        $this->loadTemplate("@zuvi/template-parts/content_home.html.twig", "themes/custom/zuvi/templates/layout/page--front.html.twig", 23)->display($context);
        // line 24
        echo "\t\t\t\t";
        $this->loadTemplate("@zuvi/template-parts/content_bottom.html.twig", "themes/custom/zuvi/templates/layout/page--front.html.twig", 24)->display($context);
        // line 25
        echo "\t\t\t</main>
\t\t\t";
        // line 26
        if (($context["front_sidebar"] ?? null)) {
            // line 27
            echo "\t\t\t\t";
            $this->loadTemplate("@zuvi/template-parts/sidebar_left.html.twig", "themes/custom/zuvi/templates/layout/page--front.html.twig", 27)->display($context);
            // line 28
            echo "\t\t\t\t";
            $this->loadTemplate("@zuvi/template-parts/sidebar_right.html.twig", "themes/custom/zuvi/templates/layout/page--front.html.twig", 28)->display($context);
            // line 29
            echo "\t\t\t</div>
\t\t";
        }
        // line 31
        echo "\t</div>
\t";
        // line 33
        echo "</div>
";
        // line 35
        $this->loadTemplate("@zuvi/template-parts/footer.html.twig", "themes/custom/zuvi/templates/layout/page--front.html.twig", 35)->display($context);
        // line 36
        if (($context["slider_show"] ?? null)) {
            // line 37
            echo "\t";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("zuvi/slider"), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/zuvi/templates/layout/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 37,  109 => 36,  107 => 35,  104 => 33,  101 => 31,  97 => 29,  94 => 28,  91 => 27,  89 => 26,  86 => 25,  83 => 24,  81 => 23,  76 => 22,  73 => 21,  69 => 18,  65 => 16,  63 => 15,  59 => 13,  57 => 12,  55 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/zuvi/templates/layout/page--front.html.twig", "/opt/lampp/htdocs/DrupalRepo/drupal-8.9.14/themes/custom/zuvi/templates/layout/page--front.html.twig");
    }
}
