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
        echo "<div class=\"col_12\">
    <ul class=\"menu\">
        ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")));
        foreach ($context['_seq'] as $context["_key"] => $context["item_menu"]) {
            // line 4
            echo "            <li>
            ";
            // line 5
            if (twig_test_iterable($this->getAttribute((isset($context["item_menu"]) ? $context["item_menu"] : $this->getContext($context, "item_menu")), "child"))) {
                // line 6
                echo "                <li>
                    <a href=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item_menu"]) ? $context["item_menu"] : $this->getContext($context, "item_menu")), "url"), "html", null, true);
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item_menu"]) ? $context["item_menu"] : $this->getContext($context, "item_menu")), "title"), "html", null, true);
                echo " <b></b></a>
                    <ul>
                        ";
                // line 9
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item_menu"]) ? $context["item_menu"] : $this->getContext($context, "item_menu")), "child"));
                foreach ($context['_seq'] as $context["_key"] => $context["child_item_menu"]) {
                    // line 10
                    echo "                            <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child_item_menu"]) ? $context["child_item_menu"] : $this->getContext($context, "child_item_menu")), "url"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child_item_menu"]) ? $context["child_item_menu"] : $this->getContext($context, "child_item_menu")), "title"), "html", null, true);
                    echo "</a></li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child_item_menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 12
                echo "                    </ul>
                </li>
            ";
            } else {
                // line 15
                echo "                <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item_menu"]) ? $context["item_menu"] : $this->getContext($context, "item_menu")), "url"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item_menu"]) ? $context["item_menu"] : $this->getContext($context, "item_menu")), "title"), "html", null, true);
                echo "</a></li>
            ";
            }
            // line 17
            echo "            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item_menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </ul>
    <ul>
        ";
        // line 22
        echo "    </ul>
</div>";
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
        return array (  81 => 22,  77 => 19,  70 => 17,  62 => 15,  57 => 12,  46 => 10,  42 => 9,  35 => 7,  32 => 6,  30 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
