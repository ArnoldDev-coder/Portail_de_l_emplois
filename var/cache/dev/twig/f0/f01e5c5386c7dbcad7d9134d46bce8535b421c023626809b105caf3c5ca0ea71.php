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

/* emplois/index.html.twig */
class __TwigTemplate_0efb94c6c4b92da9553e701bc570139817fb8ed86b6704a24f4142b8f0bfcbb9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emplois/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emplois/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <title>Offres d'emplois</title>
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
  <script src=\"https://use.fontawesome.com/releases/v5.0.8/js/all.js\"></script>
  <link href=\"css/login.css\" rel=\"stylesheet\">
</head>
  
<style>
@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,700');

html,body{
  height: 100%;
  width: 100%;
  font-family: 'Poppins', sans-serif;
  color: #222;
}

body
{
  background: #E6E6FA;
}

.wrn-btn{
  width: 100%;
  font-size: 16px;
  font-weight: 400;
  text-transform: capitalize;
  height: calc(38px) !important;
  border-radius:0;
}


.container-fluid{
  position: relative;
  text-align: center;
  color: white;
  padding-bottom: 50px;
}
.text1{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
}


.table{
    padding-top: 10px;
}

#en{
\t
\tmargin-left:10px;
\twidth:90%;
}

</style>



  <!--- job list -->
  

  <h1 class=\"conatiner text-center\">Offres publiés</h1>                                                              
  <section id =\"en\">

    <table class=\"table\">
      <thead class=\"thead-dark\">
        <tr>
          <th scope=\"col\">N°</th>
          <th scope=\"col\">Offres</th>
          <th scope=\"col\">Titre du poste</th>
          <th scope=\"col\">Date de publication</th>
          <th scope=\"col\">Appliquer</th>
      </tr>
  </thead>
 
  <tbody>
    <tr>
      <th scope=\"row\">1</th>
      <td><a href=\"#\"> Etat de droit SARL</a></td>
      <td>Sécrétaire du personnel</td>
      <td>30/06/2021</td>
      <td><a href=\"index.php\"> Apply Now </a></td>
  </tr>
  <tr>
      <th scope=\"row\">2</th>
      <td><a href=\"#\"> Ecobank.</a></td>
      <td>Account Manager </td>
      <td>26/07/2021</td>
      <td><a href=\"index.php\"> Apply Now </a></td>
  </tr>


  <tr>
      <th scope=\"row\">3</th>
      <td><a href=\"#\"> CILU.</a></td>
      <td>Commercial Manager (Incentive) </td>
      <td>15/05/2021</td>
      <td><a href=\"file:///C:/Users/GALIB-PC/Desktop/e%20py/apply.html\"> Apply Now </a></td>
  </tr>


  <tr>
      <th scope=\"row\">4</th>
      <td><a href=\"#\"> RAWSUR.</a></td>
      <td>Technical Officer (Leather Engineering) </td>
      <td>30/06/2021</td>
      <td><a href=\"file:///C:/Users/GALIB-PC/Desktop/e%20py/apply.html\"> Apply Now </a></td>
  </tr>

  <tr>
      <th scope=\"row\">5</th>
      <td><a href=\"#\"> BTC International Ltd.</a></td>
      <td>Technician </td>
      <td>28/07/2021</td>
      <td><a href=\"file:///C:/Users/GALIB-PC/Desktop/e%20py/apply.html\"> Apply Now </a></td>
  </tr>
  <tr>
      <th scope=\"row\">6</th>
      <td><a href=\"#\"> DGDA</a></td>
      <td>Comptable </td>
      <td>20/07/2021</td>
      <td><a href=\"file:///C:/Users/GALIB-PC/Desktop/e%20py/apply.html\"> Apply Now </a></td>
  </tr>
  <tr>
      <th scope=\"row\">7</th>
      <td><a href=\"#\"> ORANGE RDC.</a></td>
      <td>Referent digital </td>
      <td>15/07/2021</td>
      <td><a href=\"file:///C:/Users/GALIB-PC/Desktop/e%20py/apply.html\"> Apply Now </a></td>
  </tr>
  <tr>
      <th scope=\"row\">8</th>
      <td><a href=\"#\">FINCA RDC</a></td>
      <td>Analyste Programmeur</td>
      <td>25/07/2021</td>
      <td><a href=\"file:///C:/Users/GALIB-PC/Desktop/e%20py/apply.html\"> Apply Now </a></td>
  </tr>
  <tr>
      <th scope=\"row\">9</th>
      <td><a href=\"#\"> Prayas International Ltd.</a></td>
      <td>Technician </td>
      <td>20/06/2021</td>
      <td><a href=\"file:///C:/Users/GALIB-PC/Desktop/e%20py/apply.html\"> Apply Now </a></td>
  </tr>
  <tr>
      <th scope=\"row\">10</th>
      <td><a href=\"#\">EQUITY BCDC</a></td>
      <td>Account Manager </td>
      <td>28/07/2021</td>
      <td><a href=\"file:///C:/Users/GALIB-PC/Desktop/e%20py/apply.html\"> Apply Now </a></td>
  </tr>
  <tr>
      <th scope=\"row\">11</th>
      <td><a href=\"#\">USAID RDC</a></td>
      <td>Coordonateur de projets</td>
      <td>16/06/2021</td>
      <td><a href=\"file:///C:/Users/GALIB-PC/Desktop/e%20py/apply.html\"> Apply Now </a></td>
  </tr>
  <tr>
      <th scope=\"row\">12</th>
      <td><a href=\"#\">TOP CONGO</a></td>
      <td>Journaliste</td>
      <td>20/07/2021</td>
      <td><a href=\"file:///C:/Users/GALIB-PC/Desktop/e%20py/apply.html\"> Apply Now </a></td>
  </tr>


  <tr>
  </tr>

