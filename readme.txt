
----- Herzlich Willkommen zum Frogsystem 2.alix6b! -----------------------------------------

Das Frogsystem 2.alix6b ist ein kleines BugFix-Release f�r die vorherige Version.


----- Hinweise zu den Paketen --------------------------------------------------------------

Das Frogsystem 2.alix6b wird als kombiniertes Installations- und Update-Paket ver�ffentlicht.


----- Systemvorraussetzungen ---------------------------------------------------------------

Um das Frogsystem 2.alix6b verwenden zu k�nnen, muss der Server bzw. Webspace folgende
Voraussetzungen erf�llen:

   => PHP 5.1.0 und h�her
   => MySQL Datenbank ab Version 4


----- Installations-Anweisungen ------------------------------------------------------------

   1) Dateien aus /fs2installer hochladen

      => Lade den Ordner /fs2installer in ein aufrufbares Verzeichnis auf deinem Webserver
         oder Webspaces hoch.

      !! Lade den Ordner als Ganzes hoch. Das Installationsziel kann w�hrend der
         Installation gew�hlt werden.


   2) Installations- & Update-Tool ausf�hren

      => Rufe das Installations- & Update-Tool �ber die Adresse
         "http://www.example.com/fs2installer/" auf.

      !! Folge bitte genau den beschriebenen Anweisungen und lies dir alle Texte aufmerksam
         durch.

      => Falls die Datei-Operationen manuell ausgef�hrt werden sollen, Details bitte
         in "dateien.txt" nachlesen.

      => Falls (bei einem Update) die Template-�nderungen manuell ausgef�hrt werden sollen,
         Details bitte in "templates.txt" nachlesen.


   3) .htaccess einrichten

      => Falls SEO-optimierte URLs verwendet werden, MUSS die .htaccess eingerichtet werden.
         Ansonsten bietet die Dateien einige n�tzliche Extras.
         Eine einfache Beispiel-Datei befindet sich unter /fs2installer/copy/.htaccess

      !! Weitere Informationen im Frogsystem 2-Wiki unter:
         https://github.com/mrgrain/Frogsystem-2/wiki/htaccess

      => Die Datei .htaccess einfach in das Wurzelverzeichnis der Installation kopieren.
         Bei Bedarf �nderungen entsprechend der Wiki-Seite vornehmen.


   4) Installationsordner l�schen

      => Nach der Installation muss der Installationsordner /fs2installer aus
         Sicherheitsgr�nden sofort wieder gel�scht werden.

      !! Wird der Ordner nicht gel�scht ist es Angreifern m�glich, die Installation zu
         manipulieren, zu zerst�ren oder eingebenen Zugangsdaten auszulesen.


----- Update von 2.alix6 -------------------------------------------------------------------

   1) Installations-Anweisungen ausf�hren

      => F�hre das Update gem�� des Assistenten durch.
         F�r manuelle �nderungen der Dateien und Templates bitte in "dateien.txt" bzw.
         "templates.txt" nachlesen.

         
----- Update von 2.alix5 -------------------------------------------------------------------

   1) Installation ausf�hren

      => F�hre das Update gem�� des Assistenten durch.
         F�r manuelle �nderungen der Dateien und Templates bitte in "dateien.txt" bzw.
         "templates.txt" nachlesen.


   2) Inhaltsbilder (neu) einlesen

      => Im Frogsystem gibt es ab Version 2.alix6 ein neues System f�r die Inhaltsbilder.
         Dazu m�ssen einmalig alle alten Bilder importiert werden.

      => Rufe im Admin-CP den Men�-Punkt "Inhalt->Inhaltsbilder->importieren" auf.
         Hier alle (ben�tigten) Bilder ausw�hlen und dann die Auswahl importieren.

      !! Je nach Menge der Inhaltsbilder kann das eine Weile dauern.
         Bei sehr vielen Bildern, sollten evtl. nicht alle auf einmal importiert werden.


----- Hilfe & Support ----------------------------------------------------------------------

Bei Fragen & Probelmen helfen wir auf GitHub weiter:
https://github.com/mrgrain/Frogsystem-2/issues
Oder du kontaktierst uns auf Twitter:
https://twitter.com/@mrgrain


----- Lizenzvertrag ------------------------------------------------------------------------

Der Lizenzvertrag zur Nutzung der Software befindet sich in der Datei "lizenz.txt". Mit dem
Beginn einer Installation bzw. eines Updates der Software, sowie der Nutzung oder Weitergabe
der Software an Dritte, gilt der Lizenzvertrag als gelesen, verstanden und angenommen.
