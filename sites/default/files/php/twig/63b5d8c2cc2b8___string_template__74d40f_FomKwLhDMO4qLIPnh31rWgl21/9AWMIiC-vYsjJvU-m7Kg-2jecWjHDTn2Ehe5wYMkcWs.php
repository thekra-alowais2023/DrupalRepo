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

/* __string_template__74d40f79147d8eef80745de7d88fd820e8e21db1e1bad6f64c7860e3ef70aaa2 */
class __TwigTemplate_0c3631146915e7d173df84bb85ffbbe1f9f09782c7d2cf0d4db20dafbec2020c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
        echo "<div class=\"\">
              <article class=\"shadow-cont\">
                <div>
                  <span> <span > </span> </span>
                  <h5 class=\"title\">  news  </h5>
                </div>
                <div class=\"item-text \">
                  <div class=\"row \">
                    <div class=\"col-6\">
                      <a href=\"http://192.168.64.2/DrupalRepo/drupal-8.9.14/admin/news\">     manage     </a>
                    </div>
                    <div class=\"col-6\">
                      <a href=\"http://192.168.64.2/DrupalRepo/drupal-8.9.14/node/add/news\">   add       </a>
                    </div>
                  </div>
                </div>
              </article>
            </div>";
    }

    public function getTemplateName()
    {
        return "__string_template__74d40f79147d8eef80745de7d88fd820e8e21db1e1bad6f64c7860e3ef70aaa2";
    }

    public function getDebugInfo()
    {
        return array (  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__74d40f79147d8eef80745de7d88fd820e8e21db1e1bad6f64c7860e3ef70aaa2", "");
    }
}
