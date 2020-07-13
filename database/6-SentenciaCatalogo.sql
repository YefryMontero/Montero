CREATE TABLE `catalogos` (
  `id` int(11) NOT NULL,
  `idCliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `catalogos` (`id`, `idCliente`) VALUES
(1, 1);


CREATE TABLE `productosCatalogo` (
  `id` int(11) NOT NULL,
  `idCatalogo` int(11) DEFAULT NULL,
  `idCategoria` int(11) DEFAULT NULL,
  `idProducto` int(11) DEFAULT NULL,
  `idPeso` int(11) DEFAULT NULL,
  `idUM` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `productosCatalogo` (`id`, `idCatalogo`, `idCategoria`, `idProducto`, `idPeso`, `idUM`) VALUES
(1, 1, 1, 1, 1, 2),
(2, 1, 2, 1, 1, 2),
(3, 1, 3, 1, 1, 2),
(4, 1, 4, 1, 1, 2),
(5, 2, 1, 1, 1, 2),
(6, 2, 2, 1, 1, 2),
(7, 2, 3, 1, 1, 2),
(8, 2, 4, 1, 1, 2),
(9, 7, 2, 1, 1, 2),
(10, 7, 1, 1, 1, 2),
(11, 14, 1, 1, 1, 2),
(12, 14, 2, 2, 1, 2),
(13, 14, 3, 2, 1, 2),
(14, 14, 2, 1, 1, 2),
(15, 7, 3, 1, 1, 2),
(16, 14, 3, 1, 1, 2);


CREATE TABLE `precios` (
  `id` int(11) NOT NULL,
  `idProductoCatalogo` int(11) DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `precio` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `precios` (`id`, `idProductoCatalogo`, `fecha`, `precio`) VALUES
(1, 1, '2020-05-12 07:02:24', 3500),
(2, 2, '2020-05-12 07:02:24', 3500),
(3, 3, '2020-05-12 07:02:24', 3500),
(4, 4, '2020-05-12 07:02:24', 3500),
(5, 5, '2020-05-12 07:22:56', 3500),
(6, 6, '2020-05-12 07:22:56', 3500),
(7, 7, '2020-05-12 07:22:56', 3500),
(8, 8, '2020-05-12 07:22:56', 3500),
(9, 9, '2020-05-12 07:45:32', 3500),
(10, 10, '2020-05-12 07:47:09', 3500),
(11, 11, '2020-05-13 00:27:40', 3500),
(12, 12, '2020-05-13 00:28:19', 3500),
(13, 13, '2020-05-13 00:28:47', 3500),
(14, 14, '2020-05-13 00:29:17', 3500),
(15, 15, '2020-05-13 01:53:40', 3500),
(16, 16, '2020-05-13 01:55:18', 3500);