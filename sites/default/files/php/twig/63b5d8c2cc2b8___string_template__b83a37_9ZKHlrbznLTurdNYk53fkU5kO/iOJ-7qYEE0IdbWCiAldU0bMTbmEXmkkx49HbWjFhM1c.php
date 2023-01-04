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

/* __string_template__b83a37a2e78f1d465012549a8f471a44e38dc28fb14d68c7c7ea3b2aad0be362 */
class __TwigTemplate_9777c00bdcc1b50fee3bc0477c85a9b70c31a7a5da72c39d21c3f5f667aaa126 extends \Twig\Template
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
                  <h5 class=\"title\">  article  </h5>
                </div>
                <div class=\"item-text \">
                  <div class=\"row \">
                    <div class=\"col-6\">
                      <a href=\"http://192.168.64.2/DrupalRepo/drupal-8.9.14/admin/article\">     manage     </a>
                    </div>
                    <div class=\"col-6\">
                      <a href=\"http://192.168.64.2/DrupalRepo/drupal-8.9.14/node/add/article\">   add       </a>
                    </div>
                  </div>
                </div>
              </article>
            </div>";
    }

    public function getTemplateName()
    {
        return "__string_template__b83a37a2e78f1d465012549a8f471a44e38dc28fb14d68c7c7ea3b2aad0be362";
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
        return new Source("", "__string_template__b83a37a2e78f1d465012549a8f471a44e38dc28fb14d68c7c7ea3b2aad0be362", "");
    }
}
