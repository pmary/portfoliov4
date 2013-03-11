<?php

/* PmPortfolioBundle:Portfolio:apropos.html.twig */
class __TwigTemplate_d946164f07473b7dbabdf214a216bbfe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'innerwrap' => array($this, 'block_innerwrap'),
            'content' => array($this, 'block_content'),
            'javascriptcunstom' => array($this, 'block_javascriptcunstom'),
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "A propos";
    }

    // line 4
    public function block_innerwrap($context, array $blocks = array())
    {
        echo "<div id=\"inner-wrap\" class=\"portfolio\">";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div id=\"a-propos\">
\t<div id=\"sidebar\">
\t\t
\t</div>

\t<h1>A propos de moi</h1>

\t<p>
\t\tJe suis Pierre Mary, et je vis entre <b>Paris</b> et <b>Troyes</b><br>
\t\tPassionné par le monde du design et du developpement web et mobile j\"effectue actuellement une licence <b>CDNL</b> (Création et Développement de Contenus Numériques en Ligne) à <b>Gobelins</b>.
\t</p>

\t<p>N'hésitre pas à me suivre:</p>
\t<ul>
\t\t<li><a href=\"http://twitter.com/DigitalArtStone\"><img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(""), "html", null, true);
        echo "bundles/portfolio/images/\"></a></li>
\t\t<li><a href=\"http://lnkd.in/dzVJ_i\"><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(""), "html", null, true);
        echo "bundles/portfolio/images/\"></a></li>
\t</ul>

\t<p><a href=\"\"><img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(""), "html", null, true);
        echo "bundles/portfolio/\">Ou à me contacter</a></p>

\t<p><a id=\"cv-link\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(""), "html", null, true);
        echo "bundles/portfolio/\">Télécharger mon CV</a></p>
</div>
";
    }

    // line 29
    public function block_javascriptcunstom($context, array $blocks = array())
    {
        // line 30
        echo "<script type=\"{ asset('')}}bundles/portfolio/js/hinclude.js\"></script>
<script>
\t
</script>
";
    }

    public function getTemplateName()
    {
        return "PmPortfolioBundle:Portfolio:apropos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 30,  84 => 29,  77 => 26,  72 => 24,  66 => 21,  62 => 20,  46 => 6,  43 => 5,  37 => 4,  31 => 2,);
    }
}
