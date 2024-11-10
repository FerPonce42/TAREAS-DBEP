const { ApolloServer, gql } = require('apollo-server');

const typeDefs = gql`
  type Query {
    saludo(nombre: String): String
  }
`;

const resolvers = {
  Query: {
    saludo: (_, { nombre }) => {
      return `¡Hola, ${nombre || 'desconocido'}!`;
    },
  },
};

const server = new ApolloServer({
  typeDefs,
  resolvers,
});

server.listen().then(({ url }) => {
  console.log(`Servidor listo en ${url}`);
});
