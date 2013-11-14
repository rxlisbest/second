<?php

/* ShandongOperaBundle:Default:index.html.twig */
class __TwigTemplate_dbbf5b519d301bb3b20438ebd801b4a157e76c65aed3f9a17b8dddd85aade953 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.01//EN\"
   \"http://www.w3.org/TR/html4/strict.dtd\">

<html lang=\"en\">
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
    <title>Blueprint test pages</title>

    <!-- Framework CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/shandongopera/css/screen.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/shandongopera/css/print.css"), "html", null, true);
        echo "\" />

    <!--[if lt IE 8]><link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/shandongopera/css/ie.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen, projection\"><![endif]-->
    <style type=\"text/css\" media=\"screen\">
      p, table, hr, .box { margin-bottom:25px; }
      .box p { margin-bottom:10px; }
    </style>
  </head>
  <body>

    <div class=\"container\">
      <h1>Blueprint test pages</h1>
      <hr>

      <p>Welcome to the Blueprint test pages. The HTML files below test most HTML elements, as well as most classes provided by Blueprint.</p>

      <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
        <caption>Blueprint core tests</caption>
        <thead>
          <tr>
            <th class=\"span-6\">Test page</th>
            <th class=\"span-8\">Main files tested</th>
            <th class=\"span-10\">Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><a href=\"parts/sample.html\">Sample page</a></td>
            <td>
              <a href=\"../blueprint/src/grid.css\">grid.css</a>,
              <a href=\"../blueprint/src/typography.css\">typography.css</a>
            </td>
            <td>A simple sample page, with common elements.</td>
          </tr>
          <tr class=\"even\">
            <td><a href=\"parts/grid.html\">Grid</a></td>
            <td>
              <a href=\"../blueprint/src/grid.css\">grid.css</a>
            </td>
            <td>Tests classes provided by grid.css.</td>
          </tr>
          <tr>
            <td><a href=\"parts/elements.html\">Typography</a></td>
            <td>
              <a href=\"../blueprint/src/typography.css\">typography.css</a>
            </td>
            <td>Tests HTML elements which gets set in typography.css.</td>
          </tr>
          <tr class=\"even\">
            <td><a href=\"parts/forms.html\">Forms</a></td>
            <td>
              <a href=\"../blueprint/src/forms.css\">forms.css</a>
            </td>
            <td>Tests classes and default look provided by forms.css.</td>
          </tr>
        </tbody>
      </table>

      <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
        <caption>Blueprint plugin tests</caption>
        <thead>
          <tr>
            <th class=\"span-6\">Test page</th>
            <th class=\"span-8\">Main files tested</th>
            <th class=\"span-10\">Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><a href=\"parts/plugins/link-icons.html\">Link icons</a></td>
            <td>
              <a href=\"../blueprint/plugins/link-icons/screen.css\">link-icons/screen.css</a>
            </td>
            <td>Shows the different links the <em>link-icons</em> plugin supports.</td>
          </tr>
        </tbody>
      </table>

      <p><em><strong>Note about the compressed versions:</strong></em>
      These test files utilize the compressed files. In other words, if you change any of the source files,
      you'll have to re-compress them with the ruby script in the scripts folder to see any&nbsp;changes.</p>

      <div class=\"box\">
        <p>For more information and help, try these resources:</p>
        <ul class=\"bottom\">
          <li><a href=\"http://blueprintcss.org\">The Blueprint home page</a></li>
          <li><a href=\"http://github.com/joshuaclayton/blueprint-css/wikis/home\">The Blueprint Wiki</a></li>
          <li><a href=\"http://groups.google.com/group/blueprintcss\">The Blueprint mailing list</a></li>
        </ul>
      </div>

      <p><a href=\"http://validator.w3.org/check?uri=referer\">
        <img src=\"parts/valid.png\" alt=\"Valid HTML 4.01 Strict\" height=\"31\" width=\"88\" class=\"top\"></a></p>

    </div>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "ShandongOperaBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 13,  34 => 11,  30 => 10,  19 => 1,);
    }
}
