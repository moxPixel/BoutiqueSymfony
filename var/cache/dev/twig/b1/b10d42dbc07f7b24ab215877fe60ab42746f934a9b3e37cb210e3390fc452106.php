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
class __TwigTemplate_83352ad045d83de1c48e1d90c5cf16dc2aa73f02fe3582ebc978eabad459ad1c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/products_view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/products_view.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/products_view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello ProductController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 25
            echo "      <div class=\"col-md-4\">
        <div class=\"card mb-4 box-shadow\">
        <h1 class=\"text-center\">  <img class=\"card-img-top\" style=\"width:150px;\" src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/uploads/" . twig_get_attribute($this->env, $this->source, $context["product"], "picture", [], "any", false, false, false, 27))), "html", null, true);
            echo "\" alt=\"Card image cap\"></h1>
          <div class=\"card-body\">
            <p class=\"text-muted\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 29), "html", null, true);
            echo "</p>
            <p class=\"card-text\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "subtitle", [], "any", false, false, false, 30), "html", null, true);
            echo "</p>
            <p class=\"card-text\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 31), "html", null, true);
            echo "</p>
            <div class=\"d-flex justify-content-between align-items-center\">
              <div class=\"\">
                <button type=\"m-2 button\" class=\"btn btn-sm btn-outline-secondary\">Voir</button>
                <button type=\"m-2 button\" class=\"btn btn-sm btn-success\">Ajouter au panier</button>
              </div>
              <small class=\"text-success\">";
            // line 37
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 37) / 100), 2, ",", "."), "html", null, true);
            echo "€</small>
            </div>
          </div>
        </div>
      </div>
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "    </div>
  </div>
</div>

</main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  150 => 43,  138 => 37,  129 => 31,  125 => 30,  121 => 29,  116 => 27,  112 => 25,  108 => 24,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello ProductController!{% endblock %}

{% block body %}

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
        {% for product in products %}
      <div class=\"col-md-4\">
        <div class=\"card mb-4 box-shadow\">
        <h1 class=\"text-center\">  <img class=\"card-img-top\" style=\"width:150px;\" src=\"{{asset('assets/uploads/'~ product.picture)}}\" alt=\"Card image cap\"></h1>
          <div class=\"card-body\">
            <p class=\"text-muted\">{{product.name}}</p>
            <p class=\"card-text\">{{product.subtitle}}</p>
            <p class=\"card-text\">{{product.description}}</p>
            <div class=\"d-flex justify-content-between align-items-center\">
              <div class=\"\">
                <button type=\"m-2 button\" class=\"btn btn-sm btn-outline-secondary\">Voir</button>
                <button type=\"m-2 button\" class=\"btn btn-sm btn-success\">Ajouter au panier</button>
              </div>
              <small class=\"text-success\">{{(product.price / 100) | number_format(2,',','.')}}€</small>
            </div>
          </div>
        </div>
      </div>
       {% endfor %}
    </div>
  </div>
</div>

</main>
{% endblock %}
", "product/products_view.html.twig", "C:\\wamp64\\www\\projetBoutique\\templates\\product\\products_view.html.twig");
    }
}
