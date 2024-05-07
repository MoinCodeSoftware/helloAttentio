# SayHello: Greeting Extension für TYPO3

Liebes Attentio-Team,

ich freue mich, mich für die ausgeschriebene Stelle als Web Developer zu bewerben. Diese kleine Extension wurde speziell für euch entwickelt und dient als Veranschaulichung, was selbst ohne offizielle Zertifizierung und in kurzer Zeit machbar ist, wenn man über langjährige Erfahrung verfügt.

Die Greeting Extension fügt eine freundliche Begrüßungsnachricht basierend auf der Tageszeit in den Footer einer TYPO3-Website ein.

Einen angenehmen Tag euch noch!

## Funktionen

- Zeigt eine Begrüßungsnachricht basierend auf der Tageszeit an:
  - Guten Morgen (vor 12 Uhr)
  - Guten Tag (von 12 bis 18 Uhr)
  - Guten Abend (nach 18 Uhr)
- Einfach zu installieren und zu konfigurieren

## Installation

1. Lade die Extension in dein TYPO3-System hoch.
2. Aktiviere die Extension im TYPO3-Backend.
3. Füge die folgende Typoscript-Zeile in dein Template ein:

```typoscript
lib.footerContent = USER
lib.footerContent {
    userFunc = TYPO3\CMS\Extbase\Core\Bootstrap->run
    extensionName = HelloMoincode
    pluginName = Greeting
    switchableControllerActions {
        Greeting {
            1 = show
        }
    }
}
