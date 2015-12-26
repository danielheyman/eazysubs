<?php if (!defined('IN_PHPBB')) exit; ?>Subject: Willkommen auf „<?php echo (isset($this->_rootref['SITENAME'])) ? $this->_rootref['SITENAME'] : ''; ?>“

<?php echo (isset($this->_rootref['WELCOME_MSG'])) ? $this->_rootref['WELCOME_MSG'] : ''; ?>


Bitte bewahre diese E-Mail in deinen Unterlagen auf. Die Daten deines Benutzerkontos lauten:

----------------------------
Benutzername: <?php echo (isset($this->_rootref['USERNAME'])) ? $this->_rootref['USERNAME'] : ''; ?>


Board-URL:    <?php echo (isset($this->_rootref['U_BOARD'])) ? $this->_rootref['U_BOARD'] : ''; ?>

----------------------------

Dein Passwort wurde sicher in unserer Datenbank gespeichert und kann nicht wiederhergestellt werden. Falls es vergessen werden sollte, kannst du es über die E-Mail-Adresse, die deinem Account zugeordnet ist, zurücksetzen lassen.

Vielen Dank für deine Registrierung.

<?php echo (isset($this->_rootref['EMAIL_SIG'])) ? $this->_rootref['EMAIL_SIG'] : ''; ?>