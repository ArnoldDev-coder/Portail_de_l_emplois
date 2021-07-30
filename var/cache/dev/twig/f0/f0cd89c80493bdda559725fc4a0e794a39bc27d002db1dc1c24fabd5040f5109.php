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

/* Blog/index.html.twig */
class __TwigTemplate_7055d4f3bdf3e60e46845a83d0a95432b5db496fd980f3b9ccfc323184931b89 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Blog/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Blog/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<title>État de Droit SARL</title>
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"../asset/index.css\">
</head>
<body>
<div class=\"main\">
\t<div class=\"header\">
\t\t<img src=\"../asset/images/logo.png\" width=\"300\" height=\"70\">
\t\t<ul>
\t\t\t<li><a href=\"home\">Accueil</a></li>
\t\t\t<li><a href=\"offres\">Offres</a></li>
\t\t\t<li><a href=\"index.php\">Postuler</a></li>
\t\t\t<li><a href=\"login\">publier</a></li>
\t\t\t<li><a href=\"login\">Admin</a></li>
\t\t\t
\t\t\t
\t\t</ul>
\t\t<img src=\"../asset/images/bigpicture.jpg\" alt=\"\" width=\"960\" height=\"300\" />
\t</div>
\t<div class=\"content\">
\t\t<h2>État de droit SARL</h2>
\t\t<p>Bienvenue sur le site d'emploi en ligne. Il permet au demandeur d'emploi de rechercher divers emplois selon sa qualification. Ici, le demandeur d'emploi peut s'inscrire sur le portail Web et créer son profil ainsi que ses informations éducatives. Le demandeur d'emploi peut rechercher divers emplois et postuler à l'emploi.
Ce Portail est également conçu pour les différents employeurs qui ont besoin de recruter des employés dans leur organisation. L'employeur peut s'inscrire sur le portail Web et ensuite il peut télécharger des informations sur les différentes offres d'emploi dans son organisation. L'employé peut consulter les candidatures du demandeur d'emploi et envoyer un dernier appel aux demandeurs d'emploi..</p>
\t</div>
\t<div class=\"section\">
\t\t<div class=\"org\"><center>
\t\t\t<form method=\"post\" action=\"alljoboffer.php\">
\t\t\t<h2>Types d'Organisations</h2>
\t\t\t<input type=\"submit\" name=\"type\" value=\"Gouvernement\"><br>
\t\t\t<input type=\"submit\" name=\"type\" value=\"Semi Gouvernement\"><br>
\t\t\t<input type=\"submit\" name=\"type\" value=\"ONG\"><br>
\t\t\t<input type=\"submit\" name=\"type\" value=\"Firme/Companies Privé\"><br>
\t\t\t<input type=\"submit\" name=\"type\" value=\" Agences Internationale\"><br>
\t\t\t<input type=\"submit\" name=\"type\" value=\"Autres\">
\t\t\t</form>
\t\t\t</center>
\t\t</div>
\t\t<div class=\"newjob\"><center>
\t\t\t<h2>Categories</h2>
\t\t\t<form method=\"post\" action=\"category.php\">
\t\t\t<table style=\"width:100%\">
\t\t\t
\t\t\t\t<tr>
\t\t\t\t\t<td><center><input type=\"submit\" name=\"type\" value=\"Accounting/Finance/Banking\"></center></td>
\t\t\t\t\t<td></td>
\t\t\t\t\t<td><center><input type=\"submit\" name=\"type\" value=\"Education/Training\"></center></td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td><center><input type=\"submit\" name=\"type\" value=\"Engineer/Architects\"></center></td>
\t\t\t\t\t<td></td>
\t\t\t\t\t<td><center><input type=\"submit\" name=\"type\" value=\"IT and Telecommunication\"></center></td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td><center><input type=\"submit\" name=\"type\" value=\"Marketing/Sales\"></center></td>
\t\t\t\t\t<td></td>
\t\t\t\t\t<td><center><input type=\"submit\" name=\"type\" value=\"Medical/Pharma\"></center></td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td><center><input type=\"submit\" name=\"type\" value=\"Law/Legal\"></center></td>
\t\t\t\t\t<td></td>
\t\t\t\t\t<td><center><input type=\"submit\" name=\"type\" value=\"Garments/Textile\"></center></td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td><center><input type=\"submit\" name=\"type\" value=\"Airline/Travel/Tourism\"></center></td>
\t\t\t\t\t<td></td>
\t\t\t\t\t<td><center><input type=\"submit\" name=\"type\" value=\"Media/Advertising/Event Mgt.\"></center></td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td><center><input type=\"submit\" name=\"type\" value=\"Others\"></center></td>
\t\t\t\t\t<td></td>
\t\t\t\t\t<td><center><h3><a href=\"category.php\">All Job Offer</a></h3></center></td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t\t</form>
\t\t\t</center>
\t\t</div>
\t</div>
\t<div class=\"footer\">&copy État de droit SARL 2021 </div>
</div>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Blog/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
\t<title>État de Droit SARL</title>
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"../asset/index.css\">
</head>
<body>
<div class=\"main\">
\t<div class=\"header\">
\t\t<img src=\"../asset/images/logo.png\" width=\"300\" height=\"70\">
\t\t<ul>
\t\t\t<li><a href=\"home\">Accueil</a></li>
\t\t\t<li><a href=\"offres\">Offres</a></li>
\t\t\t<li><a href=\"index.php\">Postuler</a></li>
\t\t\t<li><a href=\"login\">publier</a></li>
\t\t\t<li><a href=\"login\">Admin</a></li>
\t\t\t
\t\t\t
\t\t</ul>
\t\t<img src=\"../asset/images/bigpicture.jpg\" alt=\"\" width=\"960\" height=\"300\" />
\t</div>
\t<div class=\"content\">
\t\t<h2>État de droit SARL</h2>
\t\t<p>Bienvenue sur le site d'emploi en ligne. Il permet au demandeur d'emploi de rechercher divers emplois selon sa qualification. Ici, le demandeur d'emploi peut s'inscrire sur le portail Web et créer son profil ainsi que ses informations éducatives. Le demandeur d'emploi peut rechercher divers emplois et postuler à l'emploi.
Ce Portail est également conçu pour les différents employeurs qui ont besoin de recruter des employés dans leur organisation. L'employeur peut s'inscrire sur le portail Web et ensuite il peut télécharger des informations sur les différentes offres d'emploi dans son organisation. L'employé peut consulter les candidatures du demandeur d'emploi et envoyer un dernier appel aux demandeurs d'emploi..</p>
\t</div>
\t<div class=\"section\">
\t\t<div class=\"org\"><center>
\t\t\t<form method=\"post\" action=\"alljoboffer.php\">
\t\t\t<h2>Types d'Organisations</h2>
\t\t\t<input type=\"submit\" name=\"type\" value=\"Gouvernement\"><br>
\t\t\t<input type=\"submit\" name=\"type\" value=\"Semi Gouvernement\"><br>
\t\t\t<input type=\"submit\" name=\"type\" value=\"ONG\"><br>
\t\t\t<input type=\"submit\" name=\"type\" value=\"Firme/Companies Privé\"><br>
\t\t\t<input type=\"submit\" name=\"type\" value=\" Agences Internationale\"><br>
\t\t\t<input type=\"submit\" name=\"type\" value=\"Autres\">
\t\t\t</form>
\t\t\t</center>
\t\t</div>
\t\t<div class=\"newjob\"><center>
\t\t\t<h2>Categories</h2>
\t\t\t<form method=\"post\" action=\"category.php\">
\t\t\t<table style=\"width:100%\">
\t\t\t
\t\t\t\t<tr>
\t\t\t\t\t<td><center><input type=\"submit\" name=\"type\" value=\"Accounting/Finance/Banking\"></center></td>
\t\t\t\t\t<td></td>
\t\t\t\t\t<td><center><input type=\"submit\" name=\"type\" value=\"Education/Training\"></center></td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td><center><input type=\"submit\" name=\"type\" value=\"Engineer/Architects\"></center></td>
\t\t\t\t\t<td></td>
\t\t\t\t\t<td><center><input type=\"submit\" name=\"type\" value=\"IT and Telecommunication\"></center></td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td><center><input type=\"submit\" name=\"type\" value=\"Marketing/Sales\"></center></td>
\t\t\t\t\t<td></td>
\t\t\t\t\t<td><center><input type=\"submit\" name=\"type\" value=\"Medical/Pharma\"></center></td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td><center><input type=\"submit\" name=\"type\" value=\"Law/Legal\"></center></td>
\t\t\t\t\t<td></td>
\t\t\t\t\t<td><center><input type=\"submit\" name=\"type\" value=\"Garments/Textile\"></center></td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td><center><input type=\"submit\" name=\"type\" value=\"Airline/Travel/Tourism\"></center></td>
\t\t\t\t\t<td></td>
\t\t\t\t\t<td><center><input type=\"submit\" name=\"type\" value=\"Media/Advertising/Event Mgt.\"></center></td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td><center><input type=\"submit\" name=\"type\" value=\"Others\"></center></td>
\t\t\t\t\t<td></td>
\t\t\t\t\t<td><center><h3><a href=\"category.php\">All Job Offer</a></h3></center></td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t\t</form>
\t\t\t</center>
\t\t</div>
\t</div>
\t<div class=\"footer\">&copy État de droit SARL 2021 </div>
</div>
</body>
</html>", "Blog/index.html.twig", "/Users/arnolddev/etat-de-droit/templates/Blog/index.html.twig");
    }
}
