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

/* @EasyAdmin/crud/includes/_batch_action_modal.html.twig */
class __TwigTemplate_d8c8e04dc160cefadf39f505516dc16f56c2c1a92a8d140edbe5a1d7eb19cbb6 extends Template
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
        echo "<div id=\"modal-batch-action\" class=\"modal fade\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-body\">
                <h4 id=\"batch-action-confirmation-title\">";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("batch_action_modal.title", array(), "EasyAdminBundle"), "html", null, true);
        echo "</h4>
                <p>";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("batch_action_modal.content", array(), "EasyAdminBundle"), "html", null, true);
        echo "</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" data-bs-dismiss=\"modal\" class=\"btn btn-secondary\">
                    <span class=\"btn-label\">";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.cancel", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                </button>
                <button type=\"button\" data-bs-dismiss=\"modal\" class=\"btn btn-danger\" id=\"modal-batch-action-button\">
                    <i class=\"fa fa-fw fa-check\"></i>
                    <span class=\"btn-label\">";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("batch_action_modal.action", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                </button>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/includes/_batch_action_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  54 => 10,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/includes/_batch_action_modal.html.twig", "C:\\wamp64\\www\\projetBoutique\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\crud\\includes\\_batch_action_modal.html.twig");
    }
}
