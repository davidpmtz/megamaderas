function onLoadDyna() {

  if(getField("vchExcel").value != "")
    showRow("linkDocumentoEXC");
  else
    hideRow("linkDocumentoEXC");

  if(getGridField("gridSustitute",1,"txtSustituto").value == "") {
    hideRow("gridSustitute");
    hideRow("Sustitutos");
  }

  if(getField("txtComentarioMoodle").value == "")
    hideRow("txtComentarioMoodle");
  else
    showRow("txtComentarioMoodle");

  if(getGridField("gridRelationateProducts",1,"txtSKURelacionado").value == "") {
    hideRow("gridRelationateProducts");
    hideRow("subProductosRelacionados");
  }

  getField("dropRespuesta").value = "Autorizado";
  if(getField("chkWeb").checked)
    showRow("chkWeb");
  else
    hideRow("chkWeb");

  if(getField("chkSerie").checked)
    showRow("chkSerie");
  else
    hideRow("chkSerie");

  if(getField("dropOpcional").value != "Virtual") {
     hideRow("subClaveBundle");
     hideRow("grClaveBundle");
    }
  if(getField("txtModFab").value =="")
    hideRow("txtModFab");


  if(getField("txtDOA").value == "")
    hideRow("txtDOA");


  if (getField("txtUtilidadMin").value == "")
    hideRow("txtUtilidadMin");

  if (getField("txtUtilidadMax").value == "")
    hideRow("txtUtilidadMax");

  if (getField("txtID").value == "")
    hideRow("txtID");

  if (getField("txtSKUProveedor").value == "")
    hideRow("txtSKUProveedor");

  if (getField("txtDescripcionCorta").value == "")
    hideRow("txtDescripcionCorta");

  if (getField("txtUPC").value == "")
    hideRow("txtUPC");

  if (getField("txtFABS").value == "")
    hideRow("txtFABS");

  if(getField("txtVarHidden").value != "OK")  {
    hideRow("subHOLA");
    hideRow("tittleComprador");
    hideRow("dropTarea");
    hideRow("txtComprador");
    removeRequiredById("txtComprador");
    hideRow("chkMoodle");
    hideRow("chkPublicidad");
    hideRow("toDO");
    hideRow("subMoodle");
  } else {
    hideRow("dropRespuesta");
    hideRow("txtComentario");
    hideROW("subaltaProducto");
    enableRequiredById("txtComprador");
    showRow("txtComprador");
    showRow("dropTarea");
    showRow("tittleComprador");
    showRow("subNivel");
    enableRequiredById("txtPrecio");
    enableRequiredById("txtPorcentaje");
  }
  hideRow("txtUserId");
  hideRow("txtPuntoVenta");
  hideRow("txtAlmacen");
  hideRow("txtAlmacenDesc");
  hideRow("tittleComprador");
  hideRow("txtComprador");
  removeRequiredById("txtComprador");

 }

onLoadDyna();



//Funcion de envio de form
function enviaForm() {

  if (getField("dropRespuesta").value == "Autorizado") {
   getField("txtVarHidden").value = "OK";
  }

   }

//fin funcion

function comentario() {

  if (getField("dropRespuesta").value == "Autorizado") {
    removeRequiredById('txtComentario');
    hideRow("txtComentario");
  }
  else {
    enableRequiredById('txtComentario');
    showRow("txtComentario");
  }
}

dynaformOnload = comentario;
getField("dropRespuesta").onchange = comentario;
