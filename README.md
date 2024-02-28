Kas ir API?

API ir saīsinājums no "Lietojumprogrammu programmēšanas interfeiss". Tas ir rīks, kas ļauj divām programmām sazināties savā starpā. API definē komandu kopu, ko viena programma var izmantot, lai pieprasītu datus vai pakalpojumus no otras programmas.


Kā deklarēt mainīgo PHP valodā?

PHP valodā mainīgo var deklarēt, izmantojot $ simbolu un mainīgā nosaukumu. Mainīgā nosaukumam jāuzsākas ar burtu vai apakšsvītru, un tam var sekot burti, cipari un apakšsvītras. 


Kādu arhitektūru izmanto Laravel, paskaidro kā tā strādā:

Laravel izmanto MVC (Model-View-Controller) arhitektūras modeli. Šī arhitektūra sadala lietojumprogrammu trīs slāņos:

Modelis: Šajā slānī definē datu struktūru un biznesa loģiku.
Skats: Šajā slānī definē lietotāja interfeisu.
Kontrolleris: Šajā slānī apstrādā lietotāja pieprasījumus un mijiedarbojas ar modeli un skatu.

Laravel darbojas šādi:
Lietotājs veic pieprasījumu tīmekļa serverim.
Tīmekļa serveris novirza pieprasījumu Laravel maršrutētājam.
Maršrutētājs nosaka atbilstošo kontrolieri un darbību, kas jāizpilda.
Kontrolleris apstrādā pieprasījumu un var mijiedarboties ar modeli, lai iegūtu vai saglabātu datus.
Kontrolleris atgriež skatu, kas tiek parādīts lietotājam.

Kas ir ORM, kāpēc to izmanto tīra SQL vietā?

ORM ir saīsinājums no "Object-Relational Mapping". Tas ir rīks, kas ļauj manipulēt ar datu bāzes datiem, izmantojot objektus. ORM slēpj datu bāzes specifiku un nodrošina vienotu interfeisu datu piekļuvei. ORM izmanto tīra SQL vietā, lai: Paaugstinātu produktivitāti: ORM ļauj rakstīt kodu, kas ir neatkarīgs no datu bāzes vadības sistēmas. Tas padara kodu vieglāk pārnesamu uz citām datu bāzēm. Uzlabotu koda lasāmību: ORM kods ir vieglāk lasāms un saprotams nekā tīrs SQL kods. Samazinātu kļūdu skaitu: ORM var palīdzēt novērst kļūdas, kas saistītas ar datu bāzes vaicājumu rakstīšanu.


Uzraksti Eloquent ORM pieprasījumu modelim User, kur nepieciešams iegūt visus lietotājus kuriem reitings ir lielāks par 4. Lietotāju tabulas struktūra:

$lietotaji = User::where('rating', '>', 4)->get();