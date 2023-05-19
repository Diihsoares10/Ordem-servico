// Seleciona os elementos do formulário
const form = document.getElementById('register-form');
const nameInput = document.getElementById('name');
const cpfInput = document.getElementById('cpf');
const phoneInput = document.getElementById('phone');
const cepInput = document.getElementById('cep');
const bairroInput = document.getElementById('bairro');


// Adiciona um listener para o evento "input" no campo de nome
nameInput.addEventListener('input', () => {
  nameInput.value = nameInput.value.replace(/[^a-zA-ZÀ-ú ]/g, '');
});

// Adiciona um listener para o evento "input" no campo de CPF
cpfInput.addEventListener('input', () => {
  cpfInput.value = cpfInput.value.replace(/\D/g, '');
});

// Adiciona um listener para o evento "input" no campo de telefone
phoneInput.addEventListener('input', () => {
  phoneInput.value = phoneInput.value.replace(/\D/g, '');
});

// Adiciona um listener para o evento "input" no campo de CEP
cepInput.addEventListener('input', () => {
  cepInput.value = cepInput.value.replace(/\D/g, '');
});

// Adiciona um listener para o evento "submit" no formulário
form.addEventListener('submit', (event) => {
  const inputs = form.querySelectorAll('input[data-required]');
  let hasError = false;

  // Verifica se há algum campo em branco
  for (const input of inputs) {
    if (input.value.trim() === '') {
      input.classList.add('error');
      hasError = true;
    } else {
      input.classList.remove('error');
    }
  }

  // Impede o envio do formulário se houver campos em branco
  if (hasError) {
    event.preventDefault();
    alert('Por favor, preencha todos os campos.');
  }
});

// Adiciona um listener para o evento "blur" no campo de CEP
cepInput.addEventListener('blur', function () {
    const cepValue = cepInput.value;
  
    // Faz uma requisição AJAX para a API do ViaCEP
    fetch(`https://viacep.com.br/ws/${cepValue}/json/`)
      .then(response => response.json())
      .then(data => {
        // Preenche os campos de endereço com os valores retornados pela API
        document.getElementById('address').value = data.logradouro;
        bairroInput.value = data.bairro;
        document.getElementById('reference').value = '';
      })
      .catch(error => {
        console.error('Erro ao obter o endereço:', error);
      });
  });
