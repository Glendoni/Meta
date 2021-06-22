SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


create table images
(
    id     int auto_increment
        primary key,
    imdbID varchar(10)  not null,
    poster varchar(256) null
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

create table movies
(
    id     int auto_increment
        primary key,
    title  varchar(200) not null,
    year   int          not null,
    type   varchar(20)  not null,
    imdbId varchar(20)  not null,
    constraint movie_imdbId_uindex
        unique (imdbId)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
