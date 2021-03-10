<?php

/* email/contact.html.twig */
class __TwigTemplate_9527904ded676584158bb32190989e957ce947945b24f978c96b71908841410c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "email/contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "email/contact.html.twig"));

        // line 1
        echo "<mjml>
  <mj-body>
    <mj-section>
      <mj-column>

        <mj-image width=\"200\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("src/logo.png"), "html", null, true);
        echo "\"></mj-image>

        <mj-divider border-color=\"#651FFF\"></mj-divider>

        <mj-text font-size=\"20px\" color=\"#651FFF\" font-family=\"helvetica\"> <tr>
        <td>Nom</td>
        <td> ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new Twig_Error_Runtime('Variable "contact" does not exist.', 12, $this->source); })()), "name", array()), "html", null, true);
        echo " </td></tr> </mj-text>
        <mj-text font-size=\"20px\" color=\"#651FFF\" font-family=\"helvetica\"> <tr>
        <td>Prénom</td>
        <td> ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new Twig_Error_Runtime('Variable "contact" does not exist.', 15, $this->source); })()), "prenom", array()), "html", null, true);
        echo " </td></tr> </mj-text>
        <mj-text font-size=\"20px\" color=\"#651FFF\" font-family=\"helvetica\"> <tr>
        <td>Objet</td>
        <td> ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new Twig_Error_Runtime('Variable "contact" does not exist.', 18, $this->source); })()), "object", array()), "html", null, true);
        echo " </td></tr> </mj-text>
        <mj-text font-size=\"20px\" color=\"#651FFF\" font-family=\"helvetica\"> <tr>
        <td>Message</td>
        <td> ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new Twig_Error_Runtime('Variable "contact" does not exist.', 21, $this->source); })()), "message", array()), "html", null, true);
        echo " </td></tr> </mj-text>
        <mj-text font-size=\"20px\" color=\"#651FFF\" font-family=\"helvetica\"> <tr>
        <td>Mail</td>
        <td> ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new Twig_Error_Runtime('Variable "contact" does not exist.', 24, $this->source); })()), "mail", array()), "html", null, true);
        echo " </td></tr> </mj-text>
        
       
      </mj-column>
    </mj-section>
  </mj-body>
</mjml>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "email/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 24,  63 => 21,  57 => 18,  51 => 15,  45 => 12,  36 => 6,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<mjml>
  <mj-body>
    <mj-section>
      <mj-column>

        <mj-image width=\"200\" src=\"{{ asset('src/logo.png')}}\"></mj-image>

        <mj-divider border-color=\"#651FFF\"></mj-divider>

        <mj-text font-size=\"20px\" color=\"#651FFF\" font-family=\"helvetica\"> <tr>
        <td>Nom</td>
        <td> {{contact.name}} </td></tr> </mj-text>
        <mj-text font-size=\"20px\" color=\"#651FFF\" font-family=\"helvetica\"> <tr>
        <td>Prénom</td>
        <td> {{contact.prenom}} </td></tr> </mj-text>
        <mj-text font-size=\"20px\" color=\"#651FFF\" font-family=\"helvetica\"> <tr>
        <td>Objet</td>
        <td> {{contact.object}} </td></tr> </mj-text>
        <mj-text font-size=\"20px\" color=\"#651FFF\" font-family=\"helvetica\"> <tr>
        <td>Message</td>
        <td> {{contact.message}} </td></tr> </mj-text>
        <mj-text font-size=\"20px\" color=\"#651FFF\" font-family=\"helvetica\"> <tr>
        <td>Mail</td>
        <td> {{contact.mail}} </td></tr> </mj-text>
        
       
      </mj-column>
    </mj-section>
  </mj-body>
</mjml>", "email/contact.html.twig", "/home/leo-paul/Documents/DoctoAsk/templates/email/contact.html.twig");
    }
}
