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

/* sall/CV.html.twig */
class __TwigTemplate_cbb882e5e9187042f2f6975009a1c3fc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sall/CV.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sall/CV.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "sall/CV.html.twig", 1);
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
<!DOCTYPE html>\t\t\t\t\t

<html>\t\t\t\t\t\t\t\t

\t<head>\t\t\t\t\t\t
\t\t<meta name=\"auteur\" content=\"Mon identité\" >
\t\t <link rel=\"stylesheet\" href=\"style.css\">
\t\t 
\t\t<title>The Curriculum Vitae</title>
\t</head>
\t\t\t\t\t\t

<body> 

  <p class=\"centrertitre\">Network  Systems Administrator</p>

  <div class=\"card text-white bg-secondary mb-3\" style=\"max-width: 50rem; margin: auto;\">
  <div class=\"card-header\">FORMATION</div>
  <div class=\"card-body\">
    
    <p class=\"card-text\"> 
    <div>
    <ul class=\"met\">
      <li> BUT en Réseaux & Télécoms </li>
      <li>BAC S2 au Lycée D'Excellence Cheikh Hamidou Kane </li>
      </ul>
  </div></p>
  </div></div>

  <div class=\"card text-white bg-secondary mb-3\" style=\"max-width: 50rem;margin:auto;\">
  <div class=\"card-header\">Expérience Professionnelle</div>
  <div class=\"card-body\">
   
    <p class=\"card-text\"> <div>
    <ul class=\"met\">
      <li> Initiation aux réseaux informatiques</li>
      <li>Sensibilisation à l'hygiène informatique et à la cybersécurité</li>
      <li>Découverte d'un dispositif de transmission </li>
      <li>Chargé des cours de renforcement au lycée</li>
     
    </ul>
  </div></p>
  </div></div></p>
  </div></div>

  <div class=\"card text-white bg-secondary mb-3\" style=\"max-width: 50rem;margin:auto;\">
  <div class=\"card-header\">Compétences</div>
  <div class=\"card-body\">
  
  
    <p class=\"card-text\">

     <div>
    <ul class=\"met\">
      <li> Compétences sur les réseaux locaux et équipements actifs  </li>
      <li> Fondamentaux sur les systémes électroniques</li>
      <li>Maitrises des technologies WEB (CSS/HTML/Symfony) </li>
      <li>Fondamentaux de la programmation</li>
      <li>Mathématique du signal et des transmissions </li>
      <li>Bonne communication en Anglais et Français </li>
    </ul>
  </div></p>
  </div></div>
  </p>
  </div></div>
  <form action=\"images/CV.pdf\" target=\"_blank\">
\t\t<h2>FORMULAIRE</h2>
\t\t<div>
        <label for=\"nom\">Last Name</label>
        <input type=\"text\" name=\"nom\" id=\"nom\" required>
\t\t</div>
\t\t<div>
\t\t\t<label for=\"prenom\">First Name</label>
\t\t\t<input type=\"text\" name=\"prenom\" id=\"prenom\" required>
\t\t</div>\t
\t\t<div>
\t\t\t<label for=\"email\"> Email </label>
\t\t\t<input type=\"text\" name=\"email\" id=\"email\" placeholder=\"example123@gmail.com\" required>

\t\t</div>
  <input type=\"submit\">
 </form>
</div>

</body>








";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "sall/CV.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 7,  77 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% endblock %}


{% block body %}

<!DOCTYPE html>\t\t\t\t\t

<html>\t\t\t\t\t\t\t\t

\t<head>\t\t\t\t\t\t
\t\t<meta name=\"auteur\" content=\"Mon identité\" >
\t\t <link rel=\"stylesheet\" href=\"style.css\">
\t\t 
\t\t<title>The Curriculum Vitae</title>
\t</head>
\t\t\t\t\t\t

<body> 

  <p class=\"centrertitre\">Network  Systems Administrator</p>

  <div class=\"card text-white bg-secondary mb-3\" style=\"max-width: 50rem; margin: auto;\">
  <div class=\"card-header\">FORMATION</div>
  <div class=\"card-body\">
    
    <p class=\"card-text\"> 
    <div>
    <ul class=\"met\">
      <li> BUT en Réseaux & Télécoms </li>
      <li>BAC S2 au Lycée D'Excellence Cheikh Hamidou Kane </li>
      </ul>
  </div></p>
  </div></div>

  <div class=\"card text-white bg-secondary mb-3\" style=\"max-width: 50rem;margin:auto;\">
  <div class=\"card-header\">Expérience Professionnelle</div>
  <div class=\"card-body\">
   
    <p class=\"card-text\"> <div>
    <ul class=\"met\">
      <li> Initiation aux réseaux informatiques</li>
      <li>Sensibilisation à l'hygiène informatique et à la cybersécurité</li>
      <li>Découverte d'un dispositif de transmission </li>
      <li>Chargé des cours de renforcement au lycée</li>
     
    </ul>
  </div></p>
  </div></div></p>
  </div></div>

  <div class=\"card text-white bg-secondary mb-3\" style=\"max-width: 50rem;margin:auto;\">
  <div class=\"card-header\">Compétences</div>
  <div class=\"card-body\">
  
  
    <p class=\"card-text\">

     <div>
    <ul class=\"met\">
      <li> Compétences sur les réseaux locaux et équipements actifs  </li>
      <li> Fondamentaux sur les systémes électroniques</li>
      <li>Maitrises des technologies WEB (CSS/HTML/Symfony) </li>
      <li>Fondamentaux de la programmation</li>
      <li>Mathématique du signal et des transmissions </li>
      <li>Bonne communication en Anglais et Français </li>
    </ul>
  </div></p>
  </div></div>
  </p>
  </div></div>
  <form action=\"images/CV.pdf\" target=\"_blank\">
\t\t<h2>FORMULAIRE</h2>
\t\t<div>
        <label for=\"nom\">Last Name</label>
        <input type=\"text\" name=\"nom\" id=\"nom\" required>
\t\t</div>
\t\t<div>
\t\t\t<label for=\"prenom\">First Name</label>
\t\t\t<input type=\"text\" name=\"prenom\" id=\"prenom\" required>
\t\t</div>\t
\t\t<div>
\t\t\t<label for=\"email\"> Email </label>
\t\t\t<input type=\"text\" name=\"email\" id=\"email\" placeholder=\"example123@gmail.com\" required>

\t\t</div>
  <input type=\"submit\">
 </form>
</div>

</body>








{% endblock %}
\t



", "sall/CV.html.twig", "C:\\Users\\Mohamed sall\\Documents\\SAE1.04\\Projets\\Projets\\templates\\sall\\CV.html.twig");
    }
}
