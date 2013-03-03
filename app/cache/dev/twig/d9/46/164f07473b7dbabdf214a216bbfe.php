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

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<div id=\"a-propos\">
\t<h1>A propos de moi</h1>

\t<p>
\t\tJe suis Pierre Mary, et je vis entre <b>Paris</b> et <b>Troyes</b><br>
\t\tPassionné par le monde du design et du developpement web et mobile j\"effectue actuellement une licence <b>CDNL</b> (Création et Développement de Contenus Numériques en Ligne) à <b>Gobelins</b>.
\t</p>

\t<p>N'hésitre pas à me suivre:</p>
\t<ul>
\t\t<li><a href=\"http://twitter.com/DigitalArtStone\"><img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(""), "html", null, true);
        echo "bundles/portfolio/images/\"></a></li>
\t\t<li><a href=\"http://lnkd.in/dzVJ_i\"><img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(""), "html", null, true);
        echo "bundles/portfolio/images/\"></a></li>
\t</ul>

\t<p><a href=\"\"><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(""), "html", null, true);
        echo "bundles/portfolio/\">Ou à me contacter</a></p>

\t<p><a id=\"cv-link\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(""), "html", null, true);
        echo "bundles/portfolio/\">Télécharger mon CV</a></p>
</div>
";
    }

    // line 26
    public function block_javascriptcunstom($context, array $blocks = array())
    {
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
        return array (  80 => 26,  73 => 23,  68 => 21,  62 => 18,  58 => 17,  46 => 7,  43 => 6,  37 => 4,  31 => 2,);
    }
}
