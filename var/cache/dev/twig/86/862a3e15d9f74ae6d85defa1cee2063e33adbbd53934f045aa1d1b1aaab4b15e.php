<?php

/* admin2.html.twig */
class __TwigTemplate_70e37beb244bef2852bb6d42bf66b9dbab27de4eaf238675ad3b7f05dc048d4a extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin2.html.twig"));

        // line 1
        $this->loadTemplate("base.html.twig", "admin2.html.twig", 1)->display($context);
        // line 2
        echo "
<table id=\"myTable\" class=\"table table-striped table-bordered\">
    <thead>
    <tr>
        <th>id</th>
        <th>Nom de la recette</th>
        <th>Type de plat</th>
        <th>Vignette</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recette"] ?? $this->getContext($context, "recette")));
        foreach ($context['_seq'] as $context["_key"] => $context["elt"]) {
            // line 14
            echo "
        <tr class=\"text-center\">
            <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["elt"], "id", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["elt"], "name", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["elt"], "type", array()), "html", null, true);
            echo "</td>
            <td><img src=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["elt"], "image", array()), "html", null, true);
            echo "\" alt=\"\" style=\"width: 100px; height: 100px;\"></td>
            <td>
                <button type=\"reset\"><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeRecette", array("id" => $this->getAttribute($context["elt"], "id", array()))), "html", null, true);
            echo "\">Effacer</a></button>
            </td>
            <td>
                <button type=\"\"><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("updateRecette", array("id" => $this->getAttribute($context["elt"], "id", array()))), "html", null, true);
            echo "\">Mettre à jour</a></button>
            </td>

        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
    </tbody>
</table>
<button><a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addRecette");
        echo "\">Ajouter</a></button>

<style>
    body{


        background:url(\"https://kerryregoconsulting.com/wp-content/uploads/2012/03/tools.jpg\") fixed no-repeat;

        background-size: cover;
    }
    table{
        background-color: wheat !important;
    }
</style>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 32,  82 => 29,  71 => 24,  65 => 21,  60 => 19,  56 => 18,  52 => 17,  48 => 16,  44 => 14,  40 => 13,  27 => 2,  25 => 1,);
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

<table id=\"myTable\" class=\"table table-striped table-bordered\">
    <thead>
    <tr>
        <th>id</th>
        <th>Nom de la recette</th>
        <th>Type de plat</th>
        <th>Vignette</th>
    </tr>
    </thead>
    <tbody>
    {% for elt in recette %}

        <tr class=\"text-center\">
            <td>{{ elt.id }}</td>
            <td>{{ elt.name }}</td>
            <td>{{ elt.type }}</td>
            <td><img src=\"{{ elt.image }}\" alt=\"\" style=\"width: 100px; height: 100px;\"></td>
            <td>
                <button type=\"reset\"><a href=\"{{ path('removeRecette',{'id':elt.id}) }}\">Effacer</a></button>
            </td>
            <td>
                <button type=\"\"><a href=\"{{ path('updateRecette',{'id':elt.id}) }}\">Mettre à jour</a></button>
            </td>

        </tr>
    {% endfor %}

    </tbody>
</table>
<button><a href=\"{{ path('addRecette') }}\">Ajouter</a></button>

<style>
    body{


        background:url(\"https://kerryregoconsulting.com/wp-content/uploads/2012/03/tools.jpg\") fixed no-repeat;

        background-size: cover;
    }
    table{
        background-color: wheat !important;
    }
</style>", "admin2.html.twig", "/opt/lampp/htdocs/www/home_cooking/app/Resources/views/admin2.html.twig");
    }
}
