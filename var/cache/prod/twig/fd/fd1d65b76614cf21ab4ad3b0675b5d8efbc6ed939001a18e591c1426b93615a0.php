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

/* product/products_view.html.twig */
class __TwigTemplate_3c36ff96d40011e8733e2680839945d5b6ce789af6b954d7114ad6e0256141e7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "product/products_view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Hello ProductController!";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<main role=\"main\">

<section class=\"jumbotron text-center\">
  <div class=\"container\">
    <h1 class=\"jumbotron-heading\">Album example</h1>
    <p class=\"lead text-muted\">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
    <p>
      <a href=\"#\" class=\"btn btn-primary my-2\">Main call to action</a>
      <a href=\"#\" class=\"btn btn-secondary my-2\">Secondary action</a>
    </p>
  </div>
</section>

<div class=\"album py-5 bg-light\">
  <div class=\"container\">

    <div class=\"row\">
        
      <div class=\"col-md-4\">
        <div class=\"card mb-4 box-shadow\">
          <img class=\"card-img-top\" data-src=\"holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail\" alt=\"Card image cap\">
          <div class=\"card-body\">
            <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <div class=\"d-flex justify-content-between align-items-center\">
              <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
              </div>
              <small class=\"text-muted\">9 mins</small>
            </div>
          </div>
        </div>
      </div>
    
    </div>
  </div>
</div>

</main>
";
    }

    public function getTemplateName()
    {
        return "product/products_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "product/products_view.html.twig", "C:\\wamp64\\www\\projetBoutique\\templates\\product\\products_view.html.twig");
    }
}
