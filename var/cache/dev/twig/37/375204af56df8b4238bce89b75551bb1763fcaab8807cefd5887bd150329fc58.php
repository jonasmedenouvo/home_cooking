<?php

/* liste.html.twig */
class __TwigTemplate_01da699e66555cf7fe0d8b65340c81dcad0c4d275a2323b4da1f63e89c330486 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "liste.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "liste.html.twig"));

        // line 1
        $this->loadTemplate("base.html.twig", "liste.html.twig", 1)->display($context);
        // line 2
        echo "
<table id=\"maListe\" class=\"table table-striped table-bordered\" style=\"width:100%\">
    <thead>
    <tr>

        <th>Nom de la recette</th>
        <th>Type de plat</th>
        <th>Description</th>
        <th>Vignette</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recette"] ?? $this->getContext($context, "recette")));
        foreach ($context['_seq'] as $context["_key"] => $context["elt"]) {
            // line 15
            echo "
        <tr class=\"text-center\">
            <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["elt"], "name", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["elt"], "type", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["elt"], "description", array()), "html", null, true);
            echo "</td>
            <td><img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["elt"], "image", array()), "html", null, true);
            echo "\" alt=\"\" style=\"width: 100px; height: 100px;\"></td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
    </tbody>
    <tfoot>
    <tr>
        <th>Nom de la recette</th>
        <th>Type de plat</th>
        <th>Description</th>
        <th>Vignette</th>
    </tr>
    </tfoot>
</table>

<style>
    body{


        background:url(\"http://szzljy.com/images/farm/farm2.jpg\") fixed no-repeat;

        background-size: cover;
    }
    #maListe{


        background-color: antiquewhite;
    }

</style>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 23,  61 => 20,  57 => 19,  53 => 18,  49 => 17,  45 => 15,  41 => 14,  27 => 2,  25 => 1,);
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

<table id=\"maListe\" class=\"table table-striped table-bordered\" style=\"width:100%\">
    <thead>
    <tr>

        <th>Nom de la recette</th>
        <th>Type de plat</th>
        <th>Description</th>
        <th>Vignette</th>
    </tr>
    </thead>
    <tbody>
    {% for elt in recette %}

        <tr class=\"text-center\">
            <td>{{ elt.name }}</td>
            <td>{{ elt.type }}</td>
            <td>{{ elt.description }}</td>
            <td><img src=\"{{ elt.image }}\" alt=\"\" style=\"width: 100px; height: 100px;\"></td>
        </tr>
    {% endfor %}

    </tbody>
    <tfoot>
    <tr>
        <th>Nom de la recette</th>
        <th>Type de plat</th>
        <th>Description</th>
        <th>Vignette</th>
    </tr>
    </tfoot>
</table>

<style>
    body{


        background:url(\"http://szzljy.com/images/farm/farm2.jpg\") fixed no-repeat;

        background-size: cover;
    }
    #maListe{


        background-color: antiquewhite;
    }

</style>", "liste.html.twig", "/opt/lampp/htdocs/www/home_cooking/app/Resources/views/liste.html.twig");
    }
}
