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
    \$(window).load(function(){
        \$('p').urlive({container: '.urllive'})
    });

</script>

<div class=\"boite col_12\">

<h2>Channel: ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chan"]) ? $context["chan"] : null), "Channame"), "html", null, true);
        echo "</h2>


</div>
    <div class=\"col_3\"></div>

    <div class=\"col_6\">";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["post"]) ? $context["post"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 20
            echo "
            <div class=\"boite\"><span class=\"boite\"><p>Posted: ";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "creationdate"), "d/m/Y", false), "html", null, true);
            echo " By: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "postowner"), "html", null, true);
            echo "</p></span></div>
            <section class=\"boite\"> <p>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "postcontent"), "html", null, true);
            echo "</p>  </section><br/>
            <div class=\"urllive boite\"></div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
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
        return array (  58 => 21,  84 => 37,  74 => 26,  53 => 18,  113 => 44,  81 => 26,  52 => 20,  160 => 52,  152 => 46,  127 => 26,  124 => 25,  110 => 8,  77 => 10,  65 => 4,  37 => 30,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 22,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 33,  131 => 52,  119 => 42,  108 => 36,  102 => 32,  71 => 24,  67 => 26,  63 => 15,  59 => 14,  47 => 9,  38 => 6,  94 => 33,  89 => 20,  85 => 25,  79 => 18,  75 => 25,  68 => 14,  56 => 53,  50 => 10,  29 => 3,  87 => 25,  72 => 16,  55 => 20,  21 => 2,  26 => 1,  98 => 31,  93 => 28,  88 => 30,  78 => 21,  46 => 14,  27 => 4,  40 => 8,  44 => 12,  35 => 6,  31 => 4,  43 => 8,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 34,  136 => 56,  123 => 47,  121 => 24,  117 => 44,  115 => 43,  105 => 40,  101 => 32,  91 => 14,  69 => 25,  66 => 15,  62 => 3,  49 => 15,  24 => 4,  32 => 23,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 45,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 9,  112 => 42,  109 => 34,  106 => 39,  103 => 32,  99 => 46,  95 => 15,  92 => 42,  86 => 12,  82 => 11,  80 => 19,  73 => 19,  64 => 22,  60 => 22,  57 => 11,  54 => 52,  51 => 19,  48 => 19,  45 => 8,  42 => 13,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
