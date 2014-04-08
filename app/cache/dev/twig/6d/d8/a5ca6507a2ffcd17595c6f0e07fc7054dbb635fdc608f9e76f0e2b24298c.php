<?php

/* SmartnodeuserBundle:User:show.html.twig */
class __TwigTemplate_6dd8a5ca6507a2ffcd17595c6f0e07fc7054dbb635fdc608f9e76f0e2b24298c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>User</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Username</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "username"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Usernamecanonical</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "usernameCanonical"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Emailcanonical</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "emailCanonical"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Enabled</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "enabled"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Salt</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "salt"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "password"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lastlogin</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lastLogin"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Locked</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "locked"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Expired</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "expired"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Expiresat</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "expiresAt"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Confirmationtoken</th>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "confirmationToken"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Passwordrequestedat</th>
                <td>";
        // line 58
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "passwordRequestedAt"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Roles</th>
                <td>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "roles"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Credentialsexpired</th>
                <td>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "credentialsExpired"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Credentialsexpireat</th>
                <td>";
        // line 70
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "credentialsExpireAt"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Gender</th>
                <td>";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "gender"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Avatar</th>
                <td>";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "avatar"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Borndate</th>
                <td>";
        // line 86
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "borndate"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Actived</th>
                <td>";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "actived"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lastactive</th>
                <td>";
        // line 94
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lastactive"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 101
        echo $this->env->getExtension('routing')->getPath("user");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 110
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "SmartnodeuserBundle:User:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 110,  186 => 94,  172 => 86,  165 => 82,  137 => 66,  194 => 71,  167 => 58,  153 => 55,  97 => 43,  34 => 7,  23 => 4,  100 => 27,  58 => 18,  20 => 1,  84 => 37,  53 => 18,  113 => 44,  81 => 34,  160 => 52,  152 => 46,  127 => 26,  124 => 25,  110 => 8,  77 => 38,  65 => 27,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 45,  61 => 26,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 106,  179 => 90,  159 => 61,  143 => 56,  135 => 51,  119 => 42,  102 => 46,  71 => 37,  67 => 26,  63 => 15,  59 => 14,  38 => 8,  94 => 33,  89 => 41,  85 => 40,  75 => 30,  68 => 36,  56 => 24,  87 => 25,  21 => 2,  26 => 12,  93 => 42,  88 => 38,  78 => 21,  46 => 14,  27 => 5,  44 => 12,  31 => 4,  28 => 3,  201 => 76,  196 => 101,  183 => 82,  171 => 61,  166 => 71,  163 => 57,  158 => 78,  156 => 66,  151 => 74,  142 => 59,  138 => 34,  136 => 56,  121 => 48,  117 => 44,  105 => 40,  91 => 27,  62 => 19,  49 => 14,  24 => 7,  25 => 3,  19 => 1,  79 => 18,  72 => 22,  69 => 29,  47 => 9,  40 => 11,  37 => 30,  22 => 3,  246 => 90,  157 => 56,  145 => 53,  139 => 52,  131 => 50,  123 => 58,  120 => 40,  115 => 47,  111 => 46,  108 => 36,  101 => 44,  98 => 31,  96 => 31,  83 => 25,  74 => 30,  66 => 15,  55 => 14,  52 => 20,  50 => 10,  43 => 12,  41 => 9,  35 => 6,  32 => 23,  29 => 6,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 65,  176 => 62,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 54,  147 => 58,  144 => 70,  141 => 48,  133 => 55,  130 => 62,  125 => 49,  122 => 43,  116 => 54,  112 => 42,  109 => 50,  106 => 39,  103 => 28,  99 => 46,  95 => 42,  92 => 42,  86 => 12,  82 => 11,  80 => 19,  73 => 19,  64 => 35,  60 => 22,  57 => 11,  54 => 16,  51 => 13,  48 => 12,  45 => 17,  42 => 10,  39 => 10,  36 => 7,  33 => 7,  30 => 2,);
    }
}
