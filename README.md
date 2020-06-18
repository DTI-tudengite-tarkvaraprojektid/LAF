# TLÜ LAF

## Eesmärk ja lühikirjeldus
LAF-i veebilehe abil on võimalik **Tallinna Ülikooli** tudengitel lihtsamini leida enda kaduma läinud esemeid. Juhul kui eseme omanikku ei selgugi, siis liigub leitud ese oksjoni rubriiki. Oksjonil on võimalik soovijal teha oma pakkumine ning ese ära osta.

Lehest on suur abi ka ülikoolile kuna varasemalt jäid paljud leitud asjad kappidesse seisma.
Töötajate elu lihtsustamiseks on lisatud mitmeid **automaatseid tegevusi**:
- kaotatud eseme kuulutuste kustumine 6 kuu möödudes
- leitud eseme kuulutuse oksjoni rubriiki liikumine (ei vaja töötaja sekkumist)
- automaatteavitused eseme leidmise/oksjoni võidu korral (töötaja ei pea ise meili koostama hakkama)

### Lisaks on võimalik:
- vaadata aegunud esemete nimekirja, millele ka oksjonil omanikku ei tekkinud (need esemed võib seejärel taaskasutusse anda)
- vaadata edukate oksjonite nimekirja, kus on nähtaval parima pakkumise summa ning pakkuja meiliaadress.
- seadistada tulevastele oksjonitele kehtima hakkavat pakkumise sammu ning algsummat (oksjoni seadete alt - muudatus kehtib kõikidele algavatele oksjonitele).
- kuulutusi saab filtreerida Otsisõna, Asukoha, Kuupäeva ja Kategooria järgi. Töötaja saab ka hoiupaiga järgi otsida.
- tudengid saavad veebilehel tegutseda ilma, et peaksid eelnevalt sisse logima.
- tudeng, kes kuulutuse lisas või kõik töötajad saavad kaotatud eseme kuulutuse ka varem maha võtta kui ese on üles leitud. Tudeng peab selleks teadma meiliaadressi, mille ta kuulutuse sisestamisel lisas.

LAF-i veebileht on valminud [Tallinna Ülikooli Digitehnoloogiate instituudis](https://www.tlu.ee/dt) tarkvaraarenduse projekti aine raames.

## Tiimiliikmed
- Anneli Põldaru
- Sandra Maidla
- Liina Tobro
- Anete Vaalu
- Herman Petrov

## Ekraanipildid (tava ning admini lehest)

![Source code](Screenshots/Screenshot.jpg)

![Source code](Screenshots/Screenshot_admin.jpg)

## Ekraanipildid (tavakasutaja mobiilsest vaatest)

<p float="left">
  <img src="Screenshots/Mob_screenshot_1.jpg" width="300" />
  <img src="Screenshots/Mob_screenshot_2.jpg" width="300" /> 
  <img src="Screenshots/Mob_screenshot_3.jpg" width="300" />
</p>


## Kasutatud tehnoloogiad ja nende versioonid
- HTML5
- PHP 5.6.40
- MySQL
- CSS3
- JavaScript

#### Kasutatud teegid:
- Jquery 3.4.1
- Jquery-ui 1.12.1
- Jquery-validate 1.19.2

- https://github.com/stefangabos/Zebra_Datepicker
- https://github.com/kamilkp/autoheight

### Kasutatud serveri andmed:
- Apache 2.4.6 (CentOS)
- PHP 5.6.40
- 10.2.25-MariaDB 

## Paigaldusjuhised
1. Installi ja seadista PHP, MySQL ja Apache server. Kui selles osas tekib küsimusi, leiad abi Googlest.
2. Lae siinses repositooriumis olevad failid GitHubist alla ja lisa need serverisse loodud kausta (kasutades failide lisamiseks nt WinSCP).
3. Loo andmebaasitabelid kasutades selleks [SQL kaustas olevaid käske](SQL/create_database.sql).
4. Loo config_laf.php nimeline fail ning muuda ära andmebaasiga ühendumiseks vajalike muutujate väärtused.

- config_laf.php faili näide:
```php
<?php
    $serverHost = "lisaEndaAndmed";
    $serverUsername = "lisaEndaAndmed";
    $serverPassword = "lisaEndaAndmed";
	$database = "lisaEndaAndmed";

    $pic_upload_dir_orig = '/home/LAF/laf_pics/';
    $pic_upload_dir_thumb = '/home/LAF/laf_pics_thumbnail/';
    $pic_read_dir_thumb = '../home/LAF/laf_pics_thumbnail/';
?>
```

5. config_laf.php fail peaks asuma avalikust kaustast väljaspool. Kui aga koodis vastavad muudatused teha võib selle ka mujale paigutad!
6. Admini kasutaja loomiseks ava oma brauseris temp_admin_creat.php nimeline fail.
7. Kui oled admini konto valmis saanud siis kustuta temp_admin_creat.php fail serveris asuvast kaustast ära.

## Litsents

See projekt on MIT litsendi all - vaata [LICENSE faili](LICENSE) täpsema info jaoks.
