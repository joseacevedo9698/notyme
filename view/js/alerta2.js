var form1 = document.getElementById('form1');
form1.addEventListener('submit',function(e) {
  e.preventDefault();
  var nombre = document.getElementById('nombre').value;
  var email = document.getElementById('email').value;
  var mensaje = document.getElementById('mensaje').value;
  var datos = new FormData();
  datos.append('nombre',nombre);
  datos.append('email',email);
  datos.append('mensaje',mensaje);
  fetch('controller/enviar.php'),{
    method : 'POST',
    body : datos
  })
    .then(res=>res.json())
    .then(data =>{
      if (data ==(1)){
          alert("Se ha enviado el mensaje, Gracias")
      }
      else if (data ==(0)){
          alert("Ha ocurrido un error, intentalo mas tarde")
      }
    });
});
