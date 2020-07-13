CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `idCliente` int(11) DEFAULT NULL,
  `estado` varchar(20) NOT NULL,
  `valor` bigint(20) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



CREATE TABLE `lineasVenta` (
  `id` int(11) NOT NULL,
  `idVenta` int(11) DEFAULT NULL,
  `idProducto` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `valor` bigint(20) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