</tbody>
</table>

</section>

   


  





</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "emplois/index.html.twig";
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
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <title>Offres d'emplois</title>
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
  <script src=\"https://use.fontawesome.com/releases/v5.0.8/js/all.js\"></script>
  <link href=\"css/login.css\" rel=\"stylesheet\">
</head>
  
<style>
@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,700');

html,body{
  height: 100%;
  width: 100%;
  font-family: 'Poppins', sans-serif;
  color: #222;
}

body
{
  background: #E6E6FA;
}

.wrn-btn{
  width: 100%;
  font-size: 16px;
  font-weight: 400;
  text-transform: capitalize;
  height: calc(38px) !important;
  border-radius:0;
}


.container-fluid{
  position: relative;
  text-align: center;
  color: white;
  padding-bottom: 50px;
}
.text1{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
}


.table{
    padding-top: 10px;
}

#en{
\t
\tmargin-left:10px;
\twidth:90%;
}

</style>



  <!--- job list -->
  

  <h1 class=\"conatiner text-center\">Offres publiés</h1>                                                              
  <section id =\"en\">

    <table class=\"table\">
      <thead class=\"thead-dark\">
        <tr>
          <th scope=\"col\">N°</th>
          <th scope=\"col\">Offres</th>
          <th scope=\"col\">Titre du poste</th>
          <th scope=\"col\">Date de publication</th>
          <th scope=\"col\">Appliquer</th>
      </tr>
  </thead>
 
  <tbody>
    <tr>
      <th scope=\"row\">1</th>
      <td><a href=\"#\"> Etat de droit SARL</a></td>
      <td>Sécrétaire du personnel</td>
      <td>30/06/2021</td>
      <td><a href=\"index.php\"> Apply Now </a></td>
  </tr>
  <tr>
      <th scope=\"row\">2</th>
      <td><a href=\"#\"> Ecobank.</a></td>
      <td>Account Manager </td>
      <td>26/07/2021</td>
      <td><a href=\"index.php\"> Apply Now </a></td>
  </tr>


  <tr>
      <th scope=\"row\">3</th>
      <td><a href=\"#\"> CILU.</a></td>
      <td>Commercial Manager (Incentive) </td>
      <td>15/05/2021</td>
      <td><a href=\"file:///C:/Users/GALIB-PC/Desktop/e%20py/apply.html\"> Apply Now </a></td>
  </tr>


  <tr>
      <th scope=\"row\">4</th>
      <td><a href=\"#\"> RAWSUR.</a></td>
      <td>Technical Officer (Leather Engineering) </td>
      <td>30/06/2021</td>
      <td><a href=\"file:///C:/Users/GALIB-PC/Desktop/e%20py/apply.html\"> Apply Now </a></td>
  </tr>

  <tr>
      <th scope=\"row\">5</th>
      <td><a href=\"#\"> BTC International Ltd.</a></td>
      <td>Technician </td>
      <td>28/07/2021</td>
      <td><a href=\"file:///C:/Users/GALIB-PC/Desktop/e%20py/apply.html\"> Apply Now </a></td>
  </tr>
  <tr>
      <th scope=\"row\">6</th>
      <td><a href=\"#\"> DGDA</a></td>
      <td>Comptable </td>
      <td>20/07/2021</td>
      <td><a href=\"file:///C:/Users/GALIB-PC/Desktop/e%20py/apply.html\"> Apply Now </a></td>
  </tr>
  <tr>
      <th scope=\"row\">7</th>
      <td><a href=\"#\"> ORANGE RDC.</a></td>
      <td>Referent digital </td>
      <td>15/07/2021</td>
      <td><a href=\"file:///C:/Users/GALIB-PC/Desktop/e%20py/apply.html\"> Apply Now </a></td>
  </tr>
  <tr>
      <th scope=\"row\">8</th>
      <td><a href=\"#\">FINCA RDC</a></td>
      <td>Analyste Programmeur</td>
      <td>25/07/2021</td>
      <td><a href=\"file:///C:/Users/GALIB-PC/Desktop/e%20py/apply.html\"> Apply Now </a></td>
  </tr>
  <tr>
      <th scope=\"row\">9</th>
      <td><a href=\"#\"> Prayas International Ltd.</a></td>
      <td>Technician </td>
      <td>20/06/2021</td>
      <td><a href=\"file:///C:/Users/GALIB-PC/Desktop/e%20py/apply.html\"> Apply Now </a></td>
  </tr>
  <tr>
      <th scope=\"row\">10</th>
      <td><a href=\"#\">EQUITY BCDC</a></td>
      <td>Account Manager </td>
      <td>28/07/2021</td>
      <td><a href=\"file:///C:/Users/GALIB-PC/Desktop/e%20py/apply.html\"> Apply Now </a></td>
  </tr>
  <tr>
      <th scope=\"row\">11</th>
      <td><a href=\"#\">USAID RDC</a></td>
      <td>Coordonateur de projets</td>
      <td>16/06/2021</td>
      <td><a href=\"file:///C:/Users/GALIB-PC/Desktop/e%20py/apply.html\"> Apply Now </a></td>
  </tr>
  <tr>
      <th scope=\"row\">12</th>
      <td><a href=\"#\">TOP CONGO</a></td>
      <td>Journaliste</td>
      <td>20/07/2021</td>
      <td><a href=\"file:///C:/Users/GALIB-PC/Desktop/e%20py/apply.html\"> Apply Now </a></td>
  </tr>


  <tr>
  </tr>

</tbody>
</table>

</section>

   


  





</body>
</html>
", "emplois/index.html.twig", "/Users/arnolddev/etat-de-droit/templates/emplois/index.html.twig");
    }
}
