<?php

/* SmartnodeTalkBundle:Talk:updatepost.html.twig */
class __TwigTemplate_5733d786b1a256fd741d9bad3ef6266f86131ffe517b35adebe9b4f42c572932 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SmartnodeTalkBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SmartnodeTalkBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"boite col_3\">

<h2>Hello ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "<h2>

</div>

";
    }

    public function getTemplateName()
    {
        return "SmartnodeTalkBundle:Talk:updatepost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 37,  53 => 18,  113 => 44,  81 => 26,  160 => 52,  152 => 46,  127 => 26,  124 => 25,  110 => 8,  77 => 10,  65 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 22,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 33,  119 => 42,  102 => 32,  71 => 24,  67 => 26,  63 => 15,  59 => 14,  38 => 6,  94 => 33,  89 => 20,  85 => 25,  75 => 25,  68 => 14,  56 => 53,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 30,  78 => 21,  46 => 14,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 34,  136 => 56,  121 => 24,  117 => 44,  105 => 40,  91 => 14,  62 => 3,  49 => 15,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 30,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 30,  66 => 15,  55 => 21,  52 => 20,  50 => 10,  43 => 8,  41 => 7,  35 => 6,  32 => 23,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 45,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 9,  112 => 42,  109 => 34,  106 => 39,  103 => 32,  99 => 46,  95 => 15,  92 => 42,  86 => 12,  82 => 11,  80 => 19,  73 => 19,  64 => 17,  60 => 22,  57 => 11,  54 => 52,  51 => 51,  48 => 19,  45 => 17,  42 => 10,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
