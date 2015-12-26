<?php
/** 
*
* acp_mods [Estonian]
*
* @package language
* @version $Id: mods.php 173 2009-05-04 18:00:58Z jelly_doughnut $
* @copyright (c) 2008 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/
/**
*/
if (!defined('IN_PHPBB'))
{
        exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
        $lang = array();
}

// DEVELOPERS PLEASE NOTE 
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine


$lang = array_merge($lang, array(
        'ADDITIONAL_CHANGES'    => 'Saadaval muudatused',

        'AM_MOD_ALREADY_INSTALLED'      => 'AutoMOD tuvastas, et see MOD on juba installeeritud.',

        'APPLY_THESE_CHANGES'   => 'Kinnita muudatused',
        'APPLY_TEMPLATESET'             => 'sellele stiilile',
        'AUTHOR_EMAIL'                  => 'Autori e-post',
        'AUTHOR_INFORMATION'    => 'Autori info',
        'AUTHOR_NAME'                   => 'Autori nimi',
        'AUTHOR_NOTES'                  => 'Autori märkused',
        'AUTHOR_URL'                    => 'Autori URL',
        'AUTOMOD'                               => 'AutoMOD',
        'AUTOMOD_CANNOT_INSTALL_OLD_VERSION'    => 'See versioon on juba installeeritud.  Palun kustuta install\ kaust.',
        'AUTOMOD_UNKNOWN_VERSION'       =>      'AutoMOD ei saanud end uuendada, sest praegust AutoMODi versiooni ei tuvastatud.  Praegune installeeritud versioon on %s.',

        'CAT_INSTALL_AUTOMOD'   => 'AutoMOD',
        'CHANGE_DATE'   => 'Väljalaske kuupäev',
        'CHANGE_VERSION'=> 'Versiooni number',
        'CHANGES'               => 'Muudatused',
        'CHECK_AGAIN'  => 'Kontrolli uuesti',
        'COMMENT'               => 'Kommentaar',
        'CREATE_TABLE'  => 'Andmebaasi muudatused',
        'CREATE_TABLE_EXPLAIN'  => 'AutoMOD on andmebaasi muudatused sisse viinud, sealhulgas õigused, mis on määratud täieliku administraatori rollile.',

        'DIR_PERMS'                     => 'Kausta õigused',
        'DIR_PERMS_EXPLAIN'     => 'Mõned süsteemid nõuavad tõrgeteta töötamiseks, et kaustadel oleks teatavad õigused. Enamasti vaikimisi 0755 õigused sobivad. Sellel seadel pole mõju Windowsi süsteemide üle.',
        'DIY_INSTRUCTIONS'      => 'Tee See Ise juhised',
        'DEPENDENCY_INSTRUCTIONS'       =>      'MOD, mida üritad installeerida, sõltub teisest MODist.  AutoMOD ei suuda tuvastades, kas see teine MOD on installeeritud.  Palun tee kindlaks, et sul on installeeritud <strong><a href="%1$s">%2$s</a></strong> enne selle MODi installeerimist.',
        'DESCRIPTION'   => 'Kirjeldus',
        'DETAILS'               => 'Andmed',

        'EDITED_ROOT_CREATE_FAIL'       => 'AutoMOD ei suutnud teha kausta, kuhu salvestatakse muudetud failid.',
        'ERROR'                 => 'Viga',

        'FILE_EDITS'            => 'Faili muudatused',
        'FILE_EMPTY'            => 'Tühi fail',
        'FILE_MISSING'          => 'Ei suuda faili asukohta tuvastada',
        'FILE_PERMS'            => 'Faili õigused',
        'FILE_PERMS_EXPLAIN'=> 'Mõned süsteemid nõuavad tõrgeteta töötamiseks, et failidel oleks teatavad õigused. Enamasti vaikimisi 0644 õigused sobivad. Sellel seadel pole mõju Windowsi süsteemide üle.',
        'FILE_TYPE'                     => 'Kokkupakitud faili tüüp',
        'FILE_TYPE_EXPLAIN'     => 'See kehtib ainult “Kokkupakitud faili allalaadimine” kirjutamismeetodiga',
        'FILESYSTEM_NOT_WRITABLE'       => 'AutoMOD on tuvastanud, et failisüsteem pole kirjutatav, seega otsese kirjutamise meetodit ei saa kasutada.',
        'FIND'                          => 'Leia',
        'FIND_MISSING'          => 'MODi poolt määratud "Leia" rida ei leitud',
        'FORCE_INSTALL'         => 'Sundinstalleerimine',
        'FORCE_CONFIRM'         => 'Sundinstalleerimine tähendab, et MOD pole täielikult installeeritud.  Pead tegema mõned käsitsi muudatused foorumile, et saaks täielikult installeeritud.  Jätka?',
        'FTP_INFORMATION'       => 'FTP info',
        'FTP_NOT_USABLE'  => 'FTP funktsiooni ei saa kasutada, sest see on sinu teenusepakkuja poolt keelatud.',
        'FTP_METHOD_ERROR' => 'Ei leitud FTP meetodit, palun kontrolli AutoMOD konfiguratsioonist korrektse FTP meetodi seadistamist.',

        'INHERIT_NO_CHANGE'     => 'Faili ei saa muudatusi sisse viia, sest templeidifail %1$s sõltub failist %2$s.',
        'INLINE_FIND_MISSING'=> 'MODi poolt määratud "Rea sees Leia" rida ei leitud.',
        'INSTALL_AUTOMOD'       => 'AutoMOD Installatsioon',
        'INSTALL_TIME'          => 'Installeerimisaeg',
        'INSTALL_MOD'           => 'Installeeri see MOD',
        'INSTALL_ERROR'         => 'Üks või enam installeerimistoimingut ebaõnnestus. Palun vaata allnäidatud toimingud üle, tee vajalikud muudatused ja proovi uuesti. Võid ka jätkata installeerimisega, vaatamata sellele, et mõned toimingud ebaõnnestusid. <strong>See pole soovitav ja võib põhjustada foorumi mittetöötamist.</strong>',
        'INSTALL_FORCED'        => 'Sundisid MODi installeerimise, vatamata sellele, et esines tõrkeid. Sinu foorum võib olla katki. Palun vaata tõrgetega toiminguid ja püüa need parandada.',
        'INSTALLED'                     => 'MOD installeeritud',
        'INSTALLED_EXPLAIN'     => 'Sinu MOD on installeeritud! Siin võid näha installeerimise tulemusi. Palun vaata esinenud tõrkeid ja otsi tuge <a href="http://www.phpbb.com">phpBB Eesti</a> foorumitest.',
        'INSTALLED_MODS'        => 'Installeeritud MODid',
        'INSTALLATION_SUCCESSFUL'       => 'AutoMOD edukalt installeeritud. Nüüd saad hallata phpBB MODifikatsioone läbi AutoMOD vahekaardi Administraatori Juhtpaneelis.',
        'INVALID_MOD_INSTRUCTION'       => 'Sellel MODil on ebakorrektsed juhised või "Rea sees Leia" toiming ebaõnnestus.',

        'LANGUAGE_NAME'         => 'Keele nimi',

        'MANUAL_COPY'                           => 'Kopeerimist ei üritatud',
        'MOD_CONFIG'                            => 'AutoMODi konfiguratsioon',
        'MOD_CONFIG_UPDATED'        => 'AutoMODi konfiguratsioon uuendatud.',
        'MOD_DETAILS'                           => 'MODi andmed',
        'MOD_DETAILS_EXPLAIN'           => 'Siin saad vaadata kogu infot, mis on MODi kohta antud.',
        'MOD_MANAGER'                           => 'AutoMOD',
        'MOD_NAME'                                      => 'MODi nimi',
        'MOD_OPEN_FILE_FAIL'            => 'AutoMOD ei suutnud avada %s.',
        'AUTOMOD_INSTALLATION'          => 'AutoMOD Installatsioon',
        'AUTOMOD_INSTALLATION_EXPLAIN'  => 'Tere tulemast AutoMODi Installatsiooni. Vajad oma FTP andmeid, kui AutoMOD tuvastab, et see on kõige parem kirjutamismeetod. Nõuete testitulemused on all.',

        'MODS_CONFIG_EXPLAIN'           => 'Võid valida, kuidas AutoMOD muudab sinu faile. Kõige tavalisem meetod on kokkupakitud faili allalaadimine. Teised nõuavad serverilt lisaõigusi.',
        'MODS_COPY_FAILURE'                     => 'Faili %s ei suudetud oma kohale kopeerida. Palun kontrolli kirjutamisõigusi või kasuta mõnd muud kirjutamismeetodit.',
        'MODS_EXPLAIN'                          => 'Siin saad hallata foorumi MODe. MODid lubavad sul foorumit muuta, installeerides phpBB kasutajate poolt loodud modifikatsioone. Edasiseks infoks MODide ja AutoMODi kohta loe <a href="http://www.phpbb.com/mods">phpBB veebilehelt</a>. Et lisada MODi, paki fail lahti ja lae üles /store/mods/ kausta serveris.',
        'MODS_FTP_FAILURE'                      => 'AutoMOD ei suutnud laadida faili %s oma asukohta',
        'MODS_FTP_CONNECT_FAILURE'      => 'AutoMOD ei suutnud ühenduda FTP serveriga.  Viga oli %s',
        'MODS_MKDIR_FAILED'                     => '%s kausta ei suudetud luua',
        'MODS_SETUP_INCOMPLETE'         => 'Sinu konfiguratsiooniga esines probleem, AutoMOD ei saa toimida. See peaks esinema vaid siis, kui nt. FTP kasutajanimi on muutunud. Seda saab parandada AutoMODi konfiguratsioonilehel.',

        'NAME'                  => 'Nimi',
        'NEW_FILES'             => 'Uued failid',
        'NO_ATTEMPT'    => 'Ei üritatud',
        'NO_INSTALLED_MODS'             => ' Ühtegi installeeritud MODi ei tuvastatud',
        'NO_MOD'                                => 'Valitud MODi ei leitud.',
        'NO_UNINSTALLED_MODS'   => 'Ühtegi installeerimata MODi ei tuvastatud',      

        'ORIGINAL'      => 'Algne',

        'PATH'                                  => 'Tee',
        'PREVIEW_CHANGES'               => 'Muudatuste eelvaade',
        'PREVIEW_CHANGES_EXPLAIN'       => 'Kuvab vajalikud muudatused enne nende teostamist.',
        'PRE_INSTALL'                   => 'Installeerimiseks valmistumine',
        'PRE_INSTALL_EXPLAIN'   => 'Siin saad vaadata kõiki muudatusi, mis tehakse su foorumile, enne nende teostamist. <strong>HOIATUS!</strong>, kui aktsepteeritud, sinu phpBB faile muudetakse ja võivad esineda ka andmebaasimuudatused. Kui siiski installeerimine ebaõnnestub, ja kui pääsed ligi AutoMODile, saad failid taastada.',
        'PRE_UNINSTALL'                 => 'Desinstalleerimiseks valmistumine',
        'PRE_UNINSTALL_EXPLAIN' => 'Siin saad vaadata kõiki muudatusi, mis tehakse su foorumile, et MOD desinstalleerida. <strong>HOIATUS!</strong>, kui aktsepteeritud, sinu phpBB faile muudetakse ja võivad esineda ka andmebaasimuudatused. Se protsess kasutab taastamistehnikaid, mis ei pruugi olla 100% täpsed. Kui siiski desinstalleerimine ebaõnenstub, ja kui pääsed ligi AutoMODile, saad failid taastada.',

        'REMOVING_FILES'        => 'Eemaldatavad failid',
        'RETRY'                         => 'Proovi uuesti',
        'RETURN_MODS'           => 'Mine tagasi AutoMODi',
        'REVERSE'                       => 'Taasta',
        'ROOT_IS_READABLE'      => 'PhpBB juurkaust on loetav.',
        'ROOT_NOT_READABLE'     => 'AutoMOD ei suutnud avada phpBB index.php faili lugemiseks. See ilmselt tähendab, et õigused phpBB juurkaustas on liiga piiratud, mis ennetab AutoMODi töötamist. Palun muuda õigusi ja proovi uuesti.',


        'SOURCE'                => 'Allikas',
        'SQL_QUERIES'   => 'SQL käsud',
        'STATUS'                => 'Staatus',
        'STORE_IS_WRITABLE'                     => ' store/ kaust on kirjutatav.',
        'STORE_NOT_WRITABLE_INST'       => 'AutoMOD installatsioon tuvastas, et store/ kaust pole kirjutatav. See on nõutud AutoMODi korralikuks toimimiseks. Palun muuda seadeid ja proovi uuesti.',
        'STORE_NOT_WRITABLE'            => 'store/ kaust pole kirjutatav.',
        'STYLE_NAME'    => 'Stiili nimi',
        'SUCCESS'               => 'Õnnestus',

        'TARGET'                => 'Sihtkoht',

        'UNKNOWN_MOD_AUTHOR-NOTES'      => 'Autori märkmeid ei tuvastatud.',
        'UNKNOWN_MOD_COMMENT'           => '',
        'UNKNOWN_MOD_INLINE-COMMENT'=> '',
        'UNKNOWN_QUERY_REVERSE' => 'Tundmatu tagurpidikäsk',

        'UNINSTALL'                             => 'Desinstalleeri',
        'UNINSTALLED'                   => 'MOD desinstalleeritud',
        'UNINSTALLED_MODS'              => 'Installeerimata MODid',
        'UNINSTALLED_EXPLAIN'   => 'Sinud MOd on desinstalleeritud! Siin saad vaadata desinstalleerimise tulemusi. Palun vaata esinenud tõrkeid ja otsi tuge <a href="http://www.phpbb.com">phpBB Eesti</a> foorumitest.',
        'UPDATE_AUTOMOD'                => 'Uuenda AutoMODi',
        'UPDATE_AUTOMOD_CONFIRM'=> 'Palun kinnita, et soovid uuendada AutoMODi.',

        'VERSION'               => 'Versioon',
      
        'WRITE_DIRECT_FAIL'             => 'AutoMOD ei suutnud kopeerida faili %s oma kohale otsest meetodit kasutades. Palun kasuta mõnd muud kirjutamismeetodit.',
        'WRITE_DIRECT_TOO_SHORT'=> 'AutoMOD ei suutnud lõpetada faili %s kirjutamist. Tihti saab selle lahendada, vajutades "Proovi uuesti" nuppu. Kui see ei toimi, proovi muud kirjutamismeetodit.',
        'WRITE_MANUAL_FAIL'             => 'AutoMOD ei suutnud lisada faili %s kokkupakitud faili. Proovi muud kirjutamismeetodit.',
        'WRITE_METHOD'                  => 'Kirjutamismeetod',
        'WRITE_METHOD_DIRECT'   => 'Otsene',
        'WRITE_METHOD_EXPLAIN'  => 'Võid määrata eelistatud meetodi failide kirjutamiseks.  Kõige sobivam valik on “Kokkupakitud faili allalaadimine”.',
        'WRITE_METHOD_FTP'              => 'FTP',
        'WRITE_METHOD_MANUAL'   => 'Kokkupakitud faili allalaadimine',

        // These keys for action names are purposely lower-cased and purposely contain spaces
        'after add'                             => 'Lisa pärast',
        'before add'                    => 'Lisa ette',
        'find'                                  => 'Leia',
        'in-line-after-add'             => 'Rea sees pärast, Lisa',
        'in-line-before-add'    => 'Rea sees enne, Lisa',
        'in-line-edit'                  => 'Rea sees Leia',
        'in-line-operation'             => 'Rea sees Inkrement',
        'in-line-replace'               => 'Rea sees Asenda',
        'in-line-replace-with'  => 'Rea sees Asenda koodiga',
        'replace'                               => 'Asenda',
        'replace with'                  => 'Asenda koodiga',
        'operation'                             => 'Inkrement',
));

?>
