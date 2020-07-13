
CREATE TABLE `rol` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

INSERT INTO `rol` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', '2019-11-30 01:46:17', NULL),
(2, 'Secreataria', '2019-11-30 01:46:17', NULL),
(3, 'Empleado', '2019-11-30 01:46:17', NULL),
(4, 'Cliente', '2019-11-30 01:46:17', NULL);


CREATE TABLE `usuario_rol` (
  `rol_id` int(10) UNSIGNED NOT NULL,
  `usuario_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;


INSERT INTO `usuario_rol` (`rol_id`, `usuario_id`) VALUES
(1, 1);

