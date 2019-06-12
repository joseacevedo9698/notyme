var form1 = document.getElementById('form1');
form1.addEventListener('submit',function(e) {
  e.preventDefault();
  var grado = document.getElementById('forma').value;
  var datos = new FormData();
  datos.append('grado',grado);
  fetch('../controller/buscar_est.php',{
    method : 'POST',
    body : datos
  })
    .then(res=>res.json())
    .then(data =>{
      document.getElementById('tabla').innerHTML = data;
    });
});
