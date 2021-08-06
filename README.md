## Engine UP - Ng1np

### Engine UP Site Software. Jednostavan PHP Engine.

- Jednostavan Engine napisan za početak u PHP-u. Veoma prost za korišćenje i vrlo proširiv sa podacima i slobodom da se stilizuje po potrebi. Stilovi se nalaze u inc/header.php a tu se i nalazi jednostavna funkcija za random prikazivanje slika na stranicama.

<p>
<img src="https://github.com/antistereotip/ng1np/blob/main/ng1np.png" width="200" />  
</p>

### "Engine UP" Logika:

- set
- lib
- up

### Keep It Simple Stupid (Zadrzi glupavu jednostavnost)

### Dokumentacija na srpskom:
- index.php stranica poziva klasu iz foldera set/ pod nazivom class.php. Ta klasa je zadužena za renderovanje stranice. Folder lib/ ima stranice sa sintaksom page.php i unutra su nizovi koji su zapravo varijable. Zatim poslednji u logici je folder up/ a u njemu se nalaze stranice sa sintaksom page.tpl i to su zapravo okviri u kojima se kroz petlje prikazuju nizovi iz foldera lib/. Nazive Engine UP je radi logike SETUJ (set) BIBLIOTEKU (lib) na WEB (up). Ovo je zapravo jednostavan pattern ili matrica koja ima svoju logiku. Ako želite nove stranice, potrebno je u index.php u niz $pages dodati imena stranice, zatim dodati u lib/ stranicu sa ekstenzijom .php i u up/ folder dodati stranicu sa istim imenom ekstenzije .tpl. Engine je jednostavan i postoji razumna logika i u osnovnoj verziji nema bazu podataka, već je sve u nizovima u folderu lib/. Folder up/ je nešto poput view u mvc patternu, dok je lib/ nešto kao model a set/ je nešto poput controllera. Ovo nije mvc pattern već custom logika koju je moguće nadograditi bazom podataka ali pretpostavka da za srednje sajtove nizovi najbrže hendluju podatke i nije potrebna relaciona baza podataka. Ukoliko želite feature koj radi sa bazom podataka, ta opcija se nalazi ovde: https://github.com/antistereotip/ng1np-1
- Pokusšaću da razvijem engine up u potpuno autonomni engine koj može raditi kao matrica pisana u bilo kom jeziku. set/ lib/ up/ je modularna matrica.
- Moduli će biti svedeni na minimum kodnog prostora, ostaviću više prostora za developere koji žele da ga prošire.
- Matrica koja je prisutna u ovom kodu je multidimenzioni niz sa podacima gde je moguće proširiti niz još dublje.

### TODO:
- Napisati paralelno kod engine up-a u LISP-u.
- Napisati kod u Pyhton-u.
- Napisati kod u ANSI C-u.

