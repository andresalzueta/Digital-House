CREATE TABLE `user_client_pf` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `cpf` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `cep` int(8) unsigned NOT NULL DEFAULT '0',
  `endereco` varchar(100) NOT NULL,
  `numero_endereco` int(5) NOT NULL,
  `complemento` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
