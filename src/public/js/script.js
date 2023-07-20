// Función para calcular la edad en base a la fecha de nacimiento
function calcularEdad(fechaNacimiento) {
    if (!fechaNacimiento) {
        return {};
    }

    const hoy = new Date();
    const fechaNac = new Date(fechaNacimiento);
    let edadAnos = hoy.getFullYear() - fechaNac.getFullYear();
    let edadMeses = hoy.getMonth() - fechaNac.getMonth();

    if (
      hoy.getMonth() < fechaNac.getMonth() ||
      (hoy.getMonth() === fechaNac.getMonth() && hoy.getDate() < fechaNac.getDate())
    ) {
        edadAnos--;
        edadMeses += 12;
    }

    return { anios: edadAnos, meses: edadMeses };
}

function toggleSelectName(select, input) {
    let option = select.selectedOptions[0];
    
    if (option.value === 'otro') {
        input.name = select.name;
        input.disabled = false;
        select.name = '';
    } else if (input.name) {
        select.name = input.name;
        input.name = '';
        input.value = '';
        input.disabled = true;
    }
}

function toggleInputs(enable, inputs) {
  for (let i = 0; i < inputs.length; i++) {
      inputs[i].disabled = !enable;

      if (!enable) {
        inputs[i].value = '';
      }
  }
}

document.querySelectorAll('.fecha-nac').forEach(function (input) {
    let target = document.querySelector(input.dataset.target);

    input.addEventListener('change', function () {
        let edad = calcularEdad(this.value);
        if (edad.anios && edad.anios <= 100) {
            target.innerText = edad.anios + ' años, ' + edad.meses + ' meses';
        } else {
            target.innerText = '';
        }
    });
});

let toggleSelect = document.querySelectorAll('.toggle-name');

for (let i = 0; i < toggleSelect.length; i++) {
    let select = toggleSelect[i];
    let input = document.querySelector(select.dataset.target);

    toggleSelect[i].addEventListener('change', function () {
        toggleSelectName(select, input);
    });
}

let inputsHijos = document.querySelectorAll('.num-hijos');

document.querySelectorAll('#tieneHijosSi, #tieneHijosNo').forEach(function(i) {
    i.addEventListener('change', function () {   
        let enable = this.value === '1';
      
        toggleInputs(enable, inputsHijos);
    });
});

let inputsDisc = document.querySelectorAll('.discapacidad');

document.querySelectorAll('#tieneDiscapacidadSi, #tieneDiscapacidadNo').forEach(function(i) {
    i.addEventListener('change', function () {   
        let enable = this.value === '1';
      
        toggleInputs(enable, inputsDisc);
    });
});

document.querySelectorAll('select[data-value]').forEach(function (select) {
    let exists = false;

    for (let i = 0; i < select.options.length; i++) {
        if (select.options[i].value === select.dataset.value) {
            select.options[i].selected = true;
            exists = true;
            break;
        }
    }

    if (!exists && select.dataset.target) {
        let input = document.querySelector(select.dataset.target);

        input.value = select.dataset.value;
        input.disabled = false;

        select.options[select.options.length - 1].selected = true;
        toggleSelectName(select, input);
    }
});