<?php

/* SmartnodeTalkBundle:Talk:addpostchan.html.twig */
class __TwigTemplate_eeb2a3368a63759a81250fd19cde18017f3c97a0328e49f739ee627f9ef10840 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "


<div>

";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form');
        echo "
</div>
<br>

";
    }

    public function getTemplateName()
    {
        return "SmartnodeTalkBundle:Talk:addpostchan.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 27,  63 => 23,  55 => 18,  43 => 11,  19 => 1,  160 => 52,  152 => 46,  149 => 45,  138 => 34,  135 => 33,  127 => 26,  124 => 25,  121 => 24,  116 => 9,  110 => 8,  99 => 16,  95 => 15,  91 => 14,  86 => 12,  82 => 11,  77 => 10,  71 => 8,  62 => 3,  54 => 52,  51 => 51,  49 => 15,  44 => 42,  42 => 33,  37 => 30,  35 => 24,  32 => 9,  30 => 3,  26 => 6,  89 => 38,  75 => 9,  69 => 29,  65 => 4,  61 => 26,  56 => 53,  46 => 17,  31 => 4,  28 => 8,);
    }
}
