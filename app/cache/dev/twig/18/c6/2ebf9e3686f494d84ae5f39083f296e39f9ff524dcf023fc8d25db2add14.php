<?php

/* PCVDemoBundle:Edit:video.html.twig */
class __TwigTemplate_18c62ebf9e3686f494d84ae5f39083f296e39f9ff524dcf023fc8d25db2add14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'delete_video' => array($this, 'block_delete_video'),
            'edit_video' => array($this, 'block_edit_video'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('delete_video', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('edit_video', $context, $blocks);
    }

    // line 1
    public function block_delete_video($context, array $blocks = array())
    {
        // line 2
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("_delete_video");
        echo "\" method=\"POST\" rol=\"form\">
        <h3 class=\"text-center\"> Seguro que deseas eliminar tu Video <i class=\"fa fa-question\"></i> </h3>
        <br>
        <div class=\"modal-footer\">
            <button type=\"submit\" class=\"btn btn-blue\">Eliminar</button>
            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
        </div>
</form>
";
    }

    // line 12
    public function block_edit_video($context, array $blocks = array())
    {
        // line 13
        echo "

    <form action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("_edit_video");
        echo "\" method=\"POST\" rol=\"form\">
        <div class=\"well\">
\t       <div class=\"alert alert-success\">
            <strong> TuCV </strong> permite que agregues tu video curriculum desde sitios como: <br> <i class=\"fa fa-youtube\"></i><strong>&nbsp;youtube</strong> , <i class=\"fa fa-vimeo-square\"></i><strong>&nbsp;vimeo</strong>, <i class=\"fa fa-vine\"></i><strong>&nbsp;vine</strong> u otros.<br>
            Solo inserta la dirección de tu video a continuación.
            </div>
        </div>
        <br>
        <div class=\"form-group\">
            <label for=\"exampleInputFile\">Agrega url del video:</label>
            <div class=\"input-group input-group-sm\">
                <span class=\"input-group-addon\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"url del video. Ej: http://www.youtube.com/watch?v=z152aDsEj6D  ó http://vimeo.com/123456789\"><i class=\"fa fa-play\"></i></span>
                <input type=\"url\" class=\"form-control\" id=\"video\" name=\"_video\" placeholder=\"http://\" ";
        // line 27
        if ((((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "videoUrl", array())) && !twig_in_filter(".webm", $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "videoUrl", array())))) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "videoUrl", array()), "html", null, true);
            echo "\"";
        }
        echo ">
            </div>
        </div>
\t\t<div class=\"modal-footer\">
        \t<button type=\"submit\" class=\"btn btn-blue\" id=\"name\">Guardar</button>
        \t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
      \t</div>
\t</form>


";
    }

    public function getTemplateName()
    {
        return "PCVDemoBundle:Edit:video.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  69 => 27,  54 => 15,  50 => 13,  47 => 12,  33 => 2,  30 => 1,  26 => 12,  23 => 11,  21 => 1,);
    }
}
