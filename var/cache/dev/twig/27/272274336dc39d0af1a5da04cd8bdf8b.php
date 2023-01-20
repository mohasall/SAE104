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

/* sall/FORMULAIRE.html */
class __TwigTemplate_db310cf0cd41c5510fd883155bea06e8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sall/FORMULAIRE.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sall/FORMULAIRE.html"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>FORMULAIRE</title>
    <link rel=\"stylesheet\" href=\"formulaire.css\">

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
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "sall/FORMULAIRE.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>FORMULAIRE</title>
    <link rel=\"stylesheet\" href=\"formulaire.css\">

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
</html>", "sall/FORMULAIRE.html", "C:\\Users\\Mohamed sall\\Documents\\SAE1.04\\Projets\\Projets\\templates\\sall\\formulaire.html");
    }
}
