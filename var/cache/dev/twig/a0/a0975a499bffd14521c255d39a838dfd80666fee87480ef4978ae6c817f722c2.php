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

/* admin_candidat/index.html.twig */
class __TwigTemplate_18852226c85d445b741a27703c8387ebddd5363214c0ee141ac175c861cb78f2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_candidat/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_candidat/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin_candidat/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container-fluid mt-5\">
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"card shadow\">
                    <div class=\"card-header bg-transparent border-0\">
                        <h3 class=\"mb-0\">Candidats</h3>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table\">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nom</th>
                                <th>Postnom</th>
                                <th>Prenom</th>
                                <th>Sexe</th>
                                <th>Etat_civil</th>
                                <th>Nationalite</th>
                                <th>Photo</th>
                                <th>Province_origine</th>
                                <th>Lieu_naissance</th>
                                <th>Date_naissance</th>
                                <th>Telephone</th>
                                <th>Langues</th>
                                <th>Connaissance_informatique</th>
                                <th>Experiences_professionnelles</th>
                                <th>Personnes_references</th>
                                <th>Adresse</th>
                                <th>Etudes_faites</th>
                                <th>actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["candidats"]) || array_key_exists("candidats", $context) ? $context["candidats"] : (function () { throw new RuntimeError('Variable "candidats" does not exist.', 37, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["candidat"]) {
            // line 38
            echo "                                <tr>
                                    <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidat"], "id", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                                    <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidat"], "nom", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                                    <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidat"], "postnom", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                                    <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidat"], "prenom", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                                    <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidat"], "sexe", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                                    <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidat"], "etatCivil", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                                    <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidat"], "nationalite", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                                    <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidat"], "photo", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                                    <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidat"], "provinceOrigine", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                                    <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidat"], "lieuNaissance", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                                    <td>";
            // line 49
            ((twig_get_attribute($this->env, $this->source, $context["candidat"], "dateNaissance", [], "any", false, false, false, 49)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidat"], "dateNaissance", [], "any", false, false, false, 49), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                                    <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidat"], "telephone", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                                    <td>";
            // line 51
            ((twig_get_attribute($this->env, $this->source, $context["candidat"], "langues", [], "any", false, false, false, 51)) ? (print (twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, $context["candidat"], "langues", [], "any", false, false, false, 51)), "html", null, true))) : (print ("")));
            echo "</td>
                                    <td>";
            // line 52
            ((twig_get_attribute($this->env, $this->source, $context["candidat"], "connaissanceInformatique", [], "any", false, false, false, 52)) ? (print (twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, $context["candidat"], "connaissanceInformatique", [], "any", false, false, false, 52)), "html", null, true))) : (print ("")));
            echo "</td>
                                    <td>";
            // line 53
            ((twig_get_attribute($this->env, $this->source, $context["candidat"], "experiencesProfessionnelles", [], "any", false, false, false, 53)) ? (print (twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, $context["candidat"], "experiencesProfessionnelles", [], "any", false, false, false, 53)), "html", null, true))) : (print ("")));
            echo "</td>
                                    <td>";
            // line 54
            ((twig_get_attribute($this->env, $this->source, $context["candidat"], "personnesReferences", [], "any", false, false, false, 54)) ? (print (twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, $context["candidat"], "personnesReferences", [], "any", false, false, false, 54)), "html", null, true))) : (print ("")));
            echo "</td>
                                    <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidat"], "adresse", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                                    <td>";
            // line 56
            ((twig_get_attribute($this->env, $this->source, $context["candidat"], "etudesFaites", [], "any", false, false, false, 56)) ? (print (twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, $context["candidat"], "etudesFaites", [], "any", false, false, false, 56)), "html", null, true))) : (print ("")));
            echo "</td>
                                    <td>
                                        <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_candidat_show", ["id" => twig_get_attribute($this->env, $this->source, $context["candidat"], "id", [], "any", false, false, false, 58)]), "html", null, true);
            echo "\">show</a>
                                        <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_candidat_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["candidat"], "id", [], "any", false, false, false, 59)]), "html", null, true);
            echo "\">edit</a>
                                    </td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 63
            echo "                                <tr>
                                    <td colspan=\"19\">no records found</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                            </tbody>
                        </table>
                    </div>
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
        return "admin_candidat/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 67,  197 => 63,  188 => 59,  184 => 58,  179 => 56,  175 => 55,  171 => 54,  167 => 53,  163 => 52,  159 => 51,  155 => 50,  151 => 49,  147 => 48,  143 => 47,  139 => 46,  135 => 45,  131 => 44,  127 => 43,  123 => 42,  119 => 41,  115 => 40,  111 => 39,  108 => 38,  103 => 37,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container-fluid mt-5\">
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"card shadow\">
                    <div class=\"card-header bg-transparent border-0\">
                        <h3 class=\"mb-0\">Candidats</h3>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table\">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nom</th>
                                <th>Postnom</th>
                                <th>Prenom</th>
                                <th>Sexe</th>
                                <th>Etat_civil</th>
                                <th>Nationalite</th>
                                <th>Photo</th>
                                <th>Province_origine</th>
                                <th>Lieu_naissance</th>
                                <th>Date_naissance</th>
                                <th>Telephone</th>
                                <th>Langues</th>
                                <th>Connaissance_informatique</th>
                                <th>Experiences_professionnelles</th>
                                <th>Personnes_references</th>
                                <th>Adresse</th>
                                <th>Etudes_faites</th>
                                <th>actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for candidat in candidats %}
                                <tr>
                                    <td>{{ candidat.id }}</td>
                                    <td>{{ candidat.nom }}</td>
                                    <td>{{ candidat.postnom }}</td>
                                    <td>{{ candidat.prenom }}</td>
                                    <td>{{ candidat.sexe }}</td>
                                    <td>{{ candidat.etatCivil }}</td>
                                    <td>{{ candidat.nationalite }}</td>
                                    <td>{{ candidat.photo }}</td>
                                    <td>{{ candidat.provinceOrigine }}</td>
                                    <td>{{ candidat.lieuNaissance }}</td>
                                    <td>{{ candidat.dateNaissance ? candidat.dateNaissance|date('Y-m-d H:i:s') : '' }}</td>
                                    <td>{{ candidat.telephone }}</td>
                                    <td>{{ candidat.langues ? candidat.langues|json_encode : '' }}</td>
                                    <td>{{ candidat.connaissanceInformatique ? candidat.connaissanceInformatique|json_encode : '' }}</td>
                                    <td>{{ candidat.experiencesProfessionnelles ? candidat.experiencesProfessionnelles|json_encode : '' }}</td>
                                    <td>{{ candidat.personnesReferences ? candidat.personnesReferences|json_encode : '' }}</td>
                                    <td>{{ candidat.adresse }}</td>
                                    <td>{{ candidat.etudesFaites ? candidat.etudesFaites|json_encode : '' }}</td>
                                    <td>
                                        <a href=\"{{ path('admin_candidat_show', {'id': candidat.id}) }}\">show</a>
                                        <a href=\"{{ path('admin_candidat_edit', {'id': candidat.id}) }}\">edit</a>
                                    </td>
                                </tr>
                            {% else %}
                                <tr>
                                    <td colspan=\"19\">no records found</td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "admin_candidat/index.html.twig", "C:\\Users\\Arnold Botamba\\etat-de-droit\\templates\\admin_candidat\\index.html.twig");
    }
}
