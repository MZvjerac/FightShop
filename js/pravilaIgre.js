function pravilaIgre()
{
//2 pravila
	 quotes=new Array(2);
	 authors=new Array(2);

	quotes[0]="Zainteresovani korisnici se prijavljuju za borbu. Administrator  ugovaranja borbi svakodnevno pregledava zahteve i poziva sistem da izvrši njihovo uparivanje na osnovu određenih kriterijuma (kilaža, visina, broj ranije dobijenih borbi, željeni datum i mesto borbe) što predstavlja prvi korak u organizaciji borbe.  Nakon što sistem izbaci parove formirane na osnovu ovih kriterijuma, administrator unosi redom zahtevane datume i mesta održavanja borbi i poziva sistem da pošalje e-mejlom zahteve za održavanje borbi svim sportsko/borilačkim klubovima iz mesta koje odgovara parovima za borbu. Borilački klubovi vraćaju informaciju putem e-maila da li mogu organizovati borbu. Klubovi koji mogu organizovati borbu šalju satnice, cenu održavanja borbe i posebne napomene u vezi sa pripremama za borbu (pravila borbe, potrebna oprema).";
	authors[0] = "M. Zvjerac";
	quotes[1]="Odabira se onaj klub koji je najjeftiniji i najbliži mestu stanovanja uparenih korisnika. Izabranom klubu se šalje rezervacija sa podacima o borcima.  Nakon pravljenja parova i rezervacije sportsko/borilačkog kluba, predlog se šalje uparenim korisnicima sa informacijama o protivniku, vremenu, ceni i mestu održavanja. Korisnici mogu da prihvate ili da odbiju borbu.  Ako i jedan i drugi korisnik prihvate borbu, šalju povratnu informaciju kojom potvrđuju svoje učešće, a administrator šalje potvrdu izabranom klubu. Dva dana pre održavanja borbe, administrator ugovaranja borbe šalje potvrde korisnicima sa detaljnim informacijama o rasporedu aktivnosti tokom održavanja čitavog događaja, satnice borbi i ostale napomene.  Ukoliko jedan od korisnika odbije borbu, borba se otkazuje i korisnik može da pošalje novi zahtev.";
	authors[1] = "M. Zvjerac";

	index=Math.floor(Math.random() * quotes.length);
	document.getElementById("pravilaIgre").innerHTML=quotes[index]
	document.getElementById("autor").innerHTML=authors[index]

}