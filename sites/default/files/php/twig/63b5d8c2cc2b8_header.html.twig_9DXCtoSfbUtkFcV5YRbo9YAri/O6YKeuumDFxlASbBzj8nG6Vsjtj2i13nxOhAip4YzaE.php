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

/* @zuvi/template-parts/header.html.twig */
class __TwigTemplate_49982f1e86b0103a530fa4bc74b165741760bb220528be2b03b0eaf4df2f2cbc extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 11, "include" => 28];
        $filters = ["escape" => 13];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
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
        // line 1
        echo "<!-- Start: Header -->
<header class=\"header\">
  <div class=\"header-circle header-circle1\"></div>
  <div class=\"header-circle header-circle2\"></div>
  <div class=\"header-circle header-circle3\"></div>
  <div class=\"header-circle header-circle4\"></div>
  <div class=\"header-circle header-circle5\"></div>
  <div class=\"header-circle header-circle6\"></div>
  <div class=\"container\">
    <div class=\"header-main\">
    ";
        // line 11
        if ($this->getAttribute(($context["page"] ?? null), "site_branding", [])) {
            // line 12
            echo "      <div class=\"site-brand\">
        ";
            // line 13
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "site_branding", [])), "html", null, true);
            echo "
      </div> <!--/.site-branding -->
    ";
        }
        // line 16
        echo "    ";
        if (($this->getAttribute(($context["page"] ?? null), "primary_menu", []) || $this->getAttribute(($context["page"] ?? null), "search_box", []))) {
            // line 17
            echo "      <div class=\"header-main-right\">
        ";
            // line 18
            if ($this->getAttribute(($context["page"] ?? null), "primary_menu", [])) {
                // line 19
                echo "          <div class=\"mobile-menu\"><i class=\"icon-menu\"></i></div> ";
                // line 20
                echo "          <div class=\"primary-menu-wrapper\">
            <div class=\"menu-wrap\">
              <div class=\"close-mobile-menu\">x</div>
              ";
                // line 23
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
                echo "
            </div> <!-- /.menu-wrap -->
          </div> <!-- /.primary-menu-wrapper -->
        ";
            }
            // line 27
            echo "        ";
            if ($this->getAttribute(($context["page"] ?? null), "search_box", [])) {
                // line 28
                echo "          ";
                $this->loadTemplate("@zuvi/template-parts/search.html.twig", "@zuvi/template-parts/header.html.twig", 28)->display($context);
                // line 29
                echo "        ";
            }
            // line 30
            echo "      </div> <!-- /.header-right -->
    ";
        }
        // line 32
        echo "    </div> <!-- /.header-main -->
  </div> <!-- /.container -->
  ";
        // line 34
        if ((($context["is_front"] ?? null) && ($context["slider_show"] ?? null))) {
            // line 35
            echo "    ";
            $this->loadTemplate("@zuvi/template-parts/slider.html.twig", "@zuvi/template-parts/header.html.twig", 35)->display($context);
            // line 36
            echo "  ";
        } elseif ( !($context["is_front"] ?? null)) {
            // line 37
            echo "    ";
            $this->loadTemplate("@zuvi/template-parts/page_header.html.twig", "@zuvi/template-parts/header.html.twig", 37)->display($context);
            // line 38
            echo "  ";
        }
        // line 39
        echo "</header>
";
        // line 40
        if ((($context["is_front"] ?? null) && ($context["slider_show"] ?? null))) {
            // line 41
            echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1440 160\"><path fill=\"#020312\" fill-opacity=\"1\" d=\"M0,32L60,26.7C120,21,240,11,360,42.7C480,75,600,149,720,154.7C840,160,960,96,1080,74.7C1200,53,1320,75,1380,85.3L1440,96L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z\"></path></svg>
";
        }
        // line 43
        echo "<!-- End: Header -->
";
    }

    public function getTemplateName()
    {
        return "@zuvi/template-parts/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 43,  136 => 41,  134 => 40,  131 => 39,  128 => 38,  125 => 37,  122 => 36,  119 => 35,  117 => 34,  113 => 32,  109 => 30,  106 => 29,  103 => 28,  100 => 27,  93 => 23,  88 => 20,  86 => 19,  84 => 18,  81 => 17,  78 => 16,  72 => 13,  69 => 12,  67 => 11,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@zuvi/template-parts/header.html.twig", "/opt/lampp/htdocs/DrupalRepo/drupal-8.9.14/themes/custom/zuvi/templates/template-parts/header.html.twig");
    }
}
