SELECT
    tbl_detailtoko.id_detailtoko
    , tbl_detailtoko.id_toko
    , tbl_toko.nama_toko
    , tbl_detailtoko.id_alatmusik
    , tbl_alatmusik.nama_alatmusik
    , tbl_alatmusik.merek
    , tbl_alatmusik.jenis_alatmusik
    , tbl_alatmusik.produksi
FROM
    sigmusik.tbl_detailtoko
    INNER JOIN sigmusik.tbl_toko 
        ON (tbl_detailtoko.id_toko = tbl_toko.id_toko)
    INNER JOIN sigmusik.tbl_alatmusik 
        ON (tbl_detailtoko.id_alatmusik = tbl_alatmusik.id_alatmusik);