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
        return array (  98 => 35,  91 => 30,  82 => 27,  75 => 23,  69 => 20,  65 => 19,  61 => 17,  57 => 16,  46 => 7,  43 => 6,  37 => 4,  31 => 2,);
    }
}
