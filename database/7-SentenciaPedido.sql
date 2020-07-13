CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `idCliente` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `estado` varchar(30) NOT NULL,
  `valor` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `pedidos` (`id`, `idCliente`, `created_at`, `estado`, `valor`) VALUES
(1, 5, '2020-05-12 07:02:24', 'No Entregado', 3500);


CREATE TABLE `lineasPedido` (
  `id` int(11) NOT NULL,
  `idPedido` int(11) DEFAULT NULL,
  `idProducto` int(11) DEFAULT NULL,
  `cantidad` int(11) NOT NULL,
  `valor` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `lineasPedido` (`id`, `idPedido`, `idProducto`, `cantidad`, `valor`) VALUES
(1, 1, 1, 1, 3500);
