// test.js
const { spec } = require('pactum');

it('Deletando Informações', async () => {
  await spec()
    .delete('https://api.thecatapi.com/v1/images/search?limit=10/id=1')
    .expectStatus(401);
});
