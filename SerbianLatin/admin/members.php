<?php
// Prevod by GeneralDusan, generaldusan@yahoo.com wwww.contrateam.net/ //

// Member Management Options
$locale['400'] = "Korisnici";
$locale['401'] = "Korisnik";
$locale['402'] = "Dodaj";
$locale['403'] = "Tip korisnika";
$locale['404'] = "Opcije";
$locale['405'] = "Pogledaj";
$locale['406'] = "Izmeni";
$locale['407'] = "Isključi ban";
$locale['408'] = "Banuj";
$locale['409'] = "Obriši";
$locale['410'] = "Nema korisnika čije ime počinje sa ";
$locale['411'] = "Prikaži sve";
$locale['412'] = "Aktiviraj";
// Ban/Unban/Delete Member
$locale['420'] = "Ban je uključen";
$locale['421'] = "Ban je uklonjen";
$locale['422'] = "Korisnik je obrisan";
$locale['423'] = "Da li ste sigurni da želite da obrišete ovog korisnika?";
$locale['424'] = "Korisnik je aktiviran";
$locale['425'] = "Nalog je aktiviran u ";
$locale['426'] = "Zdravo [USER_NAME],\n
Vaš nalog na ".$settings['sitename']." je aktiviran.\n
Sada možete da se ulogujete koristeći podatke koje ste naveli prilikom registracije.\n
Pozdrav,
".$settings['siteusername'];
// Edit Member Details
$locale['430'] = "Izmeni korisnika";
$locale['431'] = "Detalji korisnika su izmenjeni";
$locale['432'] = "Vrati se na administraciju korisnika";
$locale['433'] = "Vrati se na admin index";
$locale['434'] = "Izmena detalja korisnika nije uspešna:";
// Extra Edit Member Details form options
$locale['440'] = "Sačuvaj promene";
// Update Profile Errors
$locale['450'] = "Nemožete da izmenite glavnog administratora.";
$locale['451'] = "Morate da navedete korisničko ime i e-mail adresu.";
$locale['452'] = "Korisničko ime sadrži nedozvoljene znakove.";
$locale['453'] = "Korisničko ime ".(isset($_POST['user_name']) ? $_POST['user_name'] : "")." je u upotrebi.";
$locale['454'] = "Nevažeća e-mail adresa;.";
$locale['455'] = "E-mail adresa ".(isset($_POST['user_email']) ? $_POST['user_email'] : "")." je u upotrebi.";
$locale['456'] = "Nove lozinke se ne poklapaju.";
$locale['457'] = "Neispravna lozinka, morate da koristite samo alfanumeričke karaktere.<br>
Lozinka mora da bude dugačka najmanje 6 karaktera.";
$locale['458'] = "<b>Upozorenje:</b> skripta je obavila neočekivanu operaciju.";
// View Member Profile
$locale['470'] = "Profil korisnika";
$locale['472'] = "Statistika";
$locale['473'] = "Korisničke grupe";
// Add Member Errors
$locale['480'] = "Dodaj korisnika";
$locale['481'] = "Korisnički nalog je kreiran.";
$locale['482'] = "Korisnički nalog nije kreiran.";
?>