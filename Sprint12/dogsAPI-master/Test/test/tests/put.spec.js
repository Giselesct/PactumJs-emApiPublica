// test.js
const { spec } = require('pactum');

it('Editando Informações', async () => {
  const postRequestBody={
"nome": 'da gigi',
"status": true,
"dataCriacao": '2023-07-31T00:52:28.834Z'
};

await spec()
  .put('https://api.thecatapi.com/v1/images/search?limit=10')
  .expectStatus(401);
});