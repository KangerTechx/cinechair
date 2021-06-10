-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 10 juin 2021 à 21:56
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cinechair`
--

-- --------------------------------------------------------

--
-- Structure de la table `bluray`
--

DROP TABLE IF EXISTS `bluray`;
CREATE TABLE IF NOT EXISTS `bluray` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `type_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `release_date` date NOT NULL,
  `note` int(11) NOT NULL,
  `cover` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type_id` (`type_id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `bluray`
--

INSERT INTO `bluray` (`id`, `name`, `type_id`, `cat_id`, `price`, `release_date`, `note`, `cover`, `description`) VALUES
(1, '7th Heaven', 2, 8, 7, '1996-08-26', 4, '7th-heaven.jpg', 'Cette série met en scène le pasteur Eric Camden et son épouse Annie qui élèvent leurs enfants dans la petite ville de Glen Oak en Californie. Matt, Mary, Lucy, Simon et Rosie sont respectivement âgés de 16, 14, 12, 10 et 5 ans au début de la série. La série montre les difficultés et les avantages d\'une famille nombreuse. Chaque épisode donne lieu à une réflexion sur la vie, ses épreuves, ses joies et sur l\'aide que la religion peut apporter face à ces problèmes.'),
(3, '90210', 2, 8, 60, '2008-09-02', 4, '90210.jpg', 'Harry Wilson est un ancien élève du lycée de Beverly Hills. Il s\'était installé à Wichita dans le Midwest après avoir obtenu son diplôme. Le voilà forcé de revenir en ville lorsque sa mère, une ancienne actrice des années soixante-dix, sombre dans l\'alcool alors qu\'il devient par ailleurs le nouveau principal du lycée West Beverly. Il est accompagné de son épouse Debbie, une ancienne médaillée olympique, de sa fille Annie, ainsi que de leur fils adoptif Dixon. Les deux adolescents doivent s\'intégrer dans leur nouvel environnement et s\'y faire des amis…'),
(4, 'Alice in Wonderland', 1, 6, 10, '2010-02-25', 3, 'alice-in-wonderland.jpg', 'Désormais âgée de 19 ans, Alice retourne dans le monde fantastique qu\'elle avait découvert lorsqu\'elle était enfant. Retrouvant ses amis le Lapin Blanc, Bonnet Blanc et Blanc Bonnet, le Loir, la Chenille, le Chat du Cheshire et, bien entendu, le Chapelier Fou, elle embarque dans une aventure extraordinaire pour mettre fin au règne de terreur de la Reine Rouge.'),
(5, 'Alpha and Omega', 3, 2, 4, '2010-10-27', 4, 'alpha-and-omega.jpg', 'Kate et Humphrey proviennent de 2 meutes différentes. Lui est un loup Oméga qui ne vit que pour samuser, et elle une louve Alpha dominante disciplinée.'),
(6, 'Animaux et Cie', 3, 9, 20, '2011-02-09', 3, 'animaux-et-cie.jpg', 'Dans le delta de l\'Okavango, en Afrique, qui est un véritable paradis terrestre pour les animaux, Billy le suricate et son ami Socrate, un lion végétarien, attendent la crue annuelle. Cependant, à cause d\'un barrage humain, la crue n\'arrive pas.'),
(7, 'Black Swan', 1, 1, 10, '2011-02-23', 4, 'black-swan.jpg', 'Thomas Leroy, le directeur du New York City Ballet, est à la recherche d\'une nouvelle danseuse étoile depuis qu\'il a décidé de se passer des services de la titulaire, Beth. Nina, depuis longtemps membre de la troupe, pense que son heure est venue. Une rivale inattendue se présente en la personne de la sensuelle Lily, nouvellement recrutée. Nina peut compter sur sa mère, Erica, une maîtresse-femme qui contrôle sa vie, pour intervenir auprès de Thomas.'),
(8, 'Californication', 2, 8, 14, '2007-08-13', 5, 'californication.jpg', 'Hank Moody est romancier et séparé de la mère de sa fille de 13 ans. Il est aussi accro aux femmes et aux drogues et ne peut s\'empêcher de dire la vérité, tout le temps et à tout le monde. Oui, Hank est auto-destructeur...'),
(9, 'Camp Rock ', 1, 2, 7, '2010-09-03', 4, 'camp-rock.jpg', 'C\'est la rentrée au Camp Rock de Brown Césario. Mitchie retrouve ses amies. Tout irait pour le mieux si Camp Star, une école rivale fondée par un ami de Brown, ne débauchait pas élèves et professeurs de Camp Rock.'),
(10, 'Camping', 1, 9, 13, '2010-04-21', 2, 'camping.jpg', 'Arcachon au mois d\'août. Jean-Pierre Savelli, employé aux Mutuelles d\'Assurances de Clermont-Ferrand, apprend que Valérie, sa fiancée, veut faire un break. Pour se ressourcer et retrouver calme et sérénité, il décide de changer de destination de vacances. Il atterrit au Camping des Flots Bleus et tombe sur Patrick Chirac et sa bande de campeurs irréductibles. Les vacances peuvent commencer.'),
(11, 'Capitaine Sky Et Le Monde De Demain', 1, 2, 20, '2005-01-19', 3, 'capitaine-sky.jpg', 'L\'histoire se déroule dans une uchronie située en 1939. Polly Perkins, journaliste au Chronicle, cherche à élucider la disparition de plusieurs scientifiques de renom. La piste semble aboutir à un certain docteur Totenkopf.\r\nAlors que des robots géants envoyés par Totenkopf attaquent New York, la police impuissante fait appel au Capitaine Sky.'),
(12, 'Castle', 2, 3, 14, '2009-03-09', 5, 'castle.jpg', 'Richard Castle, écrivain à succès spécialisé dans les thrillers, est sollicité par la police lorsqu\'un tueur en série copie les meurtres de l\'un de ses romans. Une fois cette affaire résolue, Castle devient consultant pour la police de New York.'),
(13, 'Chuck', 2, 3, 17, '2007-09-24', 5, 'chuck.jpg', 'Un passionné d\'ordinateurs devient agent des services secrets après avoir accidentellement téléchargé une application contenant des données classées secret-défense.'),
(14, 'Cold Case', 2, 3, 15, '2003-07-14', 5, 'cold-case.jpg', 'Chargée de rouvrir d\'anciens dossiers classés sans suite, Lilly Rush, seule femme inspectrice de la Police criminelle de Philadelphie, aidée par la brigade policière de la ville, enquête sur des meurtres jamais élucidés, commis il y a plusieurs années, voire plusieurs décennies auparavant, entre les années 1910 et les années 2010.'),
(15, 'Comme les 5 doigts de la main', 1, 1, 12, '2010-04-28', 3, 'les-5-doigts.jpg', 'Ils sont cinq frères semblables et pourtant différents, élevés par une mère devenue veuve trop tôt. L\'un d\'eux s\'était éloigné de la famille, lorsqu\'il réapparaît, il est poursuivi par un gang de trafiquants, il se réfugie parmi les siens en leur révélant un secret. Les cinq, ensemble, vont trouver l\'énergie de se défendre et le moyen de venger la mémoire de leur père assassiné.'),
(16, 'Conspiracy', 1, 1, 9, '2017-04-27', 3, 'conspiracy.jpg', 'Ex-interrogatrice de la CIA, Alice Racine est rappelée par son ancien directeur, Bob Hunter, pour déjouer une attaque imminente sur Londres. Face à un adversaire brutal et tentaculaire, Alice reçoit l\'aide providentielle de son ancien mentor, Eric Lasch et d\'un membre des forces spéciales, Jack Alcott. Cependant, elle réalise rapidement que l\'agence a été infiltrée. Trahie et manipulée, elle va devoir inventer de nouvelles règles pour faire face à cette conspiration.'),
(17, 'Desperate Housewives', 2, 8, 15, '2012-05-13', 5, 'desperate-housewives.jpg', 'Le quotidien mouvementé de quatre femmes : Susan Mayer, Lynette Scavo, Bree Van de Kamp et Gabrielle Solis. Elles vivent à Wisteria Lane, une banlieue chic de Fairview (située dans l\'État fictif de l\'Eagle State), stéréotype des quartiers résidentiels WASP de la middle class américaine. Mary Alice Young, une amie des héroïnes, se suicide au début de l\'épisode pilote, et commente d\'outre-tombe la multitude d\'intrigues mêlant humour, drame et mystère auxquelles prennent part les quatre femmes.'),
(18, 'Dr House', 2, 8, 25, '2012-05-21', 5, 'dr-house.jpg', 'Le docteur Gregory House, est un brillant médecin à tendance misanthrope qui dirige une équipe d\'internistes au sein de l\'hôpital fictif de Princeton-Plainsboro dans le New Jersey. House est un personnage arrogant, cynique, anticonformiste et asocial. Il souffre d\'une claudication provenant d\'une douleur chronique à la jambe droite due à un infarctus du muscle de la cuisse. Il marche avec une canne et abuse de Vicodin, un analgésique opiacé, pour soulager sa douleur.'),
(19, 'Fair Game', 1, 1, 9, '2010-10-02', 3, 'fair-game.jpg', 'Valerie Plame, agent de la CIA au département chargé de la non-prolifération des armes, dirige secrètement une enquête sur l\'existence potentielle d\'armes de destruction massive en Irak. Son mari, le diplomate Joe Wilson, se voit confier la mission d\'apporter les preuves d\'une supposée vente d\'uranium enrichi en provenance du Niger.'),
(20, 'From Paris With Love', 1, 1, 9, '2010-02-04', 2, 'paris-with-love.jpg', 'James Reese travaille comme assistant personnel de l\'ambassadeur américain à Paris. Fort de cette position, il se voit parfois contacté par les forces spéciales, à qui il rend quelques menus services. Une vraie frustration pour lui qui se rêve en agent secret, et qui ne demande qu\'à sortir de l\'ombre pour jouer les gros bras.'),
(21, 'Game Of Death', 1, 1, 7, '2011-02-22', 1, 'game-of-death.jpg', 'L\'agent spécial Marcus Jones est assigné au chevet d\'un important diplomate victime d\'un attentat. Le garde du corps comprend que les criminels ne vont pas s\'arrêter là mais au contraire tenter d\'achever le diplomate au sein-même de l\'hôptial. Jones s\'allie à une infirmière pour mettre hors d\'état de nuire cinq tueurs expérimentés.'),
(22, 'Gladiator', 1, 5, 8, '2000-06-21', 5, 'gladiator.jpg', 'Le général romain Maximus est le plus fidèle soutien de l\'empereur Marc Aurèle, qu\'il a conduit de victoire en victoire. Jaloux du prestige de Maximus, et plus encore de l\'amour que lui voue l\'empereur, le fils de Marc Aurèle, Commode, s\'arroge brutalement le pouvoir, puis ordonne l\'arrestation du général et son exécution. Maximus échappe à ses assassins, mais ne peut empêcher le massacre de sa famille. Capturé par un marchand d\'esclaves, il devient gladiateur et prépare sa vengeance.'),
(23, 'Heroes', 2, 6, 17, '2006-07-12', 4, 'heroes.jpg', 'Partout dans le monde, un certain nombre d\'individus, en apparence ordinaires, se révèlent dotés de capacités hors du commun. Ils ne savent pas ce qui leur arrive, ni les répercussions que tout cela pourrait avoir.'),
(24, 'Hibernatus', 1, 9, 8, '1969-09-10', 5, 'hibernatus.jpg', 'Après 65 ans d\'hibernation naturelle dans un bloc de glace polaire, un naufragé est retrouvé par une expédition franco-danoise au Groenland.'),
(25, 'How I Met Your Mother', 2, 9, 12, '2005-09-19', 4, 'how-i-met.jpg', 'La série débute en 2030, lorsque Ted Mosby raconte à ses deux enfants comment il a rencontré leur mère. Il se remémore ses jeunes années, et le pilote fait place aux souvenirs de Ted en 2005, où il apprend que son meilleur ami Marshall Eriksen va demander à Lily Aldrin de l\'épouser. Ted se demande quand il rencontrera sa future épouse. Et c\'est ainsi que commence l\'incroyable et très longue histoire de Ted, jusqu\'à sa rencontre avec la fameuse mère.'),
(26, 'Hunger Games', 1, 2, 8, '2012-04-16', 3, 'hunger-games.jpg', 'Katniss Everdeen, jeune fille de 16 ans, vit dans le district 12 d\'un état nommé Panem, qui était précédemment l\'Amérique du Nord. Les habitants des 12 districts de Panem vivent sous la coupe du Capitole, un puissant gouvernement autoritaire dirigé par le président Snow, qui a dans le passé réprimé une insurrection ayant dégénéré en guerre civile en détruisant le district 13. À la suite de cette guerre, le Capitole a décidé d\'organiser chaque année un jeu télévisé, les Hunger Games, pour contrôler le peuple par la peur.'),
(27, 'Iron Man 2', 1, 2, 12, '2010-04-28', 4, 'iron-man-2.jpg', 'Le monde sait désormais que l\'inventeur milliardaire Tony Stark et le super-héros Iron Man ne font qu\'un. Cependant, malgré les pressions, Tony n\'est pas disposé à divulguer les secrets de son armure, redoutant que l\'information atterrisse dans de mauvaises mains. Avec Pepper Potts et James Rhodey Rhodes à ses côtés, Tony va forger de nouvelles alliances et affronter de nouvelles forces toutes-puissantes.'),
(28, 'Jericho', 2, 8, 12, '2006-04-25', 4, 'jericho.jpg', 'Une catastrophe nucléaire plonge les habitants d\'une petite ville du Kansas dans le chaos. Le pays est-il complètement ravagé ? Y a-t-il d\'autres survivants ? Les doutes, les peurs et le désespoir commencent à gagner le petit groupe de survivants. Mais face à cette épreuve, le pire comme le meilleur peut surgir en chaque être humain...'),
(29, 'Joséphine Ange Gardien', 2, 8, 60, '1997-12-15', 4, 'ange-gardien.jpg', 'Joséphine Delamarre (interprétée par Mimie Mathy) est un ange gardien que le ciel envoie sur terre. Grâce à sa finesse psychologique, à sa capacité de persuasion et à ses pouvoirs magiques, elle parvient à aider les personnes qui rencontrent des problèmes. Elle apparaît au début de chaque mission ; quand sa mission est accomplie, elle disparaît en claquant des doigts.'),
(30, 'Kiss & Kill', 1, 9, 10, '2010-06-23', 3, 'kiss-et-kill.jpg', 'Alors que Jen Kornfeldt, en vacances sur la Côte d\'Azur, se remet à peine d\'une rupture, elle fait la connaissance de l\'homme de ses rêves, le beau Spencer Aimes. Trois ans après cette rencontre, Spencer et Jen sont de jeunes mariés heureux à la vie paisible, mais tout bascule le jour où un mystérieux tueur cherche à éliminer Spencer. Jen découvre alors que son mari est agent secret, un détail qu\'il n\'avait jamais pris la peine de mentionner.'),
(31, 'Krach', 1, 1, 5, '2010-09-01', 1, 'krach.jpg', 'Trader dans une grande banque new-yorkaise, Erwan mise, joue et gagne. Cependant, il en veut plus, toujours plus. Lorsqu\'il tombe sur un article consacré à la climatologie dans une revue scientifique, il a l\'intuition d\'une corrélation entre les variations climatiques et le flux boursiers.'),
(32, 'La Zizanie', 1, 9, 5, '1978-03-16', 5, 'la-zizanie.jpg', 'Industriel ambitieux, Guillaume Daubray-Lacaze agrandit son usine de matériel de dépollution, détruisant du même coup le jardin de sa femme Bernadette, férue d\'horticulture. Décidée à se venger de son mari, elle quitte le domicile conjugal, et se présentant contre lui aux élections municipales.'),
(33, 'L\'agence tout risque', 2, 10, 25, '1983-01-23', 5, 'tout-risque.jpg', 'Un groupe de quatre anciens soldats d\'un commando d\'élite sont recherchés par l\'armée après s\'être évadés de prison, alors qu\'ils avaient été condamnés à tort. Hannibal aime diriger les opérations, Futé est souvent à l\'origine des plans de génie.'),
(34, 'L\'Aile Ou La Cuisse', 1, 9, 9, '1976-10-27', 5, 'aile-ou-cuisse.jpg', 'Charles Duchemin, le terrible éditeur d\'une revue gastronomique, voudrait que son fils, Gérard, lui succède, mais celui-ci préfère faire le clown dans un cirque. Charles lance un défi à Tricatel, le roi de la cuisine sous vide, en le conviant à une émission de télévision. Toutefois, Charles perd le goût et l\'odorat. Aussi Gérard accepte-t-il de le remplacer.'),
(35, 'Le Cameleon', 2, 8, 25, '2000-05-13', 5, 'cameleon.jpg', 'La série met en scène Jarod (dont on ignore le nom de famille), un homme séquestré pendant 33 ans dans \"le Centre\", une fondation secrète. Doué d\'une intelligence exceptionnelle, Jarod a été depuis son plus jeune âge soumis à des simulations, des reconstitutions de situations réelles où il devait reproduire le schéma mental de personnes ayant pris part à ces événements. Lorsqu\'il apprend les objectifs malfaisants de nombre de ces simulations, il décide de s\'évader.'),
(36, 'Le Corniaud', 1, 9, 10, '1965-10-08', 4, 'corniaud.jpg', 'Saroyan, un trafiquant, utilise un honnête commerçant, répondant au nom d\'Antoine Maréchal, pour emmener de Naples à Bordeaux une Cadillac remplie d\'héroïne. Ce dernier, un homme naïf et bienveillant, déjoue innocemment les plans de contrebande de son employeur.'),
(37, 'Le Grande Vadrouille', 1, 9, 9, '1966-12-08', 5, 'grande-vadrouille.jpg', 'En 1942, un avion anglais est abattu par les Allemands au-dessus de Paris. Les trois pilotes sautent en parachute et atterrissent dans différents endroits de la capitale. Ils sont aidés par deux civils français, un chef d\'orchestre et un peintre en bâtiment qui acceptent de les mener en zone libre ; ils deviennent ainsi, malgré eux, acteurs de la Résistance.'),
(38, 'Le secret de Charlie', 1, 8, 5, '2010-11-10', 2, 'secret-de-charlie.jpg', 'Se sentant coupable de la mort accidentelle de son frère, un gardien de cimetière se retrouve régulièrement face au fantôme de celui-ci. Il rencontre une jeune femme disparue en mer et se demande s\'il s\'agit aussi d\'une apparition ou si elle est bien réelle.'),
(39, 'Le Voyage extraordinaire de Samy', 3, 11, 12, '2010-08-04', 4, 'voyage-samy.jpg', 'Alors qu\'il se hisse hors de son nid sur une plage de Californie, Sammy, petite tortue des mers trouve et perd dans la foulée l\'amour de sa vie : la jeune Shelly. Au cours de son périple travers les océans qu\'accomplissent toutes les tortues de mer avant de retrouver la plage qui les a vus naître, Sammy n\'a de cesse de faire face tous les dangers afin de retrouver Shelly.'),
(40, 'Les Aventures De Rabbi Jacob', 1, 9, 10, '1973-10-18', 5, 'aventures-rabbi-jacob.jpg', 'À la suite d\'un quiproquo, un homme d\'affaires irascible et raciste se retrouve confronté, malgré lui, à un règlement de compte entre terroristes d\'un pays arabe. Pour semer ses ennemis, il se déguise en rabbin, après avoir croisé des religieux juifs en provenance de New York à l\'aéroport d\'Orly.'),
(41, 'Les Chevaliers du ciel', 1, 10, 8, '2005-11-09', 2, 'chevaliers-du-ciel.jpg', 'Les Chevaliers du ciel est un film d\'action français réalisé par Gérard Pirès, sorti en 2005. Il est très librement inspiré de la bande dessinée Les Aventures de Tanguy et Laverdure de Jean-Michel Charlier et Albert Uderzo.'),
(42, 'Les Frères Scott', 2, 8, 40, '2003-06-15', 5, 'freres-scott.jpg', 'L\'histoire se déroule dans la ville de Wilmington (Caroline du Nord), rebaptisée par un nom fictif : Tree Hill.\r\nDan Scott est le père de deux garçons : Lucas, qu\'il a eu avec Karen Roe, et Nathan, né de son union avec Deborah Lee.\r\nDan a abandonné Karen lorsqu\'elle était enceinte, à la fin du lycée, avant de rencontrer Deborah à l\'université et de l\'épouser.\r\nDix-sept ans plus tard, Lucas et Nathan se retrouvent dans la même équipe de basket, celle de leur lycée : les « Ravens ».\r\nLucas a, par ailleurs, été élevé par sa mère, seule, avec l\'aide de Keith, le frère aîné de Dan.'),
(43, 'Les Sorciers de Waverly Place', 2, 9, 25, '2012-01-06', 4, 'sorciers-waverly-place.jpg', 'Mason révèle son identité : C\'est un loup-garou. Justin, lui, recherche sa Juliet toujours prisonnière des griffes de la Momie. Tout va se compliquer, lorsque Alex et Justin apprennent que Mason et Juliet se connaissent depuis plus de trois cent ans.'),
(44, 'Letters to Juliet', 1, 8, 5, '2010-05-14', 5, 'letters-to-juliet.jpg', 'Un couple en vacances en Italie reçoit une lettre d\'une femme à la recherche du jeune homme avec lequel elle a vécu une histoire d\'amour, il y a de longues années lors de vacances en Italie. Le couple décide alors de parcourir la Toscane pour retrouver l\'ancien amant de cette femme.'),
(45, 'Mia et le Migou', 3, 11, 10, '2009-02-18', 3, 'mia-migou.jpg', 'Mia a dix ans à peine. Un jour, parce qu\'elle a un mauvais pressentiment, elle décide de quitter son village natal d\'Amérique du Sud pour partir à la recherche de son papa. Pour parvenir jusqu\'à lui, Mia va devoir franchir de nombreux obstacles, affronter les forces de la nature et se frotter à un monde de légendes peuplé d\'êtres mystérieux.'),
(46, 'Night and Day', 1, 10, 9, '2010-07-28', 4, 'night-and-day.jpg', 'Lorsque June rencontre Roy, elle croit que le destin lui sourit enfin et qu elle a trouvé l homme de ses rêves. Pourtant, très vite, elle le suspecte d être un espion et le cauchemar commence.'),
(47, 'Old Dogs', 1, 11, 8, '2009-11-25', 3, 'olddogs.jpg', 'Un homme divorcé, père de jumeaux de 6 ans, et son collègue de bureau et meilleur ami, sont complètement débordés quand ils doivent s\'occuper des enfants pendant deux semaines. Les deux amis décident d\'emmener les enfants dans un camp de vacances. Barry, le directeur zélé du camp est ultra-conservateur et pense que les deux hommes sont homosexuels et qu\'ils ont adopté les jumeaux.'),
(48, 'Pink Floyd - The Wall', 1, 8, 12, '1982-10-24', 5, 'pink-floyd.jpg', 'Pink Floyd: The Wall est un film musical réalisé par Alan Parker et sorti en 1982. Il est fondé sur le double album conceptuel du groupe anglais Pink Floyd. Le film alterne séquences filmées avec des séquences animées sur un rythme rapide.'),
(49, 'Predator', 1, 7, 11, '2010-07-07', 4, 'predator.jpg', 'Royce, un mercenaire, se retrouve obligé de mener un groupe de combattants d\'élite sur une planète étrangère. Ils vont vite comprendre qu\'ils ont été rassemblés pour servir de gibier. À une exception près, tous sont des tueurs implacables, mercenaires, yakuzas, condamnés, membres d\'escadrons de la mort. Des prédateurs humains qui sont à présent systématiquement traqués et éliminés par une nouvelle génération de Predators extraterrestres.'),
(50, 'Prince of Persia', 1, 10, 12, '2010-05-19', 5, 'prince-of-persia.jpg', 'Un prince rebelle est contraint d\'unir ses forces avec une mystérieuse princesse pour affronter ensemble les forces du mal et protéger une dague antique capable de libérer les Sables du temps, un don de dieu qui peut inverser le cours du temps et permettre à son possesseur de régner en maître absolu sur le monde.'),
(51, 'Raiponce', 3, 11, 8, '2010-12-01', 4, 'raiponce.jpg', 'Lorsque Flynn Rider, le bandit le plus recherché du royaume, se réfugie dans une mystérieuse tour, il se retrouve pris en otage par Raiponce, une belle et téméraire jeune fille à l\'impressionnante chevelure de 20 mètres de long, gardée prisonnière par Mère Gothel. L\'étonnante geôlière de Flynn cherche un moyen de sortir de cette tour où elle est enfermée depuis des années. Elle passe alors un accord avec le séduisant brigand.'),
(52, 'Red', 1, 10, 7, '2010-10-14', 4, 'red.jpg', 'Dans certaines professions, la retraite peut s\'avérer difficile à accepter : Franck ne supporte pas l\'inactivité, son collègue Joe végète en maison de retraite, Marvin use d\'amphétamines et Victoria fait des petits boulots. Pas facile de décrocher quand on a été agents de la CIA toute sa vie. Pourtant, quand leur ancien employeur décide d\'éliminer pour de bon ces agents un peu trop compromettants, il va découvrir qu\'en dépit de leur âge, ce sont encore de redoutables adversaires.'),
(53, 'Robin des Bois', 1, 10, 10, '2010-05-12', 3, 'robin-des-bois.jpg', 'À l\'aube du treizième siècle, Richard Coeur de Lion, roi d\'Angleterre, meurt. A Nottingham, Robin découvre l\'étendue de la corruption qui ronge son pays. Il se heurte au despotique shérif du comté, mais trouve une alliée en la personne de la belle et impétueuse Lady Marianne. Robin entre en résistance et rallie à sa cause une petite bande de maraudeurs dont les prouesses de combat n\'ont d\'égal que le goût pour les plaisirs de la vie. Ensemble, ils vont s\'efforcer de soulager un peuple opprimé.'),
(54, 'Salt', 1, 10, 10, '2010-08-04', 4, 'salt.jpg', 'Accusée d\'être une espionne russe, l\'agent de la CIA Evelyn Salt doit fuir. Elle va faire appel à toute son expertise afin de semer ses poursuivants et blanchir son nom.'),
(55, 'Scooby-Doo', 3, 11, 5, '2010-09-14', 3, 'scooby-doo.jpg', 'Bienvenue à la colonie Little Moose, là où les animateurs sont amicaux, les activités sans fin et les histoires de fantômes très convaincantes ! En effet, à chaque fois que quelqu\'un raconte une histoire parlant de revenants, des créatures effrayantes prennent vie ! Mais le Scooby Gang ne va pas se laisser avoir comme ça, et va faire un tour du campement pour en découdre avec les méchants.'),
(56, 'Sex and the City 2', 1, 9, 9, '2010-05-27', 3, 'sex-and-city.jpg', 'Carrie, Samantha, Charlotte et Miranda s\'embarquent pour une aventure paradisiaque avant que le mariage et la maternité ne les rattrapent. En vacances à Abou Dhabi, là où les fêtes ne s\'arrêtent jamais et où le mystère est omniprésent, les quatre amies vont s\'insurger contre les rôles traditionnels qui leur sont assignés et se laisser surprendre. Surtout Carrie, confrontée à la tentation en la personne d\'Aidan.'),
(57, 'Shrek 2', 3, 11, 9, '2004-06-23', 5, 'shrek-2.jpg', 'Devenus de jeunes mariés, Shrek et Fiona rentrent de leur heureuse lune de miel. Ils sont invités par les parents de Fiona à venir dîner dans leur royaume, à Far Far Away. Cependant, ils ne se doutent pas que leur fille est devenue une ravissante ogresse. Ce mariage met par ailleurs en péril l\'avenir et les projets les plus secrets du Roi.'),
(58, 'Shrek 3', 3, 11, 9, '2007-05-06', 3, 'shrek-3.jpg', 'Si Shrek a bel et bien épousé l\'amour de sa vie, la princesse Fiona, il n\'a jamais eu l\'intention de quitter son cher marécage et encore moins de devenir roi. Cependant, voilà, lorsque le père de Fiona meurt, l\'étau se resserre et Shrek va devoir faire face à ses obligations. Pourtant, l\'ogre ne s\'avoue pas vaincu et part à la recherche d\'un autre héritier potentiel avec ses fidèles compagnons.'),
(59, 'Shrek 4', 3, 11, 9, '2010-07-14', 4, 'shrek-4.jpg', 'Après avoir vaincu un méchant dragon, sauvé une belle princesse et le royaume de ses parents, que peut encore faire un ogre malodorant et mal léché ? Domestiqué, assagi, Shrek a perdu jusqu\'à l\'envie de rugir et regrette le bon vieux temps où il semait la terreur dans le royaume. Aujourd\'hui, tel une idole déchue, il se contente de signer des autographes à tour de bras.'),
(60, 'Shrek', 3, 11, 5, '2001-07-04', 5, 'shrek.jpg', 'Shrek, un ogre verdâtre, découvre de petites créatures agaçantes qui errent dans son marais. Shrek se rend alors au château du seigneur Lord Farquaad, qui aurait soi-disant expulsé ces êtres de son royaume. Ce dernier souhaite épouser la princesse Fiona, mais celle-ci est retenue prisonnière par un abominable dragon. Il lui faut un chevalier assez brave pour secourir la belle. Shrek accepte d\'accomplir cette mission.'),
(61, 'Star Wars I La Menace Fantome', 1, 2, 6, '1999-05-19', 4, 'star-wars-1.jpg', 'Avant de devenir un célèbre chevalier Jedi, et bien avant de se révéler l\'âme la plus noire de la galaxie, Anakin Skywalker est un jeune esclave sur la planète Tatooine. La Force est déjà puissante en lui et il est un remarquable pilote de Podracer. Le maître Jedi Qui-Gon Jinn le découvre et entrevoit alors son immense potentiel. Pendant ce temps, l\'armée de droïdes de l\'insatiable Fédération du Commerce a envahi Naboo dans le cadre d\'un plan secret des Sith visant à accroître leur pouvoir.'),
(62, 'Star Wars II L\'attaque Des Clones', 1, 2, 8, '2002-05-17', 4, 'star-wars-2.jpg', 'Depuis le blocus de la planète Naboo, la République, gouvernée par le Chancelier Palpatine, connaît une crise. Un groupe de dissidents, mené par le sombre Jedi comte Dooku, manifeste son mécontentement. Le Sénat et la population intergalactique se montrent pour leur part inquiets. Certains sénateurs demandent à ce que la République soit dotée d\'une armée pour empêcher que la situation ne se détériore. Padmé Amidala, devenue sénatrice, est menacée par les séparatistes et échappe à un attentat.'),
(63, 'Star Wars III La Revanche Des Sith', 1, 2, 12, '2005-05-18', 5, 'star-wars-3.jpg', 'La Guerre des Clones fait rage. Une franche hostilité oppose désormais le Chancelier Palpatine au Conseil Jedi. Anakin Skywalker, jeune Chevalier Jedi pris entre deux feux, hésite sur la conduite à tenir. Séduit par la promesse d\'un pouvoir sans précédent, tenté par le côté obscur de la Force, il prête allégeance au maléfique Darth Sidious et devient Dark Vador.Les Seigneurs Sith s\'unissent alors pour préparer leur revanche, qui commence par l\'extermination des Jedi.'),
(64, 'Star Wars IV Un Nouvel Espoir', 1, 2, 5, '1977-10-27', 5, 'star-wars-4.jpg', 'Il y a bien longtemps, dans une galaxie très lointaine. La guerre civile fait rage entre l\'Empire galactique et l\'Alliance rebelle. Capturée par les troupes de choc de l\'Empereur menées par le sombre et impitoyable Dark Vador, la princesse Leia Organa dissimule les plans de l\'Etoile Noire, une station spatiale invulnérable, à son droïde R2-D2 avec pour mission de les remettre au Jedi Obi-Wan Kenobi.'),
(65, 'Star Wars V L\'empire contre attaque', 1, 2, 6, '1980-09-04', 5, 'star-wars-5.jpg', 'Malgré la destruction de l\'Etoile Noire, l\'Empire maintient son emprise sur la galaxie, et poursuit sans relâche sa lutte contre l\'Alliance rebelle. Basés sur la planète glacée de Hoth, les rebelles essuient un assaut des troupes impériales. Parvenus à s\'échapper, la princesse Leia, Han Solo, Chewbacca et C-3P0 se dirigent vers Bespin, la cité des nuages gouvernée par Lando Calrissian, ancien compagnon de Han.'),
(66, 'Star Wars VI Le retour du jedi', 1, 2, 6, '1983-11-10', 5, 'star-wars-6.jpg', 'L\'empire galactique est plus puissant que jamais : la construction de la nouvelle arme, l\'étoile de la mort, menace l\'univers tout entier... Han Solo est remis à l\'ignoble contrebandier Jabba le Hutt par le chasseur de primes Boba Fett. après l\'échec d\'une première tentative d\'évasion menée par la princesse Leia, également arrêtée par Jabba, Luke Skywalker et Lando parviennent à libérer leurs amis.'),
(67, 'Tanguy', 1, 9, 11, '2001-11-21', 4, 'tanguy.jpg', 'Le phénomène Tanguy désigne un phénomène social selon lequel les jeunes adultes tardent à se séparer du domicile familial. Cette dénomination vient du film Tanguy, d\'Étienne Chatiliez, dont le personnage éponyme s\'enferme dans ce type de situation.'),
(68, 'The 7 Adventures Of Sinbad', 1, 2, 11, '2010-05-25', 4, 'adventures-of-sinbad.jpg', 'Alors qu\'il vient d\'échouer sur une île, Simbad, prince de Perse, doit accomplir sept missions plus dangereuses les unes que les autres. Au péril de sa vie, le jeune prince espère ainsi empêcher le désastre qui menace de faire disparaître l\'espèce humaine.'),
(69, 'The Big Bang Theory', 2, 9, 37, '2007-05-24', 5, 'big-bang-theory.jpg', 'Une bande de docteurs en science partagent un quotidien fait de jeux vidéo, d\'équations et d\'amitié. Leur nouvelle voisine de palier va troubler leurs vieilles habitudes et va tenter de les sortir de leur univers et de les connecter à la réalité.'),
(70, 'The Karate Kid', 1, 10, 9, '1984-06-22', 5, 'karate-kid.jpg', 'Daniel quitte le Texas pour s\'installer avec sa mère, Lucille, en Californie. À l\'école, ses nouveaux camarades de classe l\'isolent et le persécutent. Daniel apprend donc le karaté d\'un vieux japonais qui lui enseigne à se défendre contre des voyous.'),
(71, 'The last song', 1, 8, 10, '2013-09-05', 5, 'the-last-song.jpg', 'Capricieuse et rebelle, Ronnie traverse une période difficile depuis le divorce de ses parents. Pour les vacances d\'été, son père a tout prévu et compte passer tout son temps avec elle dans la campagne sud-américaine. L\'idée est loin de séduire la jeune fille qui préférerait passer ses vacances à New York avec ses copines.'),
(72, 'The Mentalist', 2, 3, 64, '2015-02-18', 5, 'mentalist.jpg', 'Un mentaliste utilise ses dons d\'observation pour résoudre des crimes en tant que consultant pour la police. Une façon pour lui contribuer à la justice et de démasquer le mystérieux tueur en série qui a assassiné son épouse et sa fille.'),
(73, 'Félix & Cie', 3, 11, 12, '2008-11-06', 3, 'missing-lynx.jpg', 'Les aventures de Félix le lynx, animal en voie de disparition, et de sa bande d\'amis, tous plus givrés les uns que les autres. Ensemble, ils vont devoir lutter pour échapper à un redoutable chasseur engagé par un vieil homme milliardaire qui veut capturer un couple d\'animal de chaque espèce en voie d\'extinction...'),
(74, 'The Penguins Of Madagascar', 2, 11, 24, '2009-03-31', 4, 'penguins-of-madagascar.jpg', 'Skipper, Kowalski, Rico et Private, quatre pingouins constitués en redoutable commando de choc, protègent le zoo de Central Park. Ils ont fort à faire, le lémurien King Julian, le aya-aye Maurice et le microcèbe Morti compromettant souvent la sécurité du zoo.'),
(75, 'The Social Network', 1, 8, 12, '2010-10-27', 4, 'social-network.jpg', 'Une soirée bien arrosée d\'octobre 2003, Mark Zuckerberg, un étudiant qui vient de se faire plaquer par sa petite amie, pirate le système informatique de l\'université deHarvard pour créer un site, une base de données de toutes les filles du campus.'),
(76, 'The Vampire Diaries', 2, 8, 47, '2009-09-10', 4, 'vampire-diaries.jpg', 'Prisonniers de leurs corps d\'adolescents, Stefan et Damon, deux frères vampires, se livrent bataille pour conquérir le coeur de la belle Elena, 17 ans, lycéenne à Mystic Falls High.'),
(77, 'Tom And Jerry', 3, 3, 4, '2010-08-24', 3, 'tom-jerry.jpg', 'Des vols de bijoux à Londres laissent Scotland Yard dans le doute alors que Red, le séduisant chanteur, semble être le coupable idéal. Seul le légendaire Sherlock Holmes, épaulé par son célèbre assistant le Docteur Watson, peut venir à bout d\'une telle enquête et démasquer le véritable voleur -sans compter Tom et Jerry, bien sûr.'),
(78, 'Toy Story 3', 3, 11, 6, '2010-07-28', 4, 'toy-story-3.jpg', 'Les créateurs des très populaires films Toy Story ouvrent à nouveau le coffre à jouets et invitent les spectateurs à retrouver le monde délicieusement magique de Woody et Buzz au moment où Andy s\'apprête à partir pour l\'université. Délaissée, la plus célèbre bande de jouets se retrouve à la crèche !'),
(79, 'Tron l\'héritage', 1, 10, 7, '2011-01-19', 4, 'tron.jpg', 'Sam Flynn, un rebelle de 27 ans, est hanté par la disparition mystérieuse de son père, Kevin Flynn, un homme autrefois connu pour être le meilleur développeur de jeux vidéo au monde. Lorsque Sam se penche sur un signal étrange qui parvient de l\'ancienne arcade de jeux de Flynn, il se retrouve aspiré dans un monde numérique où Kevin est prisonnier depuis 20 ans.'),
(80, 'Un gars, une fille', 2, 9, 35, '1999-10-11', 4, 'gars-fille.jpg', 'Cette série raconte de manière humoristique la vie quotidienne d\'un couple, Jean et Alexandra, des situations des plus banales aux plus exceptionnelles.'),
(81, 'Saw', 1, 7, 7, '2005-03-16', 5, 'saw.jpg', 'Deux hommes se réveillent enchaînés au mur d\'une salle de bains. Ils ignorent où ils sont et ne se connaissent pas. Ils savent juste que l\'un doit absolument tuer l\'autre, sinon dans moins de huit heures, ils seront exécutés tous les deux. Voici l\'une des situations imaginées par un machiavélique maître criminel qui impose à ses victimes des choix auxquels personne ne souhaite jamais être confronté un jour. Un détective est chargé de l\'enquête.'),
(82, 'Alien Vs Predator', 1, 7, 10, '2004-05-22', 4, 'avp.jpg', 'En 2004, un satellite détecte un mystérieux flux d\'énergie localisé sur l\'île Bouvet, au large de l\'Antarctique. Le riche industriel Charles Bishop Weyland (Lance Henriksen) fait enquêter les employés de son entreprise multinationale de communications Weyland Industries sur la source de chaleur. L\'analyse révèle une gigantesque pyramide recouverte par la banquise. Weyland recrute alors une équipe de scientifiques pour explorer et revendiquer ce qui y sera découvert.'),
(83, 'The Ring', 1, 7, 7, '2017-02-01', 3, 'ring.jpg', 'Une jeune femme s\'inquiète quand son copain s\'intéresse à une sous-culture obscure entourant une mystérieuse bande vidéo prétendue tuer le spectateur sept jours après qu\'il l\'a visionnée. Se sacrifiant elle-même pour sauver son compagnon, elle découvre, horrifiée, la présence d\'un film dans le film que personne n\'a encore découvert.'),
(84, 'Rambo', 1, 5, 6, '1982-10-22', 5, 'rambo.jpg', 'Revenu du Viêtnam, abruti autant par les mauvais traitements que lui ont jadis infligés ses tortionnaires que par l\'indifférence de ses concitoyens, le soldat Rambo, un ancien des commandos d\'élite, traîne sa redoutable carcasse de ville en ville. Un shérif teigneux lui interdit l\'accès de sa bourgade. Rambo insiste. Il veut seulement manger. Le shérif le met sous les verrous et laisse son adjoint brutaliser ce divertissant clochard.'),
(85, 'Démineurs', 1, 5, 12, '2009-09-23', 4, 'demineur.jpg', 'Le lieutenant James est à la tête de la meilleure unité de déminage de l\'armée américaine. Leur mission est de désamorcer des bombes dans des quartiers civils ou des théâtres de guerre, au péril de leur vie, alors que la situation locale est encore explosive.'),
(86, 'Mine', 1, 5, 13, '2016-10-06', 3, 'mine.jpg', 'Un soldat se retrouve perdu dans le désert après l\'échec d\'une mission d\'assassinat. Sur place, il doit survivre à bien des dangers, tandis qu\'il lutte psychologiquement contre la difficulté de sa situation.'),
(88, '15 ans et demi', 1, 9, 9, '2008-04-30', 3, '15-ans-et-demi.jpg', 'Philippe Le Tallec, brillant scientifique vivant aux Etats-Unis depuis 15 ans, décide de rentrer en France s\'occuper de sa fille Eglantine. Il espère profiter de cette occasion pour tisser des liens avec elle et rattraper le temps perdu, mais elle a bien d\'autres préoccupations que de passer du temps avec son père. Le séjour s\'annonce très différent de ce qu\'il avait imaginé, et Philippe est dépassé. Il va se résoudre à faire un improbable stage de rééducation pour pères en difficulté.'),
(97, 'Venom', 1, 10, 15, '2018-10-05', 5, 'venom.jpg', 'Lors d\'une expédition d\'exploration, un vaisseau spatial de la Life Foundation (en) retourne sur Terre avec à son bord quatre échantillons de symbiotes extraterrestres. Mais durant l\'entrée dans l\'atmosphère terrestre, le vaisseau connaît une avarie et s\'écrase dans l\'est de la Malaisie. Depuis son immense complexe à San Francisco, Carlton Drake, puissant et mystérieux PDG de la fondation, gère les opérations. Il parvient à faire rapatrier trois des quatre échantillons. Le quatrième s\'est enfui en prenant possession d\'un corps.'),
(98, 'The Witcher', 2, 6, 50, '2019-12-20', 5, 'witcher.jpg', 'Geralt de Riv, un chasseur de monstres mutant, poursuit son destin dans un monde chaotique où les humains se révèlent souvent plus vicieux que les bêtes.'),
(99, 'The Walking Dead', 2, 7, 40, '2010-10-31', 5, 'walking-dead.jpg', 'Après une apocalypse ayant transformé la quasi-totalité de la population en zombies, un groupe d\'hommes et de femmes mené par l\'officier Rick Grimes tente de survivre. Ensemble, ils vont devoir tant bien que mal faire face à ce nouveau monde.'),
(100, 'La reine des neiges', 3, 11, 10, '2013-12-04', 3, 'reine-des-neiges.jpg', 'Elsa et Anna sont les deux princesses du royaume d\'Arendelle. Elsa, l\'aînée, possède un puissant pouvoir : celui de contrôler la neige et la glace. Toutefois, son pouvoir n\'est connu que de ses parents et de sa sur car Elsa serait immédiatement considérée comme une sorcière aux yeux des habitants du royaume. Plusieurs fois, elle et Anna s\'amusent de cette magie jusqu\'à ce que Elsa blesse accidentellement sa sur à la tête.');

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(50) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`c_id`, `c_name`) VALUES
(1, 'Thriller'),
(2, 'Aventure'),
(3, 'Policier'),
(4, 'Historique'),
(5, 'Guerre'),
(6, 'Fantastique'),
(7, 'Horreur'),
(8, 'Drame'),
(9, 'Humour'),
(10, 'Action'),
(11, 'Enfant'),
(12, 'Comédie');

