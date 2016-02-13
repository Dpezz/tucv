<?php

/* PCVDemoBundle:Edit:redes.html.twig */
class __TwigTemplate_95b91d7088034056a68fd1c08ac172efd6f63ed2baf752feab12b51a7092111f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'edit_red' => array($this, 'block_edit_red'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('edit_red', $context, $blocks);
        // line 35
        echo "
\t";
    }

    // line 1
    public function block_edit_red($context, array $blocks = array())
    {
        // line 2
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("_edit_red");
        echo "\" method=\"POST\" role=\"form\">
\t<div class=\"row\">
\t";
        // line 4
        $context["values"] = array(0 => "facebook", 1 => "twitter", 2 => "google", 3 => "youtube", 4 => "instagram", 5 => "pinterest", 6 => "flickr", 7 => "tumblr", 8 => "soundcloud", 9 => "linkedin");
        // line 5
        echo "\t
\t";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["values"]) ? $context["values"] : $this->getContext($context, "values")));
        foreach ($context['_seq'] as $context["_key"] => $context["red"]) {
            // line 7
            echo "\t\t<div class=\"col-md-1\">
\t\t\t<i class=\"fa fa-";
            // line 8
            echo twig_escape_filter($this->env, $context["red"], "html", null, true);
            echo "\"></i>
\t\t</div>
\t\t<div class=\"col-md-3\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<input type=\"url\" class=\"form-control input-sm\" id=\"";
            // line 12
            echo twig_escape_filter($this->env, $context["red"], "html", null, true);
            echo "\" name=\"_";
            echo twig_escape_filter($this->env, $context["red"], "html", null, true);
            echo "\" 
\t\t\t\tplaceholder=\"";
            // line 13
            echo twig_escape_filter($this->env, $context["red"], "html", null, true);
            echo "..\" 
\t\t\t\t";
            // line 14
            if ((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD"))) {
                // line 15
                echo "\t\t\t\t";
                $context["elementos"] = twig_split_filter($this->env, $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "redes", array()), "}");
                // line 16
                echo "\t\t\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["elementos"]) ? $context["elementos"] : $this->getContext($context, "elementos")));
                foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                    // line 17
                    echo "\t\t\t\t\t";
                    $context["valor"] = twig_split_filter($this->env, $context["element"], "{");
                    // line 18
                    echo "\t\t\t\t\t";
                    if (($context["red"] == twig_first($this->env, (isset($context["valor"]) ? $context["valor"] : $this->getContext($context, "valor"))))) {
                        // line 19
                        echo "\t\t\t\t\t\t";
                        $context["value"] = twig_last($this->env, (isset($context["valor"]) ? $context["valor"] : $this->getContext($context, "valor")));
                        // line 20
                        echo "\t\t\t\t\t\tvalue=\"";
                        echo twig_escape_filter($this->env, trim((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
                        echo "\"
\t\t\t\t\t";
                    }
                    // line 22
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "\t\t\t\t";
            }
            // line 24
            echo "\t\t\t\tautofocus/>
\t\t\t</div>
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['red'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "\t</div>
\t<div class=\"modal-footer\">
        <button type=\"submit\" class=\"btn btn-blue\" id=\"name\">Guardar</button>
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "PCVDemoBundle:Edit:redes.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  108 => 28,  99 => 24,  96 => 23,  90 => 22,  84 => 20,  81 => 19,  78 => 18,  75 => 17,  70 => 16,  67 => 15,  65 => 14,  61 => 13,  55 => 12,  48 => 8,  45 => 7,  41 => 6,  38 => 5,  36 => 4,  30 => 2,  27 => 1,  22 => 35,  20 => 1,);
    }
}
