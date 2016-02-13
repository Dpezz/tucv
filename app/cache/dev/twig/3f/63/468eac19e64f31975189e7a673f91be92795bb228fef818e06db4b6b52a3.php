<?php

/* PCVDemoBundle:Show:redes.html.twig */
class __TwigTemplate_3f63468eac19e64f31975189e7a673f91be92795bb228fef818e06db4b6b52a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'red_public' => array($this, 'block_red_public'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('red_public', $context, $blocks);
        // line 24
        echo "


";
    }

    // line 1
    public function block_red_public($context, array $blocks = array())
    {
        // line 2
        echo "
\t";
        // line 3
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) &&  !twig_test_empty($this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "redes", array())))) {
            // line 4
            echo "\t\t";
            $context["variables"] = array("facebook" => "btn-blue", "twitter" => "btn-sky", "google" => "btn-red", "youtube" => "btn-red-light", "instagram" => "btn-brown", "pinterest" => "btn-red", "flickr" => "btn-rosa", "tumblr" => "btn-blue-dark", "soundcloud" => "btn-warning", "linkedin" => "btn-blue-light");
            // line 5
            echo "
\t\t";
            // line 6
            $context["elementos"] = twig_split_filter($this->env, $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "redes", array()), "}");
            // line 7
            echo "\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["elementos"]) ? $context["elementos"] : $this->getContext($context, "elementos")));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 8
                echo "\t\t\t\t";
                $context["valor"] = twig_split_filter($this->env, $context["element"], "{");
                // line 9
                echo "\t\t\t\t\t";
                if ( !twig_test_empty(twig_first($this->env, (isset($context["valor"]) ? $context["valor"] : $this->getContext($context, "valor"))))) {
                    // line 10
                    echo "
\t\t\t            <span class=\"fa-stack\" data-toggle=\"tooltip\" title=\"";
                    // line 11
                    echo twig_escape_filter($this->env, twig_first($this->env, (isset($context["valor"]) ? $context["valor"] : $this->getContext($context, "valor"))), "html", null, true);
                    echo "\" >
\t\t\t            \t<a href=\"";
                    // line 12
                    echo twig_escape_filter($this->env, twig_last($this->env, (isset($context["valor"]) ? $context["valor"] : $this->getContext($context, "valor"))), "html", null, true);
                    echo "\" target=\"_blank\">
\t\t\t\t              <i class=\"fa fa-circle fa-stack-2x gray\"></i>
\t\t\t\t              <i class=\"fa fa-";
                    // line 14
                    echo twig_escape_filter($this->env, twig_first($this->env, (isset($context["valor"]) ? $context["valor"] : $this->getContext($context, "valor"))), "html", null, true);
                    echo " fa-stack-1x white\"></i>
\t\t\t\t          </a>
\t\t\t            </span>

\t\t\t\t\t";
                }
                // line 19
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "\t";
        } else {
            echo "<p><i class=\"fa fa-plus-square\" data-toggle=\"modal\" data-target=\"#redes\"></i> Agrega Redes Sociales</p>
\t";
        }
        // line 22
        echo "\t
";
    }

    public function getTemplateName()
    {
        return "PCVDemoBundle:Show:redes.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  88 => 22,  82 => 20,  76 => 19,  68 => 14,  63 => 12,  59 => 11,  56 => 10,  53 => 9,  50 => 8,  45 => 7,  43 => 6,  40 => 5,  37 => 4,  35 => 3,  32 => 2,  29 => 1,  22 => 24,  20 => 1,);
    }
}
