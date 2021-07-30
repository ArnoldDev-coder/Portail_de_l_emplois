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

/* security/login.html.twig */
class __TwigTemplate_5656cea94e5812bc1977df0256f3fddf80b50f72ede92af9d374d03b4f263465 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

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
                            État de droit connexion - administrateur
                        </div>
                        <form role=\"form\" action=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" method=\"post\">
                            ";
        // line 25
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 25, $this->source); })())) {
            // line 26
            echo "                                <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 26, $this->source); })()), "messageKey", [], "any", false, false, false, 26), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 26, $this->source); })()), "messageData", [], "any", false, false, false, 26), "security"), "html", null, true);
            echo "</div>
                            ";
        }
        // line 28
        echo "                            <div class=\"form-group mb-3\">
                                <div class=\"input-group input-group-merge input-group-alternative\">
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\"><i class=\"ni ni-email-83\"></i></span>
                                    </div>
                                    <input class=\"form-control\" placeholder=\"Email\" type=\"email\" name=\"email\"
                                           value=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "\">
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"input-group input-group-merge input-group-alternative\">
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\"><i class=\"ni ni-lock-circle-open\"></i></span>
                                    </div>
                                    <input class=\"form-control\" placeholder=\"Password\" type=\"password\" name=\"password\">
                                </div>
                            </div>
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                            <div class=\"text-center\">
                                <button type=\"submit\" class=\"btn btn-primary my-4\">Connexion</button>
                            </div>
                        </form>
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
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 45,  88 => 34,  80 => 28,  74 => 26,  72 => 25,  68 => 24,  43 => 1,);
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
                            État de droit connexion - administrateur
                        </div>
                        <form role=\"form\" action=\"{{ path('app_login') }}\" method=\"post\">
                            {% if error %}
                                <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                            {% endif %}
                            <div class=\"form-group mb-3\">
                                <div class=\"input-group input-group-merge input-group-alternative\">
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\"><i class=\"ni ni-email-83\"></i></span>
                                    </div>
                                    <input class=\"form-control\" placeholder=\"Email\" type=\"email\" name=\"email\"
                                           value=\"{{ last_username }}\">
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"input-group input-group-merge input-group-alternative\">
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\"><i class=\"ni ni-lock-circle-open\"></i></span>
                                    </div>
                                    <input class=\"form-control\" placeholder=\"Password\" type=\"password\" name=\"password\">
                                </div>
                            </div>
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                            <div class=\"text-center\">
                                <button type=\"submit\" class=\"btn btn-primary my-4\">Connexion</button>
                            </div>
                        </form>
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
", "security/login.html.twig", "C:\\Users\\Arnold Botamba\\etat-de-droit\\templates\\security\\login.html.twig");
    }
}
