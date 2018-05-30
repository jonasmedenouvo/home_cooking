<?php

/* header.html.twig */
class __TwigTemplate_df0cb2cc006b268ec79208406c8078159370f289d9a0117292d13965fee7f2d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>


    ";
        // line 9
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/app.css"), "html", null, true);
        echo "\">
    ";
        // line 11
        echo "    <link href=\"https://fonts.googleapis.com/css?family=Kavivanar\" rel=\"stylesheet\">
</head>
<body>
<header>
    <nav id=\"Nav\" class=\"navbar navbar-expand-lg navbar-light bg-light\">


        <ul class=\"navbar-nav mr-auto\">
            <li>
                <img class=\"toque\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/HomeCookingLogo.png"), "html", null, true);
        echo "\" alt=\"\">
            </li>


            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">
                    Accueil
                </a>
            </li>

            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showRecette");
        echo "\">Recettes</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listRecette");
        echo "\">Liste</a>
            </li>

            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Contact</a>
            </li>

            ";
        // line 44
        echo "

        </ul>
    ";
        // line 51
        echo "

    </nav>
</header>

<style>
    .toque {
        width: 12%;
    }

    ul {
    }
</style>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Home Cooking";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 5,  92 => 51,  87 => 44,  77 => 34,  71 => 31,  62 => 25,  54 => 20,  43 => 11,  38 => 9,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>{% block title %}Home Cooking{% endblock %}</title>


    {#CSS Personnel#}
    <link rel=\"stylesheet\" href=\"{{ asset('build/app.css') }}\">
    {#Kavivanar font#}
    <link href=\"https://fonts.googleapis.com/css?family=Kavivanar\" rel=\"stylesheet\">
</head>
<body>
<header>
    <nav id=\"Nav\" class=\"navbar navbar-expand-lg navbar-light bg-light\">


        <ul class=\"navbar-nav mr-auto\">
            <li>
                <img class=\"toque\" src=\"{{ asset('build/HomeCookingLogo.png') }}\" alt=\"\">
            </li>


            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('homepage') }}\">
                    Accueil
                </a>
            </li>

            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('showRecette') }}\">Recettes</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('listRecette') }}\">Liste</a>
            </li>

            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Contact</a>
            </li>

            {#<li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Partenaires</a>
            </li>#}


        </ul>
    {#    <form class=\"form-inline my-2 my-lg-0\">
            <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Recherche\" aria-label=\"Search\">
            <button class=\"btn btn-outline-danger my-2 my-sm-0\" type=\"submit\">Rechercher</button>
        </form>#}


    </nav>
</header>

<style>
    .toque {
        width: 12%;
    }

    ul {
    }
</style>", "header.html.twig", "/opt/lampp/htdocs/www/home_cooking/app/Resources/views/header.html.twig");
    }
}
