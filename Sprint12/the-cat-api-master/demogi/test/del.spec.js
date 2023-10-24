// test.js
const { spec } = require('pactum');

it('Deletando dados', async () => {
  await spec()
    .delete('https://api.thecatapi.com/v1/images/search?limit=10')
    .expectStatus(401);
});

it('Deletando dados ', async () => {
    await spec()
      .delete('https://api.thecatapi.com/v1/images/search?limit=8')
      .expectStatus(401);
  });
  