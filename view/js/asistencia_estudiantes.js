console.log("hola perro");
var form1 = document.getElementById('formu');
form1.addEventListener('submit',function(e) {
    e.preventDefault();
    var count = document.getElementById('cantidad').innerHTML;
    if (confirm('¿Esta seguro que desea actualizar los datos?')){
      console.log('me diste click');
      for (var i = 0; i < count; i++) {
      if (($("input[name=asist"+i+"]:checked")).val()=="no") {
        var datos = new FormData();
        var valor = document.getElementById('cod_ha'+i).innerHTML;
        var valor2 = document.getElementById('cod_est'+i).innerHTML;
        datos.append('codigos',valor);
        datos.append('codigos2',valor2);
        fetch('../controller/guardar_asist_controller.php',{
          method : 'POST',
          body : datos
        })
          .then(res=>res.json())
          .then(data =>{
            console.log(data)
          });
        };
      };
      alert("Se han Guardado todos los cambios");
      location.reload(true);
    };
  });

  form1.addEventListener('reset',function(e) {
    e.preventDefault();
    if (confirm("¿Esta seguro que desea cancelar?")) {
      alert("Se han cancelado todos los cambios");
      location.reload(true);
    }
  })
