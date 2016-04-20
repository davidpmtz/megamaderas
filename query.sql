SELECT  LTRIM(RTRIM(prov_cve_prov)), LTRIM(RTRIM(prov_razon_soc))
FROM SIA_COM_MPC..cat_proveedor
WHERE prov_fec_baja is null
ORDER BY LTRIM ( prov_razon_soc);


SELECT DISTINCT LTRIM(RTRIM(mar_cod_mar)), LTRIM(RTRIM(mar_descrip))
FROM cat_articulos
INNER JOIN cat_marca
ON cat_articulos.art_cod_marca = cat_marca.mar_cod_mar
WHERE cat_articulos.art_fec_hor_baja IS NULL ORDER BY mar_descrip
