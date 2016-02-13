<?php

/* PCVDemoBundle:Show:video.html.twig */
class __TwigTemplate_d8f999c8b2945b4cf34c3468c92c79fe75f321c85d3cd488c4eb9ba8e7abb190 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'video_public' => array($this, 'block_video_public'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('video_public', $context, $blocks);
    }

    public function block_video_public($context, array $blocks = array())
    {
        // line 2
        echo "
\t<a type=\"button\" class=\"btn btn-default\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "videoUrl", array()), "html", null, true);
        echo "\" target=\"_blank\">
\t\t<i class=\"fa fa-play-circle fa-lg\"></i>&nbsp;ver video
\t</a>

";
    }

    public function getTemplateName()
    {
        return "PCVDemoBundle:Show:video.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  26 => 2,  20 => 1,);
    }
}
