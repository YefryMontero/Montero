CREATE TABLE `usuario` (
  `id` int(10) UNSIGNED NOT NULL,
  `usuario` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_spanish_ci NOT NULL,
  `lastName` varchar(150) COLLATE utf8mb4_spanish_ci NOT NULL,
  `typeID` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_spanish_ci NOT NULL,
  `email`varchar(150) COLLATE utf8mb4_spanish_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;


INSERT INTO `usuario` (`id`, `usuario`, `password`, `nombre`, `email`, `numTelefono`,`created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$h0kaA2Grr6NSMr6HWh1tGufBA22yYvYj3HbN0nc/75K4T4F4lGQ42', 'Administrador', 'prueban@gmail.com', '3128713635',NULL, NULL);





---Omitir esta parte---
INSERT INTO `clientes` (`id`, `numTel`, `nombre`, `credito_limite`, `saldo`, `estadoCatalogo`, `created_at`) VALUES
(1, NULL, 'Yefry Alejandro', 50000, 0, 'Sin Catalogo', '2020-05-12 07:02:21'),
(2, NULL, 'Clara Gomez', 50000, 0, 'Sin Catalogo', '2020-05-12 07:02:21'),
(3, NULL, 'Jorge Gomez', 50000, 0, 'Sin Catalogo', '2020-05-12 07:02:21'),
(4, NULL, 'Lucely Gomez', 50000, 0, 'Sin Catalogo', '2020-05-12 07:02:21'),
(5, NULL, 'Jeison Gomez', 50000, 0, 'Sin Catalogo', '2020-05-12 07:02:21'),
(6, NULL, 'Brayan Ortega', 50000, 0, 'Sin Catalogo', '2020-05-12 07:02:21'),
(7, NULL, 'Adolfo Gomez', 50000, 0, 'Sin Catalogo', '2020-05-12 07:02:21'),
(8, NULL, 'Federico', 50000, 0, 'Sin Catalogo', '2020-05-12 07:02:21'),
(9, NULL, 'Katy Cuenca', 50000, 0, 'Sin Catalogo', '2020-05-12 07:02:21'),
(10, NULL, 'Dario Gomez', 50000, 0, 'Sin Catalogo', '2020-05-12 07:02:21'),
(11, NULL, 'Ricardor Gomez', 50000, 0, 'Sin Catalogo', '2020-05-12 07:02:21'),
(12, NULL, 'Luisa Cuetia', 50000, 0, 'Sin Catalogo', '2020-05-12 07:02:21'),
(13, NULL, 'Nelly Perea', 50000, 0, 'Sin Catalogo', '2020-05-12 07:02:21'),
(14, NULL, 'Adrian Grajales', 50000, 0, 'Sin Catalogo', '2020-05-12 07:02:21'),
(15, NULL, 'Laura Gomez', 50000, 0, 'Sin Catalogo', '2020-05-12 07:02:21'),
(16, NULL, 'Alberto Velasco', 50000, 0, 'Sin Catalogo', '2020-05-12 07:02:21'),
(17, NULL, 'Yamilet Guerra', 50000, 0, 'Sin Catalogo', '2020-05-12 07:02:21'),
(18, NULL, 'Einer Solarte', 50000, 0, 'Sin Catalogo', '2020-05-12 07:02:21'),
(19, NULL, 'Edwin Perea', 50000, 0, 'Sin Catalogo', '2020-05-12 07:02:21'),
(20, NULL, 'Marino Gomez', 50000, 0, 'Sin Catalogo', '2020-05-12 07:02:21'),
(21, NULL, 'Lina 	Arebalo', 50000, 0, 'Sin Catalogo', '2020-05-12 07:02:21'),
(22, NULL, 'Gilmar Quintero', 50000, 0, 'Sin Catalogo', '2020-05-12 07:02:21'),
(23, NULL, 'Cristian Gomez', 50000, 0, 'Sin Catalogo', '2020-05-12 07:02:21'),
(24, NULL, 'Robinson Barco', 50000, 0, 'Sin Catalogo', '2020-05-12 07:02:21'),
(25, NULL, 'Blanca Gomez', 50000, 0, 'Sin Catalogo', '2020-05-12 07:02:21'),
(26, NULL, 'Yolanda Arevalo', 50000, 0, 'Sin Catalogo', '2020-05-12 07:02:21'),
(27, NULL, 'Uriel Grajales', 50000, 0, 'Sin Catalogo', '2020-05-12 07:02:21'),
(28, NULL, 'Yamileth Cuetia', 50000, 0, 'Sin Catalogo', '2020-05-12 07:02:21'),
(29, NULL, 'Julian Perea', 50000, 0, 'Sin Catalogo', '2020-05-12 07:02:21'),
(30, NULL, 'Rubiela Moreno', 50000, 0, 'Sin Catalogo', '2020-05-12 07:02:21'),
(31, NULL, 'Karen Solarte', 50000, 0, 'Sin Catalogo', '2020-05-12 07:02:21'),
(32, NULL, 'Jailer Gomez', 50000, 0, 'Sin Catalogo', '2020-05-12 07:02:21'),
(33, NULL, 'Flor Garcia', 50000, 0, 'Sin Catalogo', '2020-05-12 07:02:21'),
(34, NULL, 'Alberto Arevalo', 50000, 0, 'Sin Catalogo', '2020-05-12 07:02:21'),
(35, NULL, 'Magali Truyo', 50000, 0, 'Sin Catalogo', '2020-05-12 07:02:21'),
(36, NULL, 'Fabian Montero', 50000, 0, 'Sin Catalogo', '2020-05-12 07:02:21'),
(37, NULL, 'Sandra Solarte', 50000, 0, 'Sin Catalogo', '2020-05-12 07:02:21'),
(38, NULL, 'Kendra Cuetia', 50000, 0, 'Sin Catalogo', '2020-05-12 07:02:21'),
(39, NULL, 'Margarita Aguirre', 50000, 0, 'Sin Catalogo', '2020-05-12 07:02:21'),
(40, NULL, 'Bairon Cuetia', 50000, 0, 'Sin Catalogo', '2020-05-12 07:02:21'),
(41, NULL, 'Valeria Alegria', 50000, 0, 'Sin Catalogo', '2020-05-12 07:02:21'),
(42, NULL, 'Luz Angela Montero', 50000, 0, 'Sin Catalogo', '2020-05-12 07:02:21'),
(43, NULL, 'Yurani Perea', 50000, 0, 'Sin Catalogo', '2020-05-12 07:02:21'),
(44, NULL, 'Andres Chavez', 50000, 0, 'Sin Catalogo', '2020-05-12 07:02:21'),
(45, NULL, 'Heiber Gomez', 50000, 0, 'Sin Catalogo', '2020-05-12 07:02:21');
