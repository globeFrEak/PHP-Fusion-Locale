<?php
// Prevod by GeneralDusan, generaldusan@yahoo.com wwww.contrateam.net/ //
$locale['400'] = "Registracija";
$locale['401'] = "Aktiviraj Nalog";
// Registration Errors
$locale['402'] = "Morate da navedete korisničko ime, lozinku i e-mail adresu.";
$locale['403'] = "Korisničko ime sadrži nedozvoljenje karaktere.";
$locale['404'] = "Lozinke se ne poklapaju.";
$locale['405'] = "Nedozvoljena lozinka, molimo Vas da koristite samo alfanumeričke karaktere.<br>
Lozinka mora da bude dugačka najmanje 6 karaktera.";
$locale['406'] = "Vaša e-mail adresa nije ispravna.";
$locale['407'] = "Žao nam je, ali korisničko ime ".(isset($_POST['username']) ? $_POST['username'] : "")." je u upotrebi.";
$locale['408'] = "Žao nam je, ali e-mail adresa ".(isset($_POST['email']) ? $_POST['email'] : "")." je u upotrebi.";
$locale['409'] = "Nalog koji nije aktiviran je registrovan na ovu e-mail adresu.";
$locale['410'] = "Kod za proveru koji ste uneli nije ispravan.";
$locale['411'] = "Vaša e-mail adresa ili njen domen je na našoj crnoj listi.";
// Email Message
$locale['449'] = "Dobrodošli na ".$settings['sitename'];
$locale['450'] = "Zdravo ".(isset($_POST['username']) ? $_POST['username'] : "").",\n
Dobrodošli na ".$settings['sitename'].". Ovo su Vaši detalji za prijavu:\n
Korisničko ime: ".(isset($_POST['username']) ? $_POST['username'] : "")."
Lozinka: ".(isset($_POST['password1']) ? $_POST['password1'] : "")."\n
Molimo Vas da aktivirate Vaš nalog uz pomoć sledećeg linka:\n";
// Registration Success/Fail
$locale['451'] = "Registracija je sada kompletna";
$locale['452'] = "Sada možete da se ulogujete.";
$locale['453'] = "Administrator će aktivirati Vaš nalog uskoro.";
$locale['454'] = "Vaša registracija je skoro kompletna, primićete e-mail koji sadrži podatke za prijavu kao i link za aktiviranje Vašeg naloga.";
$locale['455'] = "Vaš nalog je potvrđen.";
$locale['456'] = "Registracija nije uspela";
$locale['457'] = "Slanje e-mail-a nije uspelo, molimo Vas da kontaktirate <a href='mailto:".$settings['siteemail']."'>ADMINISTRATORA</a>.";
$locale['458'] = "Registracija nije uspela zbog:";
$locale['459'] = "Molimo Vas da pokušate ponovo";
// Register Form
$locale['500'] = "Molimo Vas da unesete Vaše podatke ispod. ";
$locale['501'] = "E-mail za potvrdu je poslat na adresu koju ste naveli. ";
$locale['502'] = "Polja oznacena sa <span style='color:#ff0000;'>*</span> moraju da budu popunjena.
Vaše korisničko ime i lozinka su CaSe-SeNsITiVe, molimo Vas da koristite samo mala slova.";
$locale['503'] = " Možete da izmenite podatke, kao i da dodate nove čim se prijavite.";
$locale['504'] = "Kod za proveru:";
$locale['505'] = "Unesite kod za proveru:";
$locale['506'] = "Registracija";
$locale['507'] = "Sistem za registraciju je trenutno isključen, pokušajte kasnije.";
// Validation Errors
$locale['550'] = "Morate da navedete korisničko ime.";
$locale['551'] = "Morate da navedete lozinku.";
$locale['552'] = "Morate da navedete e-mail adresu.";
?>