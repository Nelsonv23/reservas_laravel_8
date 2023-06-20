
document.addEventListener('DOMContentLoaded', function () {

  let form = document.getElementById('formulario');
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
          document.getElementById('start').value = info.dateStr;
          document.getElementById('titulo').textContent = 'Registro De Reserva'

      }
  });
  calendar.render();
  form.addEventListener('submit', function(e) {
    e.preventDefault();
    const  nombre = document.getElementById('title').value;
    const  departamento = document.getElementById('departamento').value;
    const  telefono = document.getElementById('telefono').value;
    const  fecha = document.getElementById('start').value;
    
    if(nombre == '' || departamento == '' || telefono == '' || fecha == '') {
      Swal.fire({
        title: 'Aviso!',
        text: 'Todos los campos son requeridos',
        icon: 'error',
        confirmButtonText: 'Cool'
      })
    } else {
     
    }
  });

});