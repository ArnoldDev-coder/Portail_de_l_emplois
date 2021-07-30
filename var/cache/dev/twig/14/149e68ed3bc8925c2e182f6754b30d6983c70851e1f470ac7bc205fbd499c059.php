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

/* candidat/index.html.twig */
class __TwigTemplate_07b24021d875c698d87e2163c9c0d92f38e83eddb27c98d555638f952f497743 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidat/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidat/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>Connexion - État de droit </title>

    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\">
    <link rel=\"stylesheet\" href=\"/assets/vendor/nucleo/css/nucleo.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"/assets/css/argon.min.css?v=1.2.0\" type=\"text/css\">
</head>

<body class=\"bg-default\">
<div class=\"main-content\">
    <div class=\"container pb-5 mt-5\">
        <div class=\"row justify-content-center\">
            <div class=\"card bg-secondary border-0 mb-0\">
                <div class=\"card-body px-lg-5 py-lg-5\">
                    <h1 class=\"text-center mb-4\">
                        Fiche de candidature en Ligne
                    </h1>

                    ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'form_start');
        echo "
                    <div class=\"row\">
                        <div class=\"col-lg-3\">";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "nom", [], "any", false, false, false, 26), 'row');
        echo "</div>
                        <div class=\"col-lg-3\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "postnom", [], "any", false, false, false, 27), 'row');
        echo "</div>
                        <div class=\"col-lg-3\">";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "prenom", [], "any", false, false, false, 28), 'row');
        echo "</div>
                        <div class=\"col-lg-3\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "etat_civil", [], "any", false, false, false, 29), 'row');
        echo "</div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-12\">";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "sexe", [], "any", false, false, false, 32), 'row');
        echo "</div>
                        <div class=\"col-lg-6\">";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "date_naissance", [], "any", false, false, false, 33), 'row');
        echo "</div>
                        <div class=\"col-lg-3\">";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "province_origine", [], "any", false, false, false, 34), 'row');
        echo "</div>
                        <div class=\"col-lg-3\">";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "lieu_naissance", [], "any", false, false, false, 35), 'row');
        echo "</div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-4\">";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "adresse", [], "any", false, false, false, 38), 'row');
        echo "</div>
                        <div class=\"col-lg-4\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "nationalite", [], "any", false, false, false, 39), 'row');
        echo "</div>
                        <div class=\"col-lg-4\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "photo_file", [], "any", false, false, false, 40), 'row');
        echo "</div>
                        <div class=\"col-12\">";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "telephone", [], "any", false, false, false, 41), 'row');
        echo "</div>
                    </div>
                    <div class=\"row mb-4\">
                        <div class=\"col-12\">
                            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "etudes_faites", [], "any", false, false, false, 45), 'label');
        echo "
                            <ol id=\"etudes-fields-list\"
                                data-prototype=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "etudes_faites", [], "any", false, false, false, 47), "vars", [], "any", false, false, false, 47), "prototype", [], "any", false, false, false, 47), 'widget'));
        echo "\"
                                data-widget-tag=\"li\"
                                data-widget-counter=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "etudes_faites", [], "any", false, false, false, 49)), "html", null, true);
        echo "\"
                            >
                                ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "etudes_faites", [], "any", false, false, false, 51));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 52
            echo "                                    <li>";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["e"], 'widget');
            echo "</li>
                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 54
            echo "                                    ";
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "etudes_faites", [], "any", false, false, false, 54), "setRendered", [], "any", false, false, false, 54);
            // line 55
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                            </ol>
                        </div>
                        <div class=\"col-md-12\">
                            <span role=\"button\" data-list-selector=\"#etudes-fields-list\" class=\"btn btn-primary\" data-add-collection-widget>
                                Ajouter une etudes faite
                            </span>
                        </div>

                        <div class=\"col-12\">
                            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "connaissance_informatique", [], "any", false, false, false, 65), 'label');
        echo "
                            <ol id=\"connaissance-fields-list\"
                                data-prototype=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "connaissance_informatique", [], "any", false, false, false, 67), "vars", [], "any", false, false, false, 67), "prototype", [], "any", false, false, false, 67), 'widget'));
        echo "\"
                                data-widget-tag=\"li\"
                                data-widget-counter=\"";
        // line 69
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "connaissance_informatique", [], "any", false, false, false, 69)), "html", null, true);
        echo "\"
                            >
                                ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "connaissance_informatique", [], "any", false, false, false, 71));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 72
            echo "                                    <li>";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["e"], 'widget');
            echo "</li>
                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 74
            echo "                                    ";
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "connaissance_informatique", [], "any", false, false, false, 74), "setRendered", [], "any", false, false, false, 74);
            // line 75
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                            </ol>
                        </div>
                        <div class=\"col-md-12\">
                            <span role=\"button\" data-list-selector=\"#connaissance-fields-list\" class=\"btn btn-primary\" data-add-collection-widget>
                                Ajouter une connaissance informatique
                            </span>
                        </div>


                        <div class=\"col-12\">
                            ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "experiences_professionnelles", [], "any", false, false, false, 86), 'label');
        echo "
                            <ol id=\"experiences-fields-list\"
                                data-prototype=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "experiences_professionnelles", [], "any", false, false, false, 88), "vars", [], "any", false, false, false, 88), "prototype", [], "any", false, false, false, 88), 'widget'));
        echo "\"
                                data-widget-tag=\"li\"
                                data-widget-counter=\"";
        // line 90
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "experiences_professionnelles", [], "any", false, false, false, 90)), "html", null, true);
        echo "\"
                            >
                                ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "experiences_professionnelles", [], "any", false, false, false, 92));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 93
            echo "                                    <li>";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["e"], 'widget');
            echo "</li>
                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 95
            echo "                                    ";
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "experiences_professionnelles", [], "any", false, false, false, 95), "setRendered", [], "any", false, false, false, 95);
            // line 96
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                            </ol>
                        </div>
                        <div class=\"col-md-12\">
                            <span role=\"button\" data-list-selector=\"#experiences-fields-list\" class=\"btn btn-primary\" data-add-collection-widget>
                                Ajouter une experience professionnelle
                            </span>
                        </div>

                        <div class=\"col-12\">
                            ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "personnes_references", [], "any", false, false, false, 106), 'label');
        echo "
                            <ol id=\"personnes-fields-list\"
                                data-prototype=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "personnes_references", [], "any", false, false, false, 108), "vars", [], "any", false, false, false, 108), "prototype", [], "any", false, false, false, 108), 'widget'));
        echo "\"
                                data-widget-tag=\"li\"
                                data-widget-counter=\"";
        // line 110
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "personnes_references", [], "any", false, false, false, 110)), "html", null, true);
        echo "\"
                            >
                                ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "personnes_references", [], "any", false, false, false, 112));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 113
            echo "                                    <li>";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["e"], 'widget');
            echo "</li>
                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 115
            echo "                                    ";
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "personnes_references", [], "any", false, false, false, 115), "setRendered", [], "any", false, false, false, 115);
            // line 116
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "                            </ol>
                        </div>
                        <div class=\"col-md-12\">
                            <span role=\"button\" data-list-selector=\"#personnes-fields-list\" class=\"btn btn-primary\" data-add-collection-widget>
                                Ajouter une personne de reference
                            </span>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-12\">";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "langues", [], "any", false, false, false, 127), 'row');
        echo "</div>
                    </div>

                    <div class=\"row\">
                        <button type=\"submit\" class=\"btn btn-primary btn-block\">Envoyer</button>
                    </div>
                    ";
        // line 133
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
</div>

