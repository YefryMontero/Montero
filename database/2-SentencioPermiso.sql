CREATE TABLE `permiso` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;



CREATE TABLE `permiso_rol` (
  `rol_id` int(10) UNSIGNED NOT NULL,
  `permiso_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;


INSERT INTO `permiso` (`id`, `nombre`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Realizar FacturaVenta', 'realizar-pqr', NULL, NULL),
(2, 'Responder PQR', 'responder-pqr', NULL, NULL),
(3, 'Eliminar PQR', 'eliminar-pqr', NULL, NULL),
(4, 'Listar PQR', 'listar-pqr', NULL, NULL);

INSERT INTO `permiso_rol` (`rol_id`, `permiso_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(2, 3),
(2, 4),
(2, 2);


ALTER TABLE `permiso`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
