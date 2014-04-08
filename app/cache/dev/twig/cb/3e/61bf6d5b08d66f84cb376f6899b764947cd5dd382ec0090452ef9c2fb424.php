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
        // line 62
        echo "    <body>
    ";
        // line 63
        $this->displayBlock('nav', $context, $blocks);
        // line 69
        echo "


        ";
        // line 72
        $this->displayBlock('body', $context, $blocks);
        // line 81
        echo "        
        

        ";
        // line 84
        $this->displayBlock('footer', $context, $blocks);
        // line 90
        echo "
        ";
        // line 91
        $this->displayBlock('javascripts', $context, $blocks);
        // line 92
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
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smartnodetalk/css/jquery.cleditor.css"), "html", null, true);
        echo "\" />
        <script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smartnodetalk/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smartnodetalk/js/jquery.cleditor.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\">

            \$(document).ready(function () { \$(\"#smartnode_talkbundle_post_postcontent\").cleditor({
                width:        'auto', // width not including margins, borders or padding
                height:       250, // height not including margins, borders or padding
                controls:     // controls to add to the toolbar
                        \"bold italic underline strikethrough subscript superscript | font size \" +
                                \"style | color highlight removeformat \" +
                                \"alignleft center alignright justify | undo redo | \" +
                                \"rule image link unlink\",
                colors:       // colors in the color popup
                        \"FFF FCC FC9 FF9 FFC 9F9 9FF CFF CCF FCF \" +
                                \"CCC F66 F96 FF6 FF3 6F9 3FF 6FF 99F F9F \" +
                                \"BBB F00 F90 FC6 FF0 3F3 6CC 3CF 66C C6C \" +
                                \"999 C00 F60 FC3 FC0 3C0 0CC 36F 63F C3C \" +
                                \"666 900 C60 C93 990 090 399 33F 60C 939 \" +
                                \"333 600 930 963 660 060 366 009 339 636 \" +
                                \"000 300 630 633 330 030 033 006 309 303\",
                fonts:        // font names in the font popup
                        \"Arial,Arial Black,Comic Sans MS,Courier New,Narrow,Garamond,\" +
                                \"Georgia,Impact,Sans Serif,Serif,Tahoma,Trebuchet MS,Verdana\",
                sizes:        // sizes in the font size popup
                        \"1,2,3,4,5,6,7\",
                styles:       // styles in the style popup
                        [[\"Paragraph\", \"<p>\"], [\"Header 1\", \"<h1>\"], [\"Header 2\", \"<h2>\"],
                            [\"Header 3\", \"<h3>\"],  [\"Header 4\",\"<h4>\"],  [\"Header 5\",\"<h5>\"],
                            [\"Header 6\",\"<h6>\"]],
                useCSS:       false, // use CSS to style HTML when possible (not supported in ie)
                docType:      // Document type contained within the editor
                        '<!DOCTYPE HTML>',
                docCSSFile:   // CSS file used to style the document contained within the editor
                        \"\",
                bodyStyle:    // style to assign to document body contained within the editor
                        \"margin:4px; font:10pt Arial,Verdana; cursor:text; color:white\"
            }); });
        </script>




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

    // line 63
    public function block_nav($context, array $blocks = array())
    {
        // line 64
        echo "
        ";
        // line 65
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SmartnodeMenuBundle:Menu:displayMenu"));
        echo "


    ";
    }

    // line 72
    public function block_body($context, array $blocks = array())
    {
        // line 73
        echo "


            <div class=\"grid\" >

        

        </div> ";
    }

    // line 84
    public function block_footer($context, array $blocks = array())
    {
        // line 85
        echo "        <div class=\"clear\"></div>
        <div id=\"footer\">
 &copy; Copyright 2013–2014 All Rights Reserved. This website was built with <a href=\"http://www.99lime.com\">HTML KickStart</a>
</div>
        ";
    }

    // line 91
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  208 => 91,  200 => 85,  197 => 84,  186 => 73,  183 => 72,  175 => 65,  172 => 64,  169 => 63,  164 => 9,  158 => 8,  111 => 19,  107 => 18,  103 => 17,  99 => 16,  95 => 15,  91 => 14,  86 => 12,  82 => 11,  77 => 10,  75 => 9,  71 => 8,  65 => 4,  62 => 3,  56 => 92,  54 => 91,  51 => 90,  49 => 84,  44 => 81,  42 => 72,  37 => 69,  35 => 63,  32 => 62,  30 => 3,  26 => 1,);
    }
}
