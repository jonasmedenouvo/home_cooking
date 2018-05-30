<?php

/* showRecettes.html.twig */
class __TwigTemplate_e168cfe4a8fa827596a4e49ceece400aec990993d1d9795be17ebb047b8a28a7 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "showRecettes.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "showRecettes.html.twig"));

        // line 1
        $this->loadTemplate("base.html.twig", "showRecettes.html.twig", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recipe"] ?? $this->getContext($context, "recipe")));
        foreach ($context['_seq'] as $context["_key"] => $context["elt"]) {
            // line 4
            echo "
    <div class=\"row\" style=\"margin-top: 5%;\">
        <div class=\"\"></div>
        <h3 class=\"col-2 backColor\">";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["elt"], "name", array()), "html", null, true);
            echo "</h3>
        <div class=\"col-auto\"></div>

    </div>
    <div class=\"row\" style=\"margin-top: 5%;\">
        <div class=\"col-5\"></div>
        <img src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute(($context["recipe"] ?? $this->getContext($context, "recipe")), "image", array()))), "html", null, true);
            echo "\" alt=\"\" class=\"img-thumbnail col-1\" style=\"width: 200px; height: 200px;\">
        <div class=\"col-4\"></div>

    </div>

    <div class=\"row\" style=\"margin-top: 5%;\">
        <div class=\"col-2\">
            <div class=\"row align-items-start backColor\" style=\"border: solid;\">
                <aside class=\"col-12\" style=\"border: solid;\">
                    <b>Ingredients:</b>
                </aside>
                <div class=\"col\">
                    <aside class=\"col-12\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["elt"], "ingredients", array()), "html", null, true);
            echo "</aside>
                </div>
            </div>
        </div>
        <section class=\"col-7 offset-1 backColor\" style=\"border: solid;\">
            <div class=\"row align-items-start\" style=\"border: solid;\">
                <b>Préparation:</b>
            </div>
            ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["elt"], "fullrecipe", array()), "html", null, true);
            echo "
        </section>
        <div class=\"col-auto\"></div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
<style>
    body{


        background:url(\"http://agapeeats.com/wp-content/uploads/2017/11/kitchen-tools.jpg\") fixed no-repeat;

        background-size: cover;
    }
    .backColor{
        background-color: beige;
    }

</style>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "showRecettes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 38,  74 => 33,  63 => 25,  48 => 13,  39 => 7,  34 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include 'base.html.twig' %}

{% for elt in recipe %}

    <div class=\"row\" style=\"margin-top: 5%;\">
        <div class=\"\"></div>
        <h3 class=\"col-2 backColor\">{{ elt.name }}</h3>
        <div class=\"col-auto\"></div>

    </div>
    <div class=\"row\" style=\"margin-top: 5%;\">
        <div class=\"col-5\"></div>
        <img src=\"{{ asset('uploads/images/'~recipe.image) }}\" alt=\"\" class=\"img-thumbnail col-1\" style=\"width: 200px; height: 200px;\">
        <div class=\"col-4\"></div>

    </div>

    <div class=\"row\" style=\"margin-top: 5%;\">
        <div class=\"col-2\">
            <div class=\"row align-items-start backColor\" style=\"border: solid;\">
                <aside class=\"col-12\" style=\"border: solid;\">
                    <b>Ingredients:</b>
                </aside>
                <div class=\"col\">
                    <aside class=\"col-12\">{{ elt.ingredients }}</aside>
                </div>
            </div>
        </div>
        <section class=\"col-7 offset-1 backColor\" style=\"border: solid;\">
            <div class=\"row align-items-start\" style=\"border: solid;\">
                <b>Préparation:</b>
            </div>
            {{ elt.fullrecipe }}
        </section>
        <div class=\"col-auto\"></div>
    </div>
{% endfor %}

<style>
    body{


        background:url(\"http://agapeeats.com/wp-content/uploads/2017/11/kitchen-tools.jpg\") fixed no-repeat;

        background-size: cover;
    }
    .backColor{
        background-color: beige;
    }

</style>", "showRecettes.html.twig", "/opt/lampp/htdocs/www/home_cooking/app/Resources/views/showRecettes.html.twig");
    }
}
