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

/* sall/FORMULAIRE.html.twig */
class __TwigTemplate_48b72733377310fda3c7ee37b3bb0606 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sall/FORMULAIRE.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sall/FORMULAIRE.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "sall/FORMULAIRE.html.twig", 1);
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
        echo "<html>
    <title>FORMULAIRE</title>
    <link rel=\"stylesheet\" href=\"style.css\">

</head>
<body>
    <form action=\"formulaire\">
\t\t<h2>FORMULAIRE</h2>
\t\t<div>
        <label for=\"nom\">Nom </label>
        <input type=\"text\" name=\"nom\" id=\"nom\">
\t\t</div>
\t\t<div>
\t\t\t<label for=\"prenom\">Prenom(s) </label>
\t\t\t<input type=\"text\" name=\"prenom\" id=\"prenom\">
\t\t</div>\t
\t\t<div>
\t\t\t<label for=\"email\">Votre email </label>
\t\t\t<input type=\"text\" name=\"email\" id=\"email\" placeholder=\"example123@gmail.com\">

\t\t</div>
\t\t<div>
\t\t\t<label for=\"passwd\">Votre mot de passe </label>
\t\t\t<input type=\"password\" name=\"passwd\" id=\"passwd\">
\t\t</div>
\t</form>
    
</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "sall/FORMULAIRE.html.twig";
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
<html>
    <title>FORMULAIRE</title>
    <link rel=\"stylesheet\" href=\"style.css\">

</head>
<body>
    <form action=\"formulaire\">
\t\t<h2>FORMULAIRE</h2>
\t\t<div>
        <label for=\"nom\">Nom </label>
        <input type=\"text\" name=\"nom\" id=\"nom\">
\t\t</div>
\t\t<div>
\t\t\t<label for=\"prenom\">Prenom(s) </label>
\t\t\t<input type=\"text\" name=\"prenom\" id=\"prenom\">
\t\t</div>\t
\t\t<div>
\t\t\t<label for=\"email\">Votre email </label>
\t\t\t<input type=\"text\" name=\"email\" id=\"email\" placeholder=\"example123@gmail.com\">

\t\t</div>
\t\t<div>
\t\t\t<label for=\"passwd\">Votre mot de passe </label>
\t\t\t<input type=\"password\" name=\"passwd\" id=\"passwd\">
\t\t</div>
\t</form>
    
</body>
</html>
{% endblock %}", "sall/FORMULAIRE.html.twig", "C:\\Users\\Mohamed sall\\Documents\\SAE1.04\\Projets\\Projets\\templates\\sall\\formulaire.html.twig");
    }
}
