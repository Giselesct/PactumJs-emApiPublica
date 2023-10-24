// test.js
const { spec } = require('pactum');

it('Filtrando a pesquisa em limite de quantidade', async () => {
  await spec()
    .get('https://api.thecatapi.com/v1/images/search?limit=10')
    .expectStatus(200);
});


it('Pesquisa geral', async () => {
  await spec()
    .get('https://api.thecatapi.com/v1/images/search')
    .expectStatus(200);
});

it('Pesquisando todas as raças', async () => {
  await spec()
    .get('https://api.thecatapi.com/v1/breeds')
    .expectStatus(200);
});

it('Apenas para gatos de bengala', async () => {
  await spec()
    .get('https://api.thecatapi.com/v1/images/search?breed_ids=beng')
    .expectStatus(200);
});