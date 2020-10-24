<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choix du Film.</title>
    <link rel="stylesheet" href="index.css">

</head>
<body>
    <h1>Film aléatoire : </h1>

    <br>

    <button onclick="fonctionRamdomDisney()"> Disney </button>
    <button onclick="fonctionRamdomMarvel()"> Marvel </button>
    <button onclick="fonctionRamdomChaplin()"> Charlie Chaplin </button>
	<button onclick="fonctionRamdomAutre()"> Catégorie autres </button>
	
    
    

    <script>

        // Pour les films Disney

        function fonctionRamdomDisney(){

            var min = 0;
            var max = 42;

            var i = Math.floor(Math.random() * (max - min) + min);

            console.log(i);

            switch(i){
                case 0 : 
                document.write("<h1> " + i  + " = Tygra, la Glace et le Feu </h1> ");
                break;

                case 1 : 
                document.write("<h1> " + i  + " = Le roi lion </h1> ");
                break;

                case 2 : 
                document.write("<h1> " + i  + " = Toy Story </h1> ");
                break;

                case 3 : 
                document.write("<h1> " + i  + " = Hercule </h1> ");
                break;

                case 4 : 
                document.write("<h1> " + i  + " = Mulan </h1> ");
                break;

                case 5 : 
                document.write("<h1> " + i  + " = Pocahontas </h1> ");
                break;

                case 6 : 
                document.write("<h1> " + i  + " = Tarzan </h1> ");
                break;

                case 7 : 
                document.write("<h1> " + i  + " = Kuzco </h1> ");
                break;

                case 8 : 
                document.write("<h1> " + i  + " = Atlantide </h1> ");
                break;

                case 9 : 
                document.write("<h1> " + i  + " = Monstre et Cie </h1> ");
                break;

                case 10 : 
                document.write("<h1> " + i  + " = Lilo et Stitch </h1> ");
                break;

                case 11 : 
                document.write("<h1> " + i  + " = Le monde de nemo </h1> ");
                break;

                case 12 : 
                document.write("<h1> " + i  + " = La ferme se Rebelle </h1> ");
                break;

                case 13 : 
                document.write("<h1> " + i  + " = Les indestructibles </h1> ");
                break;

                case 14 : 
                document.write("<h1> " + i  + " = Star wars </h1> ");
                break;

                case 15 : 
                document.write("<h1> " + i  + " = Bambi </h1> ");
                break;

                case 16 : 
                document.write("<h1> " + i  + " = Wall-E </h1> ");
                break;

                case 17 : 
                document.write("<h1> " + i  + " = Volt </h1> ");
                break;
                
                case 18 : 
                document.write("<h1> " + i  + " = La fée Clochette </h1> ");
                break;

                case 19 : 
                document.write("<h1> " + i  + " = La haut </h1> ");
                break;

                case 20 : 
                document.write("<h1> " + i  + " = Raiponce </h1> ");
                break;

                case 21 : 
                document.write("<h1> " + i  + " = Gnoméo et Juliette </h1> ");
                break;

                case 22 : 
                document.write("<h1> " + i  + " = Rango </h1> ");
                break;

                case 23 : 
                document.write("<h1> " + i  + " = Rio </h1> ");
                break;

                case 24 : 
                document.write("<h1> " + i  + " = Rebelle </h1> ");
                break;

                case 25 : 
                document.write("<h1> " + i  + " = Le monde de Ralph </h1> ");
                break;

                case 26 : 
                document.write("<h1> " + i  + " = Les Croods </h1> ");
                break;

                case 27 : 
                document.write("<h1> " + i  + " = Epic </h1> ");
                break;

                case 28 : 
                document.write("<h1> " + i  + " = Monstre Academy </h1> ");
                break;

                case 29 : 
                document.write("<h1> " + i  + " = Turbo </h1> ");
                break;

                case 30 : 
                document.write("<h1> " + i  + " = Planes </h1> ");
                break;

                case 31 : 
                document.write("<h1> " + i  + " = La reine des neiges </h1> ");
                break;

                case 32 : 
                document.write("<h1> " + i  + " = La reine des neiges 2</h1> ");
                break;

                case 33 : 
                document.write("<h1> " + i  + " = Dragon </h1> ");
                break;

                case 34 : 
                document.write("<h1> " + i  + " = La Légende de Manolo </h1> ");
                break;

                case 35 : 
                document.write("<h1> " + i  + " = En route </h1> ");
                break;

                case 36 : 
                document.write("<h1> " + i  + " = Le voyage d'arlo </h1> ");
                break;

                case 37 : 
                document.write("<h1> " + i  + " = Le monde de Dory </h1> ");
                break;

                case 38 : 
                document.write("<h1> " + i  + " = Zootopie </h1> ");
                break;

                case 39 : 
                document.write("<h1> " + i  + " = Les Trolls </h1> ");
                break;

                case 40 : 
                document.write("<h1> " + i  + " = Baby boss </h1> ");
                break;

                case 41 : 
                document.write("<h1> " + i  + " = Vaiana </h1> ");
                break;

                case 42 : 
                document.write("<h1> " + i  + " = Coco </h1> ");
                break;

                default: 
                console.log("probleme ligne : " + i);

            }

        };

        // Pour les films marvel

        function fonctionRamdomMarvel(){

            var min = 0;
            var max = 24;

            var i = Math.floor(Math.random() * (max - min) + min);

            console.log(i);

            switch(i){
                case 0 : 
                document.write("<h1> " + i  + " = Iron Man </h1> ");
                break;

                case 1 : 
                document.write("<h1> " + i  + " = Hulk </h1> ");
                break;

                case 3 : 
                document.write("<h1> " + i  + " = Thor </h1> ");
                break;

                case 4 : 
                document.write("<h1> " + i  + " = Iron Man 2 </h1> ");
                break;

                case 5 : 
                document.write("<h1> " + i  + " = Captain America : First Avenger </h1> ");
                break;

                case 6 : 
                document.write("<h1> " + i  + " = Avengers </h1> ");
                break;

                case 7 : 
                document.write("<h1> " + i  + " = Iron Man 3 </h1> ");
                break;

                case 8 : 
                document.write("<h1> " + i  + " = Thor : Le monde des tenebres </h1> ");
                break;

                case 9 : 
                document.write("<h1> " + i  + " = Captaine America : Le soldat de l'hiver </h1> ");
                break;

                case 10 : 
                document.write("<h1> " + i  + " = Les gardiens de la galaxie </h1> ");
                break;

                case 11 : 
                document.write("<h1> " + i  + " = Les gardiens de la galaxie </h1> ");
                break;

                case 12 : 
                document.write("<h1> " + i  + " = Avengers : L'ere d'ultron </h1> ");
                break;

                case 13 : 
                document.write("<h1> " + i  + " = Ant-Man </h1> ");
                break;

                case 14 : 
                document.write("<h1> " + i  + " = Captaine America : civil War </h1> ");
                break;

                case 15 : 
                document.write("<h1> " + i  + " = Doctor Strange </h1> ");
                break;

                case 16 : 
                document.write("<h1> " + i  + " = Les gardiens de la galaxie Vol.2 </h1> ");
                break;

                case 17 : 
                document.write("<h1> " + i  + " = Spider-Man : Homecoming </h1> ");
                break;

                case 18 : 
                document.write("<h1> " + i  + " = Thor : Ragnarok </h1> ");
                break;

                case 19 : 
                document.write("<h1> " + i  + " = Black Panther </h1> ");
                break;

                case 20 : 
                document.write("<h1> " + i  + " = Avengers: Infinity War </h1> ");
                break;

                case 21 : 
                document.write("<h1> " + i  + " = Ant-MAN et la Guepe </h1> ");
                break;

                case 22 : 
                document.write("<h1> " + i  + " = Captain Marvel </h1> ");
                break;

                case 23 : 
                document.write("<h1> " + i  + " = Avengers: Endgame </h1> ");
                break;

                case 24 : 
                document.write("<h1> " + i  + " = Spider-Man : Far From Home </h1> ");
                break;

                default: 
                console.log("erreur ligne : " + i);
            };
        };

        function fonctionRamdomChaplin(){

        var min = 0;
        var max = 94;

        var i = Math.floor(Math.random() * (max - min) + min);

            console.log(i);

            switch(i){
                case 0 : 
                document.write("<h1> " + i  + " = Pour gagner sa vie </h1> ");
                break;

                case 1 : 
                document.write("<h1> " + i  + " = Charlot est content de lui  </h1> ");
                break;

                case 2 : 
                document.write("<h1> " + i  + " = L'étrange aventure de Mabel </h1> ");
                break;

                case 3 : 
                document.write("<h1> " + i  + " = La course au voleur </h1> ");
                break;

                case 4 : 
                document.write("<h1> " + i  + " = Charlot et le parapluie </h1> ");
                break;

                case 5 : 
                document.write("<h1> " + i  + " = Charlot fait du cinéma </h1> ");
                break;

                case 6 : 
                document.write("<h1> " + i  + " = Charlot danseur </h1> ");
                break;

                case 7 : 
                document.write("<h1> " + i  + " = Charlot est trop galant </h1> ");
                break;

                case 8 : 
                document.write("<h1> " + i  + " = Charlot marquis </h1> ");
                break;

                case 9 : 
                document.write("<h1> " + i  + " = Charlot aime la patronne  </h1> ");
                break;

                case 10 : 
                document.write("<h1> " + i  + " = Mabel au volant </h1> ");
                break;

                case 11 : 
                document.write("<h1> " + i  + " = Charlot et le Chronomètre </h1> ");
                break;

                case 12 : 
                document.write("<h1> " + i  + " = Charlot garçon de café </h1> ");
                break;


                case 13 : 
                document.write("<h1> " + i  + " = Un béguin de Charlot </h1> ");
                break;

                case 14 : 
                document.write("<h1> " + i  + " = Madame Charlot </h1> ");
                break;

                case 15 : 
                document.write("<h1> " + i  + " = Le maillet de Charlot </h1> ");
                break;

                case 16 : 
                document.write("<h1> " + i  + " = Her Friend the Bandit  </h1> ");
                break;

                case 17 : 
                document.write("<h1> " + i  + " = Charlot et Fatty sur le ring </h1> ");
                break;

                case 18 : 
                document.write("<h1> " + i  + " = Charlot et les saucisses </h1> ");
                break;

                case 19 : 
                document.write("<h1> " + i  + " = Charlot et le mannequin </h1> ");
                break;

                case 20 : 
                document.write("<h1> " + i  + " = Charlot Dentiste </h1> ");
                break;

                case 21 : 
                document.write("<h1> " + i  + " = Charlot garçon de théâtre </h1> ");
                break;

                case 22 : 
                document.write("<h1> " + i  + " = Charlot artiste peintre </h1> ");
                break;

                case 23 : 
                document.write("<h1> " + i  + " = Fièvre printanière </h1> ");
                break;

                case 24 : 
                document.write("<h1> " + i  + " = Charlot grande coquette </h1> ");
                break;

                case 25 : 
                document.write("<h1> " + i  + " = Charlot garde-malade </h1> ");
                break;

                case 26 : 
                document.write("<h1> " + i  + " = Charlot et Fatty font la bombe </h1> ");
                break;

                case 27 : 
                document.write("<h1> " + i  + " = Charlot concierge </h1> ");
                break;

                case 28 : 
                document.write("<h1> " + i  + " = Charlot rival d'amour </h1> ");
                break;

                case 29 : 
                document.write("<h1> " + i  + " = Charlot et Mabel aux courses </h1> ");
                break;

                case 30 : 
                document.write("<h1> " + i  + " = Charlot déménageur </h1> ");
                break;

                case 31 : 
                document.write("<h1> " + i  + " = Charlot papa </h1> ");
                break;

                case 32 : 
                document.write("<h1> " + i  + " = Le roman comique de Charlot et Lolotte </h1> ");
                break;

                case 33 : 
                document.write("<h1> " + i  + " = Charlot et Mabel en promenade </h1> ");
                break;

                case 34 : 
                document.write("<h1> " + i  + " = Charlot nudiste </h1> ");
                break;

                case 35 : 
                document.write("<h1> " + i  + " = Charlot débute </h1> ");
                break;

                case 36 : 
                document.write("<h1> " + i  + " = Charlot fait la noce </h1> ");
                break;

                case 37 : 
                document.write("<h1> " + i  + " = Charlot boxeur  </h1> ");
                break;

                case 38 : 
                document.write("<h1> " + i  + " = Charlot dans le parc </h1> ");
                break;

                case 39 : 
                document.write("<h1> " + i  + " = Charlot veut se marier </h1> ");
                break;

                case 40 : 
                document.write("<h1> " + i  + " = Charlot Vagabond  </h1> ");
                break;

                case 41 : 
                document.write("<h1> " + i  + " = Charlot à la plage </h1> ");
                break;

                case 42 : 
                document.write("<h1> " + i  + " = His Regeneration </h1> ");
                break;

                case 43 : 
                document.write("<h1> " + i  + " = Charlot Apprenti </h1> ");
                break;

                case 44 : 
                document.write("<h1> " + i  + " = Mam'zelle Charlot  </h1> ");
                break;

                case 45 : 
                document.write("<h1> " + i  + " = Charlot garçon de banque </h1> ");
                break;

                case 46 : 
                document.write("<h1> " + i  + " = Charlot marin </h1> ");
                break;

                case 47 : 
                document.write("<h1> " + i  + " = Charlot au music-hall </h1> ");
                break;

                case 48 : 
                document.write("<h1> " + i  + " = Charlot joue Carmen </h1> ");
                break;

                case 49 : 
                document.write("<h1> " + i  + " = Charlot cambrioleur </h1> ");
                break;


                case 50: 
                document.write("<h1> " + i  + " = Charlot chef de rayon </h1> ");
                break;

                case 51 : 
                document.write("<h1> " + i  + " = Charlot Pompier </h1> ");
                break;


                case 52 : 
                document.write("<h1> " + i  + " = Charlot musicien </h1> ");
                break;

                case 53 : 
                document.write("<h1> " + i  + " = Charlot rentre tard </h1> ");
                break;

                case 54 : 
                document.write("<h1> " + i  + " = Charlot et le comte </h1> ");
                break;

                case 55 : 
                document.write("<h1> " + i  + " = Charlot usurier </h1> ");
                break;

                case 56 : 
                document.write("<h1> " + i  + " = Charlot machiniste </h1> ");
                break;
                
                case 57 : 
                document.write("<h1> " + i  + " = Charlot patine </h1> ");
                break;

                case 58 : 
                document.write("<h1> " + i  + " = Charlot policeman </h1> ");
                break;

                case 59 : 
                document.write("<h1> " + i  + " = Charlot fait une cure </h1> ");
                break;

                case 60 : 
                document.write("<h1> " + i  + " = L'Émigrant </h1> ");
                break;
                case 61 : 
                document.write("<h1> " + i  + " = Charlot s'évade </h1> ");
                break;

                case 62 : 
                document.write("<h1> " + i  + " = How to Make Movies </h1> ");
                break;

                case 63 : 
                document.write("<h1> " + i  + " = Une vie de chien </h1> ");
                break;

                case 64 : 
                document.write("<h1> " + i  + " = Chase Me, Charlie ! </h1> ");
                break;
                case 65 : 
                document.write("<h1> " + i  + " = Les avatars de Charlot </h1> ");
                break;

                case 66 : 
                document.write("<h1> " + i  + " = The Bond </h1> ");
                break;

                case 67 : 
                document.write("<h1> " + i  + " = Charlot soldat </h1> ");
                break;

                case 68 : 
                document.write("<h1> " + i  + " = Une idylle aux champs  </h1> ");
                break;
                case 69 : 
                document.write("<h1> " + i  + " = Une journée de plaisir </h1> ");
                break;

                case 70 : 
                document.write("<h1> " + i  + " = The Professor </h1> ");
                break;

                case 71 : 
                document.write("<h1> " + i  + " = Le Kid </h1> ");
                break;

                case 72 : 
                document.write("<h1> " + i  + " = Charlot et le Masque de fer </h1> ");
                break;
                case 73 : 
                document.write("<h1> " + i  + " = Nice And Friendly </h1> ");
                break;

                case 74 : 
                document.write("<h1> " + i  + " = Jour de paye </h1> ");
                break;

                case 75 : 
                document.write("<h1> " + i  + " = Le Pèlerin </h1> ");
                break;

                case 76 : 
                document.write("<h1> " + i  + " = L'Opinion publique </h1> ");
                break;
                case 77 : 
                document.write("<h1> " + i  + " = La Ruée vers l'or  </h1> ");
                break;

                case 78 : 
                document.write("<h1> " + i  + " = Camille </h1> ");
                break;

                case 79 : 
                document.write("<h1> " + i  + " = Le Cirque </h1> ");
                break;

                case 80 : 
                document.write("<h1> " + i  + " = Mirages  </h1> ");
                break;
                case 81 : 
                document.write("<h1> " + i  + " = Les Lumières de la ville </h1> ");
                break;

                case 82 : 
                document.write("<h1> " + i  + " = Les Temps modernes </h1> ");
                break;

                case 83 : 
                document.write("<h1> " + i  + " = Le Dictateur </h1> ");
                break;

                case 84 : 
                document.write("<h1> " + i  + " = Monsieur Verdoux </h1> ");
                break;
                case 85 : 
                document.write("<h1> " + i  + " = Les Feux de la rampe </h1> ");
                break;

                case 86 : 
                document.write("<h1> " + i  + " = Un roi à New York </h1> ");
                break;

                case 87 : 
                document.write("<h1> " + i  + " = La Revue de Charlot </h1> ");
                break;

                case 88 : 
                document.write("<h1> " + i  + " = La Comtesse de Hong-Kong </h1> ");
                break;
                case 89 : 
                document.write("<h1> " + i  + " = Charlot, le gentleman vagabond </h1> ");
                break;

                case 90 : 
                document.write("<h1> " + i  + " = Chaplin's Goliath </h1> ");
                break;

                case 91 : 
                document.write("<h1> " + i  + " = Charlie : The Life and Art of Charlie Chaplin </h1> ");
                break;

                case 92 : 
                document.write("<h1> " + i  + " = The Tramp and the Dictator </h1> ");
                break;
                case 93 : 
                document.write("<h1> " + i  + " = Chaplin : du rire aux larmes </h1> ");
                break;

                case 94 : 
                document.write("<h1> " + i  + " = La naissance de Charlot </h1> ");
                break;

                default:
                console.log("erreur : " + i);
            };

        };

        function fonctionRamdomAutre(){

            var min = 0;
            var max = 38;

            var i = Math.floor(Math.random() * (max - min) + min);

            console.log(i);

            switch(i){
                case 0 : 
                document.write("<h1> " + i  + " = Forrest Gump </h1> ");
                break;

                case 1 : 
                document.write("<h1> " + i  + " = La Ligne verte </h1> ");
                break;

                case 2 : 
                document.write("<h1> " + i  + " = La Liste de Schindler </h1> ");
                break;

                case 3 : 
                document.write("<h1> " + i  + " = Le Parrain </h1> ");
                break;

                case 4 : 
                document.write("<h1> " + i  + " = Le Parrain </h1> ");
                break;

                case 5 : 
                document.write("<h1> " + i  + " = Les Evadés  </h1> ");
                break;

                case 6 : 
                document.write("<h1> " + i  + " = Le Seigneur des anneaux : le retour du roi </h1> ");
                break;

                case 7 : 
                document.write("<h1> " + i  + " = The Dark Knight, Le Chevalier Noir </h1> ");
                break;

                case 8 : 
                document.write("<h1> " + i  + " = Le Seigneur des anneaux : la communauté de l'anneau </h1> ");
                break;

                case 9 : 
                document.write("<h1> " + i  + " = Django Unchained </h1> ");
                break;

                case 10 : 
                document.write("<h1> " + i  + " = Le Seigneur des anneaux : les deux tours </h1> ");
                break;

                case 11 : 
                document.write("<h1> " + i  + " = Gladiator </h1> ");
                break;
                
                case 12 : 
                document.write("<h1> " + i  + " = Green Book : Sur les routes du sud </h1> ");
                break;
                
                
                case 13 : 
                document.write("<h1> " + i  + " = Interstellar </h1> ");
                break;
                
                
                case 14 : 
                document.write("<h1> " + i  + " = Le Bon, la brute et le truand </h1> ");
                break;
                
                case 15 : 
                document.write("<h1> " + i  + " = Il était une fois dans l'Ouest </h1> ");
                break;
                
                case 16 : 
                document.write("<h1> " + i  + " = Lion </h1> ");
                break;
                
                case 17 : 
                document.write("<h1> " + i  + " = Les Affranchis </h1> ");
                break;
                
                case 18 : 
                document.write("<h1> " + i  + " = Edward aux mains d'argent </h1> ");
                break;
                
                case 19 : 
                document.write("<h1> " + i  + " = L'Imaginarium du Docteur Parnassus </h1> ");
                break;
                
                case 20 : 
                document.write("<h1> " + i  + " = Sweeney Todd, le diabolique barbier de Fleet Street </h1> ");
                break;
                
                case 21 : 
                document.write("<h1> " + i  + " = Hugo Cabret </h1> ");
                break;
                
                case 22 : 
                document.write("<h1> " + i  + " = Alice au pays des merveilles </h1> ");
                break;
                
                case 23 : 
                document.write("<h1> " + i  + " = Always - Pour toujours </h1> ");
                break;
                
                case 24 : 
                document.write("<h1> " + i  + " = Men in Black </h1> ");
                break;
                
                case 25 : 
                document.write("<h1> " + i  + " = Amadeus </h1> ");
                break;
                                
                case 26 : 
                document.write("<h1> " + i  + " = Titanic </h1> ");
                break;
                                
                case 27 : 
                document.write("<h1> " + i  + " = V pour Vendetta </h1> ");
                break;
                                
                case 28 : 
                document.write("<h1> " + i  + " = Skyfall  </h1> ");
                break;
                                
                case 29 : 
                document.write("<h1> " + i  + " = Dracula  </h1> ");
                break;
                                
                case 30 : 
                document.write("<h1> " + i  + " = Abyss </h1> ");
                break;
                                
                case 31 : 
                document.write("<h1> " + i  + " = Shining </h1> ");
                break;
                                
                case 32 : 
                document.write("<h1> " + i  + " = Matrix </h1> ");
                break;
                                
                case 33 : 
                document.write("<h1> " + i  + " = Le Loup de Wall Street </h1> ");
                break;
                                
                case 34 : 
                document.write("<h1> " + i  + " = 2001 : L'Odyssée de l'espace </h1> ");
                break;
                                
                case 35 : 
                document.write("<h1> " + i  + " = Billy Elliot </h1> ");
                break;
                                
                case 36 : 
                document.write("<h1> " + i  + " = Mad Max : Fury Road </h1> ");
                break;
                                
                case 37 : 
                document.write("<h1> " + i  + " = Miss Peregrine et les Enfants particuliers </h1> ");
                break;
                                
                case 38 : 
                document.write("<h1> " + i  + " = La Vague </h1> ");
                break;
				
				default :
				console.log("erreur : " + i);
                
                
            }

        };

















    </script>
</body>
</html>