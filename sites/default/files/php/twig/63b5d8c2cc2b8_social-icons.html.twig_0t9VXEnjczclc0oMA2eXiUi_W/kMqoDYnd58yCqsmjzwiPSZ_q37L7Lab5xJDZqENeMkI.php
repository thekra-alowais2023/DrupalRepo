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

/* @zuvi/template-parts/social-icons.html.twig */
class __TwigTemplate_9a02d310b7eb6e88ea5403e899a5f587295724771a5dee3cf006fca0535d87c8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 2];
        $filters = ["escape" => 4];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
        echo "<ul class=\"social-icons\">
\t";
        // line 2
        if ((($context["linkedin_url"] ?? null) != "")) {
            // line 3
            echo "\t\t<li>
\t\t\t<a href=\"";
            // line 4
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null)), "html", null, true);
            echo "\" target=\"_blank\">
\t\t\t\t<i class=\"icon-linkedin\"></i>
\t\t\t</a>
\t\t</li>
\t";
        }
        // line 9
        echo "
\t";
        // line 10
        if ((($context["github_url"] ?? null) != "")) {
            // line 11
            echo "\t\t<li>
\t\t\t<a href=\"";
            // line 12
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["github_url"] ?? null)), "html", null, true);
            echo "\" target=\"_blank\">
\t\t\t\t<i class=\"icon-github\"></i>
\t\t\t</a>
\t\t</li>
\t";
        }
        // line 17
        echo "
</ul>
";
    }

    public function getTemplateName()
    {
        return "@zuvi/template-parts/social-icons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 17,  79 => 12,  76 => 11,  74 => 10,  71 => 9,  63 => 4,  60 => 3,  58 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@zuvi/template-parts/social-icons.html.twig", "/opt/lampp/htdocs/DrupalRepo/drupal-8.9.14/themes/custom/zuvi/templates/template-parts/social-icons.html.twig");
    }
}
