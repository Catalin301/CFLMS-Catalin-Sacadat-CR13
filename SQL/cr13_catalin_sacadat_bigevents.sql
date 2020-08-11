-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 11. Aug 2020 um 20:20
-- Server-Version: 10.4.13-MariaDB
-- PHP-Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr13_catalin_sacadat_bigevents`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `admin`
--

CREATE TABLE `admin` (
  `admin_ID` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `passwort` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `admin`
--

INSERT INTO `admin` (`admin_ID`, `name`, `passwort`, `email`) VALUES
(69, 'admin', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', 'admin@admin.at');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `events`
--

CREATE TABLE `events` (
  `Event_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `event_date` date NOT NULL,
  `event_time` time DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `imgage` varchar(200) DEFAULT NULL,
  `capacity` int(11) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `postal_code` int(11) DEFAULT NULL,
  `type` varchar(30) DEFAULT NULL,
  `url` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `events`
--

INSERT INTO `events` (`Event_id`, `name`, `event_date`, `event_time`, `description`, `imgage`, `capacity`, `email`, `phone`, `address`, `city`, `postal_code`, `type`, `url`) VALUES
(1, 'phantom der oper', '2020-05-26', '19:00:00', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', 'https://media.tacdn.com/media/attractions-splice-spp-674x446/06/70/fb/a7.jpg', 500, 'phantom@oper.at', 2147483647, 'Ring 1', 'Vienna', 1010, 'musical', 'https://www.oeticket.com/artist/das-phantom-der-oper-von-und-mit-deborah-sasson/'),
(2, 'miss saigon', '2020-09-29', '19:30:00', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', 'https://www.musicalvienna.at/media/image/c640x520/18298.jpg', 450, 'miss@saigon.at', 2147483647, 'Ring 1', 'Vienna', 1010, 'musical', 'https://www.oeticket.com/artist/miss-saigon/'),
(3, 'peter pan', '2020-10-01', '19:15:00', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', 'https://ais-cf.tvnow.de/tvnow/format/18741_03artwork/1920x0/peter-pan-neue-abenteuer.jpg', 150, 'peter@pan.lat', 2147483647, 'volksoper 23', 'Vienna', 1190, 'ballett', 'https://www.volksoper.at/produktion/peter-pan-2019.de.html'),
(4, 'Mamma Mia', '2020-06-29', '18:30:00', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut la.bore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet', 'https://www.musicalvienna.at/media/image/c1280x680/242.jpg', 460, 'mamma@mia.com', 2147483647, 'Linke Wienzeile 6', 'Vienna', 1060, 'Musical', 'https://www.musicalvienna.at/de/spielplan-und-tickets/spielplan/production/9/MAMMA-MIA'),
(5, 'Aladdin', '2020-10-06', '20:30:00', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut la.bore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet', 'https://www.stage-entertainment.de/content/produktionen/ald_stu/images/header/00_ald_buehne_fallback_full.jpg', 550, 'aladdin@ali.com', 2147483647, 'aladdingasse 65', 'Stuttgard', 36521, 'Musical', 'https://www.oeticket.com/artist/disney-aladdin/'),
(6, 'Aladdin', '2020-10-07', '20:30:00', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut la.bore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet', 'https://www.stage-entertainment.de/content/produktionen/ald_stu/images/header/00_ald_buehne_fallback_full.jpg', 550, 'aladdin@ali.com', 2147483647, 'aladdingasse 65', 'Stuttgard', 36521, 'Musical', 'https://www.oeticket.com/artist/disney-aladdin/'),
(7, 'Aladdin', '2020-10-08', '20:30:00', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut la.bore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet', 'https://www.stage-entertainment.de/content/produktionen/ald_stu/images/header/00_ald_buehne_fallback_full.jpg', 550, 'aladdin@ali.com', 2147483647, 'aladdingasse 65', 'Stuttgard', 36521, 'Musical', 'https://www.oeticket.com/artist/disney-aladdin/'),
(8, 'Die Eiskönigin', '2021-05-10', '19:30:00', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut la.bore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimateta sanctus est Lorem ipsum dolor sit am', 'https://cdn.urlaubsguru.at/wp-content/uploads/2020/02/ug_kurzreisen_eiskoenigin-hamburg-2-686x339.jpg', 950, 'elsa@queen.com', 6984535, 'eisqueen str.45', 'Hamburg', 36547, 'Musical', 'https://www.stage-entertainment.de/musicals-shows/die-eiskoenigin-hamburg'),
(9, 'The Greatest Showman', '2021-03-15', '19:45:00', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut la.bore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimateta sanctus est Lorem ipsum dolor sit am', 'https://media1.jpc.de/image/w600/front/0/0075678659270.jpg', 360, 'show@greatest.com', 369854723, 'Greatstr. 36', 'Vienna', 1060, 'Musical', 'https://www.wien-ticket.at/de/ticket/63616/die-groessten-musical-hits-aller-zeiten-2020-wiener-stadthalle-wiener-stadthalle-halle-f-wien'),
(10, 'Sunrise Avenue', '2021-05-02', '19:30:00', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut la.bore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimateta sanctus est Lorem ipsum dolor sit am', 'https://i1.wp.com/themellowmusic.com/wp-content/uploads/2019/12/Sunrise-Avenue-2019-CMS-Source.jpg?fit=1200%2C800&ssl=1', 900, 'sunrise@avenue.com', 2147483647, 'Avenuestr. 55', 'Vienna', 1030, 'Music', 'https://www.viagogo.at/Konzert-Tickets/Rock-und-Pop/Sunrise-Avenue-Karten?AffiliateID=49&adposition=&PCID=PSATGOOKONSUNRI889C891905&AdID=431974099379&MetroRegionID=&psc=%2c&ps=cy-7808%7cmr-208&ps_p=0&'),
(11, 'Community Ride Wien', '2020-08-15', '11:00:00', 'Hi liebe #foodspringfamily,  wir kommen mal wieder nach Wien! Gemeinsam mit Supercycle bieten wir euch eine kostenlose Outdoor Dance-Cycling Class direkt an der Donau an. Das ideale Sportprogramm für den Sommer. Schwitzen und Tanning zur gleichen Zeit! Eine foodspring Goodie Bag wird es im Anschluss natürlich auch geben.  Bitte kommt ca. 20-30 Min. vor dem Workout. Bringt für eine bessere Soundqualität Kopfhörer und euer Handy mit. In Vorbereitung könnt ihr euch auch schon die itour SmartGuide App dowloaden. Genügend Wasser, Sonnencreme und ein Sonnenschutz für den Kopf können auch nicht schaden ;)', 'https://www.umweltbundesamt.de/sites/default/files/medien/376/bilder/fahrradfahren_bildautor_zozzzzo_fotolia_107428778_m_0.jpg', 900, 'wien@ride.com', 2147483647, 'Donaukanal 5', 'Vienna', 1010, 'Sport', 'https://www.eventbrite.de/e/community-ride-wien-tickets-115979346347?aff=ebdssbdestsearch');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_ID`);

--
-- Indizes für die Tabelle `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`Event_id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT für Tabelle `events`
--
ALTER TABLE `events`
  MODIFY `Event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
