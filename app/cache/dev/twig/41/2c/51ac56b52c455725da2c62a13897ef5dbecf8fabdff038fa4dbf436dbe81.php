<?php

/* PCVDemoBundle:Edit:sendEmail.html.twig */
class __TwigTemplate_412c51ac56b52c455725da2c62a13897ef5dbecf8fabdff038fa4dbf436dbe81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'send_email' => array($this, 'block_send_email'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('send_email', $context, $blocks);
    }

    public function block_send_email($context, array $blocks = array())
    {
        // line 2
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("_send_email");
        echo "\" method=\"POST\" role=\"form\">
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">\t\t
\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t<span class=\"input-group-addon\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Ingresar correo. Más de un correo Separar con ',' Ej: correo1@tucv.cl,correo2@tucv.cl\"><i class=\"fa fa-envelope-o\"></i></span>
\t\t\t\t<input type=\"email\" class=\"form-control input-sm\" id=\"to_email\" name=\"_to_email\" placeholder=\"Para\" multiple required/>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>\t\t
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t<span class=\"input-group-addon\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Ingresa Asunto\"><i class=\"fa fa-pencil\"></i></span>
\t\t\t\t<input type=\"text\" class=\"form-control input-sm\" id=\"asunto\" name=\"_asunto\" placeholder=\"Asunto\" required/>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<textarea class=\"form-control\" id=\"msg\" name=\"_msg\" rows=\"5\" placeholder=\"mensaje\" required></textarea>
\t\t</div>
\t</div>
\t<div class=\"modal-footer\">
        <button type=\"submit\" class=\"btn btn-blue\" id=\"btnSend\" disabled=\"disabled\">Enviar</button>
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
    </div>
</form>
<script type=\"text/javascript\">
\$(document).ready(function(){
  \$( \"#to_email\" ).keyup(function() {
    activarbtn();
  });
  \$( \"#asunto\" ).keyup(function() {
    activarbtn();
  });
  \$( \"#msg\" ).keyup(function() {
    activarbtn();
  });
});
function activarbtn(){
  if(\$('#to_email').val().trim().length>0 && \$('#asunto').val().trim().length>0 && \$('#msg').val().trim().length>0 )
  {
    \$('#btnSend').removeAttr('disabled');
  }else{
    \$('#btnSend').attr('disabled','disabled');
  }
};
</script>
";
    }

    public function getTemplateName()
    {
        return "PCVDemoBundle:Edit:sendEmail.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  20 => 1,);
    }
}
