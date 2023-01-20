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

/* sall/index.html.twig */
class __TwigTemplate_21824df095dfdaf8d9f98ee7d6cd4c10 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sall/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sall/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "sall/index.html.twig", 1);
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

        echo "Sall E-SPACE";
        
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
        echo "<body>
  <h1 class=\"title\">Welcome to SallMohamed SPACE  </h1>
  <div class=\"maClasse\" id=\"monId\">
      <p> Here Mohamed SALL Student in 1st year of BUT networks and telecommunications at the IUT of Roanne ,
      <br>I am passionate about information technology and communication,
      <br>and I am motivated to learn the latest trends and technologies 
      <br>  in networking and telecommunications
      <br>to contribute to more efficient connectivity.   </p>
  </div>

  <div>
    <ul class=\"met\">
      <li> <i class=\"fa-solid fa-user\"></i> Last name: Sall </li>
      <li>  <i class=\"fa-solid fa-user\"></i> First Name : Mohamed</li>
      <li> <i class=\"fa-solid fa-house-laptop\"></i> Address : Roanne 42300- 76 Rue Jean Jaurès</li>
      <li><i class=\"fa-solid fa-phone\"></i> Phone number: 0787269033</li>
      <li> <i class=\"fa-solid fa-envelope\"></i> E-mail: mohamed.sall@etu.univ-st-etienne.fr</li>
      <li>  <i class=\"fa-brands fa-instagram\"></i> Instagram / <i class=\"fa-brands fa-facebook\"></i> Facebook / <i class=\"fa-brands fa-linkedin\"></i> LinkedIN / <i class=\"fa-brands fa-github\"></i> Github / <i class=\"fa-brands fa-twitter\"></i> Twitter</li>
    </ul>
  </div>
  <img class=\"imgBG\" src=\"images/business.jpg\" alt=\"Busi\"></img>
 
</body>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "sall/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Sall E-SPACE{% endblock %}


{% block body %}
<body>
  <h1 class=\"title\">Welcome to SallMohamed SPACE  </h1>
  <div class=\"maClasse\" id=\"monId\">
      <p> Here Mohamed SALL Student in 1st year of BUT networks and telecommunications at the IUT of Roanne ,
      <br>I am passionate about information technology and communication,
      <br>and I am motivated to learn the latest trends and technologies 
      <br>  in networking and telecommunications
      <br>to contribute to more efficient connectivity.   </p>
  </div>

  <div>
    <ul class=\"met\">
      <li> <i class=\"fa-solid fa-user\"></i> Last name: Sall </li>
      <li>  <i class=\"fa-solid fa-user\"></i> First Name : Mohamed</li>
      <li> <i class=\"fa-solid fa-house-laptop\"></i> Address : Roanne 42300- 76 Rue Jean Jaurès</li>
      <li><i class=\"fa-solid fa-phone\"></i> Phone number: 0787269033</li>
      <li> <i class=\"fa-solid fa-envelope\"></i> E-mail: mohamed.sall@etu.univ-st-etienne.fr</li>
      <li>  <i class=\"fa-brands fa-instagram\"></i> Instagram / <i class=\"fa-brands fa-facebook\"></i> Facebook / <i class=\"fa-brands fa-linkedin\"></i> LinkedIN / <i class=\"fa-brands fa-github\"></i> Github / <i class=\"fa-brands fa-twitter\"></i> Twitter</li>
    </ul>
  </div>
  <img class=\"imgBG\" src=\"images/business.jpg\" alt=\"Busi\"></img>
 
</body>


{% endblock %}
", "sall/index.html.twig", "C:\\Users\\Mohamed sall\\Documents\\SAE1.04\\Projets\\Projets\\templates\\sall\\index.html.twig");
    }
}
