<?php

/* PCVDemoBundle:Show:imagen.html.twig */
class __TwigTemplate_ad0b5669012e3e6ef5704a319f7305bddf8a2b794e3e51d73b1351316be819c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'image_public' => array($this, 'block_image_public'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('image_public', $context, $blocks);
    }

    public function block_image_public($context, array $blocks = array())
    {
        // line 2
        echo "
\t";
        // line 3
        if ( !twig_test_empty($this->getAttribute((isset($context["datosU"]) ? $context["datosU"] : $this->getContext($context, "datosU")), "imagenUrl", array()))) {
            // line 4
            echo "\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("img/profile/" . $this->getAttribute((isset($context["datosU"]) ? $context["datosU"] : $this->getContext($context, "datosU")), "imagenUrl", array()))), "html", null, true);
            echo "\" class=\"img-circle\" width=\"180px\">
\t";
        } else {
            // line 6
            echo "\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pcvdemo/image/noimagen.png"), "html", null, true);
            echo "\" class=\"img-circle\" width=\"180px\">
\t";
        }
        // line 8
        echo "
\t<hr>
";
    }

    public function getTemplateName()
    {
        return "PCVDemoBundle:Show:imagen.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  37 => 6,  31 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }
}