-- --------------------------------------------------------

--
-- Structure de la table `secret_query`
--

DROP TABLE IF EXISTS `secret_query`;
CREATE TABLE IF NOT EXISTS `secret_query` (
  `q_id` int(11) NOT NULL AUTO_INCREMENT,
  `q_name` varchar(255) NOT NULL,
  PRIMARY KEY (`q_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `secret_query`
--

INSERT INTO `secret_query` (`q_id`, `q_name`) VALUES
(1, 'Quel est votre professeur préféré ?'),
(2, 'Quel est votre langage de programmation préféré ?'),
(3, 'Quel est votre pire cauchemar ?'),
(4, 'Quel est votre framework préféré ?'),
(5, 'Quel est le nom de jeune fille de votre mère ?'),
(6, 'Quel est le nom de votre premier animal de compagnie ?');

-- --------------------------------------------------------

--
-- Structure de la table `status`
--

DROP TABLE IF EXISTS `status`;
CREATE TABLE IF NOT EXISTS `status` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_name` varchar(50) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `status`
--

INSERT INTO `status` (`s_id`, `s_name`) VALUES
(1, 'Admin'),
(2, 'Utilisateur'),
(3, 'Big Boss');

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE IF NOT EXISTS `type` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `t_name` varchar(50) NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`t_id`, `t_name`) VALUES
(1, 'Film'),
(2, 'Série'),
(3, 'Dessin-Animé');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status_id` int(11) NOT NULL,
  `profil` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `query_id` int(11) NOT NULL,
  `reply` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `status_id` (`status_id`),
  KEY `query_id` (`query_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `first_name`, `password`, `status_id`, `profil`, `email`, `query_id`, `reply`) VALUES
