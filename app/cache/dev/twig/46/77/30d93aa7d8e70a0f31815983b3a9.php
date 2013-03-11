<?php

/* PmPortfolioBundle:Ajaxpages:apropos.html.twig */
class __TwigTemplate_467730d93aa7d8e70a0f31815983b3a9 extends Twig_Template
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
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(""), "html", null, true);
        echo "bundles/portfolio/images/\"></a></li>
\t\t<li><a href=\"http://lnkd.in/dzVJ_i\"><img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(""), "html", null, true);
        echo "bundles/portfolio/images/\"></a></li>
\t</ul>

\t<p><a href=\"\"><img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(""), "html", null, true);
        echo "bundles/portfolio/\">Ou à me contacter</a></p>

\t<p><a id=\"cv-link\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(""), "html", null, true);
        echo "bundles/portfolio/\">Télécharger mon CV</a></p>
</div>

<script>
\t\$('#inner-wrap').removeClass();
\t\$('#inner-wrap').addClass('portfolio');
</script>";
    }

    public function getTemplateName()
    {
        return "PmPortfolioBundle:Ajaxpages:apropos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 21,  45 => 19,  39 => 16,  35 => 15,  19 => 1,);
    }
}
