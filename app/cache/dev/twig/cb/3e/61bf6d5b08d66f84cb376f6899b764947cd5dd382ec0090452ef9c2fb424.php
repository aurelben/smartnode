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
            'body' => array($this, 'block_body'),
            'nav' => array($this, 'block_nav'),
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
        // line 21
        echo "    <body>




        ";
        // line 26
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "        
        

        ";
        // line 43
        $this->displayBlock('footer', $context, $blocks);
        // line 49
        echo "
        ";
        // line 50
        $this->displayBlock('javascripts', $context, $blocks);
        // line 51
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
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smartnodetalk/css/jquery.urlive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <script src=\"";
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

    // line 26
    public function block_body($context, array $blocks = array())
    {
        // line 27
        echo "            ";
        $this->displayBlock('nav', $context, $blocks);
        // line 33
        echo "

            <div class=\"grid\" >

        

        </div> ";
    }

    // line 27
    public function block_nav($context, array $blocks = array())
    {
        // line 28
        echo "                
                    ";
        // line 29
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SmartnodeMenuBundle:Menu:displayMenu"));
        echo "


            ";
    }

    // line 43
    public function block_footer($context, array $blocks = array())
    {
        // line 44
        echo "        <div class=\"clear\"></div>
        <div id=\"footer\">
&copy; Copyright 2013–2014 All Rights Reserved. This website was built with <a href=\"http://www.99lime.com\">HTML KickStart</a>
</div>
        ";
    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  157 => 50,  149 => 44,  146 => 43,  138 => 29,  135 => 28,  132 => 27,  122 => 33,  119 => 27,  116 => 26,  111 => 9,  105 => 8,  96 => 16,  92 => 15,  88 => 14,  83 => 12,  79 => 11,  74 => 10,  72 => 9,  68 => 8,  62 => 4,  59 => 3,  53 => 51,  51 => 50,  48 => 49,  46 => 43,  41 => 40,  39 => 26,  32 => 21,  30 => 3,  26 => 1,);
    }
}
