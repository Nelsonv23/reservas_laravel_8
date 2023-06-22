document.addEventListener('DOMContentLoaded', function () {
    let formulario = document.querySelector("form");
    var cancelarBtn = document.getElementById('btnCancelar');
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
            const fecha =
            document.getElementById('start').value = info.dateStr;
        }
        
    });
    btnCancelar.addEventListener('click', function() {
        // Cerrar el modal usando Bootstrap o la biblioteca que estés utilizando
        $('#myModal').modal('hide');
      });
    calendar.render();
});
