# Greeting Extension für TYPO3

Die Greeting Extension fügt eine freundliche Begrüßungsnachricht basierend auf der Tageszeit in den Footer einer TYPO3-Website ein.

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