(1, 'Blache', 'Sébastien', '$2y$10$epApnN9QkSSmlJA3U0Xz6er26J8hcQLIAinZB3BImr3/bO3bEQiEO', 3, 'amitie.jpg', 'sbblache@gmail.com', 1, '$2y$10$edHI0EM1XNODlKMbdD3jqOKWEBv8O.fLPOrOrjC5VN05IZ2YRGkBy'),
(2, 'Petit', 'Jean', '$2y$10$0kT6hJor4HKZSyFKTcIml.sdPwUvF9b89cwnwfBq1sut969wmxpmq', 1, 'jean.png', 'petitjean@gmail.com', 5, '$2y$10$z8dXcVYb//WJMTjfqfBqyOuDyFKQPqNCdRU55RDTng9NO.O6da0PO'),
(4, 'Marthus', 'Patrick', '$2y$10$H1n5c0z6/QRLGeX2qb2nDOEaHfrT4ZAGgiMcwJgvI4udGiTkUarSO', 3, 'php-leader.jpg', 'patrickmarthus@gmail.com', 4, '$2y$10$m6C7hiAQGucd4qppB8jnI./qQ/Py82Uxp32k72IdMjO4cnav0v1H2'),
(12, 'Forever', 'Tanguy', '$2y$10$VWjUEblO5QPQJQYpt3LhM.rLNyAvM5zZNB1SutHgt90vzIx1s6bee', 2, 'images.jfif', 'tanguyforever@gmail.com', 3, '$2y$10$uyzMsPFD09NRrtpb22CnRe7w61/gUn7cp4CoiEnvhBcgoy.dR.MCC');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `bluray`
--
ALTER TABLE `bluray`
  ADD CONSTRAINT `cat` FOREIGN KEY (`cat_id`) REFERENCES `category` (`c_id`),
  ADD CONSTRAINT `type` FOREIGN KEY (`type_id`) REFERENCES `type` (`t_id`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `query` FOREIGN KEY (`query_id`) REFERENCES `secret_query` (`q_id`),
  ADD CONSTRAINT `status_users` FOREIGN KEY (`status_id`) REFERENCES `status` (`s_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
