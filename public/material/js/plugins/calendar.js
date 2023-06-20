
document.addEventListener('DOMContentLoaded', function () {

  var form = document.getElementById('formulario');
  var calendarEl = document.getElementById('calendar');
  var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      selectable: true,
      timeZone: 'local',
      locale: 'es',
      headerToolbar: {
          today: 'today',
          left: 'prev,next today',
          center: 'title',
          right: 'dayGridMonth,timeGridWeek,listWeek'
      },
      dateClick: function (info) {
        $("#myModal").modal("show");
        document.getElementById('titulo').textContent = 'Registro De Reserva'
          document.getElementById('start').value = info.dateStr;


      }
  });
  calendar.render();
  
  document.getElementById("btnGuardar").addEventListener('click', function (e) {
    e.preventDefault();
    
    const nombre = document.getElementById('title').value;
    const departamento = document.getElementById('departamento').value;
    const telefono = document.getElementById('telefono').value;
    const fecha = document.getElementById('start').value;
  
    // Crear objeto con los datos a enviar
    const data = {
      nombre: nombre,
      departamento: departamento,
      telefono: telefono,
      fecha: fecha
    };
  
    // Enviar los datos al servidor utilizando AXIOS
    axios.post("http://127.0.0.1:8000/evento/agregar", form).then((respuesta) => {
      $("#evento").modal("hide");
    }
    ).catch(
      error => {
        if(error.response){
          console.log(error.response.data);
        }
      }
    )
});
  
});