<script src=\"/assets/vendor/jquery/dist/jquery.min.js\"></script>
<script src=\"/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js\"></script>
<script src=\"/assets/vendor/js-cookie/js.cookie.js\"></script>
<script src=\"/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js\"></script>
<script src=\"/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js\"></script>
<script src=\"/assets/js/argon.min.js?v=1.2.0\"></script>

<script>
    const buttons = document.querySelectorAll('[data-add-collection-widget]');
    if (buttons.length > 0) {
        buttons.forEach(button => {
            button.addEventListener('click', e => {
                const list = document.querySelector(button.getAttribute('data-list-selector'))

                let counter = list.getAttribute('data-widget-counter') || list.children.length
                let widget = list.getAttribute('data-prototype');
                widget = widget.replace(/__name__/g, counter);
                counter++
                list.setAttribute('data-widget-counter', counter);

                const element = document.createElement(list.getAttribute('data-widget-tag'))
                element.innerHTML = widget;
                list.appendChild(element);
            })
        })
    }
</script>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "candidat/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  331 => 133,  322 => 127,  310 => 117,  304 => 116,  301 => 115,  293 => 113,  288 => 112,  283 => 110,  278 => 108,  273 => 106,  262 => 97,  256 => 96,  253 => 95,  245 => 93,  240 => 92,  235 => 90,  230 => 88,  225 => 86,  213 => 76,  207 => 75,  204 => 74,  196 => 72,  191 => 71,  186 => 69,  181 => 67,  176 => 65,  165 => 56,  159 => 55,  156 => 54,  148 => 52,  143 => 51,  138 => 49,  133 => 47,  128 => 45,  121 => 41,  117 => 40,  113 => 39,  109 => 38,  103 => 35,  99 => 34,  95 => 33,  91 => 32,  85 => 29,  81 => 28,  77 => 27,  73 => 26,  68 => 24,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>Connexion - État de droit </title>

    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\">
    <link rel=\"stylesheet\" href=\"/assets/vendor/nucleo/css/nucleo.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"/assets/css/argon.min.css?v=1.2.0\" type=\"text/css\">
