contao-efg-unique-od
====================

tl_form erhält eine neue Spalte uniqueid, welches jedes mal bei absenden des (efg-)Formulars den Counter um einen erhöht.

Es muss im Formular eine formId (Experteneinstellungen) gesetzt sein

Für einen Insert-Tag wird im entsprechenden Formular das versteckte Feld: uniqueid (Standardinput erlaubt) benötigt und kann dann wie gewohnt über {{form::uniqueid}} verwendet werden.
