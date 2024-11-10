document.addEventListener('DOMContentLoaded', function() {
    const input = document.getElementById('input');
    const addButton = document.getElementById('boton-emter');
    const lista = document.getElementById('lista');
    const eliminarTodasBtn = document.getElementById('eliminar-todas');
    const taskSection = document.querySelector('.task-section');
    const contadorTareasPendientes = document.getElementById('contador-tareas-pendientes');
    const tacheTodasBtn = document.getElementById('tachar-todas');
    const dateElement = document.getElementById('date');

    // Mostrar la fecha actual
    const currentDate = new Date();
    const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
    const formattedDate = currentDate.toLocaleDateString('es-ES', options);
    dateElement.textContent = formattedDate;

    // Agregar tarea
    addButton.addEventListener('click', function() {
        agregarTareaDesdeInput();
    });

    input.addEventListener('keypress', function(event) {
        if (event.key === 'Enter') {
            agregarTareaDesdeInput();
        }
    });

    function agregarTarea(tarea) {
        const tareas = lista.querySelectorAll('.text');
        for (const tareaExistente of tareas) {
            if (tareaExistente.textContent.trim() === tarea) {
                alert('¡La tarea ya existe!');
                return;
            }
        }

        const li = document.createElement('li');
        const imgCheck = document.createElement('img');
        imgCheck.src = "../static/img/unchecked.png";
        imgCheck.classList.add('iconoLine');
        imgCheck.setAttribute('data-action', 'check');

        const imgModify = document.createElement('img');
        imgModify.src = "../static/img/modificar.png";
        imgModify.classList.add('iconoModify');
        imgModify.setAttribute('data-action', 'modify');

        const imgDelete = document.createElement('img');
        imgDelete.src = "../static/img/eliminar.png";
        imgDelete.classList.add('iconoClear');
        imgDelete.setAttribute('data-action', 'clear');

        const p = document.createElement('p');
        p.classList.add('text');
        p.textContent = tarea;

        li.appendChild(imgCheck);
        li.appendChild(p);
        li.appendChild(imgModify);
        li.appendChild(imgDelete);
        lista.appendChild(li);

        actualizarContadorTareasPendientes();
        mostrarTaskSection();
    }

    function agregarTareaDesdeInput() {
        const tarea = input.value.trim();
        if (tarea !== '') {
            agregarTarea(tarea);
            input.value = '';
            actualizarContadorTareasPendientes();
            mostrarTaskSection();
        }
    }

    function actualizarContadorTareasPendientes() {
        const tareasPendientes = lista.querySelectorAll('li').length;
        contadorTareasPendientes.textContent = tareasPendientes;
        if (tareasPendientes === 0) {
            ocultarTaskSection();
        }
    }

    function mostrarTaskSection() {
        if (lista.children.length > 0) {
            taskSection.style.display = 'block';
        }
    }

    function ocultarTaskSection() {
        if (lista.children.length === 0) {
            taskSection.style.display = 'none';
        }
    }

    lista.addEventListener('click', function(event) {
        const target = event.target;
        const li = target.closest('li');
        if (target.tagName === 'IMG') {
            const action = target.getAttribute('data-action');
            const p = li.querySelector('p');

            if (action === 'check') {
                p.classList.toggle('line-through');
                target.src = p.classList.contains('line-through') ? "../static/img/checked.png" : "../static/img/unchecked.png";
            } else if (action === 'clear') {
                li.remove();
                actualizarContadorTareasPendientes();
            } else if (action === 'modify') {
                p.contentEditable = true;
                p.focus();
            }
        }
    });

    tacheTodasBtn.addEventListener('click', function() {
        const tareas = lista.querySelectorAll('li');
        tareas.forEach((li) => {
            const p = li.querySelector('p');
            const imgCheck = li.querySelector('.iconoLine');
            p.classList.add('line-through');
            imgCheck.src = "../static/img/checked.png";
        });
        actualizarContadorTareasPendientes();
    });

    eliminarTodasBtn.addEventListener('click', function() {
        lista.innerHTML = '';
        actualizarContadorTareasPendientes();
        ocultarTaskSection();
    });
});
