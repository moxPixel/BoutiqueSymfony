<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* components/footer.html.twig */
class __TwigTemplate_288245de6bcefd3a346d2cac6e09d6e14801b69608df687669dc5f00b836ff87 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!-- FOOTER -->
<footer class=\"footer-custom\">
    <p class=\"float-right\"><a href=\"#\">Back to top</a></p>
    <p>
    &copy; 2021 Ma boutique, Inc. &middot; <a href=\"#\">Privacy</a> &middot; <a href=\"#\">Ma super boutique</a>
</p>
</footer>";
    }

    public function getTemplateName()
    {
        return "components/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/footer.html.twig", "C:\\wamp64\\www\\projetBoutique\\templates\\components\\footer.html.twig");
    }
}
