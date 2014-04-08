<?php

/* SmartnodeMenuBundle:Menu:primary_menu.html.twig */
class __TwigTemplate_baa581d19f5eed0fb23aff81e052d05792fd9bd972ea9c4fbd254e2e1a1e50e1 extends Twig_Template
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
        echo "<nav>
    <section>
        <ul class=\"menu\">

            <li>
                <a href=\"#\">Channel</a>
                <ul>
                    ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 9
            echo "                        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("smartnode_talk_chanview", array("id" => $this->getAttribute((isset($context["cat"]) ? $context["cat"] : null), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cat"]) ? $context["cat"] : null), "channame"), "html", null, true);
            echo "</a></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "                </ul>
            </li>

            <li>
                <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">Login</a>
                <ul>

                        <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Logout</a></li>

                </ul>
            </li>
            <li>
                <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("smartnode_talk_chanadd");
        echo "\">New Channel</a>

            </li>
            <li>
                <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("smartnode_talk_postadd");
        echo "\">New Post</a>

            </li>


        </ul>
    </section>
</nav>";
    }

    public function getTemplateName()
    {
        return "SmartnodeMenuBundle:Menu:primary_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 27,  211 => 110,  186 => 94,  172 => 86,  165 => 82,  137 => 66,  194 => 71,  167 => 58,  157 => 56,  153 => 55,  145 => 53,  139 => 52,  97 => 43,  34 => 7,  23 => 4,  100 => 27,  20 => 1,  58 => 18,  84 => 37,  74 => 30,  53 => 18,  113 => 44,  81 => 34,  52 => 20,  160 => 52,  152 => 46,  127 => 26,  124 => 25,  110 => 8,  77 => 38,  65 => 4,  37 => 30,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 46,  107 => 45,  61 => 22,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 106,  179 => 90,  159 => 61,  143 => 56,  135 => 51,  131 => 50,  119 => 42,  108 => 36,  102 => 46,  71 => 37,  67 => 26,  63 => 23,  59 => 14,  47 => 9,  38 => 8,  94 => 33,  89 => 41,  85 => 40,  79 => 18,  75 => 25,  68 => 36,  56 => 53,  50 => 10,  29 => 6,  87 => 25,  72 => 22,  55 => 18,  21 => 2,  26 => 12,  98 => 31,  93 => 42,  88 => 38,  78 => 21,  46 => 14,  27 => 5,  40 => 11,  44 => 12,  35 => 6,  31 => 4,  43 => 11,  41 => 9,  28 => 8,  201 => 76,  196 => 101,  183 => 82,  171 => 61,  166 => 71,  163 => 57,  158 => 78,  156 => 66,  151 => 74,  142 => 59,  138 => 34,  136 => 56,  123 => 58,  121 => 48,  117 => 44,  115 => 47,  105 => 40,  101 => 44,  91 => 27,  69 => 25,  66 => 15,  62 => 19,  49 => 15,  24 => 7,  32 => 9,  25 => 3,  22 => 3,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 65,  176 => 62,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 54,  147 => 58,  144 => 70,  141 => 48,  133 => 55,  130 => 62,  125 => 49,  122 => 43,  116 => 54,  112 => 42,  109 => 50,  106 => 39,  103 => 28,  99 => 46,  95 => 42,  92 => 42,  86 => 12,  82 => 11,  80 => 19,  73 => 19,  64 => 35,  60 => 22,  57 => 11,  54 => 16,  51 => 13,  48 => 12,  45 => 8,  42 => 10,  39 => 10,  36 => 7,  33 => 7,  30 => 2,);
    }
}
