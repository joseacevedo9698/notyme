var form1 = document.getElementById('form1');
form1.addEventListener('submit',function(e) {
  e.preventDefault();
    console.log("ño");
  var asunto = document.getElementById('asunto').value;
  var mensaje = document.getElementById('mensaje').value;
  var datos = new FormData();
  datos.append('asunto',asunto);
  datos.append('mensaje',mensaje);
  fetch('../controller/enviar2.php',{
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
