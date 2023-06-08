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

/* modal/index.html.twig */
class __TwigTemplate_cffce78f51183f9946abd94515aceb10 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<div class=\"modal fade \" id=\"myModal\">
            <div class=\"modal-dialog modal-xl\">
              <div class=\"modal-content\">

                <!-- Modal Header -->
                <div class=\"modal-header\">
                  <h4 class=\"modal-title\">Impressum</h4>
                  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                </div>

                <!-- Modal body -->
                <div class=\"modal-body\">
                  ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["impressum"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["imprint"]) {
            // line 15
            echo "                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["imprint"], "name", [], "any", false, false, false, 15), "html", null, true);
            echo "
                    <p>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["imprint"], "street", [], "any", false, false, false, 16), "html", null, true);
            echo "
                    <br>
                    ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["imprint"], "zip", [], "any", false, false, false, 18), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["imprint"], "city", [], "any", false, false, false, 18), "html", null, true);
            echo "
                     <br>
                    ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["imprint"], "tel", [], "any", false, false, false, 20), "html", null, true);
            echo "
                    <br>
                    <a href=\"mailto:";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["imprint"], "email", [], "any", false, false, false, 22), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["imprint"], "email", [], "any", false, false, false, 22), "html", null, true);
            echo "</a>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imprint'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                </div>
                <header id=\"disclaimer\" class=\"basic-1 bg-imprint\" style=\"color:white !important\">
    <div class=\"container\" >
    <div class=\"imprint\">
<h2>Hinweis gem&auml;&szlig; Online-Streitbeilegungs-Verordnung</h2><p>Nach geltendem Recht sind wir verpflichtet, Verbraucher auf die Existenz der Europ&auml;ischen Online-Streitbeilegungs-Plattform hinzuweisen, die f&uuml;r die Beilegung von Streitigkeiten genutzt werden kann, ohne dass ein Gericht eingeschaltet werden muss. F&uuml;r die Einrichtung der Plattform ist die Europ&auml;ische Kommission zust&auml;ndig. Die Europ&auml;ische Online-Streitbeilegungs-Plattform ist hier zu finden: <a href=\"http://ec.europa.eu/odr\" target=\"_blank\" rel=\"nofollow\">http://ec.europa.eu/odr</a>. Unsere E-Mail lautet: <a href=\"mailto:tiefflieger1981@googlemailcom\">tiefflieger1981@googlemailcom</a></p><p>Wir weisen aber darauf hin, dass wir nicht bereit sind, uns am Streitbeilegungsverfahren im Rahmen der Europ&auml;ischen Online-Streitbeilegungs-Plattform zu beteiligen. Nutzen Sie zur Kontaktaufnahme bitte unsere obige E-Mail und Telefonnummer.</p><br /><br /><h2>Disclaimer – rechtliche Hinweise</h2>
§ 1 Warnhinweis zu Inhalten<br />
Die kostenlosen und frei zugänglichen Inhalte dieser Webseite wurden mit größtmöglicher Sorgfalt erstellt. Der Anbieter dieser Webseite übernimmt jedoch keine Gewähr für die Richtigkeit und Aktualität der bereitgestellten kostenlosen und frei zugänglichen journalistischen Ratgeber und Nachrichten. Namentlich gekennzeichnete Beiträge geben die Meinung des jeweiligen Autors und nicht immer die Meinung des Anbieters wieder. Allein durch den Aufruf der kostenlosen und frei zugänglichen Inhalte kommt keinerlei Vertragsverhältnis zwischen dem Nutzer und dem Anbieter zustande, insoweit fehlt es am Rechtsbindungswillen des Anbieters.<br />
<br />
§ 2 Externe Links<br />
Diese Website enthält Verknüpfungen zu Websites Dritter (\"externe Links\"). Diese Websites unterliegen der Haftung der jeweiligen Betreiber. Der Anbieter hat bei der erstmaligen Verknüpfung der externen Links die fremden Inhalte daraufhin überprüft, ob etwaige Rechtsverstöße bestehen. Zu dem Zeitpunkt waren keine Rechtsverstöße ersichtlich. Der Anbieter hat keinerlei Einfluss auf die aktuelle und zukünftige Gestaltung und auf die Inhalte der verknüpften Seiten. Das Setzen von externen Links bedeutet nicht, dass sich der Anbieter die hinter dem Verweis oder Link liegenden Inhalte zu Eigen macht. Eine ständige Kontrolle der externen Links ist für den Anbieter ohne konkrete Hinweise auf Rechtsverstöße nicht zumutbar. Bei Kenntnis von Rechtsverstößen werden jedoch derartige externe Links unverzüglich gelöscht.<br />
<br />
§ 3 Urheber- und Leistungsschutzrechte<br />
Die auf dieser Website veröffentlichten Inhalte unterliegen dem deutschen Urheber- und Leistungsschutzrecht. Jede vom deutschen Urheber- und Leistungsschutzrecht nicht zugelassene Verwertung bedarf der vorherigen schriftlichen Zustimmung des Anbieters oder jeweiligen Rechteinhabers. Dies gilt insbesondere für Vervielfältigung, Bearbeitung, Übersetzung, Einspeicherung, Verarbeitung bzw. Wiedergabe von Inhalten in Datenbanken oder anderen elektronischen Medien und Systemen. Inhalte und Rechte Dritter sind dabei als solche gekennzeichnet. Die unerlaubte Vervielfältigung oder Weitergabe einzelner Inhalte oder kompletter Seiten ist nicht gestattet und strafbar. Lediglich die Herstellung von Kopien und Downloads für den persönlichen, privaten und nicht kommerziellen Gebrauch ist erlaubt.<br />
<br />
Die Darstellung dieser Website in fremden Frames ist nur mit schriftlicher Erlaubnis zulässig.<br />
<br />
§ 4 Besondere Nutzungsbedingungen<br />
Soweit besondere Bedingungen für einzelne Nutzungen dieser Website von den vorgenannten Paragraphen abweichen, wird an entsprechender Stelle ausdrücklich darauf hingewiesen. In diesem Falle gelten im jeweiligen Einzelfall die besonderen Nutzungsbedingungen.<p>Quelle: <a href=\"https://www.juraforum.de\">Klick hier</a></p>
      </div>    
    </div> <!-- end of container -->
  </header> <!-- end of header -->

                <!-- Modal footer -->
                <div class=\"modal-footer\">
                  <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>
                </div>

              </div>
            </div>
          </div>
          ";
    }

    public function getTemplateName()
    {
        return "modal/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  95 => 24,  85 => 22,  80 => 20,  73 => 18,  68 => 16,  63 => 15,  59 => 14,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modal/index.html.twig", "C:\\wamp64\\www\\rene\\templates\\modal\\index.html.twig");
    }
}
