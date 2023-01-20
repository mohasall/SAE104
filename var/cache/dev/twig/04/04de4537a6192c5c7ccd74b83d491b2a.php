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

/* sall/HOBBIES.html.twig */
class __TwigTemplate_7e7cf90840553e2328efe42ee3942429 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sall/HOBBIES.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sall/HOBBIES.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "sall/HOBBIES.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
<html>\t\t\t\t\t\t\t\t

\t<head>\t\t\t\t\t\t
\t\t<meta name=\"auteur\" content=\"Mon identité\" >
\t\t<title>My HOBBIES</title>
\t</head>\t\t\t\t\t\t\t

\t<body>\t\t

 
\t<br></br>
\t<div class=\"card text-white bg-secondary mb-3\" style=\"max-width: 50rem; margin: auto;\">
  <div class=\"card-header\">Excursion </div>
  <div class=\"card-body\">
  <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/ism.jpg"), "html", null, true);
        echo "\" class=\"image\">
  
    
    <p class=\"card-text\"> 
    </p>
  </div></div>

  <div class=\"card text-white bg-secondary mb-3\" style=\"max-width: 50rem;margin:auto;\">
  <div class=\"card-header\">Sport</div>
  <div class=\"card-body\">
  <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/finale.jpg"), "html", null, true);
        echo "\" class=\"image\">
   
    <p class=\"card-text\"> </p>
  </div></div></p>
  </div></div>

  <div class=\"card text-white bg-secondary mb-3\" style=\"max-width: 50rem;margin:auto;\">
  <div class=\"card-header\">Vacance</div>
  <div class=\"card-body\">
  <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/saly.jpg"), "html", null, true);
        echo "\" class=\"image\">
  
    <p class=\"card-text\">
     </p>
  </div></div>
  </p>
  </div></div>
  <div class=\"card text-white bg-secondary mb-3\" style=\"max-width: 50rem;margin:auto;\">
  <div class=\"card-header\">Paris</div>
  <div class=\"card-body\">
    <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/toureff.jpg"), "html", null, true);
        echo "\" class=\"image\">
    <p class=\"card-text\"> </p>
  </div></div></p>
  </div></div>
\t
  <div class=\"card text-white bg-secondary mb-3\" style=\"max-width: 50rem;margin:auto;\">
  <div class=\"card-header\">Esprit d'équipe</div>
  <div class=\"card-body\">
    <img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/R&S.jpg"), "html", null, true);
        echo "\" class=\"image\">
    <p class=\"card-text\"> </p>
  </div></div></p>
  </div></div>






\t
  \t\t\t
\t</body>\t
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "sall/HOBBIES.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 59,  142 => 51,  129 => 41,  117 => 32,  104 => 22,  87 => 7,  77 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% endblock %}


{% block body %}

<html>\t\t\t\t\t\t\t\t

\t<head>\t\t\t\t\t\t
\t\t<meta name=\"auteur\" content=\"Mon identité\" >
\t\t<title>My HOBBIES</title>
\t</head>\t\t\t\t\t\t\t

\t<body>\t\t

 
\t<br></br>
\t<div class=\"card text-white bg-secondary mb-3\" style=\"max-width: 50rem; margin: auto;\">
  <div class=\"card-header\">Excursion </div>
  <div class=\"card-body\">
  <img src=\"{{asset('images/ism.jpg')}}\" class=\"image\">
  
    
    <p class=\"card-text\"> 
    </p>
  </div></div>

  <div class=\"card text-white bg-secondary mb-3\" style=\"max-width: 50rem;margin:auto;\">
  <div class=\"card-header\">Sport</div>
  <div class=\"card-body\">
  <img src=\"{{asset('images/finale.jpg')}}\" class=\"image\">
   
    <p class=\"card-text\"> </p>
  </div></div></p>
  </div></div>

  <div class=\"card text-white bg-secondary mb-3\" style=\"max-width: 50rem;margin:auto;\">
  <div class=\"card-header\">Vacance</div>
  <div class=\"card-body\">
  <img src=\"{{asset('images/saly.jpg')}}\" class=\"image\">
  
    <p class=\"card-text\">
     </p>
  </div></div>
  </p>
  </div></div>
  <div class=\"card text-white bg-secondary mb-3\" style=\"max-width: 50rem;margin:auto;\">
  <div class=\"card-header\">Paris</div>
  <div class=\"card-body\">
    <img src=\"{{asset('images/toureff.jpg')}}\" class=\"image\">
    <p class=\"card-text\"> </p>
  </div></div></p>
  </div></div>
\t
  <div class=\"card text-white bg-secondary mb-3\" style=\"max-width: 50rem;margin:auto;\">
  <div class=\"card-header\">Esprit d'équipe</div>
  <div class=\"card-body\">
    <img src=\"{{asset('images/R&S.jpg')}}\" class=\"image\">
    <p class=\"card-text\"> </p>
  </div></div></p>
  </div></div>






\t
  \t\t\t
\t</body>\t
{% endblock %}


", "sall/HOBBIES.html.twig", "C:\\Users\\Mohamed sall\\Documents\\SAE1.04\\Projets\\Projets\\templates\\sall\\HOBBIES.html.twig");
    }
}
