<?php

/* recettes.html.twig */
class __TwigTemplate_fa118d8374cd7124183eb744156c59b367ab9373aa23ba0752d4152e052d2dd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "recettes.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recettes.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "recettes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["recipe"]);
        foreach ($context['_seq'] as $context["_key"] => $context["recipe"]) {
            // line 6
            echo "
";
            // line 23
            echo "        <div class=\"card w-25 \">
            <img class=\"card-img-top\" src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "image", array()), "html", null, true);
            echo "\" alt=\"Card image cap\"style=\"width: 18rem; height: 5%;\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">Card title</h5>
                <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
            </div>
        </div>
";
            // line 34
            echo "
    <h1>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "name", array()), "html", null, true);
            echo "</h1>
    <h2>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "description", array()), "html", null, true);
            echo "</h2>
    <p>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "ingredients", array()), "html", null, true);
            echo "</p>
    <p>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "fullrecipe", array()), "html", null, true);
            echo "</p>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "recettes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 41,  87 => 38,  83 => 37,  79 => 36,  75 => 35,  72 => 34,  62 => 24,  59 => 23,  56 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

{% for recipe in recipe %}

{#
    <div class=\"card\" style=\"width: 18rem;\">
#}
{#
    <img class=\"card-img-top w-25\" src=\"{{ asset('uploads/images/'~recipe.image) }}\" alt=\"Card image cap\">
#}{#
    <img class=\"card-img-top w-25\" src=\"{{ recipe.image }}\" alt=\"Card image cap\">
    <div class=\"card-body\">
        <h5 class=\"card-title\">{{ recipe.name }}</h5>
        <p class=\"card-text\">{{ recipe.description }}</p>
        <a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
    </div>
        <div class=\"card-footer\">
            <small class=\"text-muted\">Last updated 3 mins ago</small>
        </div>
</div>#}
        <div class=\"card w-25 \">
            <img class=\"card-img-top\" src=\"{{ recipe.image }}\" alt=\"Card image cap\"style=\"width: 18rem; height: 5%;\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">Card title</h5>
                <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
            </div>
        </div>
{#
</div>
#}

    <h1>{{ recipe.name }}</h1>
    <h2>{{ recipe.description }}</h2>
    <p>{{ recipe.ingredients }}</p>
    <p>{{ recipe.fullrecipe }}</p>

{% endfor %}

{% endblock %}", "recettes.html.twig", "/opt/lampp/htdocs/www/home_cooking/app/Resources/views/recettes.html.twig");
    }
}
