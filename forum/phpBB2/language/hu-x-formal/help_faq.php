<?php
/**
*
* help_faq [Hungarian Formal]
*
* @package language
* @version $Id: help_faq.php 217 2010-04-07 17:36:15Z marcee $
* @copyright (c) 2009 „Magyar phpBB Közösség fordítók”
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* Original copyright: (c) 2005 phpBB Group
*
*/

/**
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$help = array(
	array(
		0 => '--',
		1 => 'Belépési és regisztrációs kérdések'
	),
	array(
		0 => 'Miért nem tudok belépni?',
		1 => 'Ennek számos oka lehet. Először is ellenőrizze, hogy jól adta-e meg a felhasználónevét és a jelszavát. Ha igen, lépjen kapcsolatba a fórum adminisztrátorával, hogy meggyőződjön róla, nem lett kitiltva. Az is lehetséges, hogy a weboldal üzemeltetőjének oldalán lépett fel valamilyen konfigurációs hiba, melyet javítaniuk kéne.'
	),
	array(
		0 => 'Miért kell egyáltalán regisztrálnom?',
		1 => 'A regisztráció nem feltétlenül kötelező, a fórum adminisztrátorán múlik, hogy megköveteli-e hozzászólások küldéséhez. Mindemellett a regisztrációval plusz lehetőségek is elérhetővé válnak az ön számára, mint például avatar használata, privát üzenetek, illetve e-mailek küldése, csatlakozás csoportokhoz stb. A regisztráció csupán néhány másodpercet vesz igénybe, így javasoljuk, hogy éljen vele.'
	),
	array(
		0 => 'Miért kerülök kiléptetésre automatikusan?',
		1 => 'Ha belépéskor nem jelöli be az <em>Automatikus bejelentkezés</em> opciót, a rendszer csak egy előre meghatározott ideig hagyja önt belépve. Ez a viselkedés meggátolja az azonosítójával való visszaélést. A tartós belépve maradáshoz jelölje be az említett opciót. Ezen funkció használata nem ajánlott, ha nyilvános helyről használja a fórumot, például könyvtárból, internetkávézóból vagy egyetemi laborból. Ha nem látja a jelölőnégyzetet, a fórumon valószínűleg nincs bekapcsolva ez a funkciót.'
	),
	array(
		0 => 'Hogyan tudom megakadályozni, hogy mások lássák, mikor vagyok jelen?',
		1 => 'A Felhasználói vezérlőpultban a „Fórum beállítások” menüpont alatt található a „Jelenlét elrejtése” beállítás. Ha ezt <samp>Igen</samp>re állítja, csak az adminisztrátorok, a moderátorok, illetve saját maga fogja látni, hogy jelen van-e.'
	),
	array(
		0 => 'Elfelejtettem a jelszavamat!',
		1 => 'Semmi pánik! A jelszavát ugyan nem lehet utólag kideríteni, de lehetősége van új készítésére. Ehhez menjen a belépés oldalra, majd kattintson az <em>Elfelejtettem a jelszavam</em> linkre. Kövesse az utasításokat, és rövid időn belül újra be kell tudnia lépnie.'
	),
	array(
		0 => 'Regisztráltam, de mégsem tudok belépni',
		1 => 'Először is ellenőrizze le, hogy helyesen adta-e meg a felhasználónevét és a jelszavát. Ha igen, akkor két dolog történhetett. Amennyiben a COPPA-támogatás be van kapcsolva, és a regisztráció során megadta, hogy 13 évesnél fiatalabb, követnie kell a kapott utasításokat. Számos fórum megköveteli, hogy az új azonosítók aktiválásra kerüljenek, mielőtt használatba lehetne venni őket. Ezt vagy egy adminisztrátornak vagy a felhasználónak kell megtennie. Mindenesetre a regisztrációnál elvileg tájékoztatásra került, hogy szükséges-e az azonosító aktiválása. Ha kapott egy e-mailt, akkor kövesse az utasításait, ha nem, lehet, hogy rossz e-mail címet adott meg, vagy a spamszűrője kiszűrte. Ha ön biztos benne, hogy helyes e-mail címet adott meg, próbáljon meg kapcsolatba lépni a fórum adminisztrátorával.' // Ezt is át kéne írni, angolból lett fordítva - és ez eléggé látszik is rajta
	),
	array(
		0 => 'Korábban regisztráltam magam, azonban már nem tudok belépni?!',
		1 => 'Keresse elő a regisztrációkor kapott e-mailt, ellenőrizze le a felhasználónevét és a jelszavát, majd próbálkozzon újra. Lehetséges, hogy az adminisztrátor valamilyen okból kifolyólag inaktiválta, vagy törölte az azonosítóját. Ez utóbbinak egy lehetséges oka, hogy nem küldött egy hozzászólást se. Néhány fórumon ugyanis szokás, hogy bizonyos időközönként eltávolítják az olyan felhasználókat, akik nem küldtek hozzászólást, hogy csökkentsék az adatbázis méretét. Próbáljon meg újra regisztrálni és bekapcsolódni a társalgásba.'
	),
	array(
		0 => 'Mi az a COPPA?',
		1 => 'A COPPA, vagyis az 1998-as „Child Online Privacy and Protection Act” (gyerekek online adatvédelméről intézkedő törvény) egy egyesült államokbeli törvény, mely megköveteli a honlapoktól, hogy írásos szülői vagy gondviselői beleegyezéssel rendelkezzenek 13 éven aluli személyektől való adatgyűjtéshez. Ez a törvény csak az Amerikai Egyesült Államokban lévő szervereken működő fórumokra érvényes, tehát Magyarországon nem. Ha ön nem biztos benne, hogy ez a törvény vonatkozik-e önre vagy a fórumra, melyre regisztrál, kérjen jogi segítséget. Kérjük, tartsa szem előtt, hogy a phpBB Group nem tud jogi tanácsot adni, és az alább leírtakon kívül semmilyen aggály esetén sem hozzájuk kell fordulni.',
	),
	array(
		0 => 'Miért nem tudok regisztrálni?',
		1 => 'Lehet, hogy a weboldal tulajdonosa letiltotta az IP-címét vagy a regisztrálni kívánt felhasználónevet. Az is előfordulhat, hogy a regisztráció kikapcsolásra került, hogy ne tudjanak új felhasználók regisztrálni. További segítségért lépjen kapcsolatba a fórum egyik adminisztrátorával.',
	),
	array(
		0 => 'Mit csinál a „Fórum sütik törlése”?',
		1 => 'Ez a funkció törli az összes phpBB3 által küldött sütit. A sütik feladata az azonosítás, illetve a beléptetés, valamint – ha a fórum tulajdonosa beállította – a hozzászólások olvasottságának követése és ehhez hasonló funkciók. Ha problémái vannak a belépéssel vagy a kilépéssel, a sütik törlése segíthet.',
	),
	array(
		0 => '--',
		1 => 'Felhasználói beállítások'
	),
	array(
		0 => 'Hogyan tudom megváltoztatni a beállításaimat?',
		1 => 'Amennyiben ön regisztrált felhasználó, minden beállítása az adatbázisban kerül tárolásra. Ezek megváltoztatásához kattintson a <em>Felhasználói vezérlőpult</em> linkre (általában az oldal tetején található). Itt megváltoztathatja az összes beállítását.'
	),
	array(
		0 => 'Nem pontos az idő!',
		1 => 'Feltehetően az időpontok más időzóna szerint kerülnek megjelenítésre, mint amiben ön van. Ez esetben változtassa meg a felhasználói vezérlőpultban az időzónáját a tartózkodási helyének megfelelően. Kérjük, vegye figyelembe, hogy az időzónát – mint a legtöbb más felhasználói beállítást – csak regisztrált felhasználók változtathatják meg. Tehát ha még nem regisztrált, ez egy jó alakalom, hogy megtegye.'
	),
	array(
		0 => 'Megváltoztattam az időzónát, de még mindig pontatlan az idő!',
		1 => 'Ha ön biztos benne, hogy helyes időzónát adott meg, és a nyári időszámítást is jól állította be, de az idő még mindig más, akkor a szerver órája pontatlan. Kérjük, értesítsen erről egy adminisztrátort.'
	),
	array(
		0 => 'A használni kívánt nyelv nincs a listában!',
		1 => 'Ennek az az oka, hogy az adminisztrátor nem telepítette a megfelelő nyelvi csomagot, vagy hogy még nem készült fordítás a kívánt nyelvre. Kérje meg az adminisztrátort, hogy telepítse a nyelvi csomagot, amennyiben viszont még nem létezik, nyugodtan készítse el a fordítást. További információért keresse fel a phpBB Group weboldalát (a link az oldal alján található).'
	),
	array(
		0 => 'Hogyan jeleníthetek meg egy képet a nevemmel együtt?',
		1 => 'A hozzászólások megtekintésénél a felhasználónév mellett két kép szerepelhet. Az egyik általában a rangjához kapcsolódik (ezek általában csillagok vagy más elemek formájában kerülnek megjelenítésre, a számuk mutatja mennyi hozzászólást küldött eddig a fórumon, vagy hogy milyen státusza van). A másik – általában egy nagyobb kép – az avatar, mely a legtöbb felhasználónak egyedi és személyes. A fórum adminisztrátorától függ, hogy engedélyezett-e az avatarok használata, illetve milyen módot lehet megadni ezt a képet. Ha nem tud avatart beállítani, státusza kapcsolatba egy adminisztrátorral, és tájékozódjon nála az okokról.'
	),
	array(
		0 => 'Mi az a rang, hogyan tudom megváltoztatni a rangomat?',
		1 => 'A rang, mely a felhasználók neve alatt jelenik meg, arra való, hogy mutassa, a felhasználó hozzászólásainak számát, illetve megkülönböztessen egyes felhasználókat, például a moderátorokat és adminisztrátorokat. Általában a felhasználók nem tudják közvetlenül megváltoztatni a rangjukat, mivel azt az adminisztrátor állítja be. Kérjük, ne szóljon hozzá feleslegesen a témákhoz, csak hogy növelje a hozzászólásai számát, hiszen valószínű, hogy ezt a moderátorok fel fogják fedezni, és egyszerűen csökkenteni fogják a hozzászólásai számát.'
	),
	array(
		0 => 'Miért kell bejelentkeznem e-mail küldéséhez?',
		1 => 'Csak regisztrált felhasználók küldhetnek e-mailt a beépített e-mail funkció segítségével (ha az adminisztrátor bekapcsolta ezt a lehetőséget). Ez a névtelen emberek nemkívánt leveleinek elkerülése végett szükséges. '
	),
	array(
		0 => '--',
		1 => 'Hozzászólással kapcsolatos kérdések'
	),
	array(
		0 => 'Hogyan készíthetek egy új témát egy fórumban?',
		1 => 'Ha egy fórumban új témát szeretne nyitni, kattintson a megfelelő gombra a fórumban vagy annak egy témájában. Hozzászólás küldéséhez lehet, hogy előbb regisztrálnia kell. A jogosultságait a fórum vagy téma oldalak alján találja meg. Például: Nyithat új témákat, Szavazhat stb.'
	),
	array(
		0 => 'Hogyan szerkeszthetek, illetve törölhetek egy hozzászólást?',
		1 => 'Ha ön nem adminisztrátor vagy moderátor, akkor csak azokat a hozzászólásokat szerkesztheti vagy törölheti, melyeket ön küldött. Egy hozzászólást a szerkesztés gombra kattintva tud szerkeszteni, általában csak a beküldés utáni korlátozott időtartamban. Abban az esetben, ha valaki már válaszolt a hozzászólására, a hozzászólása alatt egy apró szöveg fog megjelenni, mely jelzi, a hozzászólás hányszor és ki által került szerkesztésre. Ez csak akkor fog megjelenni, ha ön után küldött már valaki egy hozzászólást, akkor nem, ha még nem válaszolt senki, illetve ha egy moderátor vagy egy adminisztrátor szerkesztette a hozzászólását, bár ők hagyhatnak egy megjegyzést jelezve a szerkesztés okát. Kérjük, vegye figyelembe, hogy a normál felhasználók nem törölhetik a hozzászólásukat, miután már másvalaki válaszolt.'
	),
	array(
		0 => 'Hogyan csatolhatom az aláírásomat a hozzászólásomhoz?',
		1 => 'A csatoláshoz először el kell készítenie az aláírását – ezt a felhasználói vezérlőpultban teheti meg. Ezután a hozzászólás küldésénél csak jelölje be az <em>Aláírás hozzáadása</em> opciót. Az aláírás automatikusan is hozzáadható minden hozzászóláshoz, ehhez is a felhasználói vezérlőpultban kell megváltoztatnia a megfelelő beállítást. Ha így tesz, az egyes hozzászólásoknál a küldéskor a megfelelő opció kikapcsolásával még mindig megadhatja, hogy ne kerüljön csatolásra az aláírása.'
	),
	array(
		0 => 'Hogyan készíthetek szavazást?',
		1 => 'Amikor egy új témát nyit, vagy egy téma első hozzászólását szerkeszti, kattintson a „Szavazás készítése” fülre az üzenet mező alatt. Ha nem látja ezt a fület, az azért lehet, mert nincs jogosultsága szavazás készítéséhez. Adja meg a szavazás címét, majd legalább két választási lehetőséget mindegyiket új sorba írva. A „Felhasználónként válaszható lehetőségek” mező használatával megadhatja azt is, hogy egy felhasználó hány választási lehetőségre szavazhat; beállíthat a szavazásnak egy időkorlátot (napokban megadva); és végül választhat, hogy lehetséges legyen-e a szavazatokat megváltoztatatni.'
	),
	array(
		0 => 'Hogyan szerkeszthetek vagy törölhetek egy szavazást?',
		1 => 'A hozzászólásokhoz hasonlóan a szavazásokat is csak a készítő, egy moderátor vagy egy adminisztrátor szerkesztheti. Egy szavazás szerkesztéséhez menjen a téma első hozzászólásához – mindig ehhez tartozik a szavazás, és kattintson a <em>szerkeszt</em> gombra. Ha még senki sem szavazott, a készítő még törölheti a szavazást, vagy megváltoztathatja a választási lehetőségeket, de ha már érkezett szavazat, csak egy adminisztrátor vagy egy moderátor törölheti vagy szerkesztheti a szavazást. Így nem lehet manipulálni a szavazást a szavazási lehetőségek megváltoztatásával.'
	),
	array(
		0 => 'Miért nem férek hozzá egy fórumhoz?',
		1 => 'Néhány fórum lehet, hogy csak bizonyos felhasználók, illetve csoportok számára érhető el. A fórum megtekintéséhez, olvasásához, benne hozzászólás küldéséhez stb. lehet, hogy speciális jogosultság kell. Lépjen kapcsolatba egy moderátorral vagy egy adminisztrátorral, és kérelmezze a jogosultságot.'
	),
	array(
		0 => 'Miért nem tudok szavazni?',
		1 => 'Csak regisztrált felhasználók vehetnek részt a szavazásokban (a többszöri szavazás elkerülése végett). Amennyiben ön regisztrált felhasználó de mégsem tud szavazni, akkor valószínűleg nincs jogosultsága a szavazáshoz.'
	),
	array(
		0 => 'Miért nem tudok hozzáadni csatolmányokat?',
		1 => 'A csatolmányok feltöltéséhez szükséges jogosultság megadható fórumokra, csoportokra vagy felhasználókra. Lehet, hogy az adminisztrátor nem engedélyezte csatolmányok hozzáadását a fórumba, melybe írni szeretne, vagy talán csak bizonyos csoportok tagjai küldhetnek csatolmányokat. Ha nem biztos benne, miért nem tud csatolmányokat hozzáadni, lépjen kapcsolatba az adminisztrátorral.'
	),
	array(
		0 => 'Miért kaptam figyelmeztetést?',
		1 => 'Minden adminisztrátornak megvan a saját szabályzata az oldalára. Ha megsértett egy szabályt, figyelmeztethetik önt. Kérjük, vegye figyelembe, hogy ez a fórum adminisztrátorának döntése – a phpBB Group-nak semmi köze nincs a fórumokon kiosztott figyelmeztetésekhez.'
	),
	array(
		0 => 'Hogyan jelenthetek egy hozzászólást a moderátoroknak?',
		1 => 'Menjen a hozzászóláshoz, melyet jelenteni szeretne, és ha a fórum adminisztrátora engedélyezte, látnia kell egy gombot, mely erre való. Ha erre kattinta, végigkísérésre kerül a hozzászólás jelentéséhez szükséges lépéseken.'
	),
	array(
		0 => 'Mire való az „Elmentés” gomb hozzászólás küldésénél?',
		1 => 'Ezzel elmentheti a még nem befejezett üzenetét, majd később folytathatja, és elküldheti. Egy piszkozat betöltéséhez menjen a felhasználói vezérlőpultra és kövesse a maguktól értetődő lépéseket.'
	),
	array(
		0 => 'Miért kell a hozzászólásomat jóváhagynia egy moderátornak?',
		1 => 'A fórum adminisztrátora beállíthatta, hogy a fórumban, melybe hozzászólást szeretne küldeni, csak olyan hozzászólások jelenhetnek meg, melyeket egy moderátor átnézett. Az is lehet, hogy az adminisztrátor egy olyan csoportba helyezte önt, akiknek a hozzászólásait át kell néznie egy moderátornak. További információért, lépjen kapcsolatba a fórum adminisztrátorával.'
	),
	array(
		0 => 'Hogyan ugraszthatok előre egy témát?',
		1 => 'A téma megtekintésénél megjelenő „Téma előreugrasztása” linkre kattintva „előreugraszthat” egy témát a fórum tetejére, hogy a témák felsorolásánál elsőként jelenjen meg. Ha nem látja ezt a linket, akkor ez a funkció nincs bekapcsolva a fórumon, vagy még nem telt le az előugrasztáshoz szükséges idő. Egy témát úgy is előreugraszthat, hogy küld bele egy hozzászólást – ennél viszont vigyázzon az aktuális fórum szabályainak betartására.'
	),
	array(
		0 => '--',
		1 => 'Formázás és téma típusok'
	),
	array(
		0 => 'Mi az a BBCode?',
		1 => 'A BBCode a HTML nyelv egy speciális változata, mely nagy teret enged egy szövegrészlet megformázásához. A BBCode használatának engedélyezése az adminisztrátortól függ, de önnek is lehetősége van ki- vagy bekapcsolni a hozzászólásainál. A BBCode hasonló felépítésű, mint a HTML, kivéve hogy a címkék nem kacsacsőrök között („<” , ill. „>”), hanem szögletes zárójelben („[”, ill. „]”) vannak. További információért lássa a BBCode útmutatót, melyet a hozzászólásküldő oldalról érhet el.'
	),
	array(
		0 => 'Használhatok HTML-t?',
		1 => 'Nem. Nem lehetséges HTML-t küldeni, majd azt HTML-ként is megjeleníteni. A legtöbb HTML-lel létrehozható formázás BBCode használatával is elérhető.'
	),
	array(
		0 => 'Mik azok az emotikonok?',
		1 => 'A smiley-k vagy más néven emotikonok kis grafikák, melyekkel érzéseket lehet kifejezni. Például a :) vidámot/boldogot, a :( szomorút jelent. A használható emotikonok teljes listája megtalálható a hozzászólás küldésénél. Lehetőleg ne használjon túl sok emotikont, mert nehezen lesz olvasható a hozzászólás, ezért pedig egy moderátor kiszerkesztheti őket, vagy akár az egész hozzászólást törölheti. A fórum adminisztrátora beállíthat egy felső korlátot, melynél nem használhat több emotikont egy hozzászólásban.'
	),
	array(
		0 => 'Küldhetek képeket?',
		1 => 'Igen, megjeleníthet képeket a hozzászólásaiban. Azonban, ha az adminisztrátor engedélyezte a csatolmányok hozzáadását, akkor a képeket egyenesen a fórumra is feltöltheti. Ellenkező esetben a képeket egy publikus, mindenki által elérhető szerveren kell tárolnia, és onnan belinkelnie – például: http://www.akarmi.hu/en-kepem.gif. Nem tud belinkelni képeket a saját gépéről (hacsak az nem érhető el kívülről is), azonosítást igénylő oldalakról (mint például freemail, gmail, yahoo postafiókok), jelszóval védett weblapokról stb. A képek megjelenítéséhez használja az [img] BBCode címkét.'
	),
	array(
		0 => 'Mik azok a globális közlemények?',
		1 => 'A globális közlemények fontos információkat tartalmaznak, ezért olvassa el őket valahányszor csak tudja. A felhasználói vezérlőpultban és minden fórum tetején jelennek meg. Globális közlemények küldéséhez az adminisztrátor adhat jogosultságot.'
	),
	array(
		0 => 'Mik azok a közlemények?',
		1 => 'A közlemények gyakran fontos információkat tartalmaznak az adott fórummal kapcsolatban, ezért olvassa el őket valahányszor csak tudja. A közlemények a fórum összes oldalán, felül jelennek meg. Hasonlóan a globális közleményekhez, közlemények küldéséhez is az adminisztrátor adhat jogosultságot.'
	),
	array(
		0 => 'Mik azok a kiemelt témák?',
		1 => 'A kiemelt témák a közlemények alatt jelennek meg a fórumokban, de csak az első oldalon. Gyakran elég fontosak, úgyhogy érdemes őket elolvasnia, ha lehetséges. Hasonlóan a globális és nem globális közleményekhez, kiemelt témák küldéséhez az adminisztrátor adhat jogosultságot.'
	),
	array(
		0 => 'Mik azok a lezárt témák?',
		1 => 'A lezárt témák olyan témák, melyekbe nem lehet hozzászólást küldeni vagy szavazni bennük. Egy téma lezárásának több oka lehet, és egy témát egy adminisztrátor vagy egy moderátor zárhat le. Ha a fórum adminisztrátora megadta a szükséges jogosultságokat, önnek lehetősége lehet lezárni a saját témáit.'
	),
	array(
		0 => 'Mik azok a téma ikonok?',
		1 => 'A téma ikonok kis képek, melyeket a küldő társít a hozzászólásához jelképezve annak tartalmát. A téma ikonok használatának lehetősége az adminisztrátortól függ.'
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0 => '--',
		1 => 'Felhasználói szintek és csoportok'
	),
	array(
		0 => 'Kik azok az adminisztrátorok?',
		1 => 'Az adminisztrátorok a fórum legmagasabb rangú és jogú tagjai, ők üzemeltetik, és tartják karban. A fórum minden részletét szabályozhatják, például jogosultságokat adhatnak, kitilthatnak felhasználókat, csoportokat hozhatnak létre, moderátorokat nevezhetnek ki stb. attól függően, hogy a fórumalapító milyen jogosultságokat adott a többi adminisztrátornak. Teljesjogú moderátorok is lehetnek az összes fórumban.'
	), // a második felét kicsit leegyszerűsítettem :) ("dependant on the board founder and what permissions he or she has given the other administrators. They can also have full moderator capabilities in all the forums, depending on what the board founder has allowed.")
	array(
		0 => 'Kik azok a moderátorok?',
		1 => 'A moderátorok olyan különleges jogosultságokkal rendelkező tagok, akik napról napra figyelemmel követik a fórumokat. Jogukban áll szerkeszteni, törölni a hozzászólásokat, valamint lezárni, megnyitni, áthelyezni, törölni és szétválasztani a témákat az általuk moderált fórumban. Általánosságban a moderátorok azért vannak, hogy meggátolják a témába nem illő, sértegető vagy támadó hangvételű hozzászólások küldését. '
	),
	array(
		0 => 'Mik azok a csoportok?',
		1 => 'A felhasználói csoportok segítségével felosztható a közösség olyan egységekre, melyeket az adminisztrátor könnyen kezelhet. Minden felhasználó több csoportba is tartozhat, és mindegyik csoporthoz saját jogosultságok rendelhetők. Ezzel az adminisztrátor könnyedén létrehozhat zártkörű fórumokat, moderátorrá tehet egyszerre több felhasználót stb.'
	),
	array(
		0 => 'Hol látom a csoportokat, és hogyan csatlakozhatok egyhez?',
		1 => 'A fórumon lévő csoportokat a felhasználói vezérlőpultban tekintheti meg a „Csoportok” linkre kattintva. Ha csatlakozni szeretne egy csoporthoz, kattintson a megfelelő gombra. Mindemellett nem az összes csoport <em>nyílt hozzáférésű</em>, néhánynál jóváhagyás szükséges a csatlakozáshoz, néhány zárt, néhány pedig egyenesen rejtett. Ha a csoport nyitott, akkor a megfelelő gombra kattintva tud csatlakozni. Ezután a csoport vezetőjének jóvá kell hagynia a kérelmét – ennek kapcsán megkérdezheti, hogy miért szeretne csatlakozni a csoporthoz. Kérjük, ne zaklassa a csoportvezetőt, ha elutasítja a kérelmét, biztosan megvan az oka.'
	),
	array(
		0 => 'Hogyan lehetek csoportvezető?',
		1 => 'Amikor az adminisztrátor létrehoz egy csoportot, általában egy csoportvezető is kijelölésre kerül. Ha szeretne létrehozni egy csoportot, akkor lépjen kapcsolatba egy adminisztrátorral – például egy privát üzenet küldésével.'
	),
	array(
		0 => 'Miért jelenik meg néhány csoport más színnel?',
		1 => 'Az adminisztrátor színeket rendelhet egy csoport tagjaihoz, hogy könnyen azonosíthatók legyenek.'
	),
	array(
		0 => 'Mi az az „elsődleges csoport”?',
		1 => 'Ha ön több csoport tagja is, akkor ez a csoport határozza meg, hogy milyen színnel jelenik meg a neve, és hogy alapból milyen csoport avatar jelenik meg önnél. Az adminisztrátor engedélyezheti, hogy megváltoztassa az elsődleges csoportját a felhasználói vezérlőpultban.'
	),
	array(
		0 => 'Mi az az „A csapat” link?',
		1 => 'Ezen az oldalon egy listát találhat a fórum üzemeltetőiről: az adminisztrátorokról és a moderátorokról (utóbbiaknál jelezve például azt is, hogy melyik fórumot moderálják).'
	),
	array(
		0 => '--',
		1 => 'Privát üzenetek'
	),
	array(
		0 => 'Nem tudok privát üzenetet küldeni!',
		1 => 'Ennek három oka lehet: ön nem regisztrált, vagy nincs belépve; az adminisztrátor nem engedélyezte a fórumon privát üzenetek küldését; vagy az adminisztrátor nem engedélyezte önnek, hogy privát üzenetet küldjön. További információért lépjen kapcsolatba egy adminisztrátorral.'
	),
	array(
		0 => 'Folyamatosan kéretlen üzeneteket kapok!',
		1 => 'A felhasználói vezérlőpultban beállítható szűrők segítségével letilthat embereket, hogy ne tudjanak önnek privát üzenetet küldeni. Ha sértegető üzeneteket kap valakitől, értesítsen egy adminisztrátort, ő ugyanis beállíthatja, hogy egy felhasználó ne tudjon privát üzenetet küldeni.'
	),
	array(
		0 => 'Kéretlen vagy sértegető e-mailt kaptam valakitől a fórumról!',
		1 => 'Ezt sajnálattal halljuk. A fórum e-mail funkciója tartalmaz ez irányú óvintézkedéseket. Értesítse a fórum adminisztrátorát, küldje el neki a kapott e-mail teljes másolatát is – fontos, hogy ez a fejlécet is tartalmazza, ugyanis ebben szerepelnek az adatok az e-mail küldőjéről. A fórum adminisztrátora megteheti a szükséges lépéseket.'
	),
	array(
		0 => '--',
		1 => 'Barátok és haragosok'
	),
	array(
		0 => 'Mire valók a barátok és haragosok listák?',
		1 => 'Ezen listák segítségével rendszerezheti a fórum többi tagját. A barátok listában szereplő felhasználók megjelennek a felhasználói vezérlőpultban, így gyorsan elérheti őket, küldhet nekik privát üzenetet, és láthatja, hogy éppen jelen vannak-e. A használt megjelenés támogatásától függően, a barátok hozzászólásai kiemelve szerepelhetnek. Ha egy felhasználót haragosként jelöl meg, akkor a hozzászólásai alapból nem fognak megjelenni.'
	),
	array(
		0 => 'Hogyan adhatok hozzá, illetve távolíthatok el felhasználókat a barátok vagy haragosok listáról?',
		1 => 'A listáira két módon vehet fel felhasználókat. Minden felhasználó profiljában található egy link, melynek segítségével felveheti a barátai vagy a haragosai közé. Emellett a felhasználói vezérlőpultban is felvehet embereket, közvetlenül megadva a felhasználónevüket. Ugyanezen oldalon el is távolíthat felhasználókat a listáiról.'
	),
	array(
		0 => '--',
		1 => 'Keresés a fórumban'
	),
	array(
		0 => 'Hogyan kereshetek egy fórumban?',
		1 => 'Írja be a keresendő kifejezést közvetlenül a keresődobozba, mely rendelkezésre áll a fórum kezdőlapon, egy fórumban vagy egy témában. A részletes keresést a „Részletes keresés” linkre kattintva tudja elérni, mely a fórum összes oldalán elérhető. Ennek a helye a használt megjelenéstől függ.'
	),
	array(
		0 => 'Miért nem ad vissza találatot a keresésem?',
		1 => 'Valószínűleg a keresés túl általános volt, és sok gyakori szót tartalmazhatott, melyeket a phpBB3 nem indexel. Próbáljon meg egy jobban körülhatárolt kifejezést megadni, és használja ki a részletes keresés lehetőségeit.'
	),
	array(
		0 => 'A keresésem miért ad vissza üres oldalt!?',
		1 => 'A keresése olyan sok találatot adott vissza, hogy azt a webszerver már nem tudta kezelni. Használja a „Részletes keresést”, jobban körülhatárolt kifejezést adjon meg, és válassza ki, hogy csak melyik fórumban szeretne keresni.'
	),
	array(
		0 => 'Hogyan kereshetek a tagok között?',
		1 => 'Menj a „Taglista” oldalra, és kattintson a „Felhasználó keresése” linkre.'
	),
	array(
		0 => 'Hogyan találhatom meg a saját hozzászólásaimat és témáimat?',
		1 => 'A saját hozzászólásaihoz kétféleképpen férhet hozzá: vagy a felhasználói vezérlőpultban a „Saját hozzászólások megtekintése” linkre kattintva vagy a profilján keresztül. A témái eléréséhez használja a részletes keresést.'
	),
	array(
		0 => '--',
		1 => 'Téma feliratkozások és kedvencek'
	),
	array(
		0 => 'Mi a különbség a feliratkozás és a kedvencekbe tétel között?',
		1 => 'A phpBB3 kedvencek funkciója hasonlóan működik a böngészőjééhez. Ön nem kerül értesítésre, ha frissül a tartalom, de később visszatérhet a témához. Feliratkozáskor, ezzel ellentétben, ön értesítésre kerül – a kívánt módon –, amikor a téma vagy a fórum frissül.'
	),
	array(
		0 => 'Hogyan tudok feliratkozni egy fórumra vagy témára?',
		1 => 'Egy fórumra úgy tud feliratkozni, hogy a fórum oldalán alul a „Feliratkozás a fórumra” linkre kattint. Ezzel ugyanúgy feliratkozásra kerül a fórumra, mintha egy témára tette volna. Egy témára úgy is feliratkozhat, hogy hozzászólás küldésekor bejelöli az „E-mail küldése új hozzászólás érkezésekor” jelölőnégyzetet, de hasonlóan a fórumra való feliratkozáshoz, a téma alján megjelenő linkre kattintva is ugyanezt éri el.'
	),
	array(
		0 => 'Hogyan tudok leiratkozni?',
		1 => 'A leiratkozáshoz menjen a felhasználói vezérlőpultra, és kövesse a linkeket a feliratkozásaihoz.'
	),
	array(
		0 => '--',
		1 => 'Csatolmányok'
	),
	array(
		0 => 'Milyen csatolmányok engedélyezettek ezen a fórumon?',
		1 => 'Az adminisztrátorok saját maguk állíthatják be, hogy milyen típusú csatolmányokat engedélyeznek. Ha ön nem biztos benne, mi engedélyezett, lépjen kapcsolatba az adminisztrátorral.'
	),
	array(
		0 => 'Hogyan érem el a saját csatolmányaimat?',
		1 => 'Az ön által feltöltött csatolmányok eléréséhez, menjen a felhasználói vezérlőpultra, és kövesse a linkeket a csatolmányok részhez.'
	),
	array(
		0 => '--',
		1 => 'phpBB 3 kérdések'
	),
	array(
		0 => 'Ki készítette ezt a fórumot?',
		1 => 'Ezt a szoftvert (eredeti formájában) a <a href="http://www.phpbb.com/">phpBB Group</a> készítette, adta ki, és gyakorolja a szerzői jogokat felette. A GNU General Public License alatt érhető el, és szabadon terjeszthető. További információért lássa a linket.'
	),
	array(
		0 => 'Ki készítette ezt a magyar fordítást?',
		1 => 'A magyar fordítást a <a href="http://phpbb.hu/">Magyar phpBB Közösség</a> <a href="http://phpbb.hu/forditas">fordító</a> készítik, és tartják karban. A fordítást Fodor Bertalan és Menyhárt Zsolt készítette Berentés Marcell és Joó Ádám közreműködésével. Ha bármilyen hibát talál, kérjük, jelezze a <a href="http://phpbb.hu/bugs">hibabejelentőnkben</a>.'
	),
	array(
		0 => 'Miért nem érhető el az X szolgáltatás?',
		1 => 'Ezt a szoftvert a phpBB Group készítette, és licenceli. Ha úgy gondolja, hogy újabb szolgáltatások, funkciók szükségesek a fórumba, látogassa meg a phpbb.com weboldalt, és olvassa el amit phpBB Group mond erről. Kérjük, ne küldjön kéréseket a phpbb.com fórumába, a fejlesztők a Sourceforge oldalán várják az ötleteket. Emellett, kérjük, olvassa át a fórumot, mert lehet hogy már felmerült az ötlet, és a phpBB Group megfogalmazott ezzel kapcsolatban egy véleményt.' // ezt is lehetne javítani, meg az angol szövegnek megfelelőnek tenni...
	),
	array(
		0 => 'Ki az illetékes a fórumon olvasható tartalommal kapcsolatban?',
		1 => 'Sértő, illetve illegális tartalmak kapcsán az „A csapat” oldalon felsorolt adminisztrátorok közül kell egyet felkeresni. Ha nem kap választ, akkor a domain tulajdonosát (ezt kiderítheti egy ún. <a href="http://www.google.hu/search?q=whois&amp;meta=lr%3Dlang_hu">„whois  kereséssel”</a>). Ha a fórum egy ingyenes tárhelyen található, akkor azt a szolgáltatót értesítse. Kérjük, vegye figyelembe, hogy a phpBB Group-nak semmilyen köze, hozzáférése vagy beleszólása nincs a fórumon olvasható tartalomhoz, ezért nem tehető semmilyen módon felelőssé amiatt, hogy ki mire használja ezt a fórumot.' // ez se "ugyanaz", mint az angol (~jogi szöveg ez is, az is :)
	)
);

?>
