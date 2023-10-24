// test.js
const { spec} = require('pactum');

it('Inserindo Gato de Rua', async () => {
    const postRequestBody={
  "nome": 'Gato de rua',
  "status": true,
  "dataCriacao": '2023-07-31T00:52:28.834Z'
  };

  await spec()
    .post('https://api.thecatapi.com/v1/images/search')
    .expectStatus(401);
});

it('Inserindo Gato adestrado', async () => {
  const postRequestBody={
"nome": 'Gato adestrado',
"status": true,
"dataCriacao": '2023-07-31T00:52:28.834Z'
};

await spec()
  .post('https://api.thecatapi.com/v1/images/search')
  .expectStatus(401);
});

