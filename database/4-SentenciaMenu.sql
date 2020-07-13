CREATE TABLE `menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orden` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `icono` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `menu_rol` (
  `rol_id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;


INSERT INTO `menu` (`id`, `menu_id`, `nombre`, `url`, `orden`, `icono`, `created_at`, `updated_at`) VALUES
(1, 0, 'Admin', 'admin/admin', 1, 'fa-cog', '2019-11-29 19:10:09', '2019-11-29 19:28:14'),
(2, 1, 'Menu', 'admin/menu', 2, 'fa-align-justify', '2019-11-29 19:16:04', '2019-11-29 19:28:14'),
(3, 1, 'Menu Rol', 'admin/menu-rol', 3, 'fa-list', '2019-11-29 19:18:00', '2019-11-29 19:28:14'),
(4, 1, 'Permiso', 'admin/permiso', 4, 'fa-list-alt', '2019-11-29 19:19:47', '2019-11-29 19:28:14'),
(5, 1, 'Permiso Rol', 'admin/permiso-rol', 5, 'fa-exchange', '2019-11-29 19:22:43', '2019-11-29 19:28:14'),
(6, 1, 'Roles', 'admin/rol', 6, 'fa-briefcase', '2019-11-29 19:24:45', '2019-11-29 19:28:14'),
(7, 1, 'Usuario', 'admin/usuario', 1, 'fa-users', '2019-11-29 19:26:50', '2019-11-30 03:36:44');

INSERT INTO `menu_rol` (`rol_id`, `menu_id`) VALUES
(1, 1),
(1, 7),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7);

