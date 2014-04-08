<?php

/* ::base.html.twig */
class __TwigTemplate_cb3e61bf6d5b08d66f84cb376f6899b764947cd5dd382ec0090452ef9c2fb424 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
";
        // line 3
        $this->displayBlock('head', $context, $blocks);
        // line 23
        echo "    <body>
    ";
        // line 24
        $this->displayBlock('nav', $context, $blocks);
        // line 30
        echo "


        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 42
        echo "        
        

        ";
        // line 45
        $this->displayBlock('footer', $context, $blocks);
        // line 51
        echo "
        ";
        // line 52
        $this->displayBlock('javascripts', $context, $blocks);
        // line 53
        echo "    </body>
</html>
";
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>

        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smartnodetalk/css/kickstart.css"), "html", null, true);
        echo "\" media=\"all\" />                  <!-- KICKSTART -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smartnodetalk/css/style.css"), "html", null, true);
        echo "\" media=\"all\" />                          <!-- CUSTOM STYLES -->
        <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smartnodetalk/js/kickstart.js"), "html", null, true);
        echo "\"></script>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smartnodetalk/css/jquery.urlive.css"), "html", null, true);
        echo "\"/>
        <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smartnodetalk/js/jquery.urlive.js"), "html", null, true);
        echo "\"></script>




    </head>
    ";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 24
    public function block_nav($context, array $blocks = array())
    {
        // line 25
        echo "
        ";
        // line 26
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SmartnodeMenuBundle:Menu:displayMenu"));
        echo "


    ";
    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        // line 34
        echo "


            <div class=\"grid\" >

        

        </div> ";
    }

    // line 45
    public function block_footer($context, array $blocks = array())
    {
        // line 46
        echo "        <div class=\"clear\"></div>
        <div id=\"footer\">
 &copy; Copyright 2013–2014 All Rights Reserved. This website was built with <a href=\"http://www.99lime.com\">HTML KickStart</a>
</div>
        ";
    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  160 => 52,  152 => 46,  127 => 26,  124 => 25,  110 => 8,  77 => 10,  65 => 4,  37 => 30,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 33,  131 => 52,  119 => 42,  108 => 36,  102 => 32,  71 => 8,  67 => 15,  63 => 15,  59 => 14,  47 => 9,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  79 => 18,  75 => 9,  68 => 14,  56 => 53,  50 => 10,  29 => 3,  87 => 25,  72 => 16,  55 => 15,  21 => 2,  26 => 1,  98 => 31,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  40 => 8,  44 => 42,  35 => 24,  31 => 4,  43 => 8,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 34,  136 => 56,  123 => 47,  121 => 24,  117 => 44,  115 => 43,  105 => 40,  101 => 32,  91 => 14,  69 => 25,  66 => 15,  62 => 3,  49 => 45,  24 => 4,  32 => 23,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 45,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 9,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 16,  95 => 15,  92 => 21,  86 => 12,  82 => 11,  80 => 19,  73 => 19,  64 => 17,  60 => 13,  57 => 11,  54 => 52,  51 => 51,  48 => 13,  45 => 8,  42 => 33,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}
