<?php

/* PCVDemoBundle:Edit:habilidades.html.twig */
class __TwigTemplate_cda1ca60209c7b16605f09463e78bf1fe2c79ce3a0ca465cbdc8e193280c0c73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'edit_ability' => array($this, 'block_edit_ability'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('edit_ability', $context, $blocks);
    }

    public function block_edit_ability($context, array $blocks = array())
    {
        // line 2
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("_edit_habilidad");
        echo "\" method=\"POST\" role=\"form\">
\t
\t<div class=\"well\">
\t\t";
        // line 5
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) &&  !twig_test_empty($this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "habilidades", array())))) {
            // line 6
            echo "\t\t\t<input name=\"_habilidades\" type=\"text\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "habilidades", array()), "html", null, true);
            echo "\" data-role=\"tagsinput\" placeholder=\"Añadir competencia\"/>
\t\t";
        } else {
            // line 8
            echo "\t\t\t<input name=\"_habilidades\" type=\"text\" data-role=\"tagsinput\" placeholder=\"Añadir competencia\"/>
\t\t";
        }
        // line 10
        echo "\t</div>
\t
\t<div class=\"modal-footer\">
        <button type=\"submit\" class=\"btn btn-blue\" id=\"saveHabilidades\">Guardar</button>
        <button type=\"button\" class=\"btn btn-default\" id=\"CCHabilidad\" data-dismiss=\"modal\">Cerrar</button>
    </div>
</form>

<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pcvdemo/plugin/taginput/bootstrap-tagsinput.css"), "html", null, true);
        echo "\"/>
<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pcvdemo/plugin/taginput/bootstrap-tagsinput.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
\t\$('#saveHabilidades').click(function(){
\t\tconsole.log(\$(\"input\").val())
\t\tconsole.log(\$(\"input\").tagsinput('items'))
\t})

\t\$('#CCHabilidad').click(function(){
        location.href='";
        // line 27
        echo $this->env->getExtension('routing')->getPath("_private_resume_profile");
        echo "';
    });
</script>

";
    }

    public function getTemplateName()
    {
        return "PCVDemoBundle:Edit:habilidades.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  70 => 27,  59 => 19,  55 => 18,  45 => 10,  41 => 8,  35 => 6,  33 => 5,  26 => 2,  20 => 1,);
    }
}
