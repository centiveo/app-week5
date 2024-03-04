# Welkom bij VivesCommerce!

VivesCommerce is een API-backend voor de uitrol van een applicatie waarmee je online kunt shoppen. Om te starten werd een basis opgezet met een aantal migrations, modellen en controllers. Sommige endpoints functioneren ook al correct, andere endpoints moeten door jou nog worden voorzien.

# Modellen

Hieronder vind je een overzicht van de belangrijkste modellen in onze Laravel API. Vul eventueel aan waar je dat nodig acht. Ontbreken hier bijvoorbeeld bepaalde modellen? Ontbreekt belangrijke informatie?

## User

Model waarmee je de details van een gebruiker bijhoudt. E-mailadres, wachtwoord & gebruikersnaam zijn de belangrijkste.

## Product

Eenvoudig model waarmee we de producten aanspreken in onze database.

## Order

Het moet in onze applicatie mogelijk zijn om bestellingen te plaatsen. Via de API moet het mogelijk zijn om een nieuwe bestelling aan te maken. Aan die bestelling moet je ook telkens producten kunnen toevoegen.

## Review

Gebruikers kunnen reviews toevoegen en consulteren.

# API Endpoints

| Endpoint     | Verb   | Werking                                                                                                                            |
| ------------ | ------ | ---------------------------------------------------------------------------------------------------------------------------------- |
| /getusers    | GET    | Geeft een lijst van alle users in de database.                                                                                     |
| /postuser    | POST   | Laat je een nieuwe user toevoegen aan de database.                                                                                 |
| /updateuser  | PATCH  | Laat je op basis van een mailadres de gegevens van een user aanpassen.                                                             |
| /deleteuser  | DELETE | Op basis van het mailadres kun je een user verwijderen.                                                                            |
| /getorders   | GET    | Geeft een lijst van alle orders in de database. Als er een mailadres is opgegeven retourneer je enkel de orders van die gebruiker. |
| /postorder   | POST   | Laat je een nieuwe bestelling toevoegen aan de database.                                                                           |
| /updateorder | PATCH  | Op basis van het orderID kun je een bestelling wijzigen.                                                                           |
| /deleteorder | DELETE | Op basis van het orderID kun je een bestelling verwijderen.                                                                        |
| /getreviews  | GET    | Geeft een lijst van alle reviews in de database. Als er een productID is opgegeven retourneer je enkel de reviews van dat product. |

## Security

Onderzoek hoe je je API-endpoints kunt beveiligen (Laravel Sanctum). Hoe kun je deze oplossing integreren in je API-server? Pas die oplossing ook toe.

## Throttling

Om overbelasting van je API-server te voorkomen kan het interessant zijn om throttling toe te passen. Onderzoek wat dit precies is en hoe je dit kunt integreren in je API server. Pas je oplossing toe.

## Opdracht

1. Zorg ervoor dat de boilerplate-code in deze repo correct functioneert op jouw systeem. Voer de migrations ook uit.
2. Controleer of alle endpoints correct functioneren. Voeg ontbrekende endpoints toe en wijzig foutieve endpoints.
3. Test alle endpoints uit door gebruik te maken van Postman.
4. Denk na over de beveiliging van onze API endoints. Welke endpoints moeten beveiligd worden? Welke mogen publiek beschikbaar zijn?
5. Voor je begint denk je na welke data een endpoint moet terugsturen. Volstaat een simpele '200 - OK' of is er meer data nodig? Waarom?
