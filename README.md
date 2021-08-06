## ng1np
### Engine UP Repositorium. Simple PHP Engine.

- Jednostavan Engine napisan za pocetak u PHP-u. Veoma prost za koriscenje i vrlo prosiriv sa podacima i slobodom da se stilizuje po potrebi. Stilovi se nalaze u inc/header.php a tu se i nalazi jednostavna funkcija za random prikazivanje slika na stranicama.

<p>
<img src="https://github.com/antistereotip/ng1np/blob/main/ng1np.png" width="200" />  
</p>

### Engine UP Logic:

- set
- lib
- up

### Keep It Simple Stupid

### Dokumentacija na srpskom:
- index.php stranica poziva klasu iz foldera set/ pod nazivom class.php. Ta klasa je zaduzena za renderovanje stranice. Folder lib/ ima stranice sa sintaksom page.php i unutra su nizovi koji su zapravo varijable. Zatim poslednji u logici je folder up/ a u njemu se nalaze stranice sa sintaksom page.tpl i to su zapravo okviri u kojima se kroz petlje prikazuju nizovi iz foldera lib/. Nazive Engine UP je radi logike SETUJ (set) BIBLIOTEKU (lib) na WEB (up). Ovo je zapravo jednostavan pattern ili matrica koja ima svoju logiku. Ako zelite nove stranice, potrebno je u index.php u niz $pages dodati imena stranice, zatim dodati u lib/ stranicu sa ekstenzijom .php i u up/ folder dodati stranicu sa istim imenom ekstenzije .tpl. Engine je jednostavan i postoji razumna logika i u osnovnoj verziji nema bazu podataka, vec je sve u nizovima u folderu lib/. Folder up/ je nesto poput view u mvc patternu, dok je lib/ nesto kao model a set/ je nesto poput controllera. Ovo nije mvc pattern vec custom logika koju je moguce nadograditi bazom podataka ali pretpostavka da za srednje sajtove nizovi najbrze hendluju podatke i nije potrebna relaciona baza podataka. Ukoliko zelite feature koj radi sa bazom podataka, ta opcija se nalazi ovde: https://github.com/antistereotip/ng1np-1
- Pokusacu da razvijem engine up u potpuno autonomni engine koj moze raditi kao matrica pisana u bilo kom jeziku. set/ lib/ up/ je modularna matrica.
- Moduli ce biti svedeni na minimum kodnog prostora, ostavicu vise prostora za developere koji zele da ga prosire.
- Matrica koja je prisutna u ovom kodu je multidimenzioni niz sa podacima gde je moguce prosiriti niz jos dublje.

### TODO:
- Napisati paralelno kod engine up-a u LISP-u.
- Napisati kod u Pyhton-u.
- Napisati kod u ANSI C-u.

