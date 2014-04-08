<?php

/* AcmeDemoBundle:Demo:index.html.twig */
class __TwigTemplate_38e93043b147cf426c199092690540b80a59a44d5f31ec98f3fc76c364e5ed2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Demos";
    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <h1 class=\"title\">Available demos</h1>
    <ul id=\"demo-list\">
        <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("_demo_hello", array("name" => "World"));
        echo "\">Hello World</a></li>
        <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("_demo_secured_hello", array("name" => "World"));
        echo "\">Access the secured area</a> <a href=\"";
        echo $this->env->getExtension('routing')->getPath("_demo_login");
        echo "\">Go to the login page</a></li>
        ";
        // line 13
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 32,  76 => 17,  70 => 27,  211 => 110,  186 => 94,  172 => 86,  165 => 82,  137 => 66,  194 => 71,  167 => 58,  153 => 55,  97 => 43,  34 => 7,  23 => 4,  100 => 27,  58 => 18,  20 => 1,  84 => 29,  53 => 11,  113 => 44,  81 => 34,  160 => 52,  152 => 46,  127 => 28,  124 => 25,  110 => 22,  77 => 38,  65 => 27,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 45,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 106,  179 => 90,  159 => 61,  143 => 56,  135 => 51,  119 => 42,  102 => 17,  71 => 37,  67 => 26,  63 => 23,  59 => 13,  38 => 6,  94 => 34,  89 => 41,  85 => 40,  75 => 30,  68 => 36,  56 => 11,  87 => 25,  21 => 2,  26 => 9,  93 => 42,  88 => 31,  78 => 26,  46 => 14,  27 => 5,  44 => 12,  31 => 3,  28 => 8,  201 => 76,  196 => 101,  183 => 82,  171 => 61,  166 => 71,  163 => 57,  158 => 78,  156 => 66,  151 => 74,  142 => 59,  138 => 34,  136 => 56,  121 => 48,  117 => 19,  105 => 18,  91 => 27,  62 => 19,  49 => 10,  24 => 7,  25 => 3,  19 => 1,  79 => 18,  72 => 22,  69 => 29,  47 => 8,  40 => 6,  37 => 5,  22 => 3,  246 => 90,  157 => 56,  145 => 53,  139 => 52,  131 => 50,  123 => 58,  120 => 20,  115 => 47,  111 => 46,  108 => 19,  101 => 44,  98 => 31,  96 => 31,  83 => 25,  74 => 30,  66 => 15,  55 => 18,  52 => 10,  50 => 10,  43 => 7,  41 => 5,  35 => 5,  32 => 9,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 65,  176 => 62,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 54,  147 => 58,  144 => 70,  141 => 48,  133 => 55,  130 => 62,  125 => 49,  122 => 43,  116 => 54,  112 => 42,  109 => 50,  106 => 39,  103 => 28,  99 => 46,  95 => 42,  92 => 42,  86 => 12,  82 => 28,  80 => 19,  73 => 16,  64 => 13,  60 => 22,  57 => 12,  54 => 16,  51 => 13,  48 => 9,  45 => 8,  42 => 7,  39 => 10,  36 => 5,  33 => 3,  30 => 3,);
    }
}
