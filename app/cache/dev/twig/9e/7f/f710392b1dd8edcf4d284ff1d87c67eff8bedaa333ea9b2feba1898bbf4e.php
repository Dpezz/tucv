<?php

/* PCVDemoBundle:Home:signup.html.twig */
class __TwigTemplate_9e7ff710392b1dd8edcf4d284ff1d87c67eff8bedaa333ea9b2feba1898bbf4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'signup' => array($this, 'block_signup'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('signup', $context, $blocks);
        // line 74
        echo "

";
    }

    // line 1
    public function block_signup($context, array $blocks = array())
    {
        // line 2
        echo "
<div ng-app=\"validate\" ng-controller=\"signinForm\">
    <form name=\"userForm\" ng-submit=\"submitForm()\" novalidate>
\t   ";
        // line 6
        echo "\t\t<div class=\"form-group\" ng-class=\"{ 'has-error' : userForm.name.\$invalid && !userForm.name.\$pristine }\">
\t\t\t<div class=\"input-group \">
\t\t\t\t<span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"name\" placeholder=\"Nombre\" ng-model=\"user.name\" required/>
            </div>
            <p ng-show=\"userForm.name.\$invalid && !userForm.name.\$pristine\" class=\"help-block\">obligatorio.</p>
        </div>

        
        ";
        // line 16
        echo "        <div class=\"form-group\" ng-class=\"{ 'has-error' : userForm.plast.\$invalid && !userForm.plast.\$pristine }\">
            <div class=\"input-group \">
                <span class=\"input-group-addon\"><i class=\"fa fa-male\"></i></span>
                <input type=\"text\" class=\"form-control\" name=\"plast\" placeholder=\"Apellido Paterno\" ng-model=\"user.plast\" required/>
            </div>
            <p ng-show=\"userForm.plast.\$invalid && !userForm.plast.\$pristine\" class=\"help-block\">obligatorio.</p>
        </div>
        

        ";
        // line 26
        echo "        <div class=\"form-group\" ng-class=\"{ 'has-error' : userForm.mlast.\$invalid && !userForm.mlast.\$pristine }\">
            <div class=\"input-group \">
                <span class=\"input-group-addon\"><i class=\"fa fa-female\"></i></span>
                <input type=\"text\" class=\"form-control\" name=\"mlast\" placeholder=\"Apellido Materno\" ng-model=\"user.mlast\" required/>
            </div>
            <p ng-show=\"userForm.mlast.\$invalid && !userForm.mlast.\$pristine\" class=\"help-block\">obligatorio.</p>
        </div>

        <hr>

        ";
        // line 37
        echo "        <div class=\"form-group\" ng-class=\"{ 'has-error' : userForm.email.\$invalid && !userForm.email.\$pristine }\">
            <div class=\"input-group \">
                <span class=\"input-group-addon\"><i class=\"fa fa-envelope\"></i></span>
                <input type=\"text\" class=\"form-control\" name=\"email\" placeholder=\"Correo electrónico\" ng-model=\"user.email\" ng-change=\"find()\" required/>
           </div>
           <p ng-show=\"userForm.email.\$invalid && !userForm.email.\$pristine\" class=\"help-block\">obligatorio.</p>
        </div>  

        <hr>

        ";
        // line 48
        echo "        <div class=\"form-group\" ng-class=\"{ 'has-error' : userForm.password.\$invalid && !userForm.password.\$pristine }\">
            <div class=\"input-group \">
                <span class=\"input-group-addon\"><i class=\"fa fa-key\"></i></span>
                <input type=\"password\" class=\"form-control\" name=\"password\" ng-model=\"user.password\" placeholder=\"Contraseña\" required />
            </div>
            <p ng-show=\"userForm.password.\$invalid && !userForm.password.\$pristine\" class=\"help-block\">obligatorio.</p>
        </div>
   
        ";
        // line 57
        echo "        <div class=\"form-group\" ng-class=\"{ 'has-error' : userForm.confirmPassword.\$invalid && !userForm.confirmPassword.\$pristine }\">
            <div class=\"input-group \">
                <span class=\"input-group-addon\"><i class=\"fa fa-key\"></i></span>
                <input type=\"password\" class=\"form-control\" name=\"confirmPassword\" ng-model=\"user.confirmPassword\" repeat-password=\"password\" placeholder=\"Repetir contraseña\" required />
            </div>
            <p ng-show=\"userForm.confirmPassword.\$invalid && !userForm.confirmPassword.\$pristine\" class=\"help-block\">Passwords no coinciden.</p>
            <p class=\"text-danger\" ng-show=\"userForm.confirmPassword.\$dirty && userForm.confirmPassword.\$error.dontMatch\">Passwords no coinciden</p>
        </div>
   
        <div class=\"modal-footer\">
            <h5 class=\"pull-left text-danger\">{[{checkemail}]}</h5>      
            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"glyphicon glyphicon-remove\"></i>&nbsp;Cerrar</button>
            <button type=\"submit\" class=\"btn btn-info btn-lg\" ng-disabled=\"userForm.\$invalid\"><i class=\"fa fa-sign-in white\"></i>&nbsp;Registrar</button>
        </div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "PCVDemoBundle:Home:signup.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  92 => 57,  82 => 48,  70 => 37,  58 => 26,  47 => 16,  36 => 6,  31 => 2,  28 => 1,  22 => 74,  20 => 1,);
    }
}
