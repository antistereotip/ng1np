## Engine UP - Ng1np

<p>
<img src="https://github.com/antistereotip/ng1np/blob/main/pic/logotip.png" width="170" />  
</p>

### Engine UP Hack Matrix Modularni Softver. Jednostavan PHP Engine.

- Jednostavan Engine napisan za početak u PHP-u. Veoma prost za korišćenje i vrlo proširiv sa podacima i slobodom da se stilizuje po potrebi. Stilovi se nalaze u inc/header.php a tu se i nalazi jednostavna funkcija za random prikazivanje slika na stranicama. Glavna logika engine-a je **rad sa nizovima**. Nizovi su multidimenzioni i sadrže podatke potrebne za web stranice. Nizovi mogu biti proširivi, a templejti se mogu proširiti dokle god ide dubina nizova. Korišćenjem smart .tpl logike dobija se čista forma pokretača iz nizova.

### Upotreba:

- cd /var/www/html/
- sudo git clone https://github.com/antistereotip/ng1np
- sudo chown -R www-data:www-data /var/www/html/ng1np/
- U browseru kucati sledeću adresu: http://localhost/ng1np/


### Engine UP Logika:

- set (Setuj)
- lib (Biblioteku)
- up (Na Web)

### KISS - Keep It Simple Stupid (Zadrži glupavu jednostavnost)

### Dokumentacija na srpskom:

- index.php stranica poziva klasu iz foldera **set/** pod nazivom class.php. Ta klasa je zadužena za renderovanje stranice. Folder **lib/** ima stranice sa sintaksom page.php i unutra su nizovi koji su zapravo varijable. Zatim poslednji u logici je folder **up/** a u njemu se nalaze stranice sa sintaksom page.tpl i to su zapravo okviri u kojima se kroz petlje prikazuju nizovi iz foldera lib/. Nazive Engine UP je radi logike SETUJ **(set)** BIBLIOTEKU **(lib)** na WEB **(up)**. Ovo je zapravo jednostavan pattern ili matrica koja ima svoju logiku. Ako želite nove stranice, potrebno je u index.php u niz $pages dodati imena stranice, zatim dodati u **lib/** stranicu sa ekstenzijom .php i u **up/** folder dodati stranicu sa istim imenom ekstenzije .tpl. 
- Engine je jednostavan i postoji razumna logika i u osnovnoj verziji nema bazu podataka, već je sve u nizovima u folderu **lib/**. Folder **up/** je nešto poput view u mvc patternu, dok je **lib/** nešto kao model a **set/** je nešto poput controllera. Ovo nije mvc pattern već custom logika koju je moguće nadograditi bazom podataka ali pretpostavka da za srednje sajtove nizovi najbrže hendluju podatke i nije potrebna relaciona baza podataka. Ukoliko želite feature koj radi sa bazom podataka, ta opcija se nalazi ovde: https://github.com/antistereotip/ng1np-1
- Pokušaću da razvijem **engine up** u potpuno autonomni engine koj može raditi kao matrica pisana u bilo kom jeziku. **set/** **lib/** **up/** je modularna matrica.
- Moduli će biti svedeni na minimum kodnog prostora, ostaviću više prostora za developere koji žele da ga prošire.
- Matrica koja je prisutna u ovom kodu je multidimenzioni niz sa podacima gde je moguće proširiti niz još dublje.
- Matrice
- Dvodimenzionalni niz se u praktičnom programiranju naziva i matrica. Niz može biti jednodimenzionalan (jednostavno niz), dvodimenzionalan (matrica - zbog analogije sa istoimenim matematičkim pojmom), i višedimenzionalan (kocka, četvorodimenzionalna kocka itd.).
- Ako imamo matricu M dimenzija 2 x 8, njeni indexi su organizovani kao u tabeli navedenoj ispod:
`M(1,1), M(1,2), M(1,3), M(1,4), M(1,5), M(1,6), M(1,7), M(1,8)
M(2,1), M(2,2), M(2,3), M(2,4), M(2,5), M(2,6), M(2,7), M(2,8)`
-Matrice s istim brojem redova i kolona nazivaju se kvadratne. Kvadratna matrica ima glavnu i sporednu dijagonalu. Primer kvadratne matrice na primeru ispod:
`M(1,1), M(1,2), M(1,3), M(1,4)
M(2,1), M(2,2), M(2,3), M(2,4)
M(3,1), M(3,2), M(3,3), M(3,4)
M(4,1), M(4,2), M(4,3), M(4,4)`
- Šta kaže matematika ? Horizontalne linije u matrici se nazivaju vrstama, a vertikalne kolonama matrice. Matrica sa m vrsta i n kolona se naziva m-sa-n matricom (kaže se i zapisuje da je formata m×n) a m i n su dimenzije matrice.
- Imamo dve matrice, vektor vrste, na primer: M = [1, 2, 3] - matrica 1 x 3, zatim R = [0, 2, 4] - matrica 1 x 3. Želimo da ih saberemo. Primer kako sabiramo matrice je ispod:
`[1, 2, 3] + [0, 2, 4] = [ 1 + 0, 2 + 2, 3 + 4] = [1, 4, 7]`
- Da bi ste razumeli matrice i njihovu upotrebu u računarstvu, moraćete dublje u zečiju rupu. Down The Rabbit Hole.

### TODO:

- Napisati paralelno kod engine up-a u **LISP**-u.
- Napisati kod u **Pyhton**-u.
- Napisati kod u **ANSI C**-u.

