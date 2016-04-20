function onLoad() {

  if (getField("txtComentarioMoodle").value == "") {
    hideRow("txtComentarioMoodle");
  }
      if(getField("txtModFab").value == "")
        hideRow("txtModFab");
         if(getField("txtID").value == "")
          hideRow("txtID");
           if(getField("txtSKUProveedor").value == "")
            hideRow("txtSKUProveedor");
             if(getField("txtDescripcionCorta").value == "")
              hideRow("txtDescripcionCorta");
               if(getField("txtModFab").value == "")
                hideRow("txtModFab");
                 if(getField("chkSerie").checked)
                  showRow("chkSerie");
                 else
                  hideRow("chkSerie");
                   if(getField("chkWeb").checked)
                     showRow("chkWeb");
                   else
                     hideRow("chkWeb");
                    if(getField("txtDOA").value == "")
                        hideRow("txtDOA");
                         if(getField("txtUtilidadMin").value == "")
                          hideRow("txtUtilidadMin");
                           if(getField("txtUtilidadMax").value == "")
                            hideRow("txtUtilidadMax");
                          

               if(getGridField("gridSustitute",1,"txtSustituto").value == "") {
                 hideRow("gridSustitute");
                 hideRow("Sustitutos");
                 }
               if(getGridField("gridRelationateProducts",1,"txtSKURelacionado").value == "") {
                 hideRow("gridRelationateProducts");
                 hideRow("subProductosRelacionados");
                 }
               if(getField("dropOpcional").value != "Virtual") {
                  hideRow("subClaveBundle");
                  hideRow("grClaveBundle");
                 }

        }
onLoad();


function btnEnvia() {
  var totalRows = Number_Rows_Grid("grLevelPrice","txtPrecio");
  if(totalRows < 6) {
    alert("Tienes que capturar 6 niveles de precios");
    getObject("grLevelPrice").addGridRow();
    setFocus(getGridField("grLevelPrice",totalRows+1,"txtPrecio"));
    return false;
    }
  }
