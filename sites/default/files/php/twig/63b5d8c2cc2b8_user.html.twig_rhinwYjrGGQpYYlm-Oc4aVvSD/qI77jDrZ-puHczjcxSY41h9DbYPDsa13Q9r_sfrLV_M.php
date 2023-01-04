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

/* themes/custom/zuvi/views/user.html.twig */
class __TwigTemplate_6abafd8aec3f85ed5e038233abae7aef864c74fe2ade31cca471ca0c4844a5b7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["trans" => 5, "escape" => 7];
        $functions = ["url" => 12, "drupal_view" => 22];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['trans', 'escape'],
                ['url', 'drupal_view']
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
        echo "<div class=\"container\">
\t<div class=\"row user-header-logout\">

\t\t<h4 class=\"title\">
\t\t\t";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Welcome Back :"));
        echo "
\t\t\t<span>
\t\t\t\t";
        // line 7
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["user"] ?? null), "displayname", [])), "html", null, true);
        echo "
\t\t\t</span>
\t\t</h4>
\t</div>
\t<div class=\"logout\">
\t\t<a href=\"";
        // line 12
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
        echo "/user/logout\">
\t\t\t<h5 class=\"title\">
\t\t\t\t";
        // line 14
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Logout"));
        echo "
\t\t\t</h5>
\t\t</a>
\t</div>

</div>


";
        // line 22
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, views_embed_view("user_dashboard", "block_1"), "html", null, true);
        echo "
";
        // line 23
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, views_embed_view("user_dashboard", "block_2"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/custom/zuvi/views/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 23,  90 => 22,  79 => 14,  74 => 12,  66 => 7,  61 => 5,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/zuvi/views/user.html.twig", "/opt/lampp/htdocs/DrupalRepo/drupal-8.9.14/themes/custom/zuvi/views/user.html.twig");
    }
}
