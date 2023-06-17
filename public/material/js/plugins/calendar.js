
document.addEventListener('DOMContentLoaded', function () {
    let formulario = document.querySelector("form");
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
            $("#evento").modal("show");
        }
    });
    calendar.render();
    document.getElementById("btnGuardar").addEventListener("click", function () {
        const datos = new FormData(formulario);
        console.log(datos);
        console.log(document.getElementById("id", "departamento", "nombre", "start", "end").value);

        axios.post("http://127.0.0.1:8000/evento/agregar", datos).then((respuesta) => {
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
