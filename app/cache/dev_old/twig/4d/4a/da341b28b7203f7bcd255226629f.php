<?php

/* FOSUserBundle:ChangePassword:changePassword_content.html.twig */
class __TwigTemplate_4d4ada341b28b7203f7bcd255226629f extends Twig_Template
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
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_change_password"), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " method=\"POST\" class=\"fos_user_change_password\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 38,  134 => 37,  99 => 23,  90 => 36,  87 => 19,  220 => 66,  174 => 55,  164 => 47,  161 => 46,  113 => 22,  150 => 43,  110 => 25,  86 => 19,  82 => 27,  65 => 19,  269 => 77,  266 => 76,  262 => 74,  218 => 72,  214 => 64,  211 => 63,  208 => 62,  204 => 56,  195 => 24,  187 => 57,  185 => 55,  169 => 44,  156 => 40,  129 => 24,  69 => 14,  53 => 66,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 67,  219 => 70,  213 => 69,  207 => 68,  198 => 67,  181 => 66,  176 => 65,  170 => 61,  168 => 53,  146 => 58,  142 => 56,  128 => 50,  125 => 22,  107 => 19,  38 => 18,  144 => 53,  141 => 51,  135 => 47,  126 => 45,  109 => 9,  103 => 37,  67 => 16,  61 => 12,  47 => 8,  105 => 26,  93 => 37,  76 => 32,  72 => 31,  68 => 29,  27 => 4,  91 => 22,  84 => 28,  94 => 22,  88 => 6,  79 => 17,  59 => 13,  21 => 2,  44 => 12,  31 => 4,  28 => 5,  225 => 96,  216 => 64,  212 => 88,  205 => 84,  201 => 55,  196 => 80,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 48,  132 => 36,  127 => 16,  121 => 30,  118 => 17,  114 => 28,  104 => 6,  100 => 14,  78 => 16,  75 => 23,  71 => 17,  58 => 9,  34 => 3,  26 => 2,  24 => 3,  25 => 3,  19 => 1,  70 => 20,  63 => 24,  46 => 7,  22 => 1,  163 => 42,  155 => 21,  152 => 39,  149 => 48,  145 => 46,  139 => 55,  131 => 34,  123 => 11,  120 => 40,  115 => 39,  106 => 36,  101 => 5,  96 => 22,  83 => 18,  80 => 24,  74 => 12,  66 => 6,  55 => 12,  52 => 15,  50 => 23,  43 => 21,  41 => 6,  37 => 4,  35 => 5,  32 => 5,  29 => 3,  184 => 70,  178 => 62,  171 => 54,  165 => 58,  162 => 57,  157 => 60,  153 => 44,  151 => 53,  143 => 54,  138 => 51,  136 => 50,  133 => 36,  130 => 17,  122 => 36,  119 => 35,  116 => 34,  111 => 21,  108 => 27,  102 => 23,  98 => 35,  95 => 39,  92 => 33,  89 => 19,  85 => 20,  81 => 33,  73 => 19,  64 => 13,  60 => 27,  57 => 11,  54 => 24,  51 => 11,  48 => 9,  45 => 22,  42 => 7,  39 => 5,  36 => 16,  33 => 4,  30 => 12,);
    }
}