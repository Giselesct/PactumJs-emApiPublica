// test.js
const { spec } = require('pactum');

it('Pesquisando Imagens', async () => {
  await spec()
    .get('https://api.thecatapi.com/v1/images/search?limit=10')
    .expectStatus(200);
});




it('Pesquisa com Filtro', async () => {
  await spec()
    .get('https://api.thecatapi.com/v1/images/search?limit=10&breed_ids=beng&api_key=REPLACE_ME')
    .expectStatus(200);
});


it('Pesquisa simples', async () => {
  await spec()
    .get('https://api.thecatapi.com/v1/images/search')
    .expectStatus(200);
});

it('Pesquisa buscando 11 registros', async () => {
  await spec()
    .get('https://api.thecatapi.com/v1/images/search?limit=11')
    .expectStatus(200);
});
it('Pesquisa buscando acima do limite estipulado pela aplicação.Bug encontrado', async () => {
  await spec()
    .get('https://api.thecatapi.com/v1/images/search?limit=102')
    .expectStatus(200);
});
//coloquei esta função para ter um report legal em formato html