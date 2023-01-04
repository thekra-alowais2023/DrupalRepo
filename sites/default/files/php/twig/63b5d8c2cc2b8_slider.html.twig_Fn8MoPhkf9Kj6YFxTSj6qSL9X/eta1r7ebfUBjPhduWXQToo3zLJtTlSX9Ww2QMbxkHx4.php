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

/* @zuvi/template-parts/slider.html.twig */
class __TwigTemplate_0734c43e8962949d3b91eac95b640bfc06ab0f5dcb23a12b750b30737b604923 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 6];
        $filters = ["raw" => 7, "striptags" => 7, "escape" => 34];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['raw', 'striptags', 'escape'],
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
        echo "<section class=\"slider\">
\t<div class=\"container\">
\t\t<div class=\"slider-container\">
\t\t\t<div class=\"slider-text\">
\t\t\t\t<ul class=\"js-rotating\">
\t\t\t\t\t";
        // line 6
        if ((($context["slider_code"] ?? null) != "")) {
            // line 7
            echo "\t\t\t\t\t\t";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(strip_tags($this->sandbox->ensureToStringAllowed(($context["slider_code"] ?? null)), "<ol>,<ul>,<li>,<p>,<a>,<img>,<video>,<h1>,<h2>,<h3>,<h4>,<h5>,<h6>,<em>,<strong>,<br>,<i>,<button>,<mark>,<hr>"));
            echo "
\t\t\t\t\t";
        } else {
            // line 9
            echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<h1>Welcome To
\t\t\t\t\t\t\t\t<em>Drupal News</em>
\t\t\t\t\t\t\t\tWebsite</h1>
\t\t\t\t\t\t\t<p>We present you game news.</p>
\t\t\t\t\t\t\t<a class=\"button-link\" href=\"/DrupalRepo/drupal-8.9.14/news\">Explore</a>


\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<h1>We Create
\t\t\t\t\t\t\t\t<em>Awesome</em>
\t\t\t\t\t\t\t\tGame News!</h1>
\t\t\t\t\t\t\t<p>XXXXX.</p>
\t\t\t\t\t\t\t<a class=\"button-link\" href=\"/DrupalRepo/drupal-8.9.14/news\">Explore</a>


\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 28
        echo "\t\t\t\t</ul>
\t\t\t\t<!--/.home-slider -->
\t\t\t</div>
\t\t\t<!-- /slider-text -->
\t\t\t<div class=\"slider-image\">
\t\t\t\t";
        // line 33
        if ((($context["slider_image_path"] ?? null) != "")) {
            // line 34
            echo "\t\t\t\t\t<img src=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slider_image_path"] ?? null)), "html", null, true);
            echo "\" alt=\"slider image\"/>
\t\t\t\t";
        } else {
            // line 36
            echo "\t\t\t\t\t<img src=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
            echo "/images/slider.svg\" alt=\"slider image\"/>
\t\t\t\t";
        }
        // line 38
        echo "\t\t\t</div>
\t\t\t<!-- /slider-image -->
\t\t</div>
\t\t<!--/.slider-container -->
\t</div>
\t<!--/.container -->
</section>
";
    }

    public function getTemplateName()
    {
        return "@zuvi/template-parts/slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 38,  106 => 36,  100 => 34,  98 => 33,  91 => 28,  70 => 9,  64 => 7,  62 => 6,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@zuvi/template-parts/slider.html.twig", "/opt/lampp/htdocs/DrupalRepo/drupal-8.9.14/themes/custom/zuvi/templates/template-parts/slider.html.twig");
    }
}
