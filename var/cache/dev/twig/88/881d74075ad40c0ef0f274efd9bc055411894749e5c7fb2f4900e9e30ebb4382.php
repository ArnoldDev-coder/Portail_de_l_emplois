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

/* candidat/success.html.twig */
class __TwigTemplate_65b88a11b8c138ba0bb07e6501ababdf806c246349149120ba5cbabb5f327424 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidat/success.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidat/success.html.twig"));

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
            <div class=\"col-lg-5 col-md-7\">
                <div class=\"card bg-secondary border-0 mb-0\">
                    <div class=\"card-body px-lg-5 py-lg-5\">
                        <div class=\"text-center text-muted mb-4\">
                            Merci beaucoup
                            Monsieur/Madame ";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 23, $this->source); })()), "html", null, true);
        echo " pour avoir postulé.
                            Nous vous rassurons que nous avons reçu votre dossier. Nous allons vous contacter
                            ultérieurement si vous répondez aux profils
                        </div>
                    </div>
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
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "candidat/success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 23,  43 => 1,);
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
            <div class=\"col-lg-5 col-md-7\">
                <div class=\"card bg-secondary border-0 mb-0\">
                    <div class=\"card-body px-lg-5 py-lg-5\">
                        <div class=\"text-center text-muted mb-4\">
                            Merci beaucoup
                            Monsieur/Madame {{ name }} pour avoir postulé.
                            Nous vous rassurons que nous avons reçu votre dossier. Nous allons vous contacter
                            ultérieurement si vous répondez aux profils
                        </div>
                    </div>
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
</body>
</html>
", "candidat/success.html.twig", "C:\\Users\\Arnold Botamba\\etat-de-droit\\templates\\candidat\\success.html.twig");
    }
}
