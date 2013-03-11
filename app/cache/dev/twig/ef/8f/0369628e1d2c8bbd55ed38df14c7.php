<?php

/* PmPortfolioBundle:Ajaxpages:mentions.html.twig */
class __TwigTemplate_ef8f0369628e1d2c8bbd55ed38df14c7 extends Twig_Template
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
        echo "<div id=\"mentions\">
\t<h1>Prestataire d'hébergement</h1>
\t<p>OVH SAS au capital de 10 000 000 € RCS Roubaix – Tourcoing 424 761 419 00045 
\tCode APE 6202A - N° TVA : FR 22 424 761 419
\tSiège social : 2 rue Kellermann 59100 Roubaix - France.<p>

\t<p>L'ensemble de ce site relève des législations française et internationale sur le droit d'auteur et la propriété intellectuelle. 
\tTous les droits de reproduction sont réservés, y compris pour les documents iconographiques et photographiques.</p>
</div>
<script>
    \$('#inner-wrap').removeClass();
    \$('#inner-wrap').addClass('portfolio');
</script>";
    }

    public function getTemplateName()
    {
        return "PmPortfolioBundle:Ajaxpages:mentions.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
