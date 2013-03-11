<?php

/* PmPortfolioBundle:Admin:adminprojectsedit.html.twig */
class __TwigTemplate_2d01200e67f8879ccabd1e812a16e385 extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Administration";
    }

    // line 5
    public function block_innerwrap($context, array $blocks = array())
    {
        echo "<div id=\"inner-wrap\" class=\"project-management\">";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "\t<div id=\"main\" role=\"main\">
\t\t
\t\t<!-- Projet -->
\t\t<form action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_portfolio_admin_projects_edit", array("id" => $this->getAttribute($this->getContext($context, "project"), "id"))), "html", null, true);
        echo "\" name=\"project\" method=\"post\" enctype=\"multipart/form-data\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
\t\t    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "

\t\t    <select name=\"form[category1]\">
\t\t    \t";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "categories"));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 16
            echo "\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "category"), "id"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($this->getContext($context, "project"), "category1") == $this->getAttribute($this->getContext($context, "category"), "id"))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "category"), "name"), "html", null, true);
            echo "</option>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 18
        echo "\t\t\t</select>

\t\t\t<select name=\"form[category2]\">
\t\t\t\t";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "categories"));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 22
            echo "\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "category"), "id"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($this->getContext($context, "project"), "category1") == $this->getAttribute($this->getContext($context, "category"), "id"))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "category"), "name"), "html", null, true);
            echo "</option>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 24
        echo "\t\t\t</select>

\t\t    <div><!-- Miniature -->
\t\t    \t<label for=\"form-miniature\" class=\"required\">Miniature</label>
\t\t    \t<input type=\"file\" id=\"form-miniature\" name=\"form-miniature\" required=\"required\" value=\"";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "thumb"));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "src"), "html", null, true);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo "\">
\t\t    </div>

\t\t    <div><!-- Cover -->
\t\t    \t<label for=\"form-cover\" class=\"required\">Couverture</label>
\t\t    \t<input type=\"file\" id=\"form-cover\" name=\"form-cover\" required=\"required\" value=\"";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "cover"));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "src"), "html", null, true);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo "\">
\t\t    </div>

\t\t    <input type=\"submit\" />
\t\t</form>

\t</div>
";
    }

    // line 42
    public function block_javascriptcunstom($context, array $blocks = array())
    {
        // line 43
        echo "\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/tiny_mce/tiny_mce.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\">
\t\ttinyMCE.init({
\t\t        mode : \"textareas\"
\t\t});
\t\t</script>
";
    }

    public function getTemplateName()
    {
        return "PmPortfolioBundle:Admin:adminprojectsedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 43,  146 => 42,  127 => 33,  112 => 28,  106 => 24,  91 => 22,  87 => 21,  82 => 18,  67 => 16,  63 => 15,  57 => 12,  51 => 11,  46 => 8,  43 => 7,  37 => 5,  31 => 3,);
    }
}
