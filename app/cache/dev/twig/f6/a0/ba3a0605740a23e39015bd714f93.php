<?php

/* PmPortfolioBundle:Admin:adminprojects.html.twig */
class __TwigTemplate_f6a0ba3a0605740a23e39015bd714f93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::admin.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'innerwrap' => array($this, 'block_innerwrap'),
            'content' => array($this, 'block_content'),
            'javascriptcunstom' => array($this, 'block_javascriptcunstom'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Projects management";
    }

    // line 4
    public function block_innerwrap($context, array $blocks = array())
    {
        echo "<div id=\"inner-wrap\" class=\"project-management\">";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "\t<div id=\"main\" role=\"main\">
\t\t<table id=\"projects-table\" class=\"table table-hover table-bordered table-striped table-condensed\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t    \t<th>Titre</th>
\t\t\t    \t<th>Date</th>
\t\t\t    </tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "projects"));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 17
            echo "            \t<tr>
\t\t    \t\t<td>
\t\t    \t\t\t<a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('routing')->getPath("pm_portfolio_admin_projects_edit", array("id" => $this->getAttribute($this->getContext($context, "project"), "id")))), "html", null, true);
            echo "\">
\t\t    \t\t\t\t";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "title"), "html", null, true);
            echo "
\t\t    \t\t\t</a>
\t\t    \t\t\t <span class=\"project-options\">
\t\t    \t\t\t \t<a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('routing')->getPath("pm_portfolio_admin_projects_edit", array("id" => $this->getAttribute($this->getContext($context, "project"), "id")))), "html", null, true);
            echo "\">Modifier</a>
\t\t    \t\t\t \t <a href=\"#\">Supprimer</a>
\t\t    \t\t\t </span>
\t\t    \t\t</td>
\t\t    \t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "date"), "d-m-Y"), "html", null, true);
            echo "</td>
\t\t    \t</tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 30
        echo "            </tbody>
        </table>
\t</div>
";
    }

    // line 35
    public function block_javascriptcunstom($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "PmPortfolioBundle:Admin:adminprojects.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 27,  65 => 19,  269 => 77,  266 => 76,  262 => 74,  218 => 72,  214 => 64,  211 => 63,  208 => 62,  204 => 56,  195 => 24,  187 => 57,  185 => 55,  169 => 44,  156 => 40,  129 => 24,  69 => 20,  53 => 76,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 67,  181 => 66,  176 => 65,  170 => 61,  168 => 60,  146 => 58,  142 => 56,  128 => 50,  125 => 22,  107 => 36,  38 => 18,  144 => 53,  141 => 51,  135 => 47,  126 => 45,  109 => 41,  103 => 37,  67 => 15,  61 => 17,  47 => 62,  105 => 24,  93 => 28,  76 => 16,  72 => 14,  68 => 12,  27 => 4,  91 => 30,  84 => 28,  94 => 39,  88 => 6,  79 => 17,  59 => 22,  21 => 2,  44 => 12,  31 => 2,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 55,  196 => 80,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 38,  132 => 48,  127 => 46,  121 => 45,  118 => 17,  114 => 42,  104 => 36,  100 => 34,  78 => 21,  75 => 23,  71 => 19,  58 => 9,  34 => 11,  26 => 1,  24 => 3,  25 => 3,  19 => 1,  70 => 20,  63 => 24,  46 => 7,  22 => 2,  163 => 42,  155 => 58,  152 => 39,  149 => 48,  145 => 37,  139 => 55,  131 => 25,  123 => 41,  120 => 40,  115 => 39,  106 => 36,  101 => 32,  96 => 21,  83 => 18,  80 => 24,  74 => 15,  66 => 6,  55 => 78,  52 => 15,  50 => 75,  43 => 6,  41 => 7,  37 => 4,  35 => 5,  32 => 5,  29 => 3,  184 => 70,  178 => 50,  171 => 62,  165 => 58,  162 => 57,  157 => 60,  153 => 54,  151 => 53,  143 => 54,  138 => 51,  136 => 50,  133 => 43,  130 => 47,  122 => 21,  119 => 42,  116 => 35,  111 => 37,  108 => 37,  102 => 30,  98 => 35,  95 => 34,  92 => 33,  89 => 19,  85 => 25,  81 => 40,  73 => 19,  64 => 17,  60 => 5,  57 => 16,  54 => 10,  51 => 14,  48 => 13,  45 => 21,  42 => 7,  39 => 9,  36 => 6,  33 => 4,  30 => 7,);
    }
}
