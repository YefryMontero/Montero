
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `pesos`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `unidadMedidas`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `catalogos`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `productosCatalogo`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `precios`
  ADD PRIMARY KEY (`id`);


  ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `lineasPedido`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `lineasVenta`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `permiso`
  ADD PRIMARY KEY (`id`);

  ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rol_nombre_unique` (`nombre`);


ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario_usuario_unique` (`usuario`),
  ADD UNIQUE KEY `usuario_email_unique` (`email`);



ALTER TABLE `pesos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
ALTER TABLE `unidadMedidas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
ALTER TABLE `catalogos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
ALTER TABLE `productosCatalogo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
ALTER TABLE `precios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
ALTER TABLE `menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
ALTER TABLE `lineasPedido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `rol`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `usuario`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

  ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

ALTER TABLE `lineasVenta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `menu_rol`
  ADD KEY `fk_menurol_rol` (`rol_id`),
  ADD KEY `fk_menurol_menu` (`menu_id`);

ALTER TABLE `menu_rol`
  ADD CONSTRAINT `fk_menurol_menu` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_menurol_rol` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`id`);



ALTER TABLE `usuario_rol`
  ADD KEY `fk_usuariorol_rol` (`rol_id`),
  ADD KEY `fk_usuariorol_usuario` (`usuario_id`);


ALTER TABLE `usuario_rol`
  ADD CONSTRAINT `fk_usuariorol_rol` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`id`),
  ADD CONSTRAINT `fk_usuariorol_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`);


ALTER TABLE `permiso_rol`
  ADD KEY `fk_permisorol_rol` (`rol_id`),
  ADD KEY `fk_permisorol_permiso` (`permiso_id`);

ALTER TABLE `permiso_rol`
  ADD CONSTRAINT `fk_permisorol_permiso` FOREIGN KEY (`permiso_id`) REFERENCES `permiso` (`id`),
  ADD CONSTRAINT `fk_permisorol_rol` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`id`);
