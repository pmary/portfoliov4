<?php

/* PmPortfolioBundle:Portfolio:mentions.html.twig */
class __TwigTemplate_0c4e3d6f168b6c147ad9a967c34d685b extends Twig_Template
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
        echo "Mentions légales";
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
        echo "<div id=\"mentions\">
\t<h1>Prestataire d'hébergement</h1>
\t<p>OVH SAS au capital de 10 000 000 € RCS Roubaix – Tourcoing 424 761 419 00045 
\tCode APE 6202A - N° TVA : FR 22 424 761 419
\tSiège social : 2 rue Kellermann 59100 Roubaix - France.<p>

\t<p>L'ensemble de ce site relève des législations française et internationale sur le droit d'auteur et la propriété intellectuelle. 
\tTous les droits de reproduction sont réservés, y compris pour les documents iconographiques et photographiques.</p>
</div>
";
    }

    // line 17
    public function block_javascriptcunstom($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "PmPortfolioBundle:Portfolio:mentions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 17,  46 => 7,  43 => 6,  37 => 4,  31 => 2,);
    }
}
