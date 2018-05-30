<?php

/* ::liste.html.twig */
class __TwigTemplate_5a52f3bcbbc8028c3e5e4f2d650bbc89939141f0317926c24462b534b0b0bd27 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::liste.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::liste.html.twig"));

        // line 1
        $this->loadTemplate("base.html.twig", "::liste.html.twig", 1)->display($context);
        // line 2
        echo "
<table id=\"myTable\" class=\"table table-striped table-bordered\">
    <thead>
    <tr>
        <th>Nom</th>
        <th>Type</th>
        <th>Difficulté</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recette"] ?? $this->getContext($context, "recette")));
        foreach ($context['_seq'] as $context["_key"] => $context["elt"]) {
            // line 13
            echo "
        <tr>
            <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["elt"], "name", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["elt"], "type", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["elt"], "difficulty", array()), "html", null, true);
            echo "</td>
            <td><img src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/images/9b0984ea12032d55c4909694e889fee2.jpeg"), "html", null, true);
            echo "\"
                     alt=\"\" class=\"img-thumbnail\"  width=\"304\" height=\"236\"></td>
            <td><button><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeRecette", array("id" => $this->getAttribute($context["elt"], "id", array()))), "html", null, true);
            echo "\" type=\"reset\">Effacer</a></button></td>
";
            // line 24
            echo "        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
    </tbody>
</table>
<button><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addRecette");
        echo "\">Ajouter</a> </button>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "::liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 29,  75 => 26,  68 => 24,  64 => 20,  59 => 18,  55 => 17,  51 => 16,  47 => 15,  43 => 13,  39 => 12,  27 => 2,  25 => 1,);
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
        <th>Nom</th>
        <th>Type</th>
        <th>Difficulté</th>
    </tr>
    </thead>
    <tbody>
    {% for elt in recette %}

        <tr>
            <td>{{ elt.name }}</td>
            <td>{{ elt.type }}</td>
            <td>{{ elt.difficulty }}</td>
            <td><img src=\"{{ asset('uploads/images/9b0984ea12032d55c4909694e889fee2.jpeg') }}\"
                     alt=\"\" class=\"img-thumbnail\"  width=\"304\" height=\"236\"></td>
            <td><button><a href=\"{{ path('removeRecette',{'id':elt.id}) }}\" type=\"reset\">Effacer</a></button></td>
{#
            <a href=\"\"><button type=\"reset\" value=\"Update\">Modifier</button></a></td>
#}
        </tr>
    {% endfor %}

    </tbody>
</table>
<button><a href=\"{{ path('addRecette') }}\">Ajouter</a> </button>", "::liste.html.twig", "/opt/lampp/htdocs/www/home_cooking/app/Resources/views/liste.html.twig");
    }
}
