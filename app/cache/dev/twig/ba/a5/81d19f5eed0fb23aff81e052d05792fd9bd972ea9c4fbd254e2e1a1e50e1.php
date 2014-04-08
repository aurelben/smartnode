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
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 9
            echo "                        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("smartnode_talk_chanview", array("id" => $this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "channame"), "html", null, true);
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
        return array (  70 => 27,  63 => 23,  55 => 18,  43 => 11,  19 => 1,  160 => 52,  152 => 46,  149 => 45,  138 => 34,  135 => 33,  127 => 26,  124 => 25,  121 => 24,  116 => 9,  110 => 8,  99 => 16,  95 => 15,  91 => 14,  86 => 12,  82 => 11,  77 => 10,  71 => 8,  62 => 3,  54 => 52,  51 => 51,  49 => 15,  44 => 42,  42 => 33,  37 => 30,  35 => 24,  32 => 9,  30 => 3,  26 => 1,  89 => 38,  75 => 9,  69 => 29,  65 => 4,  61 => 26,  56 => 53,  46 => 17,  31 => 4,  28 => 8,);
    }
}