</head>

<body class=\"bg-default\">
<div class=\"main-content\">
    <div class=\"container pb-5 mt-5\">
        <div class=\"row justify-content-center\">
            <div class=\"card bg-secondary border-0 mb-0\">
                <div class=\"card-body px-lg-5 py-lg-5\">
                    <h1 class=\"text-center mb-4\">
                        Fiche de candidature en Ligne
                    </h1>

                    {{ form_start(form) }}
                    <div class=\"row\">
                        <div class=\"col-lg-3\">{{ form_row(form.nom) }}</div>
                        <div class=\"col-lg-3\">{{ form_row(form.postnom) }}</div>
                        <div class=\"col-lg-3\">{{ form_row(form.prenom) }}</div>
                        <div class=\"col-lg-3\">{{ form_row(form.etat_civil) }}</div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-12\">{{ form_row(form.sexe) }}</div>
                        <div class=\"col-lg-6\">{{ form_row(form.date_naissance) }}</div>
                        <div class=\"col-lg-3\">{{ form_row(form.province_origine) }}</div>
                        <div class=\"col-lg-3\">{{ form_row(form.lieu_naissance) }}</div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-4\">{{ form_row(form.adresse) }}</div>
                        <div class=\"col-lg-4\">{{ form_row(form.nationalite) }}</div>
                        <div class=\"col-lg-4\">{{ form_row(form.photo_file) }}</div>
                        <div class=\"col-12\">{{ form_row(form.telephone) }}</div>
                    </div>
                    <div class=\"row mb-4\">
                        <div class=\"col-12\">
                            {{ form_label(form.etudes_faites) }}
                            <ol id=\"etudes-fields-list\"
                                data-prototype=\"{{ form_widget(form.etudes_faites.vars.prototype)|e }}\"
                                data-widget-tag=\"li\"
                                data-widget-counter=\"{{ form.etudes_faites|length }}\"
                            >
                                {% for e in form.etudes_faites %}
                                    <li>{{ form_widget(e) }}</li>
                                {% else %}
                                    {% do form.etudes_faites.setRendered %}
                                {% endfor %}
                            </ol>
                        </div>
                        <div class=\"col-md-12\">
                            <span role=\"button\" data-list-selector=\"#etudes-fields-list\" class=\"btn btn-primary\" data-add-collection-widget>
                                Ajouter une etudes faite
                            </span>
                        </div>

                        <div class=\"col-12\">
                            {{ form_label(form.connaissance_informatique) }}
                            <ol id=\"connaissance-fields-list\"
                                data-prototype=\"{{ form_widget(form.connaissance_informatique.vars.prototype)|e }}\"
                                data-widget-tag=\"li\"
                                data-widget-counter=\"{{ form.connaissance_informatique|length }}\"
                            >
                                {% for e in form.connaissance_informatique %}
                                    <li>{{ form_widget(e) }}</li>
                                {% else %}
                                    {% do form.connaissance_informatique.setRendered %}
                                {% endfor %}
                            </ol>
                        </div>
                        <div class=\"col-md-12\">
                            <span role=\"button\" data-list-selector=\"#connaissance-fields-list\" class=\"btn btn-primary\" data-add-collection-widget>
                                Ajouter une connaissance informatique
                            </span>
                        </div>


                        <div class=\"col-12\">
                            {{ form_label(form.experiences_professionnelles) }}
                            <ol id=\"experiences-fields-list\"
                                data-prototype=\"{{ form_widget(form.experiences_professionnelles.vars.prototype)|e }}\"
                                data-widget-tag=\"li\"
                                data-widget-counter=\"{{ form.experiences_professionnelles|length }}\"
                            >
                                {% for e in form.experiences_professionnelles %}
                                    <li>{{ form_widget(e) }}</li>
                                {% else %}
                                    {% do form.experiences_professionnelles.setRendered %}
                                {% endfor %}
                            </ol>
                        </div>
                        <div class=\"col-md-12\">
                            <span role=\"button\" data-list-selector=\"#experiences-fields-list\" class=\"btn btn-primary\" data-add-collection-widget>
                                Ajouter une experience professionnelle
                            </span>
                        </div>

                        <div class=\"col-12\">
                            {{ form_label(form.personnes_references) }}
                            <ol id=\"personnes-fields-list\"
                                data-prototype=\"{{ form_widget(form.personnes_references.vars.prototype)|e }}\"
                                data-widget-tag=\"li\"
                                data-widget-counter=\"{{ form.personnes_references|length }}\"
                            >
                                {% for e in form.personnes_references %}
                                    <li>{{ form_widget(e) }}</li>
                                {% else %}
                                    {% do form.personnes_references.setRendered %}
                                {% endfor %}
                            </ol>
                        </div>
                        <div class=\"col-md-12\">
                            <span role=\"button\" data-list-selector=\"#personnes-fields-list\" class=\"btn btn-primary\" data-add-collection-widget>
                                Ajouter une personne de reference
                            </span>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-12\">{{ form_row(form.langues) }}</div>
                    </div>

                    <div class=\"row\">
                        <button type=\"submit\" class=\"btn btn-primary btn-block\">Envoyer</button>
                    </div>
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
</div>

<script src=\"/assets/vendor/jquery/dist/jquery.min.js\"></script>
<script src=\"/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js\"></script>
<script src=\"/assets/vendor/js-cookie/js.cookie.js\"></script>
<script src=\"/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js\"></script>
<script src=\"/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js\"></script>
<script src=\"/assets/js/argon.min.js?v=1.2.0\"></script>

<script>
    const buttons = document.querySelectorAll('[data-add-collection-widget]');
    if (buttons.length > 0) {
        buttons.forEach(button => {
            button.addEventListener('click', e => {
                const list = document.querySelector(button.getAttribute('data-list-selector'))

                let counter = list.getAttribute('data-widget-counter') || list.children.length
                let widget = list.getAttribute('data-prototype');
                widget = widget.replace(/__name__/g, counter);
                counter++
                list.setAttribute('data-widget-counter', counter);

                const element = document.createElement(list.getAttribute('data-widget-tag'))
                element.innerHTML = widget;
                list.appendChild(element);
            })
        })
    }
</script>
</body>
</html>
", "candidat/index.html.twig", "/Users/arnolddev/etat-de-droit/templates/candidat/index.html.twig");
    }
}
