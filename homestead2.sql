use homestead;
-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-08-2018 a las 02:25:53
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.7



--


--

INSERT INTO `tickets` (`id`, `name`, `image`, `description`, `content`, `adult`, `child`, `activity_id`) VALUES
(1, 'Chichen Itza Cancun', 'ChichenCancun.png', ' Es un sitio arqueológico que no se puede perder cuando está en Cancún y hacerlo a través\ndel Hotel Mayaland es la mejor forma de explorarlo.', 'https://kooningtravel.com/img/tour/Chichen_Continuacion_Cancun.pdf', 2200.00, 1600.00, 5),
(2, 'Best Tour Chichen', 'BestTourChichen.png', 'Déjese consentir en el lujo de nuestro Mercedes Benz de puerta a puerta de transporte, en grupos nunca más grandes que un\ngrupo de 16 personas', 'https://kooningtravel.com/img/tour/Mayaland_Best_Tour_Chichen_1921.pdf', 3500.00, 2640.00, 5),
(3, 'Chichen Itza Deluxe', 'ChichenDelux.png', 'Chichén Itzá, fundada en el año 514 AC. fue alguna vez la capital de la antigua civilización Maya y recientemente fue declarada una\nde las nuevas 7 Maravillas del Mundo.', 'https://kooningtravel.com/img/tour/Chichn_Itza_Deluxe_Español.pdf', 1380.00, 990.00, 5),
(4, 'Chichen Itza Exclusive', 'ChichenExclusive.png', 'Explore más, vea más, descubra más, disfrute más y\ndiviértase más con el único tour a Chichén Itzá todo incluido en el único hotel que está tan cerca de la zona arqueológica que tiene\nsu propia entrada privada.', 'https://kooningtravel.com/img/tour/Chichn_Itza_Exclusive_.pdf', 1990.00, 1190.00, 5),
(5, 'Open Gate Chichen Itza', 'OpenGate.png', 'Sea uno de los primeros en entrar a Chichén Itzá, la\nciudad sagrada de los mayas. Disfrute de su visita con una privacidad casi total por estar allí antes de que lleguen los demás.', 'https://kooningtravel.com/img/tour/Open_Gate_Chichen_Itza.pdf', 2200.00, 1540.00, 5),
(6, 'Uxmal Luz y Sonido', 'UxmalLuzySonido.png', 'Uxmal es la más hermosa de las ciudades Prehispánicas, de estilo Puuc, que posee magníficos monumentos de la arquitectura\nClásica Maya', 'https://kooningtravel.com/img/tour/Uxmal_Show_Luz_Sonido.pdf', 1780.00, 1160.00, 6),
(7, 'Uxmal y Kabah, Choco Story', 'ChocoStory.png', 'Choco Story Museum nos muestra la manera como se cultiva este fruto, su importancia en la cultura maya y el proceso típico\nutilizado en la elaboración del chocolate.', 'https://kooningtravel.com/img/tour/Uxmal__Kabah__Choco_Story_Museum.pdf', 1780.00, 1160.00, 6),
(8, 'Celestun Flamingos', 'Celestun1.png', 'El tour ofrece al cliente el recorrido en lancha a través de la Ría y los manglares, la visita al ojo de agua, para posteriormente\ndirigirse a la localidad de Celestún donde disfrutará de la playa y de la comida en un restaurante frente al mar.', 'https://kooningtravel.com/img/tour/Celestun_Flamingos.pdf', 1780.00, 1160.00, 7),
(9, 'Tulum Parque Ecologico Tankah', 'Tankah.png', ' Disfrute del\nrecorrido dirigido por nuestro guía certificado quien le hablará sobre la historia y el misterio de la gran civilización Maya.', 'https://kooningtravel.com/img/tour/Sitio_Arqueologico_Tankah.pdf', 2400.00, 1380.00, 8),
(10, 'Cenotes Tour', 'Cenotes.png', 'Aquí\nvisitaremos los vestigios mayas dentro del pueblo, donde la estructura principal es de 11 metros de alto, decorados de máscaras\nmayas talladas en sus mismas paredes.', 'https://kooningtravel.com/img/tour/Cenotes_Tour_Yucatan_Villages.pdf', 1180.00, 760.00, 8),
(11, 'Catamaran privado Colibri', 'Catamaran1.png', '¿Quieres disfrutar del Mar Caribe con toda la privacidad y comodidad que te puedas imaginar? nuestro Catamarán-Yate te ofrece eso y mas, no te preocupes por los horarios de inicio ni de termino, eso los eliges tu, nuestros marineros les daran toda la atencion personalizada a toda tu familia, amigos o las personas con las que estes abordo, asi todos podran relajarse y disfrutar al maximo del paseo.', 'https://kooningtravel.com/img/tour/CatColibri.pdf', 12800.00, 3200.00, 9),
(12, 'Catamaran privado Eagle', 'Catamaran2.png', ' ¿Quieres venir a festejar tu cumpleaños abordo con tus amigos? ¿Quieres consentir a tus empleados con un paseo exclusivo para ellos? ¿Tienes familiares foraneos y quieren conocer el Mar Caribe comodamente? pues eso y mas nuestra tripulacion profesional con muchos años de experiencias esta lista para que te pases un dia increible.', 'https://kooningtravel.com/img/tour/CatEagle.pdf', 20000.00, 5000.00, 9),
(13, 'Catamaran Privado Toucan', 'Catamaran3.png', 'Nuestro Catamaran de Lujo \"Toucan\" cuenta con todo lo necesario para que te sientas comodo durante todo el paseo y disfrutes segundo abordo, por lo que en seguida te presentamos como esta equipado nuestro Catamara-Yate', 'https://kooningtravel.com/img/tour/CaTucan.pdf', 39200.00, 9800.00, 9),
(14, 'Holbox 3 Islas', 'holbox2.png', 'En la isla, usted puede admirar los flamencos, los pelícanos, los patos y   otras especies. Éste es uno de los pocos lugares en donde usted puede admirar los pájaros en su ambiente natural.', 'https://kooningtravel.com/img/tour/holbox.pdf', 550.00, 550.00, 10),
(15, 'Merida - Chichen Itza Deluxe', 'ChichenDelux2.png', 'Durante el\nalmuerzo el ballet regional del Hotel Mayaland ejecutará danzas acompañadas por música tradicional.', 'https://kooningtravel.com/img/tour/Chichn_Itza_Deluxe_Español.pdf', 1700.00, 1160.00, 5);

--
-- Índices para tablas volcadas
--


