@php
    if (isset($_COOKIE["tih-cookie-consent"])) {
        $heroine_content = "kein Verbrechen.";
    } else {
        $heroine_content = "";
    }
@endphp
<x-layout-wrapper>
    <x-content-section class="tih-landing-section min-h-screen" id="intro">
        <h1 class="fullwidth">Aktivismus ist {{$heroine_content}}<span></span></h1>
        <p class="sm"><span class="text-white">Mit der <em>«Anti-Chaot:innen Initiative»</em> fordert die SVP eine Bewilligungspflicht für alle öffentlichen Kundgebungen und Demonstrationen. Außerdem sollen die Kosten für sogenannte “ausserordentliche Polizeieinsätze” zwingend auf deren Verursacher*innen abgewälzt werden.</span> <b>Diese Forderungen sind nicht nur ein Angriff auf unsere demokratischen Grundrechte und eine Kriminalisierung von zivilgesellschaftlichem Engagement, es ist auch ein Ausbau der Polizeiwillkür.</b></p>
        <span class="tih-proceed-button"><span class="material-symbols-outlined">expand_more</span></span>
    </x-content-section>
    <x-navbar/>
    <x-content-section id="darum-gehts">
        <p>Demoverbote, Polizeirepression, Bussen bei der Critical Mass, horrende Kosten für Klimaaktivist*innen und Waldbesetzer*innen – In der ganzen Schweiz und auch im Kanton Zürich ist seit einiger Zeit eine Zunahme der staatlichen Repression und verstärkte Kriminalisierung von Aktivismus zu beobachten.
        <p><b>Exemplarisch für diese Entwicklung ist die sogenannte “Anti-Chaoten-Initiative” der SVP, über welche die Stimmbevölkerung des Kantons Zürich am 3. März 2024 abstimmen wird.</b></p>
        <x-event-alert/>
        <p>Die Initiative fordert eine Bewilligungspflicht für jegliche öffentlichen Kundgebungen und Demonstrationen, sowie die zwingende Abwälzung von Kosten auf die Verursacher:innen von sogenannten "ausserordentlichen Polizeieinsätzen”. Der Gegenvorschlag der rechtskonservativen Mehrheit des Kantonsrates unterscheidet sich inhaltlich kaum von der Initiative und verfolgt im Wesentlichen die gleichen Ziele: Die Kriminalisierung und Einschüchterung von Aktivist*innen, Demonstrationen und Aktionsformen, deren Inhalte den herrschenden bürgerlichen Mehrheiten nicht genehm sind.</p>
        <p><b>Eine Annahme der SVP-Initiative könnte zur Folge haben, dass Organisator*innen und Teilnehmer*innen von Demonstrationen plötzlich mit horrenden Kosten für einen Polizeieinsatz konfrontiert sind.</b></p>
        <p>Angesichts der bisher unkritischen Berichterstattung und rechte Stimmungsmache haben diese Vorlagen aktuell hohe Erfolgschancen – die Folgen davon wären verheerend. <em>Wir als Bündnis gegen Repression sind der Meinung, dass wir gegen die diversen Entwicklungen der verstärkten staatlichen Repression gegen Aktivist*innen organisiert vorgehen müssen, statt tatenlos zuzusehen, wie (linker) Aktivismus kriminalisiert und das Grundrecht auf Versammlungsfreiheit im Kanton Zürich ausgehöhlt wird.</em></p>
    </x-content-section>
    <x-content-section class="bg-accent" id="unsere-argumente">
        <h2 class="text-background fullwidth">Unsere Argumente.</h2>
        <x-toggle title="Keine Kriminalisierung von Aktivismus!">
            <p>Die“Anti-Chaot:innen-Initiative” (ACI) reiht sich ein in eine Reihe von bedrohlichen Entwicklungen in ganz Europa ein, die bezwecken, die Rechte von Aktivist:innen einzuschränken. Die ACI geht dabei noch weiter und könnte Aktivismus künftig nahezu verunmöglichen: Durch drohende Bussgelder und die Überwälzung von hohen Kosten für Polizeieinsätze sollen Aktivismus sowie zivilgesellschaftliches Engagement kriminalisiert werden.  Damit sollen Menschen davon abgehalten werden, sich auf der Strasse für ihre Anliegen und gegen den Status Quo einzusetzen. Diese Entwicklung ist gewollt: Denn es ist im Interesse der Mächtigen, kritische Stimmen zum Verstummen zu bringen.</p>
        </x-toggle>
        <x-toggle title="Kein Ausbau der Polizweiwillkür!">
            <p>Die SVP-Initiative und der Gegenvorschlag verwenden Begriffe wie “illegale Demonstrationen” und sprechen auch von Kosten für einen “ausserordentlichen Polizeieinsatz” bei Kundgebungen. Diese Begriffe sind gesetzlich nicht geregelt, somit schaffen diese Vorlagen die Grundlage für eine enorme Polizeiwillkür. Entsprechend müssen Aktivist:innen und Demonstrierende bei jeglichen öffentlichen Kundgebungen mit erheblichen Kosten rechnen. Oftmals fährt die Polizei an Demos und öffentlichen Kundgebungen mit einem massiven Aufgebot auf. Solche unverhältnismässigen Einsätze verursachen hohe Kosten. Für jene völlig übertriebenen Polizeieinsätze sollen künftig die Aktivist:innen aufkommen.</p>
        </x-toggle>
        <x-toggle title="NEIN zur Zementierung der Bewilligungspflicht!">
            <p>Eine weitere Forderung der Initiative ist, dass eine generelle Bewilligungspflicht für Demonstrationen und Kundgebungen im kantonalen Gesetz festgeschrieben wird. Dies, um einem Vorhaben der Stadt Zürich vorzukommen, die Bewilligungspflicht abzuschaffen. Eine Bewilligungspflicht ist nämlich eine unfaire Hürde für unser Recht zu demonstrieren. Der Staat soll nicht vorschreiben dürfen, wann, wie, wo und zu was, wir auf die Strasse gehen. Die bisherige und ungerechtfertigte Kriminalisierung von selbstbestimmten Demonstrationen wie jener zum feministischen Kampftag vom 8. März soll nun aber durch die Initiative zementiert werden. </p>
        </x-toggle>
        <x-toggle title="Die «Chaot:innen» sind wir alle.">
            <p>Ob das Grosi beim Klimastreik, die Aktivistin am feministischen Streik, antirassistische Aktivist*innen an der BLM-Demo, oder die Pflegenden beim Lohnstreik. Wir alle setzen uns immer wieder aus unterschiedlichsten Gründen auf der Strasse für Veränderung und gegen den Status-Quo ein. Sich öffentlich für eine gerechtere Welt einzusetzen, ist nicht ein Privileg von wenigen, sondern ein Recht für alle. Und überhaupt: Wer sind denn diese Chaot:innen? Es sind ganz einfach Menschen, die den Status Quo in Frage stellen und sich für gesellschaftliche Verbesserungen einsetzen.</p>
        </x-toggle>
        <x-toggle title="Ohne Chaot:innen, kein Fortschritt!">
            <p>Ob  Frauenstimmrecht, der 8-Stunden-Tag oder Kulturräume wie die rote Fabrik: Bedeutende soziale Errungenschaften wurden auf der Strasse, durch öffentlichen Druck und Aktivismus erkämpft. Dies erfolgte in aller Regel durch Druck aus der Strasse, durch Aktivist*innen, die sich mit  lauten, provokativen Aktionen Gehör verschaffen konnten. Aktivist:innen, die den Status Quo verändern wollten, wurden daher seit jeher als “Chaot:innen” diskreditiert. Zahlreiche Forderungen, die damals von angeblichen radikalen Chaoten stammten, sind heute Errungenschaften, die wir für selbstverständlich halten. Reaktionäre Kräfte haben immer schon jeglichen gesellschaftlichen Fortschritt mit dem Vorwurf der angeblichen “Chaot:innen” bekämpft und damit sozialen Kämpfen ihre Legitimation abgesprochen. Ohne Chaot:innen hätten wir wohl noch immer eine 60-Stunden-Woche, keine AHV oder sonstige Sozialwerke.</p>
        </x-toggle>
    </x-content-section>
    <x-content-section id="was-geht-mich-das-an">
        <h2 class="full-width">Was geht mich das an?</h2>
        <p><b>Der Angriff auf die Demonstrationsfreiheit betrifft uns alle.</b> Wir, die für eine bessere Zukunft kämpfen, die Widerstand leisten, die engagiert im Klassenkampf sind. Denn für eine lebenswerte Zukunft zu kämpfen bedeutet, sich gegen die herrschende Klasse zu wehren. Indem wir ändern wollen, was uns stört, werden wir für die Mächtigen zur Bedrohung. Dadurch werden wir alle zu Chaot:innen.</p>
    </x-content-section>
    <x-content-section class="bg-accent" id="hilf-mit">
        <h2 class="full-width text-background">Wir brauchen deine Hilfe.</h2>
        <p>Wir wollen die Initiative und den Gegenvorschlag der SVP bekämpfen und die Bevölkerung über die Gefahren dieser Vorlagen aufklären. Dafür brauchen wir deine Unterstützung. Hilf mit, die Initiative zu bekämpfen und die Bevölkerung über die Gefahren dieser Vorlagen aufzuklären.</p>
        <x-donation-bar />
        <x-toggle title="Jetzt Spenden" class="mt-6 !bg-white">
            <div class="w-full flex justify-center">
                <div class="dds-widget-container mt-6" data-widget="lema"></div>
            </div>
            <p class="!text-sm mt-3"><em>Deine Spende wird über das Konto der JUSO Kanton Zürich abgerechnet, kommt aber vollumfänglich dem Bündnis gegen Repression zugute.</em></p>
        </x-toggle>
        <x-toggle title="Bilder teilen" class="mt-6 !bg-white">
            <p>Lade hier unsere Bilder herunter und teile Sie auf deinen sozialen Medien!</p>
            <div class="tih-downloadables-grid">
                <div class="tih-downloadable">
                    <a href="/assets/img/downloadables/Alle.zip" download="Instagram Post_Wir alle sind Chaot_innen.zip">
                        <img src="/assets/img/downloadables/Alle_DEF_Front.png" alt="Frontimage Post «Wir alle sind Chaot*innen»" loading="lazy">
                        <p>Instagram Post: «Die Chaot:innen sind wir alle»</p>
                    </a>
                </div>
                <div class="tih-downloadable">
                    <a href="/assets/img/downloadables/Bewilligungspflicht.zip" download="Instagram Post_Zementierung der Bewilligungspflicht.zip">
                        <img src="/assets/img/downloadables/Bewilligungspflicht_DEF_Front.png" alt="Frontimage Post «Zementierung der Bewilligungspflicht»" loading="lazy">
                        <p>Instagram Post: «Zementierung der Bewilligungspflicht»</p>
                    </a>
                </div>
                <div class="tih-downloadable">
                    <a href="/assets/img/downloadables/Fortschritt.zip" download="Instagram Post_Ohne Chaot_innen kein Fortschritt.zip">
                        <img src="/assets/img/downloadables/Fortschritt_DEF_Front.png" alt="Frontimage Post «Ohne Chaot:innen kein Fortschritt!»" loading="lazy">
                        <p>Instagram Post: «Ohne Chaot:innen kein Fortschritt!»</p>
                    </a>
                </div>
                <div class="tih-downloadable">
                    <a href="/assets/img/downloadables/Kriminalisierung.zip" download="Instagram Post_Kriminalisierung von Aktivismus.zip">
                        <img src="/assets/img/downloadables/Kriminalisierung_DEF_Front.png" alt="Frontimage Post «Kriminalisierung von Aktivismus»" loading="lazy">
                        <p>Instagram Post: «Kriminalisierung von Aktivismus»</p>
                    </a>
                </div>
                <div class="tih-downloadable">
                    <a href="/assets/img/downloadables/Polizeiwillkur.zip" download="Instagram Post_Ausbau der Polizeiwillkuer.zip">
                        <img src="/assets/img/downloadables/Polizeiwillkur_DEF_Front.png" alt="Frontimage Post «Ausbau der Polizeiwillkür»" loading="lazy">
                        <p>Instagram Post: «Ausbau der Polizeiwillkür»</p>
                    </a>
                </div>
                <div class="tih-downloadable">
                    <a href="/assets/img/downloadables/Zusammen.zip" download="Instagram Post_Alle zusammen gegen die Anti-Chaot_innen Initiative.zip">
                        <img src="/assets/img/downloadables/Zusammen_DEF_Front.png" alt="Frontimage Post «Alle zusammen gegen die Anti-Chaot:innen Initiative»" loading="lazy">
                        <p>Instagram Post: «Alle zusammen gegen die Anti-Chaot:innen Initiative»</p>
                    </a>
                </div>
                <div class="tih-downloadable">
                    <a href="/assets/img/downloadables/Flyer.zip" download="Flyer_Aktivismus ist kein Verbrechen.zip">
                        <img src="/assets/img/downloadables/Flyer_DEF_Front.png" alt="Frontimage Flyer «Aktivismus ist kein Verbrechen!»" loading="lazy">
                        <p>Flyer: «Aktivismus ist kein Verbrechen!»</p>
                    </a>
                </div>
            </div>
        </x-toggle>

        <script type="text/javascript">
        window.rnwWidget = window.rnwWidget || {};
        window.rnwWidget.configureWidget = window.rnwWidget.configureWidget || [];
        window.rnwWidget.configureWidget.push(function(options) {
            options.defaults['stored_campaign_name'] = 'aci_buendnis';
        });
        </script>
        <script src="https://lema.raisenow.com/widgets/lema/jusok-d372/js/dds-init-widget-de.js"></script>

    </x-content-section>
    <x-content-section id="ueber-uns">
        <h2 class="fullwidth">Wer sind wir?</h2>
        <p>Wir sind eine Gruppe bestehend aus Personen aus verschiedensten linken Organisationen, Bewegungen und Einzelpersonen aus dem Kanton Zürich, die sich Ende 2023 zum “Bündnis gegen Repression” zusammengeschlossen haben.</p>
        <p>Demoverbote, Polizeirepression, Polizeigewalt, Bussen, Verweise, Räumungen und horrende Kosten für Einzelpersonen – die zunehmende staatliche Repression und Kriminalisierung von Aktivismus in der Schweiz und insbesondere auch im Kanton Zürich bereitet uns Sorgen. Wir sind der Meinung, dass wir organisiert und gemeinsam gegen die diversen Entwicklungen der verstärkten staatlichen Repression gegen Aktivist*innen vorgehen müssen, statt tatenlos zuzusehen, wie (linker) Aktivismus kriminalisiert und das Grundrecht auf Versammlungsfreiheit im Kanton Zürich ausgehöhlt wird.</p>
        <p>Einerseits um kurzfristig gegen die Initiativen vom 3. März 2024 vorzugehen und langfristig - wenn der Wille da ist - um gemeinsame, solidarische antiRep Strukturen aufzubauen.</p>
        <h3 class="fullwidth mt-20 mb-8 text-4xl">Kontaktiere uns</h3>
        <p>Über diese Mailadresse <a href="mailto:info@buendnisgegenrepression.ch" class="text-accent underline">info@buendnisgegenrepression.ch</a> kannst du uns erreichen, falls du oder deine Organisation unserem Bündnis beitreten oder sich mit uns vernetzen möchte.</p>

    </x-content-section>
</x-layout-wrapper>
