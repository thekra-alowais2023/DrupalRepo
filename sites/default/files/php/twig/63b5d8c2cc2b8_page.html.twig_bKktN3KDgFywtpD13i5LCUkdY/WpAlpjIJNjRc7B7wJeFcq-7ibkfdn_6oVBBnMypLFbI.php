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

/* themes/custom/zuvi/templates/layout/page.html.twig */
class __TwigTemplate_de42105ca8000a87d9fc7c58b6ced102d8b3bf947b597c065bed3103812e0307 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["include" => 52];
        $filters = ["escape" => 60];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                ['escape'],
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
        // line 52
        $this->loadTemplate("@zuvi/template-parts/header.html.twig", "themes/custom/zuvi/templates/layout/page.html.twig", 52)->display($context);
        // line 53
        $this->loadTemplate("@zuvi/template-parts/highlighted.html.twig", "themes/custom/zuvi/templates/layout/page.html.twig", 53)->display($context);
        // line 54
        echo "<div id=\"main-wrapper\" class=\"main-wrapper\">
  <div class=\"container\">
  <div class=\"main-container\">
    <main id=\"main\" class=\"page-content\">
      <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 59
        echo "      ";
        $this->loadTemplate("@zuvi/template-parts/content_top.html.twig", "themes/custom/zuvi/templates/layout/page.html.twig", 59)->display($context);
        // line 60
        echo "      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
      ";
        // line 61
        $this->loadTemplate("@zuvi/template-parts/content_bottom.html.twig", "themes/custom/zuvi/templates/layout/page.html.twig", 61)->display($context);
        // line 62
        echo "    </main>
    ";
        // line 63
        $this->loadTemplate("@zuvi/template-parts/sidebar_left.html.twig", "themes/custom/zuvi/templates/layout/page.html.twig", 63)->display($context);
        // line 64
        echo "    ";
        $this->loadTemplate("@zuvi/template-parts/sidebar_right.html.twig", "themes/custom/zuvi/templates/layout/page.html.twig", 64)->display($context);
        // line 65
        echo "  </div> ";
        // line 66
        echo "  </div> ";
        // line 67
        echo "</div>";
        // line 68
        $this->loadTemplate("@zuvi/template-parts/footer.html.twig", "themes/custom/zuvi/templates/layout/page.html.twig", 68)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/custom/zuvi/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 68,  87 => 67,  85 => 66,  83 => 65,  80 => 64,  78 => 63,  75 => 62,  73 => 61,  68 => 60,  65 => 59,  59 => 54,  57 => 53,  55 => 52,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/zuvi/templates/layout/page.html.twig", "/opt/lampp/htdocs/DrupalRepo/drupal-8.9.14/themes/custom/zuvi/templates/layout/page.html.twig");
    }
}
