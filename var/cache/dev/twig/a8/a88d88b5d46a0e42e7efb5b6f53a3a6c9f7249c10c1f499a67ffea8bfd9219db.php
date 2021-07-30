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

/* base.html.twig */
class __TwigTemplate_a92ebfd3ee5143a01f86d1948611e3f3e8760e3a1c73405c2731c06039202abd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, false, 2), "locale", [], "any", false, false, false, 2), "html", null, true);
        echo "\">
<head>
    <meta charset=\"UTF-8\">
    <meta content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" name=\"viewport\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\">
    <link rel=\"stylesheet\" href=\"/assets/vendor/nucleo/css/nucleo.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"/assets/css/argon.min.css?v=1.2.0\" type=\"text/css\">
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "</head>
<body>
<nav class=\"navbar navbar-vertical fixed-left navbar-expand-md\" id=\"sidenav-main\">
    <div class=\"container-fluid\">
        <button aria-controls=\"sidenav-main\"
                aria-expanded=\"false\"
                aria-label=\"Toggle navigation\"
                class=\"navbar-toggler\"
                data-target=\"#sidenav-collapse-main\"
                data-toggle=\"collapse\"
                type=\"button\"
        >
            <span class=\"navbar-toggler-icon fa fa-align-justify\"></span>
        </button>
        <a class=\"text-white navbar-brand \" href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">
            ÉTAT DE DROIT
        </a>

        <div class=\"collapse navbar-collapse bg-default\" id=\"sidenav-collapse-main\">
            <div class=\"navbar-collapse-header d-md-none\">
                <div class=\"row\">
                    <div class=\"col-6 collapse-brand\">
                        <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" class=\"text-white font-weight-bold\">
                            ÉTAT DE DROIT
                        </a>
                    </div>
                    <div class=\"col-6 collapse-close\">
                        <button aria-controls=\"sidenav-main\"
                                aria-expanded=\"false\"
                                aria-label=\"Toggle sidenav\"
                                class=\"navbar-toggler\"
                                data-target=\"#sidenav-collapse-main\"
                                data-toggle=\"collapse\"
                                type=\"button\"
                        >
                            <span class=\"bg-white\"></span>
                            <span class=\"bg-white\"></span>
                        </button>
                    </div>
                </div>
            </div>

            <ul class=\"navbar-nav\">
                <li class=\"nav-item\">
                    <a class=\"text-white nav-link\" href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_candidat_index");
        echo "\" style=\"color: #fff !important;\">
                        <i class=\"fa fa-users\" aria-hidden=\"true\"></i>
                        Candidatures
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class=\"main-content\">
    ";
        // line 68
        $this->displayBlock('body', $context, $blocks);
        // line 69
        echo "</div>
<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"
        integrity=\"sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=\"
        crossorigin=\"anonymous\"
></script>

<script src=\"/assets/vendor/jquery/dist/jquery.min.js\"></script>
<script src=\"/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js\"></script>
<script src=\"/assets/vendor/js-cookie/js.cookie.js\"></script>
<script src=\"/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js\"></script>
<script src=\"/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js\"></script>
<script src=\"/assets/js/argon.min.js?v=1.2.0\"></script>
";
        // line 81
        $this->displayBlock('javascripts', $context, $blocks);
        // line 82
        echo "</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 68
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 81
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 81,  200 => 68,  182 => 12,  164 => 6,  152 => 82,  150 => 81,  136 => 69,  134 => 68,  120 => 57,  95 => 35,  84 => 27,  68 => 13,  66 => 12,  57 => 6,  50 => 2,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"{{ app.request.locale }}\">
<head>
    <meta charset=\"UTF-8\">
    <meta content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" name=\"viewport\">
    <title>{% block title %}{% endblock %}</title>

    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\">
    <link rel=\"stylesheet\" href=\"/assets/vendor/nucleo/css/nucleo.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"/assets/css/argon.min.css?v=1.2.0\" type=\"text/css\">
    {% block stylesheets %}{% endblock %}
</head>
<body>
<nav class=\"navbar navbar-vertical fixed-left navbar-expand-md\" id=\"sidenav-main\">
    <div class=\"container-fluid\">
        <button aria-controls=\"sidenav-main\"
                aria-expanded=\"false\"
                aria-label=\"Toggle navigation\"
                class=\"navbar-toggler\"
                data-target=\"#sidenav-collapse-main\"
                data-toggle=\"collapse\"
                type=\"button\"
        >
            <span class=\"navbar-toggler-icon fa fa-align-justify\"></span>
        </button>
        <a class=\"text-white navbar-brand \" href=\"{{ path('app_home') }}\">
            ÉTAT DE DROIT
        </a>

        <div class=\"collapse navbar-collapse bg-default\" id=\"sidenav-collapse-main\">
            <div class=\"navbar-collapse-header d-md-none\">
                <div class=\"row\">
                    <div class=\"col-6 collapse-brand\">
                        <a href=\"{{ path('app_home') }}\" class=\"text-white font-weight-bold\">
                            ÉTAT DE DROIT
                        </a>
                    </div>
                    <div class=\"col-6 collapse-close\">
                        <button aria-controls=\"sidenav-main\"
                                aria-expanded=\"false\"
                                aria-label=\"Toggle sidenav\"
                                class=\"navbar-toggler\"
                                data-target=\"#sidenav-collapse-main\"
                                data-toggle=\"collapse\"
                                type=\"button\"
                        >
                            <span class=\"bg-white\"></span>
                            <span class=\"bg-white\"></span>
                        </button>
                    </div>
                </div>
            </div>

            <ul class=\"navbar-nav\">
                <li class=\"nav-item\">
                    <a class=\"text-white nav-link\" href=\"{{ path('admin_candidat_index') }}\" style=\"color: #fff !important;\">
                        <i class=\"fa fa-users\" aria-hidden=\"true\"></i>
                        Candidatures
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class=\"main-content\">
    {% block body %}{% endblock %}
</div>
<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"
        integrity=\"sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=\"
        crossorigin=\"anonymous\"
></script>

<script src=\"/assets/vendor/jquery/dist/jquery.min.js\"></script>
<script src=\"/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js\"></script>
<script src=\"/assets/vendor/js-cookie/js.cookie.js\"></script>
<script src=\"/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js\"></script>
<script src=\"/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js\"></script>
<script src=\"/assets/js/argon.min.js?v=1.2.0\"></script>
{% block javascripts %}{% endblock %}
</body>
</html>
", "base.html.twig", "C:\\Users\\Arnold Botamba\\etat-de-droit\\templates\\base.html.twig");
    }
}
