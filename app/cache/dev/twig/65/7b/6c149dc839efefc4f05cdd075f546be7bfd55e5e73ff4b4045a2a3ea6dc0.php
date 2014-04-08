<?php

/* SmartnodeTalkBundle:Talk:viewchan.html.twig */
class __TwigTemplate_657b6c149dc839efefc4f05cdd075f546be7bfd55e5e73ff4b4045a2a3ea6dc0 extends Twig_Template
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
        echo "<script type=\"text/javascript\">
    /*\$(window).load(function(){
        \$('section').urlive({container: '.urllive'})
    });*/

    \$('section').urlive().hover(function(){
        \$(this).urlive('open');
    });

</script>

<div class=\"boite col_12\">

<h2>Channel: ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chan"]) ? $context["chan"] : $this->getContext($context, "chan")), "Channame"), "html", null, true);
        echo "</h2>


</div>
    <div class=\"col_3\"></div>

    <div class=\"col_6\">
        ";
        // line 25
        echo "        <div>";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form');
        echo "</div>

        ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")));
        foreach ($context['_seq'] as $context["_key"] => $context["input"]) {
            // line 28
            echo "

            <div class=\"boite\"><span class=\"boite\"><p>Posted: ";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["input"]) ? $context["input"] : $this->getContext($context, "input")), "creationdate"), "d/m/Y", false), "html", null, true);
            echo " By: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["input"]) ? $context["input"] : $this->getContext($context, "input")), "postowner"), "html", null, true);
            echo "</p></span></div>
            <section class=\"boite\"> <p>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["input"]) ? $context["input"] : $this->getContext($context, "input")), "postcontent"), "html", null, true);
            echo "</p>
            <div class=\"urlive-container\"></div>
            </section>
            <br/>



";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['input'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    </div>

    <div class=\"col_3\"></div>





";
    }

    public function getTemplateName()
    {
        return "SmartnodeTalkBundle:Talk:viewchan.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 39,  76 => 31,  70 => 30,  66 => 28,  62 => 27,  56 => 25,  46 => 17,  31 => 4,  28 => 3,);
    }
}
