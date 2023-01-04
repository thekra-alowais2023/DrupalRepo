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

/* @zuvi/template-parts/footer.html.twig */
class __TwigTemplate_bb88a1108d1f44561ff33685c110876e4b53531b10af34d7baf1f448968007aa extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 3, "include" => 62];
        $filters = ["escape" => 6, "date" => 57];
        $functions = ["attach_library" => 76];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                ['escape', 'date'],
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
        // line 1
        echo "<!-- Start: Footer -->
<footer class=\"footer\">
  ";
        // line 3
        if ($this->getAttribute(($context["page"] ?? null), "footer_top", [])) {
            // line 4
            echo "    <section id=\"footer-top\">
      <div class=\"container\">
        <div class=\"footer-top\">";
            // line 6
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_top", [])), "html", null, true);
            echo "</div>
      </div>
    </section>
  ";
        }
        // line 9
        echo "<!-- /footer-top -->

  ";
        // line 11
        if (((($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", [])) || $this->getAttribute(($context["page"] ?? null), "footer_fourth", []))) {
            // line 12
            echo "    <section id=\"footer-blocks\">
      <div class=\"container\">
      <div class=\"footer-container\">
        <div class=\"footer-block\">
          ";
            // line 16
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", [])) {
                // line 17
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
                echo "
          ";
            }
            // line 19
            echo "        </div> <!--/footer-first -->

        <div class=\"footer-block\">
          ";
            // line 22
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", [])) {
                // line 23
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
                echo "
          ";
            }
            // line 25
            echo "        </div> <!--/footer-second -->

        <div class=\"footer-block\">
          ";
            // line 28
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", [])) {
                // line 29
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
                echo "
          ";
            }
            // line 31
            echo "        </div> <!--/footer-three -->

        <div class=\"footer-block last-footer-block\">
          ";
            // line 34
            if ($this->getAttribute(($context["page"] ?? null), "footer_fourth", [])) {
                // line 35
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_fourth", [])), "html", null, true);
                echo "
          ";
            }
            // line 37
            echo "        </div> <!--/footer-fourth -->
      </div> <!--/footer-container -->
      </div> <!--/container -->
    </section> <!--/footer-blocks -->
  ";
        }
        // line 41
        echo " ";
        // line 42
        echo "
  ";
        // line 43
        if ($this->getAttribute(($context["page"] ?? null), "footer_bottom", [])) {
            // line 44
            echo "    <section id=\"footer-bottom\">
      <div class=\"container\">
        <div class=\"footer-bottom\">";
            // line 46
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_bottom", [])), "html", null, true);
            echo "</div>
      </div> <!-- /.container -->
    </section>
  ";
        }
        // line 49
        echo "<!-- /footer-bottom -->

 ";
        // line 51
        if ((($context["copyright_text"] ?? null) || ($context["all_icons_show"] ?? null))) {
            // line 52
            echo "  <section id=\"footer-bottom-last\">
    <div class=\"container\">
    <div class=\"footer-bottom-last\">
      ";
            // line 55
            if (($context["copyright_text"] ?? null)) {
                // line 56
                echo "          <div class=\"copyright\">
            &copy; ";
                // line 57
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
                echo " ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null)), "html", null, true);
                echo ", All rights reserved.
          </div>
      ";
            }
            // line 60
            echo "      ";
            if (($context["all_icons_show"] ?? null)) {
                // line 61
                echo "        <div class=\"footer-social-icons\">
          ";
                // line 62
                $this->loadTemplate("@zuvi/template-parts/social-icons.html.twig", "@zuvi/template-parts/footer.html.twig", 62)->display($context);
                // line 63
                echo "        </div>
      ";
            }
            // line 65
            echo "      </div> <!--/.text_right -->
    </div> <!-- /.footer-bottom-last -->
    </div> <!-- /.container -->
  </section> <!-- /footer-bottom-last -->
  ";
        }
        // line 69
        echo " <!-- end condition if copyright or social icons -->
</footer>
";
        // line 71
        if (($context["scrolltotop_on"] ?? null)) {
            // line 72
            echo "<div class=\"scrolltop\"><div class=\"scrolltop-icon\">&#x2191;</div></div>
";
        }
        // line 74
        echo "<!-- End: Footer -->
";
        // line 75
        if (($context["font_icon_fontawesome"] ?? null)) {
            // line 76
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("zuvi/fontawesome"), "html", null, true);
            echo "
";
        }
        // line 78
        if (($context["font_icon_material"] ?? null)) {
            // line 79
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("zuvi/material"), "html", null, true);
            echo "
";
        }
        // line 81
        if ((($context["circle_type"] ?? null) == "circle_solid")) {
            // line 82
            echo "<style>
.header-circle {
  background: var(--circle-color);
}
</style>
";
        }
    }

    public function getTemplateName()
    {
        return "@zuvi/template-parts/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 82,  226 => 81,  221 => 79,  219 => 78,  214 => 76,  212 => 75,  209 => 74,  205 => 72,  203 => 71,  199 => 69,  192 => 65,  188 => 63,  186 => 62,  183 => 61,  180 => 60,  172 => 57,  169 => 56,  167 => 55,  162 => 52,  160 => 51,  156 => 49,  149 => 46,  145 => 44,  143 => 43,  140 => 42,  138 => 41,  131 => 37,  125 => 35,  123 => 34,  118 => 31,  112 => 29,  110 => 28,  105 => 25,  99 => 23,  97 => 22,  92 => 19,  86 => 17,  84 => 16,  78 => 12,  76 => 11,  72 => 9,  65 => 6,  61 => 4,  59 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@zuvi/template-parts/footer.html.twig", "/opt/lampp/htdocs/DrupalRepo/drupal-8.9.14/themes/custom/zuvi/templates/template-parts/footer.html.twig");
    }
}
