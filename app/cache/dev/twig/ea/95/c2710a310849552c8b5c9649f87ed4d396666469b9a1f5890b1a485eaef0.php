<?php

/* SmartnodeuserBundle:User:new.html.twig */
class __TwigTemplate_ea95c2710a310849552c8b5c9649f87ed4d396666469b9a1f5890b1a485eaef0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>User creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("user");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "SmartnodeuserBundle:User:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 71,  167 => 58,  153 => 55,  97 => 43,  34 => 7,  23 => 4,  100 => 27,  58 => 18,  20 => 1,  84 => 37,  53 => 18,  113 => 44,  81 => 39,  160 => 52,  152 => 46,  127 => 26,  124 => 25,  110 => 8,  77 => 38,  65 => 27,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 45,  61 => 26,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 51,  119 => 42,  102 => 32,  71 => 37,  67 => 20,  63 => 15,  59 => 14,  38 => 8,  94 => 33,  89 => 41,  85 => 40,  75 => 30,  68 => 36,  56 => 24,  87 => 25,  21 => 2,  26 => 12,  93 => 42,  88 => 30,  78 => 21,  46 => 11,  27 => 5,  44 => 12,  31 => 4,  28 => 3,  201 => 76,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 57,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 34,  136 => 56,  121 => 48,  117 => 44,  105 => 40,  91 => 27,  62 => 19,  49 => 14,  24 => 7,  25 => 3,  19 => 1,  79 => 18,  72 => 22,  69 => 29,  47 => 9,  40 => 11,  37 => 30,  22 => 3,  246 => 90,  157 => 56,  145 => 53,  139 => 52,  131 => 50,  123 => 47,  120 => 40,  115 => 47,  111 => 46,  108 => 36,  101 => 44,  98 => 31,  96 => 31,  83 => 25,  74 => 30,  66 => 15,  55 => 14,  52 => 20,  50 => 10,  43 => 12,  41 => 9,  35 => 6,  32 => 23,  29 => 6,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 65,  176 => 62,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 54,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 49,  122 => 43,  116 => 9,  112 => 42,  109 => 34,  106 => 39,  103 => 28,  99 => 46,  95 => 15,  92 => 42,  86 => 12,  82 => 11,  80 => 19,  73 => 19,  64 => 35,  60 => 16,  57 => 11,  54 => 16,  51 => 13,  48 => 12,  45 => 17,  42 => 10,  39 => 9,  36 => 7,  33 => 7,  30 => 2,);
    }
}
