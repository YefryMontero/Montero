
CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `productos` (`id`, `nombre`, `created_at`) VALUES
(1, 'Tomate', '2020-05-12 07:02:22'),
(2, 'Pepino', '2020-05-12 07:02:22'),
(3, 'Pimenton', '2020-05-12 07:02:22');


CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `categorias` (`id`, `nombre`) VALUES
(1, 'Malla'),
(2, 'Granel'),
(3, 'Gato'),
(4, 'Parejo');


CREATE TABLE `pesos` (
  `id` int(11) NOT NULL,
  `peso` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `pesos` (`id`, `peso`) VALUES
(1, 125),
(2, 6);


CREATE TABLE `unidadMedidas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `unidadMedidas` (`id`, `nombre`) VALUES
(1, 'Kilogramos'),
(2, 'Gramos');
