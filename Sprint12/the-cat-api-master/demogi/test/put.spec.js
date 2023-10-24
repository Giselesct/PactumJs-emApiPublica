// test.js
const { spec } = require('pactum');

it('Editando Raças de Gato', async () => {
  const postRequestBody={
"nome": 'Siamês',
"status": true,
"dataCriacao": '2023-07-31T00:52:28.834Z'
};

await spec()
  .put('https://api.thecatapi.com/v1/images/search?limit=10')
  .expectStatus(401);
});

it('Editando tipos de Gato', async () => {
  const postRequestBody={
"nome": 'Gato de Botas',
"status": true,
"dataCriacao": '2023-07-31T00:52:28.834Z'
};

await spec()
  .put('https://api.thecatapi.com/v1/images/search?limit=9')
  .expectStatus(401);
});