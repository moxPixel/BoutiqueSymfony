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

/* home/homeStore.html.twig */
class __TwigTemplate_462cd1eff71cab72ffbc0974bd2d2ec95f6648c1bce293eb4cadab0192d7a41b extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "home/homeStore.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Home store";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
        // line 7
        echo "

";
        // line 9
        $this->loadTemplate("components/carousel.html.twig", "home/homeStore.html.twig", 9)->display($context);
        // line 10
        echo "<!-- /.container -->
<div class=\"container marketing\">

    <!-- Three columns of text below the carousel -->
    <div class=\"row\">
        <div class=\"col-lg-4\">
            <svg class=\"bd-placeholder-img rounded-circle\" width=\"140\" height=\"140\" xmlns=\"http://www.w3.org/2000/svg\"
                preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\" role=\"img\" aria-label=\"Placeholder: 140x140\">
                <title>Placeholder</title>
                <rect width=\"100%\" height=\"100%\" fill=\"#777\" /><text x=\"50%\" y=\"50%\" fill=\"#777\"
                    dy=\".3em\">140x140</text>
            </svg>
            <h2>Heading</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies
                vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo
                cursus magna.</p>
            <p><a class=\"btn btn-secondary\" href=\"#\" role=\"button\">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class=\"col-lg-4\">
            <svg class=\"bd-placeholder-img rounded-circle\" width=\"140\" height=\"140\" xmlns=\"http://www.w3.org/2000/svg\"
                preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\" role=\"img\" aria-label=\"Placeholder: 140x140\">
                <title>Placeholder</title>
                <rect width=\"100%\" height=\"100%\" fill=\"#777\" /><text x=\"50%\" y=\"50%\" fill=\"#777\"
                    dy=\".3em\">140x140</text>
            </svg>
            <h2>Heading</h2>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras
                mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris
                condimentum nibh.</p>
            <p><a class=\"btn btn-secondary\" href=\"#\" role=\"button\">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class=\"col-lg-4\">
            <svg class=\"bd-placeholder-img rounded-circle\" width=\"140\" height=\"140\" xmlns=\"http://www.w3.org/2000/svg\"
                preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\" role=\"img\" aria-label=\"Placeholder: 140x140\">
                <title>Placeholder</title>
                <rect width=\"100%\" height=\"100%\" fill=\"#777\" /><text x=\"50%\" y=\"50%\" fill=\"#777\"
                    dy=\".3em\">140x140</text>
            </svg>
            <h2>Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula
                porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut
                fermentum massa justo sit amet risus.</p>
            <p><a class=\"btn btn-secondary\" href=\"#\" role=\"button\">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class=\"featurette-divider\">

    <div class=\"row featurette\">
        <div class=\"col-md-7\">
            <h2 class=\"featurette-heading\">First featurette heading. <span class=\"text-muted\">It’ll blow your
                    mind.</span></h2>
            <p class=\"lead\">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod
                semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
                commodo.</p>
        </div>
        <div class=\"col-md-5\">
            <svg class=\"bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto\" width=\"500\"
                height=\"500\" xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"
                role=\"img\" aria-label=\"Placeholder: 500x500\">
                <title>Placeholder</title>
                <rect width=\"100%\" height=\"100%\" fill=\"#eee\" /><text x=\"50%\" y=\"50%\" fill=\"#aaa\"
                    dy=\".3em\">500x500</text>
            </svg>
        </div>
    </div>

    <hr class=\"featurette-divider\">

    <div class=\"row featurette\">
        <div class=\"col-md-7 order-md-2\">
            <h2 class=\"featurette-heading\">Oh yeah, it’s that good. <span class=\"text-muted\">See for yourself.</span>
            </h2>
            <p class=\"lead\">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod
                semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
                commodo.</p>
        </div>
        <div class=\"col-md-5 order-md-1\">
            <svg class=\"bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto\" width=\"500\"
                height=\"500\" xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"
                role=\"img\" aria-label=\"Placeholder: 500x500\">
                <title>Placeholder</title>
                <rect width=\"100%\" height=\"100%\" fill=\"#eee\" /><text x=\"50%\" y=\"50%\" fill=\"#aaa\"
                    dy=\".3em\">500x500</text>
            </svg>
        </div>
    </div>

    <hr class=\"featurette-divider\">

    <div class=\"row featurette\">
        <div class=\"col-md-7\">
            <h2 class=\"featurette-heading\">And lastly, this one. <span class=\"text-muted\">Checkmate.</span></h2>
            <p class=\"lead\">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod
                semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
                commodo.</p>
        </div>
        <div class=\"col-md-5\">
            <svg class=\"bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto\" width=\"500\"
                height=\"500\" xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"
                role=\"img\" aria-label=\"Placeholder: 500x500\">
                <title>Placeholder</title>
                <rect width=\"100%\" height=\"100%\" fill=\"#eee\" /><text x=\"50%\" y=\"50%\" fill=\"#aaa\"
                    dy=\".3em\">500x500</text>
            </svg>
        </div>
    </div>

    <hr class=\"featurette-divider\">

    <!-- /END THE FEATURETTES -->

</div>
<!-- /.container -->

";
    }

    public function getTemplateName()
    {
        return "home/homeStore.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 10,  63 => 9,  59 => 7,  54 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/homeStore.html.twig", "C:\\wamp64\\www\\projetBoutique\\templates\\home\\homeStore.html.twig");
    }
}
