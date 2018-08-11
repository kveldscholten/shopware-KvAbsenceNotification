# Abwesenheitsmeldung
Durch der Abwesenheitsmeldung kann man ganz einfach im Backend seine Zeit der Abwesenheit (von - bis) und Wiederaufnahme der Paketversendung angeben.

Im Shop wird dann unter der Navigation die Abwesenheitsmeldung dargestellt.
![Frontend Shopansicht mit Abwesenheitsmeldung](/Documentation/kv_absence_notification_index.jpg)

Auf der Artikel Detail Seite wird dem Kunden dargestellt ab wann der Artikel wieder lieferbar ist bzw. ab wann die Pakete wieder versendet werden.
![Frontend Artikel Ansicht mit Abwesenheitsmeldung](/Documentation/kv_absence_notification_detail.jpg)

Nach Abschluss der Bestellung wird der Kunde durch eine Info Alert Message noch mal auf die Abwesenheit hingewiesen.
![Frontend Bestell Abschluss mit Abwesenheitsmeldung](/Documentation/kv_absence_notification_checkout_finish.jpg)

Es ist möglich den Kunden die Abwesenheitsmeldung schon vor Eintritt der Abwesenheit darzustellen durch angebe eines Intervalls.
![Backend Konfiguration der Abwesenheitsmeldung](/Documentation/kv_absence_notification_backend.jpg)

Die Benachrichtigung der Abwesenheit verschwindet automatisch nach Ende der Abwesenheit.