DELIMITER $$

USE `sigmusik`$$

DROP VIEW IF EXISTS `vw_detail`$$

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_detail` AS (
SELECT
  `tbl_detailtoko`.`id_detailtoko`  AS `id_detailtoko`,
  `tbl_detailtoko`.`id_toko`        AS `id_toko`,
  `tbl_toko`.`nama_toko`            AS `nama_toko`,
  `tbl_detailtoko`.`id_alatmusik`   AS `id_alatmusik`,
  `tbl_alatmusik`.`nama_alatmusik`  AS `nama_alatmusik`,
  `tbl_alatmusik`.`merek`           AS `merek`,
  `tbl_alatmusik`.`jenis_alatmusik` AS `jenis_alatmusik`,
  `tbl_alatmusik`.`produksi`        AS `produksi`,
  `tbl_detailtoko`.`harga`        AS `harga`,
  `tbl_detailtoko`.`keterangan`        AS `keterangan`
FROM ((`tbl_detailtoko`
    JOIN `tbl_toko`
      ON ((`tbl_detailtoko`.`id_toko` = `tbl_toko`.`id_toko`)))
   JOIN `tbl_alatmusik`
     ON ((`tbl_detailtoko`.`id_alatmusik` = `tbl_alatmusik`.`id_alatmusik`))))$$

DELIMITER ;