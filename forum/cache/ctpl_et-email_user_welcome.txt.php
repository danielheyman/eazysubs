<?php if (!defined('IN_PHPBB')) exit; ?>Subject: Tere tulemast "<?php echo (isset($this->_rootref['SITENAME'])) ? $this->_rootref['SITENAME'] : ''; ?>" foorumitesse!

<?php echo (isset($this->_rootref['WELCOME_MSG'])) ? $this->_rootref['WELCOME_MSG'] : ''; ?>

Palume hoida seda e-kirja alles. Sinu kasutaja andmed on järgnevad:

----------------------------
Kasutajanimi: <?php echo (isset($this->_rootref['USERNAME'])) ? $this->_rootref['USERNAME'] : ''; ?>


Foorumi URL: <?php echo (isset($this->_rootref['U_BOARD'])) ? $this->_rootref['U_BOARD'] : ''; ?>
----------------------------

Sinu parool on meie andmebaasis turvaliselt salvestatud, seega ei saa me seda ununemise korral taastada. Kui sa siiski unustad oma parooli, saad sisestada uue parooli, mis aktiveeritakse sinu kasutajakontol märgitud e-postiaadressi kasutades.


Täname registreerimast.

<?php echo (isset($this->_rootref['EMAIL_SIG'])) ? $this->_rootref['EMAIL_SIG'] : ''; ?>