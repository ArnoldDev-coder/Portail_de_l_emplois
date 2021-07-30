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

/* admin_candidat/show.html.twig */
class __TwigTemplate_f625ba74c02cd23d840979ea778ffbd6d36658375502725dfa3e0b33ed3be8f3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_candidat/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_candidat/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin_candidat/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Candidat";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container-fluid mt-5\">
    <div class=\"row\">
        <div class=\"col\">
            <div class=\"card shadow\">
                <table class=\"table\">
                    <tbody>
                    <tr>
                        <th>Id</th>
                        <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Nom</th>
                        <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 18, $this->source); })()), "nom", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Postnom</th>
                        <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 22, $this->source); })()), "postnom", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Prenom</th>
                        <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 26, $this->source); })()), "prenom", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Sexe</th>
                        <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 30, $this->source); })()), "sexe", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Etat_civil</th>
                        <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 34, $this->source); })()), "etatCivil", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Nationalite</th>
                        <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 38, $this->source); })()), "nationalite", [], "any", false, false, false, 38), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Photo</th>
                        <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 42, $this->source); })()), "photo", [], "any", false, false, false, 42), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Province_origine</th>
                        <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 46, $this->source); })()), "provinceOrigine", [], "any", false, false, false, 46), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Lieu_naissance</th>
                        <td>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 50, $this->source); })()), "lieuNaissance", [], "any", false, false, false, 50), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Date_naissance</th>
                        <td>";
        // line 54
        ((twig_get_attribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 54, $this->source); })()), "dateNaissance", [], "any", false, false, false, 54)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 54, $this->source); })()), "dateNaissance", [], "any", false, false, false, 54), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
                    </tr>
                    <tr>
                        <th>Telephone</th>
                        <td>";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 58, $this->source); })()), "telephone", [], "any", false, false, false, 58), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Langues</th>
                        <td>";
        // line 62
        ((twig_get_attribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 62, $this->source); })()), "langues", [], "any", false, false, false, 62)) ? (print (twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 62, $this->source); })()), "langues", [], "any", false, false, false, 62)), "html", null, true))) : (print ("")));
        echo "</td>
                    </tr>
                    <tr>
                        <th>Connaissance_informatique</th>
                        <td>";
        // line 66
        ((twig_get_attribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 66, $this->source); })()), "connaissanceInformatique", [], "any", false, false, false, 66)) ? (print (twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 66, $this->source); })()), "connaissanceInformatique", [], "any", false, false, false, 66)), "html", null, true))) : (print ("")));
        echo "</td>
                    </tr>
                    <tr>
                        <th>Experiences_professionnelles</th>
                        <td>";
        // line 70
        ((twig_get_attribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 70, $this->source); })()), "experiencesProfessionnelles", [], "any", false, false, false, 70)) ? (print (twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 70, $this->source); })()), "experiencesProfessionnelles", [], "any", false, false, false, 70)), "html", null, true))) : (print ("")));
        echo "</td>
                    </tr>
                    <tr>
                        <th>Personnes_references</th>
                        <td>";
        // line 74
        ((twig_get_attribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 74, $this->source); })()), "personnesReferences", [], "any", false, false, false, 74)) ? (print (twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 74, $this->source); })()), "personnesReferences", [], "any", false, false, false, 74)), "html", null, true))) : (print ("")));
        echo "</td>
                    </tr>
                    <tr>
                        <th>Adresse</th>
                        <td>";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 78, $this->source); })()), "adresse", [], "any", false, false, false, 78), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Etudes_faites</th>
                        <td>";
        // line 82
        ((twig_get_attribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 82, $this->source); })()), "etudesFaites", [], "any", false, false, false, 82)) ? (print (twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 82, $this->source); })()), "etudesFaites", [], "any", false, false, false, 82)), "html", null, true))) : (print ("")));
        echo "</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin_candidat/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 82,  210 => 78,  203 => 74,  196 => 70,  189 => 66,  182 => 62,  175 => 58,  168 => 54,  161 => 50,  154 => 46,  147 => 42,  140 => 38,  133 => 34,  126 => 30,  119 => 26,  112 => 22,  105 => 18,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Candidat{% endblock %}

{% block body %}
<div class=\"container-fluid mt-5\">
    <div class=\"row\">
        <div class=\"col\">
            <div class=\"card shadow\">
                <table class=\"table\">
                    <tbody>
                    <tr>
                        <th>Id</th>
                        <td>{{ candidat.id }}</td>
                    </tr>
                    <tr>
                        <th>Nom</th>
                        <td>{{ candidat.nom }}</td>
                    </tr>
                    <tr>
                        <th>Postnom</th>
                        <td>{{ candidat.postnom }}</td>
                    </tr>
                    <tr>
                        <th>Prenom</th>
                        <td>{{ candidat.prenom }}</td>
                    </tr>
                    <tr>
                        <th>Sexe</th>
                        <td>{{ candidat.sexe }}</td>
                    </tr>
                    <tr>
                        <th>Etat_civil</th>
                        <td>{{ candidat.etatCivil }}</td>
                    </tr>
                    <tr>
                        <th>Nationalite</th>
                        <td>{{ candidat.nationalite }}</td>
                    </tr>
                    <tr>
                        <th>Photo</th>
                        <td>{{ candidat.photo }}</td>
                    </tr>
                    <tr>
                        <th>Province_origine</th>
                        <td>{{ candidat.provinceOrigine }}</td>
                    </tr>
                    <tr>
                        <th>Lieu_naissance</th>
                        <td>{{ candidat.lieuNaissance }}</td>
                    </tr>
                    <tr>
                        <th>Date_naissance</th>
                        <td>{{ candidat.dateNaissance ? candidat.dateNaissance|date('Y-m-d H:i:s') : '' }}</td>
                    </tr>
                    <tr>
                        <th>Telephone</th>
                        <td>{{ candidat.telephone }}</td>
                    </tr>
                    <tr>
                        <th>Langues</th>
                        <td>{{ candidat.langues ? candidat.langues|json_encode : '' }}</td>
                    </tr>
                    <tr>
                        <th>Connaissance_informatique</th>
                        <td>{{ candidat.connaissanceInformatique ? candidat.connaissanceInformatique|json_encode : '' }}</td>
                    </tr>
                    <tr>
                        <th>Experiences_professionnelles</th>
                        <td>{{ candidat.experiencesProfessionnelles ? candidat.experiencesProfessionnelles|json_encode : '' }}</td>
                    </tr>
                    <tr>
                        <th>Personnes_references</th>
                        <td>{{ candidat.personnesReferences ? candidat.personnesReferences|json_encode : '' }}</td>
                    </tr>
                    <tr>
                        <th>Adresse</th>
                        <td>{{ candidat.adresse }}</td>
                    </tr>
                    <tr>
                        <th>Etudes_faites</th>
                        <td>{{ candidat.etudesFaites ? candidat.etudesFaites|json_encode : '' }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "admin_candidat/show.html.twig", "C:\\Users\\Arnold Botamba\\etat-de-droit\\templates\\admin_candidat\\show.html.twig");
    }
}
