fetch('https://jsonplaceholder.typicode.com/posts')
  .then(response => {
    if (!response.ok) {
      throw new Error(`HTTP error! Código: ${response.status}`);
    }
    return response.json();
  })
  .then(data => {
    console.log('Datos recibidos:', data);
  })
  .catch(error => {
    console.error('Error al hacer la petición:', error.message);
  });

  
  