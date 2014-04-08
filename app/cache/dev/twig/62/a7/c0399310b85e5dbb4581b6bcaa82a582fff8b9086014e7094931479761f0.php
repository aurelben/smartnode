<?php

/* SmartnodeTalkBundle:Default:index.html.twig */
class __TwigTemplate_62a7c0399310b85e5dbb4581b6bcaa82a582fff8b9086014e7094931479761f0 extends Twig_Template
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

<h2>Hello Smartnode<h2>

</div>

";
    }

    public function getTemplateName()
    {
        return "SmartnodeTalkBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
